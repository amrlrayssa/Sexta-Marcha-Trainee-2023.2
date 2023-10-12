
const alternar_menu = document.querySelector('.alternar_menu'); // Seleciona o elemento com a classe "alternar_menu"
const navegacao = document.querySelector('.navegacao'); // Seleciona o elemento com a classe "navegacao"

alternar_menu.onclick =  function(){ // Define um evento de clique para alternar a visibilidade da barra de navegação
    navegacao.classList.toggle('open'); // Alterna a classe "open" do elemento "navegacao"
}
const lista = document.querySelectorAll('.lista'); // Seleciona todos os elementos com a classe "lista"
function ativaLink(){ // Define uma função para ativar um link na barra de navegação
    lista.forEach((item) => // Itera por todos os elementos com a classe "lista"
        item.classList.remove('ativa') // Remove a classe "ativa" de todos os elementos
    );
    this.classList.add('ativa'); // Adiciona a classe "ativa" ao elemento clicado (destacando-o visualmente)
}
lista.forEach((item) => // Adiciona um evento de clique a todos os elementos com a classe "lista"
    item.addEventListener('click',ativaLink)
)

