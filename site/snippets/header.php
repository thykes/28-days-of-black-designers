<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-J2Z49V87J8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-J2Z49V87J8');
    </script>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="author" content="Tim Hykes" />
    <meta name="description" content="<?= $page->description()->or($site->description()) ?>" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= $page->url() ?>" />
    <meta property="og:title" content="<?= $page->title() ?> — <?= $site->title() ?>" />
    <meta property="og:description" content="<?= $page->description()->or($site->description()) ?>" />
    <?php if ($image = $page->cover()->toFile()): ?>
        <meta property="og:image" content="<?= $image->url() ?>" />
    <?php elseif ($image = $site->image()): ?>
        <meta property="og:image" content="<?= $image->url() ?>" />
    <?php endif ?>

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="<?= $page->url() ?>" />
    <meta property="twitter:title" content="<?= $page->title() ?> — <?= $site->title() ?>" />
    <meta property="twitter:description" content="<?= $page->description()->or($site->description()) ?>" />
    <?php if ($image = $page->cover()->toFile()): ?>
        <meta property="twitter:image" content="<?= $image->url() ?>" />
    <?php elseif ($image = $site->image()): ?>
        <meta property="twitter:image" content="<?= $image->url() ?>" />
    <?php endif ?>

    <title>
        <?= $page->title() ?> —
        <?= $site->title() ?>
    </title>

    <?php if ($page->isHomePage()): ?>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "28 Days of Black Designers",
          "url": "https://www.28blackdesigners.com",
          "logo": "https://www.28blackdesigners.com/assets/images/logo.png",
          "founder": {
            "@type": "Person",
            "name": "Tim Hykes"
          },
          "sameAs": [
            "https://www.linkedin.com/company/28-days-of-black-designers",
            "https://www.twitter.com/28blackdesigners",
            "https://www.instagram.com/28blackdesigners"
          ]
        }
        </script>
    <?php endif ?>
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
                        // Standard Palette (Designer Page)
                        "page-bg": "#0b032d",
                        "heading-peach": "#FFB997",
                        "accent-pink": "#F67E7D",
                        "sub-purple": "#843b62",
                        "dark-purple": "#621940",
                        "body-text": "#F67E7D",
                        // Legacy/Home Mappings (Aliases)
                        "brand-dark": "#0b032d",
                        "brand-pale": "#FFB997",
                        "brand-coral": "#F67E7D",
                        "brand-accent": "#843b62",
                        "primary-dark": "#0b032d",
                        "body-coral": "#F67E7D",
                        "section-plum": "#621940",
                        "accent": "#F67E7D",
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
        /* Typography */
        .prose p {
            @apply mb-8 leading-[1.8] text-lg font-serif;
            color: rgba(246, 126, 125, 0.9);
        }
        .prose h4 {
            @apply font-sans font-bold uppercase tracking-widest text-sm mb-4 text-sub-purple;
        }
        
        /* Navigation & Header */
        .header-nav-link {
            @apply text-[11px] uppercase tracking-[0.2em] font-bold text-heading-peach hover:opacity-70 transition-opacity;
        }
        .social-button {
            @apply flex items-center justify-center w-10 h-10 rounded-full border border-accent-pink/30 text-accent-pink hover:bg-accent-pink hover:text-page-bg transition-all duration-300;
        }
        .expertise-tag {
            @apply px-5 py-2 rounded-full bg-dark-purple border border-sub-purple text-heading-peach text-[11px] font-bold uppercase tracking-widest transition-all cursor-default hover:bg-sub-purple;
        }
        
        /* Utility */
        .btn-primary {
             @apply bg-accent-pink text-page-bg px-8 py-4 rounded-full text-sm font-bold tracking-widest hover:opacity-90 transition-all uppercase;
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
            </div>

            <nav class="hidden lg:flex items-center gap-10">
                <a class="header-nav-link" href="<?= page('about')->url() ?>">About</a>
            </nav>

            <!-- Mobile Menu Toggle (Simplified) -->
            <div class="flex items-center gap-8 text-heading-peach lg:hidden">
                <a class="header-nav-link" href="<?= page('about')->url() ?>">About</a>
            </div>
        </div>
    </header>