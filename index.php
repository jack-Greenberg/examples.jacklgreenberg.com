<?php require('./functions.php') ?>

<?php require('./head.php') ?>

<?php
    echo $ms_t->render('header');
?>

<main>

<?php
    $directory = './examples';
    $files = array();
    foreach (scandir($directory) as $file) {
        if ('.' === $file) continue;
        if ('..' === $file) continue;
        $files[] = $file;
    };

    foreach($files as $file) {
        $contents = file_get_contents(dirname(__FILE__).'/examples/'.$file);

        $rows = explode("\n", $contents);
        array_shift($rows);

        $example_data = array();

        foreach ($rows as $row) {
            array_shift($rows);

            if ($row === '---') {
                break;
            };

            array_push($example_data, explode(': ', $row));
        };

        $title = $example_data[0][1];
        $desc = $example_data[1][1];

        $content = $Parsedown->text(implode("\n", $rows));
        echo $ms_t->render('example', array('title' => $title, 'desc' => $desc, 'code' => $content));
    };
?>

</main>

<?php require('./foot.php') ?>
