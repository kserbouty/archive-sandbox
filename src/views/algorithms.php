<?php

class BinarySearch
{
    static function searchBinary(array $array, string $target)
    {
        $left_limit = 0;
        $right_limit = count($array) - 1;
        $iteration = 0;

        while ($left_limit <= $right_limit) {
            $iteration++;
            $middle_array = floor(($left_limit + $right_limit) / 2);

            if ($array[$middle_array] === $target) {
                echo '<pre>Target ' . $target . ' found, iteration ' . $iteration . '.</pre>';
                return true;
            }

            if ($target < $array[$middle_array]) {
                echo '<pre>Current index => ' . $array[$middle_array] . '.</pre>';
                echo '<pre>Left side research.</pre>';
                $right_limit = $middle_array - 1;
            }

            if ($target > $array[$middle_array]) {
                echo '<pre>Current index => ' . $array[$middle_array] . '.</pre>';
                echo '<pre>Right side research.</pre>';
                $left_limit = $middle_array + 1;
            }
        }
    }
}

class LinearSearch
{
    static function searchLinear(array $array, string $target)
    {
        $iteration = 0;

        foreach ($array as $value) {
            $iteration++;

            if ($value !== $target) {
                echo '<pre>In loop ' . $iteration . ', targeted ' . $value . '.</pre>';
            }

            if ($value === $target) {
                echo '<pre>Target ' . $target . ' found, iteration ' . $iteration . '.</pre>';
                return true;
            }
        }
    }
}

$array = ['a', 'z', 'c', 'd', 'x', 'f', 'j', 'e', 'y', 'b'];
$target = 'y';

$binary_search = new BinarySearch;
$linear_search = new LinearSearch;

sort($array, SORT_LOCALE_STRING);

?>

<h1>Algorithms - Searching</h1>

<hr>

<section>
    <h2>Linear Search</h2>
    <?php $linear_search->searchLinear($array, $target) ?>
</section>

<section>
    <h2>Binary Search</h2>
    <?php $binary_search->searchBinary($array, $target) ?>
</section>