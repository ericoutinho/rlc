// Mascara para o campo telefone
const telefone = document.querySelector('.mask-telefone');
telefone.addEventListener('input', function (e) {
    let telefone = e.target.value
        .replace(/\D/g, '')
        // .replace(/(\+*5{2})(\d)/, "$1 $2")
        .replace(/(\d{2})(\d)/, "\($1\) $2")
        .replace(/(\s\d{4})(\d)/, "$1\-$2")
        .replace(/(\d{4})-(\d)(\d{4})/, "$1$2-$3")
        .replace(/(\-\d{4})\d+?/, "$1")
    e.target.value = telefone;
});