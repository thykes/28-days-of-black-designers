<footer class="border-t border-brand-accent/30 mt-24 py-16 bg-page-bg">
    <div class="max-w-[1400px] mx-auto px-6 flex flex-col md:flex-row justify-between items-start gap-12">
        <div class="max-w-sm">
            <h2 class="font-sans font-bold text-lg mb-4 text-heading-peach">28 Days of Black Designers</h2>
            <p class="text-accent-pink/80 text-sm leading-relaxed font-serif">
                A project dedicated to celebrating the legacy and future of Black designers worldwide. Curated for
                inspiration and recognition.
            </p>
        </div>

        <div class="flex gap-16">
            <div class="flex flex-col gap-4">
                <span
                    class="font-sans text-[10px] font-bold uppercase tracking-widest text-accent-pink/50">Navigation</span>
                <a class="font-sans text-sm text-heading-peach hover:text-accent-pink transition-colors"
                    href="<?= page('about')->url() ?>">About</a>
            </div>

            <div class="flex flex-col gap-4">
                <span
                    class="font-sans text-[10px] font-bold uppercase tracking-widest text-accent-pink/50">Social</span>
                <div class="flex gap-3">
                    <?php if ($site->social_linkedin()->isNotEmpty()): ?>
                        <a class="social-button border-opacity-20 w-8 h-8" href="<?= $site->social_linkedin() ?>"
                            title="LinkedIn">
                            <!-- LinkedIn SVG -->
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 448 512">
                                <path
                                    d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.28c12.4-23.47 42.6-48.28 87.88-48.28 94 0 111.28 61.9 111.28 142.3V448z" />
                            </svg>
                        </a>
                    <?php endif ?>

                    <?php if ($site->social_instagram()->isNotEmpty()): ?>
                        <a class="social-button border-opacity-20 w-8 h-8" href="<?= $site->social_instagram() ?>"
                            title="Instagram">
                            <span class="material-symbols-outlined !text-[14px]">photo_camera</span>
                        </a>
                    <?php endif ?>

                    <?php if ($site->social_youtube()->isNotEmpty()): ?>
                        <a class="social-button border-opacity-20 w-8 h-8" href="<?= $site->social_youtube() ?>"
                            title="YouTube">
                            <span class="material-symbols-outlined !text-[14px]">play_arrow</span>
                        </a>
                    <?php endif ?>

                    <?php if ($site->social_tiktok()->isNotEmpty()): ?>
                        <a class="social-button border-opacity-20 w-8 h-8" href="<?= $site->social_tiktok() ?>"
                            title="TikTok">
                            <!-- Custom Music Note for TikTok since no standard icon in this font set maybe -->
                            <span class="material-symbols-outlined !text-[14px]">music_note</span>
                        </a>
                    <?php endif ?>

                    <?php if ($site->social_threads()->isNotEmpty()): ?>
                        <a class="social-button border-opacity-20 w-8 h-8" href="<?= $site->social_threads() ?>"
                            title="Threads">
                            <!-- Threads SVG -->
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M12.004 22c-5.523 0-10-4.477-10-10s4.477-10 10-10 10 4.477 10 10-4.477 10-10 10zm-1.096-7.79c-1.31 0-2.378-.96-2.378-2.345 0-1.353 1.056-2.333 2.544-2.333.626 0 1.25.155 1.774.452l1.643-2.952A9.43 9.43 0 0 0 11.23 6.43c-3.8 0-6.655 2.583-6.655 6.32 0 3.322 2.392 5.8 6.095 5.8 2.227 0 3.965-1.048 4.703-2.655h2.18c-1.12 3.166-3.87 4.904-7.05 4.904-5.06 0-8.94-3.642-8.94-8.523C1.562 7.155 5.61 2.94 11.54 2.94c5.07 0 8.785 3.512 8.785 8.69 0 5.464-3.32 9.023-7.797 9.023-2.583 0-4.143-1.464-4.143-3.082 0-2.143 1.964-2.857 4.547-2.857.464 0 .917.036 1.358.107 0-2.143-1.37-3.238-3.38-3.238z">
                                </path>
                            </svg>
                        </a>
                    <?php endif ?>

                    <?php if ($site->social_twitter()->isNotEmpty()): ?>
                        <a class="social-button border-opacity-20 w-8 h-8" href="<?= $site->social_twitter() ?>"
                            title="X (Twitter)">
                            <!-- X Logo SVG -->
                            <svg viewBox="0 0 24 24" aria-hidden="true" class="w-3.5 h-3.5 fill-current">
                                <path
                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z">
                                </path>
                            </svg>
                        </a>
                    <?php endif ?>
                </div>
            </div>
        </div>

        <div class="pt-2">
            <p class="font-sans text-[10px] text-accent-pink/50 uppercase tracking-widest">©
                <?= date('Y') ?> The 28 Days of Black Designers Project
            </p>
        </div>
    </div>
</footer>