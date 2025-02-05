<?php

require_once("./models/songModel.php");

$songFileName = date("YmdHis");
$fileSongInfo = pathinfo($_FILES["songFile"]["name"]);
$songFileName .= "." . $fileSongInfo["extension"];

echo $songFileName;