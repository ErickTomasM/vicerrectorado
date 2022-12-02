
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
    @foreach ( $titulares as $titulare )
    Potosí 
    
    Código  no entender<br> 
    Señor 
    <p>aqui haciendo pruebas papu</p>
    @foreach ($titulares as $titulare)
                                        <tr>
                                        
                                            
											<td>
                                                {{$titulare->docente->Nombres}}
                                                {{$titulare->docente->ApellidoPaterno}}
                                                {{$titulare->docente->ApellidoMaterno}}
                                            </td>
                                                                    
											<td>{{ $titulare->designacion->Dictamen }}
                                                
                                            </td>
                                            <td>
                                                {{$titulare->estudio->Materia}}
                                            </td>
                                            <td>
                                                {{$titulare->materia01}}
                                            </td>
                                                
											
											<td>{{ $titulare->materia02 }}</td>
											<td>{{ $titulare->materia03 }}</td>
											<td>{{ $titulare->materia04 }}</td>
											<td>{{ $titulare->materia05 }}</td>
											<td>{{ $titulare->TiposDocente }}</td>
											<td>{{ $titulare->Dedicacion }}</td>

                                            <td>
                                                <form action="{{ route('titulares.destroy',$titulare->id) }}" method="POST">
                                                    @can('titulares.show')
                                                    <a class="btn btn-sm btn-primary " href="{{ route('titulares.show',$titulare->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    @endcan
                                                    @can('titulares.edit')
                                                    <a class="btn btn-sm btn-success" href="{{ route('titulares.edit',$titulare->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('titulares.destroy')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                    @endcan
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach


               

    @endforeach

</body>
</html>

