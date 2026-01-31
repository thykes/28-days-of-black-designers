<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        <?= $page->title() ?> —
        <?= $site->title() ?>
    </title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;family=Playfair+Display:ital,wght@0,700;1,700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "page-bg": "#0b032d",
                        "heading-peach": "#FFB997",
                        "accent-pink": "#F67E7D",
                        "sub-purple": "#843b62",
                        "dark-purple": "#621940",
                        "body-text": "#F67E7D",
                    },
                    fontFamily: {
                        "sans": ["Inter", "sans-serif"],
                        "serif": ["Georgia", "serif"],
                        "display": ["Inter", "sans-serif"],
                    },
                    letterSpacing: {
                        "widest-extra": "0.3em",
                    },
                    borderRadius: {
                        "custom": "8px",
                    }
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        body {
            @apply antialiased bg-page-bg text-body-text selection:bg-accent-pink selection:text-page-bg;
        }
        .prose p {
            @apply mb-8 leading-[1.8] text-lg font-serif;
            color: rgba(246, 126, 125, 0.9);
        }
        .prose h4 {
            @apply font-sans font-bold uppercase tracking-widest text-sm mb-4 text-sub-purple;
        }
        .header-nav-link {
            @apply text-[11px] uppercase tracking-[0.2em] font-bold text-heading-peach hover:opacity-70 transition-opacity;
        }
        .social-button {
            @apply flex items-center justify-center w-10 h-10 rounded-full border border-accent-pink/30 text-accent-pink hover:bg-accent-pink hover:text-page-bg transition-all duration-300;
        }
        .expertise-tag {
            @apply px-5 py-2 rounded-full bg-dark-purple border border-sub-purple text-heading-peach text-[11px] font-bold uppercase tracking-widest transition-all cursor-default hover:bg-sub-purple;
        }
    </style>
</head>

<body class="font-sans">
    <header class="sticky top-0 z-50 bg-page-bg border-b border-white/10 px-6 py-6">
        <div class="max-w-[1400px] mx-auto flex items-center justify-between">
            <div class="flex items-center gap-16">
                <a class="text-sm font-black tracking-tighter uppercase flex items-center gap-2 text-heading-peach"
                    href="<?= $site->url() ?>">
                    <span class="w-2 h-2 bg-accent-pink rounded-full"></span>
                    28 Days of Black Designers
                </a>
                <nav class="hidden lg:flex items-center gap-10">
                    <a class="header-nav-link" href="<?= page('designers')->url() ?>">Archive</a>
                    <a class="header-nav-link" href="<?= page('about')->url() ?>">About</a>
                    <a class="header-nav-link" href="#">Submit</a>
                </nav>
            </div>
            <div class="flex items-center gap-8 text-heading-peach">
                <button class="hover:opacity-70 transition-opacity">
                    <span class="material-symbols-outlined !text-[20px]">search</span>
                </button>
                <button class="hover:opacity-70 transition-opacity">
                    <span class="material-symbols-outlined !text-[20px]">menu</span>
                </button>
            </div>
        </div>
    </header>
    <main class="max-w-[1300px] mx-auto py-24 px-6 lg:px-12">
        <section class="mb-32">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
                <div class="lg:col-span-7">
                    <div class="mb-10">
                        <span
                            class="inline-block py-1 px-3 bg-dark-purple text-heading-peach text-[10px] font-black uppercase tracking-widest rounded-sm mb-6">Day
                            <?= $page->day() ?> • Feb 2024
                        </span>
                        <h1
                            class="font-display font-black text-7xl md:text-8xl lg:text-9xl leading-[0.9] tracking-tighter mb-10 text-heading-peach">
                            <?= $page->title() ?>
                        </h1>
                    </div>
                    <div class="max-w-xl">
                        <?php if ($page->job_title()->isNotEmpty()): ?>
                            <p class="text-xl md:text-2xl font-medium leading-relaxed opacity-80 mb-2">
                                <?= $page->job_title() ?>
                            </p>
                        <?php endif ?>
                    </div>
                    <div class="flex gap-4 mt-8 items-center">
                        <?php if ($page->website()->isNotEmpty()): ?>
                            <a class="social-button" href="<?= $page->website() ?>" title="Website">
                                <span class="material-symbols-outlined !text-[18px]">language</span>
                            </a>
                        <?php endif ?>
                        <?php if ($page->linkedin()->isNotEmpty()): ?>
                            <a class="social-button" href="<?= $page->linkedin() ?>" title="LinkedIn">
                                <span class="material-symbols-outlined !text-[18px]">link</span>
                            </a>
                        <?php endif ?>
                        <?php if ($page->twitter()->isNotEmpty()): ?>
                            <a class="social-button" href="<?= $page->twitter() ?>" title="Twitter">
                                <span class="material-symbols-outlined !text-[18px]">share</span>
                                <!-- Using share icon for twitter/x -->
                            </a>
                        <?php endif ?>
                    </div>
                </div>
                <div class="lg:col-span-5 relative">
                    <div
                        class="aspect-[4/5] bg-dark-purple/30 overflow-hidden rounded-custom shadow-2xl transition-all duration-700">
                        <?php if ($cover = $page->cover()->toFile()): ?>
                            <div class="w-full h-full bg-cover bg-center grayscale hover:grayscale-0 transition-all duration-700"
                                style='background-image: url("<?= $cover->url() ?>");'></div>
                        <?php endif ?>
                    </div>
                    <?php if ($page->location()->isNotEmpty()): ?>
                        <div
                            class="absolute -bottom-6 -left-6 hidden lg:block bg-dark-purple p-6 border border-sub-purple rounded-custom shadow-lg max-w-[240px]">
                            <p class="text-[10px] uppercase tracking-widest font-black mb-1 text-heading-peach/40">Current
                                Location</p>
                            <p class="text-sm font-bold text-heading-peach">
                                <?= $page->location() ?>
                            </p>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </section>
        <section class="mb-32">
            <div class="flex flex-col md:flex-row md:items-center gap-8 pb-12 border-b border-white/10">
                <h3 class="text-[10px] font-black uppercase tracking-widest-extra text-sub-purple min-w-[150px]">Area of
                    Expertise</h3>
                <div class="flex flex-wrap gap-2">
                    <?php foreach ($page->tags()->split(',') as $tag): ?>
                        <span class="expertise-tag">
                            <?= $tag ?>
                        </span>
                    <?php endforeach ?>
                </div>
            </div>
        </section>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-20">
            <div class="lg:col-span-7">
                <section class="mb-24">
                    <div class="prose max-w-none">
                        <?= $page->text()->kirbytext() ?>
                    </div>
                </section>

                <?php if ($page->interview()->isNotEmpty() || $page->interview_intro()->isNotEmpty()): ?>
                    <section class="space-y-24 border-t border-white/10 pt-24">
                        <div class="flex items-center gap-4 mb-16">
                            <div class="h-px w-8 bg-sub-purple"></div>
                            <h2 class="text-[10px] font-black uppercase tracking-[0.4em] text-sub-purple">The Interview</h2>
                        </div>

                        <?php if ($page->interview_intro()->isNotEmpty()): ?>
                            <div class="font-serif text-xl md:text-2xl leading-relaxed opacity-90 max-w-2xl space-y-6 mb-12">
                                <?= $page->interview_intro()->kirbytext() ?>
                            </div>
                        <?php endif ?>

                        <div class="space-y-20">
                            <?php foreach ($page->interview()->toStructure() as $item): ?>
                                <article>
                                    <h4 class="font-sans text-xs font-black uppercase tracking-widest mb-6 text-sub-purple">
                                        <?= $item->question() ?>
                                    </h4>
                                    <div class="font-serif text-xl md:text-2xl leading-relaxed opacity-90 max-w-2xl space-y-6">
                                        <?= $item->answer()->kirbytext() ?>
                                    </div>
                                </article>
                            <?php endforeach ?>
                        </div>
                    </section>
                <?php endif ?>

            </div>
            <aside class="lg:col-span-4 lg:col-start-9 space-y-24">
                <section>
                    <h3 class="text-[10px] font-black uppercase tracking-widest mb-10 text-sub-purple">Selected Works
                    </h3>
                    <div class="space-y-16">
                        <?php
                        // Get all images from the page, excluding the cover image
                        $coverImage = $page->cover()->toFile();
                        $works = $page->images();

                        if ($coverImage) {
                            $works = $works->not($coverImage);
                        }

                        foreach ($works as $work):
                            ?>
                            <div class="group cursor-pointer">
                                <div
                                    class="aspect-[4/3] bg-dark-purple/20 overflow-hidden mb-6 rounded-custom transition-all duration-500">
                                    <div class="w-full h-full bg-cover bg-center scale-100 group-hover:scale-105 grayscale group-hover:grayscale-0 transition-transform duration-700"
                                        style="background-image: url('<?= $work->url() ?>');"></div>
                                </div>
                                <p
                                    class="text-[11px] uppercase tracking-widest font-black text-accent-pink group-hover:text-heading-peach transition-colors">
                                    <?= $work->name() ?>
                                </p>
                            </div>
                        <?php endforeach ?>
                    </div>
                </section>
            </aside>
        </div>
        <footer class="mt-48 py-16 border-t-2 border-heading-peach">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-12">
                <?php if ($prev = $page->prevListed()): ?>
                    <a class="group" href="<?= $prev->url() ?>">
                        <span
                            class="text-[10px] uppercase tracking-[0.3em] font-black mb-3 block text-sub-purple group-hover:text-accent-pink transition-all">Previous
                            Spotlight</span>
                        <span
                            class="font-display text-4xl font-black tracking-tighter text-heading-peach group-hover:opacity-70 transition-all">
                            <?= $prev->title() ?>
                        </span>
                    </a>
                <?php else: ?>
                    <div></div>
                <?php endif ?>

                <div class="flex flex-col items-center gap-4">
                    <div class="w-12 h-1 bg-accent-pink"></div>
                    <div class="text-[11px] font-black uppercase tracking-[0.5em] text-heading-peach">
                        BHM 2024
                    </div>
                </div>

                <?php if ($next = $page->nextListed()): ?>
                    <a class="group text-left md:text-right" href="<?= $next->url() ?>">
                        <span
                            class="text-[10px] uppercase tracking-[0.3em] font-black mb-3 block text-sub-purple group-hover:text-accent-pink transition-all">Next
                            Spotlight</span>
                        <span
                            class="font-display text-4xl font-black tracking-tighter text-heading-peach opacity-20 group-hover:opacity-100 transition-all">
                            <?= $next->title() ?>
                        </span>
                    </a>
                <?php else: ?>
                    <div></div>
                <?php endif ?>

            </div>
            <div
                class="mt-24 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
                <p class="text-[10px] font-bold uppercase tracking-widest text-sub-purple">© 2024 28 Days of Black
                    Designers</p>
                <div class="flex gap-8">
                    <a class="header-nav-link" href="#">Privacy</a>
                    <a class="header-nav-link" href="#">Contact</a>
                </div>
            </div>
        </footer>
    </main>
</body>

</html>