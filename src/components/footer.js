function criarFooter() {
    const footer = document.createElement('footer');
    footer.innerHTML = `
    <footer class="bg-customColor-home text-white py-10 text-center">
    <div class="footer-container max-w-6xl mx-auto px-4 flex flex-wrap justify-around">
        <div class="footer-section flex-1 mx-4 my-6">
            <h3 class="text-yellow-400 mb-2 text-lg">Sobre Nós</h3>
            <p class="mb-2">Somos dedicados a oferecer os melhores cursos online para o seu desenvolvimento pessoal e profissional. Nossa missão é proporcionar educação de qualidade para todos.</p>
        </div>
        <div class="footer-section flex-1 mx-4 my-6">
            <h3 class="text-yellow-400 mb-2 text-lg">Links Rápidos</h3>
            <ul class="list-none p-0">
                <li class="mb-2"><a href="#" class="text-white hover:text-yellow-300 transition-colors">Início</a></li>
                <li class="mb-2"><a href="#" class="text-white hover:text-yellow-300 transition-colors">Cursos</a></li>
                <li class="mb-2"><a href="#" class="text-white hover:text-yellow-300 transition-colors">Sobre</a></li>
                <li class="mb-2"><a href="#" class="text-white hover:text-yellow-300 transition-colors">Contato</a></li>
            </ul>
        </div>
        <div class="footer-section flex-1 mx-4 my-6">
            <h3 class="text-yellow-400 mb-2 text-lg">Contato</h3>
            <p class="mb-2">Email: contato@cursospremium.com</p>
            <p class="mb-2">Telefone: (11) 1234-5678</p>
            <p class="mb-2">Endereço: Rua Exemplo, 123, São Paulo, SP</p>
        </div>
    </div>
    <div class="footer-bottom bg-customColor-home text-white py-2 mt-6">
        <p>&copy; 2024 Curso Online. Todos os direitos reservados.</p>
    </div>
</footer>


    `;

    return footer
}

function adicionarFooter() {
    const footerConteiner = document.getElementById('footer')
    const footer = criarFooter();

    footerConteiner.append(footer);

}

if (window.onload) {
    let prevOnload = window.onload;
    window.onload = function () {
        prevOnload(); adicionarFooter();
    };
} else {
    window.onload = adicionarFooter;
}
