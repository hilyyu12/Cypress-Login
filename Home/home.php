<?php
session_start();

if(!(isset($_SESSION['user'])))
{
	header("location: ../login/login.php");
}
include '../connect.php';


?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="css/home.css">
<title>Login Test</title>
</head>
<body>
<div class="box">
        <form action="../login/logout.php" method="post">
            <table>
              <tr>
                <div class="title"><h1>Anda Telah Login</h1></div>
              </tr>
                <tr>
                  <td><button type="submit" name="button">LOGOUT</button></td>
                </tr>
              </table>
            </form>
        </div>
</body>
</html>
