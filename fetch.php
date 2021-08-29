<?php
$roll_no = $_POST['Rollno'];
// echo  $roll_no;
$conn = mysqli_connect('localhost','root','vba_3112','Student');
$sql = "select * from student where Rollno = '$roll_no'";
$res = mysqli_query($conn,$sql);
// echo "{$res}";
$row = mysqli_fetch_array($res);
    // echo "{$row['first_name']}\n";
    // echo "{$row['Rollno']}\n";
    // echo "{$row['Branch']}\n";
    // echo "{$row['Address']}\n";
    
    mysqli_close($conn);

// $host  = $_SERVER['HTTP_HOST'];
// $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
// $extra = 'index.html';
// header("Location: http://$host$uri/$extra",true,301);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Display Page</title>
    <style>
        h1{
            
        }
        td {
    background-color:mediumseagreen;
    border: 1px solid black;
}
thead{
    background-color : darkseagreen;
}

th,
td {
    font-weight: bold;
    border: 1px solid black;
    padding: 10px;
    text-align: center;
}

td {
    font-weight: lighter;
}
table {
    margin: 0 auto;
    font-size: large;
    border: 1px solid black;
}
img{
    position : absolute;
    left : 35%
}
button {
    position : absolute;
    bottom : 7%;
    left : 45%;
}
    </style>
</head>
<body>
    <div class="container">
        <h1 class = "center">Your data is given Below</h1>
        <table>
            <thead>
            <tr>
                <th>Roll No</th>
                <th >First Name</th>
                <th >Last Name</th>
                <th >Branch</th>
                <th >Address</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo $row['Rollno'];?></td>
                <td><?php echo $row['first_name'];?></td>
                <td><?php echo $row['last_name'];?></td>
                <td><?php echo $row['Branch'];?></td>
                <td><?php echo $row['Address'];?></td>
            </tr>
            </tbody>
        </table>
        <br>
        <img src="student.jfif" alt="Student Photo" class = "center" width = 400px height = 300px>
        <br>
        <button type = "reset" id = "reset" onclick = "reset()">Back</button>
    </div>
    <script>
        function reset(){
            window.open('index.html',"_self")
        }
    </script>
</body>
</html>