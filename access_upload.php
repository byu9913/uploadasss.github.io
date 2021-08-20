<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Style/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>UPLOAD APPLICATION</title>
</head>
<body>
    <div class="container">
    <form action="" method="post" enctype="multipart/form-data">
            <br><br>
           <h2 style="color: white;">Upload File Application</h2><br>
           <p style="color:red;">
           <b>
           KETENTUAN:<br>
           *File yang diterima berupa docx,zip dan ppt
           </b>
        
            </p>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" style="color: white;"><b>NIM</b></label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nim">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" style="color: white;"><b>Name</b></label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nama">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" style="color: white;"><b>Upload File</b></label>
                <input type="file" class="form-control" id="exampleFormControlInput1" name="fileinput">
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-success" type="submit" name="input">SUBMIT APPLICATION</button>
            </div>
       </form>
    </div>
    
</body>
</html>
<?php
    session_start();
    if(!isset($_SESSION["type"])){
        header("location::index.php");
        exit;
    }
    require "function.php";
    if(isset($_POST["input"])){
        if(add($_POST) > 0){
            echo "
                <script>
                Swal.fire(
                    'Done',
                    'Data Saved',
                    'success'
                  )
                </script>
            ";
            
        }
        
        else{
            echo "
                <script>
                Swal.fire(
                    'Error',
                    'Data not Saved',
                    'error'
                  )
                    document.location.href('access_upload.php');
                </script>
            ";
        }
    }
?>

