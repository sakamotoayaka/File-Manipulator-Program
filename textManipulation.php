<?php
$input_pathname = 'input.txt'; //インプットするファイルパス指定
$output_pathname = 'output.txt'; //アウトプットするファイルパス指定

$file = fopen($input_pathname,'r'); //ファイルを読み取り専用モードで開く
$contents = fread($file, filesize($input_pathname)); //ファイルの内容をすべて読み込む
fclose($file); //ファイル閉じる

$file = fopen($output_pathname, 'w'); //ファイルを書き込みモードで開く
fwrite($file, $contents. "\nAppending more text to this file!"); //末にテキストを追加
fclose($file); //ファイルを閉じる

