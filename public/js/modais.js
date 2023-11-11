document.addEventListener("DOMContentLoaded", function () {
    var modal = document.getElementById("modal");
    var modalEdicao = document.getElementById("modal_edicao");
    var modalRmv = document.getElementById("modal_rmv");
    var page = document.getElementById("page");

    // Função para abrir o modal
    function abrirModal(modal) {
        modal.style.display = "block";
        page.style.filter = "brightness(50%)";
    }

    // Botões para abrir os modais
    var criarUsuarioBtn = document.querySelector(".btn-outline-warning");
    var criarPostBtn = document.querySelector(".button2");
    var editarBtns = document.querySelectorAll("#edit, #edit-icon");
    var excluirBtns = document.querySelectorAll("#excluir, .closermv");

    criarUsuarioBtn.onclick = function () {
        abrirModal(modal);
    };

    criarPostBtn.onclick = function () {
        abrirModal(modal);
    };

    editarBtns.forEach(function (editarBtn) {
        editarBtn.onclick = function () {
            abrirModal(modalEdicao);
        };
    });

    excluirBtns.forEach(function (excluirBtn) {
        excluirBtn.onclick = function () {
            abrirModal(modalRmv);
        };
    });

    // Função para fechar os modais
    function fecharModais() {
        modal.style.display = "none";
        modalEdicao.style.display = "none";
        modalRmv.style.display = "none";
        page.style.filter = "brightness(100%)";
    }

    // Botões para fechar modais
    var closeBtns = document.querySelectorAll(".close, .closeEdit, .closermv");

    closeBtns.forEach(function (closeBtn) {
        closeBtn.onclick = fecharModais;
    });

    // Evento para fechar os modais quando clicar fora deles
    window.onclick = function (event) {
        if (event.target === modal || event.target === modalEdicao || event.target === modalRmv) {
            fecharModais();
        }
    };

    // Adicionar suas outras funcionalidades/modificações conforme necessário
});
