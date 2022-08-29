<?php
const HTML_BR = '<br>';
const HTML_PRE = '<pre>';
const HTML_PRE_END = '</pre>';
const DATE = 'd/m/Y - H:ia';
?>

<h1>Date & Time</h1>

<hr>

<section>
    <h2>Built-in Functions</h2>
    <div>
        <h3>date | 4+</h3>
        <?php
        echo HTML_PRE;
        date_default_timezone_set('UTC');
        echo 'UTC Time : ';
        print_r(date(DATE));
        echo HTML_BR;
        ?>
    </div>
    <div>
        <h3>date_default_timezone_set | 5.2.0+</h3>
        <?php
        echo HTML_PRE;
        echo 'in Tokyo : ';
        date_default_timezone_set('Asia/Tokyo');
        print_r(date(DATE));
        echo HTML_BR;
        echo HTML_BR;
        date_default_timezone_set('Europe/Paris');
        echo 'in Paris : ';
        print_r(date(DATE));
        echo HTML_PRE_END;
        ?>
    </div>
</section>