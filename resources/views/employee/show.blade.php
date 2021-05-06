<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Detalles del Empleado</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <br>
            <table class="table table-striped">
                <tr>
                    <td class="text-center" colspan="2"> <strong>DATOS PERSONALES</strong></td>
                </tr>
                <tr>
                    <td><strong>NOMBRE</strong></td>
                    <td>{{$employee->names_employees}}</td>
                </tr>
                <tr>
                    <td><strong>APELLIDO</strong></td>
                    <td>{{$employee->lastnames_employees}}</td>
                </tr>
                <tr>
                    <td><strong>CORREO</strong></td>
                    <td>{{$employee->emails_employees}}</td>
                </tr>
                <tr>
                    <td><strong>DOCUMENTO</strong></td>
                    <td>{{$employee->documents_employees}}</td>
                </tr>
                <tr>
                    <td><strong>GENERO</strong></td>
                    <td>{{$employee->genders_employees}}</td>
                </tr>
            </table>
            <a href="{{url('employees')}}">Vover al inicio</a>
        </div>
    </div>
</div>
</body>
</html>
