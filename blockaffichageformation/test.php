
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" >
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".formationClass").on("click", function () {
                    var choix = $(this);
                    for (var i = 0; i < $(".formationClass").length; i++)
                    {
                        $($(".formationClass").get(i)).removeClass('selected');
                        $($(".infoFormation").get(i)).css('display','none');
                    }
                    $(choix).addClass('selected');
                    $("#affichage"+choix.attr('id')).css('display','block');
                });
            });
        </script>
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
            <li class="formationClass" id="objectifs"><a href='?#objectifs'>objectifs</a></li>
            <li class="formationClass" id="programme"><a href='?#programme'>programme</a></li>
            <li class="formationClass" id="public"><a href='?#public'>pour qui ?</a></li>
            <li class="formationClass" id="dates"><a href='?#date'>dates</a></li>
            <li class="formationClass" id="lieux"><a href='?#lieu'>lieux</a></li>
        </ul>
    </div>

    <br>

    <div class="infoFormation" id="affichageobjectifs" style="display:block;"> 
        objectifs
    </div>

    <div class="infoFormation" id="affichageprogramme" style="display:none;"> 
        programme
    </div>

    <div class="infoFormation" id="affichagepublic" style="display:none;"> 
        pour qui ?
    </div>

    <div class="infoFormation" id="affichagedates" style="display:none;">
        dates
    </div>

    <div class="infoFormation" id="affichagelieux" style="display:none;">
        lieux
    </div>

</html>