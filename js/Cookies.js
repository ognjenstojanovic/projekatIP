
var likeButtons = document.getElementsByClassName("likeButton");
var hateButtons = document.getElementsByClassName("hateButton");
	
for (var i = 0; i < likeButtons.length; i++) {
	likeButtons[i].addEventListener("click", function(){
		
		var url = window.location.href;
		var brojVesti = url.substring(url.lastIndexOf("/")+1);
				
		if(document.cookie.indexOf("like" + brojVesti) !== -1 ){
			alert("Nije moguce lajkovati jednu vest vise puta.");
		}else{				
			document.cookie = "like" + brojVesti;				
		}
	});		
}

for (var i = 0; i < hateButtons.length; i++) {
	hateButtons[i].addEventListener("click", function(){
		
		var url = window.location.href;
		var brojVesti = url.substring(url.lastIndexOf("/")+1);
				
		if(document.cookie.indexOf("hate" + brojVesti) !== -1 ){
			alert("Nije moguce hejtovati jednu vest vise puta.");
		}else{				
			document.cookie = "hate" + brojVesti;				
		}
	});		
}
	

