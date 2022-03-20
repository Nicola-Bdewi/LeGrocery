let minus = document.getElementById("minus");
let plus = document.getElementById("plus");
let count = document.getElementsById("quantity-box");
let count2 = document.getElementById("quantity-box2");
let count3 = document.getElementById("quantity-box3");
let data = new Number(localStorage.getItem("counter")); // for not losing the counts after refreshing and pressing + or -
let conf = false;
let price = document.getElementById("price");


function counterOfMinus(){

	data = data - 1;
	count.value = data;
	localStorage.setItem("counter",data);
	localStorage.setItem("price", (Math.round(data*x * 100) / 100).toFixed(2));
	price.textContent = (Math.round(data*x * 100) / 100).toFixed(2);
}

function counterOfPlus(){
	
	data = data + 1;
	count.value = data;
	localStorage.setItem("counter",data);
	localStorage.setItem("price", (Math.round(data*x * 100)/100).toFixed(2)); // The price should br just two decimals after the point.
    price.textContent = (Math.round(data*x*100) / 100).toFixed(2);

}


function counterOfMinus(){

	data = data - 1;
	count2.value = data;
	localStorage.setItem("counter",data);
	localStorage.setItem("price", (Math.round(data*x * 100) / 100).toFixed(2));
	price.textContent = (Math.round(data*x * 100) / 100).toFixed(2);
}

function counterOfPlus(){
	
	data = data + 1;
	count2.value = data;
	localStorage.setItem("counter",data);
	localStorage.setItem("price", (Math.round(data*x * 100)/100).toFixed(2)); // The price should br just two decimals after the point.
    price.textContent = (Math.round(data*x*100) / 100).toFixed(2);

}


function counterOfMinus(){

	data = data - 1;
	count3.value = data;
	localStorage.setItem("counter",data);
	localStorage.setItem("price", (Math.round(data*x * 100) / 100).toFixed(2));
	price.textContent = (Math.round(data*x * 100) / 100).toFixed(2);
}

function counterOfPlus(){
	
	data = data + 1;
	count3.value = data;
	localStorage.setItem("counter",data);
	localStorage.setItem("price", (Math.round(data*x * 100)/100).toFixed(2)); // The price should br just two decimals after the point.
    price.textContent = (Math.round(data*x*100) / 100).toFixed(2);

}





minus.addEventListener("click",counterOfMinus);
plus.addEventListener("click",counterOfPlus);






function updateCart(){

    //total item update
    var totalItemCount = 0;
    var itemCount = document.getElementsByClassName("item-count");
    itemCount.forEach(arg => {
        totalItemCount += arg;
    });
    document.getElementById("cart-total-items").innerHTML = totalItemCount;

    //subtotal update
    var totalSubtotal = 0;
    var subtotalArr = document.getElementsByClassName("cart-item-price");
    subtotalArr.forEach(arg => {
        totalSubtotal += arg;
    });
    document.getElementById("cart-subtotal").innerHTML = totalSubtotal;

    //GST/QST/Total update
    var gst = totalSubtotal * 0.05;
    var qst = totalSubtotal * 0.0975;
    var totalCost = totalSubtotal + gst + qst;
    document.getElementById("cart-gst").innerHTML = gst;
    document.getElementById("cart-qst").innerHTML = qst;
    document.getElementById("cart-total").innerHTML = totalCost;

};