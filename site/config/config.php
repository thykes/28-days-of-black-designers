<?php

return [
    'debug' => true,
    'panel' => [
        'install' => true
    ],
    'routes' => [
        [
            'pattern' => 'sitemap.xml',
            'action' => function () {
                $pages = site()->pages()->index();

                // fetch the sitemap snippet
                $content = snippet('sitemap', [
                    'pages' => $pages,
                    'ignore' => ['error', 'sitemap']
                ], true);

                // return a response with the correct content type
                return new Kirby\Cms\Response($content, 'xml');
            }
        ],
        [
            'pattern' => 'sitemap',
            'action' => function () {
                return go('sitemap.xml', 301);
            }
        ]
    ]
];
