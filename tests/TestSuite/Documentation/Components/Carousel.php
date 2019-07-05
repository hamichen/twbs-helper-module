<?php

// Documentation test config file for "Components / Carousel" part
return [
    'title' => 'Carousel',
    'url' => '%bootstrap-url%/components/carousel/',
    'tests' => [
        [
            'title' => 'Example',
            'url' => '%bootstrap-url%/components/carousel/#example',
            'tests' => [
                [
                    'title' => 'Slides only',
                    'url' => '%bootstrap-url%/components/carousel/#slides-only',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->carousel([
                            [
                                'src' => 'images/demo-sample.svg',
                                'optionsAndAttributes' => ['active' => true, 'alt' => 'Slide 1'],
                            ],
                            ['images/demo-sample.svg', ['alt' => 'Slide 2',]],
                            'images/demo-sample.svg' => ['alt' => 'Slide 3',],
                        ], ['id' => 'carouselExampleSlidesOnly']);
                    },
                    'expected' =>
                    '<div id="carouselExampleSlidesOnly" data-ride="carousel" class="carousel&#x20;slide">' . PHP_EOL .
                        '    <div class="carousel-inner">' . PHP_EOL .
                        '        <div class="active&#x20;carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;1" class="d-block&#x20;w-100" ' .
                        'src="images&#x2F;demo-sample.svg">' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;2" class="d-block&#x20;w-100" ' .
                        'src="images&#x2F;demo-sample.svg">' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;3" class="d-block&#x20;w-100" ' .
                        'src="images&#x2F;demo-sample.svg">' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '</div>',
                ],
                [
                    'title' => 'With controls',
                    'url' => '%bootstrap-url%/components/carousel/#with-controls',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->carousel([
                            [
                                'src' => 'images/demo-sample.svg',
                                'optionsAndAttributes' => ['active' => true, 'alt' => 'Slide 1'],
                            ],
                            ['images/demo-sample.svg', ['alt' => 'Slide 2',]],
                            'images/demo-sample.svg' => ['alt' => 'Slide 3',],
                        ], ['id' => 'carouselExampleControls', 'controls' => true]);
                    },
                    'expected' =>
                    '<div id="carouselExampleControls" data-ride="carousel" class="carousel&#x20;slide">' . PHP_EOL .
                        '    <div class="carousel-inner">' . PHP_EOL .
                        '        <div class="active&#x20;carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;1" class="d-block&#x20;w-100" ' .
                        'src="images&#x2F;demo-sample.svg">' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;2" class="d-block&#x20;w-100" ' .
                        'src="images&#x2F;demo-sample.svg">' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;3" class="d-block&#x20;w-100" ' .
                        'src="images&#x2F;demo-sample.svg">' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '    <a class="carousel-control-prev" href="&#x23;carouselExampleControls" ' .
                        'role="button" data-slide="prev">' . PHP_EOL .
                        '        <span class="carousel-control-prev-icon" aria-hidden="true"></span>' . PHP_EOL .
                        '        <span class="sr-only">Previous</span>' . PHP_EOL .
                        '    </a>' . PHP_EOL .
                        '    <a class="carousel-control-next" href="&#x23;carouselExampleControls" ' .
                        'role="button" data-slide="next">' . PHP_EOL .
                        '        <span class="carousel-control-next-icon" aria-hidden="true"></span>' . PHP_EOL .
                        '        <span class="sr-only">Next</span>' . PHP_EOL .
                        '    </a>' . PHP_EOL .
                        '</div>',
                ],
                [
                    'title' => 'With indicators',
                    'url' => '%bootstrap-url%/components/carousel/#with-indicators',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->carousel([
                            [
                                'src' => 'images/demo-sample.svg',
                                'optionsAndAttributes' => ['active' => true, 'alt' => 'Slide 1'],
                            ],
                            ['images/demo-sample.svg', ['alt' => 'Slide 2',]],
                            'images/demo-sample.svg' => ['alt' => 'Slide 3',],
                        ], ['id' => 'carouselExampleIndicators', 'controls' => true, 'indicators' => true]);
                    },
                    'expected' =>
                    '<div id="carouselExampleIndicators" data-ride="carousel" class="carousel&#x20;slide">' . PHP_EOL .
                        '    <ol class="carousel-indicators">' . PHP_EOL .
                        '        <li data-target="&#x23;carouselExampleIndicators" data-slide-to="0" class="active">' .
                        '</li>' . PHP_EOL .
                        '        <li data-target="&#x23;carouselExampleIndicators" data-slide-to="1"></li>' . PHP_EOL .
                        '        <li data-target="&#x23;carouselExampleIndicators" data-slide-to="2"></li>' . PHP_EOL .
                        '    </ol>' . PHP_EOL .
                        '    <div class="carousel-inner">' . PHP_EOL .
                        '        <div class="active&#x20;carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;1" class="d-block&#x20;w-100" ' .
                        'src="images&#x2F;demo-sample.svg">' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;2" class="d-block&#x20;w-100" ' .
                        'src="images&#x2F;demo-sample.svg">' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;3" class="d-block&#x20;w-100" ' .
                        'src="images&#x2F;demo-sample.svg">' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '    <a class="carousel-control-prev" href="&#x23;carouselExampleIndicators" ' .
                        'role="button" data-slide="prev">' . PHP_EOL .
                        '        <span class="carousel-control-prev-icon" aria-hidden="true"></span>' . PHP_EOL .
                        '        <span class="sr-only">Previous</span>' . PHP_EOL .
                        '    </a>' . PHP_EOL .
                        '    <a class="carousel-control-next" href="&#x23;carouselExampleIndicators" ' .
                        'role="button" data-slide="next">' . PHP_EOL .
                        '        <span class="carousel-control-next-icon" aria-hidden="true"></span>' . PHP_EOL .
                        '        <span class="sr-only">Next</span>' . PHP_EOL .
                        '    </a>' . PHP_EOL .
                        '</div>',
                ],
                [
                    'title' => 'With captions',
                    'url' => '%bootstrap-url%/components/carousel/#with-captions',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->carousel([
                            [
                                'src' => 'images/demo-sample.svg',
                                'optionsAndAttributes' => [
                                    'active' => true,
                                    'alt' => 'Slide 1',
                                    'caption' => [
                                        'title' => 'First slide label',
                                        'text' => 'Nulla vitae elit libero, a pharetra augue mollis interdum.',
                                    ],
                                ]
                            ],
                            [
                                'images/demo-sample.svg',
                                [
                                    'alt' => 'Slide 2',
                                    'caption' => [
                                        'title' => 'Second slide label',
                                        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                                    ],
                                ],
                            ],
                            'images/demo-sample.svg' => [
                                'alt' => 'Slide 3',
                                'caption' => [
                                    'title' => 'Third slide label',
                                    'text' => 'Praesent commodo cursus magna, vel scelerisque nisl consectetur.',
                                ],
                            ],
                        ], [
                            'id' => 'carouselExampleCaptions',
                            'controls' => true,
                            'indicators' => true,
                        ]);
                    },
                    'expected' =>
                    '<div id="carouselExampleCaptions" data-ride="carousel" class="carousel&#x20;slide">' . PHP_EOL .
                        '    <ol class="carousel-indicators">' . PHP_EOL .
                        '        <li data-target="&#x23;carouselExampleCaptions" data-slide-to="0" class="active">' .
                        '</li>' . PHP_EOL .
                        '        <li data-target="&#x23;carouselExampleCaptions" data-slide-to="1"></li>' . PHP_EOL .
                        '        <li data-target="&#x23;carouselExampleCaptions" data-slide-to="2"></li>' . PHP_EOL .
                        '    </ol>' . PHP_EOL .
                        '    <div class="carousel-inner">' . PHP_EOL .
                        '        <div class="active&#x20;carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;1" class="d-block&#x20;w-100" ' .
                        'src="images&#x2F;demo-sample.svg">' . PHP_EOL .
                        '            <div class="carousel-caption&#x20;d-md-block&#x20;d-none">' . PHP_EOL .
                        '                <h5>First slide label</h5>' . PHP_EOL .
                        '                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>' . PHP_EOL .
                        '            </div>' . PHP_EOL .

                        '        </div>' . PHP_EOL .
                        '        <div class="carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;2" class="d-block&#x20;w-100" ' .
                        'src="images&#x2F;demo-sample.svg">' . PHP_EOL .
                        '            <div class="carousel-caption&#x20;d-md-block&#x20;d-none">' . PHP_EOL .
                        '                <h5>Second slide label</h5>' . PHP_EOL .
                        '                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;3" class="d-block&#x20;w-100" ' .
                        'src="images&#x2F;demo-sample.svg">' . PHP_EOL .
                        '            <div class="carousel-caption&#x20;d-md-block&#x20;d-none">' . PHP_EOL .
                        '                <h5>Third slide label</h5>' . PHP_EOL .
                        '                <p>' .
                        'Praesent commodo cursus magna, vel scelerisque nisl consectetur.' .
                        '</p>' . PHP_EOL .
                        '            </div>' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '    <a class="carousel-control-prev" href="&#x23;carouselExampleCaptions" ' .
                        'role="button" data-slide="prev">' . PHP_EOL .
                        '        <span class="carousel-control-prev-icon" aria-hidden="true"></span>' . PHP_EOL .
                        '        <span class="sr-only">Previous</span>' . PHP_EOL .
                        '    </a>' . PHP_EOL .
                        '    <a class="carousel-control-next" href="&#x23;carouselExampleCaptions" ' .
                        'role="button" data-slide="next">' . PHP_EOL .
                        '        <span class="carousel-control-next-icon" aria-hidden="true"></span>' . PHP_EOL .
                        '        <span class="sr-only">Next</span>' . PHP_EOL .
                        '    </a>' . PHP_EOL .
                        '</div>',
                ],
                [
                    'title' => 'Crossfade',
                    'url' => '%bootstrap-url%/components/carousel/#crossfade',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->carousel([
                            [
                                'src' => 'images/demo-sample.svg',
                                'optionsAndAttributes' => ['active' => true, 'alt' => 'Slide 1'],
                            ],
                            ['images/demo-sample.svg', ['alt' => 'Slide 2',]],
                            'images/demo-sample.svg' => ['alt' => 'Slide 3',],
                        ], ['id' => 'carouselExampleFade', 'controls' => true, 'crossfade' => true]);
                    },
                    'expected' => '<div id="carouselExampleFade" data-ride="carousel" ' .
                        'class="carousel&#x20;carousel-fade&#x20;slide">' . PHP_EOL .
                        '    <div class="carousel-inner">' . PHP_EOL .
                        '        <div class="active&#x20;carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;1" class="d-block&#x20;w-100" ' .
                        'src="images&#x2F;demo-sample.svg">' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;2" class="d-block&#x20;w-100" ' .
                        'src="images&#x2F;demo-sample.svg">' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;3" class="d-block&#x20;w-100" ' .
                        'src="images&#x2F;demo-sample.svg">' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '    <a class="carousel-control-prev" href="&#x23;carouselExampleFade" ' .
                        'role="button" data-slide="prev">' . PHP_EOL .
                        '        <span class="carousel-control-prev-icon" aria-hidden="true"></span>' . PHP_EOL .
                        '        <span class="sr-only">Previous</span>' . PHP_EOL .
                        '    </a>' . PHP_EOL .
                        '    <a class="carousel-control-next" href="&#x23;carouselExampleFade" ' .
                        'role="button" data-slide="next">' . PHP_EOL .
                        '        <span class="carousel-control-next-icon" aria-hidden="true"></span>' . PHP_EOL .
                        '        <span class="sr-only">Next</span>' . PHP_EOL .
                        '    </a>' . PHP_EOL .
                        '</div>',
                ],
                [
                    'title' => 'Individual .carousel-item interval',
                    'url' => '%bootstrap-url%/components/carousel/#individual-carousel-item-interval',
                    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                        echo $oView->carousel([
                            ['src' => 'images/demo-sample.svg', 'optionsAndAttributes' => [
                                'interval' => 10000,
                                'active' => true,
                                'alt' => 'Slide 1',
                            ]],
                            ['images/demo-sample.svg', ['interval' => 2000, 'alt' => 'Slide 2',]],
                            'images/demo-sample.svg' => ['alt' => 'Slide 3',],
                        ], ['id' => 'carouselExampleControls', 'controls' => true]);
                    },
                    'expected' => '<div id="carouselExampleControls" data-ride="carousel"' .
                        ' class="carousel&#x20;slide">' . PHP_EOL .
                        '    <div class="carousel-inner">' . PHP_EOL .
                        '        <div data-interval="10000" class="active&#x20;carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;1" class="d-block&#x20;w-100"' .
                        ' src="images&#x2F;demo-sample.svg">' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div data-interval="2000" class="carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;2" class="d-block&#x20;w-100"' .
                        ' src="images&#x2F;demo-sample.svg">' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '        <div class="carousel-item">' . PHP_EOL .
                        '            <img alt="Slide&#x20;3" class="d-block&#x20;w-100"' .
                        ' src="images&#x2F;demo-sample.svg">' . PHP_EOL .
                        '        </div>' . PHP_EOL .
                        '    </div>' . PHP_EOL .
                        '    <a class="carousel-control-prev" href="&#x23;carouselExampleControls"' .
                        ' role="button" data-slide="prev">' . PHP_EOL .
                        '        <span class="carousel-control-prev-icon" aria-hidden="true"></span>' . PHP_EOL .
                        '        <span class="sr-only">Previous</span>' . PHP_EOL .
                        '    </a>' . PHP_EOL .
                        '    <a class="carousel-control-next" href="&#x23;carouselExampleControls"' .
                        ' role="button" data-slide="next">' . PHP_EOL .
                        '        <span class="carousel-control-next-icon" aria-hidden="true"></span>' . PHP_EOL .
                        '        <span class="sr-only">Next</span>' . PHP_EOL .
                        '    </a>' . PHP_EOL .
                        '</div>',
                ],
            ],
        ],
    ],
];
