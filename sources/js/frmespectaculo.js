var select = document.getElementById("funciones");
var contenedorDivs = document.getElementById("caja");
var contenidoVarible = document.getElementsByClassName("contenidoVariable");
crearListener(1);    
select.addEventListener("change", ()=> {
    contenedorDivs.innerHTML = ""
    // Obtener el valor seleccionado
    var cantidad = parseInt(select.value);
    // Generar los divs y agregarlos al contenedor
    for (var i = 1; i <= cantidad; i++) {
        var cont = crearOpcion(i);
        contenedorDivs.appendChild(cont);
        crearListener(i)
    }
});
/**
 * 
 * @param {Int} numero 
 * @returns Elemento Div con el contenido para la seleccion de las Opciones del Horario
 */
function crearOpcion(numero){
    var divContenidoVarible = document.createElement("div");
    var divCaja = document.createElement("div");
    divCaja.id = "caja"+numero;
    divContenidoVarible.className ="contenidoVariable";
    var p = document.createElement("p");
    p.textContent="Opcion "+numero;
    p.id = "opc"+numero;
    var labelSala=document.createElement("label");
    labelSala.textContent = "Seleccionar Sala";
    var selectSala =crearSelectSala();
    var seccionHorario= creaDivHorario(numero);    
    divContenidoVarible.appendChild(p)
    divCaja.appendChild(labelSala)
    divCaja.appendChild(selectSala)
    divCaja.appendChild(seccionHorario)    
    divContenidoVarible.appendChild(divCaja);
    return divContenidoVarible
}
/**
 * Crea El Div de la seccion para elegir la Sala
 * @returns {document}  Div Contenedor de los elementos
 */
function crearSelectSala(){
    var sala = document.createElement("select");
    sala.name = "sala";
    sala.id = "sala";
    sala.style.width = "100%";
    var opcionSala1=document.createElement("option");
    opcionSala1.value = "1";
    opcionSala1.textContent = "Cine";
    var opcionSala2=document.createElement("option");
    opcionSala2.value = "2";
    opcionSala2.textContent = "Teatro";
    sala.appendChild(opcionSala1);
    sala.appendChild(opcionSala2);
    return sala;
}
/**
 * 
 * @returns {document} Div contenedor de los Horarios
 */
function creaDivHorario(numero){
    var divHorarios = document.createElement("div");
    divHorarios.className = "horarios";
    crearSeccionHorario(true,divHorarios,numero);
    crearSeccionHorario(false,divHorarios,numero)
    var seccionContIsEnWeb = crearDivContenidoActivo(numero);
    divHorarios.appendChild(seccionContIsEnWeb);
    return divHorarios;
}
function crearSeccionHorario(esFecha , divHorarios,numero){
    var div = document.createElement("div");
    var label = document.createElement("label");
    var input = document.createElement("input");
    input.required = true;
    if (esFecha){
        div.className = "fecha";
        label.htmlFor = "fecha"+numero;
        label.textContent = "Seleccione La Fecha";
        input.type = "date";
        input.name = "fecha"+numero;
        input.id = "fecha"+numero;        
    }else{
        div.className = "hora";
        label.htmlFor = "hora"+numero;
        label.textContent = "Hora";
        input.type = "time";
        input.name = "hora"+numero;
        input.id ="hora"+numero;
    }
    div.appendChild(label);
    div.appendChild(input);
    divHorarios.appendChild(div)    
}
function crearDivContenidoActivo(numero){
    var divCont = document.createElement("div");
    divCont.className = "contActivo";
    var label = document.createElement("label");
    label.htmlFor = "enweb"+numero;
    label.textContent = "Mostrar en el Sitio Web";
    var radio1 =  crearRadio(true,numero);
    var radio2 = crearRadio(false,numero);
    divCont.appendChild(label);
    divCont.appendChild(radio1);
    divCont.appendChild(radio2);
    return divCont
}
function crearRadio(isSI,numero){
    var divInterno = document.createElement("div");
    var inputRadio = document.createElement("input");
    inputRadio.type = "radio";
    inputRadio.name = "enweb"+numero;
    inputRadio.required = true
    var label = document.createElement("label");
    if (isSI){
        var valor ="si"+numero;
        label.htmlFor = valor;
        label.textContent = "Si Mostrar";
        inputRadio.id = valor;
    }else{
        var valor ="no"+numero;
        label.htmlFor = valor;
        label.textContent = "No Mostrar";
        inputRadio.id = valor;
    }
    divInterno.appendChild(inputRadio);
    divInterno.appendChild(label);
    return divInterno
}
function crearListener(id){
    var objeto = document.getElementById("opc"+id);
    objeto.addEventListener("click",()=>{
        var div = document.getElementById("caja"+id);
        if (div.style.display == "none"){
            div.style.display = "block";
            objeto.style.borderBottom= "1px solid var(--color-acento-2)";
        }else{
            objeto.style.borderBottom = "1px solid red"
            div.style.display = "none";
        }
    })
}