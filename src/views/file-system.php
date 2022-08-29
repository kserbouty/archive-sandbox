<h1>File System</h1>

<hr>

<section>
    <h2>Filesystem Functions</h2>
    <div>
        <h3>dirname</h3>
        <?php
        $dir_parent = dirname(getcwd());
        echo HTML_PRE . $dir_parent . HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>file_exists | 4+</h3>
        <?php
        mkdir('folder');
        if (file_exists('folder')) {
            echo HTML_PRE . '1 - folder currently exist' . HTML_PRE_END;
        }
        rmdir('folder');
        if (!file_exists('folder')) {
            echo HTML_PRE . '2 - folder deleted' . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>is_dir</h3>
        <?php
        $path = getcwd();
        if (is_dir($path)) {
            echo HTML_PRE . 'is_dir enable' . HTML_PRE_END;
        }
        ?>
    </div>
    <div>
        <h3>is_file</h3>
        <?php
        $path = __DIR__ . '\file-system.php';
        if (is_file($path)) {
            echo HTML_PRE . 'is_file enable' . HTML_PRE_END;
        }
        ?>
    </div>
</section>

<hr>

<section>
    <h2>Directory Functions</h2>
    <div>
        <h3>dir | 4+</h3>
        <?php
        $dir = dir(__DIR__);
        echo HTML_PRE;
        print_r($dir);
        echo HTML_PRE_END;
        ?>
        <pre>instance of Directory : <?php  ?></pre>
    </div>
    <div>
        <h3>getcwd | 4+</h3>
        <?php
        $current = getcwd();
        echo HTML_PRE;
        print_r($current);
        echo HTML_PRE_END;
        ?>
    </div>
    <div>
        <h3>scandir | 5+</h3>
        <?php
        $content = scandir(__DIR__);
        echo HTML_PRE;
        print_r($content);
        echo HTML_PRE_END;
        ?>
    </div>
</section>
