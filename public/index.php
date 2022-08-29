<?php

declare(strict_types=1);

namespace Sandbox;

const HTML_BR = '<br>';
const HTML_PRE = '<pre>';
const HTML_PRE_END = '</pre>';

$uri = $_SERVER['REQUEST_URI'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandbox PHP</title>
</head>

<body>
    <main>
        <nav>
            <strong>Sandbox PHP</strong>
            <ul>
                <a href="/sandbox-php/arrays">Arrays</a>
                <a href="/sandbox-php/constants">Constants</a>
                <a href="/sandbox-php/functions">Functions</a>
                <a href="/sandbox-php/operators">Operators</a>
                <a href="/sandbox-php/types">Types</a>
                <a href="/sandbox-php/variables">Variables</a>
                <hr>
                <a href="/sandbox-php/date-time">Date Time</a>
                <hr>
                <a href="/sandbox-php/control-structures">Control Structures</a>
                <a href="/sandbox-php/queue">Queue</a>
                <a href="/sandbox-php/stack">Stack</a>
                <a href="/sandbox-php/algorithms">Algorithms</a>
                <hr>
            </ul>
        </nav>

        <?php include('../src/routes/routes.php') ?>

    </main>
</body>

</html>