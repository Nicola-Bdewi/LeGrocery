let minus = document.getElementById("minus");
let plus = document.getElementById("plus");
let count = document.getElementById("quantity-box");
let data = new Number(sessionStorage.getItem("counter")); // for not losing the counts after refreshing and pressing + or -
let conf = false;
let price = document.getElementById("price");
var numberString = price.textContent;
var x = Number(numberString.replace(/[^0-9\.]+/g,""));
var initialPrice = x.toFixed(2);
let resetValues = document.getElementById("resetAll");


function counterOfMinus(){
    // Controlling the - button when clicking.

	if(data<=1){
		data++;
	}
	data = data - 1;
	count.value = data;
	sessionStorage.setItem("counter",data);
	sessionStorage.setItem("price", (Math.round(data*x * 100) / 100).toFixed(2));
	price.textContent = (Math.round(data*x * 100) / 100).toFixed(2);
}

function counterOfPlus(){
	// Controlling the + button when clicking.

    if(data%10===0){
    	conf = true;
    }

	if(data>=10 && conf===true){
		window.confirm("You chose the same product "+ data +" times. Are you sure you would like to continue?");
		conf = false;
	}

	data = data + 1;
	count.value = data;
	sessionStorage.setItem("counter",data);
	sessionStorage.setItem("price", (Math.round(data*x * 100)/100).toFixed(2)); // The price should br just two decimals after the point.
    price.textContent = (Math.round(data*x*100) / 100).toFixed(2);

}

price.textContent=sessionStorage.getItem("price");
count.value = sessionStorage.getItem("counter");

function resetEverything(){

/* 
	This function delete the sessionStorage.
*/
	window.sessionStorage.clear();
	count.value = sessionStorage.setItem("counter",1);
	price.textContent=sessionStorage.setItem("price",initialPrice);
	location.reload();
}

minus.addEventListener("click",counterOfMinus);
plus.addEventListener("click",counterOfPlus);
resetValues.addEventListener("click",resetEverything);



