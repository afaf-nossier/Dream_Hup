<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <style>
        body{
            background-image:url("css/img/1.jpg");
            background-repeat:no-repeat;
            background-size:cover;

        }
        h1{
            text-align:center;
            color:white;
            
        }
         .f{
            width: 70%;
            margin: 50px 190px;
            font-style: italic;
            font: bolder;
            #background-color:white;
            border-radius:20px;
              
         }
         label{
            color:white;
            font-size:20px;
            padding:20px;
         }
         input[type="text"], input[type="pass"]{
            margin-left:40px;
            margin-bottom:30px;
            padding: 12px 20px;
            width:70%;
            background-color:gray;
            opacity:50%;
            border-radius:10px;

         }
         input[type="text"]:hover{
            background-color:white;
         }
         input[type="pass"]:hover{
            background-color:white;
            
         }
         input[type="submit"]{
            width:100px;
            height:50px;
            text-align:center;
            border-radius:10px;
            background-color:gray;
            margin:70px 320px;

         }
         input[type="submit"]:hover{
            background-color:white;
            opacity:30%;
         }
    </style>
 <body>
   <div class="f">
    <h1>Admin login</h1>
    <form method="post">
    <label>Name</label><br><br>
    <input type="text" name="_name" placeholder="Enter your name"><br><br>
    <label>Password</label><br><br>
    <input type="pass" name="pass" placeholder="Enter your password"><br><br>
    <input type="submit" name="log" value="Login">
    </form>
   </div> 
</body>
</head>
</html>
<?php
     $conn = mysqli_connect("localhost" , "root" ,"","company");
     if(isset($_POST['log'])){
        $Name = $_POST['_name'];
        $Password = $_POST['pass'];
        $sql = "SELECT * FROM `admin` WHERE Name = '$Name' AND Passwd = '$Password'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1){
            header("location:./admin/admin_page.php");
        }
        else{
            echo "Error! , Please check Your name or password.";
        }
     }
?>