jQuery( document ).ready(function( $ ) {
  // Inside of this function, $() will work as an alias for jQuery()
  // and other libraries also using $ will not be accessible under this shortcut
  // https://codex.wordpress.org/Function_Reference/wp_enqueue_script#jQuery_noConflict_Wrappers

  // Touch Device Detection
	var isTouchDevice = 'ontouchstart' in document.documentElement;
	if( isTouchDevice ) {
		$('body').removeClass('no-touch');
	}
	
	
	// Glitched out buttons
	

  
  var glitch       = $('#glitch');
  addClones();
  
  var layer1     = $('#layer1'),
      layer2     = $('#layer2');
      //bg         = $('#bg');
  glitch();  
  


// Add other layers
function addClones(){
  for(var i = 1; i<3; i++){
    // (that's why I love jQuery)
    $('#glitch').clone().appendTo( ".button" ).attr('id', 'layer'+i).addClass('layers');
  }
}

function glitch() {
    var glitchTl = new TimelineMax({ repeat: -1 });
  glitchTl
    .add('start')
    .to(layer1, 1, { x: '0.5%', y: '1.0%' },'start')
    .to(layer1, 1, { x:'-1.1%', y:'-0.8%' })
    .to(layer1, 1, { x:'-0.8%', y: '0.8%' })    
    .to(layer1, 1, { x: '1.8%', y:'-1.8%' })    
    .to(layer2, 1, { x:'-1.8%', y:'-0.8%' },'start')
    .to(layer2, 1, { x: '1.8%', y: '0.8%' })
    .to(layer2, 1, { x: '1.8%', y:'-0.8%' })    
    .to(layer2, 1, { x:'-01.2%', y: '1.8%' });
  
  glitchTl.timeScale(13);
  // pause 
  glitchTl.pause(); 
  
  // play timeline on hover
  $('#glitch').hover(function() {
    glitchTl.resume();
  }, function() {
    // pause timeline and set to 'start'
    glitchTl.pause('start');
  });
}

  
  
  
  
  
  
});
