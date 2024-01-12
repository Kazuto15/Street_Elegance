// script.js

function mostrarEstilo(estilo) {
    // Oculta todos os conteúdos de estilo e informações de vestimenta
    var todosConteudos = document.querySelectorAll('.conteudo-estilo');
    todosConteudos.forEach(function (conteudo) {
        conteudo.style.display = 'none';
    });

    var todasInformacoesVestimenta = document.querySelectorAll('[id$="-vestimenta"]');
    todasInformacoesVestimenta.forEach(function (infoVestimenta) {
        infoVestimenta.style.display = 'none';
    });

    // Mostra o conteúdo do estilo selecionado e as informações de vestimenta correspondentes
    var conteudoSelecionado = document.getElementById(estilo + '-content');
    conteudoSelecionado.style.display = 'block';

    var informacoesVestimenta = document.getElementById(estilo + '-vestimenta');
    informacoesVestimenta.style.display = 'block';
}
