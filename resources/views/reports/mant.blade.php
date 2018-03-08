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
                        FORMATO: REPORTE DE MANTENIMIENTO DE EQUIPOS DE CÓMPUTO
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
                    <th bgcolor="#F2F2F2" colspan="4"><center>IDENTIFICACIÓN DEL EQUIPO</center></th>
                </tr>
                <tr>
                    <th>Nombre del equipo</th>
                    <td>{{ $device->element->name }}</td>
                    <th>Unidad/Sede</th>
                    <td>{{ $device->ubication->name }}</td>
                </tr>
                <tr>
                    <th>Ubicación</th>
                    <td>{{ $device->dependence->name }}</td>
                    <th>Marca</th>
                    <td>{{ $device->brand->name }}</td>
                </tr>
                <tr>
                    <th>Serial</th>
                    <td>{{ $device->serial }}</td>
                    <th>Número de placa</th>
                    <td>{{ $device->code }}</td>
                </tr>
                <tr>
                    <th>Actividad de mantenimiento</th>
                    <td>{{ $typeMant }}</td>
                    <th>Fecha</th>
                    <td>{{ Carbon\Carbon::now()->format('d-m-Y') }}</td>
                </tr>
            </table>
            <table class="table table-sm table-bordered" style="font-size:10">
                <tr>
                    <th colspan="2" bgcolor="#F2F2F2"><center>DESCRIPCIÓN DE LA ACTIVIDAD</center></th>
                </tr>
                <tr>
                <td colspan="2" style="height:50" class="text-justify">{{ $typeMant === 'Mantenimiento Preventivo' ? 'Se realiza mantenimiento preventivo al equipo de cómputo. Limpieza interna de los componentes electrónicos (Memoria RAM, disco
                        duro, board, fuente de poder, gabinete, unidad de DVD, buses de datos, etc) y limpieza externa de los elementos y periféricos que
                        lo componen (monitor, mouse, teclado, cables de alimentación, gabinete, etc).' : 'Se realizaron las siguientes actividades:' }} <br></td>
                </tr>
                <tr>
                    <th bgcolor="#F2F2F2"><center>Repuestos utilizados</center></th>
                    <th bgcolor="#F2F2F2"><center>Cantidad</center></th>
                </tr>
                <tr>
                    <td><font color="white">a</font></td>
                    <td><font color="white">a</font></td>
                </tr>
                <tr>
                        <td><font color="white">a</font></td>
                        <td><font color="white">a</font></td>
                </tr>
                <tr>
                        <td><font color="white">a</font></td>
                        <td><font color="white">a</font></td>
                </tr>
            </table>
            <table class="table table-sm table-bordered" style="font-size:10">
                <tr>
                    <th bgcolor="#F2F2F2"><center>RECOMENDACIÓNES</center></th>
                </tr>
                <tr>
                    <td>Buen uso del equipo, realizar actividades predictivas (antes, durante y después del uso del equipo) tal como recomienda el fabricante y los procedimientos de controles e inspección de operación del equipo.</td>
                </tr>
            </table>
            <table class="table table-sm table-bordered" style="font-size:10">
                <tr>
                    <th>Firma a satisfacción por <br> el funcionario que recibe el equipo</th>
                    <td><font color="white">sdsdsadsadasdasdasdsadsadsadsasadsdsadsaddasd</font></td>
                </tr>
                <tr>
                    <th>Firma del ingeniero/tecnólogo/técnico de mantenimiento</th>
                    <td></td>
                </tr>
            </table>
</body>
</html>