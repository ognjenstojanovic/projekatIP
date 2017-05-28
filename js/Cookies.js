
	var likeButtons = document.getElementsByClassName("likeButton");
	
	for (var i = 0; i < likeButtons.length; i++) {
		likeButtons[i].addEventListener("click", function(){
		
			var url = window.location.href;
			var brojVesti = url.substring(url.lastIndexOf("/")+1);
				
			if(document.cookie.indexOf("vest" + brojVesti + "=") !== -1 ){
				alert("vec si lajkovao");
			}else{				
				document.cookie = "vest" + brojVesti + "=true";				
			}
		});		
	}
	

