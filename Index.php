<div class="col-lg-10 item">

				<?php
       // This stattement calls the getProduce unction which fetches items from db and stores the result in 
        //variable $return. The function has two parameters, the type of item (fruit) and the number of items to fetch.
        
				$return = $dbObject ->getProduce('fruits', 3);
        
        //loop through each of the items returned
        
				foreach( $return as $key =>$row){
					$id = $row['produce_id'];
					$stock = $row['produce_available'];
					$name = $row['produce_name'];
					$unit = $row['produce_unit'];
					$price = $row['produce_unit_price'];
					$imgName = $row['produce_image_name'];
					$imgFolder = $row['produce_image_folder'];

					?>

					<script>
          //this statement calls the itemKey() function in scripts.js file which generates a unique key for each item displayed
						var key = itemKey();
					</script>

          // display each item
          
						<div class='col-lg-4 col-sm-6 col-md-4' >
							<div class='thumbnail'>
								<p style='visibility : hidden' id = 'itemId'><?php echo $id; ?></p>
								<p style='visibility : hidden' id = 'itemStock'><?php echo $stock; ?></p>
								<p class='text-center' id = "itemName"><?php echo $name; ?></p>
								<img src='admin/<?php echo $imgFolder ."/".$imgName; ?>'>
								<div class='caption'>
									<p>kshs. <span id = 'itemPrice'><?php echo $price; ?> </span> /= per <span id = 'itemUnit'><?php echo $unit; ?></span>
                  
                  // clicking this button invokes the addToCart() and display() functions defined in scripts.js file, and passes the id of the item as parameter
									<button class='btn pull-right' class = 'cartBtn' onclick = 'display(addToCart(<?php echo $id; ?>))'><span class='glyphicon glyphicon-shopping-cart'></span></button></p>
								</div>
							</div>
						</div>
						
							
					<?php
				}
				?>

			</div>
