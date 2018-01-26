<?php
/**
 * Created by PhpStorm.
 * User: yafei
 * Date: 2017-04-02
 * Time: 20:46
 */

//echo __DIR__;

require_once __DIR__ . "/bak/Test.php";
require_once __DIR__ . "/hhhh/Animal.php";
require_once __DIR__ . "/hhhh/Plant.php";
require_once __DIR__ . "/hhhh/Grass.php";

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "[#######################################################][Plant]";
echo "<br />";
$tree = new Plant();
$tree->seHeight(33);
$yyy = $tree->getHeight();
//$juh=$tree->type;
$tree->hdhdhd(23,55555);
$ooo = $tree->jjjj();
$tree->settype("tree");
$fff = $tree->gettype();
echo $fff;
echo "<br />";
print_r($ooo);
echo $ooo["0"];
//echo $yyy;
echo "<br />";
$flower = new Plant();
$flower->settype("flower");
echo $flower->gettype();

$plant3 = new Plant();

echo "<br />";
$grass = new Grass();
$grass->settype("grass");
$grass_type = $grass->gettype();
$grass->setColor("blue");
$grass_ble = $grass->getColor();
echo $grass_ble;

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br />";
echo "[#######################################################][Animal]";
echo "<br />";
$animal = new Animal();


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br />";
echo "[###########################     ############################][Test]";
echo "<br />";
$test = new Test();
$test->say();
$test->setColor("bffflue");
$test->addIndex();
$test->addIndex();
$ddd = $test->getColor();
echo "<p style='color: #ac2925' >" . $ddd . "uuuuu</p>";
$inex = $test->getIndex();
$mutIn = $inex * 1000;
echo $mutIn;
$test->say();
echo $test->index;
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//$mysqli = new mysqli("localhost", "zhangyanxi", "yanxi312", "test");
//
///* check connection */
//if (mysqli_connect_errno()) {
//    printf("Connect failed: %s\n", mysqli_connect_error());
//    exit();
//}
//
//printf("Host information: %s\n", $mysqli->host_info);
//
////获取当前字符集
//echo $mysqli->character_set_name() . "<br>";
////获取客户端信息
//echo $mysqli->get_client_info() . "<br>";
////获取mysql主机信息
//echo $mysqli->host_info . "<br>";
////获取服务器信息
//echo $mysqli->server_info . "<br>";
////获取服务器版本
//echo $mysqli->server_version . "<br>";
//
//
////构造SQL语句
////$query = "SELECT * FROM  user order by Host LIMIT 4000";
//$query = "SELECT * FROM userqqq";
////执行SQL语句
//$result = $mysqli->query($query);
////遍历结果
//while ($row = $result->fetch_array(MYSQLI_BOTH)) {
//    echo "Host:" . $row['Host'] . "|" . $row['User'] . "<br />";
//}
//
//
//
//$query = "SELECT * FROM Account_CustomerInfo";
////执行SQL语句
//$result = $mysqli->query($query);
////遍历结果
//while ($row = $result->fetch_array(MYSQLI_BOTH)) {
//    echo "Account_CustomerInfoooo:<b style='color: #2e6da4;'>" . $row['aInfoName'] . '</b>|<b style="background-color:red;">'. $row['aInfoPhone'] . "</b><br />";
//}
//
//
//
////释放结果集
//$result->free();
//
//
////关闭数据库连接
//$mysqli->close();


//$link = mysqli_connect("localhost", "zhangyanxi", "yanxi312", "test");
//
///* check connection */
//if (!$link) {
//    printf("Connect failed: %s\n", mysqli_connect_error());
//    exit();
//}
//
//printf("Host information: %s\n", mysqli_get_host_info($link));
//
///* close connection */
//mysqli_close($link);


?>
