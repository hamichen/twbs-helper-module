<?php

// Documentation test config file for "Components / Forms / Form controls" part
return [
    'title' => 'Form controls',
    'url' => '%bootstrap-url%/components/forms/#form-controls',
    'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
        // Create form
        $oFactory = new \Zend\Form\Factory();
        $oForm = $oFactory->create([
            'type' => 'form',
            'elements' => [
                [
                    'spec' => [
                        'name' => 'email',
                        'options' => [
                            'label' => 'Email address'
                        ],
                        'attributes' => [
                            'type' => 'email',
                            'id' => 'exampleFormControlInput1',
                            'placeholder' => 'name@example.com',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'select',
                        'type' => 'select',
                        'options' => [
                            'label' => 'Example select',
                            'value_options' => [
                                1 => 1,
                                2 => 2,
                                3 => 3,
                                4 => 4,
                                5 => 5,
                            ],
                        ],
                        'attributes' => [
                            'id' => 'exampleFormControlSelect1',
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'multiple_select',
                        'type' => 'select',
                        'options' => [
                            'label' => 'Example select',
                            'value_options' => [
                                1 => 1,
                                2 => 2,
                                3 => 3,
                                4 => 4,
                                5 => 5,
                            ],
                        ],
                        'attributes' => [
                            'id' => 'exampleFormControlSelect2',
                            'multiple' => true,
                        ],
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'textarea',
                        'options' => [
                            'label' => 'Example textarea'
                        ],
                        'attributes' => [
                            'type' => 'textarea',
                            'id' => 'exampleFormControlTextarea1',
                            'rows' => 3,
                        ],
                    ],
                ],
            ],
        ]);

        echo $oView->form($oForm);
    },
    'expected' => '<form method="POST" name="form" role="form" id="form">' . PHP_EOL .
        '    <div class="form-group">' . PHP_EOL .
        '        <label for="exampleFormControlInput1">Email address</label>' . PHP_EOL .
        '        <input name="email" type="email" id="exampleFormControlInput1" ' .
        'placeholder="name&#x40;example.com" class="form-control" value="">' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <div class="form-group">' . PHP_EOL .
        '        <label for="exampleFormControlSelect1">Example select</label>' . PHP_EOL .
        '        <select name="select" id="exampleFormControlSelect1" class="form-control">' . PHP_EOL .
        '            <option value="1">1</option>' . PHP_EOL .
        '            <option value="2">2</option>' . PHP_EOL .
        '            <option value="3">3</option>' . PHP_EOL .
        '            <option value="4">4</option>' . PHP_EOL .
        '            <option value="5">5</option>' . PHP_EOL .
        '        </select>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <div class="form-group">' . PHP_EOL .
        '        <label for="exampleFormControlSelect2">Example select</label>' . PHP_EOL .
        '        <select name="multiple_select&#x5B;&#x5D;" id="exampleFormControlSelect2" ' .
        'multiple="multiple" class="form-control">' . PHP_EOL .
        '            <option value="1">1</option>' . PHP_EOL .
        '            <option value="2">2</option>' . PHP_EOL .
        '            <option value="3">3</option>' . PHP_EOL .
        '            <option value="4">4</option>' . PHP_EOL .
        '            <option value="5">5</option>' . PHP_EOL .
        '        </select>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '    <div class="form-group">' . PHP_EOL .
        '        <label for="exampleFormControlTextarea1">Example textarea</label>' . PHP_EOL .
        '        <textarea name="textarea" id="exampleFormControlTextarea1" rows="3" class="form-control">' .
        '</textarea>' . PHP_EOL .
        '    </div>' . PHP_EOL .
        '</form>',
];