<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style type="text/css"> 
        .uno { text-transform: capitalize;}   
        .transformacion2 { text-transform: uppercase;}   
        .transformacion3 { text-transform: lowercase;}   
        </style> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.cdnfonts.com/css/american-typewriter" rel="stylesheet">
</head>
<body>
    @foreach ($titulares as $titulare)
    <div style="page-break-after: always">
    Potosí 
    {{ $titulare->designacion->FechaDesignacion }}<br>
    <?php
       echo $anio = $titulare->designacion->FechaDesignacion; echo "<br>";
       $a = date('Y');
       echo $a;
        
       $t = $titulare->TipoDocente;
       echo $t;
      
    ?>  
    
    <br>
    <p>
    CITE: UATF/DCE/CAR {{$titulare->id}} <br><br><br>
    Señor <br>  {{$titulare->docente->Titulo}}.
                {{ $titulare->docente->Nombres }} 
               {{ $titulare->docente->ApellidoPaterno }}
               {{ $titulare->docente->ApellidoMaterno }}<br><br>
    Presente <br>
     De nuestra mayor considereación<br><br>
   
    Por Resolución del Honorable Consejo Facultativo de <text style="text-transform: capitalize;">{{$titulare->designacion->Facultad}}</text>
        N°{{ $titulare->designacion->Resolucion }} / {{$titulare->designacion->Gestion}}
    nos permitimos comunicarle que en su condición de Docente {{$titulare->TiposDocente}}  {{$titulare->Dedicacion}}
    
    <text style="text-transform: uppercase;">{{ $titulare->docente->TiposDocente }}</text>
    de la carrera de {{$titulare->designacion->Carrera}}  <text style="text-transform: uppercase;}}
    <text style="text-transform: uppercase;"> </text>
    en concordancia con el Articulo 11 del Reglamento del Régimen Académico Docente de la <br>
    Universidad Boliviana, ha sido DESIGNADO como docente a {{$titulare->Dedicacion}} por la gestión <br>
    {{$titulare->designacion->Gestion}} {{$titulare->designacion->Semestre}} debe iniciar sus actividades a partir de la fecha <br>
    a su cargo las siguientes asignaturas<br>
    <br>
   
    <ol type= "none">

    <li>
        {{$titulare->estudio->Materia}}
    </li>
    <li>
        {{ $titulare->materia01}}
        
    </li>
    
    <li>{{ $titulare->materia02 }}</li>
    <li>{{ $titulare->materia03 }}</li>
    <li>{{ $titulare->materia04 }}</li>
    <li>{{ $titulare->materia05 }}</li>
    
</ol>
<?php 
    
    echo $a;
?>

    para lo temas de horarios y otros aspectos inherentes a sus funciones academicas, se le insinua coordinar con la carrera. <br>
    Con este grato saludo a usted <br>
    Atentamentente

</p>
    </div>
        
    @endforeach
    
    
    
</body>
</html>
