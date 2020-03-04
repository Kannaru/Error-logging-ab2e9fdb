<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
countDown(11);

function countDown($argument) {
    try {
        if($argument > 10){
            throw new Exception($foutmelding);
        }
    }catch(Exception $argument){
        error_log("Er is iets fout gegaan", 0);
    }

}
?>

    
</body>
</html>