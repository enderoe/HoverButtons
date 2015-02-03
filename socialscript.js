
$( document ).ready(function() {
	// 1 is oranje
	// 2 is groen
var $currentOpen = 'euro';	
	
var euro1 = $('img.euro').attr('src');
var euro2 = $('img.euro').attr('data-alt-src');

var forward1 = $('img.forward').attr('data-alt-src');
var forward2 = $('img.forward').attr('src');

var personen1 = $('img.personen').attr('data-alt-src');
var personen2 = $('img.personen').attr('src');

var eurotext =  $('img.euro').attr('alt-text');
var forwardtext =  $('img.forward').attr('alt-text');
var personentext = $('img.personen').attr('alt-text');

		
		  $("img.euro").mouseenter(function(){
		  	if ($currentOpen != 'euro'){
		  		ChangeText(eurotext);
		  	}
		   $currentOpen = 'euro';
		   resetalle();
		    $('img.euro').attr('src',euro1);
		   });
		  
		   $("img.forward").mouseenter(function(){
		   		if ($currentOpen != 'forward'){
		  		ChangeText(forwardtext);
		  		}
		   	$currentOpen = 'forward';
		   resetalle();
		    $('img.forward').attr('src',forward1);
		  });
		  $("img.personen").mouseenter(function(){
		  	if ($currentOpen != 'personen'){
		  		ChangeText(personentext);
		  		}
		  	$currentOpen = 'personen';
		   resetalle();
		    $('img.personen').attr('src',personen1);
		  });
		  
	function ChangeText(element){
		
		 $( "#voordelentxt" ).fadeOut( 300, function() {
		 		 $( "#voordelentxt" ).html( element );
   				  $( "#voordelentxt" ).fadeIn( 300, function() {
					    
					  });
		});
		
	}	  
		  
  	function resetalle(){
	//var $this = $(this);
	/*		var divs = $('img.voordelen');
			$.each( divs, function( key, value ) {
		 		var $this = $(this);
		        var newSource = $this.data('alt-src');
		        $this.data('alt-src', $this.attr('src'));
		        $this.attr('src', newSource);
	});
	*/
		
	  $('img.euro').attr('src',euro2);
	  $('img.forward').attr('src',forward2);
	  $('img.personen').attr('src',personen2);
	  
	 // $('img.euro').attr('src',forward1);
	
	}
});