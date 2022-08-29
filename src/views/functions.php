<?php
const HTML_BR = '<br>';
const HTML_PRE = '<pre>';
const HTML_PRE_END = '</pre>';
?>

<h1>Functions</h1>

<hr>

<section>
    <h2>User-defined functions</h2>
    <div>
        <h3>Conditional functions</h3>
        <?php
        $x = true;
        if ($x) {
            function conditionalFunction()
            {
                echo HTML_PRE . 'conditionalFunction can be executed' . HTML_PRE_END;
                return true;
            }
        }
        conditionalFunction();
        ?>
    </div>
    <div>
        <h3>Functions within functions</h3>
        <?php
        function parentFunction()
        {
            echo HTML_PRE . 'parentFunction is initialized' . HTML_PRE_END;
            function childFunction()
            {
                echo HTML_PRE . 'childFunction can be executed' . HTML_PRE_END;
                return true;
            }
        }
        parentFunction();
        childFunction();
        ?>
    </div>
    <div>
        <h3>Recursive functions</h3>
        <?php
        $i = 1;
        function recursiveFunction($i)
        {
            if ($i <= 5) {
                echo HTML_PRE . 'recursion ' . $i . HTML_PRE_END;
                $i++;
                recursiveFunction($i);
            }
        }
        recursiveFunction($i);
        ?>
    </div>
</section>

<hr>

<section>
    <h2>Anonymous function</h2>
    <?php
    $lambda = function (int $x) {
        echo HTML_PRE . 'argument = ' . $x . HTML_PRE_END;
        echo HTML_PRE . 'anonymous function called' . HTML_PRE_END;
    };
    $x = 10;
    echo HTML_PRE . "lambda don't exist" . HTML_PRE_END;
    $lambda($x);
    ?>
</section>