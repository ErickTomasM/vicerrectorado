
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
PENDIENTE VINCULAR CON PLAN DE ESTUDIOS 

<div class="page-break"></div>
    
@endforeach
      

</body>
</html>
/*
Potosí, 28 de junio de 202…
CITE: UATF/DCE/CAR. 002-A/2022



Señor Lic.
Nombre del Docente
Presente

De nuestra mayor distinción:
Por Resoluciones del Consejo Facultativo de la Facultad de Ciencias Económicas Financieras y Administrativas Nº 134/2022, nos permitimos comunicarle que por una mejor administración académica se le ha reasignado sus materias para el presente semestre académico I/2022 en su condición de DOCENTE ORDINARIO TITULAR a tiempo Completo de la Carrera Administración de Empresas, en concordancia con el Art. 20 del Reglamento del Régimen Académico Docente de la Universidad Boliviana, teniendo a su cargo las siguientes asignaturas:
SIGLA          ASIGNATURA          GRUPO            HORAS/SEMANA
Para coordinar horarios y otros aspectos inherentes a sus funciones académicas, se le insinúa pasar por la Dirección de Carrera.
Con este grato motivo, saludamos a usted con las consideraciones más distinguidas.
Atentamente,




Nombre decano
DECANO FACULTAD
Vo.Bo.

M.B.A. Victor Hugo Villegas Choquevillca 
                                                                                                             VICERRECTOR U.A.T.F.
C.c: VR. - DPER - Arch.
*/