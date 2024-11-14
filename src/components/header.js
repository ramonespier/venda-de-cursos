function criarHeader() {
    const header = document.createElement('header');
    header.innerHTML = `
        <nav class="md:h-24 bg-customColor-home
        grid md:grid-cols-2 md:grid-rows-1 md:gap-80">

            <div class="md:flex md:items-center md:col-start-1 md:col-span-1">
                <img src="./img/FocusHub.png" class="md:w-24" alt="Logotipo do site FocusHub">
            </div>

            <div class="md:flex md:items-center md:justify-end md:col-start-2 md:col-span-1
            text-white md:text-5xl md:m-2">

                <div class="grid md:grid-cols-1 md:grid-rows-3 gap-1 md:m-3 cursor-pointer md:p-4
                md:bg-violet-800 md:rounded-md" onclick="sidebar()" id="abreMenu">
                    <div class="bg-white md:w-7 md:h-1 md:row-start-1"></div>
                    <div class="bg-white md:w-7 md:h-1 md:row-start-2"></div>
                    <div class="bg-white md:w-7 md:h-1 md:row-start-3"></div>
                </div>
            </div>
        </nav>

        <div id="menu" class="md:h-full md:w-96 bg-violet-950
            md:fixed md:top-0 md:-right-384">
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

