<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Lista de empleados</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-med-12">
            <br>
            <a href="{{url('employees/create')}}" class="btn btn-primary">Agregar nuevo empleado</a>
            <a href="{{url('companies')}}" class="btn btn-info btn-sm">Ir a Compañias</a>
            <br>

            @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
                </div>
            @endif
            @if(session('type1'))
                <div class="alert alert-warning">
                    {{session('type1')}}
                </div>
            @endif
            @if(session('type'))
                <div class="alert alert-danger">
                    {{session('type')}}
                </div>
            @endif

            <br>
            <table CLASS="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>CORREO</th>
                    <th>DOCUMENTO</th>
                    <th>GENERO</th>
                    <th>OPCIONES</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $employee)
                <tr>
                    <td>{{$employee->id}}</td>
                    <td>{{$employee->names_employees}}</td>
                    <td>{{$employee->lastnames_employees}}</td>
                    <td>{{$employee->emails_employees}}</td>
                    <td>{{$employee->documents_employees}}</td>
                    <td>{{$employee->genders_employees}}</td>
                    <td>

                        <form action="{{url('employees',$employee->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <a href="{{url('employees',$employee->id)}}"class=" btn btn-info btn-sm">Detalles</a>
                            <a href="{{url('employees/edit',$employee->id)}}"class=" btn btn-warning btn-sm">Editar</a>
                            <button  type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {{$employees-> links()}}
        </div>
    </div>
</div>
</body>
</html>
