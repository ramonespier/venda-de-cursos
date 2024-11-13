function criarFooter() {
    const footer = document.createElement('footer');
    footer.innerHTML = `
        <div class="md:h-64 h-80 bg-customColor-home">
            <div class="grid w-full h-full
            grid-rows-4 grid-cols-2
            md:grid-rows-2 md:grid-cols-3">

                <div class="w-full
                md:col-start-1 md:col-end-1
                row-start-1 col-start-1 col-span-2
                flex justify-center items-center">
                    <img src="./img/FocusHub.png" class="md:w-128 w-20" alt="">
                </div>

                <div class="md:col-start-3 md:col-end-3 md:row-start-1 md:row-end-1
                row-start-2 col-start-1 col-span-2
                text-white font-bold
                flex justify-center items-center">
                    <span class="text-3xl">Enjoy your Journey!</span>
                </div>

                <div class="md:row-start-2 md:row-end-2 md:col-start-1 md:col-end-1
                row-start-3 row-end-3 col-start-1 col-span-2
                font-bold text-white text-center
                flex justify-evenly items-center md:flex-col md:justify-end p-2">
                <a class="p-1" href="">Instagram</a>
                    <a class="p-1" href="">X</a>
                    <a class="p-1" href="">LinkedIn</a>
                </div>

                <div class="md:row-start-2 md:row-end-2 md:col-start-2 md:col-end-2
                row-start-4 row-end-4 col-start-1 col-span-2
                w-full text-white p-2
                flex items-end justify-center">
                    <p>&copy; FocusHub. Todos os direitos reservados.</p>
                </div>

                <div class="md:row-start-2 md:col-start-3
                md:flex md:flex-col md:justify-end md:items-center
                text-white font-semibold italic p-2
                hidden">
                    <p>São Caetano do Sul</p>
                    <p>SENAI Armando de Arruda Pereira</p>
                </div>
            </div>
        </div>
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
