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
</head>
<body>
    @foreach ($extraordinarios as $extraordinario)
    <div style="page-break-after: always">
    Potosí 
    {{ $extraordinario->designacion->FechaDesignacion }}
    <?php
        $anio = $extraordinario->designacion->FechaDesignacion; echo "<br>";
        
       $a = date('Y');    
       $t = $extraordinario->TipoDocente;     
    ?>  
    
    <br>
    <p>
    CITE: UATF/DCE/CAR {{$extraordinario->id}} <br><br><br>
    Señor/a   {{$extraordinario->docente->Titulo}} <br>
                {{ $extraordinario->docente->Nombres }} 
               {{ $extraordinario->docente->ApellidoPaterno }}
               {{ $extraordinario->docente->ApellidoMaterno }}<br>
    Presente <br><br><br><br>
    De nuestra mayor consideración:<br><br>
   
    Por Resolución del Honorable Consejo Facultativo de <text  style="color:#FF0000">{{$extraordinario->designacion->Facultad}}</text>
        N° <text style="color:#FF0000"> {{ $extraordinario->designacion->Resolucion }} </text>/ {{$a = date('Y' );}},
        nos permitimos comunicarle que omo resultado de la Convocatoria a Concurso de Méritos Para la Provisión de Docente Extraordinario para la carrera de
         <text style="color:#FF0000">{{$extraordinario->designacion->Carrera}}</text> usted ha sido designado como
         DOCENTE <text class="dos" tyle="color:#FF0000">{{$extraordinario->TiposDocente}}</text> 
            <text tyle="color:#FF0000">{{$extraordinario->Dedicacion}}</text> 
        por la presente gestion academica 2023

         en concordancia con el <text style="color:#FF0000"> Artículo 
        <?php 
        if($extraordinario->TiposDocente == 'Extraordinario Interino'){
            echo '12';
        }else{
            if ($extraordinario->TiposDocente == 'Contratado') {
                echo '19';
            } else {
                echo '11';
            }
            
        } 
        ?>
        </text>
        del Reglamento del Régimen Académico Docente de la Universidad Boliviana debiendo iniciar sus actividades académicas a partir de la fecha, teniendo a su cargo las siguientes asignaturas:
        <?php 
            
                if ($extraordinario->designacion->Semestre == 'Gestion Academica') {
                        
                    echo '';
                }else {
                    if($extraordinario->designacion->Semestre == 'Semestre I' || 'Semestre II'){
                echo '('.$extraordinario->designacion->Semestre.')';
                        }
                }
        ?>
   , teniendo a su cargo las siguientes asignaturas:

    <br>
   
    <ol type= "none">

    <li>
        {{$extraordinario->estudio->Sigla}} <text>___</text> {{$extraordinario->estudio->Materia}} <text>___</text><?php $suma = $extraordinario->estudio->Horast + $extraordinario->estudio->Horasp; echo $suma;?><text>Horas</text>
    </li>
    <li>
        {{ $extraordinario->materia01}}
        
    </li>
    
    <li>{{ $extraordinario->materia02 }}</li>
    <li>{{ $extraordinario->materia03 }}</li>
    <li>{{ $extraordinario->materia04 }}</li>
    <li>{{ $extraordinario->materia05 }}</li>
</ol>

<br>

Para coordinar horarios y otros aspectos inherentes a sus funciones académicas, se le insinúa pasar por Dirección de Carrera. <br>
Con este grato motivo, saludamos a usted con las consideraciones más distinguidas. <br>
Atentamente, <br>
 <br>
<br><br><br>
<div class="footer">
    <img src="vendor/adminlte/dist/imagen/sello.png" alt="freecodecamp-logo" width="" height=""><br>
    DECANO a.i. <br>
    FACULTAD DE <text  class="dos">CIENCIAS ECONOMICAS <br> FINANCIERAS ADMINISTRATIVAS</text><br><br>
    <div align="right">
        <img src="vendor/adminlte/dist/imagen/sello.png" alt="freecodecamp-logo" width="" height="" aling="center"><br>
        <text> M.B.A. Victor Hugo Villegas Choquevillca</text> <br>
            <text aling="center">VICERRECTOR U.A.T.F</text>
        
        
    </div>
    
</div>




</p>
    </div>
    
        
    @endforeach
</body>
</html>