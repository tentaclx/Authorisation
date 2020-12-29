<div class="project-folders-menu">
  <ul class="project-folders-v">
      <li class="project-folders-v-active"><a href="#">Авторизация</a></li>
      <li><a href="#">Регистрация</a></li>
      <li><a href="#">Забыли пароль?</a></li>
  </ul>
    <div class="clearfix"></div>
</div>

<div class="index-auth">
            <form action="/?login=yes" method="post">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <?php
      //    if (empty($_COOKIE['auth'])) : ?>
          <?php //(! empty($_COOKIE['auth'])) ? 'style="display: none;"' : ''?>
        <tr <?=(isset($_COOKIE['auth'])) ? 'style="display: none;"' : ''?>>
          <td class="iat">



                            <label for="login_id">Ваш e-mail:</label>
                            <input id="login_id" size="30" name="login" value="<?php
                                 if (
                                     empty($_SESSION['authorised']) ||
                                     ! $_SESSION['authorised']) {
                                        if (isset($_COOKIE['auth']) {
                                            echo $logins[$_COOKIE['auth']];
                                    }
                                 }

                            $_POST['login'] ?? ''?>">
                        </td>
      </tr>
      <tr>
      <?php //endif ?>
        <td class="iat">
                            <label for="password_id">Ваш пароль:</label>
                            <input id="password_id" size="30" name="password" type="password" value="<?=$_POST['password'] ?? ''?>">
                        </td>
      </tr>
      <tr>
        <td><input type="submit" value="Войти" name="enter"></td>
            <div>
                <?php
                if ($success) {
                    include __DIR__ . '/include/success.php';
                }
                if ($error) {
                    include __DIR__ . '/include/error.php';
                }
                ?>
            </div>
      </tr>
    </table>
            </form>
</div>
