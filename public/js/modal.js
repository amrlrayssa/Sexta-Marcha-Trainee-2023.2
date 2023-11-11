document.addEventListener("DOMContentLoaded", function () {
    // Selecionando elementos do DOM
    var modalCriar = document.getElementById("modal");
    var modalEdicao = document.getElementById("modal_edicao");
    var modalExcluir = document.getElementById("modal_rmv");
    var modalVer = document.getElementById("modal_ver");
    var page = document.getElementById("page");

    // Função para abrir o modal
    function abrirModal(modal) {
        modal.style.display = "block";
        page.style.filter = "brightness(50%)";
    }

    // Botões para abrir os modais
    var criarPostBtn = document.querySelectorAll("#openCreatPost, #openCreatPostM");
    var verBtns = document.querySelectorAll("#openVerPost, #openVerPostM");
    var editarBtns = document.querySelectorAll("#openEditPost, #openEditPostM");
    var excluirBtns = document.querySelectorAll("#openRmvPost, #openRmvPostM");

    criarPostBtn.forEach(function (criarPostBtn) {
        criarPostBtn.onclick = function () {
            abrirModal(modalCriar);
        };
    });

    editarBtns.forEach(function (editarBtn) {
        editarBtn.onclick = function () {
            abrirModal(modalEdicao);
        };
    });

    excluirBtns.forEach(function (excluirBtn) {
        excluirBtn.onclick = function () {
            abrirModal(modalExcluir);
        };
    });

    verBtns.forEach(function (verBtn) {
        verBtn.onclick = function () {
            abrirModal(modalVer);
        };
    });

    // Função para fechar os modais
    function fecharModais() {
        modalCriar.style.display = "none";
        modalEdicao.style.display = "none";
        modalExcluir.style.display = "none";
        modalVer.style.display = "none";
        page.style.filter = "brightness(100%)";
    }

    // Botões para fechar modais
    var closeBtns = document.querySelectorAll(".close, .closever, .closeEdit, .closeRmv");

    closeBtns.forEach(function (closeBtn) {
        closeBtn.onclick = fecharModais;
    });

    // Evento para fechar os modais quando clicar fora deles
    window.onclick = function (event) {
        if (event.target === modalCriar || event.target === modalEdicao || event.target === modalExcluir) {
            fecharModais();
        }
    };

    // Adicione outras funcionalidades/modificações conforme necessário
});