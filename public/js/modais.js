// modais.js

document.addEventListener("DOMContentLoaded", function () {

    // Seleciona os botões "Visualizar" e "Editar" e adiciona ouvintes de eventos
    const viewButtons = document.querySelectorAll('.view-btn');
    const editButtons = document.querySelectorAll('.btn-outline-info');

    // Adiciona um ouvinte de evento para cada botão "Visualizar"
    viewButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            // Obtém o valor do atributo data-target para identificar qual modal abrir
            const targetModalId = button.getAttribute('data-target');
            const targetModal = document.getElementById(targetModalId);
            
            // Exibe o modal de visualização
            targetModal.style.display = 'block';
        });
    });

    // Adiciona um ouvinte de evento para cada botão "Editar"
    editButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            // Obtém o modal de edição
            const editModal = document.getElementById('modal_edicao');
            
            // Exibe o modal de edição
            editModal.style.display = 'block';
        });
    });

    // Seleciona os botões "Cancelar" e adiciona ouvintes de eventos para fechar os modais
    const cancelButtons = document.querySelectorAll('.close, .closeEdit, .Cancelar, .closermv');

    // Adiciona um ouvinte de evento para cada botão "Cancelar"
    cancelButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            // Obtém o modal associado ao botão "Cancelar"
            const modalToClose = button.closest('.modal');
            
            // Oculta o modal
            modalToClose.style.display = 'none';
        });
    });

    // Adiciona um ouvinte de evento ao botão "Excluir" para realizar a ação de exclusão
    const btnExcluir = document.getElementById('excluir');
    btnExcluir.addEventListener('click', function () {
        // Adicione aqui a lógica para excluir o post (por exemplo, enviar uma solicitação ao servidor)
        // Após a exclusão, você pode ocultar o modal e realizar outras ações necessárias
        const modalRmv = document.getElementById('modal_rmv');
        modalRmv.style.display = 'none';
    });

});
