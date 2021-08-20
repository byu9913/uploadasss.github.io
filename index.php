<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Style/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <title>HOME</title>
</head>
<body>
    <div class="container">
    <br><br><br><br>
    <form action="" method="POST">
        <label for=""><h2 style="color:white">Select Type</h2></label>
        <select class="form-select" aria-label="Default select example" style="width:270px;" name="select">
            <option selected>CHOOSE</option>
            <option>Mahasiswa</option>
            <option>Dosen</option>
        </select><br>
        <button type="submit" class="btn btn-primary" name="next">NEXT>></button>
    </form>
    </div>
    
</body>
</html>
<?php
    session_start();
    
    if(isset($_POST["next"])){
        $choose = $_POST["select"];
        $_SESSION["type"] = true;
        if($choose == "Mahasiswa"){
            header("location: access_upload.php");
        }
        
    }
?>