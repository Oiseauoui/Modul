<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 16.03.2017
 * Time: 18:50
 */
echo "Определить рекурсивную функцию - аналог функции print_r";
echo "<pre>";
$order = [
    'corensies'=> ['usd', 'euro'],
    'products' => [
        'usd' => [
            'product1',
            'product2'
        ],
        'euro' => [
            'product3' => [
                '1' => '222',
                '2' => '25555'
            ]
        ]
    ]
];
echo "</pre>";
function recursion_print_r ($expression)
{
    if (!is_array($expression)) {
        $str = $expression;
    } else {
        $str = "Array (";
        foreach ($expression as $key => $item) {
            $str .= " [$key] => " . recursion_print_r($item) ;
        }
        $str .= " )";
    }

    return $str;
}

print_r($order);
echo "<br><br>";

echo recursion_print_r($order);

