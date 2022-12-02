
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
.page-break {
    page-break-after: always;
}
</style>

</head>
<body>
    
@foreach ($designacions as $designacion)
    
Potosí 
<text>{{ $designacion->FechaDesignacion }}</text><br>
Código  no entender<br> 
Señor <br> {{ $designacion->docente->Nombres }} 
           {{ $designacion->docente->ApellidoPaterno }}
           {{ $designacion->docente->ApellidoMaterno }}<br>
Titulo <br>
 <text style="text-transform: uppercase;">{{ $designacion->docente->Titulo }} </text><br>
Presente <br>
Distinguido Sr.<br><br>
Por Resolución del Honorable Consejo Facultativo de la Facultad N°<text> {{ $designacion->Resolucion }} </text>/2022 
nos permitimos comunicarle que en su condición de <text style="text-transform: uppercase;">{{ $designacion->TipoDocente }}</text>
de la carrera //NOMBRE  
<text style="text-transform: uppercase;">{{ $designacion->horario_id }} </text>
en concordancia con el Articulo 11 del Reglamento del Régimen Académico Docente de la <br>
Universidad Boliviana, ha sido //DESIG REASIG  docente a tiempo COMPLETO por la gestión <br>
2022 (SEMESTRES I Y II ) debe iniciar sus actividades a partir del 27 de abril teniendo <br>
a su cargo las siguientes asignaturas<br>
<br>
PENDIENTE VINCULAR CON PLAN DE ESTUDIOS .

<div class="page-break"></div>
    
@endforeach
      

</body>
</html>

