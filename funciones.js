let marca,piezas,desc,portada

addEventListener('load', leerBD, false)

            /*   **** GENERANDO TABLA ****   */
            /* Acceso por AJAX al archivo bd.php */
function leerBD(){
    conexion1 = new XMLHttpRequest()
    conexion1.onreadystatechange = generaTabla
    conexion1.open('GET','bd.php', true)
    conexion1.send()
}
function generaTabla(){
    var tabla = document.getElementById("tabla")
    if(conexion1.readyState == 4)
    {tabla.innerHTML = conexion1.responseText} 
    else{tabla.innerHTML = 'Cargando...'}
}

            /*   **** CARGANDO REGISTRO ****   */
            /* Acceso por AJAX al archivo carArt.php */
function cargarArt(reg){
    conexion2 = new XMLHttpRequest()
    conexion2.onreadystatechange = datosForm
    conexion2.open('GET','cargArt.php?id='+reg, true)
    conexion2.send()
}
function datosForm (){
    var formu = document.getElementById("formulario")
    if(conexion2.readyState == 4)
    {formu.innerHTML = conexion2.responseText;} 
    else{formu.innerHTML = 'Cargando...'}
}
            /*   **** AÑADIENDO REGISTRO ****   */
            /* Acceso por AJAX al archivo new.php */
function nuevo(){
    marca = prompt("Marca")
    piezas = prompt("Piezas")
    desc = prompt("Descripción")
    portada = prompt("Portada")
    conexion3 = new XMLHttpRequest()
    conexion3.open('GET','new.php?m='+marca+'&n='+piezas+'&d='+desc+'&p='+portada, true)
    conexion3.send()
}
            /*   **** ELIMINANDO REGISTRO ****   */
            /* Acceso por AJAX al archivo elim.php */
function eliminar(reg){
    conexion4 = new XMLHttpRequest()
    conexion4.open('GET','elim.php?id='+reg, true)
    conexion4.send()
    leerBD()
}
function modificar(){
   
    document.getElementById("descripcion").disabled = false
    document.getElementById("piezas").disabled = false
    document.getElementById("marca").disabled = false
    document.getElementById("portada").disabled = false
    document.getElementById("ocult").classList.remove('ocult')
    document.getElementById('modif').classList.add('ocult')
}
function grabar(){
    id =  document.getElementById("id").innerText 
    marca = document.getElementById("marca").value
    piezas = document.getElementById("piezas").value
    desc = document.getElementById("descripcion").value
    portada = document.getElementById("portada").value
    conexion3 = new XMLHttpRequest()
    conexion3.open('GET','update.php?id='+id+'&m='+marca+'&n='+piezas+'&d='+desc+'&p='+portada, true)
    conexion3.send()
    leerBD()
}