<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.cdnfonts.com/css/american-typewriter" rel="stylesheet">
</head>
<body>
    @foreach ($titulares as $titulare)
    <div style="page-break-after: always">
    Potosí 
    <text>{{ $titulare->designacion->FechaDesignacion }}</text><br>
    <?php
        $anio = $titulare->designacion->FechaDesignacion;
        $anio =date('Y');
    ?>  
    
    <br>
    CITE: UATF/DCE/CAR {{$titulare->id}} <br><br><br><br>
    Señor <br>  {{$titulare->docente->Titulo}}.
                {{ $titulare->docente->Nombres }} 
               {{ $titulare->docente->ApellidoPaterno }}
               {{ $titulare->docente->ApellidoMaterno }}<br><br>
    Presente <br>
     De nuestra mayor considereación<br><br>
   
    Por Resolución del Honorable Consejo Facultativo de .........N°<text> {{ $titulare->designacion->Resolucion }} </text>/<?php echo $anio;?> 
    nos permitimos comunicarle que en su condición de <text style="text-transform: uppercase;">{{ $titulare->docente->TipoDocente }}</text>
    de la carrera //NOMBRE  
    <text style="text-transform: uppercase;"> </text>
    en concordancia con el Articulo 11 del Reglamento del Régimen Académico Docente de la <br>
    Universidad Boliviana, ha sido //DESIG REASIG  docente a tiempo COMPLETO por la gestión <br>
    2022 (SEMESTRES I Y II ) debe iniciar sus actividades a partir del 27 de abril teniendo <br>
    a su cargo las siguientes asignaturas<br>
    <br>
    PENDIENTE VINCULAR CON PLAN DE ESTUDIOS .
    
    </div>
        
    @endforeach
    
    
    
</body>
</html>
