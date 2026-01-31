<?php snippet('header') ?>
<main class="max-w-[1400px] mx-auto px-6 py-16">
    <div class="mb-16">
        <h2 class="font-sans text-5xl md:text-6xl font-extrabold tracking-tight mb-6 max-w-3xl text-brand-pale">
            Celebrating Black Excellence in Design.
        </h2>
        <p class="text-brand-coral text-xl font-normal max-w-2xl font-serif leading-relaxed">
            Spotlighting 28 leaders shaping the future of visual culture throughout Black History Month.
        </p>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <?php
        $designersPage = page('designers');
        $designers = $designersPage ? $designersPage->children()->listed() : new Kirby\Cms\Pages();
        $maxDay = 28;
        $hasComingSoonShown = false;

        for ($day = 1; $day <= $maxDay; $day++):
            $designer = $designers->filterBy('day', $day)->first();
            ?>

            <?php if ($designer): ?>
                <!-- Active Designer Card -->
                <div
                    class="group relative aspect-square bg-page-bg rounded-custom overflow-hidden border border-sub-purple/40 shadow-sm hover:shadow-sub-purple/20 transition-all">
                    <a href="<?= $designer->url() ?>" class="absolute inset-0 z-20"></a>
                    <?php if ($image = $designer->cover()->toFile()): ?>
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                            style='background-image: url("<?= $image->url() ?>");'></div>
                    <?php endif ?>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-page-bg/90 via-page-bg/30 to-transparent pointer-events-none">
                    </div>
                    <div class="absolute inset-0 p-5 flex flex-col justify-between pointer-events-none">
                        <span
                            class="font-sans text-[10px] font-bold text-heading-peach bg-page-bg/60 w-fit px-2 py-0.5 rounded">
                            <?= str_pad($day, 2, '0', STR_PAD_LEFT) ?>
                        </span>
                        <div>
                            <h3 class="font-sans text-heading-peach text-lg font-bold leading-tight mb-1">
                                <?= $designer->title() ?>
                            </h3>
                            <p class="font-sans text-accent-pink text-[11px] uppercase tracking-wider line-clamp-1">
                                <?= $designer->role() ?>
                            </p>
                        </div>
                    </div>
                </div>

            <?php elseif (!$hasComingSoonShown): ?>
                <!-- Coming Soon Card (Only show once for the next available slot) -->
                <?php $hasComingSoonShown = true; ?>
                <div
                    class="aspect-square bg-gradient-to-br from-heading-peach to-accent-pink rounded-custom flex flex-col items-center justify-center text-center p-6 shadow-lg">
                    <p class="font-sans text-[10px] font-black tracking-[0.2em] uppercase text-page-bg mb-2">Feb</p>
                    <p class="font-display text-5xl font-black text-page-bg mb-4"><?= str_pad($day, 2, '0', STR_PAD_LEFT) ?></p>
                    <p class="font-sans text-[10px] font-black tracking-[0.3em] uppercase text-page-bg/70">Coming Soon</p>
                </div>

            <?php else: ?>
                <!-- Blank/Future Card -->
                <div class="aspect-square bg-page-bg/40 rounded-custom border border-white/5 flex items-center justify-center">
                    <p class="font-sans text-[10px] font-black tracking-widest uppercase text-white/10">Feb
                        <?= str_pad($day, 2, '0', STR_PAD_LEFT) ?>
                    </p>
                </div>

            <?php endif ?>

        <?php endfor; ?>

    </div>
</main>
<?php snippet('footer') ?>

</body>

</html>