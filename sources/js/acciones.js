//*Modulo de acciones para los Inputs
//!No se utiliza , planeamiento de futura refactorizacion
/**
 * 
 * @param {Document} input 
 * Coloca al elemento la clase 
 */
//!DEPRECATE
function alertar(input){
    input.focus();
    let span = document.querySelector(".alert-show");
    let form =document.querySelector(".formulario")
    form.classList.add("alert-input");
    span.classList.add("alert-hide");
}
//!DEPRECATE
function limpiar() {
    let form = document.querySelector(".formulario");
    if(form.classList.contains("alert-input")){
        let span = document.querySelector(".alert-show");
        form.classList.remove("alert-input")
        span.classList.remove("alert-hide")
    }
}
