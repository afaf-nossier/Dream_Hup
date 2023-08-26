<?php 
$conn = mysqli_connect("localhost" , "root" ,"","company");
if(isset($_POST['send'])){
    $Name = $_REQUEST['_name'];
    $Phone = $_REQUEST['phone'];
    $Email = $_REQUEST['email'];
    $Address = $_REQUEST['address'];
    $Message = $_REQUEST['message'];
    $insert = "INSERT INTO `user` VALUES('$Name' , '$Phone' , '$Email' , '$Address' , '$Message')";
    $result = mysqli_query($conn,$insert);
    if($result){
        header("location:../index.html#contactSection");
    }
    else{ 
        echo "Please Enter Your Informations.";
}
}
?>
