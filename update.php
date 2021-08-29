<?php
$Rollno = $_POST['Rollno'];
$conn = mysqli_connect('localhost','root','vba_3112','Student');
$sql = "select * from student where Rollno = '$Rollno'";
$res = mysqli_query($conn,$sql);
// echo "{$res}";
$row = mysqli_fetch_array($res);
    // echo "{$row['first_name']}\n";
    // echo "{$row['Rollno']}\n";
    // echo "{$row['Branch']}\n";
    // echo "{$row['Address']}\n";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="logchild2">
    
                 <form action="update2.php" method = "POST">
                 
                 <div class="mb3">
                        <label for="Roll No" class = "form-control my-4">Roll No : </label>
                        <input type="text" class = "form-control texte" id = "Rollno" name = "Rollno" placeholder = "Enter your roll number" required value = <?php echo $row['Rollno'];?> size = 20>
                     </div>
                     <br><br><br>
                    <div class="mb3 ">
                        <label for="First Name" class = "form-control my-4">First Name *: </label>
                        <input type="text" class = "form-control texte" id = "firstname" name = "first_name" placeholder = "Enter Your Name" required value = <?php echo $row['first_name'];?> size= 30>
                    </div>
                    <br> <br> <br>
                    <div class="mb3 ">
                        <label for="Last Name" class = "form-control my-4">Last Name *: </label>
                        <input type="text" class = "form-control texte" id = "lastname" name = "last_name" placeholder = "Enter Your Name" required value = <?php echo $row['last_name'];?> size=30>
                    </div>
                    <br> <br> <br>
                    
                     <div class="mb3">
                        <label for="Branch" class = "form-control my-4">Branch * : </label>
                        <input type="text" class = "form-control texte" id = "Branch" name = "Branch" placeholder = "Enter your Branch. Eg-(CSE,AI&ML)" required value = "<?php echo $row['Branch'];?>" size = 50>
                    </div>
                    <br> <br> <br>
                    <div class="mb3">
                        <label for="Address" class = "form-control my-4">Address * : </label>
                        <input type="text" class = "form-control addr" id = "Address" name = "Address" placeholder = "Enter your Address" required value = "<?php echo $row['Address'];?>" size = 150>
                    </div>
                    <br>
                    <button type = "submit" id = "Submit" class = "btn btn-primary my-4 ">Submit</button>
                    
                </form>
                
                
                 
</body>
</html>