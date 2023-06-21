<?php
$insert=false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to this database failed due to ".mysqli_connect_error());
}
// echo "success connecting tohe db" ;

$name= $_POST['name'];
$ph= $_POST['phno'];
$email= $_POST['email'];
$pass= $_POST['pass'];
$gend= $_POST['gend'];
$dob= $_POST['dob'];
$hob= $_POST['hob'];
$edu= $_POST['edu'];
$adr= $_POST['adr'];
$sql = "INSERT INTO `formwta`.`formwta` ( `name`, `phno`, `email`,`pass`,`gend`,`dob`,`hob`,`edu`,`adr`) VALUES ('$name', '$ph','$email','$pass','$gend','$dob','$hob','$edu','$adr');";

// echo ($sql);

if($con->query($sql)== true){
    $insert=true;
}
else{
    echo "error: $sql <br> $con->error";
}

$con->close();

}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
<!-- current_timestamp() -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">  -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> -->
</head>
<body>
<head>
        <title>Registration Form</title>
    </head>
    <body>
        <h1 style=text-align:center>Registration Form In Html</h1>
        <?php
        if($insert)
        echo "<p>thanks for filling the form</p>";
        ?>
        <form action="index.php" method="post">
            <table>
                <tr>
                    <td>
                        Name:
                    </td>
                    <td>
                        <input name="name" id="name" type="text" placeholder="Name" name="">
                    </td>
                </tr>
                <tr>
                    <td>
                        Phone Number:
                    </td>
                    <td>
                        <input name="phno" id="phno" type="phone" placeholder="9867******">
                    </td>
                </tr>
                <tr>
                    <td>
                        Email Id:
                    </td>
                    <td>
                        <input name="email" id="email" type="email" placeholder="example1@*8">
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input name="pass" id="pass" type="password" placeholder="Password">
                    </td>
                </tr>
            <tr>
                <td>
                    Gender:
                </td>
                <td>
                    <input name="gend" id="gend 1" type="radio" name="gender">Male
                    <input name="gend" id="gend 2" type="radio" name="gender">Female
                </td>
            </tr>
            <tr>
                <td>
                    Date of Birth:
                </td>
                <td>
                    <input name="dob" id="dob" type="date">
                </td>
            </tr>
            <tr>
                <td>
                    Hobbies:
                </td>
                <td>
                    <input name="hob" id="hob 1" type="checkbox"singing>singing
                    <input name="hob" id="hob 2" type="checkbox"Dancing>Dancing
                    <input name="hob" id="hob 3" type="checkbox"playing>playing
                </td>
            </tr>
            <tr>
                <td>
                    Education Qualification:
                </td>
                <td>
                    <select name="edu" id="edu">
                        <option>Select Option</option>
                        <option>10+2</option>
                        <option>Graduation</option>
                        <option>Postgraduation</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Address:
                </td>
                <td>
                    <textarea name="adr" id="adr" rows="5" col="17" placeholder="Address"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
            </table>
        </form>
    <!-- <img class="bg" src="krish.jpg" alt="iron man">
    <div class="container">
        <h1>WELCOME</h1>
        <p>ENTER UR PARTICIPATION</p>
        
        <form action="index.php" method="post">
            <input name="name" id="name" type="text"  placeholder="enter ur name">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter ur comments"></textarea>
            <button class="btn">submit</button>
        </form>
    </div> -->

    
</body>
</html>

