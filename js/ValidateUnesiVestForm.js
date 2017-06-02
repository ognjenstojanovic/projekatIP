function validateform(){ 
 
	var kategorija = document.InsertNewsForm.kategorija.value;  
	var podkategorija = document.InsertNewsForm.podkategorija.value;  
	var naslovVesti = document.InsertNewsForm.naslovVesti.value;  
	var tekstVesti = document.InsertNewsForm.tekstVesti.value;  

	if (kategorija==null || kategorija==""){  
	  alert("Email can't be blank");  
	  return false;  
	}
	else if(podkategorija==null || podkategorija==""){  
	  alert("Password can't be blank");  
	  return false;  
	}
	else if(naslovVesti==null || naslovVesti==""){  
	  alert("Address can't be blank");  
	  return false;  
	}
	else if(tekstVesti==null || tekstVesti==""){  
	  alert("Mobile phone can't be blank");  
	  return false;  
	}

    //Treba dodati i validaciju za sliku
  
}  
 