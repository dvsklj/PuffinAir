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
//print_r(getAbflugsort());
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
                            <p style="font-size: 22px; display: inline; font-weight: 600;">Ihr Hinflug</p> <img style="display: inline; margin-bottom: -8px; padding-left: 10px;" src="images/plane-to.jpg" alt="plane icon" height="30" width="30"><p style="font-weight: 600; font-size: 22px; display: inline; float: right;">FI509</p>
                            <div class="smallsplit"> </div>

                            <p style="font-size: 20px; font-weight: 600; display: inline;">Zürich (ZRH)</p> <p style="display: inline;">-</p> <p style="font-size: 20px; font-weight: 600; display: inline;">Keflavik (KEF)</p> </br> </br>
                            <p>01.03.2019</p> <p>12:15</p>
                            <p style="display: inline;"><?php $test = getAbflugsort(); echo $test[1]['Abflugsort']?></p> <p style="font-weight: 600; display: inline; float: right; font-size: 22px; margin-top: -7px;">479.- CHF</p>
                        </div>

                        <div class="splitter">
                            <p> </p>
                        </div>

                        <div class="overviewruckflug">
                            <p style="font-size: 22px; display: inline; font-weight: 600;">Ihr Rückflug</p> <img style="display: inline; margin-bottom: -8px; padding-left: 10px;" src="images/plane-back.jpg" alt="plane icon" height="30" width="30"><p style="font-weight: 600; font-size: 22px; display: inline; float: right;">FI510</p>
                            <div class="smallsplit"> </div>

                            <p style="font-size: 20px; font-weight: 600; display: inline;">Keflavik (KEF)</p> <p style="display: inline;">-</p> <p style="font-size: 20px; font-weight: 600; display: inline;">Zürich (ZRH)</p> </br> </br>
                            <p>04.03.2019</p> <p>07:40</p>
                            <p style="display: inline;">Boeing 777-300ER</p> <p style="font-weight: 600; display: inline; float: right; font-size: 22px; margin-top: -7px;">552.- CHF</p>
                        </div>

                        <div>
                            <input style="display: inline; margin-top: 20px;" class="newsearch" type="submit" value="Neue Suche" onClick="parent.location='index.php'">
                            <input id="generator" style="display: inline; margin-top: 20px; float: right;" type="submit" value="Jetzt buchen">
                        </div>

            <div id="pdfcontent">
                <p class="pdftitle">PuffinAir</p>
                <p class="pdfbuchungsbestaetigung">Ihre Buchungsbestätigung:</p>
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