
/*function resettoggle() {
var e = document.getElementById('foo');
e.style.display = 'none';
}*/

function toggle_visibility(id) {
var e = document.getElementById(id);
if(e.style.display == 'none')
	e.style.display = 'block';
else
e.style.display = 'none';
}

$('.selectpicker').selectpicker();

function eraseText() {
    document.getElementById("output").value = "";
}