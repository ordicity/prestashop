<?php

$cfgBase = "prestashop"; 
$cfgUser = "prestashop";  
$cfgPass = "prestashop"; 
$cfgHote = "localhost"; 

$link = mysql_connect($cfgHote,$cfgUser,$cfgPass) or die("erreur de connexion");   
if (!mysql_select_db($cfgBase, $link)) {
    echo 'Sélection de base de données impossible!';
    exit;
}
mysql_query("SET NAMES UTF8");
/*$sql="UPDATE question SET intitule='$intitule', type_selecteur='$type_selecteur', autre_reponse='$autre_reponse', liste_reponse='$liste_reponse', coef_reponse='$coef_reponse',coef_question='$coef_question', affichage='$affichage', id_theme='$id_theme' WHERE id='$idquestion'";
		$r = mysql_db_query($cfgBase, $sql);
 * $sql="INSERT INTO question SET intitule='$intitule', type_selecteur='$type_selecteur', autre_reponse='$autre_reponse', liste_reponse='$liste_reponse',  coef_reponse='$coef_reponse',coef_question='$coef_question', affichage='$affichage', id_theme='$id_theme'"; 
		$r = mysql_db_query($cfgBase, $sql);
		$idquestion=mysql_insert_id();
 * $sql="DELETE FROM question WHERE id='$idquestion'";
	$r = mysql_query($sql, $link);
 * $sqlTH="SELECT * FROM theme_audit WHERE id='$t[id_theme]'"; 
	$rTH = mysql_query($sqlTH, $link);
	$tTH=mysql_fetch_array($rTH);
 */
?>