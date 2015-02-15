 $(function() {
$( document ).tooltip({
items: "img, [data-geo], [title]",
content: function() {
var element = $( this );
if ( element.is( "[data-geo]" ) ) {
var text = element.text();
return "<img class='map' alt='" + text +
"' src='http://maps.google.com/maps/api/staticmap?" +
"zoom=11&size=350x350&maptype=terrain&sensor=false&center=" +
text + "'>";
}
if ( element.is( "[title]" ) ) {
return element.attr( "title" );
}
if ( element.is( "img" ) ) {
return element.attr( "alt" );
}
}
});
});