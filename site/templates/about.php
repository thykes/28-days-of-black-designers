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