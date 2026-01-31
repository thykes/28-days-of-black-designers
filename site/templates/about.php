<?php snippet('header') ?>
<main class="flex-1">
    <section class="w-full pt-32 pb-40 px-6">
        <div class="max-w-4xl mx-auto text-center space-y-10">
            <div
                class="inline-block px-4 py-1 text-[#F67E7D] text-[11px] font-black tracking-[0.2em] uppercase border-b-2 border-[#F67E7D] mb-4">
                Our Mission
            </div>
            <h1 class="text-5xl md:text-8xl font-black leading-[0.95] tracking-tighter text-[#FFB997] font-sans">
                <?= $page->hero_headline()->or('Honoring the architects of visual culture.') ?>
            </h1>
            <p class="text-xl md:text-2xl text-[#F67E7D] font-serif leading-relaxed max-w-2xl mx-auto italic">
                <?= $page->hero_subheadline()->or('A curated celebration of Black excellence in design, spotlighting one visionary creator every day of February.') ?>
            </p>
        </div>
    </section>
    
    <?php if ($page->mission_quote()->isNotEmpty()): ?>
    <section class="w-full bg-[#621940] py-32 border-y border-white/10">
        <div class="max-w-[1000px] mx-auto px-8">
            <div class="grid grid-cols-1 gap-12 text-center md:text-left">
                <p class="text-2xl md:text-3xl leading-snug text-[#FFB997] font-serif">
                    "<?= $page->mission_quote() ?>"
                </p>
            </div>
        </div>
    </section>
    <?php endif ?>

    <section class="w-full py-40 px-6 bg-[#0b032d]">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row items-start gap-16 md:gap-32">
                <div class="w-full md:w-5/12">
                    <div class="relative group">
                        <?php if ($image = $page->founder_image()->toFile()): ?>
                        <img alt="<?= $page->founder_name() ?>"
                            class="w-full aspect-[4/5] object-cover rounded-custom shadow-2xl grayscale hover:grayscale-0 transition-all duration-700"
                            src="<?= $image->url() ?>" />
                        <?php endif ?>
                        <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-[#F67E7D]/10 -z-10 rounded-custom">
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-7/12 space-y-10">
                    <div class="space-y-4">
                        <h2 class="text-5xl font-black tracking-tight font-sans text-[#FFB997]">
                            <?= $page->founder_name() ?>
                        </h2>
                        <p class="text-[#F67E7D] text-[11px] font-black tracking-[0.2em] uppercase">
                            <?= $page->founder_role() ?>
                        </p>
                    </div>
                    <div class="space-y-8 text-[#F67E7D] leading-relaxed text-lg font-serif">
                        <?= $page->founder_bio() ?>
                    </div>
                    <div class="flex items-center gap-4 pt-4">
                        <!-- Founder Socials -->
                        <?php if ($page->founder_website()->isNotEmpty()): ?>
                        <a class="w-12 h-12 rounded-full border border-[#F67E7D]/30 text-[#F67E7D] flex items-center justify-center hover:bg-[#F67E7D] hover:text-[#0b032d] transition-all"
                            href="<?= $page->founder_website() ?>" title="Website">
                            <span class="material-symbols-outlined text-lg">language</span>
                        </a>
                        <?php endif ?>
                        
                        <?php if ($page->founder_linkedin()->isNotEmpty()): ?>
                            <a class="w-12 h-12 rounded-full border border-[#F67E7D]/30 text-[#F67E7D] flex items-center justify-center hover:bg-[#F67E7D] hover:text-[#0b032d] transition-all" href="<?= $page->founder_linkedin() ?>" title="LinkedIn">
                                <!-- LinkedIn SVG -->
                                <svg class="w-[16px] h-[16px] fill-current" viewBox="0 0 448 512">
                                    <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.28c12.4-23.47 42.6-48.28 87.88-48.28 94 0 111.28 61.9 111.28 142.3V448z" />
                                </svg>
                            </a>
                        <?php endif ?>

                        <?php if ($page->founder_bluesky()->isNotEmpty()): ?>
                            <a class="w-12 h-12 rounded-full border border-[#F67E7D]/30 text-[#F67E7D] flex items-center justify-center hover:bg-[#F67E7D] hover:text-[#0b032d] transition-all" href="<?= $page->founder_bluesky() ?>" title="Bluesky">
                                <!-- Bluesky SVG -->
                                <svg class="w-[18px] h-[18px] fill-current" viewBox="0 0 24 24">
                                    <path d="M12 10.8c-1.087-2.114-4.046-6.053-6.798-7.995C2.566.944 1.561 1.266.902 1.565.139 1.908 0 3.08 0 3.768c0 .69.378 5.65.524 6.438.234 1.263 1.29 2.119 2.742 2.119 1.392 0 3.29-.68 3.29-.68.204.992-.472 2.39-1.391 3.235-5.594 5.15-2.035 8.654 1.583 6.64 5.385-2.997 5.25-4.492 5.25-4.492s-.135 1.493 5.251 4.492c3.618 2.014 7.175-1.49 1.583-6.64-.92-.843-1.595-2.243-1.392-3.235 0 0 1.9.68 3.291.68 1.452 0 2.508-.856 2.742-2.12.146-.788.524-5.747.524-6.437 0-.689-.139-1.86-.902-2.204-.66-.299-1.664-.621-4.302 1.24C16.046 4.748 13.087 8.687 12 10.8Z" />
                                </svg>
                            </a>
                        <?php endif ?>

                        <?php if ($page->founder_threads()->isNotEmpty()): ?>
                            <a class="w-12 h-12 rounded-full border border-[#F67E7D]/30 text-[#F67E7D] flex items-center justify-center hover:bg-[#F67E7D] hover:text-[#0b032d] transition-all" href="<?= $page->founder_threads() ?>" title="Threads">
                                <!-- Threads SVG -->
                                <svg class="w-[16px] h-[16px] fill-current" viewBox="0 0 24 24">
                                    <path d="M12.004 22c-5.523 0-10-4.477-10-10s4.477-10 10-10 10 4.477 10 10-4.477 10-10 10zm-1.096-7.79c-1.31 0-2.378-.96-2.378-2.345 0-1.353 1.056-2.333 2.544-2.333.626 0 1.25.155 1.774.452l1.643-2.952A9.43 9.43 0 0 0 11.23 6.43c-3.8 0-6.655 2.583-6.655 6.32 0 3.322 2.392 5.8 6.095 5.8 2.227 0 3.965-1.048 4.703-2.655h2.18c-1.12 3.166-3.87 4.904-7.05 4.904-5.06 0-8.94-3.642-8.94-8.523C1.562 7.155 5.61 2.94 11.54 2.94c5.07 0 8.785 3.512 8.785 8.69 0 5.464-3.32 9.023-7.797 9.023-2.583 0-4.143-1.464-4.143-3.082 0-2.143 1.964-2.857 4.547-2.857.464 0 .917.036 1.358.107 0-2.143-1.37-3.238-3.38-3.238z"></path>
                                </svg>
                            </a>
                        <?php endif ?>
                        
                         <?php if ($page->founder_twitter()->isNotEmpty()): ?>
                            <a class="w-12 h-12 rounded-full border border-[#F67E7D]/30 text-[#F67E7D] flex items-center justify-center hover:bg-[#F67E7D] hover:text-[#0b032d] transition-all" href="<?= $page->founder_twitter() ?>" title="X (Twitter)">
                                <!-- X Logo SVG -->
                                <svg viewBox="0 0 24 24" aria-hidden="true" class="w-[18px] h-[18px] fill-current">
                                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
                                </svg>
                            </a>
                        <?php endif ?>
                        
                        <?php if ($page->founder_instagram()->isNotEmpty()): ?>
                            <a class="w-12 h-12 rounded-full border border-[#F67E7D]/30 text-[#F67E7D] flex items-center justify-center hover:bg-[#F67E7D] hover:text-[#0b032d] transition-all" href="<?= $page->founder_instagram() ?>" title="Instagram">
                                <!-- Instagram SVG -->
                                <svg class="w-[16px] h-[16px] fill-current" viewBox="0 0 448 512">
                                    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                                </svg>
                            </a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- ... reusing footer code or static ... -->
</main>
<?php snippet('footer') ?>

</body>

</html>