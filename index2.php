<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Aplikasi pemesanan makanan">
    <meta name="author" content="Habibie">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
   	<link rel="icon" type="image/x-icon" href="https://dumetschool.com/dsicon.ico">
	</head>
	<body>
	<div class="container mt-5">
		<div class="row mb-5">
			<div class="col-lg-12 col-12">
				<div class="card">
					<div class="card-header bg-info text-white">
						<h3 class="m-0"><i class="fas fa-cart plus"></i> Shopping Cart</h3>
					</div>
					<div class="card-body">
						Quantity : Rp. <span id="quantity">0</span><br>
						Sub-Total : Rp. <span id="price">0</span> 
					</div>
				</div>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-lg-6 col-6">
				<input type="text" name="keyword" id="keyword" class="form-control form-control-lg" placeholder="Search">
			</div>
			<div class="col-lg-6 col-6 text-right">
				<span class="font-weight-bold">Sort Data:</span>
						<span class="font-weight-bold">Sort Data:</span>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" name="sort" id="sort1" class="custom-control-input" onclick="sortData(1)">
							<label class="custom-control-label" for="sort1">ASC</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" name="sort" id="sort2" class="custom-control-input" onclick="sortData(2)">
							<label class="custom-control-label" for="sort2">DESC</label>
						</div>
					</div>
				</div>
		<div class="row justify-content-center"></div>
	</div>
	<script type="text/javascript">
		var foods;

		foods = [
			["American Favourite", "Pepperoni Sapi, Daging Sapi Cincang, Jamur, Mozzarella.", 86000],
			["Super Supreme", "Tuna, Jamur Paprika dan Cabai.", 86000],
			["Cheese Burger", "Daging sapi cincang dan daging ayam, mozzarella.", 86000],
			["Meat Lover", "Sosis sapi, daging sapi cincang, sosis ayam.", 86000,],
			["Pepperonni", "Pepperoni sapi, dan keju mozzarella.", 86000],
			["Tuna Melt", "Irisan daging ikan tuna, saus mayonnaise.", 76000,],
			["Frankfurter BBQ", "Frankfurter sapi, mozzarella, saus honey BBQ, mustard.", 76000,],
			["Cheese Lover", "Keju Mozzarella, Keju Parmesan & String Mozzarella.", 76000],
			["Black Pepper Pasta", "Pasta Fettucine, Daging sapi, Saus Lada Hitam.", 46000],
			["Beef Spaghetti", "Pasta Spaghetti, Daging Sapi Cincang, Keju Cheddar.", 46000],
			["Tuna Aglio Pasta", "Pasta Spaghetti, Tuna, Jamur Paprika dan Cabai.", 46000],
			["Creamy Beef Pasta", "Pasta Fettucine, Daging sapi / Ayam, Jamur dan Saus Krim.", 46000]
		];

		function fetchAllData()
		{
			document.querySelector(".justify-content-center").innerHTML = "";

			for (var index = 0; index <= foods.length-1; index++) {
				document.querySelector(".justify-content-center").innerHTML +=
				'<div class="col-lg-4 col-4 mb-5>' +
					'<div class="card">' +
						'<img src="img/foods/'+foods[index][0]+'.jpg" alt = "'+foods[index][0]+'" class="card-img-top">' +
						'<div class="card-body">' +
							'<h3>'+foods[index][0]+'</h3>' +
							'<p>'+foods[index][1]+'</p>' +
							'<p class="mb-0"><strong class="text-primary">Rp '+foods[index][2]+'</strong></p>' +
							'<p class="mb-0"><button class="btn btn-sm btn-success" onclick="addToCart('+foods[index][2]+')"><i class="fas fa-plus-circle"></i> Add to cart</button></p>' +						
						'</div>' +
					'</div>' +
				'</div>';
			}
		}

		function addToCart(price)
		{
			var quantity = document.getElementById("quantity").innerText;
			var total = document.getElementById("price").innerText;
			
			document.getElementById("quantity").innerHTML = parseInt(1)+parseInt(quantity);
			document.getElementById("price").innerHTML = parseInt(total)+parseInt(price);
		}

		function sortData(param)
		{
			if (param == 1) foods.sort((murah, mahal) => murah[2] - mahal[2]);
			else foods.sort((murah, mahal) => mahal[2] - murah[2]);

			fetchAllData();

		}
		document.getElementById("keyword").addEventListener("keyup", function(event) {
			if (event.keyCode === 13){
				event.preventDefault();

				var q = document.querySelector("input[name=keyword]").value;

				document.querySelector(".justify-content-center").innerHTML = "";

				var result = [];

				for (var i = 0; i <= foods.length-1; i++) {
					if (foods[i][0].includes(q)) {
						result[0]=foods[i][0];
						result[1]=foods[i][1];
						result[2]=foods[i][2];
					}
				}

				if (q == "") fetchAllData();
				else{

					document.querySelector(".justify-content-center").innerHTML +=
					'<div class="col-lg-4 col-4 mb-5>' +
					'<div class="card">' +
						'<img src="images/products/'+result[0]+'.jpg" alt = "'+result[0]+'" class="card-img-top">' +
						'<div class="card-body">' +
							'<h3>'+result[0]+'</h3>' +
							'<p>'+result[1]+'</p>' +
							'<p class="mb-0"><strong class="text-primary">Rp '+result[2]+'</strong></p>' +
							'<p class="mb-0"><button class="btn btn-sm btn-success" onclick="addToCart('+foods[2]+')"><i class="fas fa-plus-circle"></i> Add to cart</button></p>' +					
						'</div>' +
					'</div>' +
				'</div>';
			}
		}
	});

		fetchAllData();
	</script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
 	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
 	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</body>
</html>
