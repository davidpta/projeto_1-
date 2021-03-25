 $(function(){

 	 function curSlide = 0;

 	 var maxSlide = $()

 	 function display = 3;

 	changeSlide();

 	function changeSlide(){
 		curSlide(function(){
 			console.log("funcionando");
 		}, display * 1000);
 	}	

 })