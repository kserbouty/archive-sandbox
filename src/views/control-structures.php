<?php
const HTML_BR = '<br>';
const HTML_PRE = '<pre>';
const HTML_PRE_END = '</pre>';
?>

<h1>Control Structures</h1>

<hr>

<section>
    <h2>if | 4+</h2>
    <?php
    $expr = true;
    if ($expr) {
        echo HTML_PRE . 'executed w/ if statement' . HTML_PRE_END;
    }
    ?>
</section>

<hr>

<section>
    <h2>else | 4+</h2>
    <?php
    $expr = false;
    if ($expr) {
        return $expr;
    } else {
        echo HTML_PRE . 'executed w/ else statement' . HTML_PRE_END;
    }
    ?>
</section>

<hr>

<section>
    <h2>elseif/else if | 4+</h2>
    <?php
    $expr1 = false;
    $expr2 = false;
    $expr3 = true;
    if ($expr1) {
        return $expr1;
    } else if ($expr2) {
        return $expr2;
    } else if ($expr3) {
        echo HTML_PRE . 'executed w/ else if statement / expr3' . HTML_PRE_END;
    }
    ?>
</section>

<hr>

<section>
    <h2>while | 4+</h2>
    <?php
    $x = 1;
    $y = 3;
    while ($x <= $y) {
        echo HTML_PRE . 'executed w/ while statement / iteration ' . $x . HTML_PRE_END;
        $x++;
    }
    ?>
</section>

<hr>

<section>
    <h2>do-while | 4+</h2>
    <?php
    $x = 1;
    $y = 3;
    do {
        echo HTML_PRE . 'executed w/ do-while statement / iteration ' . $x . HTML_PRE_END;
        $x++;
    } while ($x <= $y);
    ?>
</section>

<hr>

<section>
    <h2>for | 4+</h2>
    <?php
    $array = ['val0', 'val1', 'val2'];
    $count = count($array);
    for ($i = 0; $i < $count; $i++) {
        echo HTML_PRE . 'executed w/ for statement / iteration ' . $i + 1 . HTML_PRE_END;
    }
    ?>
</section>

<hr>

<section>
    <h2>foreach | 4+</h2>
    <div>
        <h3>indexed</h3>
        <?php
        $array = ['val0', 'val1', 'val2'];
        foreach ($array as $value) {
            echo HTML_PRE . 'executed w/ foreach statement / ' . $value . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>associative</h3>
        <?php
        $array = ['a' => 'val0', 'b' => 'val1', 'c' => 'val2'];
        foreach ($array as $key => $value) {
            echo HTML_PRE . 'executed w/ foreach statement / ' . $key . ' => ' . $value . HTML_PRE_END;
        }
        ?>
    </div>
</section>

<hr>

<section>
    <h2>break | 4+</h2>
    <?php
    $array = ['val0', 'val1', 'val2', 'val3'];
    $i = 0;
    foreach ($array as $value) {
        if ($i == 2) {
            echo HTML_PRE  . 'iteration ' . $i . ' / executed before break / ' . $value . HTML_PRE_END;
            break;
        }
        $i++;
    }
    ?>
</section>

<hr>

<section>
    <h2>continue | 4+</h2>
    <?php
    $array = ['val0', 'val1', 'val2', 'val3'];
    $i = 0;
    foreach ($array as $value) {
        if ($i <= 3) {
            echo HTML_PRE  . 'iteration ' . $i . HTML_PRE_END;
            $i++;
            continue;
        }
        break;
    }
    ?>
</section>

<hr>

<section>
    <h2>switch | 4+</h2>
    <?php
    $status = '200';
    switch ($status) {
        case 100:
            echo HTML_PRE  . $status . ' Continue' . HTML_PRE_END;
            break;
        case 200:
            echo HTML_PRE  . $status . ' OK' . HTML_PRE_END;
            break;
        case 300:
            echo HTML_PRE  . $status . ' Multiple Choices' . HTML_PRE_END;
            break;
        case 400:
            echo HTML_PRE  . $status . ' Bad Request' . HTML_PRE_END;
            break;
        default:
            echo HTML_PRE  . 'Default' . HTML_PRE_END;
            break;
    }
    ?>
</section>

<hr>

<section>
    <h2>match | 8+</h2>
    <?php
    $x = 3;
    $y = match ($x) {
        1 => 'val0',
        2 => 'val1',
        3 => 'val2',
        4 => 'val3'
    };
    echo HTML_PRE  . $x . ' match with ' . $y . HTML_PRE_END;
    ?>
</section>