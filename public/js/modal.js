    
    var conteudo = document.getElementById("conteiner");
    var cadastro = document.getElementById("modal");
    var btn = document.getElementById("openCreatPost");
    var btnT = document.getElementById("alsocreat");
    var btnM = document.getElementById("openCreatPostM");
    var form = document.getElementsByClassName("close")[0];
    var edit = document.getElementById("modal_edicao");
    var btnedit = document.getElementById("openEditPost");
    var btneditM = document.getElementById("openEditPostM");
    var formedit = document.getElementsByClassName("closeEdit")[0];


    btn.onclick = function () {
        cadastro.style.display = "block";
        conteudo.style.filter = "brightness(30%)";
    }

    btnM.onclick = function () {
        cadastro.style.display = "block";
        conteudo.style.filter = "brightness(30%)";
    }

    form.onclick = function () {
        cadastro.style.display = "none";
        conteudo.style.filter = "brightness(100%)";
    }


    btnedit.onclick = function () {
        edit.style.display = "block";
        conteudo.style.filter = "brightness(30%)";
    }

    btneditM.onclick = function () {
        edit.style.display = "block";
        conteudo.style.filter = "brightness(30%)";

    }

    formedit.onclick = function () {
        edit.style.display = "none";
        conteudo.style.filter = "brightness(100%)";
    }

   
    