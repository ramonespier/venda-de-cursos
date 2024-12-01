function criarHeader() {
    const header = document.createElement('header');

    header.innerHTML = `
        <nav class="md:h-32 h-24 bg-customColor-home w-full
        grid grid-cols-2 grid-rows-1 md:gap-80 gap-32 md:justify-items-stretch justify-items-center">

            <div class="md:flex md:items-center col-start-1 col-span-1 md:ml-20 w-full">
                <a href="../php/index.php"><img src="../img/FocusHub.png" class="md:w-32 w-24" alt="Logotipo do site FocusHub"></a>
            </div>

            <div class="flex items-center justify-end md:col-start-2 md:col-span-1
            text-white md:text-5xl md:m-2">

                <div class="grid grid-cols-1 grid-rows-3 gap-1 md:mr-20 cursor-pointer p-4
                bg-indigo-950 rounded-md" id="abreMenu">
                    <div class="bg-white w-7 h-1 row-start-1"></div>
                    <div class="bg-white w-7 h-1 row-start-2"></div>
                    <div class="bg-white w-7 h-1 row-start-3"></div>
                </div>
            </div>
        </nav>

        <div id="menu" class=" grid grid-cols-1 grid-rows-16 z-50
        h-full w-screen md:w-96 bg-gradient-to-b from-customColor-home via-indigo-900 to-customColor-home
        fixed top-0 md:-right-384 border-l-2 border-l-slate-400">

            <span class="row-start-1 text-white text-3xl cursor-pointer
            flex items-center pl-4 transition hover:bg-red-600 hover:border-t hover:border-b
            md:hidden" id="fecharMenu">✕ Fechar</span>

            <span class="row-start-2 text-white text-3xl cursor-default
            flex items-center justify-center 
            md:row-start-1" id="usuario">
                Nenhum usuário logado
            </span>

            <a href="./login.php" 
            class="text-white text-3xl row-start-4
            md:row-start-3 transition flex items-center 
            hover:border-t hover:border-b pl-4 hover:bg-customColor-menuhov">Faça seu login</a>

            <a href="./patch.php" 
            class="text-white text-3xl row-start-5
            md:row-start-4 transition flex items-center 
            hover:border-t hover:border-b pl-4 hover:bg-customColor-menuhov">Notas de atualização</a>
            
            <a href="#" 
            class="text-white text-3xl row-start-14
            md:row-start-14 transition flex items-center 
            hover:border-t hover:border-b pl-4 hover:bg-customColor-menuhov">Suporte</a>
            
            <a href="./logout.php" 
            class="text-white text-3xl row-start-15
            md:row-start-15 transition flex items-center 
            hover:border-t hover:border-b pl-4 hover:bg-customColor-menuhov">Desconectar</a>
        </div>

        `;
    return header
}

function adicionarHeader() {
    const headerConteiner = document.getElementById('header')
    const header = criarHeader();

    headerConteiner.append(header);

    const menu = document.getElementById('menu');
    const abreMenu = document.getElementById('abreMenu');
    const fecharMenu = document.getElementById('fecharMenu');

    menu.style.right = '-768px'

    abreMenu.addEventListener('click', () => {
        if (menu.style.right === '-768px') {
            menu.style.transition = '0.5s';
            menu.style.right = '0';

            abreMenu.style.transition = '0.5s';
            abreMenu.style.transform = 'translateX(-384px)';

        } else {
            menu.style.transition = '0.5s';
            menu.style.right = '-768px';

            abreMenu.style.transition = '0.5s';
            abreMenu.style.transform = 'translateX(0)'
        }
    })

    fecharMenu.addEventListener('click', () => {
        menu.style.transition = '0.5s';
        menu.style.right = '-768px';
        abreMenu.style.transition = '0.5s';
        abreMenu.style.transform = 'translateX(0)'
    })

    fetch('session_data.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('usuario').textContent = data;
        })
        .catch(error => console.error('Erro ao buscar nome de usuário:', error));
}

if (window.onload) {
    let prevOnload = window.onload;
    window.onload = function () {
        prevOnload(); adicionarHeader();
    };
} else {
    window.onload = adicionarHeader;
}

