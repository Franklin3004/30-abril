<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Lista de compañias</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <a href="{{url('companies/create')}}" class="btn btn-primary">Crear nueva compañia</a>
            <a href="{{url('employees')}}" class="btn btn-info btn-sm">Ir a Empleados</a>
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
                    <th>DESCRIPCION</th>
                    <th>NIT</th>
                    <th>TELEFONO</th>
                    <th>OPCIONES</th>
                </tr>
                </thead>
                <tbody>
                @foreach($companies as $company)
                <tr>
                    <td> {{ $company->id }}</td>
                    <td> {{ $company->names_companies}}</td>
                    <td> {{ $company->descriptions_companies}}</td>
                    <td> {{ $company->nits_companies}}</td>
                    <td> {{ $company->phones_companies}}</td>
                    <td>

                        <form action="{{ url('companies',$company->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <a href="{{url('companies',$company->id)}}" class=" btn btn-info btn-sm">Detalles</a>
                            <a href="{{url('companies/edit',$company->id)}}"class=" btn btn-warning btn-sm">Editar</a>
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
