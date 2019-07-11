# JS-Shopping-Cart

The **index.php** file displays the items to the front-end <br/>
The **scripts.js** file has the JS functions that handle adding items to cart<br/>


It works fine, except that if the user clicks the button to <br/>
push() a second item into the cart array, it only **duplicates the first item already in the cart**. <br/>
The console output for the output looks like this after clicking on 3 different items: <br/>

```
(1) […]
​
0: Object { cartItemId: "4", cartItemName: "Apples", cartItemStock: "200", … }
​
length: 1
​
<prototype>: Array []
(2) […]
​
0: Object { cartItemId: "4", cartItemName: "Apples", cartItemStock: "200", … }
​
1: Object { cartItemId: "4", cartItemName: "Apples", cartItemStock: "200", … }
​
length: 2
​
<prototype>: Array []
(3) […]
​
0: Object { cartItemId: "4", cartItemName: "Apples", cartItemStock: "200", … }
​
1: Object { cartItemId: "4", cartItemName: "Apples", cartItemStock: "200", … }
​
2: Object { cartItemId: "4", cartItemName: "Apples", cartItemStock: "200", … }
​
length: 3
```

The array contains three different instances *of the same item*,i.e, the first item displayed. Subsequent items </br>
are not added to the array. 

What could be the bug here?

