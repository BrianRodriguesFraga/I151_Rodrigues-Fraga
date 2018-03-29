<?php
/**
 * Created by PhpStorm.
 * User: Brian.RODRIGUES-FRAG
 * Date: 15.02.2018
 * Time: 10:32
 */
// tampon de flux stocké en mémoire
ob_start();
if (isset($_SESSION)) {
    $_SESSION = array();
    session_destroy();
}

$titre="RentASnow - Login";
?>

<article>
  <header>
    <h2>Login</h2>
      <form method='post' action=''>
        <table class="table">
            <tr>
                <td>Nom d'utilisateur :</td>
                <td><input type="text" name="username" value=""></td>
                <td></td>
            </tr>
            <tr>
                <td>Mot de passe :</td>
                <td><input class="btn" type="password" name="password" value=""></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input class="btn" type="submit" value="login"></td>
            </tr>
        </form>
    </table>
  </header>
</article>
<hr/>


<?php
  $contenu=ob_get_clean();
  require "gabarit.php";
?>
<script>
    window.onload = function () {
        if(!window.location.hash){
            window.location = window.location + '#loaded';
            window.location.reload();
        }
    }
</script>
