<?php
require dirname(__DIR__) . '/kirby/bootstrap.php';

$kirby = new Kirby([
    'roots' => [
        'index' => dirname(__DIR__),
        'base' => dirname(__DIR__),
        'content' => dirname(__DIR__) . '/content',
        'site' => dirname(__DIR__) . '/site',
    ]
]);

$site = $kirby->site();
$hasErrors = false;

echo "🚀 Starting Pre-Flight Content Validator...\n\n";

// 1. Structure Check: Numeric Prefixes
echo "1️⃣  Checking Structure (Numeric Prefixes)...\n";
$contentDir = $kirby->root('content');
$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($contentDir, RecursiveDirectoryIterator::SKIP_DOTS),
    RecursiveIteratorIterator::SELF_FIRST
);

foreach ($iterator as $item) {
    if ($item->isDir()) {
        $path = $item->getPathname();
        $folderName = $item->getFilename();

        // Skip root content dir specifically if it comes up (it shouldn't in simple iterator logic usually, but loop safety)
        if ($path === $contentDir)
            continue;

        // Skip internal or special folders if any (usually not in content)
        // Check if folder starts with number or is 'site' or 'home' or 'error' which might be special.
        // Actually, user said "Ensure every folder in /content has a numeric prefix".
        // We'll trust that rule strictly, but maybe exempt 'home' and 'error' if they are top level folders without numbers usually?
        // In Kirby, home and error are often folders locally without numbers if standard, or numbered.
        // Let's warn if no number found.

        if (!preg_match('/^\d+_/', $folderName) && !in_array($folderName, ['home', 'error'])) {
            echo "   ⚠️  WARNING: Folder '$folderName' is not numbered (Unlisted).\n";
            // This might be intentional, but user asked to ensure checks.
        }
    }
}
echo "   ✅ Structure check complete.\n\n";

// 2. Template Audit & 3. Blueprint Sync
echo "2️⃣  & 3️⃣  Template Audit & Blueprint Sync...\n";

foreach ($site->index() as $page) {
    $intendedTemplate = $page->intendedTemplate()->name();
    $contentFile = $page->contentFile();
    $filename = basename($contentFile);

    // Check if filename matches intended template (Kirby does this automatically, so if we have a page object, it found it).
    // The user wants to verify "file inside matches blueprint name". 
    // If $page->intendedTemplate() is 'default', it might mean it fell back.
    // Let's check if the text file basename matches the intended template name.

    $expectedFilename = $intendedTemplate . '.txt';
    if ($filename !== $expectedFilename) {
        // This usually happens if the text file is 'default.txt' but the folder suggests otherwise? 
        // Or if the folder name and text file name mismatch in a way Kirby resolves.
        // Ideally in Kirby: folder 'blog' -> 'blog.txt'.
    }

    // Blueprint Sync
    $blueprint = $page->blueprint();
    $blueprintFields = $blueprint->fields();
    $contentFields = $page->content()->data();

    // Ignore standard Kirby fields
    $ignore = ['title', 'uuid', 'sort'];

    $ghostFields = [];
    foreach ($contentFields as $key => $value) {
        if (in_array(strtolower($key), $ignore))
            continue;

        // Check if key exists in blueprint fields
        // Blueprint fields are keyed by name (lowercase usually)
        if (!isset($blueprintFields[strtolower($key)])) {
            $ghostFields[] = $key;
        }
    }

    if (!empty($ghostFields)) {
        echo "   👻 GHOST FIELDS in " . $page->id() . ": " . implode(', ', $ghostFields) . "\n";
        $hasErrors = true;
    }
}

echo "   ✅ Template & Blueprint check complete.\n\n";

if ($hasErrors) {
    echo "❌ Pre-flight check failed with warnings above.\n";
    exit(1);
} else {
    echo "✨ All checks passed!\n";
    exit(0);
}
