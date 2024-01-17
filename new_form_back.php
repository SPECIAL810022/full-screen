<?php
include 'new_connection.php';


$first_name=$_REQUEST['Fname']; 
$middle_name=$_REQUEST['Mname']; 
$last_name=$_REQUEST['Lname'];

$number=$_REQUEST['number'];    
$al_number=$_REQUEST['alnumber'];   
$af_number=$_REQUEST['afnumber'];  

$password=$_REQUEST['password'];   
$re_password=$_REQUEST['repassword']; 
$c_password=$_REQUEST['cpassword'];

$gmail=$_REQUEST['gmail'];  
$msoft_acc=$_REQUEST['msoftaccount']; 
$insta_link=$_REQUEST['insaccount'];  

$country=$_REQUEST['country']; 

$state=$_REQUEST['statelist']; 

$district=$_REQUEST['district'];  

$gender=$_REQUEST['gender'];  

$bank=$_REQUEST['bankname'];  

$ifsc=$_REQUEST['ifsc'];  

$cualification=$_REQUEST['cualification']; 

$address=$_REQUEST['address']; 

$police=$_REQUEST['police']; 

$language=$_REQUEST['la1'];  

$railway=$_REQUEST['railway'];  

$post=$_REQUEST['post'];  


$insert=mysqli_query($conn,"INSERT INTO `engineer`(`id`, `first name`, `middle name`, `last name`, `number`, `alternat number`, `any friend's number`, `password`, `re enter password`, `confirm password`, `gmail`, `microsoft account`, `instagram id`, `country`, `state`, `district`, `gender`, `bank`, `ifsc code`, `cualification`, `address`, `police station`, `language`, `railway station`, `post office`) VALUES ('','$first_name','$middle_name','$last_name','$number','$al_number','$af_number','$password','$re_password','$c_password','$gmail','$msoft_acc','$insta_link','$country','$state','$district','$gender','$bank','$ifsc','$cualification','$address','$police','$language','$railway','$post')" );


if ($insert) {
	header("location:display.php");
};

?>