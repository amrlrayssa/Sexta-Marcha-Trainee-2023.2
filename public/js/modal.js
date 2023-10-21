

var openModalButton = document.getElementById("abrirModal");
var closeModalButton = document.getElementById("fecharModal");
var modal = document.getElementById("modal");

// Função para abrir o modal
openModalButton.onclick = function() {
    modal.style.display = "block";
}

// Função para fechar o modal
closeModalButton.onclick = function() {
    modal.style.display = "none";
}

// Fechar o modal se o usuário clicar fora do conteúdo
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

 




























      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      // Aguarde até que o documento esteja completamente carregado
        // Este código será executado quando o documento estiver pronto
        // o ready faz isso
//         $(document).ready(function() {

//     // Quando o botão com o id "abrir-modal" for clicado, execute esta função
//     $("#abrir-modal").click(function() {
//         // Simule dados existentes (você deve obter esses dados de algum lugar)
//         var tituloExistente = "";
//         var autorExistente = "";
//         var dataExistente = "";
//         var conteudoExistente = "";

//         // Preencha os campos do modal com os dados existentes
//         // o val serve para obter o valor de um formulario no html
//         $("#titulo").val(tituloExistente);
//         $("#autor").val(autorExistente);
//         $("#data").val(dataExistente);
//         $("#conteudo").val(conteudoExistente);

//         // Abra o modal com o id "editarModal"
//         $("#editarModal").modal("show");
//     });

//     // Lógica para salvar as edições quando o botão com o id "Salvar" no modal é clicado
//     $("#Salvar").click(function() {
//         // Aqui você pode obter os valores editados dos campos do modal
//         var novoTitulo = $("#titulo").val();
//         var novoAutor = $("#autor").val();
//         var novaData = $("#data").val();
//         var novoConteudo = $("#conteudo").val();

//         // Agora da pra fazer o que quiser com inputss informados , por exemplo, enviá-los para o servidor
//         // ...

//         // Fecha o modal com o id "editarModal"
//         $("#editarModal").modal("hide");
//     });
// });
