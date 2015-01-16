<?php
session_start();

$page = $_GET['page'];
$o = $_SESSION['o'];

include("../connection.php");
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
        ul{
            list-style-type: none;
        }
        a{
            text-decoration: none;
            padding-left: 10px;
        }

        #objectif {
            padding-top:30px;
        }
        #objectif h1 {
            font-weight: bolt;
        } 
    </style>

    <div id="blockaffichageformation">
        <ul id="formationContainer">
            <li><a href='?page=objectifs'>objectifs</a></li>
            <li><a href='?page=programme'>programme</a></li>
            <li><a href='?page=public'>dédié à qui ?</a></li>
            <li><a href='?page=date'>dates</a></li>
            <li><a href='?page=lieu'>lieux</a></li>
        </ul>
    </div>
    <?php
    if ($page == "objectifs") {
        if ($o == "") {
            $sql = "SELECT pfvl.value
                    FROM `ps_feature_value_lang` pfvl 
                    INNER JOIN ps_feature_product pfp ON pfvl.`id_feature_value`=pfp.`id_feature_value` 
                    INNER JOIN ps_product_lang ppl ON pfp.id_product=ppl.id_product 
                    INNER JOIN ps_feature_lang pfl ON pfp.id_feature=pfl.id_feature 
                    WHERE ppl.name='java' AND pfl.name='objectifs'";
            $r = mysql_query($sql, $link);
            $o = mysql_fetch_array($r);
            $_SESSION['o'] = $o;
        }
        ?>
        <div id="objectif" > 
            <h1><?php echo $o[0] ?></h1>

        </div>
    <?php } ?>
</html>