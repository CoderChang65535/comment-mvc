<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php print $title; ?></title>
</head>
<?php //print $site_default['name']; ?>
<body>
<form action='' method='post'>
    标题：
    <input type='text' name='title'>
    </br>
    内容：
    <input type='text' name='content'>
    </br>
    <input type='submit' value='提交' ,name='sub'/>
</form>
<input type="button" onclick="location.href='index.php?action=list'" value="查看记录" />

</body>