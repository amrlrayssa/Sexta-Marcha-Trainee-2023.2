var modal = document.getElementById("modal");
var btn = document.getElementById("edit");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function (){
    modal.style.display = "block";
}

span.onclik = function (){
    modal.style.display = "none";
}



var modal_view = document.getElementById("modal-view");
var btn = document.getElementById("view");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function (){
    modal_view.style.display = "block";
}

span.onclik = function (){
    modal_view.style.display = "none";
}

window.onclick = function(event){
    if(event.target == modal_view){
        modal.style.display = "none";
    }
}



var modal = document.getElementById("modal");
var btn = document.getElementById("edit-icon");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function (){
    modal.style.display = "block";
}

span.onclik = function (){
    modal.style.display = "none";
}


var modal_view = document.getElementById("modal-view");
var btn = document.getElementById("view-icon");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function (){
    modal_view.style.display = "block";
}

span.onclik = function (){
    modal_view.style.display = "none";
}

window.onclick = function(event){
    if(event.target == modal_view){
        modal.style.display = "none";
    }
}