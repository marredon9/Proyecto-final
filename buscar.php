<?php
include "include.php";
session_start();
$sesion = obtenerSesion();
?>

<fieldset oninput="buscar()">
    <table>
        <tr>
            <td>Desde: </td>
            <td><input type="text" id="desde"></td>
        </tr>
        <tr>
            <td>Hasta: </td>
            <td><input type="text" id="hasta"></td>
        </tr>
        <tr>
            <td>Tipo: </td>
            <td><input type="text" id="tipo"></td>
        </tr>
        <tr>
            <td>Marca: </td>
            <td><input type="text" id="marca"></td>
        </tr>
        <tr>
            <td>Modelo: </td>
            <td><input type="text" id="modelo"></td>
        </tr>
        <tr>
            <td>Asientos: </td>
            <td><input type="text" id="asientos"></td>
        </tr>
        <tr>
            <td>Puertas: </td>
            <td><input type="text" id="puertas"></td>
        </tr>
        <tr>
            <td>Maletero: </td>
            <td><input type="text" id="maletero"></td>
        </tr>
        <tr>
            <td>Modo: </td>
            <td><input type="text" id="modo"></td>
        </tr>
        <tr>
            <td>Emisiones: </td>
            <td><input type="text" id="emisiones"></td>
        </tr>
        <tr>
            <td>Sucursal: </td>
            <td><input type="text" id="id_sucursal"></td>
        </tr>
    </table>
</fieldset>
<div id="resultados"></div>

<script>
let desde = document.getElementById("desde");
let hasta = document.getElementById("hasta");
let tipo = document.getElementById("tipo");
let marca = document.getElementById("marca");
let modelo = document.getElementById("modelo");
let asientos = document.getElementById("asientos");
let puertas = document.getElementById("puertas");
let maletero = document.getElementById("maletero");
let modo = document.getElementById("maletero");
let emisiones = document.getElementById("emisiones");
let id_sucursal = document.getElementById("id_sucursal");

let resultados = document.getElementById("resultados");
function buscar() {
    console.log("desde: " + encodeURI(desde.value));
    console.log("hasta: " + encodeURI(hasta.value));
    console.log("tipo: " + encodeURI(tipo.value));
    console.log("marca: " + encodeURI(marca.value));
    console.log("modelo: " + encodeURI(modelo.value));
    console.log("asientos: " + encodeURI(asientos.value));
    console.log("puertas: " + encodeURI(puertas.value));
    console.log("maletero: " + encodeURI(maletero.value));
    console.log("modo: " + encodeURI(modo.value));
    console.log("emisiones: " + encodeURI(emisiones.value));
    console.log("id_sucursal: " + encodeURI(id_sucursal.value));
    console.log("---");

    let params = "desde=" + encodeURI(desde.value) + 
    "&hasta=" + encodeURI(hasta.value) + 
    "&tipo=" + encodeURI(tipo.value) + 
    "&marca=" + encodeURI(marca.value) + 
    "&modelo=" + encodeURI(modelo.value) + 
    "&asientos=" + encodeURI(asientos.value) + 
    "&puertas=" + encodeURI(puertas.value) + 
    "&maletero=" + encodeURI(maletero.value) + 
    "&modo=" + encodeURI(modo.value) + 
    "&emisiones=" + encodeURI(emisiones.value) + 
    "&id_sucursal=" + encodeURI(id_sucursal.value) + 
    "&json=false";
    let url = "api/buscar.php?" + params;
    fetch(url)
    .then(response => response.text())
    .then(data => {
        resultados.innerHTML = data;
    })
    .catch(error => {
        resultados.innerHTML = error;
    });
}
</script>