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
        if ($file === 'example.md') {
            continue;
        };

        $contents = file_get_contents(dirname(__FILE__).'/examples/'.$file);

        $rows = explode("\n", $contents);
        array_shift($rows);

        $example_data = array();

        // to get the data and the code
        foreach ($rows as $row) {
            array_shift($rows);

            if ($row === '---') {
                break;
            };

            array_push($example_data, explode(': ', $row));
        };



        // to get the details
        // var_dump($rows);

        $title = $example_data[0][1];
        $desc = $example_data[1][1];
        $content = $Parsedown->text(implode("\n", $rows));

        echo $ms_t->render('example', array('title' => $title, 'desc' => $desc, 'content' => $content));
    };
?>

</main>

<?php require('./foot.php') ?>
