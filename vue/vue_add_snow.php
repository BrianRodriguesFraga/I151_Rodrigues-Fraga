<?php
/**
 * Created by PhpStorm.
 * User: Brian.RODRIGUES-FRAG
 * Date: 15.03.2018
 * Time: 08:13
 */

ob_start();
$titre = 'Ajouter un snow';

if ((isset($_SESSION['login'])) && (@$_SESSION['typeUser']) == "Vendeur") : ?>

    <div class="contentArea">
        <div class="divPanel notop page-content">
            <div class="row-fluid">

                <!-- ________________________ Contenu de la page ______________________________-->

                <div class="span12" id="divMain">
                    <h1>Ajout de snow</h1>
                    <?php if (isset($_GET['erreur'])) : ?>
                        <h5 class="text-error">Erreur de mot de passe</h5>
                    <?php endif ?>
                    <p>
                    <form class="form" method="POST" action="index.php?action=vue_snows">
                        <table class="table">
                            <tr>
                                <td>IDSurf :</td>
                                <td><input type="text" placeholder="Entrez le code de votre surf" name="fID"
                                           value="<?= @$_GET['fID']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Marque :</td>
                                <td>
                                    <?php if (isset($_GET['erreur'])) : ?>
                                        <input type="text" placeholder="Entrez la marque" class="inputError"
                                               name="fMarque" value="<?= @$_GET['fMarque']; ?>">
                                    <?php else : ?>
                                        <input type="text" placeholder="Entrez la marque" name="fMarque"
                                               value="<?= @$_GET['fMarque']; ?>">
                                    <?php endif ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Boots :</td>
                                <td><input type="text" placeholder="Entrez les boots compatibles" name="fBoots"
                                           value="<?= @$_GET['fID']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Type :</td>
                                <td><input type="text" placeholder="Entrez le type de snow" name="fType"
                                           value="<?= @$_GET['fID']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Disponibilité :</td>
                                <td><input type="integer" placeholder="Entrez la disponibilité en magasin" name="fDispo"
                                           value="<?= @$_GET['fDispo']; ?>"></td>
                            </tr>
                            <hr/>
                            <tr>
                                <td><input class="btn" type="submit" value="Ajouter"/></td>
                                <td><input type="reset" class="btn" value="Effacer"/></td>
                            </tr>
                        </table>
                    </form>
                    </p>
                </div>
                <!--End Main Content-->
            </div>
            <div id="footerInnerSeparator"></div>
        </div>
    </div>
    <hr/>

<?php else : ?>

    <h3>vous n'avez pas accès à cette page !</h3>

<?php endif; ?>

<?php
$contenu = ob_get_clean();
require "gabarit.php";