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
  $(".Zwischenueberschrift").click(function(){
    $(".Inhalt").slideToggle("slow");
    $(".Zwischenueberschrift").toggleClass("gg", 500);
  });
  $(".plus").mouseover(function(){
	$(".plus").attr("src","../Bilder/Sonstiges/pluszeichen2.png");
  });
  $(".plus").mouseout(function(){
	$(".plus").attr("src","../Bilder/Sonstiges/pluszeichen.png");
  });
});