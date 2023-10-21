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


// Aguarde até que o documento esteja completamente carregado
$(document).ready(function() {
    var openModalButton = $(".open-editar");
    var closeModalButton = $(".close");
    var modal = $("#modal_edicao");

    // Função para abrir o modal
    openModalButton.click(function() {
        modal.css("display", "block");
    });

    // Função para fechar o modal
    closeModalButton.click(function() {
        modal.css("display", "none");
    });

    // Fechar o modal se o usuário clicar fora do conteúdo
    $(document).click(function(event) {
        if (event.target == modal[0]) {
            modal.css("display", "none");
        }
    });

    // // Lógica para salvar as edições quando o botão com o id "Salvar" no modal é clicado
    // $("#Salvar").click(function() {
    //     // Aqui você pode obter os valores editados dos campos do modal
    //     var novoTitulo = $("#titulo").val();
    //     var novoAutor = $("#autor").val();
    //     var novaData = $("#data").val();
    //     var novoConteudo = $("#conteudo").val();

    //     // Agora você pode fazer o que quiser com os valores, por exemplo, enviá-los para o servidor.
    //     // ...

    //     // Fecha o modal
    //     modal.css("display", "none");
    // });
});
