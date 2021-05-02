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
            <table CLASS="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>CORREO</th>
                    <th>DOCUMENTO</th>
                    <th>GENERO</th>
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
