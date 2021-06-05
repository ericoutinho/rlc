/**
 * Lazzy Load Effects script
 * ---------------------------------------------
 * Adiciona comportamento de lazzy load nos elementos do DOM com
 * a classe '.lazzy' ativando as animações conforme as classes aplicadas.
 * ---------------------------------------------
 * 1. from-top: delocamento do topo com transição de opacidade
 * 2. from-left: delocamento da esquerda com transição de opacidade
 * 3. from-right: delocamento da direita com transição de opacidade
 * 4. from-bottom: delocamento da base com transição de opacidade
 * 
 */

const lazzyLoad = () => {
    document.documentElement.style.scrollBehavior = "smooth";
    document.querySelectorAll('.lazzy').forEach(function (element, index) {
        if (element.getBoundingClientRect().top < window.innerHeight - (window.innerHeight * 0.25)) {
            element.classList.add('play');
        }
    });
}

window.addEventListener('load', lazzyLoad);
window.addEventListener('scroll', lazzyLoad);