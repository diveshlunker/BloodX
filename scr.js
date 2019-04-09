$("document").ready(function(){ 

	 //Slide out nav bar
	  $("#click-toggle-circle").click(function()
     {
		  //Slide menu out on click
		  $( "#slide-out").toggle( "slide",600 );

		  //Close arrow on click
		  $( "#click-toggle-circle").fadeOut(300);
		  $( "#click-toggle-arrow").fadeOut(300);

		  //Show other arrow on click
		   setTimeout(function(){
		  	$( "#slide-down-arrow").fadeIn(800);
		  	$( "#slide-down-circle").fadeIn(800);
		  }, 500); 

		  /* Delay fade in nav items */
		  setTimeout(function(){
		  	$( "#slide-out a").fadeIn(800);
		  }, 1000); 

          return false;
     }); 


 	 //Slide out nav bar
	 $("#slide-out").click(function()
     {
		  $( "#slide-down").toggle( "slide", {direction: "up"},200);	 
          return false;
     }); 


	 //Slide nav bar back in
	 $("#slide-down-circle").click(function()
     {
		 //Hide button on click
		  $( "#slide-down-circle").fadeOut(300);
		  $( "#slide-down-arrow").fadeOut(300);

		  /* Fade out nav items */
		  $( "#slide-out a").fadeOut(0);


		  //Slide nav menu back in
		  $( "#slide-out").toggle( "slide", {direction: "left"});

		  //Reveal nav button again
		  $( "#click-toggle-arrow").fadeIn(300);
		  $( "#click-toggle-circle").fadeIn(300);
          return false;
     }); 
 }); 

