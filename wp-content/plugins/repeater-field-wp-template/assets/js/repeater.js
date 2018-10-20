

jQuery(function(){

  jQuery("#field_data_add").on( 'click', function(e){ 
          e.preventDefault();
          var template = wp.template('repeater'),
              html     = template();
              console.log(html);
              jQuery("#field_data").append( html );
  });

  jQuery( document ).on( 'click', '.field-data-remove', function(e){
        e.preventDefault();
        jQuery(this).parent().remove();
  });

});

(function( $ ) {
  // Getting the template by ID - #tmpl-template
var template = wp.template('template');

// Getting the HTML and passing data to be included


        var data = { name: 'Dolly' };
        $el.html( template( { name: "World" } ) );
        // ul.append( html );
        $('ul').append( html );      
})(jQuery);


// function showInput() {
//   document.getElementById('display').innerHTML = 
//               document.getElementById("user_input").value;
// }