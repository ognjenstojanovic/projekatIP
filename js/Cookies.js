

var likeFunction = function(){
	var url = window.location.href;
	var brojVesti = url.substring(url.lastIndexOf("/")+1);
	brojVesti = brojVesti.substring(0, brojVesti.lastIndexOf("."));

	if(document.cookie.indexOf("like" + brojVesti) !== -1 ){
		alert("Nije moguce lajkovati jednu vest vise puta.");
		return false;
	}
	else {
		document.cookie = "like" + brojVesti + " = true";
		return true;
	}
}

var hateFunction = function(){
	var url = window.location.href;
	var brojVesti = url.substring(url.lastIndexOf("/")+1);
	brojVesti = brojVesti.substring(0, brojVesti.lastIndexOf("."));
				
	if(document.cookie.indexOf("hate" + brojVesti) !== -1 ){
		alert("Nije moguce hejtovati jednu vest vise puta.");
		return false;
	}
	else{
		document.cookie = "hate" + brojVesti + " = true";
		return true;
	}

}

	

