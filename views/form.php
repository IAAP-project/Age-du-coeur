<?php
// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
if (basename($_SERVER["PHP_SELF"]) != "index.php") {
	header("Location:../index.php?view=form");
	die("");
}
?>
<div class="container">
    
        <form action="action_page.php" method="POST">

            <!-- <div class="row" id="prenoms">
                <div class="col-25" >
                    <label for="fname">Prénom</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="firstname" placeholder="Prénom">
                </div>
            </div>
            <div class="row" id="noms">
                <div class="col-25">
                    <label for="lname">Nom</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Nom">
                </div>
            </div>
    
            <div class="row" id="sexe">
                <div class="col-25">
                    <label for="sexe">Sexe</label>
                </div>
                <div class="col-75">
                    <div class="col-75">
                        <input required type="radio" class="F" name="gender" value="F">
                        <label for="F" class="F">F</label>
                        <input required type="radio" class="M" name="gender" value="M">
                        <label for="M" class="M">M</label></br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="date_de_naissance">Date de naissance</label>
                </div>
                <div class="col-75">
                    <input required type="date" id="date_de_naissance" name="date_de_naissance" placeholder="JJ/MM/AAAA">
                </div>
            </div> -->
            <div class="row">
                <div class="col-25">
                    <label for="poids">Poids</label>
                </div>
                <div class="col-75">
                    <input required type="number" step="0.01" id="poids" name="poids" placeholder="00,00">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="taille">Taille</label>
                </div>
                <div class="col-75">
                    <input required type="number" step="0.01" id="taille" name="taille" placeholder="0,00">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fumeur">Êtes-vous fumeur ?</label>
                </div>
                <div class="col-75">

                    <input required type="radio" id="oui" name="fumeur" value="1">
                    <label for="oui">Oui</label>
                    <input required type="radio" id="non" name="fumeur" value="0">
                    <label for="non">Non</label><br>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="diabetique">Êtes-vous diabétique ?</label>
                </div>
                <div class="col-75">
                    <input required type="radio" id="oui" name="diabetique" value="1">
                    <label for="oui">Oui</label>
                    <input required type="radio" id="non" name="diabetique" value="0">
                    <label for="non">Non</label><br>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="tension_traitee">Êtes-vous traité pour une hypertension artérielle ? </label>
                </div>
                <div class="col-75">
                    <input required type="radio" id="oui" name="hypertension" value="1">
                    <label for="oui">Oui</label>
                    <input required type="radio" id="non" name="hypertension" value="0">
                    <label for="non">Non</label><br>
                </div>

            </div>
            <div class="row">
                <div class="col-25">
                    <label for="tension_arterielle_systolique">Tension artérielle systolique (la plus grande)</label>
                </div>
                <div class="col-75">
                    <input required type="number" min="0" max="200" step="0.01" id="tension_arterielle_systolique" name="tension_arterielle_systolique" placeholder="0,00">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="cholesterol">Taux de cholestérol total</label>
                </div>
                <div class="col-75">
                    <input required type="number" min="0" max="40" step="0.01" id="cholesterol" name="cholesterol" placeholder="0,00">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="cholesterol_hdl">Taux de cholestérol HDL</label>
                </div>
                <div class="col-75">
                    <input required type="number" min="0" max="40" step="0.01" id="cholesterol_hdl" name="cholesterol_hdl" placeholder="0,00">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="accident">Avez-vous eu un accident cardio-vasculaire ? Si oui lequel (lesquels) :</label>
                </div>
                <div class="col-75">
                    <input type="checkbox" name="embolie_pulmonaire" id="embolie_pulmonaire" /> <label for="embolie_pulmonaire">Embolie pulmonaire</label> ? Année : <input type="number" name="embolie_pulmonaire_annee" id="embolie_pulmonaire_annee" class="chiffres" min="1800"
                        max="2100" placeholder="AAAA"><br /></br>
                    <input type="checkbox" name="angine_de_poitrine" id="angine_de_poitrine" /> <label for="angine_de_poitrine">Angine de poitrine</label> ? Année : <input type="number" name="angine_de_poitrine_annee" id="angine_de_poitrine_annee" class="chiffres" min="1800"
                        max="2100" placeholder="AAAA"><br /></br>
                    <input type="checkbox" name="insuffisance_cardiaque" id="insuffisance_cardiaque" /> <label for="insuffisance_cardiaque">Insuffisance cardiaque</label> ? Année : <input type="number" name="insuffisance_cardiaque_annee" id="insuffisance_cardiaque_annee" class="chiffres"
                        min="1800" max="2100" placeholder="AAAA"><br /></br>
                    <input type="checkbox" name="accident_vasculaire_cerebral" id="accident_vasculaire_cerebral" /> <label for="accident_vasculaire_cerebral">Accident vasculaire cérébral</label> ? Année : <input type="number" name="accident_vasculaire_cerebral_annee"
                        id="accident_vasculaire_cerebral_annee" class="chiffres" min="1800" max="2100" placeholder="AAAA"><br /></br>
                    <input type="checkbox" name="infarctus" id="infarctus" /> <label for="infarctus">Infarctus</label> ? Année : <input type="number" name="infarctus_annee" id="infarctus_annee" class="chiffres" min="1800" max="2100" placeholder="AAAA"><br /></br>
                    <input type="checkbox" name="arterite_des_membres_inferieurs" id="arterite_des_membres_inferieurs" /> <label for="arterite_des_membres_inferieurs">Artérite des membres inférieurs</label> ? Année : <input type="number" name="arterite_des_membres_inferieurs_annee"
                        id="arterite_des_membres_inferieurs_annee" class="chiffres" min="1800" max="2100" placeholder="AAAA"><br /></br>

                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="description">Détails sur l'accident (date, nombre de fois ...) :</label>
                </div>
                <div class="col-75">
                    <textarea name="description" id="description" title="description" cols="60" rows="10" maxlength="600" placeholder="Écrivez les détails ici"></textarea>
                </div>
            </div>

            <!-- <div class="row">
                <div class="col-25">
                    <label for="email">E-mail:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="email" name="email" placeholder="">
                </div>
            </div> -->

            <div class="row">
                <div class="col-25">
                    <label for="ville">Ville:</label>
                </div>
                <div class="col-75">
                    <input required type="text" id="ville" name="ville" placeholder="">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="code_postal">Code postal:</label>
                </div>
                <div class="col-75">
                    <input required type="text" id="code_postal" name="code_postal" placeholder="">
                </div>
            </div>


            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>