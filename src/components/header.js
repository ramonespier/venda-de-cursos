function criarHeader() {
    const header = document.createElement('header');
    header.innerHTML = `
    <div class="grid grid-cols-1 md:grid-cols-2 justify-items-center bg-customColor-home p-4">
    <div class="header-image flex justify-center items-center w-20 mb-4 md:mb-0">
        <img src="./img/FocusHub.png" alt="Cursos Online" />
    </div>
    <nav class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="search-container flex h-auto justify-center items-center">
            <input type="text" class="p-2 border rounded-md" placeholder="Pesquisar cursos...">
            <button class="search-btn p-2 ml-2 bg-blue-500 text-white rounded-md">🔍</button>
        </div>
        <ul class="nav-links flex flex-col md:flex-row md:items-center space-y-2 md:space-y-0 md:space-x-4">
            <li><a href="#home" class="text-white hover:text-blue-300">Início</a></li>
            <li><a href="#cursos" class="text-white hover:text-blue-300">Cursos</a></li>
            <li><a href="#sobre" class="text-white hover:text-blue-300">Sobre Nós</a></li>
            <li><a href="#contato" class="text-white hover:text-blue-300">Contato</a></li>
        </ul>
        <div class="dropdown relative top-5">
            <button class="dropbtn bg-blue-500 text-white p-2 rounded-md" onclick="toggleDropdown()">MENU</button>
            <div class="dropdown-content absolute hidden bg-white shadow-md rounded-md mt-2 p-2" id="dropdown-content">
                <a href="#perfil" class="block p-2 text-black hover:bg-gray-200">Meu Perfil</a>
                <a href="#configuracoes" class="block p-2 text-black hover:bg-gray-200">Configurações</a>
                <a href="#suporte" class="block p-2 text-black hover:bg-gray-200">Suporte</a>
                <a href="#sair" class="block p-2 text-black hover:bg-gray-200">Sair</a>
            </div>
        </div>
    </nav>
</div>
        `;
    return header
}

function adicionarHeader() {
    const headerConteiner = document.getElementById('header')
    const header = criarHeader();

    headerConteiner.append(header);

}

window.onload = adicionarHeader;