<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Clientes</title>
    <style>
        body{
            font-family: sans-serif;
            font-size: 10px;
            text-align: center;

        }
        table{
            width: 100%;
            border: 1px solid black;
            border-collapse: collapse;
        }
        thead{
            background: gray;
        }
        td{
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h5>REPORTE DE CLIENTES</h5>
    <h6>Fecha: 20/05/2021</h6>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Razon Social</th>
                <th>NIT</th>
                <th>Celular</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->persona->nombre.' '.$cliente->persona->apellido}}</td>
                <td>{{$cliente->razon_social}}</td>
                <td>{{$cliente->nit}}</td>
                <td>{{$cliente->persona->celular}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>