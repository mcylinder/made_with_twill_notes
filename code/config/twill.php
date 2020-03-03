<?php

return [
    'files' => ['resume'],
    'file_library' => [
        'filesize_limit' => 10,
        'allowed_extensions' => ['pdf']
    ],
    'block_editor' => [
        'crops' => [
            'past_image' => [
                'default' => [
                    [
                        'name' => 'default',
                        'ratio' => 16 / 9,
                    ],
                ],
            ],
            'past_project_image' => [
                'default' => [
                    [
                        'name' => 'default',
                        'ratio' => 16 / 9,
                    ],
                ],
            ],

        ],
        'blocks' => [
            'quote' => [
                'title' => 'Quote',
                'icon' => 'quote',
                'component' => 'a17-block-quote'
            ],
            'paragraph' => [
                'title' => 'Paragraph',
                'icon' => 'text',
                'component' => 'a17-block-paragraph',
            ],
            'image' => [
                'title' => 'Full width image',
                'icon' => 'image',
                'component' => 'a17-block-image',
            ],
            'project_detail' => [
                'title' => 'Past Project Spotlight',
                'icon' => 'content-editor',
                'component' => 'a17-block-project_detail',
            ],

        ]
    ],

];
