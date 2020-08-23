<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/css/style.css">
    <title>formulaire</title>
</head>

<body>
    <section class="content">
        <div class="nav-content">

        <?php
            if (isset($_POST["Nom"])) {
                include("./function/function.php");
            ?>
            
                <article class="box affiche">
                    <div class="content">
                        <table class="table">
                            <tr>
                                <th class="th">Remboursement CQ</th>
                                <th class="th">Garantie</th>
                                <th class="th">Montant Remboursé</th>
                                <th class="th">Total</th>
                            </tr>
                            <tr>
                                <td class="td"><?php Montant(); ?></td>
                                <td class="td"><?php if ($_POST['Garantie']) : Garantie();
                                                else : echo  0 . ' €';
                                                endif; ?></td>
                                <td class="td"><?php if ($_POST['Garantie']) : Rembourse();
                                                else : echo  0 . ' €';
                                                endif; ?></td>
                                <td class="td"><?php if ($_POST['Garantie']) : Total();
                                                else : echo  0 . ' €';
                                                endif; ?></td>
                            </tr>
                        </table>
                    </div>
                </article>
            <?php
            } else {
            ?>
                <article class="block">
                    <!-- formulaire -->
                    <form class="formulaire" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">

                        <!-- Section formule -->
                        <div class="formule">
                            <div class="les-input">
                                <input class="input" type="text" name="Nom" placeholder="Nom*" required>
                            </div>
                            <div class="les-input">
                                <input class="input" type="text" name="Prenom" placeholder="Prénom*" required>
                            </div>
                            <div class="les-input">
                                <input class="input" type="number" name="Telephone" placeholder="Téléphone*" required>
                            </div>
                            <div class="les-input">
                                <input class="input" type="text" name="Email" placeholder="Email*" required>
                            </div>
                        </div>

                        <!--  section-question -->
                        <div class="sect-choices">
	                <div class="questions">
	                    <div class="input">
	                    	<label>
                            Choisissez votre type de consultation <br>

	                    		<input onclick="Evnt('consulte-A')" type="radio" name="MD" value="Mr">
		                        Travaux dentaire
		                        <hr>
		                        <input onclick="Evnt('consulte-B')" type="radio" name="MD" value="Mr">
		                        Consultation normale
		                        <hr>
		                        <input onclick="Evnt('consulte-C')" type="radio" name="MD" value="Mr">
		                        Soin dentaire
		                        <hr>
	                    	</label>
	                    </div>
                        <div class="sect-choices">
                            <div class="questions">
                                <div class="formule">
                                    <div class="les-input" id="">
                                        <select class="input" name="dents" id="activities1" style=" width: 217px;display: none;">
                                            <option value="">Consultation</option>
                                            <option value="Chirurgien dentiste">Chirurgien dentiste</option>
                                            <option value="stomatoloque (secteur 1)">stomatoloque (secteur 1)</option>
                                            <option value="stomatoloque (secteur 2)">stomatoloque (secteur 2)</option>
                                        </select>
                                    </div>
                                    <div class="les-input" id="">
                                        <select class="input" name="dents" id="activities2" style=" width: 217px; display: none;">
                                            <option value="">Travaux dentaire</option>
                                            <option value="Couronnes">Couronnes</option>
                                            <option value="Bridge 3elements">Bridge 3elements</option>
                                            <option value="Appareil dentaire(1a3dents)">Appareil dentaire (1 a 3 dents)</option>
                                            <option value="Appareil dentaire(14dents)">Appareil dentaire ( 14 dents)</option>
                                            <option value="Travaux dorthodontie">Travaux d'orthodontie</option>
                                        </select>
                                    </div>
                                    <div class="les-input" id="">
                                        <select class="input" name="dents" id="activities3" style=" width: 217px; display: none;">
                                            <option>Soin dentaire</option>
                                            <option value="Detartrage">Detartrage</option>
                                            <option value="Traitement carie 1 face">Traitement carie 1 face</option>
                                            <option value="Traitement carie 2 face">Traitement carie 2 face</option>
                                            <option value="Traitement carie 3 faces et +">Traitement carie 3 faces et +</option>
                                            <option value="Devitalisation(canine ou incisive)">Devitalisation(canine ou incisive)</option>
                                            <option value="Devitalisation(Premolaire)">Devitalisation(Premolaire)</option>
                                            <option value="Devitalisation(Molaire)">Devitalisation(Molaire)</option>
                                            <option value="Extraction dent de lait">Extraction dent de lait</option>
                                            <option value="Extraction dent de permanente">Extraction dent de permanente</option>
                                            <option value="Scellement de sillon">Scellement de sillon</option>
                                        </select>
                                    </div>
                                    <div class="les-input" id="tarif">
                                        <input class="input" type="number" name="tarif-convotion" placeholder="tarif consultation*" required style="position: relative; right:5px;">
                                    </div>
                                    <div class="les-input">
                                        <select class="input" name="Garantie" id="" placeholder="" style=" width: 217px; position: relative; top: 30px;">
                                            <option value="">Garantie</option>
                                            <option value="100">100%</option>
                                            <option value="125">125%</option>
                                            <option value="150">150%</option>
                                            <option value="150">175%</option>
                                            <option value="200">200%</option>
                                            <option value="250">250%</option>
                                            <option value="300">300%</option>
                                            <option value="400">400%</option>
                                        </select>
                                    </div>
                                    <div class="les-input">
                                        <label class="label" for="date_début">Date de naissance*</label><br>
                                        <input class="input" type="date" name="date-naissance" style=" width: 204px; height: 19px; position:relative; right:5px;" required>
                                    </div>
                                </div>
                            </div>

                            <div class="button">
                                <button class="btn" type="submit" name="comparer">Calculer le montant de remboursement</button>
                            </div>

                    </form>
                <?php } ?>
                </article>
        </div>
    </section>
    <script src="js/script.js"></script>
</body>

</html>