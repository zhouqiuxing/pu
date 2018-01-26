<?php
/**
 * Created by PhpStorm.
 * User: yafei
 * Date: 2018-01-05
 * Time: 20:37
 */
/**
 * 设置显示错误信息，为了方便调试
 */
ini_set('display_errors', 1);


session_start();
setcookie("uiykddddkk0000d", "oooooooo44444445555555ooooooooopppppppppppppppppppppoooo", time() + (86400 * 30), "/"); //set cookie
echo "[$ _COOKIE]##################################";
echo "<br/>";
print_r($_COOKIE);
echo "<br/>";


echo "[$ _SESSION]##################################";
echo "<br/>";
print_r($_SESSION);
echo "<br/>";

echo "[$ _post]##################################";
echo "<br/>";
print_r($_POST);
echo "<br/>";

echo "[$ _get]##################################";
echo "<br/>";
print_r($_GET);
echo "<br/>";

echo "[$ _server]##################################";
echo "<br/>";
var_dump($_SERVER);
echo "<br/>";

// 调用 error_log() 的另一种方式:
error_log(print_r($_SERVER, true), 3, "logs/my-errors.log");


echo "[$ setcookie]##################################";
echo "<br/>";
//setcookie("uiyyyyyyd", "ooooooooooooooooooooooooooooo", time() + (86400 * 30), "/"); //set cookie
//print_r($_Session_ID);

$a = array('test' => 1, 'hello' => NULL, 'pie' => array('a' => 'apple', 'apple'=> array('k'=>4)));

var_dump(isset($a['test']));            // TRUE
var_dump(isset($a['pie']['apple']['k']));             // FALSE
var_dump(isset($a['hello']));           // FALSE/$_SESSION["id"] = "11111111111111";


//$expected_array_got_string = "somestring";
$expected_array_got_string = "somestring";
var_dump(isset($expected_array_got_string['some_key']));
var_dump(isset($expected_array_got_string[0]));
var_dump(isset($expected_array_got_string['0']));
var_dump(isset($expected_array_got_string[0.5]));
var_dump(isset($expected_array_got_string['0.5']));
var_dump(isset($expected_array_got_string['0 Mostel']));
print_r($expected_array_got_string[0]);
print_r($expected_array_got_string["1"]);
print_r($expected_array_got_string[2]);
print_r($expected_array_got_string[0.5]);


?>
