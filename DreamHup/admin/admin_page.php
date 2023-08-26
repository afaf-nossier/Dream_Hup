<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <style>
        body{
            background-color: rgba(169, 169, 169, 0.938);
        }
        h1{
            text-align:center;
            style:Italic;
            color:#3a3843;
            margin-bottom: 50px;
        }
        table{
            background:white;
            border-spacing:5px;
            text-align:center;
            margin-left: 200px;

        }
        th{
            background:grey;
            color:azure;
            width: 50px;
            height:50px;
        }
        td:hover{
            height:25px;
            background-color:gray;
            color:white;
        }
    </style>
</head>
<body>
    <h1>Welcome Admin</h1>
    <table>
        <tr><th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Message</th>
        </tr>
        <?php
              $conn = mysqli_connect("localhost" , "root" ,"","company");
              $sql = mysqli_query($conn,"SELECT * FROM `user`");
              while($row = mysqli_fetch_array($sql)){
                  echo "<tr>";
                  echo "<td>" .$row['Name']."</td>";
                  echo "<td>" .$row['Phone']."</td>";
                  echo "<td>" .$row['Email']."</td>";
                  echo "<td>" .$row['Address']."</td>";
                  echo "<td>" .$row['Message']."</td>";
                  echo "</tr>";
              }
        ?>
    </table>
</body>