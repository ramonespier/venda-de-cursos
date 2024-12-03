document.querySelectorAll('.questao').forEach(radio => {
    radio.addEventListener('change', atualizaProgressBar);
});

function atualizaProgressBar() { 
    const total = 10; // cada questão tem 2 radios 
    const checado = document.querySelectorAll('.questao:checked').length; 
    const progress = (checado / total) * 100; 
    const progressBar = document.getElementById('progressBar'); 
    progressBar.style.width = `${progress}%`; 
    progressBar.textContent = `${Math.round(progress)}%`;
}

atualizaProgressBar()