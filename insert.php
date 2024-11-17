<?php

require_once('config.php');

$name = $_POST['name']; 
$lastname = $_POST['lastname']; 
$address = $_POST['address']; 
$district = $_POST['district']; 
$dis = $_POST['dis']; 
$county = $_POST['county']; 
$code = $_POST['code']; 
$tel = $_POST['tel']; 
$date = $_POST['date']; 

$namee = $_POST['namee']; 
$lastnamee = $_POST['lastnamee']; 
$addres = $_POST['addres']; 
$districtt = $_POST['districtt']; 
$diss = $_POST['diss']; 
$countyy = $_POST['countyy']; 
$codee = $_POST['codee']; 
$tell = $_POST['tell']; 
$datee = $_POST['datee']; 


$sql = "INSERT INTO `gay`(`name_s`, `lastn_s`, `address_s`, `tumbol_s`, `district_s`, `province_s`, `code_s`, `phonenum_s`, `date_s`, `name_r`, `lastn_r`, `address_r`, `tumbol_r`, `district_r`, `province_r`, `code_r`, `phonenum_r`, `date_r`) 
VALUES ('$name','$lastname','$address','$district ','$dis','$county','$code','$tel','$date','$namee','$lastnamee','$addres','$districtt','$diss ','$countyy','$codee','$tell','$datee')";
 $query = $dbcon->prepare($sql);
 $result = $query->execute();
 if($result){
    echo"<script>
            alert('เพิ่มข้อมูลเรียบร้อย');
            window.location= 'form.html';
          </script>";
}  else{
    echo"<script>
            alert('มีบางอย่างผิดพลาด');
            window.location= 'form.html';
        </script>";
} 
?>