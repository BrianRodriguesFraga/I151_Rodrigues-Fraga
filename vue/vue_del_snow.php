<?php
/**
 * Created by PhpStorm.
 * User: Brian.RODRIGUES-FRAG
 * Date: 21.03.2018
 * Time: 14:32
 */

ob_start();
$titre = 'Snow supprimé';

if ((isset($_SESSION['login'])) && (@$_SESSION['typeUser']) == "Vendeur") : ?>

    <div class="contentArea">
        <div class="divPanel notop page-content">
            <div class="row-fluid">
                <!-- ________________________ Contenu de la page ______________________________-->
                <div class="span12" id="divMain">
                    <h1>Suppression de snow</h1>
                    <?php


                    echo @$_POST['errormessage']."<br/><br/><br/>";

                    ?>


                    <p>
                        Le snow supprimé est le <strong><?= @$_GET['ID']; ?></strong>
                    </p>

                </div>
                <!--End Main Content-->
            </div>

            <div id="footerInnerSeparator"></div>
        </div>
    </div>

    <div id="footerOuterSeparator"></div>

<?php else : ?>

    <h3>vous n'avez pas accès à cette page !</h3>

<?php endif; ?>

<?php
$contenu = ob_get_clean();
require "gabarit.php";
