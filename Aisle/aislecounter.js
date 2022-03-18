/*let minus = document.getElementById("minus-1");
let plus = document.getElementById("plus-1");
let count = document.getElementById("quantity-box-1");

minus.addEventListener("click", function(){
	let data = count.value;
	if (data > 1){
		data--;
		count.value = data;
	}
});

plus.addEventListener("click", function(){
	let data = count.value;
	data++;
	count.value = data;
});*/

/*var minus = document.querySelectorAll(".minus");
var count = document.querySelectorAll(".quantity-box");
var plus = document.querySelectorAll(".plus");

for (var i = 0; i < minus.length; i++) {
	minus[i].addEventListener("click", function () {
		var data = count[i].value;
		if (data > 1) {
			data--;
			count[i].value = data;
		};
	});
};

for (var i = 0; i < plus.length; i++) {
	plus[i].addEventListener("click", function () {
		console.log(count[i]);
		var data = count[i].value;
		data++;
		count[i].value = data;
	});
};*/

function counter(obj, id, increment) {
	temp = document.getElementById(id)
	current_qty = parseInt(temp.value)

	if (increment) {
		temp.value = current_qty + 1
	}
	else {
		if (temp.value > 1) {
			temp.value = current_qty - 1
		}
	}
}