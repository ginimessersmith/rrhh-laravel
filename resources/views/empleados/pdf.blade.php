<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 100%;
            margin: 0 auto;
        }
        .header {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        .employee-info {
            padding: 20px;
        }
        .employee-info table {
            width: 100%;
        }
        .employee-info table th, .employee-info table td {
            font-size: 18px;
            padding: 10px;
        }
        .employee-info table th {
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Información del Empleado</h1>
        </div>
        <div class="employee-info">
            <table>
                <tr>
                    <th>Nombres:</th>
                    <td>{{ $empleado->Nombre }}</td>
                </tr>
                <tr>
                    <th>Apellidos:</th>
                    <td>{{ $empleado->Apellido }}</td>
                </tr>
                <tr>
                    <th>E-mail:</th>
                    <td>{{ $empleado->Email }}</td>
                </tr>
                <tr>
                    <th>Celular:</th>
                    <td>{{ $empleado->Celular }}</td>
                </tr>
                <tr>
                    <th>Cargo:</th>
                    <td>{{ $empleado->Cargo->Nombre }}</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
