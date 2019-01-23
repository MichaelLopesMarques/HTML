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
	var ausgeklappt1 = false;
	var ziffer=1;

	$('#about').hide();
	$('.main-banner > h1').hide();
	$('#go-button > a').hide();
	window.setTimeout(function() {
		$('#about').show("slide", { direction: "left" }, 2000);
	
		$('.main-banner > h1').fadeIn(1000);
	
		$('#go-button > a').delay(800);
		$('#go-button > a').fadeIn(1000);
		
		window.setTimeout(function() {
			$('#go-button').toggleClass("gg2");
		}, 800);
	}, 300);
	
	$("#speichern").click(function(){
		var z=$("#plan").attr("src");
		$("#speichern").attr("href", z);
		$("#speichern").attr("download", ziffer+".png");
		ziffer++;
	});
	
	$("#Zwischenueberschrift1").click(function(){
		$("#inhalt1").slideToggle("slow");
		$("#Zwischenueberschrift1").toggleClass("gg", 500);
		if(ausgeklappt1 == false){
			ausgeklappt1 = true;
			$("#plus1").attr("src","../Bilder/Sonstiges/minuszeichen.png");
		}else{
			ausgeklappt1 = false;
			$("#plus1").attr("src","../Bilder/Sonstiges/pluszeichen.png");
		}
	return ausgeklappt1;
	});
	$("#plus1").mouseover(function(){
		if(ausgeklappt1 == false){
			$("#plus1").attr("src","../Bilder/Sonstiges/pluszeichen2.png");
		}else{
			$("#plus1").attr("src","../Bilder/Sonstiges/minuszeichen2.png");
		}
	});
	$("#plus1").mouseout(function(){
		if(ausgeklappt1 == false){
			$("#plus1").attr("src","../Bilder/Sonstiges/pluszeichen.png");
		}else{
			$("#plus1").attr("src","../Bilder/Sonstiges/minuszeichen.png");
		}
	});
	
	var ausgeklappt2 = false;
	$("#Zwischenueberschrift2").click(function(){
		$("#inhalt2").slideToggle("slow");
		$("#Zwischenueberschrift2").toggleClass("gg", 500);
		if(ausgeklappt2 == false){
			ausgeklappt2 = true;
			$("#plus2").attr("src","../Bilder/Sonstiges/minuszeichen.png");
		}else{
			ausgeklappt2 = false;
			$("#plus2").attr("src","../Bilder/Sonstiges/pluszeichen.png");
		}
	return ausgeklappt;
	});
	$("#plus2").mouseover(function(){
		if(ausgeklappt2 == false){
			$("#plus2").attr("src","../Bilder/Sonstiges/pluszeichen2.png");
		}else{
			$("#plus2").attr("src","../Bilder/Sonstiges/minuszeichen2.png");
		}
	});
	$("#plus2").mouseout(function(){
		if(ausgeklappt2 == false){
			$("#plus2").attr("src","../Bilder/Sonstiges/pluszeichen.png");
		}else{
			$("#plus2").attr("src","../Bilder/Sonstiges/minuszeichen.png");
		}
	});
	
	var ausgeklappt3 = false;
	$("#Zwischenueberschrift3").click(function(){
		$("#inhalt3").slideToggle("slow");
		$("#Zwischenueberschrift3").toggleClass("gg", 500);
		if(ausgeklappt3 == false){
			ausgeklappt3 = true;
			$("#plus3").attr("src","../Bilder/Sonstiges/minuszeichen.png");
		}else{
			ausgeklappt3 = false;
			$("#plus3").attr("src","../Bilder/Sonstiges/pluszeichen.png");
		}
	return ausgeklappt3;
	});
	$("#plus3").mouseover(function(){
		if(ausgeklappt3 == false){
			$("#plus3").attr("src","../Bilder/Sonstiges/pluszeichen2.png");
		}else{
			$("#plus3").attr("src","../Bilder/Sonstiges/minuszeichen2.png");
		}
	});
	$("#plus3").mouseout(function(){
		if(ausgeklappt3 == false){
			$("#plus3").attr("src","../Bilder/Sonstiges/pluszeichen.png");
		}else{
			$("#plus3").attr("src","../Bilder/Sonstiges/minuszeichen.png");
		}
	});
	
	var ausgeklappt4 = false;
	$("#Zwischenueberschrift4").click(function(){
		$("#inhalt4").slideToggle("slow");
		$("#Zwischenueberschrift4").toggleClass("gg", 500);
		if(ausgeklappt4 == false){
			ausgeklappt4 = true;
			$("#plus4").attr("src","../Bilder/Sonstiges/minuszeichen.png");
		}else{
			ausgeklappt4 = false;
			$("#plus4").attr("src","../Bilder/Sonstiges/pluszeichen.png");
		}
	return ausgeklappt4;
	});
	$("#plus4").mouseover(function(){
		if(ausgeklappt4 == false){
			$("#plus4").attr("src","../Bilder/Sonstiges/pluszeichen2.png");
		}else{
			$("#plus4").attr("src","../Bilder/Sonstiges/minuszeichen2.png");
		}
	});
	$("#plus4").mouseout(function(){
		if(ausgeklappt4 == false){
			$("#plus4").attr("src","../Bilder/Sonstiges/pluszeichen.png");
		}else{
			$("#plus4").attr("src","../Bilder/Sonstiges/minuszeichen.png");
		}
	});
	
	var ausgeklappt5 = false;
	$("#Zwischenueberschrift5").click(function(){
		$("#inhalt5").slideToggle("slow");
		$("#Zwischenueberschrift5").toggleClass("gg", 500);
		if(ausgeklappt5 == false){
			ausgeklappt5 = true;
			$("#plus5").attr("src","../Bilder/Sonstiges/minuszeichen.png");
		}else{
			ausgeklappt5 = false;
			$("#plus5").attr("src","../Bilder/Sonstiges/pluszeichen.png");
		}
	return ausgeklappt5;
	});
	$("#plus5").mouseover(function(){
		if(ausgeklappt5 == false){
			$("#plus5").attr("src","../Bilder/Sonstiges/pluszeichen2.png");
		}else{
			$("#plus5").attr("src","../Bilder/Sonstiges/minuszeichen2.png");
		}
	});
	$("#plus5").mouseout(function(){
		if(ausgeklappt5 == false){
			$("#plus5").attr("src","../Bilder/Sonstiges/pluszeichen.png");
		}else{
			$("#plus5").attr("src","../Bilder/Sonstiges/minuszeichen.png");
		}
	});
});