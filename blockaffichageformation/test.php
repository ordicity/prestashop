
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" >
        <SCRIPT language="Javascript">

            function affichageObjectifs() {
                alert($('#formationContainer li[#objectifs]').attr('class','nul'));
            }
            function affichageProgramme() {
                alert('Texte2');
            }

        </SCRIPT>
    </head>

    <style type="text/css">
        #blockaffichageformation{
        }

        .infoFormation{
            color:white;
            clear: both;
            background: grey;
            padding: 10px 25px;
            border-radius: 0 5px 5px 5px;
        }

        #formationContainer{
            display: block;
            margin: 0px;
            padding: 0px;
            width: 100%;
            position: relative;
        }

        #formationContainer li{
            margin: 0px;
            list-style: none;
            float: left;
            padding: 5px;
        }

        #formationContainer li.selected{
            background: gray;
            border-radius: 5px 5px 0px 0px;
            -webkit-border-radius: 5px 5px 0px 0px;
        }

        #formationContainer li a{
            background: white;
            display: block;
            border-radius: 5px;
            float: left;
            padding: 10px 30px;
            line-height: 13px;
            text-decoration: none;
        }

    </style>

    <div id="blockaffichageformation">
        <ul id="formationContainer">
            <li class="selected" id="objectifs"><a href='#objectifs' onClick="affichageObjectifs();">objectifs</a></li>
            <li class=""><a href='#programme' id="programme" onClick="affichageProgramme();">programme</a></li>
            <li class=""><a href='#public' id="public">pour qui ?</a></li>
            <li class=""><a href='#date' id="dates">dates</a></li>
            <li class=""><a href='#lieu' id="lieux">lieux</a></li>
        </ul>
    </div>

    <br>

    <div class="infoFormation" id="affichageObjectifs" style="display:block;"> 
        objectifs
    </div>

    <div class="infoFormation" id="affichageProgramme" style="display:none;"> 
        programme
    </div>

    <div class="infoFormation" id="affichagePublic" style="display:none;"> 
        pour qui ?
    </div>

    <div class="infoFormation" id="affichageDates" style="display:none;">
        dates
    </div>

    <div class="infoFormation" id="affichageLieux" style="display:none;">
        lieux
    </div>

</html>