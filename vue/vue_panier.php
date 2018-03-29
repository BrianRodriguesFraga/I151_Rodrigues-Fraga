<?php
ob_start();
$titre = 'Rent A Snow - Panier';
?>

<article>
  <header>
    <h2>Panier</h2>
    test panier asdf choucroute



  </header>
</article>
<hr/>

<?php
  $contenu=ob_get_clean();
  require "gabarit.php";
?>
