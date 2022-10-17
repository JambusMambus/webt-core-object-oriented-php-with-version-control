<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Acolytes of Ash BooTube</title>
</head>
<body>
<?php
require './YouTubeVideo.php';
require './VimeoVideo.php';

$YT = new YouTubeVideo('Bestes Video', 'https://www.youtube.com/watch?v=4IVvYa8upQA');
echo $YT->getHtml();
echo $YT->getHtml();
echo $YT->getHtml();
echo $YT->getHtml();
echo $YT->getHtml();

$VIM = new VimeoVideo('lustige Hase', 'https://vimeo.com/253989945');
echo $VIM->getHtml();
echo $VIM->getHtml();
echo $VIM->getHtml();
echo $VIM->getHtml();
echo $VIM->getHtml();

?>
</body>
</html>