    
    var cadastro = document.getElementById("modal");
    var btn = document.getElementById("openCreatPost");
    var btnM = document.getElementById("openCreatPostM");
    var form = document.getElementsByClassName("close")[0];

    btn.onclick = function () {
        cadastro.style.display = "block";
    }

    btnM.onclick = function () {
        cadastro.style.display = "block";
    }

    form.onclick = function () {
        cadastro.style.display = "none";
    }

    window.onclick = function () {
        if (event.target == cadastro) {
            cadastro.style.display = "none";
        }
    }

    var edit = document.getElementById("modal_edicao");
    var btnedit = document.getElementById("openEditPost");
    var btneditM = document.getElementById("openEditPostM");
    var formedit = document.getElementsByClassName("closeEdit")[0];

    btnedit.onclick = function () {
        edit.style.display = "block";
    }

    btneditM.onclick = function () {
        cadastro.style.display = "block";
    }

    formedit.onclick = function () {
        edit.style.display = "none";
    }