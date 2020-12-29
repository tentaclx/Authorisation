<div class="index-auth">
            <form action="/?login=yes" method="post">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="iat">


                        </td>
      </tr>
      <tr>
        <td class="iat">


                        </td>
      </tr>
      <tr>
        <td><input type="submit" value="Выйти" name="exit"></td>
<?php
if (! empty($_POST['exit'])) {
    session_destroy();
    unset($_SESSION);
    setcookie('PHPSESSID',$_COOKIE['PHPSESSID'], -1);
    //unset($_COOKIE);
    header('Location: http://p3.smirnova.newgrade.vpool/?login=yes');
    }
 ?>
      </tr>
    </table>
            </form>
</div>
