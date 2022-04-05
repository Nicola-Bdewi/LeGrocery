let minus = document.getElementById("minus");
let plus = document.getElementById("plus");
let count = document.getElementById("quantity-box");
let data = new Number(localStorage.getItem("counter")); // for not losing the counts after refreshing and pressing + or -
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
	localStorage.setItem("counter",data);
	localStorage.setItem("price", (Math.round(data*x * 100) / 100).toFixed(2));
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
	localStorage.setItem("counter",data);
	localStorage.setItem("price", (Math.round(data*x * 100)/100).toFixed(2)); // The price should br just two decimals after the point.
    price.textContent = (Math.round(data*x*100) / 100).toFixed(2);

}

price.textContent=localStorage.getItem("price");
count.value = localStorage.getItem("counter");

function resetEverything(){

/* 
	This function delete the localStorage.
*/
	window.localStorage.clear();
	count.value = localStorage.setItem("counter",1);
	price.textContent=localStorage.setItem("price",initialPrice);
	location.reload();
}

minus.addEventListener("click",counterOfMinus);
plus.addEventListener("click",counterOfPlus);
resetValues.addEventListener("click",resetEverything);



