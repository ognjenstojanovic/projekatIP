
document.getElementById('RegisterForm').onsubmit(function(){
	var x = document.getElementById("RegisterForm").elements;
    for(var i = 0; i<x.length; i++){
        if(x[i].value == ""){
			alert("morate uneti sva polja");
			return false;
		}
    }
});