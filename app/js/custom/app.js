//String Varible
var name = "value";

//Obbject variable
var my_object = {
	Car : "Audi",
	Pie : "Blueberry",
	Place : "California"
};

//Array Varable
var my_array = [
	"Car that begins with the letter A",
	"A pie that begins with B",
	"A place that begins with C"
];

function loop_object(obj){

	for(var i in obj){
       console.log(i, obj[i]);

	}
}

loop_object(my_object);

function loop_array(arr) {
	for(var i =0;i , my_array.length; i++){
		console.log(i,arr[i]); 
	}
}
document.getElementById('ok').innerHTML +=arr[i]; 

function dumper_text(arg1, arg2){
	console.log("dump",my_object);
	console.log("dump", my_array);
	return name + "that gets returned with "+ arg1 +  "and" + arg2;
}

var n;

function price(n) {console.log(my_array[n]);
}
	



dumper_text('a function', 'javascript'); 
