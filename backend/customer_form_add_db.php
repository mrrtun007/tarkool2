<?php
include('condb.php');
  //$fileupload = $_POST['a_logo'];

//ฟังชันวันที่่
  date_default_timezone_set('Asia/Bangkok');
  $date1 = date('Ymd_His');
//ฟังชันสุ่มตัวเลข
  $numrand = (mt_rand());

$a_storename = $_POST['a_storename'];
$a_name = $_POST['a_name'];
$a_address = $_POST['a_address'];
$a_number = $_POST['a_number'];
$a_link = $_POST['a_link'];
$a_sn = $_POST['a_sn'];
$a_code = $_POST['a_code'];
$a_status = $_POST['a_status'];
$a_logo =(isset($_POST['a_logo']) ? $_POST['a_logo'] :'');

  //เพิ่มไฟล์
  $upload=$_FILES['a_logo'];
  if($upload != ''){  //not select file
    //โฟลเดอร์ที่ จะ upload file เข้าไป
    $path="a_logo/";
    //เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
    $type = strrchr($_FILES['a_logo']['name'],".");
    //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
  $newname = $numrand.$date1.$type;
  $path_copy =$path.$newname;
  $path_link="a_logo/".$newname;

  //คัดลอกไฟล์ไปเก็บที่เว็ปเวิฟเวอร์
  move_uploaded_file($_FILES['a_logo']['tmp_name'],$path_copy);
  }  

$sql ="INSERT INTO customer_data1
    
    (a_storename,  a_name, a_address ,a_number, a_link ,a_sn ,a_code, a_logo, newname ,a_status)

    VALUES 

    ('$a_storename', '$a_name','$a_address','$a_number','$a_link','$a_sn','$a_code','$a_logo','$newname','$a_status')";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('เพิ่มข้อมูลเรียบร้อย');";
      echo "window.location ='customerdata.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='customerdata.php'; ";
      echo "</script>";
    }
?>