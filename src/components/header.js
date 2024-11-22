function criarHeader() {
    const header = document.createElement('header');

    let usuario = `guest${Math.floor(Math.random() * 1000) + 1}`;

    fetch('http://localhost/24250469/venda-de-cursos/src/php/session_dataa.php')
    .then(response => response.json())
    .then(data => {
        console.log('Username from AJAX: ' +  data.usuario);
        usuario = data.usuario
    })
    .catch(error => console.error('Error:', error))

    header.innerHTML = `
        <nav class="md:h-24 h-24 bg-customColor-home w-full
        grid grid-cols-2 grid-rows-1 md:gap-80 gap-32 md:justify-items-stretch justify-items-center">

            <div class="md:flex md:items-center col-start-1 col-span-1 md:ml-20 w-24">
                <a href="./index.php"><img src="./img/FocusHub.png" class="w-24" alt="Logotipo do site FocusHub"></a>
            </div>

            <div class="flex items-center justify-end md:col-start-2 md:col-span-1
            text-white md:text-5xl md:m-2">

                <div class="grid grid-cols-1 grid-rows-3 gap-1 md:mr-20 cursor-pointer p-4
                bg-violet-800 rounded-md" id="abreMenu">
                    <div class="bg-white w-7 h-1 row-start-1"></div>
                    <div class="bg-white w-7 h-1 row-start-2"></div>
                    <div class="bg-white w-7 h-1 row-start-3"></div>
                </div>
            </div>
        </nav>

        <div id="menu" class=" grid grid-cols-1 grid-rows-16
        h-full w-screen md:w-96 bg-violet-950
        fixed top-0 md:-right-384">

            <span class="row-start-1 text-white text-3xl cursor-pointer underline
            flex items-center ml-5
            md:hidden" id="fecharMenu">Fechar</span>

            <span class="row-start-3 text-white text-3xl cursor-default
            flex items-center justify-center
            md:row-start-1">
            ${usuario}
            </span>

            <a href="./php/login.php" 
            class="text-white text-3xl row-start-4 ml-5
            md:row-start-4">Login</a>

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
    }

if (window.onload) {
    let prevOnload = window.onload;
    window.onload = function () {
        prevOnload(); adicionarHeader();
    };
} else {
    window.onload = adicionarHeader;
}

