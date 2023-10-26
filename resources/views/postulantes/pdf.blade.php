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
            <h1>Información del Postulante:</h1>
        </div>
        <div class="employee-info">
            <table>
                <tr>
                    <th>Nombres:</th>
                    <td>{{ $postulante->Nombre }}</td>
                </tr>
                <tr>
                    <th>Apellidos:</th>
                    <td>{{ $postulante->Apellido }}</td>
                </tr>
                <tr>
                    <th>E-mail:</th>
                    <td>{{ $postulante->Email }}</td>
                </tr>
                <tr>
                    <th>Celular:</th>
                    <td>{{ $postulante->Celular }}</td>
                </tr>
                <tr>
                    <th>Puesto:</th>
                    <td>{{ $postulante->Cargo->Nombre }}</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
