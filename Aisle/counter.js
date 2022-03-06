let minus = document.getElementById("down");
let plus = document.getElementById("up");
let count = document.getElementById("quantity-box");
let data = 0;
let conf = false;
let price = document.getElementById("price");
var numberString = price.textContent;
var x = Number(numberString.replace(/[^0-9\.]+/g,""));

function counterOfMinus(){
	if(data<=0){
		window.confirm("Number of items cannot be less than 0!");
		data++;
	}
	data = data - 1;
	count.value = data;
	price.textContent= (Math.round(data*x * 100) / 100).toFixed(2);
}

function counterOfPlus(){

    if(data%10===0){
    	conf = true;
    }

	if(data>=10 && conf===true){
		window.confirm("You chose the same product "+ data +" times. Are you sure you would like to continue?");
		conf = false;
	}

	data = data + 1;
	count.value = data;
	price.textContent= (Math.round(data*x * 100) / 100).toFixed(2);
}

minus.addEventListener("click",counterOfMinus);
plus.addEventListener("click",counterOfPlus);
