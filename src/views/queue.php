<?php

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use Ds\Queue;

$queue = new Queue;
$queue->allocate(8);
$queue->push('First');
$queue->push('In');
$queue->push('First');
$queue->push('Out');

?>


<h2>Queue - First In First Out</h2>

<section>
    <h3>queue</h3>
    <pre><?php print_r($queue) ?></pre>
</section>

<section>
    <h3>capacity()</h3>
    <pre><?php print_r($queue->capacity()) ?></pre>
</section>

<section>
    <h3>clear()</h3>
    <?php
$copy = $queue->copy();
$queue->clear();
?>
    <pre><?php print_r($queue) ?></pre>
</section>

<section>
    <h3>copy()</h3>
    <?php $queue = $copy ?>
    <pre><?php print_r($copy) ?></pre>
</section>

<section>
    <h3>peek()</h3>
    <?php $front = $queue->peek() ?>
    <pre><?php print_r($front) ?></pre>
</section>

<section>
    <h3>pop()</h3>
    <?php $front = $queue->pop() ?>
    <pre><?php print_r($front) ?></pre>
    <pre><?php print_r($queue) ?></pre>
</section>

<section>
    <h3>toArray()</h3>
    <?php $array = $queue->toArray() ?>
    <pre><?php print_r($array) ?></pre>
</section>