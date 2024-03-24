<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful";
    }else{
    echo "Connection Failed";
}

myqsli_select_db($con, 'salver');

$About_SALVER= $_POST['About_SALVER'];
$Vision= $_POST['Vision'];
$Mission= $_POST['Mission'];
$Our_Motto= $_POST['Our_Motto'];

$query = "INSERT INTO about_us (About_SALVER, Vision, Mission, Our_Motto) 
VALUES('$About_SALVER', '$Vision', '$Mission', '$Our_Motto')";

myqsli_select_db($con, '');
$Client_Name= $_POST['Client_Name'];
$Comment= $_POST['Comment'];

$query = "INSERT INTO client_testimonials (Client_Name, Comment) 
VALUES('$Client_Name', '$$Comment')";

$Phone_Number= $_POST['Phone_Number'];
$Email_Address= $_POST['Email_Address'];
$Website= $_POST['Website'];
$Postal_Address= $_POST['Postal_Address'];
$Social_Address= $_POST['Social_Address'];


$query = "INSERT INTO  contact (Phone_Number, Email_Address, Website, Postal_Address, Social_Address) 
VALUES('$Phone_Number', '$Email_Address', '$Website', '$Postal_Address', '$Social_Address')";

$Product_Name= $_POST['Product_Name'];
$Technical_Specifications= $_POST['Technical_Specifications'];
$General_Features= $_POST['General_Features'];
$Picture= $_POST['Pictures'];
$Versions= $_POST['Versions'];


$query = "INSERT INTO products_and_services (Product_Name, Technical_Specifications, General_Features, Picture, Versions) 
VALUES('$Product_Name', '$Technical_Specifications', '$General_Feature  s', '$Picture', '$Versions')";

mysqli_query($con, $query);
header('location:index.html');
?>