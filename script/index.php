<?php 
$paragraph = $_GET['paragraph'];
$badword = $_GET['bedwords'];

$paragraph_len = strlen($paragraph);

$new_paragraph = str_replace($badword, '***', $paragraph);
$new_paragraph_len = strlen($new_paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= "$paragraph $paragraph_len" ?></h1>
    <h1><?= "$new_paragraph $new_paragraph_len" ?></h1>
</body>
</html>