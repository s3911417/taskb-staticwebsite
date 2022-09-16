<?php
//read all data
function read_data($file_name){
    $fp =fopen($file_name,'r');
    $all = [];
    while($row = fgetcsv($fp)){
        $all[]=$row;
    }
    fclose($fp);
    return $all;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
<?php
$file_name="football.csv";
$all =read_data($file_name);
echo '<h1>Display Top Scorers and Leaders</h1>';
$table1 ='<table>';
$table1 .= '<tr><th>Teams</th><th>Score</th></tr>';

echo $table1;
$table2 ='<table>';
$table2 .= '<tr><th>Team</th><th>Points</th></tr>';

echo $table2;
?>
</body>
</html>