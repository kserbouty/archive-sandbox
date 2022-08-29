<?php
const HTML_BR = '<br>';
const HTML_PRE = '<pre>';
const HTML_PRE_END = '</pre>';
?>

<h1>Types</h1>

<hr>

<section>
    <h2>Boolean</h2>
    <div>
        <h3>bool - true</h3>
        <?php
        $bool = true;
        var_dump($bool);
        if ($bool === true) {
            echo HTML_PRE . 'boolean true enable' . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>bool - false</h3>
        <?php
        $bool = false;
        var_dump($bool);
        if ($bool === false) {
            echo HTML_PRE . 'boolean false enable' . HTML_PRE_END;
        }
        ?>
    </div>
</section>

<hr>

<section>
    <h2>Integer</h2>
    <div>
        <h3>int</h3>
        <?php
        $i = 10;
        var_dump($i);
        ?>
    </div>
</section>

<hr>

<section>
    <h2>Double</h2>
    <div>
        <h3>float</h3>
        <?php
        $i = 5.5;
        var_dump($i);
        ?>
    </div>
    <div>
        <h3>exponent</h3>
        <?php
        $i = 10e2;
        var_dump($i);
        ?>
    </div>
    <div>
        <h3>infinite</h3>
        <?php
        $infinite = PHP_FLOAT_MAX * 2;
        if (is_infinite($infinite)) {
            echo HTML_PRE . 'infinite case enable' . HTML_PRE_END;
        }
        ?>
    </div>
</section>

<hr>

<section>
    <h2>String</h2>
    <div>
        <h3>string</h3>
        <?php
        $string = "Joe's Dinner";
        var_dump($string);
        echo HTML_PRE . gettype($string) . ' : ' . $string . HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>heredoc</h3>
        <?php
        $hour = 9;
        $heredoc = <<<STRING
            Welcome to $string. Opens at $hour A.M.
            Contact : 555-555-555.
            STRING;
        echo HTML_PRE . $heredoc . HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>nowdoc</h3>
        <?php
        $nowdoc = <<<'STRING'
            Welcome to Joe's Dinner. Opens at 9 A.M.
            Contact : 555-555-555.
            STRING;
        echo HTML_PRE . $nowdoc . HTML_PRE_END;
        ?>
    </div>
</section>

<hr>

<section>
    <h2>String - Built-in Functions</h2>
    <div>
        <div>
            <h3>explode | v4+</h3>
            <?php
            $explode = explode("'s ", $string);
            echo HTML_PRE . 'index 0 : ' . $explode[0] . HTML_PRE_END;
            echo HTML_PRE . 'index 1 : ' . $explode[1] . HTML_PRE_END;
            ?>
        </div>
        <div>
            <h3>str_contains | v8+</h3>
            <?php
            $found = str_contains($string, 'Joe');
            if ($found) {
                echo HTML_PRE . 'str_contains enable' . HTML_PRE_END;
            }
            ?>
        </div>
        <div>
            <h3>str_ends_with | v8+</h3>
            <?php
            $end = str_ends_with($string, 'inner');
            if ($end) {
                echo HTML_PRE . 'str_ends_with enable' . HTML_PRE_END;
            }
            ?>
        </div>
        <div>
            <h3>str_repeat | v4+</h3>
            <?php
            $repeat = str_repeat($string . HTML_BR, 3);
            echo HTML_PRE . $repeat . HTML_PRE_END;
            ?>
        </div>
        <div>
            <h3>str_starts_with | v8+</h3>
            <?php
            $end = str_starts_with($string, 'Jo');
            if ($end) {
                echo HTML_PRE . 'str_starts_with enable' . HTML_PRE_END;
            }
            ?>
        </div>
        <div>
            <h3>strlen | v4+</h3>
            <?php
            $length = strlen($string);
            if ($length) {
                echo HTML_PRE . 'length : ' . $length . HTML_PRE_END;
            }
            ?>
        </div>
        <div>
            <h3>strtolower | v4+</h3>
            <?php
            $lowercase = strtolower($string);
            echo HTML_PRE . $lowercase . HTML_PRE_END;
            ?>
        </div>
        <div>
            <h3>strtoupper | v4+</h3>
            <?php
            $uppercase = strtoupper($string);
            echo HTML_PRE . $uppercase . HTML_PRE_END;
            ?>
        </div>
        <div>
            <h3>substr_count | v4+</h3>
            <?php
            $substr_n = substr_count($string, 'n');
            echo HTML_PRE . 'n count : ' . $substr_n . HTML_PRE_END;
            ?>
        </div>
        <div>
            <h3>substr_replace | v4+</h3>
            <?php
            $offset = 6;
            $replace = substr_replace($string, 'Home', $offset);
            echo HTML_PRE . 'string replaced : ' . $replace . HTML_PRE_END;
            ?>
        </div>
        <div>
            <h3>substr | v4+</h3>
            <?php
            $offset = 6;
            $length = 6;
            $substr = substr($string, $offset, $length);
            echo HTML_PRE . 'substr : ' . $substr . HTML_PRE_END;
            ?>
        </div>
</section>