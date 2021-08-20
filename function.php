<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "uploaddatabase";

    $connection = mysqli_connect($server,$username,$password,$db);

    function add($data){
        global $connection;
        $NIM = $data["nim"];
        $angka = "/^[0-9]*$/";
        if(!preg_match($angka,$NIM)){
            echo "<html>
                <div class='container'>
                    <p style='color:red;'>NIM Must be Number</p>
                </div>
            </html>";
            return false;
        }
        $Nama = $data["nama"];
        if($Nama == null){
            echo "
                <html>
                    <div class='container'>
                        <p style='color:red;'>Name Must Be Filled</p>
                    </div>
                </html>
            ";
            return false;
        }
        $Files = upload();
        if(!$Files){
            return false;
        }
        if($NIM == null){
            
            echo "
                <html>
                    <div class='container'>
                        <p style='color:red;'>NIM Must Be Filled</p>
                    </div>
                </html>
            ";
            return false;
        }
        
        $Query = "INSERT INTO filetable VALUES ('','$NIM','$Nama','$Files')";
        mysqli_query($connection,$Query);

        return mysqli_affected_rows($connection);
    }
    function upload(){
        
        $NIM = $_POST["nim"];
        $Nama = $_POST["nama"];
       $FileName = $_FILES['fileinput']['name'];
       $FileSize = $_FILES['fileinput']['size'];
       $FileTemp = $_FILES['fileinput']['tmp_name'];
       $FileError= $_FILES['fileinput']['error'];

       if($FileError == 4){
        echo "
        <html>
            <div class='container'>
                <p style='color:red;'>File Must Be Filled</p>
            </div>
        </html>
        "; 
       }
       $FileValid = ['docx','zip','ppt','jpg'];
       $FileExtension = explode(".",$FileName);
       $FileExtension = strtolower(end($FileExtension));

       if(in_array($FileExtension,$FileValid) == false){
        echo "
        <html>
            <div class='container'>
                <p style='color:red;'>File extension does not match</p>
            </div>
        </html>
        ";
        return false; 
       }
       $NewFileName = $NIM;
       $NewFileName .= '_';
       $NewFileName .= $Nama;
       $NewFileName .= '.';
       $NewFileName .= $FileExtension;
       
       
       move_uploaded_file($FileTemp,'Cek/'. $NewFileName);

       return $NewFileName;

    }
    function choose($dt){
        $choose = $dt["select"];

        if($choose == "Mahasiswa"){
            echo "asd";
        }
    }
?>