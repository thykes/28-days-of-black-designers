<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title><?= $site->title() ?></title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap"
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
                        "brand-dark": "#0b032d",
                        "brand-pale": "#FFB997",
                        "brand-coral": "#F67E7D",
                        "brand-accent": "#843b62",
                    },
                    fontFamily: {
                        "sans": ["Inter", "sans-serif"],
                        "serif": ["Georgia", "serif"]
                    },
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        @layer base {
            h1, h2, h3, h4, nav, button, .header-text {
                @font-family: theme('fontFamily.sans');
            }
            body {
                @font-family: theme('fontFamily.serif');
                background-color: #0b032d;
            }
        }
        @layer utilities {
            .coming-soon-gradient {
                background: linear-gradient(135deg, #FFB997 0%, #F67E7D 100%);
            }
        }
    </style>
</head>

<body class="text-white transition-colors duration-300 font-serif">
    <header class="sticky top-0 z-50 bg-[#0b032d] border-b border-[#843b62]/30 px-6 md:px-12 py-4">
        <div class="max-w-[1400px] mx-auto flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="text-brand-pale w-8 h-8">
                    <svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd"
                            d="M39.475 21.6262C40.358 21.4363 40.6863 21.5589 40.7581 21.5934C40.7876 21.655 40.8547 21.857 40.8082 22.3336C40.7408 23.0255 40.4502 24.0046 39.8572 25.2301C38.6799 27.6631 36.5085 30.6631 33.5858 33.5858C30.6631 36.5085 27.6632 38.6799 25.2301 39.8572C24.0046 40.4502 23.0255 40.7407 22.3336 40.8082C21.8571 40.8547 21.6551 40.7875 21.5934 40.7581C21.5589 40.6863 21.4363 40.358 21.6262 39.475C21.8562 38.4054 22.4689 36.9657 23.5038 35.2817C24.7575 33.2417 26.5497 30.9744 28.7621 28.762C30.9744 26.5497 33.2417 24.7574 35.2817 23.5037C36.9657 22.4689 38.4054 21.8562 39.475 21.6262ZM4.41189 29.2403L18.7597 43.5881C19.8813 44.7097 21.4027 44.9179 22.7217 44.7893C24.0585 44.659 25.5148 44.1631 26.9723 43.4579C29.9052 42.0387 33.2618 39.5667 36.4142 36.4142C39.5667 33.2618 42.0387 29.9052 43.4579 26.9723C44.1631 25.5148 44.659 24.0585 44.7893 22.7217C44.9179 21.4027 44.7097 19.8813 43.5881 18.7597L29.2403 4.41187C27.8527 3.02428 25.8765 3.02573 24.2861 3.36776C22.6081 3.72863 20.7334 4.58419 18.8396 5.74801C16.4978 7.18716 13.9881 9.18353 11.5858 11.5858C9.18354 13.988 7.18717 16.4978 5.74802 18.8396C4.58421 20.7334 3.72865 22.6081 3.36778 24.2861C3.02574 25.8765 3.02429 27.8527 4.41189 29.2403Z"
                            fill="currentColor" fill-rule="evenodd"></path>
                    </svg>
                </div>
                <h1 class="font-sans font-extrabold text-xl tracking-tight text-brand-pale">28 Designers</h1>
            </div>
            <nav class="flex items-center gap-8 font-sans">
                <a class="text-sm font-medium text-brand-pale hover:text-brand-coral transition-colors"
                    href="<?= page('designers')->url() ?>">Archive</a>
                <a class="text-sm font-medium text-brand-pale hover:text-brand-coral transition-colors"
                    href="<?= page('about')->url() ?>">About</a>
            </nav>
        </div>
    </header>
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
            <?php if ($designersPage = page('designers')): ?>
                <?php foreach ($designersPage->children()->listed()->sortBy('day', 'asc') as $designer): ?>
                    <div
                        class="group relative aspect-square bg-[#0b032d] rounded-[8px] overflow-hidden border border-brand-accent/40 shadow-sm hover:shadow-brand-accent/20 transition-all">
                        <a href="<?= $designer->url() ?>" class="absolute inset-0 z-20"></a>
                        <?php if ($image = $designer->cover()->toFile()): ?>
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                style='background-image: url("<?= $image->url() ?>");'></div>
                        <?php endif ?>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#0b032d]/90 via-[#0b032d]/30 to-transparent pointer-events-none">
                        </div>
                        <div class="absolute inset-0 p-5 flex flex-col justify-between pointer-events-none">
                            <span
                                class="font-sans text-[10px] font-bold text-brand-pale bg-brand-dark/60 w-fit px-2 py-0.5 rounded"><?= str_pad($designer->day(), 2, '0', STR_PAD_LEFT) ?></span>
                            <div>
                                <h3 class="font-sans text-brand-pale text-lg font-bold"><?= $designer->title() ?></h3>
                                <p class="font-sans text-brand-coral text-xs mt-0.5"><?= $designer->role() ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php endif ?>

            <!-- Filler items if needed, or keeping the dynamic list clean -->

        </div>
    </main>
    <footer class="border-t border-brand-accent/30 mt-24 py-16 bg-[#0b032d]">
        <div class="max-w-[1400px] mx-auto px-6 flex flex-col md:flex-row justify-between items-start gap-12">
            <div class="max-w-sm">
                <h2 class="font-sans font-bold text-lg mb-4 text-brand-pale">28 Days of Black Designers</h2>
                <p class="text-brand-coral/80 text-sm leading-relaxed">
                    A project dedicated to celebrating the legacy and future of Black designers worldwide. Curated for
                    inspiration and recognition.
                </p>
            </div>
            <div class="flex gap-16">
                <div class="flex flex-col gap-4">
                    <span
                        class="font-sans text-[10px] font-bold uppercase tracking-widest text-brand-coral/50">Navigation</span>
                    <a class="font-sans text-sm text-brand-pale hover:text-brand-coral transition-colors"
                        href="<?= $site->url() ?>">Home</a>
                    <a class="font-sans text-sm text-brand-pale hover:text-brand-coral transition-colors"
                        href="<?= page('designers')->url() ?>">Archive</a>
                    <a class="font-sans text-sm text-brand-pale hover:text-brand-coral transition-colors"
                        href="<?= page('about')->url() ?>">About</a>
                </div>
                <div class="flex flex-col gap-4">
                    <span
                        class="font-sans text-[10px] font-bold uppercase tracking-widest text-brand-coral/50">Social</span>
                    <a class="font-sans text-sm text-brand-pale hover:text-brand-coral transition-colors"
                        href="#">Instagram</a>
                    <a class="font-sans text-sm text-brand-pale hover:text-brand-coral transition-colors"
                        href="#">Twitter</a>
                </div>
            </div>
            <div class="pt-2">
                <p class="font-sans text-[10px] text-brand-coral/50 uppercase tracking-widest">© 2024 Unified Design
                    Project</p>
            </div>
        </div>
    </footer>

</body>

</html>