function test(){
	var a1 = document.getElementById("a1");
	if(a1.checked){
		
	}
	
	var training = document.getElementsByName("training[]");
	var haeufig = document.getElementsByName("haeufig[]");
	var intensitaet = document.getElementsByName("intensitaet[]");
	var dauer = document.getElementsByName("dauer[]");
	alert(training.length);
	alert(haeufig.length);
	alert(intensitaet.length);
	alert(dauer.length);
	
	document.getElementsByClassName("plan").src="Bilder/MyTimeLogo.png";
	for(var i=0; i<training.length; i++){
		if(training[i].checked){

		}
	}
}