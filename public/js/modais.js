var modal = document.getElementById("modal");
var btn = document.getElementById("open-modal");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function (){
    modal.style.display = "block";
}

span.onclik = function (){
    modal.style.display = "none";
}
