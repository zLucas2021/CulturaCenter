//Guardar los inputs numericos en una lista para controlarlos despues
const inputsNumericos = [document.getElementById("dni"), document.getElementById("telefono")]
//Obtener el elemento form
const formulario = document.getElementById("form_registro");
//*Agregar un listener con el evento submit
formulario.addEventListener("submit", function (evento) {
    evento.preventDefault();//*Sacar el comportamiento por defecto
    if (controlarInputsNumericos(inputsNumericos[0]) && controlarInputsNumericos(inputsNumericos[1])) {
        formulario.submit();
    } else {
        for (let index = 0; index < inputsNumericos.length; index++) {
            const element = inputsNumericos[index];
            if (!controlarInputsNumericos(element)) {
                element.classList.add('alerta');
            }
        }
    }
})
//* Obtiene el elemento para mostrar el password , cuando se hace click y cuando se suelta el click vuelve a ponerse invisible
const btn_mostrar = document.getElementById("btn-mostrar-pasw");
btn_mostrar.addEventListener("mousedown",()=>{
    const inputPassword = document.getElementById("contrasenia");
    inputPassword.type= "text"
})
btn_mostrar.addEventListener("mouseup",()=>{
    const inputPassword = document.getElementById("contrasenia");
    inputPassword.type= "password";
})

sacarAlerta(inputsNumericos);


/**
 * 
 * @param {document} input 
 * @returns TRUE or FALSE
 * @Controla si el valor del input , es numerico y si no esta vacio
 */
function controlarInputsNumericos(input) {
    if (!isNaN(input.value) && !input.value.trim() == '' && input.value.length <12) {
        return true;
    }
    return false;
}
/**
 * 
 * @param {List} lista 
 * @action Agrega un listener "focus" a los elementos de la lista.
 * Cuando un elemento contenga la clase "alerta" lo quita
 */
function sacarAlerta(lista) {
    for (let index = 0; index < lista.length; index++) {
        const element = lista[index];
            element.addEventListener("focus", () => {
                element.classList.remove('alerta');
        })
    }
}