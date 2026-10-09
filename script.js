const btnTheme = document.getElementById('btn-theme');

btnTheme.addEventListener('click', () => {
    document.body.classList.toggle('modo-ocuro');
    
    if (document.body.classList.contains('modo-ocuro')) {
        btnTheme.textContent = '☀️';
    } else {
        btnTheme.textContent = '🌙';
    }
});