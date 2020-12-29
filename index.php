<?php

session_start();

$success = false;
$error = false;


if (! empty($_POST) && ! empty($_POST['enter'])){
      include __DIR__ . '/logins.php';
      include __DIR__ . '/passwords.php';
    $index = array_search($_POST['login'], $logins);
    if (
        ! empty($_POST['login']) &&
        ! empty($_POST['password']) &&
        $index !== false &&
        $_POST['password'] == $passwords[$index]
      ) {
          $success = true;
          $_SESSION['authorised'] = true;
          $_SESSION['id']= $index;

      } else {
        $error = true;

      }
}
?>
<pre><?php
var_dump($_SESSION);
var_dump($_POST);
var_dump($_COOKIE);

?></pre>
<?php
include '/home/CREAT0RS/smirnov.a/p3/htdocs/header.php'; // Ходор
?>

	<table width="100%" border="0" cellspacing="0" cellpadding="0">
    	<tr>
        	<td class="left-collum-index">

				<h1>Возможности проекта —</h1>
				<p>Вести свои личные списки, например покупки в магазине, цели, задачи и многое другое. Делится списками с друзьями и просматривать списки друзей.</p>


			</td>
            <td class="right-collum-index">

<!-- отсюда -->
        <?php
        if (! empty($_SESSION['authorised']) && $_SESSION['authorised']) {
            include '/home/CREAT0RS/smirnov.a/p3/htdocs/logout_form.php';
        } else if (! empty($_GET['login']) && $_GET['login'] == 'yes') {
            include '/home/CREAT0RS/smirnov.a/p3/htdocs/login_form.php';
        }
        ?>


<!-- до сюда -->
			</td>
        </tr>
    </table>


<?php
include __DIR__ . '/footer.php';
