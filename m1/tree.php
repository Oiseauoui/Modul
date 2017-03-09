<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 07.03.2017
 * Time: 6:13
 */
//Написание рекурсии
$shop_categories = [
    [
        'title' => 'Computer',
        'children' => [
            [
                'title' => 'test'
            ],
            [
                'title' => 'test'
            ]

        ]
    ],
    [
        'title' => 'Mouse',
        'children' => []
    ],
    [
        'title' => 'Noutbook',
        'children' => [
            [
                'title' => 'test'
            ],
            [
                'title' => 'test',
                'children' => [
                    [
                        'title' => 'procesor',
                        'children' => [
                            [
                                'title' => 'test',
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ],

    [
        'title' => 'Mouse',
        'children' => []
    ],
];







    function listCategories($category, $addText = '') {
        $return = '<ul style ="list-style: none;">';
        if (is_array($category) && count($category) > 0) {
            foreach($category as $itemCategory) {
                if(isset($itemCategory['title']) && $itemCategory['title']) {
                    $return .= '<li>' .$addText.$itemCategory['title'];
                    if(isset($itemCategory['children']) && $itemCategory['children']) {
                        $return .= listCategories($itemCategory['children'], $addText . '-');
                    }
                    $return .= '</li>';
                }
            }
        }
        $return .= '</ul>';
        return $return;
    }
echo listCategories($shop_categories);