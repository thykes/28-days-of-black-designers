<?php snippet('header') ?>
<main class="max-w-[1300px] mx-auto py-24 px-6 lg:px-12">
    <section class="mb-32">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
            <div class="lg:col-span-7">
                <div class="mb-10">
                    <span
                        class="inline-block py-1 px-3 bg-dark-purple text-heading-peach text-[10px] font-black uppercase tracking-widest rounded-sm mb-6">Day
                        <?= $page->day() ?> • Feb 2026
                    </span>
                    <h1
                        class="font-display font-black text-7xl md:text-8xl lg:text-9xl leading-[0.9] tracking-tighter mb-10 text-heading-peach">
                        <?= $page->title() ?>
                    </h1>
                </div>
                <div class="max-w-xl">
                    <?php if ($page->role()->isNotEmpty()): ?>
                        <p class="text-xl md:text-3xl font-medium leading-tight text-accent-pink mb-2">
                            <?= $page->role() ?>
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
                            <!-- LinkedIn SVG -->
                            <svg class="w-[16px] h-[16px] fill-current" viewBox="0 0 448 512">
                                <path
                                    d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.28c12.4-23.47 42.6-48.28 87.88-48.28 94 0 111.28 61.9 111.28 142.3V448z" />
                            </svg>
                        </a>
                    <?php endif ?>
                    <?php if ($page->twitter()->isNotEmpty()): ?>
                        <a class="social-button" href="<?= $page->twitter() ?>" title="X (Twitter)">
                            <!-- X Logo SVG -->
                            <svg viewBox="0 0 24 24" aria-hidden="true" class="w-[16px] h-[16px] fill-current">
                                <path
                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z">
                                </path>
                            </svg>
                        </a>
                    <?php endif ?>
                    <?php if ($page->instagram()->isNotEmpty()): ?>
                        <a class="social-button" href="<?= $page->instagram() ?>" title="Instagram">
                            <!-- Instagram SVG -->
                            <svg class="w-[16px] h-[16px] fill-current" viewBox="0 0 448 512">
                                <path
                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                            </svg>
                        </a>
                    <?php endif ?>
                    <?php if ($page->bluesky()->isNotEmpty()): ?>
                        <a class="social-button" href="<?= $page->bluesky() ?>" title="Bluesky">
                            <!-- Bluesky SVG -->
                            <svg class="w-[18px] h-[18px] fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M12 10.8c-1.087-2.114-4.046-6.053-6.798-7.995C2.566.944 1.561 1.266.902 1.565.139 1.908 0 3.08 0 3.768c0 .69.378 5.65.524 6.438.234 1.263 1.29 2.119 2.742 2.119 1.392 0 3.29-.68 3.29-.68.204.992-.472 2.39-1.391 3.235-5.594 5.15-2.035 8.654 1.583 6.64 5.385-2.997 5.25-4.492 5.25-4.492s-.135 1.493 5.251 4.492c3.618 2.014 7.175-1.49 1.583-6.64-.92-.843-1.595-2.243-1.392-3.235 0 0 1.9.68 3.291.68 1.452 0 2.508-.856 2.742-2.12.146-.788.524-5.747.524-6.437 0-.689-.139-1.86-.902-2.204-.66-.299-1.664-.621-4.302 1.24C16.046 4.748 13.087 8.687 12 10.8Z" />
                            </svg>
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
                            <?php if ($item->type() == 'quote'): ?>
                                <blockquote class="border-l-4 border-heading-peach pl-8 py-4 my-12">
                                    <p
                                        class="font-serif text-3xl md:text-4xl lg:text-5xl italic leading-tight text-heading-peach mb-6">
                                        "<?= $item->quote_text() ?>"
                                    </p>
                                    <?php if ($item->citation()->isNotEmpty()): ?>
                                        <cite
                                            class="block font-sans text-xs font-bold uppercase tracking-widest text-sub-purple not-italic">
                                            — <?= $item->citation() ?>
                                        </cite>
                                    <?php endif ?>
                                </blockquote>
                            <?php else: ?>
                                <article>
                                    <h4 class="font-sans text-xs font-black uppercase tracking-widest mb-6 text-sub-purple">
                                        <?= $item->question() ?>
                                    </h4>
                                    <div class="font-serif text-xl md:text-2xl leading-relaxed opacity-90 max-w-2xl space-y-6">
                                        <?= $item->answer()->kirbytext() ?>
                                    </div>
                                </article>
                            <?php endif ?>
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
                        <div class="group cursor-pointer lightbox-trigger" data-full-url="<?= $work->url() ?>">
                            <div
                                class="aspect-[4/3] bg-dark-purple/20 overflow-hidden mb-6 rounded-custom transition-all duration-500">
                                <div class="w-full h-full bg-cover bg-center scale-100 group-hover:scale-105 grayscale group-hover:grayscale-0 transition-transform duration-700"
                                    style="background-image: url('<?= $work->url() ?>');"></div>
                            </div>
                            <p
                                class="text-[11px] uppercase tracking-widest font-black text-accent-pink group-hover:text-heading-peach transition-colors">
                                <?= $work->caption()->or($work->name()) ?>
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
                    BHM 2026
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
        <div class="mt-24 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
            <p class="text-[10px] font-bold uppercase tracking-widest text-sub-purple">© 2026 28 Days of Black
                Designers</p>
            <div class="flex gap-8">
                <a class="header-nav-link" href="#">Privacy</a>
                <a class="header-nav-link" href="#">Contact</a>
            </div>
        </div>
    </footer>

    <!-- Lightbox Modal -->
    <div id="lightbox-modal"
        class="fixed inset-0 z-[100] bg-page-bg/95 backdrop-blur-sm hidden flex items-center justify-center p-4 lg:p-12 transition-opacity duration-300">
        <button id="lightbox-close"
            class="absolute top-6 right-6 text-heading-peach hover:text-accent-pink transition-colors z-50">
            <span class="material-symbols-outlined !text-4xl">close</span>
        </button>
        <div class="relative max-w-full max-h-full">
            <img id="lightbox-image" src="" alt="Selected Work"
                class="max-w-full max-h-[90vh] object-contain rounded-custom shadow-2xl">
        </div>
    </div>

    <script src="<?= $site->url() ?>/assets/js/lightbox.js"></script>
</main>
</body>

</html>