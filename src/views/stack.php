<?php

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use Ds\Stack;

$stack = new Stack;
$stack->allocate(16);
$stack->push('Last');
$stack->push('In');
$stack->push('First');
$stack->push('Out');

?>

<h2>Stack - Last In First Out</h2>

<section>
    <h3>stack</h3>
    <pre><?php print_r($stack) ?></pre>
</section>

<section>
    <h3>capacity()</h3>
    <pre><?php print_r($stack->capacity()) ?></pre>
</section>

<section>
    <h3>clear()</h3>
    <?php
$copy = $stack->copy();
$stack->clear();
?>
    <pre><?php print_r($stack) ?></pre>
</section>

<section>
    <h3>copy()</h3>
    <?php $stack = $copy ?>
    <pre><?php print_r($stack) ?></pre>
</section>

<section>
    <h3>peek()</h3>
    <?php $top = $stack->peek() ?>
    <pre><?php print_r($top) ?></pre>
</section>

<section>
    <h3>pop()</h3>
    <?php $top = $stack->pop() ?>
    <pre><?php print_r($top) ?></pre>
    <pre><?php print_r($stack) ?></pre>
</section>

<section>
    <h2>toArray()</h2>
    <?php $array = $stack->toArray() ?>
    <pre><?php print_r($array) ?></pre>
</section>