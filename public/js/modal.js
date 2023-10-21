document.addEventListener("DOMContentLoaded", function() {
    var Cadastro = document.getElementById("modal");
    var btn = document.getElementById("create");
    var form = document.getElementsByClassName("close")[0];

    btn.onclick = function () {
        Cadastro.style.display = "block";
    }

    form.onclick = function () {
        Cadastro.style.display = "none";
    }

    window.onclick = function (event) {
        if (event.target == Cadastro) {
            Cadastro.style.display = "none";
        }
    }
});