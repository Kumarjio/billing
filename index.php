<!DOCTYPE html>
<!-- saved from url=(0058)http://demo.rebootdigital.co.uk/invoice/invoice-create.php -->
<html lang="en" class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Invoice Manager</title>

	<!-- JS -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/moment.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.js"></script>
	<script src="js/dataTables.bootstrap.js"></script>
	<script src="js/bootstrap.datetime.js"></script>
	<script src="js/bootstrap.password.js"></script>
	<script src="js/scripts.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" href="js/bootstrap.min.css">
	<link rel="stylesheet" href="js/bootstrap.datetimepicker.css">
	<link rel="stylesheet" href="js/jquery.dataTables.css">
	<link rel="stylesheet" href="js/dataTables.bootstrap.css">
	<link rel="stylesheet" href="js/styles.css">

	<style>
		@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);
		body, h1, h2, h3, h4, h5, h6{
			font-family: 'Open Sans', sans-serif;
		}
	</style>

</head>

<body data-gr-c-s-loaded="true" cz-shortcut-listen="true">
	<div class="container">

		<div class="top-buttons btn-group">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Invoices <span class="caret"></span></button>
		  	<ul class="dropdown-menu" role="menu">	
		  		<li><a href="#">Create Invoice</a></li>	    
				<li><a href="#">Manage Invoices</a></li>
				<li><a href="#" class="download-csv">Download CSV</a></li>
		  	</ul>
		</div>

		<div class="top-buttons btn-group">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Items <span class="caret"></span></button>
		  	<ul class="dropdown-menu" role="menu">	
		  		<li><a href="#">Add Item</a></li>	    
				<li><a href="#">Manage Item</a></li>
		  	</ul>
		</div>

		<div class="top-buttons btn-group">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Customers <span class="caret"></span></button>
		  	<ul class="dropdown-menu" role="menu">	
		  		<li><a href="#">Add Customer</a></li>	    
				<li><a href="#">Manage Customers</a></li>
		  	</ul>
		</div>

		<div class="top-buttons btn-group">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Users <span class="caret"></span></button>
		  	<ul class="dropdown-menu" role="menu">	
		  		<li><a href="#">Add User</a></li>	    
				<li><a href="#">Manage Users</a></li>
		  	</ul>
		</div>

		<div class="top-buttons float-right btn-group">
			<a class="btn btn-info float-right" href="#" role="button">Logout</a>
		</div>

		<div class="top-buttons btn-group float-right">
			<p class="user">Hey, admin</p>
		</div>

		<h1>Create Invoice</h1>
		<hr>

		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">×</a>
			<div class="message"></div>
		</div>

		<form method="post" id="create_invoice">
			<input type="hidden" name="action" value="create_invoice">
			<div class="row">
				<div class="col-xs-12">
					<textarea name="custom_email" id="custom_email" class="custom_email_textarea" placeholder="Enter a custom email message here if you wish to override the default invoice type email message."></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-5">
					<h1>
						<img src="js/logo.png" class="img-responsive">
					</h1>
				</div>
				<div class="col-xs-7 text-right">
					<div class="row">
						<div class="col-xs-6">
							<h1 class="invoice_type">INVOICE</h1>
						</div>
						<div class="col-xs-3">
							<select name="type" id="invoice_type" class="form-control">
								<option value="invoice" selected="">Invoice</option>
								<option value="quote">Quote</option>
								<option value="receipt">Receipt</option>
							</select>
						</div>
						<div class="col-xs-3">
							<select name="status" id="invoice_status" class="form-control">
								<option value="open" selected="">Open</option>
								<option value="paid">Paid</option>
							</select>
						</div>
					</div>
					<div class="col-xs-4 no-padding-right">
				        <div class="form-group">
				            <div class="input-group date" id="invoice_date">
				                <input type="text" class="form-control required" name="date" placeholder="Select invoice date" data-date-format="DD/MM/YYYY">
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
				        </div>
				    </div>
				    <div class="col-xs-4">
				        <div class="form-group">
				            <div class="input-group date" id="invoice_due_date">
				                <input type="text" class="form-control required" name="duedate" placeholder="Select due date" data-date-format="DD/MM/YYYY">
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
				        </div>
				    </div>
					<div class="input-group col-xs-4 float-right">
						<span class="input-group-addon">#SSJ</span>
						<input type="text" name="number" id="invoice_id" class="form-control required" placeholder="Invoice Number" aria-describedby="sizing-addon1" value="1">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="float-left">Customer Information</h4>
							<a href="#" class="float-right select-customer">Select existing customer</a>
							<div class="clear"></div>
						</div>
						<div class="panel-body form-group form-group-sm">
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<input type="text" class="form-control margin-bottom copy-input required" name="customer_name" id="customer_name" placeholder="Enter name" tabindex="1">
									</div>
									<div class="form-group">
										<input type="text" class="form-control margin-bottom copy-input required" name="customer_address_1" id="customer_address_1" placeholder="Address 1" tabindex="3">	
									</div>
									<div class="form-group">
										<input type="text" class="form-control margin-bottom copy-input required" name="customer_town" id="customer_town" placeholder="Town" tabindex="5">		
									</div>
									<div class="form-group no-margin-bottom">
										<input type="text" class="form-control copy-input required" name="customer_postcode" id="customer_postcode" placeholder="Postcode" tabindex="7">					
									</div>
								</div>
								<div class="col-xs-6">
									<div class="input-group float-right margin-bottom">
										<span class="input-group-addon">@</span>
										<input type="email" class="form-control copy-input required" name="customer_email" id="customer_email" placeholder="E-mail address" aria-describedby="sizing-addon1" tabindex="2">
									</div>
								    <div class="form-group">
								    	<input type="text" class="form-control margin-bottom copy-input" name="customer_address_2" id="customer_address_2" placeholder="Address 2" tabindex="4">
								    </div>
								    <div class="form-group">
								    	<input type="text" class="form-control margin-bottom copy-input required" name="customer_county" id="customer_county" placeholder="County" tabindex="6">
								    </div>
								    <div class="form-group no-margin-bottom">
								    	<input type="text" class="form-control required" name="customer_phone" id="customer_phone" placeholder="Phone number" tabindex="8">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 text-right">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Shipping Information</h4>
						</div>
						<div class="panel-body form-group form-group-sm">
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_name_ship" id="customer_name_ship" placeholder="Enter name" tabindex="9">
									</div>
									<div class="form-group">
										<input type="text" class="form-control margin-bottom" name="customer_address_2_ship" id="customer_address_2_ship" placeholder="Address 2" tabindex="11">	
									</div>
									<div class="form-group no-margin-bottom">
										<input type="text" class="form-control required" name="customer_county_ship" id="customer_county_ship" placeholder="County" tabindex="13">
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
								    	<input type="text" class="form-control margin-bottom required" name="customer_address_1_ship" id="customer_address_1_ship" placeholder="Address 1" tabindex="10">
									</div>
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_town_ship" id="customer_town_ship" placeholder="Town" tabindex="12">							
								    </div>
								    <div class="form-group no-margin-bottom">
								    	<input type="text" class="form-control required" name="customer_postcode_ship" id="customer_postcode_ship" placeholder="Postcode" tabindex="14">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- / end client details section -->
			<table class="table table-bordered" id="invoice_table">
				<thead>
					<tr>
						<th width="500">
							<h4><a href="#" class="btn btn-success btn-xs add-row"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a> Item</h4>
						</th>
						<th>
							<h4>Qty</h4>
						</th>
						<th>
							<h4>Price</h4>
						</th>
						<th width="300">
							<h4>Discount</h4>
						</th>
						<th>
							<h4>Sub Total</h4>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<div class="form-group form-group-sm  no-margin-bottom">
								<a href="#" class="btn btn-danger btn-xs delete-row"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
								<input type="text" class="form-control form-group-sm item-input invoice_product" name="invoice_product[]" placeholder="Enter item title and / or description">
								<!--<p class="item-select">or <a href="#">select an item</a></p> -->
							</div>
						</td>
						<td class="text-right">
							<div class="form-group form-group-sm no-margin-bottom">
								<input type="text" class="form-control invoice_product_qty calculate" name="invoice_product_qty[]" value="1">
							</div>
						</td>
						<td class="text-right">
							<div class="input-group input-group-sm  no-margin-bottom">
								<span class="input-group-addon">₹</span>
								<input type="text" class="form-control calculate invoice_product_price required" name="invoice_product_price[]" aria-describedby="sizing-addon1" placeholder="0.00">
							</div>
						</td>
						<td class="text-right">
							<div class="form-group form-group-sm  no-margin-bottom">
								<input type="text" class="form-control calculate" name="invoice_product_discount[]" placeholder="(ex: 10% or 10.50)">
							</div>
						</td>
						<td class="text-right">
							<div class="input-group input-group-sm">
								<span class="input-group-addon">₹</span>
								<input type="text" class="form-control calculate-sub" name="invoice_product_sub[]" id="invoice_product_sub" value="0.00" aria-describedby="sizing-addon1" disabled="">
							</div>
						</td>
					</tr>
				</tbody>
			</table>
			<div id="invoice_totals" class="padding-right row text-right">
				<div class="col-xs-6">
					<div class="input-group form-group-sm textarea no-margin-bottom">
						<textarea class-"form-control"="" name="notes" placeholder="Please enter any order notes here."></textarea>
					</div>
				</div>
				<div class="col-xs-6 no-padding-right">
					<div class="row">
						<div class="col-xs-4 col-xs-offset-5">
							<strong>Sub Total:</strong>
						</div>
						<div class="col-xs-3">
							₹<span class="invoice-sub-total">0.00</span>
							<input type="hidden" name="subtotal" id="invoice_subtotal" value="0.00">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4 col-xs-offset-5">
							<strong>Discount:</strong>
						</div>
						<div class="col-xs-3">
							₹<span class="invoice-discount">0.00</span>
							<input type="hidden" name="discount" id="invoice_discount" value="0.00">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4 col-xs-offset-5">
							<strong class="shipping">Shipping:</strong>
						</div>
						<div class="col-xs-3">
							<div class="input-group input-group-sm">
								<span class="input-group-addon">₹</span>
								<input type="text" class="form-control calculate shipping" name="shipping" aria-describedby="sizing-addon1" placeholder="0.00">
							</div>
						</div>
					</div>
										<div class="row">
						<div class="col-xs-4 col-xs-offset-5">
							<strong>TAX/VAT:</strong><br>Remove TAX/VAT <input type="checkbox" class="remove_vat">
						</div>
						<div class="col-xs-3">
							₹<span class="invoice-vat" data-enable-vat="1" data-vat-rate="20" data-vat-method="">0.00</span>
							<input type="hidden" name="gst" id="invoice_vat" value="0.00">
						</div>
					</div>
										<div class="row">
						<div class="col-xs-4 col-xs-offset-5">
							<strong>Total:</strong>
						</div>
						<div class="col-xs-3">
							₹<span class="invoice-total">0.00</span>
							<input type="hidden" name="total" id="invoice_total" value="0.00">
						</div>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col-xs-12 margin-top btn-group">
					<input type="submit" id="action_create_invoice" class="btn btn-success float-right" value="Create Invoice" data-loading-text="Creating...">
				</div>
			</div>
		</form>

		<div id="insert" class="modal fade">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title">Select an item</h4>
		      </div>
		      <div class="modal-body">
				<select class="form-control item-select"><option value="20">20 - 20 horas</option><option value="50">abc - abc</option><option value="100">art-1001 - bromsklossar</option><option value="2">as - sad</option><option value="100">bonjour - description</option><option value="12">cake - cake</option><option value="250">cartão de visita - Eau</option><option value="55">cbn - cvbn</option><option value="1500">CCTV - CCTV</option><option value="550">Cement - afsd</option><option value="500,00">Coca-cola - coca-cola 269ml</option><option value="30">Coffee - Coffee Large</option><option value="100">consultation - docotr</option><option value="6000">Contraportada - Full color Regional</option><option value="2550">Coste Fijo Comunidad 1 - Coste Fijo Comunidad 1</option><option value="50">cotatsone - dsdja</option><option value="10">cotton - abc</option><option value="1">Couleur - Couleur</option><option value="111111">dads - adaads</option><option value="23">DASD - ASDAS</option><option value="3">dd - ds</option><option value="50">dd - 500</option><option value="10">dddd - dddd</option><option value="10">dddd - dddd</option><option value="10">dddd - dddd</option><option value="10">dddd - dddd</option><option value="10">dddd - dddd</option><option value="10">dddd - dddd</option><option value="25">DDR2 - DDR Ram</option><option value="50000">Dell Laptop - Dell-123</option><option value="20">Deluxe AC Room - Deluxe AC Room 2 beds</option><option value="180">demo - demo product</option><option value="180">demo - demo product</option><option value="180">demo - demo product</option><option value="180">demo - demo product</option><option value="180">demo - demo product</option><option value="100">deneye - 123</option><option value="2500">Denim jean - Denim XXl Jean </option><option value="10000">Desiging  - Website Designing Plus</option><option value="500">Desktop - computador</option><option value="500">dfgdfg - dfgdfg</option><option value="bgtrjht">dfgrth - htrjhu</option><option value="12">dfsdfsa - fasdfasdf</option><option value="2.00">dfsf - ssdfsdf</option><option value="80">Diseño de Logo - Creación de logotipo</option><option value="32">disrin - ass</option><option value="50">dodol - dodol super</option><option value="1000">Domain - Top lavel Name</option><option value="30">Domain - domain name</option><option value="1700">domain + hosting - domain and hosting renewal for 1 year</option><option value="10">Domain Name - .com, .net, .org</option><option value="1500">Domain Renewal .com - fdafadfdf</option><option value="ddd">dsafdsfdsf - dfdsfdfs</option><option value="353">dsfds - fdsfds</option><option value="30">DVD - CD</option><option value="5000">Dynamic Website - For Demo</option><option value="5700">Eastern - A shop detail</option><option value="1">ec - ec</option><option value="52">Eggs - Eggs</option><option value="120">ejemplo - ejemplo</option><option value="">electrical - electrical</option><option value="0">ELN - Envios</option><option value="3500">eMarketing Campaign - Adwords - For 1 Month</option><option value="12">era - era</option><option value="5">ertert - ertert</option><option value="12">eseza muwanga - advocate</option><option value="10">etwset - tstse</option><option value="asfdasf">f - fsfa</option><option value="21">f - fd</option><option value="25">Facturas - Medialunas y varios</option><option value="100">fasdf - asdfasdf</option><option value="dgd">fd - g</option><option value="10005">fefdsf - sdfsf</option><option value="33">fgfg - vbv</option><option value="33">fgfg - vbv</option><option value="33">fgfg - vbv</option><option value="33">fgfg - vbv</option><option value="33">fgfg - vbv</option><option value="33">fgfg - vbv</option><option value="33">fgfg - vbv</option><option value="33">fgfg - vbv</option><option value="10">fghfdg - fghfgh</option><option value="123">fgsfg - fsg&lt;</option><option value="34">filefox - gdfgdfg</option><option value="12">Flowers - Roses</option><option value="7">Flyer - Some Flyer Description</option><option value="90">Food - its all about</option><option value="180">Formatação - Com Backup</option><option value="12.00">FotoPress Pro-Unlimited Site License - FotoPress Pro-Unlimited Site License</option><option value="12.00">FotoPress Pro-Unlimited Site License - FotoPress Pro-Unlimited Site License</option><option value="55">frert - rtrert</option><option value="1000">Furniture - 6 Seater</option><option value="1">gdf - gdf</option><option value="197">Geld verdienen Komplett-Paket 2.0 - Digitalprodukt</option><option value="6">generator photocopy - dg</option><option value="222222222">gfgfg - fgfg</option><option value="5000">GFH Rods - Rods</option><option value="223">ggsdfs - dfhwf</option><option value="223">ggsdfs - dfhwf</option><option value="223">ggsdfs - dfhwf</option><option value="223">ggsdfs - dfhwf</option><option value="5254">ghnm - fghjk</option><option value="78">ghol - ji</option><option value="bkjhkl">gkugl - kjglhl</option><option value="501">Google Glasses - Google Goodies</option><option value="2">google player - a, b, c, d, e, f</option><option value="100">Graphic Design - GD</option><option value="500.00">GRP Roofing - Service</option><option value="rteh">grtghtr - hgtrhtr</option><option value="80">Hardisk 80GB - Hardisk Sata</option><option value="hzrh">hehhe - hehjhte</option><option value="5000">hello - world</option><option value="123">Hello - 2</option><option value="200">Hello - Manager</option><option value="12">Hello - lzdjcnjd</option><option value="10">Hello - A</option><option value="200">help - help</option><option value="1212">hgfh - fghfgh</option><option value="2">hgjhgjh - kkghhjgj</option><option value="10">Hh - Ggh</option><option value="10">hhbj - fsd</option><option value="56">hj - {ñ</option><option value="hj">hjhj - hjhj</option><option value="iodvndsoaivn">hllo - dont know</option><option value="900">Honest Mayonnaise - very tast</option><option value="310">Horseriding - Horseriding horse horse</option><option value="12">hosting - 1 gb</option><option value="oasda">Hosting ABC - Shared Hosting 5 GB</option><option value="1000">Hosting ABC - Shared Hosting 5 GB</option><option value="1000">Hosting ABC - Shared Hosting 5 GB</option><option value="49.95">Hosting Package 1 - Hosting Package AB</option><option value="120">Hosting Services - Hosting Services - Annual Fee</option><option value="40">Hourly Rate - Hourly rate </option><option value="5">ID - ID</option><option value="1600">imprimante laser - photocopieur</option><option value="50">imprimente - imprimente laser</option><option value="39.99">Internet - FTTN7</option><option value="500">iPhone 6 - 16 GB</option><option value="20">item1 - testing</option><option value="45">j - j</option><option value="30">j - yj</option><option value="100">Jeans - Clothing</option><option value="566">jk - jlk</option><option value="1000">jojo - juli</option><option value="k">k - k</option><option value="200">kanal tedavisi - 1 kanal</option><option value="200">kanal tedavisi - 1 kanal</option><option value="300">kanal tedavisi - 2 kanal</option><option value="1299">kasa fiskalna - posnet bingo hs ej</option><option value="18%">KDV - AAAQ</option><option value="5">khkjhkjh - jhgjhgjhgj</option><option value="9.00">KILL - KILLLLLLLL</option><option value="50">kjb - ohio;h</option><option value="2500">Kodulehe arendus - Wordpress baasil leht ettevõttele</option><option value="10000">lap - dell</option><option value="32000">laptop - acer travelmate 6493</option><option value="214,00">laptop - screen 15\'</option><option value="500">Laptop - 1</option><option value="45454.21">laptop - sdkjf f idsof od</option><option value="1200">laptop - samsung</option><option value="1200">Laptop HP - Laptop Hp 14</option><option value="450">Last Product - Decription for last product</option><option value="20">Lays - Lays</option><option value="30">Lays French Cheese - Lays French Cheese</option><option value="150">Led 7W Pack of 10 - Led 7W Pack of 10</option><option value="49">Liquid Edge - Nail Tape</option><option value="4">ljakljkljf - jlkjklj</option><option value="25">lm red - lm</option><option value="50">logomarca - criação de logomarcas 3 opções</option><option value="1500">luX - FDFDF</option><option value="1500">luX - FDFDF</option><option value="50">lux - soap</option><option value="12">lux - aqaqa</option><option value="10">Madar Chod - Teri Ma Ki Chood</option><option value="12">maggi - noodles</option><option value="45.458">MAINNNNO - knsknaskfnk</option><option value="25">Maketēšanas pakalpojumi - test</option><option value="20">Mama - Mama Punti</option><option value="250.00">Mantenimiento - Mensualidad de mantenimiento banus</option><option value="10">medicine - fever</option><option value="3">Mediterranean Gardening Magazine - This item should be on another line</option><option value="30000">mensualidad - es la mensualidad de los servicios</option><option value="62161612651">Mercedes Benz 220 - Car import</option><option value=".0036">Minutes - Minutes</option><option value="2300">mnk123 - imac</option><option value="10.000">mobil app - one function or five corporate page mobil app</option><option value="1500">mobile - lenovo</option><option value="3.47">MolPay  - Processing Fee</option><option value="100000">Mon Produit - Produit exceptionnel </option><option value="22222">Monitor - adaSD</option><option value="2563">Motherboard - DH61WW</option><option value="300">Mouse - Sony</option><option value="12.000">mug - asdsad</option><option value="12000">mug - asdsad</option><option value="25">Mustafa - azzz</option><option value="5.00">my - ghuyyyrtuyhh</option><option value="130">MY CABLE LOCAL PACK - MY CABLE LOCAL PACK</option><option value="100">MY CABLE NXT-PACK - NXT ALL CHANNEL PACK</option><option value="20">New product - demoi</option><option value="2500">New Visa Stamping - Visa Stamping</option><option value="500">Nokia 5233 - Refused Nokia 5233</option><option value="1034">noor - human</option><option value="17">Normal AC Room - AC Room 2 beds</option><option value="74">oil - n</option><option value="200">oil - oil</option><option value="5.00">okla - info service</option><option value="99">ONeweb - one parallax html</option><option value="20">Onion - Onion</option><option value="10">P name - desc</option><option value="2500">Pag full color interior - Publicacion Full </option><option value="2500">Pag full color interior - Publicacion Full </option><option value="2500">Pag full color interior - Publicacion Full </option><option value="2500">Pag full color interior - Publicacion Full </option><option value="12">paint - asd</option><option value="107">pan carad - Pan card nsd</option><option value="2">Papa - Verdura Amarilla</option><option value="1200">Página Web good - Creación de Página Web</option><option value="2">pen - bolpoint pen</option><option value="2">Pen - Pen</option><option value="12">pencil - camel</option><option value="1">pencil - natraj</option><option value="1">Pencil - Pencil</option><option value="90">PENDON - PENDON GRANDE</option><option value="100">pene - penelope</option><option value="1">pep jens - pepy jens</option><option value="50">Pernottamento - Rustico</option><option value="200 Manata">Pervan  - Jaluz istiyir. 45 kv </option><option value="5000">PIPE - POE</option><option value="11.50">PISTIKUPESA - BERKER S1</option><option value="12">plan aa - lkmfkldfmgkl</option><option value="10">porta - pfhuzfh azifblazif</option><option value="300000">PPF tower - hello word</option><option value="54.71">Premium - Premium Fee </option><option value="56.40">Premium Fee (Cash) - Premium Fee (Cash)</option><option value="1000">printing - dsfsdf</option><option value="12">Pro1 - blabla bla</option><option value="15">Pro2 - blabla bla seeeeee</option><option value="99.05">Product - description</option><option value="10000">Product - Description</option><option value="1000">product1 - doors</option><option value="20">product1 - pff</option><option value="1200">product2 - doors</option><option value="200">product3 - accessories</option><option value="10">prova - provasd</option><option value="1000">prova1 - gia</option><option value="42.00">Psp 2001 RB - Sony psp refurbished 2001 model </option><option value="60000">Public Coworking space 3 Hours - 3 Hours</option><option value="2">q - q</option><option value="4000">qsddqs - qsdqsdqds</option><option value="121">qw - as1221</option><option value="124">qwer - qwer</option><option value="12">qwewqr - qweqr</option><option value="rdty">r6ty - rty</option><option value="16000">RABBITS - 1 UNITS = 10 RABBITS</option><option value="500">ram  - pragi beskit</option><option value="24">Range - Khalakjk</option><option value="24">Range - Khalakjk</option><option value="20">Red bull - soft drink</option><option value="49.49">Result - Internet 4G Orange</option><option value="2000">Rice 75 - Rice Matta</option><option value="2000">Rice 75 - Rice Matta</option><option value="2000">Rice 75 - Rice Matta</option><option value="10">rods plastic - plastic</option><option value="25">rok\\\'n lol\\\' - asd</option><option value="345">room - Deluxe</option><option value="100">Room Perfume - rose</option><option value="890">Room1 - Type Room</option><option value="20">S-0001 - Sweat</option><option value="8">sad - SDASDASDASD</option><option value="10">Sambar Masala TN - Sambar Masala</option><option value="3">sample - orodd</option><option value="1000">Sample - Sample Desc</option><option value="10">sample - sadsad</option><option value="245">Sandisk 4GB - 2 Yaers Warrenty</option><option value="1">sas - a</option><option value="22">Saz - 222</option><option value="232">Scrumbox23 - vwerv</option><option value="10">sdfg - dfg</option><option value="2">sds - sdsd</option><option value="dsds">sds - sdsd</option><option value="10000">Security - securirty</option><option value="10000">see - see</option><option value="10000">see - seo</option><option value="10000">see - seo</option><option value="300">sepatu vans - sepatu vans premium</option><option value="6">Ser5 - Whd</option><option value="233">Service 1 - serv</option><option value="35.50">Service Charge - Weekly - Service Charge - Weekly</option><option value="65.000">Servicio de Transporte - Traslado Aeropuerto Medellin</option><option value="150">Servicio Personalizado 01 - diseño web</option><option value="fdh">sggsf - sfdfh</option><option value="20">Shampoo - wash your hair</option><option value="100">sharik - sharik</option><option value="122">shirt - ts</option><option value="250">Shirt - US Polo</option><option value="10">shirt - boys shirt</option><option value="50">Shoes - Great Shoes</option><option value="40">Shqipri Itali - udhetim toksor</option><option value="150">Silla - silla color rojito</option><option value="122.3">Sillón LUXURY - Sillon gerencial de malla, base de 5 puntas acabado en cromado. Asiento reclinable y regulable en altura</option><option value="45">simple - simple</option><option value="3500">SK320超強機器 - description</option><option value="50000">sm soft tech - web</option><option value="50.00">soap - good</option><option value="1000">Sofa - Sofa</option><option value="40.00">Some Product - Some Description</option><option value="65.00">Sony psp 3001 rb - Sony psp refurbished 3001 model</option><option value="25">souce - dffsg</option><option value="700">sparx - Sandle</option><option value="10">SSL - Namecheap SSL</option><option value="20:00">sss - slice</option><option value="8">ssss - ssss</option><option value="300">standard deluxe  - room </option><option value="350">standard deluxe luxury - room </option><option value="12.00">Starter Plan - 5GB / 20GB</option><option value="10">Stukke - ala bala</option><option value="1500">Sugar - 100jgbag</option><option value="40">Sugar - sugar</option><option value="1200">Sumsung 2830 - yellow</option><option value="10">T-0001 - T-shirt</option><option value="200">T-shirt - Vivo</option><option value="10">tazzzzzzzzzz - tazzzzzzz</option><option value="451">test - test</option><option value="23">test - test</option><option value="45">test - test</option><option value="2">Test - d</option><option value="50">test - test product</option><option value="10">test - test</option><option value="10">test - test</option><option value="100">test - test</option><option value="1200">test - lfdhsfjbsahdjvasdövhsaölvhsdvhaslvslvhlsvs</option><option value="2">test - test1</option><option value="234">test - test</option><option value="41">test - karhik</option><option value="100">test - teest</option><option value="100">test - test</option><option value="123">Test - Test1234</option><option value="900">test - test</option><option value="12">test - test</option><option value="4">test - test</option><option value="100">test - test</option><option value="100">test - tests</option><option value="3.89">Test 1 - Wall bracket 3"</option><option value="34">test 2 - test desc 2</option><option value="60">test 2017 adel - adel test</option><option value="">test item - </option><option value="1.00">test pack - something</option><option value="2">test1 - TERE</option><option value="2">test1 - TERE</option><option value="2">test1 - TERE</option><option value="2">test1 - TERE</option><option value="20">test2 - sdsad</option><option value="20">teste - teste</option><option value="50">teste - teste</option><option value="52">Teste - Teste de Produto</option><option value="10.00">teste - nao sei</option><option value="500">TESTING MO - gfdsg</option><option value="50">testt - est</option><option value="77">TIPTOP 8  - TIP!</option><option value="78">TIPTOP 8 LIGHT - TIPL</option><option value="190">TIPTOP24 - tip24</option><option value="999">tree - tress fonk</option><option value="1000">truth - truth</option><option value="2">ts - tststs</option><option value="5555">TTYT - 45</option><option value="5555">TTYT - 45</option><option value="5555">TTYT55R55 - 45</option><option value="40">Uriya - djkaiffhlkfa</option><option value="1890000">يخچال فريزر نيكسان - 22 فوت</option><option value="54">vfdas - bvfd</option><option value="100">VISA|444444 - GOLD</option><option value="100">visiting card - ad</option><option value="111">Vova - avava</option><option value="5">VPS #1 - VPS #1</option><option value="15.00">Water  - Water</option><option value="3">wdsf - ds</option><option value="1000">web - web</option><option value="10000">Web - Webssaahsjas</option><option value="80">Web Design Service - hih</option><option value="10">Web deve - hee</option><option value="7500000">Webdes Boboko - aaa</option><option value="7000">WordPress Website - 2 Language</option><option value="34">zfsdsdsd - sdsdsdv</option><option value="4">سروال قصير - طويل - غسيل بخار</option><option value="4">سروال قصير - طويل - غسيل بخار</option></select>		      </div>
		      <div class="modal-footer">
		        <button type="button" data-dismiss="modal" class="btn btn-primary" id="selected">Add</button>
				<button type="button" data-dismiss="modal" class="btn">Cancel</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<div id="insert_customer" class="modal fade">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title">Select an existing customer</h4>
		      </div>
		      <div class="modal-body">
				<div id="data-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="data-table_length"><label>Show <select name="data-table_length" aria-controls="data-table" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="data-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="data-table"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered dataTable no-footer" id="data-table" role="grid" aria-describedby="data-table_info"><thead><tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 0px;"><h4>Name</h4></th><th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 0px;"><h4>Email</h4></th><th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 0px;"><h4>Phone</h4></th><th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 0px;"><h4>Action</h4></th></tr></thead><tbody>
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    
			    
		    <tr role="row" class="odd">
					<td class="sorting_1">ahmed</td>
				    <td>hgfgjfd@hfgfgf.fr</td>
				    <td>168581788888858</td>
				    <td><a href="#" class="btn btn-primary btn-xs customer-select" data-customer-name="ahmed" data-customer-email="hgfgjfd@hfgfgf.fr" data-customer-phone="168581788888858" data-customer-address-1="jgjghjghj" data-customer-address_2="" data-customer-town="gjjjhgj" data-customer-county="hyhyhy" data-customer-postcode="2222222221" data-customer-name-ship="ahmed" data-customer-address-1-ship="jgjghjghj" data-customer-address-2-ship="" data-customer-town-ship="gjjjhgj" data-customer-county-ship="hyhyhy" data-customer-postcode-ship="2222222221">Select</a></td>
			    </tr><tr role="row" class="even">
					<td class="sorting_1">bhanulab</td>
				    <td>bhanulab@gmail.com</td>
				    <td>878</td>
				    <td><a href="#" class="btn btn-primary btn-xs customer-select" data-customer-name="bhanulab" data-customer-email="bhanulab@gmail.com" data-customer-phone="878" data-customer-address-1="q" data-customer-address_2="q" data-customer-town="q" data-customer-county="q" data-customer-postcode="542213" data-customer-name-ship="bhanulab" data-customer-address-1-ship="q" data-customer-address-2-ship="q" data-customer-town-ship="dfgdfg" data-customer-county-ship="q" data-customer-postcode-ship="542213">Select</a></td>
			    </tr><tr role="row" class="odd">
					<td class="sorting_1">bonaona</td>
				    <td>adsfasf@asdad.com</td>
				    <td>444</td>
				    <td><a href="#" class="btn btn-primary btn-xs customer-select" data-customer-name="bonaona" data-customer-email="adsfasf@asdad.com" data-customer-phone="444" data-customer-address-1="asdfasdfadsf" data-customer-address_2="" data-customer-town="adsf" data-customer-county="adsf" data-customer-postcode="07610" data-customer-name-ship="bonaona" data-customer-address-1-ship="asdfasdfadsf" data-customer-address-2-ship="" data-customer-town-ship="adsf" data-customer-county-ship="adsf" data-customer-postcode-ship="07610">Select</a></td>
			    </tr><tr role="row" class="even">
					<td class="sorting_1">dave pop</td>
				    <td>stewart.morris@yahoo.co.u.k</td>
				    <td>0123 456789</td>
				    <td><a href="#" class="btn btn-primary btn-xs customer-select" data-customer-name="dave pop" data-customer-email="stewart.morris@yahoo.co.u.k" data-customer-phone="0123 456789" data-customer-address-1="testing 1" data-customer-address_2="testing 2" data-customer-town="Yorkshire" data-customer-county="UK" data-customer-postcode="NW18EQ" data-customer-name-ship="dave pop" data-customer-address-1-ship="testing 1" data-customer-address-2-ship="testing 2" data-customer-town-ship="Yorkshire" data-customer-county-ship="UK" data-customer-postcode-ship="NW18EQ">Select</a></td>
			    </tr><tr role="row" class="odd">
					<td class="sorting_1">Fernando</td>
				    <td>contato@ayron.com.br</td>
				    <td>18998228079</td>
				    <td><a href="#" class="btn btn-primary btn-xs customer-select" data-customer-name="Fernando" data-customer-email="contato@ayron.com.br" data-customer-phone="18998228079" data-customer-address-1="Rua São Paulo 551" data-customer-address_2="A" data-customer-town="Centro" data-customer-county="Andradina" data-customer-postcode="16901009" data-customer-name-ship="Fernando" data-customer-address-1-ship="Rua São Paulo 551" data-customer-address-2-ship="A" data-customer-town-ship="Centro" data-customer-county-ship="Andradina" data-customer-postcode-ship="16901009">Select</a></td>
			    </tr><tr role="row" class="even">
					<td class="sorting_1">James</td>
				    <td>seanwebdev@gmail.com</td>
				    <td>909809823</td>
				    <td><a href="#" class="btn btn-primary btn-xs customer-select" data-customer-name="James" data-customer-email="seanwebdev@gmail.com" data-customer-phone="909809823" data-customer-address-1="asd" data-customer-address_2="" data-customer-town="asd" data-customer-county="asd" data-customer-postcode="sadfasdf" data-customer-name-ship="James" data-customer-address-1-ship="asd" data-customer-address-2-ship="" data-customer-town-ship="asd" data-customer-county-ship="asd" data-customer-postcode-ship="sadfasdf">Select</a></td>
			    </tr><tr role="row" class="odd">
					<td class="sorting_1">jaydeep</td>
				    <td>dsa</td>
				    <td>85541</td>
				    <td><a href="#" class="btn btn-primary btn-xs customer-select" data-customer-name="jaydeep" data-customer-email="dsa" data-customer-phone="85541" data-customer-address-1="asda" data-customer-address_2="sad" data-customer-town="asd" data-customer-county="asd" data-customer-postcode="3365" data-customer-name-ship="jaydeep" data-customer-address-1-ship="asda" data-customer-address-2-ship="sad" data-customer-town-ship="asd" data-customer-county-ship="asd" data-customer-postcode-ship="3365">Select</a></td>
			    </tr><tr role="row" class="even">
					<td class="sorting_1">Jmi dolson</td>
				    <td>768@7890.com</td>
				    <td>98765455</td>
				    <td><a href="#" class="btn btn-primary btn-xs customer-select" data-customer-name="Jmi dolson" data-customer-email="768@7890.com" data-customer-phone="98765455" data-customer-address-1="asdj asdlfj" data-customer-address_2="" data-customer-town="virk" data-customer-county="PK" data-customer-postcode="67" data-customer-name-ship="Jmi dolson" data-customer-address-1-ship="asdj asdlfj" data-customer-address-2-ship="" data-customer-town-ship="virk" data-customer-county-ship="PK" data-customer-postcode-ship="67">Select</a></td>
			    </tr><tr role="row" class="odd">
					<td class="sorting_1">lodvald marku</td>
				    <td>lodvaldmarku@hotmail.com</td>
				    <td>0684740479</td>
				    <td><a href="#" class="btn btn-primary btn-xs customer-select" data-customer-name="lodvald marku" data-customer-email="lodvaldmarku@hotmail.com" data-customer-phone="0684740479" data-customer-address-1="lezhe" data-customer-address_2="lezhe" data-customer-town="lezhe" data-customer-county="le albania" data-customer-postcode="4501" data-customer-name-ship="lodvald marku" data-customer-address-1-ship="lezhe" data-customer-address-2-ship="lezhe" data-customer-town-ship="lezhe" data-customer-county-ship="le albania" data-customer-postcode-ship="4501">Select</a></td>
			    </tr><tr role="row" class="even">
					<td class="sorting_1">marcilio</td>
				    <td>contato@grupozion.com.br</td>
				    <td>41999999999</td>
				    <td><a href="#" class="btn btn-primary btn-xs customer-select" data-customer-name="marcilio" data-customer-email="contato@grupozion.com.br" data-customer-phone="41999999999" data-customer-address-1="Rua teste 123 casa 569" data-customer-address_2="" data-customer-town="curitiba" data-customer-county="Brasil" data-customer-postcode="80000000" data-customer-name-ship="marcilio" data-customer-address-1-ship="Rua teste 123 casa 569" data-customer-address-2-ship="" data-customer-town-ship="curitiba" data-customer-county-ship="Brasil" data-customer-postcode-ship="80000000">Select</a></td>
			    </tr></tbody></table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="data-table_info" role="status" aria-live="polite">Showing 1 to 10 of 96 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="data-table_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="data-table_previous"><a href="#" aria-controls="data-table" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="data-table" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="data-table" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="data-table" data-dt-idx="3" tabindex="0">3</a></li>
			    <li class="paginate_button "><a href="#" aria-controls="data-table" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="data-table" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button disabled" id="data-table_ellipsis"><a href="#" aria-controls="data-table" data-dt-idx="6" tabindex="0">…</a></li><li class="paginate_button "><a href="#" aria-controls="data-table" data-dt-idx="7" tabindex="0">10</a></li><li class="paginate_button next" id="data-table_next"><a href="#" aria-controls="data-table" data-dt-idx="8" tabindex="0">Next</a></li></ul></div></div></div></div>		      </div>
		      <div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn">Cancel</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

	</div>

</body><span class="gr__tooltip"><span class="gr__tooltip-content"></span><i class="gr__tooltip-logo"></i><span class="gr__triangle"></span></span></html>