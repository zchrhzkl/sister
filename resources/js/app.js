require('./bootstrap');

// Multiple Files Uploads
var selDiv = "";

document.addEventListener("DOMContentLoaded", init, false);

function init() {
  document.querySelector('#mailAttch').addEventListener('change', handleFileSelect, false);
  selDiv = document.querySelector("#selectedFiles");
}

function handleFileSelect(e) {

  if (!e.target.files) return;

  selDiv.innerHTML = "";

  var files = e.target.files;
  for (var i = 0; i < files.length; i++) {
    var f = files[i];

    selDiv.innerHTML += f.name + "<br/>";

  }

}
