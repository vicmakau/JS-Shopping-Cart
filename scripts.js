	var cart = [];    //defines an empty cart array. Items added to cart are stored here

		//this method is invoked when the cart button in index.php is clicked, and takes the id of the item as parameter.
    
    function addToCart(item){
    //access the details of the item from DOM in index.php and store them in variables
			var id = $("#itemId").text();
			var name = $("#itemName").text();
			var stock = $("#itemStock").text();
			var unit = $("#itemUnit").text();
			var price = $("#itemPrice").text();
			
		//	for every item added to cart, create a JS object called cartItem 
				var cartItem = {
					cartItemId : id,
					cartItemName : name,
					cartItemStock : stock,
					cartItemUnit : unit,
					cartItemPrice : price,
				}
    
    //add the item object to the cart array
				cart.push(cartItem);
        
        //log the contents of the cart
				console.log(cart);
				return cart;
			}
						
            //function generates a unique key for every item in the DOM
		function itemKey(){
			var key;
			key = Math.floor(Math.random() * 10000000001);
			return key;
		}
		
		
		function checkIfInCart(item){
			//checks if item is in cart
			var inCart = false;
			if(cart.includes(item) == true){
				inCart = true;
			}
			else{
				incart = false;
			}
		
		return inCart;
		}

		
