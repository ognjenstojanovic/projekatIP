function validateform(){  
var name=document.RegisterForm.username.value;  
var password=document.RegisterForm.password.value;  
var address=document.RegisterForm.address.value;  
var mobile=document.RegisterForm.mobile.value;  

var reg1 = new RegExp("(\\d{3})-(\\d{3})-(\\d{4})");
var reg2 = new RegExp("(\\d{3})-(\\d{4})-(\\d{3})");
var reg3 = new RegExp("(\\d{3})-(\\d{7})");
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}else if(password==null || password==""){  
  alert("Password can't be blank");  
  return false;  
}else if(address==null || address==""){  
  alert("Address can't be blank");  
  return false;  
}else if(mobile==null || mobile==""){  
  alert("Mobile phone can't be blank");  
  return false;  
}else if(reg1.test(mobile) == false ||
		 reg2.test(mobile) == false ||
		 reg3.test(mobile) == false){
  alert("Mobile phone format is not valid");
  return false;
}
  
}  
 