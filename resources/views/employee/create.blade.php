<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Crear Nuevo Empleado</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <br>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Formulario de Registro
                </div>
                <div class="panel-body">
                    <form action="{{url('employees')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="names_employees" id="names_employees">
                        </div>
                        <div class="form-group">
                            <label for="">Apellidos</label>
                            <input type="text" class="form-control" name="lastnames_employees" id="lastnames_employees">
                        </div>
                        <div class="form-group">
                            <label for="">Correo</label>
                            <input type="text" class="form-control" name="emails_employees" id="emails_employees">
                        </div>
                        <div class="form-group">
                            <label for="">Documento</label>
                            <input type="text" class="form-control" name="documents_employees" id="documents_employees">
                        </div>
                        <div class="form-group">
                            <label for="">Genero</label>
                            <input type="text" class="form-control" name="genders_employees" id="genders_employees">
                        </div>
                        <hr>
                        <button class="bt btn-primary" type="submit">Guardar Nuevo Empleado</button>
                        <a href="{{url('employees')}}">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
