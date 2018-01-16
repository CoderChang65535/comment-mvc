<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php print $title; ?></title>
</head>
<body>
<table>
    <tr>
        <th>title</th>
        <th>content</th>
    </tr>
    <tr>
        <?php
        if ($article) {
            foreach ($article as $item) {
                print $item;
            }
        }
        ?>
    </tr>
</table>
<a href="index.php">Back</a>
</body>