<?php

function text(){
    echo'coucou';
}

function affichageFormation($id){
    include("../connection.php");
    $sql="SELECT pfvl.value
FROM `ps_feature_value_lang` pfvl 
INNER JOIN ps_feature_product pfp ON pfvl.`id_feature_value`=pfp.`id_feature_value` 
INNER JOIN ps_product_lang ppl ON pfp.id_product=ppl.id_product 
INNER JOIN ps_feature_lang pfl ON pfp.id_feature=pfl.id_feature 
WHERE ppl.name='java' AND pfl.name='".$id."'"; 
    $r = mysql_query($sql, $link);
    $t=mysql_fetch_array($r);
    echo $t[0];
}
?>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" >
    </head>

    <style type="text/css">
        #blockaffichageformation{
            width:100%;
        }
        
        #blockaffichageformation li{
            float:left;
        }
        
        #blockaffichageformation li button{
            padding: 10px;
        }

    </style>

    <div id="blockaffichageformation">
        <ul id="formationContainer">
            <li id="objectifs"><button onclick="affichageFormation('objectifs')">objectifs</button></li>
            <li id="programme"><button onclick="affichageFormation('programme')">programme</button></li>
            <li id="public"><button onclick="affichageFormation('public')">dédié à qui ?</button></li>
            <li id="dates"><button onclick="affichageFormation('dates')">dates</button></li>
            <li id="lieux"><button onclick="test()">lieux</button></li>
        </ul>
    </div>
</html>