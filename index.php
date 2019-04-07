<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>diceware</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    
<?php


$diceware=array();
$file_lines = file('diceware.wordlist.asc');
foreach ($file_lines as $line) {

    $word_array = explode( "\t", $line );
if (is_numeric($word_array[0]))
    $diceware=$diceware+array($word_array[0] => $word_array[1]);
}
echo('La passphrase: ');
for($i=0;$i<6;$i++){
$num=rand(1,6)*10000+rand(1,6)*1000+rand(1,6)*100+rand(1,6)*10+rand(1,6);
print_r($diceware[$num]);
echo(' ');
}

?>
</body>
</html>

