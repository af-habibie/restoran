<section class="py-5">
	<div class="container mt-5 mb-5">
		<div class="row">
			<div class="col-6">
				<input class="form-control" type="text" id="search" placeholder="Search The Product Name" aria-label="Search">
			</div>
			<div class="col-6 text-right">
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="termurah" onclick="murah()" name="sort" class="custom-control-input">
					<label class="custom-control-label" for="termurah">Termurah</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="termahal" onclick="mahal()" name="sort" class="custom-control-input">
					<label class="custom-control-label" for="termahal">Termahal</label>
				</div>
			</div>
		</div>
		<hr>
		<div class="row" id="output">
			<script type="text/javascript">
				//function(event) untuk callback
				document.getElementById("search").addEventListener("keyup", function(event){
					//13 adalah keycode untuk ENTER
					if (event.keyCode == 13) {
						event.preventDefault();
						search(document.getElementById("search").value);
					}
				});

				murah(); 

				function search(product_name){
					var image = ["creamybeef.jfif" ,"tunaaglio.jfif","spaghettibeef.jfif", "blackpepperbeef.jfif", "cheese.jfif", "frankfurter.jfif". "tuna.jfif", "pepperoni.jfif", "meatlover.jfif", "cheeseburger.jfif", "supersupreme.jfif", "american.jfif"];
					var title = ["Creamy Beef Pasta", "Tuna Aglio Pasta", "Beef Spaghetti", "Black Pepper Pasta", "Cheese Lover", "Frankfurter BBQ", "Tuna Melt", "Pepperoni", "Meat Lover", "Cheese Burger", "Super Supreme", "American Favourite"];
					
					var description = [
						"Pasta Fettucine, Daging sapi / Ayam, Jamur dan Saus Krim.",
						"Pasta Spaghetti, Tuna, Jamur Paprika dan Cabai.",
						"Pasta Spaghetti, Daging Sapi Cincang, Keju Cheddar.",
						"Pasta Fettucine, Daging sapi, Saus Lada Hitam.",
						"Keju Mozzarella, Keju Parmesan & String Mozzarella.",
						"Frankfurter sapi, mozzarella, saus honey BBQ, mustard.",
						"Irisan daging ikan tuna, saus mayonnaise.",
						"Pepperoni sapi, dan keju mozzarella.",
						"Sosis sapi, daging sapi cincang, sosis ayam.",
						"Daging sapi cincang dan daging ayam, mozzarella.",
						"Daging sapi cincang, keju mozzarella, jamur, paprika.",
						" Pepperoni Sapi, Daging Sapi Cincang, Jamur, Mozzarella",
					];

					var price = [46000, 46000, 46000, 46000, 76000, 76000, 76000, 86000, 86000, 86000, 86000, 86000];

					// search string, return true or false
					var check = title.includes(product_name);

					// search string, return index array
					var index = title.indexOf(product_name);
					
					var str = "";
					
					if (check == true) {
						str += '<div class="col-lg-3 col-6 mb-4">';
							str += '<div class="card">';
								str += '<img class="card-img-top" src="images/products/'+image[index]+'" alt="'+title[index]+'">';
								str += '<div class="card-body">';
									str += '<h4 class="card-title">'+title[index]+'</h4>';
									str +='<p class="card-text">'+description[index]+'</p>';
									//str += '<p class="price-1 mb-0">Rp. 75.000</p>';
									str += '<p class="price-2">Rp. '+price[index]+'</p>';
									str += '<a href="#" class="btn btn-outline-primary btn-block"><i class="fas fa-cart-plus pr-1"></i> Order</a>';
								str += '</div>';
							str += '</div>';
						str += '</div>';						

					document.getElementById('output').innerHTML = str;
				} else if (product_name == "") {
					murah();
				} else {
					document.getElementById('output').innerHTML = '<div class="col-lg-12 mb-4"><div class="alert alert-danger">The Data Not Found!</div>';
				}
			}

				function murah() {
					var image = ["1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg", "7.jpg", "8.jpg", "9.jpg", "10.jpg", "11.jpg", "12.jpg"];

					var title = ["Arabic Food", "Bangkok Food", "French Food", "Indian Food", "Italian Food", "Japanese Food", "Korean Food", "Malaysian Food", "Norwegian Food", "Russian Food", "Spanish Food", "Sundanese Food"];

					var description = [
						"The Arab cuisine uses specific and sometimes unique foods.",
						"Thai food is just Aroi Mak Mak (Very Very Delicious).",
						"French cuisine consists of the cooking traditions.",
						"Indian food is also heavily influenced by religion.",
						"Italian cuisine has developed through centuries of social.",
						"Japanese the regional foods of Japan.",
						"A typical Korean meal consists of a bowl of rice.",
						"Malaysian cuisine consists of the cooking traditions.",
						"Norwegians have embraced food from all over the world.",
						"Russian is considered to be an abundance of products.",
						"But the heart of Spanish cooking remains in its rustic.",
						"Sundanese is the cuisine of the Sundanese people.",
					];

					var price = [100000, 110000, 120000, 130000, 140000, 150000, 160000, 170000, 180000, 190000, 200000, 210000];

					//var str di bawah bebas tapi harus sama untuk sorting dan harus ada nilai default

					var str = "";

					for (var i = 0, l = image.length; i < l; i++) {
						str += '<div class="col-lg-3 col-6 mb-4">';
							str += '<div class="card">';
								str += '<img class="card-img-top" src="images/products/'+image[i]+'" alt="'+title[i]+'">';
								str += '<div class="card-body">';
									str += '<h4 class="card-title">'+title[i]+'</h4>';
									str +='<p class="card-text">'+description[i]+'</p>';
									//str += '<p class="price-1 mb-0">Rp. 75.000</p>';
									str += '<p class="price-2">Rp. '+price[i]+'</p>';
									str += '<a href="#" class="btn btn-outline-primary btn-block"><i class="fas fa-cart-plus pr-1"></i> Order</a>';
								str += '</div>';
							str += '</div>';
						str += '</div>';						
					}

					document.getElementById('output').innerHTML = str;
				}

			function mahal() {
				var image = ["12.jpg", "11.jpg", "10.jpg", "9.jpg", "8.jpg", "7.jpg", "6.jpg", "5.jpg", "4.jpg", "3.jpg", "2.jpg", "1.jpg"];

				var title = ["Sundanese Food", "Spanish Food", "Russian Food", "Norwegian Food", "Malaysian Food", "Korean Food", "Japanese Food", "Italian Food", "Indian Food", "French Food", "Bangkok Food", "Arabic Food"];

				var description = [
						"Sundanese is the cuisine of the Sundanese people.",
						"But the heart of Spanish cooking remains in its rustic.",
						"Russian is considered to be an abundance of products.",
						"Norwegians have embraced food from all over the world.",
						"Malaysian cuisine consists of the cooking traditions.",
						"A typical Korean meal consists of a bowl of rice.",
						"Japanese the regional foods of Japan.",
						"Italian cuisine has developed through centuries of social.",
						"Indian food is also heavily influenced by religion.",
						"French cuisine consists of the cooking traditions.",
						"Thai food is just Aroi Mak Mak (Very Very Delicious).",
						"The Arab cuisine uses specific and sometimes unique foods.",
					];

				var price = [210000, 200000, 190000, 180000, 170000, 160000, 150000, 140000, 130000, 120000, 110000, 100000];

				var str = "";

				for (var i = 0, l = image.length; i < l; i++) {
					str += '<div class="col-lg-3 col-6 mb-4">';
						str += '<div class="card">';
							str += '<img class="card-img-top" src="images/products/'+image[i]+'" alt="'+title[i]+'">';
							str += '<div class="card-body">';
								str += '<h4 class="card-title">'+title[i]+'</h4>';
								str +='<p class="card-text">'+description[i]+'</p>';
								//str += '<p class="price-1 mb-0">Rp. 75.000</p>';
								str += '<p class="price-2">Rp. '+price[i]+'</p>';
								str += '<a href="#" class="btn btn-outline-primary btn-block"><i class="fas fa-cart-plus pr-1"></i> Order</a>';
							str += '</div>';
						str += '</div>';
					str += '</div>'					
				}

				document.getElementById('output').innerHTML = str;
			}
			</script>
		</div>
	</div>
</section>