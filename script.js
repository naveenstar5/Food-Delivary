function orderFood(foodId){
let quantity = prompt("Enter quantity:");
if(quantity){
fetch('php/order.php',{
method:'POST',
headers:{'Content-Type':'application/x-www-form-urlencoded'},
body:`food_id=${foodId}&quantity=${quantity}`
})
.then(res=>res.text())
.then(data=>alert(data));
}
}
