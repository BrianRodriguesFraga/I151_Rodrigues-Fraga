<?php
/**
 * Created by PhpStorm.
 * User: Brian.RODRIGUES-FRAG
 * Date: 21.03.2018
 * Time: 15:40
 */

ob_start();
$titre = 'Edition du snow';

if ((isset($_SESSION['login'])) && (@$_SESSION['typeUser']) == "Vendeur") : ?>

    <div class="contentArea">
        <div class="divPanel notop page-content">
            <div class="row-fluid">

                <!-- ________________________ Contenu de la page ______________________________-->

                <div class="span12" id="divMain">
                    <h1>Edition du snow</h1>
                    <?php if (isset($_GET['erreur'])) : ?>
                        <h5 class="text-error">Erreur de mot de passe</h5>
                    <?php endif;
                        $snowi = $snow->fetch();
                        $id = $snowi["idsurf"];
                    ?>

                    <form class="form" method="POST" action="index.php?action=vue_snows&edit=1&ID=<?= $id; ?>">
                        <table class="table">
                            <tr>
                                <td>IDSurf :</td>
                                <td><input type="text" placeholder="Entrez le code de votre surf" name="fID"
                                           value="<?= $id; ?>"></td>
                            </tr>
                            <tr>
                                <td>Marque :</td>
                                <td>
                                    <?php if (isset($_GET['erreur'])) : ?>
                                        <input type="text" placeholder="Entrez la marque" class="inputError"
                                               name="fMarque" value="<?= @$_GET['fMarque']; ?>">
                                    <?php else : ?>
                                        <input type="text" placeholder="Entrez la marque" name="fMarque"
                                               value="<?= $snowi["marque"]; ?>">
                                    <?php endif ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Boots :</td>
                                <td><input type="text" placeholder="Entrez les boots compatibles" name="fBoots"
                                           value="<?= $snowi['boots']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Type :</td>
                                <td><input type="text" placeholder="Entrez le type de snow" name="fType"
                                           value="<?= $snowi['type']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Disponibilité :</td>
                                <td><input type="integer" placeholder="Entrez la disponibilité en magasin" name="fDispo"
                                           value="<?= $snowi["disponibilite"]; ?>"></td>
                            </tr>
                            <tr>
                                <td><input class="btn" type="submit" value="Editer"/></td>
                                <td><input type="reset" class="btn" value="Effacer"/></td>
                            </tr>
                        </table>
                    </form>

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
