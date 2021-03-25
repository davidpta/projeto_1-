//menu.mobile.
$(function(){
	$('nav.mobile').click(function(){
		var listaMenu = $('nav.mobile ul');


		if(listaMenu.is(':hidden') == true){
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass("fas fa-bars"); 
			icone.addClass("fa fa-times");
			
			listaMenu.slideToggle();

		}
		else{
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass("fa fa-times"); 
			icone.addClass("fas fa-bars");
			listaMenu.slideToggle();
		}
		

	})
})
//fim menu.mobile.