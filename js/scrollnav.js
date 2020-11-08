/*let elt = document.getElementById('test');
elt.innerHTML = "<ul><li>Elément 1</li><li>Elément 2</li></ul>";
var somme = 1 + 2;
elt.innerHTML = somme;*/

function myFunction() {
  var elmnt = document.getElementById("myDIV");
  var x = elmnt.scrollLeft;
  var y = elmnt.scrollTop;
  document.getElementById ("demo").innerHTML = "Horizontally: " + x + "px<br>Vertically: " + y + "px";
  if(y>200)
  {
  	//elmnt.style.visibility = 'hidden';
  }
}