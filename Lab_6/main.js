var number = document.getElementById("number");
var degree = document.getElementById("degree");

var a = document.getElementById("a");
var b = document.getElementById("b");

var k = document.getElementById("k");

var n = document.getElementById("n");

var z = document.getElementById("z");


function calculateDegree() {
	if(number.value <= 0 || degree.value < 0) {
		alert('Ошибка');
	} else {
		var result = "Ответ: " + number.value ** degree.value;
		alert(result);
	}
	
	number.value = "";
	degree.value = "";
}


function calculateNOD() {
	if(a.value <= 0 || b.value <= 0) {
		alert('Ошибка');
	} else {
		while (a.value != b.value) {
		if (a.value > b.value) {
			a.value = a.value - b.value;
		} else {
			b.value = b.value - a.value;
		}
	}
	var result = a.value;
	alert(result);
	}
	
	a.value = "";
	b.value = "";
}

function calculateMin() {
	if(k.value <= 0) {
		alert('Ошибка');
	} else {
		k.value = (k.value).split('').sort(); 
	var result = 'Наименьшая цифра: ' + k.value [0];
	alert(result);
	}

	k.value = "";
}


function Pluralization() {
	var text = "В результате выполнения запроса ";
	
	if(n.value < 0) {
		alert('Ошибка');
	} else {
		if(n.value % 10 == 1 && n.value & 100 != 11) {
			alert(text + "была найдена " + n.value + " запись");
		} else if (n.value % 10 >= 2 && n.value % 10 <= 4 && (n.value % 100 < 10 || n.value % 100 >= 20)) {
			alert(text + "было найдено " + n.value + " записи");
		} else {
			alert(text + "было найдено " + n.value + " записей");
		}
	}
	
	n.value = "";
}


function fib() {
	if(z.value <= 0 || z.value > 1000) {
		alert('Ошибка');
	} else {
		var f = [0, 1];
	if (z.value <= 2) {
		var result = f.slice(0, z.value);
	} else {
		for (i = 0; i < z.value - 1; i++){
			f.push(f[f.length - 1] + f[f.length - 2]);
		}
		var result = f;
	}
	alert(result.at(-1));
	}

	z.value = "";
}