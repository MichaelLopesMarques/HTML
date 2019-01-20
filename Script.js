function bildGenerieren(){
	var training = document.getElementsByName("training[]");
	var haeufig = document.getElementsByName("haeufig[]");
	var intensitaet = document.getElementsByName("intensitaet[]");
	var dauer = document.getElementsByName("dauer[]");
	
	var bild = [];
	for(var i=1; i<=32; i++){
		bild[i] = new Image();
		bild[i].src = 'Bilder/Trainingspläne/Training'+[i]+'.png';
	}
	var z=0;
	
	for(var i=0; i<training.length; i++){
		for(var j=0; j<haeufig.length; j++){
			for(var k=0; k<intensitaet.length; k++){
				for(var l=0; l<dauer.length; l++){
					z++;
					if(training[i].checked && haeufig[j].checked && intensitaet[k].checked && dauer[l].checked){
						document.getElementById('plan').src = bild[z].src;
					}
				}
			}
		}
	}
}

$(document).ready(function(){
	var ausgeklappt = false;
  $(".Zwischenueberschrift").click(function(){
    $(".Inhalt").slideToggle("slow");
    $(".Zwischenueberschrift").toggleClass("gg", 500);
	if(ausgeklappt == false){
		ausgeklappt = true;
		$(".plus").attr("src","../Bilder/Sonstiges/minuszeichen.png");
	}else{
		ausgeklappt = false;
		
		$(".plus").attr("src","../Bilder/Sonstiges/pluszeichen.png");
	}
	return ausgeklappt;
  });
  $(".plus").mouseover(function(){
	if(ausgeklappt == false){
		$(".plus").attr("src","../Bilder/Sonstiges/pluszeichen2.png");
	}else{
		$(".plus").attr("src","../Bilder/Sonstiges/minuszeichen2.png");
	}
	
  });
  $(".plus").mouseout(function(){
	if(ausgeklappt == false){
		$(".plus").attr("src","../Bilder/Sonstiges/pluszeichen.png");
	}else{
		$(".plus").attr("src","../Bilder/Sonstiges/minuszeichen.png");
	}
  });
});