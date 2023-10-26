@extends('layouts.estilo')

@section('tabla')
<div class="content-wrapper">
<div class="card mb-3">
<div class="card-body d-flex justify-content-between align-items-center">
    <h3 class="card-title">POSTULANTES</h3>
    <div class="d-flex align-items-center">
        <a class="btn btn-success mx-2" id="generateReport">Reporte</a>
        <a class="btn btn-dark" href="{{ route('postulantes.create') }}">Nuevo</a>
    </div>

</div>
</div>

    <div id="formatOptions" style="display: none;">
        <label for="format" style="font-weight: bold;">Seleccione el Tipo de Reporte:</label>
        <select id="format" class="form-control">
            <option value="pdf">PDF</option>
            <option value="excel">EXCEL</option>
        </select>
        <button id="generate" class="btn btn-primary mt-2">Generar</button>
    </div>

    <!-- Añade una tabla oculta para el informe -->
    <table id="reportTable" class="table" style="display: none;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>E-mail</th>
                <th>Teléfono</th>
                <th>Puesto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($postulante as $postulantes)
            <tr>
                <td>{{ $postulantes->id }}</td>
                <td>{{ $postulantes->Nombre }}</td>
                <td>{{ $postulantes->Apellido }}</td>
                <td>{{ $postulantes->Email }}</td>
                <td>{{ $postulantes->Celular }}</td>
                <td> 
                    @foreach ($cargo as $cargos)
                        @if($cargos->id==$postulantes->idCargo)
                        {{$cargos->Nombre}}
                        @endif
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const generateReportButton = document.getElementById("generateReport");
            const formatOptions = document.getElementById("formatOptions");
            const formatSelect = document.getElementById("format");
            const generateButton = document.getElementById("generate");
            const reportTable = document.getElementById("reportTable");

            generateReportButton.addEventListener("click", function () {
                formatOptions.style.display = "block";
            });

            generateButton.addEventListener("click", function () {
                const selectedFormat = formatSelect.value;

                if (selectedFormat === "pdf") {
                    const logoPath = '{{ asset('admin/assets/images/logo.png') }}';

                    const pdfDefinition = {
                        images: {
                            logo: logoPath,
                        },
                        content: [
                            {
                                image: 'logo',
                                width: '350',
                                alignment: 'center',
                            },
                            {
                                text: ' ',
                                margin: [0, 10],
                            },
                            {
                                text: "Reporte de Postulantes",
                                style: "header",
                                alignment: 'center',
                            },
                            {
                                text: ' ',
                                margin: [0, 10],
                            },
                            {
                                table: {
                                    headerRows: 1,
                                    widths: [15, '*', '*', 'auto', 'auto', 'auto'],
                                    body: [
                                        ["ID", "Nombres", "Apellidos", "E-mail", "Teléfono", "Puesto"],
                                        @foreach($postulante as $postulantes)
                                        ["{{ $postulantes->id }}", "{{ $postulantes->Nombre }}", "{{ $postulantes->Apellido }}", "{{ $postulantes->Email }}", "{{ $postulantes->Celular }}", "{{ $postulantes->cargo->Nombre }}"],
                                        @endforeach
                                    ],
                                },
                                layout: {
                                    fillColor: function (rowIndex) {
                                        return rowIndex % 2 === 0 ? "#006400" : null;
                                    },
                                },
                            },
                        ],
                        styles: {
                            header: {
                                fontSize: 18,
                                bold: true,
                            },
                        },
                    };

                    pdfMake.createPdf(pdfDefinition).download("reporte_postulantes.pdf");
                } else if (selectedFormat === "excel") {
                    const data = XLSX.utils.table_to_book(reportTable, { sheet: "Postulantes" });
                    XLSX.writeFile(data, "reporte_postulantes.xlsx");
                }
            });
        });
    </script>

    <div class="row">
        @foreach ($postulante as $postulantes)
        <div class="col-lg-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Postulante:</h4>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>ID:</th>
                                <td>{{ $postulantes->id }}</td>
                            </tr>
                            <tr>
                                <th>Nombres:</th>
                                <td>{{ $postulantes->Nombre }}</td>
                            </tr>
                            <tr>
                                <th>Apellidos:</th>
                                <td>{{ $postulantes->Apellido }}</td>
                            </tr>
                            <tr>
                                <th>E-mail:</th>
                                <td>{{ $postulantes->Email }}</td>
                            </tr>
                            <tr>
                                <th>Celular:</th>
                                <td>{{ $postulantes->Celular }}</td>
                            </tr>
                            @foreach ($cargo as $cargos)
                            @if ($cargos->id == $postulantes->idCargo)
                            <tr>
                                <th>Cargo:</th>
                                <td>{{ $cargos->Nombre }}</td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-success" href="{{ route('postulantes.pdf', $postulantes->id) }}">PDF</a>
                            <a class="btn btn-primary mx-2" href="{{ route('postulantes.edit', $postulantes->id) }}">Editar</a>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['postulantes.destroy', $postulantes->id], 'style' => 'display:inline']) !!}
                            {!! Form::submit('Borrar', ['class' => 'btn btn-danger ']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
