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
echo "🕷️  Starting Broken Link Scanner...\n\n";

$brokenLinks = [];

// Iterate all pages
foreach ($site->index() as $page) {
    echo "Processing: " . $page->url() . "\n";

    // Render page to find real output links
    try {
        $html = $page->render();
    } catch (Exception $e) {
        echo "   ❌ Error rendering page: " . $e->getMessage() . "\n";
        continue;
    }

    // Find all hrefs and srcs
    // Simple regex for href="..." and src="..."
    preg_match_all('/(href|src)=["\']([^"\']+)["\']/', $html, $matches);

    $links = array_unique($matches[2]);
    $siteUrl = $site->url();

    foreach ($links as $link) {
        // Skip anchors, mailto, tel
        if (strpos($link, '#') === 0 || strpos($link, 'mailto:') === 0 || strpos($link, 'tel:') === 0)
            continue;

        // Normalize link
        $isInternal = false;
        $checkPath = '';

        if (strpos($link, $siteUrl) === 0) {
            // Absolute internal link
            $isInternal = true;
            $checkPath = substr($link, strlen($siteUrl));
        } elseif (strpos($link, 'http') !== 0 && strpos($link, '//') !== 0) {
            // Relative link
            $isInternal = true;
            $checkPath = $link;
        }

        if ($isInternal) {
            // Remove query params/anchors for checking
            $checkPathClean = strtok($checkPath, '?');
            $checkPathClean = strtok($checkPathClean, '#');

            // Trim slashes
            $checkPathClean = ltrim($checkPathClean, '/');

            // Check if it's a page
            $targetPage = $kirby->page($checkPathClean);

            // Check if it's a file
            $isFile = false;
            $filePath = $kirby->root('index') . '/' . $checkPathClean;
            if (file_exists($filePath) && !is_dir($filePath)) {
                $isFile = true;
            }

            // Also check media URLs if they are resolved (Kirby media urls are complex, but usually exist as files)
            // If it's a media url like /media/pages/..., file_exists might check it.

            if (!$targetPage && !$isFile && $checkPathClean !== '') {
                // Not found
                echo "   ⚠️  404: $link\n";
                $brokenLinks[] = [
                    'source' => $page->id(),
                    'link' => $link
                ];
            }
        }
    }
}

echo "\n\n";
if (!empty($brokenLinks)) {
    echo "❌ Found " . count($brokenLinks) . " broken links!\n";
    foreach ($brokenLinks as $err) {
        echo " - On [" . $err['source'] . "]: " . $err['link'] . "\n";
    }
    exit(1);
} else {
    echo "✨ No broken internal links found.\n";
    exit(0);
}
