function mostrarEstilo(estilo) {
    // Oculta todos os conteúdos de estilo e informações de vestimenta
    var todosConteudos = document.querySelectorAll('.conteudo-estilo');
    todosConteudos.forEach(function (conteudo) {
        conteudo.classList.remove('mostrar');
    });

    // Verifica se o estilo é válido
    var conteudoSelecionado = document.getElementById(estilo + '-content');
    if (conteudoSelecionado) {
        // Mostra o conteúdo do estilo selecionado
        conteudoSelecionado.classList.add('mostrar');

        // Oculta as informações específicas de vestimenta se o estilo não for especificado
        var todasInformacoesVestimenta = document.querySelectorAll('.vestimenta');
        todasInformacoesVestimenta.forEach(function (infoVestimenta) {
            infoVestimenta.style.display = 'none';
        });

        var informacoesVestimenta = document.getElementById(estilo + '-vestimenta');
        if (informacoesVestimenta) {
            informacoesVestimenta.style.display = 'block';
        }
    } else {
        // Caso nenhum estilo seja clicado, oculta todos os conteúdos
        todosConteudos.forEach(function (conteudo) {
            conteudo.style.display = 'none';
        });
    }
}
