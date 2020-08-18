<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<!--characther set -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--setting scale for mabile devices-->

	<title>Ger's Garage ADM</title>


	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/10f8e7de20.js" crossorigin="anonymous"></script>
	<link href="../css/admin.css" rel="stylesheet" type="text/css">
	<!-- style-->

	<script type="text/javascript" src="../js/main.js"></script>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/jquery.min.js"></script>

</head>

<body>
	<div class="grid-container">

		<div class="btn_return"><button onclick="window.location.href='../admin/dashboard.php';"> Ger's </button>
		</div>
		<!--btn_return-->

		<!--btn_invoice-->

	</div>
	<!--grid-cointainer-->


	<!--href: https://codepen.io/tjoen/pen/vCHfu-->

	<div class="invoice">
		<header>
			<h1>Invoice</h1>
			<address contenteditable>
				<p>Jonathan Neal</p>
				<p>101 E. Chapman Ave<br>Orange, CA 92866</p>
				<p>(800) 555-1234</p>
			</address>

		</header>
		<!--./header-->

		<article>
			<h1>Recipient</h1>
			<div class="slogan">
				<p>Ger's<br>Garage</p>
			</div>
			<!--logo at left-->

			<table class="meta">
				<tr>
					<th><span contenteditable>Invoice #</span></th>
					<td><span contenteditable>101138</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Date</span></th>
					<td><span contenteditable>January 1, 2012</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Amount Due</span></th>
					<td><span id="prefix" contenteditable>$</span><span>600.00</span></td>
				</tr>
			</table>
			<!--./meta-->

			<table class="inventory">
				<thead>

					<tr>
						<th><span contenteditable>Service</span>

						</th>
						<th><span contenteditable>Description</span>

						</th>

						<th><span contenteditable>Price</span>

						</th>
					</tr>

				</thead>
				<!--table header-->

				<tbody>
					<tr>
						<td><span contenteditable>Front End Consultation</span></td>
						<td><span contenteditable>Experience Review</span></td>
						<td><span data-prefix>$</span><span contenteditable>150.00</span></td>

					</tr>
					<tr>
						<td><span contenteditable>Front End Consultation</span></td>
						<td><span contenteditable>Experience Review</span></td>
						<td><span data-prefix>$</span><span contenteditable>150.00</span></td>

					</tr>
					<tr>
						<td><span contenteditable>Front End Consultation</span></td>
						<td><span contenteditable>Experience Review</span></td>
						<td><span data-prefix>$</span><span contenteditable>150.00</span></td>

					</tr>
				</tbody>
				<!--tbody-->

			</table>
			<!--inventory producst-->



			<br>

			<table class="inventory">
				<thead>

					<tr>
						<th><span contenteditable>Item</span>
							<p></p>
						</th>
						<th><span contenteditable>Description</span>
							
						</th>
						<th><span contenteditable>Rate</span></th>
						<th><span contenteditable>Quantity</span>

						</th>
						<th><span contenteditable>Price</span>

						</th>
					</tr>

				</thead>
				<!--./head-->

				<tbody>
					<tr>
						<td><span contenteditable>Example</span></td>
						<td><span contenteditable>Experience Review</span></td>
						<td><span data-prefix>$</span><span contenteditable>10.00</span></td>
						<td><span contenteditable>6</span></td>
						<td><span data-prefix>$</span><span>60.00</span></td>
					</tr>
					<tr>
						<td><span contenteditable>Example</span></td>
						<td><span contenteditable>Experience Review</span></td>
						<td><span data-prefix>$</span><span contenteditable>15.00</span></td>
						<td><span contenteditable>4</span></td>
						<td><span data-prefix>$</span><span>60.00</span></td>
					</tr>
					<tr>
						<td><span contenteditable>Example</span></td>
						<td><span contenteditable>Experience Review</span></td>
						<td><span data-prefix>$</span><span contenteditable>150.00</span></td>
						<td><span contenteditable>1</span></td>
						<td><span data-prefix>$</span><span>150.00</span></td>
					</tr>
					<tr>
						<td><span contenteditable>Front End Consultation</span></td>
						<td><span contenteditable>Experience Review</span></td>
						<td><span data-prefix>$</span><span contenteditable>100.00</span></td>
						<td><span contenteditable>1</span></td>
						<td><span data-prefix>$</span><span>100</span></td>
					</tr>
				</tbody>
				<!--tbody-->

			</table>
			<!--inventory service-->



			<table class="balance">
				<tr>
					<th><span contenteditable>Total</span></th>
					<td><span data-prefix>$</span><span>600.00</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Amount Paid</span></th>
					<td><span data-prefix>$</span><span contenteditable>0.00</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Balance Due</span></th>
					<td><span data-prefix>$</span><span>600.00</span></td>
				</tr>
			</table>
			<!--balance-->

		</article>
		<!--article-->

		<aside>
			<h1><span contenteditable>Additional Notes</span></h1>
			<div contenteditable>
				<p>A finance charge of 1.5% will be made on unpaid balances after 30 days.</p>
			</div>
		</aside>
	</div>
	<!--./ivoice-->