<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/master1(MOD).css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
    <div class="product">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="current_page">
						<ul>
							<li><a href="categories.html">Categoría</a></li>
							<li><a href="categories.html">Sub-Categoría</a></li>
							<li>Nombre de Producto</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row product_row">

				<!-- Product Image -->
				<div class="col-lg-6">
					<div class="product_image">
						<div class="product_image_large"><img src="img/product_image_1.jpg" alt=""></div>
						<!-- <div class="product_image_thumbnails d-flex flex-row align-items-start justify-content-start">
							<div class="product_image_thumbnail" style="background-image:url(img/product_image_1.jpg)" data-image="img/product_image_1.jpg"></div>
							<div class="product_image_thumbnail" style="background-image:url(img/product_image_2.jpg)" data-image="img/product_image_2.jpg"></div>
							<div class="product_image_thumbnail" style="background-image:url(img/product_image_4.jpg)" data-image="img/product_image_4.jpg"></div>
						</div> -->
					</div>
				</div>

				<!-- Product Content -->
				<div class="col-lg-6">
					<div class="product_content">
						<div class="product_name">2 Piece Swimsuit</div>
						<div class="product_price">$35.00</div>
						<!-- In Stock -->
						<div class="in_stock_container">
							<div class="in_stock in_stock_true"></div>
							<span>in stock</span>
						</div>
						<div class="product_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis quam ipsum. Pellentesque consequat tellus non tortor tempus, id egestas elit iaculis. Proin eu dui porta, pretium metus vitae, pharetra odio. Sed ac mi commodo, pellentesque erat eget, accumsan justo. Etiam sed placerat felis. Proin non rutrum ligula.</p>
						</div>
						<!-- Product Quantity -->
						<div class="product_quantity_container">
							<span>Quantity</span>
							<div class="product_quantity clearfix">
								<input id="quantity_input" type="number" value="1">
								<!-- <div class="quantity_buttons">
									<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-caret-up" aria-hidden="true"></i></div>
									<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-caret-down" aria-hidden="true"></i></div>
								</div> -->
							</div>
						</div>
						<!-- Product Size -->
						<div class="product_size_container">
							<span>Size</span>
							<div class="product_size">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li>
										<input type="radio" id="radio_1" name="product_radio" class="regular_radio radio_1">
										<label for="radio_1">XS</label>
									</li>
									<li>
										<input type="radio" id="radio_2" name="product_radio" class="regular_radio radio_2" checked>
										<label for="radio_2">S</label>
									</li>
									<li>
										<input type="radio" id="radio_3" name="product_radio" class="regular_radio radio_3">
										<label for="radio_3">M</label>
									</li>
									<li>
										<input type="radio" id="radio_4" name="product_radio" class="regular_radio radio_4">
										<label for="radio_4">L</label>
									</li>
									<li>
										<input type="radio" id="radio_5" name="product_radio" class="regular_radio radio_5">
										<label for="radio_5">XL</label>
									</li>
								</ul>
							</div>
							<div class="button cart_button"><a href="#">add to cart</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>		
    </div>
    
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootsrap.js"></script>
    <script src="js/bootsrap.bundle.js"></script>
    <script src="js/product.js"></script>
</body>
</html>