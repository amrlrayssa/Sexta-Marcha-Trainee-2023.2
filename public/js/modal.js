const tela = document.getElementById("filtro");

    function openmodal(idmodal) {
        document.getElementById(idmodal).style.display = "block";
        tela.style.display = "block";
    }


    function closemodal(idmodal) {
        document.getElementById(idmodal).style.display = "none";
        tela.style.display = "none";

    }

    tela.onclick = function(){
        document.getElementById(idmodal).style.display = "none";
        tela.style.display = "none";

    }

    