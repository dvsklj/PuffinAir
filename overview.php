<!DOCTYPE html>
<html>
<head>
    <title>Fly PuffinAir</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/puffin.png">
    <link rel="stylesheet" href="css/style.css">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Flight Ticket Booking  Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

</head>
<body>
<?php
include("database/db_connection.php");
//$flugnummer = getAbflugnummer ();
//print_r(getAbflugsort());
//print_r(getAbflugnummer ());
$cityfrom = $_POST['cityfrom'];
$cityto = $_POST['cityto'];
$cityto1 = $_POST['cityfrom'];
$cityfrom1 = $_POST['cityto'];
//$flugnummer = $_POST['flugnummer'];
$abflugnummer = (getAbflugnummer($cityfrom, $cityto));
$ankunftnummer = (getAnkunftnummer($cityto1, $cityfrom1));
$flugzeugtyp = (getFlugzeugtyp($cityfrom, $cityto));
$flugzeugtyp1 = (getFlugzeugtyp1($cityto1, $cityfrom1));
$preis = (getPreis($cityfrom, $cityto));
$preis1 = (getPreis($cityto1, $cityfrom1));
$zeit = (getAbflugszeit($cityfrom, $cityto));
$zeit1 = (getAbflugszeit1($cityto1, $cityfrom1))
?>
<h1 onClick="parent.location='index.php'" style="cursor:pointer;">PUFFIN<span style="color: white">AIR</span></h1>
<div class="main-agileinfo">
    <div class="sap_tabs">
        <div id="horizontalTab">
            <ul class="resp-tabs-list">
                <li style="cursor: default;" class="resp-tab-item"><span>Gefundene Flüge</span></li>
            </ul>
                        <div class="splitter"> </div>

                        <div class="overviewhinflug">
                            <p style="font-size: 22px; display: inline; font-weight: 600;">Ihr Hinflug</p> <img style="display: inline; margin-bottom: -8px; padding-left: 10px;" src="images/plane-to.jpg" alt="plane icon" height="30" width="30"><p style="font-weight: 600; font-size: 22px; display: inline; float: right;">
                                <?php
                                foreach($abflugnummer as $flight)
                                {
                                    echo $flight[0];
                                }
                                ?>
                            </p>
                            <div class="smallsplit"> </div>

                            <p style="font-size: 20px; font-weight: 600; display: inline;"><?php $cityfrom = $_POST['cityfrom']; echo $cityfrom?></p> <p style="display: inline;">-</p> <p style="font-size: 20px; font-weight: 600; display: inline;"><?php $cityto = $_POST['cityto']; echo $cityto?></p> </br> </br>
                            <?php
                            $departdate = $_POST['depart'];
                            echo $departdate
                            ?> <p>
                                <?php
                                foreach($zeit as $zeithin)
                                {
                                    echo "Abflugszeit: " . substr($zeithin[0],0, -3);
                                }
                                ?>
                            </p>
                            <p style="display: inline;">
                                <?php
                                foreach($flugzeugtyp as $fliegertyp)
                                {
                                    echo "Typ: " . $fliegertyp[0];
                                }
                                ?>
                            </p> <p style="font-weight: 600; display: inline; float: right; font-size: 22px; margin-top: -7px;">
                                <?php
                                foreach($preis as $preishin)
                                {
                                    echo $preishin[0] . ".- / Person";
                                }
                                ?>
                            </p>
                        </div>

                        <div class="splitter">
                            <p> </p>
                        </div>

                        <div class="overviewruckflug">
                            <p style="font-size: 22px; display: inline; font-weight: 600;">Ihr Rückflug</p> <img style="display: inline; margin-bottom: -8px; padding-left: 10px;" src="images/plane-back.jpg" alt="plane icon" height="30" width="30"><p style="font-weight: 600; font-size: 22px; display: inline; float: right;">
                                <?php
                                foreach($ankunftnummer as $flight1)
                                {
                                    echo $flight1[0];
                                }
                                ?>
                            </p>
                            <div class="smallsplit"> </div>

                            <p style="font-size: 20px; font-weight: 600; display: inline;"><?php $cityto = $_POST['cityto']; echo $cityto?></p> <p style="display: inline;">-</p> <p style="font-size: 20px; font-weight: 600; display: inline;"><?php $cityfrom = $_POST['cityfrom']; echo $cityfrom?></p> </br> </br>
                            <?php
                            $returndate = $_POST['return'];
                            echo $returndate
                            ?>  <p>
                                <?php
                                foreach($zeit1 as $zeitzurueck)
                                {
                                    echo "Abflugszeit: " . substr($zeitzurueck[0],0, -3);
                                }
                                ?>
                            </p>
                            <p style="display: inline;">
                                <?php
                                foreach($flugzeugtyp1 as $fliegertyp1)
                                    echo "Typ: " . $fliegertyp1[0];
                                ?>
                            </p>
                            <p style="font-weight: 600; display: inline; float: right; font-size: 22px; margin-top: -7px;">
                                <?php
                                foreach($preis as $preiszurueck)
                                {
                                    echo "$preiszurueck[0].- <span style='font-size: 10px;'>/ Person</span>";
                                }
                                ?>
                            </p>
                        </div>

                        <div>
                            <input style="display: inline; margin-top: 20px;" class="newsearch" type="submit" value="Neue Suche" onClick="parent.location='index.php'">
                            <input id="generator" style="display: inline; margin-top: 20px; float: right;" type="submit" value="Jetzt buchen">
                        </div>

            <div id="pdfcontent">
                <p class="pdftitle">PuffinAir</p>
                <p class="pdfbuchungsbestaetigung">Ihre Buchungsbestätigung:</p> </br> </br>
                <p class="hinflugtitel" style="font-size: 22px; display: inline; font-weight: 600; padding-bottom: 10px;">Ihr Hinflug</p> </br>
                <p class="hinflugorte" style="font-size: 20px; font-weight: 600; display: inline;"><?php $cityfrom = $_POST['cityfrom']; echo $cityfrom?></p> <p style="display: inline;">-</p> <p style="font-size: 20px; font-weight: 600; display: inline;"><?php $cityto = $_POST['cityto']; echo $cityto?></p> </br>
                <p style="padding-top: 10px;" class="flugnummerhinflug">
                    <?php
                    foreach($abflugnummer as $flight)
                    {
                        echo $flight[0];
                    }
                    ?>
                </p>
                <p class="datumhinflug">
                    <?php
                    $departdate = $_POST['depart'];
                    echo $departdate
                    ?>
                </p>
                <p class="zeithinflug">
                    <?php
                    foreach($zeit as $zeithin)
                    {
                        echo "Abflugszeit: " . substr($zeithin[0],0, -3);
                    }
                    ?>
                </p>
                <p class="flugzeugtyphin">
                    <?php
                    foreach($flugzeugtyp as $fliegertyp)
                    {
                        echo "Typ: " . $fliegertyp[0];
                    }
                    ?>
                </p>
                <p class="preishin" style="font-weight: 600; display: inline; float: right; font-size: 22px; margin-top: -7px;">
                    <?php
                    foreach($preis as $preishin)
                    {
                        echo $preishin[0] . ".- / Person";
                    }
                    ?>
                </p>
                </br>
                </br>
                <p class="rueckflugtitel" style="font-size: 22px; display: inline; font-weight: 600;">Ihr Rückflug</p> </br>
                <p class="rueckflugorte" style="font-size: 20px; font-weight: 600; display: inline;"><?php $cityto = $_POST['cityto']; echo $cityto?></p> <p style="display: inline;">-</p> <p style="font-size: 20px; font-weight: 600; display: inline;"><?php $cityfrom = $_POST['cityfrom']; echo $cityfrom?></p> </br>
                <p class="flugnummerrueckflug">
                    <?php
                    foreach($ankunftnummer as $flight1)
                    {
                        echo $flight1[0];
                    }
                    ?>
                </p>
                <p class="datumrueckflug">
                    <?php
                    $returndate = $_POST['return'];
                    echo $returndate
                    ?>
                </p>
                <p class="zeitrueckflug">
                    <?php
                    foreach($zeit1 as $zeitzurueck)
                    {
                        echo "Abflugszeit: " . substr($zeitzurueck[0],0, -3);
                    }
                    ?>
                </p>
                <p class="flugzeugtypzurueck">
                    <?php
                    foreach($flugzeugtyp1 as $fliegertyp1)
                        echo "Typ: " . $fliegertyp1[0];
                    ?>
                </p>
                <p class="preiszurueck" style="font-weight: 600; display: inline; float: right; font-size: 22px; margin-top: -7px;">
                    <?php
                    foreach($preis as $preiszurueck)
                    {
                        echo $preiszurueck[0] . ".- / Person";
                    }
                    ?>
                </p>
            </div>

            <div class="splitter">
                <p> </p>
            </div>
                    </form>
                </div>
            </div>
        </div>

<!--script for portfolio-->
<script src="//cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.debug.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
<script src="js/jquery.min.js"> </script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
</script>
<!--//script for portfolio-->
<!-- Calendar -->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
    });
</script>
<!-- //Calendar -->
<!--quantity-->
<script>
    $('.value-plus').on('click', function(){
        var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
        divUpd.text(newVal);
    });

    $('.value-minus').on('click', function(){
        var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
        if(newVal>=1) divUpd.text(newVal);
    });
</script>
<!--//quantity-->
<!--load more-->
<script>
    $(document).ready(function () {
        size_li = $("#myList li").size();
        x=1;
        $('#myList li:lt('+x+')').show();
        $('#loadMore').click(function () {
            x= (x+1 <= size_li) ? x+1 : size_li;
            $('#myList li:lt('+x+')').show();
        });
        $('#showLess').click(function () {
            x=(x-1<0) ? 1 : x-1;
            $('#myList li').not(':lt('+x+')').hide();
        });
    });
</script>
</body>
</html>