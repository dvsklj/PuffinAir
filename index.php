<!DOCTYPE html>
<html>
<head>
	<title>Fly PuffinAir</title>
	<link rel="stylesheet" href="css/style.css">
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Flight Ticket Booking  Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		
</head>
<body>
  <h1>PUFFIN<span style="color: white">AIR</span></h1>
	<div class="main-agileinfo">
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>Hin-/ Rückflug</span></li>
          <li class="resp-tab-item"><span>One Way</span></li>

				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content roundtrip">
						<form action="#" method="post">
							<div class="from">
								<h3>Von</h3>
								<input type="text" name="city" class="city1" placeholder="Abflugort eingeben" required="" autocomplete="off">
							</div>
							<div class="to">
								<h3>Nach</h3>
								<input type="text" name="city" class="city2" placeholder="Ankunftsort eingeben" required="" autocomplete="off">
							</div>
							<div class="clear"></div>
							<div class="date">
								<div class="depart">
									<h3>Hinflug</h3>
									<input  id="datepicker" name="Text" type="text" value="Datum auswählen" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd/mm/yyyy';}" required="" autocomplete="off">
								</div>
								<div class="return">
									<h3>Rückflug</h3>
									<input  id="datepicker1" name="Text" type="text" value="Datum auswählen" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd/mm/yyyy';}" required="" autocomplete="off">
								</div>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
							<div class="numofppl">
								<div class="adults">
									<h3>Personen:</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
							<input type="submit" value="Flüge suchen">
						</form>						
					</div>
          
          <div class="tab-1 resp-tab-content oneway">
						<form action="#" method="post">
							<div class="from">
								<h3>Von</h3>
								<input type="text" name="city" class="city1" placeholder="Abflugort eingeben" required="" autocomplete="off">
							</div>
							<div class="to">
								<h3>Nach</h3>
								<input type="text" name="city" class="city2" placeholder="Ankunftsort eingeben" required="" autocomplete="off">
							</div>
							<div class="clear"></div>
							<div class="date">
								<div class="depart">
									<h3>Hinflug</h3>
									<input  id="datepicker" name="Text" type="text" value="Datum auswählen" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd/mm/yyyy';}" required="" autocomplete="off">
								</div>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
							<div class="numofppl">
								<div class="adults">
									<h3>Personen:</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
							<input type="submit" value="Flüge suchen">
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
<!-- //load-more -->




</body>
</html>