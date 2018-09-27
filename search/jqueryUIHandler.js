//price

$( function() {
    $( "#priceRange" ).slider({
      range: true,
      min: 1,
      max: 200,
      values: [ 1, 150 ],
      slide: function( event, ui ) {
        var pRange = "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ];
        if(ui.values[1] == 200) pRange += "+";
        $( "#priceSelector" ).val(pRange);
      }
    });
    $( "#priceSelector" ).val( "$" + $( "#priceRange" ).slider( "values", 0 ) +
      " - $" + $( "#priceRange" ).slider( "values", 1 ) );
  } );

//beds

$( function() {
    $( "#bedRange" ).slider({
      range: "min",
      value: 2,
      min: 1,
      max: 10,
      slide: function( event, ui ) {
        $( "#bedSelector" ).val( ui.value + "+");
      }
    });
    $( "#bedSelector" ).val( $( "#bedRange" ).slider( "value" ) + "+");
  } );

//baths

$( function() {
    $( "#bathRange" ).slider({
      range: "min",
      value: 2,
      min: 1,
      max: 10,
      slide: function( event, ui ) {
        $( "#bathSelector" ).val( ui.value + "+");
      }
    });
    $( "#bathSelector" ).val( $( "#bathRange" ).slider( "value" ) + "+");
  } );

//living area

$( function() {
    $( "#livingAreaRange" ).slider({
      range: "min",
      value: 1000,
      min: 0,
      max: 10000,
      slide: function( event, ui ) {
        $( "#livingAreaSelector" ).val( displayPrice(ui.value.toString()) + "+");
      }
    });
    $( "#livingAreaSelector" ).val( displayPrice($( "#livingAreaRange" ).slider( "value" ).toString()) + "+");
  } );

//lot size

$( function() {
    $( "#lotSizeRange" ).slider({
      range: "min",
      value: 10000,
      min: 0,
      max: 100000,
      slide: function( event, ui ) {
        $( "#lotSizeSelector" ).val( displayPrice(ui.value.toString()) + "+");
      }
    });
    $( "#lotSizeSelector" ).val( displayPrice($( "#lotSizeRange" ).slider( "value" ).toString()) + "+");
  } );
  
//Country
$(function(){
    var countries = [ "Any","Anguilla","Antigua&Barbuda","Argentina","Aruba","Australia","Austria","Bahamas","Belgium","Belize","Bermuda","Brazil",
    "Canada","Cayman Islands","Colombia","Costa Rica","Dominica","Dominican Republic","France","Germany",
    "Grenada","Hong Kong","Hungary","Ireland","Israel","Italy","Latvia","Maldives","Mauritius","Mexico",
    "Monaco","Montegro","NetherLand","New Zealand","Nicaragua","Panama","Peru","Poland","Portugal","Russia",
    "Singapore","South Africa","Spain","St. Barta","St. Lucia","St.Martin","Sweden","Switzerland",
    "Thailand","Turkey","Turks and Caicos","United Arab Emirates","United Kingdom","United States"];
		createDropdown(countries, "#countrySelector");
});
//state

$( function() {
  var states = ['Any', 'International',"AL", "AK", "AZ", "AR", "CA", "CO", "CT", "DE", "FL", "GA", "HI", "ID", "IL", "IN", "IA", "KS", "KY", "LA", "ME", "MD", "MA", "MI", "MN", "MS", "MO", "MT", "NE", "NV", "NH", "NJ", "NM", "NY", "NC", "ND", "OH", "OK", "OR", "PA", "RI", "SC", "SD", "TN", "TX", "UT", "VT", "VA", "WA", "WV", "WI", "WY"];
  createDropdown(states, "#stateSelector");        
} );

//type

$( function() {
    var types = ['Any', "Single Family", "Land", "Island", "Rental", "Condominium", "Multi-Family"];
    createDropdown(types, "#typeSelector");
 } );


//style

$( function() {
    var styles = ['Any', "Antique", "Cape", "Colonial", "Contemporary", "Federal", "Gambrel/Dutch", "Garrison", "Greek Revival", "Italianate", "Multi-level", "Ranch", "Rowhouse", "Tudor", "Victorian", "Other"];
    createDropdown(styles, "#styleSelector");  } );


function createDropdown(array, location){
  for(var i = 0; i < array.length; i++){
    $(location).append("<option value='" + array[i] + "'>" + array[i] + "</option>");
  }
  $(location).selectmenu().selectmenu( "menuWidget" ).addClass( "overflow" );
}
