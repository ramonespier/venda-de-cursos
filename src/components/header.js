function criarHeader() {
    const header = document.createElement('header');
    header.innerHTML = `

<div class="grid grid-cols-1 md:grid-cols-3 gap-4 justify-items-center bg-customColor-home p-4 h-80 md:h-32">

    <div class="header-image flex justify-center items-center w-20 mb-4 md:mb-0">
        <img src="./img/FocusHub.png" alt="Cursos Online" />
    </div>

    <div class="dropdown col-start-2 md:col-start-3 flex justify-center items-center relative">
        <button class="dropbtn text-white font-semibold text-4xl p-2 rounded-md md:hidden" id="menu" onclick="toggleBarra()">≡</button>
        
        <div class="barraLateral absolute hidden right-0 top-0 bg-white h-screen shadow-md rounded-md p-2 transition-transform duration-300 md:hidden" id="barraLateral" style="right: -350px;">
            <a href="#perfil" class="block p-2 text-black hover:bg-gray-200">Meu Perfil</a>
            <a href="#configuracoes" class="block p-2 text-black hover:bg-gray-200">Configurações</a>
            <a href="#suporte" class="block p-2 text-black hover:bg-gray-200">Suporte</a>
            <a href="#sair" class="block p-2 text-black hover:bg-gray-200">Sair</a>
        </div>
    </div>

    <nav class="grid grid-cols-1 md:grid-cols-3 gap-4 col-span-3 md:col-span-1 md:col-start-2">
        <div class="search-container flex col-span-1 md:col-span-3 h-auto items-center">
            <input type="text" class="p-2 flex-grow border rounded-l-md" placeholder="Pesquisar cursos...">
            <button class="search-btn p-2 bg-blue-500 text-white rounded-r-md">🔍</button>
        </div>
        <ul class="nav-links flex flex-col md:flex-row md:col-span-3 justify-center items-center space-y-2 md:space-y-0 md:space-x-4">
            <li><a href="#home" class="text-white hover:text-blue-300">Início</a></li>
            <li><a href="#cursos" class="text-white hover:text-blue-300">Cursos</a></li>
            <li><a href="#sobre" class="text-white hover:text-blue-300">Sobre Nós</a></li>
            <li><a href="#contato" class="text-white hover:text-blue-300">Contato</a></li>
        </ul>
    </nav>

    <div class="dropdown hidden md:flex justify-center items-center col-span-1">
        <button class="dropbtn bg-violet-900 font-bold text-white p-2 rounded-md" onclick="toggleDropdown()">MENU</button>
        <div class="dropdown-content absolute hidden bg-white shadow-md rounded-md mt-2 p-2" id="dropdown-content-desktop">
            <a href="#perfil" class="block p-2 text-black hover:bg-gray-200">Meu Perfil</a>
            <a href="#configuracoes" class="block p-2 text-black hover:bg-gray-200">Configurações</a>
            <a href="#suporte" class="block p-2 text-black hover:bg-gray-200">Suporte</a>
            <a href="#sair" class="block p-2 text-black hover:bg-gray-200">Sair</a>
        </div>
    </div>
</div>


        `;
    return header
}

function adicionarHeader() {
    const headerConteiner = document.getElementById('header')
    const header = criarHeader();

    headerConteiner.append(header);

}

if (window.onload) {
    let prevOnload = window.onload;
    window.onload = function () {
        prevOnload(); adicionarHeader();
    };
} else {
    window.onload = adicionarHeader;
}