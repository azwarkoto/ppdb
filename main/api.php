<?php
    
require_once 'conn.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$method=$_GET['method'];
$soal=$_POST['question'] ?? "13";
$jurusan=$_POST['jurusan'] ?? "JRSN3";
$username=$_POST['username'] ?? "PPDB002";
$jawaban=$_POST['answer'] ?? "E";
$hasil=$_POST['result'] ?? "0";
$nilai=$_POST['nilai'] ?? "0";
$benar=$_POST['benar'] ?? "0";
$salah=$_POST['salah'] ?? "0";

if($method=="cek-jawaban"){
    $query="SELECT * FROM jwb WHERE kdsoal='$soal' AND kdjurusan='$jurusan' AND username='$username'";
    $res=mysqli_query($conn,$query);
    $data_soal = mysqli_num_rows($res);  
    if($data_soal>0){
        $query="SELECT * FROM jwb WHERE kdsoal='$soal' AND kdjurusan='$jurusan' AND username='$username' AND get_jwb='$jawaban'";
        $res=mysqli_query($conn,$query);
        $data_jawaban = mysqli_num_rows($res);  
        if($data_jawaban<1){
            $query="UPDATE jwb SET get_jwb='$jawaban',hsl_jwb='$hasil' WHERE kdsoal='$soal' AND kdjurusan='$jurusan' AND username='$username'";
            $res=mysqli_query($conn,$query);    
            if($res){
                echo "updated";
            }else{
                echo "not_updated";
            }
        }else{
            echo "same_answer";
        }
    }else{
        $query="INSERT INTO jwb VALUES ('','$soal','$jurusan','$username','$jawaban','$hasil')";
        $res=mysqli_query($conn,$query);    
        if($res){
            echo "saved";
        }else{
            echo "not_saved";
        }
    }
    
}elseif($method=="cek-benar"){
    $query="SELECT COUNT(hsl_jwb) AS benar  FROM jwb WHERE  kdjurusan='$jurusan' AND username='$username' AND hsl_jwb='1'";
    $res=mysqli_query($conn,$query);
    $data=mysqli_fetch_assoc($res);
    echo $data['benar'];
}elseif($method=="cek-jawab"){
    $query="SELECT COUNT(kdsoal) AS jawab  FROM jwb WHERE  kdjurusan='$jurusan' AND username='$username' ";
    $res=mysqli_query($conn,$query);
    $data=mysqli_fetch_assoc($res);
    echo $data['jawab'];
}elseif($method=="simpan-nilai"){
    $query="INSERT INTO nilai VALUES ('','$username','$nilai','$benar','$salah')";
    $res=mysqli_query($conn,$query);    
    if($res){
        echo "saved";
    }else{
        echo "not_saved";
    }
}




