<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style type="text/css"> 
        .uno { text-transform: capitalize;}   
        .dos { text-transform: uppercase;}   
        .tres { text-transform: lowercase;}   
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
    {{ $titulare->designacion->FechaDesignacion }}
    <?php
        $anio = $titulare->designacion->FechaDesignacion; echo "<br>";
        
       $a = date('Y');    
       $t = $titulare->TipoDocente;     
    ?>  
    
    <br>
    <p>
    CITE: UATF/DCE/CAR {{$titulare->id}} <br><br><br>
    Señor/a   {{$titulare->docente->Titulo}} <br>
                {{ $titulare->docente->Nombres }} 
               {{ $titulare->docente->ApellidoPaterno }}
               {{ $titulare->docente->ApellidoMaterno }}<br>
    Presente <br><br><br><br>
    De nuestra mayor consideración:<br><br>
   
    Por Resolución del Honorable Consejo Facultativo de <text  style="color:#FF0000">{{$titulare->designacion->Facultad}}</text>
        N° <text style="color:#FF0000"> {{ $titulare->designacion->Resolucion }} </text>/ {{$a = date('Y' );}},
        nos permitimos comunicarle que en su condición de <b>  DOCENTE <text class="dos"> {{$titulare->TiposDocente}} </text> </b>
        de la carrera de <text style="color:#FF0000">{{$titulare->designacion->Carrera}}</text> en concordancia el <text style="color:#FF0000"> Artículo
        <?php 
        if($titulare->TiposDocente == 'Ordinario Titular'){
            echo '20';
        }else{
            if ($titulare->TiposDocente == 'Contratado') {
                echo '19';
            } else {
                echo '11';
            }
            
        } 
        ?>
        </text>
        del Reglamento del Régimen Académico Docente de la Universidad Boliviana, ha sido designado docente 
        <text style="color:#FF0000">{{$titulare->Dedicacion}}</text> por la gestión
        <text style="color:#FF0000">{{$titulare->designacion->Gestion}}</text>
        <?php 
            
                if ($titulare->designacion->Semestre == 'Gestion Academica') {
                    echo '(Semestre I y Semestre II)';
                }else {
                    if($titulare->designacion->Semestre == 'Semestre I' || 'Semestre II'){
                echo '('.$titulare->designacion->Semestre.')';
                        }
                }
        ?>
   , teniendo a su cargo las siguientes asignaturas:

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

<br>

Debiendo iniciar sus actividades a partir de la fecha. Para coordinar los horarios y otros 
aspectos inherentes a sus funciones académicas, se le solicita pasar por Dirección de Carrera. <br><br>
Con este grato motivo, saludamos a usted con las consideraciones más distinguidas. <br> <br>

Atentamente,

<img src="firma.png" alt="imagen 1">

</p>
    </div>
        
    @endforeach
    
    
    
</body>
</html>
