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
                                <svg class="w-[16px] h-[16px] fill-current" viewBox="0 0 192 192">
                                    <path d="M141.537 88.9883C140.71 88.5919 139.87 88.2104 139.019 87.8451C137.537 60.5382 122.616 44.905 97.5619 44.745C97.4484 44.7443 97.3355 44.7443 97.222 44.7443C82.2364 44.7443 69.7731 51.1409 62.102 62.7807L75.881 72.2328C81.6116 63.5383 90.6052 61.6848 97.2286 61.6848C97.3051 61.6848 97.3819 61.6848 97.4576 61.6855C105.707 61.7381 111.932 64.1366 115.961 68.814C118.893 72.2193 120.854 76.925 121.825 82.8638C114.511 81.6207 106.601 81.2385 98.145 81.7233C74.3247 83.0954 59.0111 96.9879 60.0396 116.292C60.5615 126.084 65.4397 134.508 73.775 140.011C80.8224 144.663 89.899 146.938 99.3323 146.423C111.79 145.74 121.563 140.987 128.381 132.296C133.559 125.696 136.834 117.143 138.28 106.366C144.217 109.949 148.617 114.664 151.047 120.332C155.179 129.967 155.42 145.8 142.501 158.708C131.182 170.016 117.576 174.908 97.0135 175.059C74.2042 174.89 56.9538 167.575 45.7381 153.317C35.2355 139.966 29.8077 120.682 29.6052 96C29.8077 71.3178 35.2355 52.0336 45.7381 38.6827C56.9538 24.4249 74.2039 17.11 97.0132 16.9405C119.988 17.1113 137.539 24.4614 149.184 38.788C154.894 45.8136 159.199 54.6488 162.037 64.9503L178.184 60.6422C174.744 47.9622 169.331 37.0357 161.965 27.974C147.036 9.60668 125.202 0.195148 97.0695 0H96.9569C68.8816 0.19447 47.2921 9.6418 32.7883 28.0793C19.8819 44.4864 13.2244 67.3157 13.0007 95.9325L13 96L13.0007 96.0675C13.2244 124.684 19.8819 147.514 32.7883 163.921C47.2921 182.358 68.8816 191.806 96.9569 192H97.0695C122.03 191.827 139.624 185.292 154.118 170.811C173.081 151.866 172.51 128.119 166.26 113.541C161.776 103.087 153.227 94.5962 141.537 88.9883ZM98.4405 129.507C88.0005 130.095 77.1544 125.409 76.6196 115.372C76.2232 107.93 81.9158 99.626 99.0812 98.6368C101.047 98.5234 102.976 98.468 104.871 98.468C111.106 98.468 116.939 99.0737 122.242 100.233C120.264 124.935 108.662 128.946 98.4405 129.507Z" />
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