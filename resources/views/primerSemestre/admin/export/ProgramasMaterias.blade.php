<table>
    <thead>
    <tr>
        <th>Programa</th>
        <th>Grupo Materia</th>
        <th>Materia</th>
        <th>Codigo Materia</th>
        <th>Descripción</th>
    </tr>
    </thead>
    <tbody>
    @foreach($programasMaterias as $programasMateria)
        <tr>
            <td>{{ $programasMateria->grupo->programa->nombre}}</td>
            <td>{{ $programasMateria->grupo->nombre}}</td>
            <td>{{ $programasMateria->materias->nombre}}</td>
            <td>{{ $programasMateria->materias->codigocompleto}}</td>
            <td>{{ $programasMateria->descripcion}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
