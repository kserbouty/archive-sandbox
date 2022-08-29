<?php

const HTML_BR = '<br>';
const HTML_PRE = '<pre>';
const HTML_PRE_END = '</pre>';

class BaseClass
{
}

class HiddenClass
{
}

$base_class = new BaseClass;

?>


<h1>Operators</h1>

<hr>

<section>
    <h2>Arithmetic</h2>
    <div>
        <h3>Addition</h3>
        <?php
        $x = 5;
        $y = 5;
        echo HTML_PRE;
        echo '5 + 5 = ';
        print($x + $y);
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>Subtraction</h3>
        <?php
        $x = 10;
        $y = 5;
        echo HTML_PRE;
        echo '10 - 5 = ';
        print($x - $y);
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>Multiplication</h3>
        <?php
        $x = 10;
        $y = 5;
        echo HTML_PRE;
        echo '10 * 5 = ';
        print($x * $y);
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>Division</h3>
        <?php
        $x = 10;
        $y = 5;
        echo HTML_PRE;
        echo '10 / 5 = ';
        print($x / $y);
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>Modulo</h3>
        <?php
        $x = 19;
        $y = 5;
        echo HTML_PRE;
        echo '19 % 5 = ';
        print($x % $y);
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>Exponentiation</h3>
        <?php
        $x = 5;
        $y = 3;
        echo HTML_PRE;
        echo '5e3 = ';
        print($x ** $y);
        echo HTML_PRE_END;
        ?>
    </div>
</section>

<hr>

<section>
    <h2>Assignment</h2>
    <div>
        <h3>Basic</h3>
        <?php
        $x = 5;
        $y = 1;
        $z = 1;
        echo HTML_PRE;
        echo 'before :';
        echo HTML_BR;
        echo 'x = ' . $x;
        echo HTML_BR;
        echo 'y = ' . $y;
        echo HTML_BR;
        echo 'z = ' . $z;
        echo HTML_BR;
        echo HTML_BR;
        $y = $z = $x;
        echo 'after :';
        echo HTML_BR;
        echo 'x = ' . $x;
        echo HTML_BR;
        echo 'y = ' . $y;
        echo HTML_BR;
        echo 'z = ' . $z;
        echo HTML_BR;
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>Addition</h3>
        <?php
        $x = 5;
        $y = 5;
        echo HTML_PRE;
        echo 'x = ' . $x;
        echo HTML_BR;
        echo HTML_BR;
        $x += $y;
        echo 'after 5 += 5 : ';
        echo 'x = ' . $x;
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>Subtraction</h3>
        <?php
        $x = 10;
        $y = 5;
        echo HTML_PRE;
        echo 'x = ' . $x;
        echo HTML_BR;
        echo HTML_BR;
        $x -= $y;
        echo 'after 10 -= 5 : ';
        echo 'x = ' . $x;
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>Multiplication</h3>
        <?php
        $x = 5;
        $y = 5;
        echo HTML_PRE;
        echo 'x = ' . $x;
        echo HTML_BR;
        echo HTML_BR;
        $x *= $y;
        echo 'after 5 *= 5 : ';
        echo 'x = ' . $x;
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>Division</h3>
        <?php
        $x = 25;
        $y = 5;
        echo HTML_PRE;
        echo 'x = ' . $x;
        echo HTML_BR;
        echo HTML_BR;
        $x /= $y;
        echo 'after 25 /= 5 : ';
        echo 'x = ' . $x;
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>Modulo</h3>
        <?php
        $x = 19;
        $y = 5;
        echo HTML_PRE;
        echo 'x = ' . $x;
        echo HTML_BR;
        echo HTML_BR;
        $x /= $y;
        echo 'after 19 %= 5 : ';
        echo 'x = ' . $x;
        echo HTML_PRE_END;
        ?>
        <?php $x = 19; ?>
    </div>
    <div>
        <h3>Exponentiation</h3>
        <?php
        $x = 5;
        $y = 3;
        echo HTML_PRE;
        echo 'x = ' . $x;
        echo HTML_BR;
        echo HTML_BR;
        $x **= $y;
        echo 'after 5 **= 3 : ';
        echo 'x = ' . $x;
        echo HTML_PRE_END;
        ?>
    </div>
</section>

<hr>

<section>
    <h2>Comparison</h2>
    <div>
        <h3>Equal</h3>
        <?php
        $x = 5;
        $y = 5;
        if ($x == $y) {
            echo HTML_PRE . $x . ' == ' . $y . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>Identical</h3>
        <?php
        $x = 5;
        $y = 5;
        if ($x === $y) {
            echo HTML_PRE . $x . ' === ' . $y . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>Not equal</h3>
        <?php
        $x = 5;
        $y = -5;
        if ($x != $y) {
            echo HTML_PRE . $x . ' != ' . $y . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>Not identical</h3>
        <?php
        $x = 5;
        $y = 'five';
        if ($x !== $y) {
            echo HTML_PRE . $x . ' !== ' . $y . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>Less than</h3>
        <?php
        $x = 5;
        $y = 10;
        if ($x < $y) {
            echo HTML_PRE . $x . ' < ' . $y . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>Greater than</h3>
        <?php
        $x = 5;
        $y = 1;
        if ($x > $y) {
            echo HTML_PRE . $x . ' > ' . $y . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>Less than or equal to</h3>
        <?php
        $x = 5;
        $y = 10;
        $z = 5;
        if ($x <= $y) {
            echo HTML_PRE . $x . ' <= ' . $y . HTML_PRE_END;
        }
        if ($x <= $z) {
            echo HTML_PRE . $x . ' <= ' . $z . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>Greater than or equal to</h3>
        <?php
        $x = 5;
        $y = 1;
        $z = 5;
        if ($x >= $y) {
            echo HTML_PRE . $x . ' >= ' . $y . HTML_PRE_END;
        }
        if ($x >= $z) {
            echo HTML_PRE . $x . ' >= ' . $z . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>Null Coalescing</h3>
        <?php
        $x = 5;
        $y = 1;
        unset($z);
        echo HTML_PRE . 'x = ' . $x . HTML_PRE_END;
        $x = $z ?? $y;
        echo HTML_PRE . 'after ?? : x = ' . $x . HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>Ternary</h3>
        <?php
        $expr1 = true;
        $expr2 = 'execute expr2.';
        $expr3 = 'execute expr3.';
        $x = $expr1 ? $expr2 : $expr3;
        echo HTML_PRE . 'true expr1 = ' . $x . HTML_PRE_END;
        $expr1 = false;
        $x = $expr1 ? $expr2 : $expr3;
        echo HTML_PRE . 'false expr1 = ' . $x . HTML_PRE_END;
        ?>
    </div>
</section>

<hr>

<section>
    <h2>Incrementing/Decrementing</h2>
    <div>
        <h3>Increment</h3>
        <div>
            <h4>pre-increment /w integer</h4>
            <?php
            $x = 5;
            echo HTML_PRE . 'before pre-increment : x = ' . $x . HTML_PRE_END;
            echo HTML_PRE . 'during pre-increment : ++x = ' . ++$x . HTML_PRE_END;
            echo HTML_PRE . 'after pre-increment : x = ' . $x . HTML_PRE_END;
            ?>
        </div>
        <div>
            <h4>post-increment /w integer</h4>
            <?php
            $x = 5;
            echo HTML_PRE . 'before post-increment : x = ' . $x . HTML_PRE_END;
            echo HTML_PRE . 'during post-increment : x++ = ' . $x++ . HTML_PRE_END;
            echo HTML_PRE . 'after post-increment : x = ' . $x . HTML_PRE_END;
            ?>
        </div>
        <div>
            <h4>pre-increment /w string</h4>
            <?php
            $x = 'abc';
            echo HTML_PRE . 'before pre-increment : x = ' . $x . HTML_PRE_END;
            echo HTML_PRE . 'during pre-increment : ++x = ' . ++$x . HTML_PRE_END;
            echo HTML_PRE . 'after pre-increment : x = ' . $x . HTML_PRE_END;
            ?>
            <?php $x = 'abc' ?>
        </div>
        <div>
            <h4>post-increment /w string</h4>
            <?php
            $x = 'abc';
            echo HTML_PRE . 'before post-increment : x = ' . $x . HTML_PRE_END;
            echo HTML_PRE . 'during post-increment : x++ = ' . $x++ . HTML_PRE_END;
            echo HTML_PRE . 'after post-increment : x = ' . $x . HTML_PRE_END;
            ?>
        </div>
    </div>
    <div>
        <h3>Decrement</h3>
        <div>
            <h4>pre-decrement /w integer</h4>
            <?php
            $x = 5;
            echo HTML_PRE . 'before pre-decrement : x = ' . $x . HTML_PRE_END;
            echo HTML_PRE . 'during pre-decrement : --x = ' . --$x . HTML_PRE_END;
            echo HTML_PRE . 'after pre-decrement : x = ' . $x . HTML_PRE_END;
            ?>
        </div>
        <div>
            <h4>post-decrement /w integer</h4>
            <?php
            $x = 5;
            echo HTML_PRE . 'before post-decrement : x = ' . $x . HTML_PRE_END;
            echo HTML_PRE . 'during post-decrement : x-- = ' . $x-- . HTML_PRE_END;
            echo HTML_PRE . 'after post-decrement : x = ' . $x . HTML_PRE_END;
            ?>
        </div>
    </div>
</section>

<hr>

<section>
    <h2>Logical</h2>
    <div>
        <h3>And</h3>
        <?php
        $expr1 = true;
        $expr2 = true;
        if ($expr1 && $expr2) {
            echo HTML_PRE . 'expr1 and expr2 are true' . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>Or</h3>
        <?php
        $expr1 = true;
        $expr2 = false;
        if ($expr1 || $expr2) {
            echo HTML_PRE . 'expr1 or expr2 is true' . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>Xor</h3>
        <?php
        if ($expr1 xor $expr2) {
            echo HTML_PRE . 'expr1 or expr2 is true, not both' . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>Not</h3>
        <?php
        $expr1 = false;
        if (!$expr1) {
            echo HTML_PRE . 'expr1 is not true' . HTML_PRE_END;
        }
        ?>
    </div>
</section>

<hr>

<section>
    <h2>String</h2>
    <div>
        <h3>Concatenation</h3>
        <?php
        $message = 'New product available at ';
        $price = 9.99;
        $sign = '$.';
        $string = $message . $price . $sign;
        echo HTML_PRE . $string . HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>Concatenation w/ Assignment</h3>
        <?php
        $newString = ' Taxes included.';
        $string .=  $newString;
        echo HTML_PRE . $string . HTML_PRE_END;
        ?>
    </div>
</section>

<hr>

<section>
    <h2>Array</h2>
    <div>
        <h3>Union</h3>
        <div>
            <h4>union w/ indexed</h4>
            <?php
            $array1 = ['val0', 'val1', 'val2'];
            $array2 = ['val3', 'val4', 'val5', 'val6', 'val7'];
            $array1 += $array2;
            echo HTML_PRE;
            print_r($array1);
            echo HTML_PRE_END;
            ?>
        </div>
        <div>
            <h4>union w/ associative</h4>
            <?php
            $array1 = ['a' => 'val0', 'b' => 'val1', 'c' => 'val2'];
            $array2 = ['d' => 'val3', 'e' => 'val4', 'f' => 'val5'];
            $array1 += $array2;
            echo HTML_PRE;
            print_r($array1);
            echo HTML_PRE_END;
            ?>
        </div>
    </div>
</section>

<hr>

<section>
    <h2>Type</h2>
    <div>
        <h3>instanceof</h3>
        <?php
        if ($base_class instanceof NewClass) {
            echo HTML_PRE . 'NewClass instantiated.' . HTML_PRE_END;
        }
        if (!$base_class instanceof HiddenClass) {
            echo HTML_PRE . 'HiddenClass not instantiated.' . HTML_PRE_END;
        }
        ?>
    </div>
</section>