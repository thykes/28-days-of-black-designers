<?php
$ignore = $ignore ?? ['error', 'sitemap'];
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php foreach ($pages->index() as $p): ?>
        <?php if (!in_array($p->uri(), $ignore)): ?>
            <url>
                <loc>
                    <?= $p->url() ?>
                </loc>
                <lastmod>
                    <?= $p->modified('c') ?>
                </lastmod>
                <priority>
                    <?= ($p->isHomePage()) ? 1.0 : number_format(0.5 / $p->depth(), 1) ?>
                </priority>
            </url>
        <?php endif ?>
    <?php endforeach ?>
</urlset>