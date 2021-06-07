<?php
include_once("maLibSQL.pdo.php");

// Users //

function getUser($id_user)
{
	$SQL = "SELECT id_user,name,firstName,sexe,dateBirthday,email FROM user WHERE id_user='$id_user'";
	$rs = parcoursRs(SQLSelect($SQL));
	if (count($rs)) return $rs[0];
	else return array();
}

function getUserByEmailPassword($email, $password)
{
	$SQL = "SELECT id_user,name,firstName,sexe,dateBirthday,email FROM user WHERE email='$email' AND password='$password'";
	return parcoursRs(SQLSelect($SQL));
}

function getUsers()
{
	$SQL = "SELECT id_user,name,firstName,sexe,dateBirthday,email FROM user";
	return parcoursRs(SQLSelect($SQL));
}

function createUser($name, $firstName, $sexe, $dateBirthday, $email, $password)
{
	$SQL = "INSERT INTO user(name,firstName,sexe,dateBirthday,email,password) VALUES('$name', '$firstName', '$sexe', '$dateBirthday', '$email', '$password')";
	$id_user = SQLInsert($SQL);
	return $id_user;
}


function removeUser($id_user)
{
	$SQL = "DELETE FROM user WHERE id_user='$id_user'";
	return SQLDelete($SQL);
}

function updatePassword($id_user, $password)
{
	$SQL = "UPDATE user SET password='$password' WHERE id_user='$id_user'";
	SQLUpdate($SQL);
	return 1;
}

function insertForm($id_user, $poids, $taille, $fumeur, $diabetique, $hypertension, $tension_arterielle_systolique, $cholesterol, $cholesterol_hdl, $embolie_pulmonaire_annee, $angine_de_poitrine_annee, $insuffisance_cardiaque_annee, $accident_vasculaire_cerebral_annee, $infarctus_annee, $arterite_des_membres_inferieurs_annee, $description, $ville, $code_postal)
{
	$embolie_pulmonaire_annee = $embolie_pulmonaire_annee == null ? "NULL" : "'$embolie_pulmonaire_annee'";
	$angine_de_poitrine_annee = $angine_de_poitrine_annee == null ? "NULL" : "'$angine_de_poitrine_annee'";
	$insuffisance_cardiaque_annee = $insuffisance_cardiaque_annee == null ? "NULL" : "'$insuffisance_cardiaque_annee'";
	$accident_vasculaire_cerebral_annee = $accident_vasculaire_cerebral_annee == null ? "NULL" : "'$accident_vasculaire_cerebral_annee'";
	$infarctus_annee = $infarctus_annee == null ? "NULL" : "'$infarctus_annee'";
	$arterite_des_membres_inferieurs_annee = $arterite_des_membres_inferieurs_annee == null ? "NULL" : "'$arterite_des_membres_inferieurs_annee'";
	$description = $description == null ? "NULL" : "'$description'";

	$SQL = "INSERT INTO info_form(id_user,poids,taille,fumeur,diabetique,hypertension,tension,cholesterolTotal,cholesterolHDL,
	emboliePulmonaire,anginePoitrine,insuffisanceCardiaque,avc,infarctus,arterite,details,ville,codePostal) 
	VALUES('$id_user','$poids','$taille','$fumeur','$diabetique','$hypertension','$tension_arterielle_systolique','$cholesterol',
	'$cholesterol_hdl',$embolie_pulmonaire_annee,$angine_de_poitrine_annee,$insuffisance_cardiaque_annee,
	$accident_vasculaire_cerebral_annee,$infarctus_annee,$arterite_des_membres_inferieurs_annee,$description,'$ville',
	'$code_postal')";
	$id_info_form = SQLInsert($SQL);
	return $id_info_form;
}
