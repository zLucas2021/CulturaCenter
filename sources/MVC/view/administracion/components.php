<?php
function seccionPelicula()
{
    return '
        <div class="barraCenter">'
        . contCenter("Peliculas") . '
        <div class="divContenedor">' .
        contBusqueda() . '
            <div class="contEspectaculo">
                ' . datosEspectaculo(0, "HolaMundo", "../../../../media/public/logo1.png") . '
                ' . datosEspectaculo(0, "Probando Datos", "") . '
                ' . datosEspectaculo(2, "COMO VA SALIENDO", "No hay") . '
            </div>' .
        footer() .
        '
        </div>
    </div>
        ';
}
function seccionEvento()
{
    return '
        <div class="barraCenter">'
        . contCenter("Eventos") . '
        <div class="divContenedor">' .
        contBusqueda() . '
            <div class="contEspectaculo">
                ' . datosEspectaculo(0, "Eventdo", "") . '
                ' . datosEspectaculo(0, "Datos", "") . '
                ' . datosEspectaculo(2, "SALIENDO", "No hay") . '
            </div>' .
        footer() .
        '
        </div>
    </div>
        ';
}
function seccionPublicidad()
{
    return '
        <div class="barraCenter">
        ' . contCenter("Publicidad") . '
        <div class="divContenedor">
            ' . contBusqueda() . '
            <div class ="contPublicidad">
            ' . datosPublicidad(0, "LA PUBLI", "") . '
            </div>'
        . footer() . '                        
        </div>
    </div>';
}
function contBusqueda()
{
    return '<div class="barraBusqueda">
        <img src="../../../../media/public/search.svg" alt="">
        <input type="search" name="buscarPeli" id="buscarPeli" placeholder="Buscar">
    </div>';
}
function contCenter($seccion)
{
    return '<div class="contCenter">
        <h4 class="titulo">' . $seccion . '</h4>
        <a class="btn" href="../forms/frmespectaculo.html">Agregar <img src="../../../../media/public/add.svg" class="icon" ></a>
    </div>';
}
function datosEspectaculo($id, $titulo, $img)
{
    return '<div class="datosEspectaculo">
        <img class="imgdato" src="' . $img . '" alt="">
        <p class="tituloEvento">' . $titulo . '</p>
        <div class="divBtns">
            <button class="btn btn-danger"><img class="icon" src="../../../../media/public/delete.svg" alt=""></button>
            <button class="btn btn-warning"><img class="icon" src="../../../../media/public/update.svg" alt=""></button>
        </div>
    </div>';
}
function datosPublicidad($id, $titulo, $img)
{
    return '<div class="datosPublicidad">
        <img class="imgdato" src="' . $img . '" alt="">
        <p class="tituloEvento">' . $titulo . '</p>
        <div class="divBtns">
            <button class="btn btn-danger"><img class="icon" src="../../../../media/public/delete.svg" alt=""></button>
            <button class="btn btn-warning"><img class="icon" src="../../../../media/public/update.svg" alt=""></button>
        </div>
    </div>';
}
function footer()
{
    return '<div class="footer">
        <div class="divbtnsFoot">
            <button>1</button>
            <button>2</button>
            <button>3</button>
        </div>
    </div>';
}
