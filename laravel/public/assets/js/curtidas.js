const likeButton = document.querySelector('.like');
 const likeCount = likeButton.querySelector('ins');
 let hasLiked = false; // Variável para rastrear se o botão foi clicado

likeButton.addEventListener('click', function () {
    if (!hasLiked) {
        let currentLikes = parseFloat(likeCount.textContent);
        currentLikes += 1;
        likeCount.textContent = currentLikes.toFixed(1);

        hasLiked = true; // Atualiza o estado para indicar que o botão foi clicado
        likeButton.classList.add('liked'); // Adiciona uma classe para estilo visual
    } else {
        let currentLikes = parseFloat(likeCount.textContent);
        currentLikes -= 1;
        likeCount.textContent = currentLikes.toFixed(1);

        hasLiked = false; // Botão foi deslikado
        likeButton.classList.remove('liked'); // Remove a classe de estilo visual
}

});