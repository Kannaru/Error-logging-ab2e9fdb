<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
countDown(1234);

function countDown($argument){
    try {
        if($argument > 10) {
            throw new Exception("er is");
        }
    }catch(Exception $argument){
        echo(error_log("Er is iets fout gegaan" . PHP_EOL, 3, "error.log"));
    }

}
?>

    
</body>
</html>