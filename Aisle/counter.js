let minus = document.getElementById("down");
let plus = document.getElementById("up");
let count = document.getElementById("quantity-box");
let data = 0;
let conf = false;

function counterOfMinus(){
	if(data<=0){
		window.confirm("Number of items cannot be less than 0!");
		data++;
	}
	data = data - 1;
	count.value = data;
}

function counterOfPlus(){

    if(data%10===0){
    	conf = true;
    }

	if(data>=10 & conf===true){
		window.confirm("You chose the same product 10 times. Are you sure you would like to continue?");
		conf = false;
	}
	data = data + 1;
	count.value = data;
}

minus.addEventListener("click",counterOfMinus);
plus.addEventListener("click",counterOfPlus);
