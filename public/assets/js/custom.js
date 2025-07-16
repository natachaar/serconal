/**
 * ======================================================
 * 
 * Author: Natacha Alvarez
 * Description: Funciones JS comunes para todo el proyecto cargas desde el footer
 * 
 * ======================================================
 */

const baseUrl = document.body.getAttribute('data-base-url');

function showModal() {
    $('body').loadingModal({text: 'Procesando...'});
    $('body').loadingModal('animation', 'circle').loadingModal('backgroundColor', 'gray');
}

function hideModal() {
    $('body').loadingModal('destroy');
}

