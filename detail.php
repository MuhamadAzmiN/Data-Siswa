<?php 

session_start();
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $detail = null;
    foreach($_SESSION["dataSiswa"] as $key => $data){
        if($key == $id){
            $detail = $data;
            break;
        }
    }

    if($detail == null){
        header('Location: index.php');
        exit();
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1 {
        font-family: sans-serif;
        margin-top: 20px;
    }
</style>
<body>
    <h1 style="text-align: center;"><?= $detail["nama"];?></h1>
    <h1 style="text-align: center;"><?= $detail["nis"];?></h1>
    <h1 style="text-align: center;"><?= $detail["rayon"];?></h1>

</body>
</html>