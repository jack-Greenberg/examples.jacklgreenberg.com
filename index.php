<?php require('./functions.php') ?>

<?php require('./head.php') ?>

<?php
    echo $ms_t->render('header', array('title' => $title, 'author' => $author, 'url' => $url));
?>

<main>

<?php
$directory = './_posts';

$files = array();

foreach (scandir($directory) as $file) {
    if ('.' === $file) continue;
    if ('..' === $file) continue;

    $files[] = $file;
};

foreach($files as $file) {
    $post = file_get_contents(dirname(__FILE__).'/_posts/'.$file);

    $rows = explode("\n", $post);
    array_shift($rows);

    $post_data = array();

    foreach ($rows as $row) {
        array_shift($rows);

        if ($row === '---') {
            break;
        };

        array_push($post_data, explode(': ', $row));
    };

    $date = $post_data[0][1];
    $title = $post_data[1][1];
    $tags = $post_data[2][1];

    $content = $Parsedown->text(implode("\n", $rows));
    echo $ms_p->render('post', array('title' => $title, 'date' => $date, 'content' => $content));
};
?>

</main>

<?php require('./foot.php') ?>
