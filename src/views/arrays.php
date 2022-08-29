<?php
const HTML_BR = '<br>';
const HTML_PRE = '<pre>';
const HTML_PRE_END = '</pre>';
?>

<h1>Arrays</h1>

<hr>

<section>
    <h2>Types</h2>
    <div>
        <h3>indexed</h3>
        <?php
        $array_idx = ['val0', 'val1', 'val2'];
        echo HTML_PRE;
        print_r($array_idx);
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>associative</h3>
        <?php
        $array_assoc = [
            'key0' => 'val0',
            'key1' => 'val1',
            'key2' => 'val2'
        ];
        echo HTML_PRE;
        print_r($array_assoc);
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>multidimensional</h3>
        <?php
        $array_multi = [
            'array0' => [
                'key0' => 'val0',
                'key1' => 'val1',
                'key2' => [
                    'sub_array0' => 'sub_val0'
                ]
            ],
            'array1' => [
                'key0' => 'val0',
                'key1' => 'val1',
                'key2' => [
                    'sub_array1' => 'sub_val1'
                ]
            ],
            'array2' => [
                'key0' => 'val0',
                'key1' => 'val1',
                'key2' => [
                    'sub_array2' => 'sub_val2'
                ]
            ]
        ];
        echo HTML_PRE;
        print_r($array_multi);
        echo HTML_BR . 'access sub_array2 : ';
        print_r($array_multi['array2']['key2']);
        echo HTML_PRE_END;
        ?>
    </div>
</section>

<hr>

<section>
    <h2>Built-in Functions</h2>
    <div>
        <h3>array_change_key_case | v4.2.0+</h3>
        <?php
        $array = [
            'key0' => 'val0',
            'key1' => 'val1',
            'key2' => 'val2'
        ];
        echo HTML_PRE . 'lowercase : ';
        print_r(array_change_key_case($array, CASE_LOWER));
        echo HTML_BR;
        echo 'uppercase : ';
        print_r(array_change_key_case($array, CASE_UPPER));
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>array_chunk | v4.2.0+</h3>
        <?php
        $array = [
            'key0' => 'val0',
            'key1' => 'val1',
            'key2' => 'val2'
        ];
        echo HTML_PRE . 'two elements : ';
        print_r(array_chunk($array, 2));
        echo HTML_BR;
        echo 'two elements w/ keys : ';
        print_r(array_chunk($array, 2, true));
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>array_combine | v5+</h3>
        <?php
        $keys = ['key0', 'key1', 'key2'];
        $values = ['val0', 'val1', 'val2'];
        echo HTML_PRE . 'combine keys w/ values : ';
        print_r(array_combine($keys, $values));
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>array_count_values | v4+</h3>
        <?php
        $array = [
            'key0' => 'val0',
            'key1' => 'val1',
            'key2' => 'val2',
            'key3' => 'val2'
        ];
        echo HTML_PRE . 'count : ';
        print_r(array_count_values($array));
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>array_diff | v4.0.1+</h3>
        <?php
        $array1 = [
            'key0' => 'val0',
            'key1' => 'val1',
            'key2' => 'val2'
        ];
        $array2 = [
            'key0' => 'val1',
            'key1' => 'val1',
            'key2' => 'val3'
        ];
        echo HTML_PRE . 'diff : ';
        print_r(array_diff($array1, $array2));
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>array_fill | v4.2.0+</h3>
        <?php
        echo HTML_PRE;
        print_r(array_fill(3, 7, 'filled'));
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>array_is_list | v8+</h3>
        <?php
        $array_list = ['val0', 'val1', 'val2'];
        if (array_is_list($array_list)) {
            echo HTML_PRE;
            echo 'indexed : array_is_list enable';
            echo HTML_PRE_END;
        }
        $array_assoc = [
            'key0' => 'val0',
            'key1' => 'val1',
            'key2' => 'val2'
        ];
        if (!array_is_list($array_assoc)) {
            echo HTML_PRE;
            echo 'associative : array_is_list disable';
            echo HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>array_key_exists | v4.0.7+</h3>
        <?php
        $array = [
            'key0' => 'val0',
            'key1' => 'val1',
            'key2' => 'val2'
        ];
        if (array_key_exists('key1', $array)) {
            echo HTML_PRE;
            echo 'key1 : array_key_exists enable';
            echo HTML_PRE_END;
        }
        if (!array_key_exists('key3', $array)) {
            echo HTML_PRE;
            echo 'key3 : array_key_exists disable';
            echo HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>array_key_first | v7+</h3>
        <?php
        $array = [
            'key0' => 'val0',
            'key1' => 'val1',
            'key2' => 'val2'
        ];
        echo HTML_PRE . 'first key : ';
        print_r(array_key_first($array));
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>array_key_last | v7+</h3>
        <?php
        $array = [
            'key0' => 'val0',
            'key1' => 'val1',
            'key2' => 'val2'
        ];
        echo HTML_PRE . 'last key : ';
        print_r(array_key_last($array));
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>array_keys | v4+</h3>
        <?php
        $array = [
            'key0' => 'val0',
            'key1' => 'val1',
            'key2' => 'val2'
        ];
        echo HTML_PRE . 'keys : ';
        print_r(array_keys($array));
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>array_merge | v4+</h3>
        <?php
        $array1 = [
            'key0' => 'val0',
            'key1' => 'val1',
            'key2' => 'val2'
        ];
        $array2 = [
            'key3' => 'val3',
            'key4' => 'val4',
            'key5' => 'val5'
        ];
        echo HTML_PRE . 'merge : ';
        print_r(array_merge($array1, $array2));
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>array_pop | v4+</h3>
        <?php
        $array = [
            'key0' => 'val0',
            'key1' => 'val1',
            'key2' => 'val2'
        ];
        echo HTML_PRE;
        echo '1 - current : ';
        print_r($array);
        echo HTML_BR;
        echo '2 - deleted element : ';
        print_r(array_pop($array));
        echo HTML_BR;
        echo HTML_BR;
        echo '3 - current : ';
        print_r($array);
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>array_push | v4+</h3>
        <?php
        $array = [
            'key0' => 'val0',
            'key1' => 'val1',
            'key2' => 'val2'
        ];
        array_push($array, 'val3', 'val4');
        echo HTML_PRE;
        print_r($array);
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>array_rand | v4+</h3>
        <?php
        $array = [
            'key0' => 'val0',
            'key1' => 'val1',
            'key2' => 'val2'
        ];
        echo HTML_PRE . 'random key : ';
        print_r(array_rand($array, 1));
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>array_reverse | v4+</h3>
        <?php
        $array = [
            'key0' => 'val0',
            'key1' => 'val1',
            'key2' => 'val2'
        ];
        echo HTML_PRE . 'current : ';
        print_r($array);
        echo HTML_BR;
        echo 'reverse : ';
        print_r(array_reverse($array));
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>array_search | v4.0.5+</h3>
        <?php
        $array = [
            'key0' => 'val0',
            'key1' => 'val1',
            'key2' => 'val2'
        ];
        echo HTML_PRE . 'val1 key : ';
        print_r(array_search('val1', $array));
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>array_sum | v4.0.4+</h3>
        <?php
        $array_num = [10, 9.99];
        echo HTML_PRE . '10 + 9.99 = ';
        print_r(array_sum($array_num));
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>array_values | v4+</h3>
        <?php
        $array = [
            'key0' => 'val0',
            'key1' => 'val1',
            'key2' => 'val2'
        ];
        echo HTML_PRE . 'values : ';
        print_r(array_values($array));
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>count | v4+</h3>
        <?php
        $array = [
            'key0' => 'val0',
            'key1' => 'val1',
            'key2' => 'val2'
        ];
        echo HTML_PRE . 'count : ';
        print_r(count($array));
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>current | v4+</h3>
        <?php
        $array = [
            'key0' => 'val0',
            'key1' => 'val1',
            'key2' => 'val2'
        ];
        echo HTML_PRE . 'current : ';
        print_r(current($array));
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>end | v4+</h3>
        <?php
        $array = [
            'key0' => 'val0',
            'key1' => 'val1',
            'key2' => 'val2'
        ];
        echo HTML_PRE . 'end : ';
        print_r(end($array));
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>range | v4+</h3>
        <?php
        $array = range(1, 10, 1);
        echo HTML_PRE . 'range from 1 to 10 : ';
        print_r($array);
        echo HTML_PRE_END;
        ?>
    </div>
</section>