var konstante = ["","Ekonomija", "Privreda", "Finansije", "Biznis", "Politika","Domaća","Regionalna","Svet","Sport","Fudbal","Košarka","Atletika","Kultura","Film","Pozorište","Slikarstvo","Muzika"];

var kategorijeDinamicke = ["","Ekonomija", "Privreda", "Finansije", "Biznis", "Politika","Domaća","Regionalna","Svet","Sport","Fudbal","Košarka","Atletika","Kultura","Film","Pozorište","Slikarstvo","Muzika"];
//var postavljeno =["0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0"];


function myFunction1(obj) {
    if(obj.childElementCount==0){

    for(var i = 0; i < kategorijeDinamicke.length; i++) {
//      if(postavljeno[i]==0){
            var option = document.createElement("option");
            option.text = kategorijeDinamicke[i];
            // document.sortingForm.tryone.options[i] =new Option(kategorije[i].textContent, i);
            obj.appendChild(option);
 //               }
    }
}
    
}
function myFunction2(obj) {
     alert("I am an alert box!"+obj.selectedIndex);
     var index=kategorijeDinamicke.indexOf(obj.options[obj.selectedIndex].value);
     if(index!=-1 && index!=0){ //jer prvi element ne smemo da izbacimo..on je tu..ono..radi z
        kategorijeDinamicke.splice(index, 1);
     }
}
