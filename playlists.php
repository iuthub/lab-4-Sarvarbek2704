<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Music Viewer</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link href="viewer.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div id="first">
    <h1>190M Music Playlist Viewer</h1>
    <h2>Search Through Your Playlists and Music</h2>
</div>

<div id="space">
    <ul id="list1">
        <?php
        $data = $_GET["data"];

        $myfile = fopen($data, "r") or die("Unable to open file!");
        // Output one line until end-of-file
        while(!feof($myfile)) {
            $music = fgets($myfile);
            $musicName = basename($music);
            ?>
            <li class="item1"> <a href="<?= 'songs/'. $music ?>"><?= $musicName ?> </a></li>
        <?php }
        fclose($myfile);
        ?>
    </ul>
</div>
</body>
</html>