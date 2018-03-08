<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="report.css">
</head>
<body>
    <table border="1" cellspacing=0 cellpadding=2 bordercolor="666633" style="width:100%">
        <tr style="font-size:10">
            <th>
               <center><img src="iconoese.png" width="80"></center>
            </th>
            <th>
                <center>  
                EMPRESA SOCIAL DEL ESTADO <br>
                RED DE SERVICIOS DE SALUD DE PRIMER NIVEL <br>
                PROCESO: SISTEMAS <br>
                PROCEDIMIENTO: HOJA DE VIDA EQUIPO DE CÓMPUTO
                </center>  
            </th>   
            <th>
                Código:  <br>
                Vigencia desde: <br>
                Versión: 2.0 <br>
                Copia Controlada
            </th>
        </tr>
    </table> <br>
    <table class="table table-sm table-bordered" style="font-size:10">
        <tr>
            <th bgcolor="#F2F2F2" colspan="4"><center>IDENTIFICACIÓN DEL EQUIPO<center></th>
        </tr>
        <tr>
           <th>Tipo de equipo</th>
           <td>{{ $device->element->name }}</td>
           <th>Ubicación</th>
           <td>{{ $device->ubication->name }}</td>
        </tr>
        <tr>
            <th>Área</th>
            <td>{{ $device->dependence->name }}</td>
            <th>Marca</th>
            <td>{{ $device->brand->name }}</td>
        </tr>
        <tr>
            <th>Serial</th>
            <td>{{ $device->serial }}</td>
            <th>Placa</th>
            <td>{{ $device->code }}</td>
        </tr>
        <tr>
            <th bgcolor="#F2F2F2" colspan="4"><center>DESCRIPCIÓN DEL EQUIPO Y ESPECIFICACIÓNES TÉCNICAS DEL HARDWARE</center></th>
        </tr>
        <tr>
            <td colspan="4" class="text-justify">
                {{ $device->description }}
            </td>
        </tr>
        <tr>
            <th bgcolor="#F2F2F2" colspan="4"><center>REGISTRO HISTÓRICO</center></th>
        </tr>
        <tr>
            <th>Forma de adquisición</th>
            <td>{{ $device->acquisition }}</td>
            <th>Costo de adquisición</th>
            <td>${{ number_format($device->cost) }}</td>
        </tr>
        <tr>
            <th>Fecha de compra</th>
            <td>{{ $device->datebuy }}</td>
            <th>Inicio de operación</th>
            <td>{{ $device->initoperation }}</td>
        </tr>
        <tr>
            <th>Vida útil</th>
            <td>{{ $device->usefullife }} años</td>
            <th>Frecuencia de mant.</th>
            <td>Cada 6 meses</td>
        </tr>
        <tr>
            <th>Riesgo</th>
            <td colspan="3">Bajo riesgo I</td>
        </tr>
    </table>
    <table class="table table-sm table-bordered" style="font-size:10">
        <tr>
            <th bgcolor="#F2F2F2"><center>MANTENIMIENTO (RECOMENDACIÓNES DEL FABRICANTE)</center></th>
        </tr>
        <tr>
            <td>
                <p class="text-justify" >Prevenir las descargas estáticas en los diferentes componentes de la pc, ya que nuestro cuerpo puede tener una gran cantidad de voltaje que podría dañar los componentes de la computadora, por lo tanto para evitar
                    esta situación se puede realizar dos cosas: <br><br>
                    --Con el equipo conectado, se debe tocar una parte aterrizada del chasis, al hacerlo se equilibran las cargas entre tu y la computadora y la electricidad estática va a fluir a tierra con toda seguridad. <br>
                    --Otra manera sencilla de hacerlo es utilizando una pulsera antiestática, para ello se conecta el cable de la pulsera al chasis del sistema en un área libre de pintura para lograr un mejor contacto a tierra, con lo anterior cualquier carga eléctrica se repartirá de manera uniforme entre y los componentes del sistema, evitando que la estática dañe los mismos.</p>
            </td>
        </tr>
    </table> 
</body>
</html>