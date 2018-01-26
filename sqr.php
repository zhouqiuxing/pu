<?php
/**
 * Created by PhpStorm.
 * User: yafei
 * Date: 2017-12-24
 * Time: 23:01
 */
//$email = $_POST['txtEmail'];
//$password = $_POST['txtPassword'];
//$sql = "SELECT * FROM tbluser WHERE email='$email' AND password='$password'";
//echo $sql;
$hostname = "localhost";
$dbuser = "zhangyanxi";
$dbpass = "yanxi312";
//$dbname = "demo_cart_db";
$dbname = "Coam_Data";

$con = new mysqli($hostname, $dbuser, $dbpass, $dbname);

if ($con->connect_error) {
    die ("Error connrrr55ect to db");
}

//$email = "1071187704@qq.com";
//$password = "123456";
//$sql = "SELECT * FROM tbluser WHERE email='$email' AND password='$password'";
$sql = "SELECT * FROM Truck_Info;";
//$sql = "SELECT * FROM Truck_Info WHERE tid<>4;";
//$sql = "SELECT plateNo,tid FROM Truck_Info where tid>4 and tid<100;";
//$sql = "SELECT * FROM Truck_Info;";
//$sql = "DELETE FROM Truck_Info where tid=15;";
//$sql = "UPDATE Truck_Info SET plateNo= '赣G0000' whee tid=6";
//$sql="INSERT INTO Truck_Info(tid,plateNo) VALUES (100, '赣G0001')";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    //login success
    //$row = $result->fetch_assoc();
    while ($row = $result->fetch_assoc()) {
        //printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
        print_r($row);
        echo "<br/>";
        echo "<br/>";
    }
    //$_SESSION["uid"] = $row['uid']; //set session
    //  setcookie("uid", $row['uid'], time() + (86400 * 30), "/"); //set cookie
    //header("Location: ondex.php");
    //print_r($row);
    echo "succesh";
} else {
    //login failed
    // setcookie("uid","yyyy", time() + (2 * 30), "/");
    echo "Invali0d login<br/>";
}
//SELECT * FROM tbluser WHERE email='1071187704@qq.com' AND password='hahaha'