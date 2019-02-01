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
$abflugOrte = getAbflugsorte();
$ankunftOrt = getAnkunftsorte();
//print_r ($abflugOrte);
//print_r ($ankunftOrt);
?>
  <h1 onClick="parent.location='index.php'" style="cursor:pointer;">PUFFIN<span style="color: white">AIR</span></h1>
	<div class="main-agileinfo">
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
                    <li style="cursor: default;" class="resp-tab-item"><span>From Iceland to the world. </br> <span style="font-size: 14px; text-transform: none; color: white;">Book flights from or to Keflavik (KEF)</span></span></li>

				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content roundtrip">

                        <div class="splitter"> </div>
						<form class="seachcontent" action="overview.php" method="post">
							<div class="from">
								<h3>Von</h3>
								<input type="text" list="abflugsort" name="cityfrom" class="city1" placeholder="Abflugort eingeben"  required="" autocomplete="off">
                                <datalist id="abflugsort">
                                    <?php
                                    foreach ($abflugOrte as $abflugOrt) {
                                        echo '<option value="'.$abflugOrt.'">';
                                    }
                                    ?>

                                </datalist>
                            </div>
							<div class="to">
								<h3>Nach</h3>
								<input type="text" list="abflugsort" name="cityto" class="city2" placeholder="Ankunftsort eingeben" required="" autocomplete="off">
                                <datalist id="abflugsort">
                                    <?php
                                    foreach ($ankunftOrte as $ankunftOrt) {
                                        echo '<option value="'.$ankunftOrt.'">';
                                    }
                                    ?>

                                </datalist>
                            </div>




                            <script type="text/javascript">
                                function autocomplete(inp, arr) {
                                    /*the autocomplete function takes two arguments,
                                    the text field element and an array of possible autocompleted values:*/
                                    var currentFocus;
                                    /*execute a function when someone writes in the text field:*/
                                    inp.addEventListener("input", function(e) {
                                        var a, b, i, val = this.value;
                                        /*close any already open lists of autocompleted values*/
                                        closeAllLists();
                                        if (!val) { return false;}
                                        currentFocus = -1;
                                        /*create a DIV element that will contain the items (values):*/
                                        a = document.createElement("DIV");
                                        a.setAttribute("id", this.id + "autocomplete-list");
                                        a.setAttribute("class", "autocomplete-items");
                                        /*append the DIV element as a child of the autocomplete container:*/
                                        this.parentNode.appendChild(a);
                                        /*for each item in the array...*/
                                        for (i = 0; i < arr.length; i++) {
                                            /*check if the item starts with the same letters as the text field value:*/
                                            if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                                                /*create a DIV element for each matching element:*/
                                                b = document.createElement("DIV");
                                                /*make the matching letters bold:*/
                                                b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                                                b.innerHTML += arr[i].substr(val.length);
                                                /*insert a input field that will hold the current array item's value:*/
                                                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                                                /*execute a function when someone clicks on the item value (DIV element):*/
                                                b.addEventListener("click", function(e) {
                                                    /*insert the value for the autocomplete text field:*/
                                                    inp.value = this.getElementsByTagName("input")[0].value;
                                                    /*close the list of autocompleted values,
                                                    (or any other open lists of autocompleted values:*/
                                                    closeAllLists();
                                                });
                                                a.appendChild(b);
                                            }
                                        }
                                    });
                                    /*execute a function presses a key on the keyboard:*/
                                    inp.addEventListener("keydown", function(e) {
                                        var x = document.getElementById(this.id + "autocomplete-list");
                                        if (x) x = x.getElementsByTagName("div");
                                        if (e.keyCode == 40) {
                                            /*If the arrow DOWN key is pressed,
                                            increase the currentFocus variable:*/
                                            currentFocus++;
                                            /*and and make the current item more visible:*/
                                            addActive(x);
                                        } else if (e.keyCode == 38) { //up
                                            /*If the arrow UP key is pressed,
                                            decrease the currentFocus variable:*/
                                            currentFocus--;
                                            /*and and make the current item more visible:*/
                                            addActive(x);
                                        } else if (e.keyCode == 13) {
                                            /*If the ENTER key is pressed, prevent the form from being submitted,*/
                                            e.preventDefault();
                                            if (currentFocus > -1) {
                                                /*and simulate a click on the "active" item:*/
                                                if (x) x[currentFocus].click();
                                            }
                                        }
                                    });
                                    function addActive(x) {
                                        /*a function to classify an item as "active":*/
                                        if (!x) return false;
                                        /*start by removing the "active" class on all items:*/
                                        removeActive(x);
                                        if (currentFocus >= x.length) currentFocus = 0;
                                        if (currentFocus < 0) currentFocus = (x.length - 1);
                                        /*add class "autocomplete-active":*/
                                        x[currentFocus].classList.add("autocomplete-active");
                                    }
                                    function removeActive(x) {
                                        /*a function to remove the "active" class from all autocomplete items:*/
                                        for (var i = 0; i < x.length; i++) {
                                            x[i].classList.remove("autocomplete-active");
                                        }
                                    }
                                    function closeAllLists(elmnt) {
                                        /*close all autocomplete lists in the document,
                                        except the one passed as an argument:*/
                                        var x = document.getElementsByClassName("autocomplete-items");
                                        for (var i = 0; i < x.length; i++) {
                                            if (elmnt != x[i] && elmnt != inp) {
                                                x[i].parentNode.removeChild(x[i]);
                                            }
                                        }
                                    }
                                    /*execute a function when someone clicks in the document:*/
                                    document.addEventListener("click", function (e) {
                                        closeAllLists(e.target);
                                    });
                                }

                                /*An array containing all the country names in the world:*/
                                
                                //console.dir(countries[0]);


                                /*for(let country in countries){
                                    //test.push(country.valueOf());
                                    console.log(country.)
                                }*/
                                //console.log(test);

                                /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
                                autocomplete(document.getElementById("myInput"), countries);
                            </script>



							<div class="clear"></div>
							<div class="date">
								<div class="depart">
									<h3>Hinflug</h3>
									<input  id="datepicker" name="depart" type="text" value="Datum auswählen" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd/mm/yyyy';}" required="" autocomplete="off">
								</div>
								<div class="return">
									<h3>Rückflug</h3>
									<input  id="datepicker1" name="return" type="text" value="Datum auswählen" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd/mm/yyyy';}" required="" autocomplete="off">
								</div>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
							<div class="clear"></div>
							<input class="searchflight" type="submit" value="Flüge suchen">
						</form>						
					</div>

				</div>						
			</div>
		</div>
	</div>
	<div class="footer-w3l">
		<p class="agileinfo"> &copy; 2019 PuffinAir | All Rights Reserved</p>
	</div>
	<!--script for portfolio-->
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