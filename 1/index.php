<?php
require_once __DIR__ . '/Article.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Top 3 GoogleNews</title>
</head>
<body>
<h2>Top 3 GoogleNews</h2>
<table>
    <tr>
        <th>Date</th>
        <th>Title</th>
        <th>Content</th>
    </tr>
    <tr>
        <td>
        <th><?php echo $news1->getDate();?></th>
        <th><?php echo $news1->getName(); ?></th>
        <th><?php echo $news1->getContent(); ?></th>
        </td>
    </tr>
    <tr>
        <td>
        <th><?php echo $news2->getDate();?></th>
        <th><?php echo $news2->getName(); ?></th>
        <th><?php echo $news2->getContent(); ?></th>
        </td>
    </tr>
    <tr>
        <td>
        <th><?php echo $news3->getDate();?></th>
        <th><?php echo $news3->getName(); ?></th>
        <th><?php echo $news3->getContent(); ?></th>
        </td>
    </tr>
</table>
</body>
</html>