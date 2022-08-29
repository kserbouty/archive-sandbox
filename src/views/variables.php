<?php
const HTML_BR = '<br>';
const HTML_PRE = '<pre>';
const HTML_PRE_END = '</pre>';
?>

<h1>Variables</h1>

<hr>

<section>
    <h2>Built-in Functions</h2>
    <div>
        <h3>boolval | 5.5.0+</h3>
        <?php
        $x = 5;
        $y = 5;
        $expr = $x + $y;
        if (boolval($expr)) {
            echo HTML_PRE . $expr . ' return true' . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>empty | 4+</h3>
        <?php
        $x = 5;
        $y = -5;
        $expr = $x + $y;
        if (empty($expr)) {
            echo HTML_PRE . 'expr is empty' . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>floatval | 4.2.0+</h3>
        <?php
        $x = '9.99$';
        $x = floatval($x);
        echo HTML_PRE . 'float value of x : ' . $x . HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>get_debug_type | 8+</h3>
        <?php
        $x = 9.99;
        echo HTML_PRE . 'type name of x : ' . get_debug_type($x) . HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>get_defined_vars | 4.0.4+</h3>
        <?php
        unset($x);
        unset($y);
        unset($expr);
        $vars = get_defined_vars();
        ?>
        <pre>defined vars : <?php print_r($vars) ?></pre>
    </div>
    <div>
        <h3>gettype | 4+</h3>
        <?php $x = '5.5'; ?>
        <?php $y = 5.5; ?>
        <pre>x = <?= $x ?></pre>
        <pre>y = <?= $y ?></pre>
        <pre>type of x : <?= gettype($x) ?></pre>
        <pre>type of y : <?= gettype($y) ?></pre>
    </div>
    <div>
        <h3>is_array | 4+</h3>
        <?php
        $x = ['val0'];
        if (is_array($x)) {
            echo HTML_PRE . 'x is an array' . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>is_bool | 4+</h3>
        <?php
        $x = false;
        if (is_bool($x)) {
            echo HTML_PRE . 'x is a boolean' . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>is_countable | 7.3.0+</h3>
        <?php
        $x = ['a' => 'val0', 'b' => 'val1'];
        if (is_countable($x)) {
            echo HTML_PRE . 'x is considered countable (indexed array)' . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>is_float | 4+</h3>
        <?php
        $x = 1.1;
        if (is_float($x)) {
            echo HTML_PRE . 'x is a float' . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>is_int | 4+</h3>
        <?php
        $x = 10;
        if (is_int($x)) {
            echo HTML_PRE . 'x is an integer' . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>is_iterable | 7.1.0+</h3>
        <?php
        $x = ['a' => 'val0', 'b' => 'val1'];
        if (is_iterable($x)) {
            echo HTML_PRE . 'x is an iterable (indexed array)' . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>is_null | 4.0.4+</h3>
        <?php
        $x = null;
        if (is_null($x)) {
            echo HTML_PRE . 'x is null' . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>is_numeric | 4+</h3>
        <?php
        $x = 10;
        $y = '10';
        if (is_numeric($x)) {
            echo HTML_PRE . 'x is a number' . HTML_PRE_END;
        }
        if (is_numeric($y)) {
            echo HTML_PRE . 'y is a numeric string' . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>is_object | 4+</h3>
        <?php
        class NewClass
        {
        }
        $x = new NewClass;
        if (is_object($x)) {
            echo HTML_PRE . 'x is an object' . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>is_scalar | 4.0.5+</h3>
        <?php
        $i = 5;
        $x = true;
        $y = 5.5;
        $z = 'World';
        if (is_scalar($i)) {
            echo HTML_PRE . 'i is a scalar (int)' . HTML_PRE_END;
        }
        if (is_scalar($x)) {
            echo HTML_PRE . 'x is a scalar (bool)' . HTML_PRE_END;
        }
        if (is_scalar($y)) {
            echo HTML_PRE . 'y is a scalar (float)' . HTML_PRE_END;
        }
        if (is_scalar($z)) {
            echo HTML_PRE . 'z is a scalar (string)' . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>is_string | 4+</h3>
        <?php
        $x = 'true';
        if (is_string($x)) {
            echo HTML_PRE . 'x is a string' . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>isset | 4+</h3>
        <?php
        $x = true;
        if (isset($x)) {
            echo HTML_PRE . 'x is declared, not null' . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>settype | 4+</h3>
        <?php
        $x = '10.1500idx';
        $y = $x;
        echo HTML_PRE . 'unset x = ' . $x . HTML_PRE_END;
        settype($x, 'float');
        echo HTML_PRE . 'set x = ' .  $x . HTML_PRE_END;
        ?>
    </div>
</section>