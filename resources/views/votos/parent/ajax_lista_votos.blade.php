<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Candidato</th>
            <th scope="col">Votos</th>
            <th scope="col">IP</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($votos as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td scope="row">{{ $row['candidato_id'] }}</td>
            <td>{{ $row->votos }}</td>
            <td>{{ $row->ip }}</td>
            <td>
                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-success" type="button">Editar</button>
                    <button class="btn btn-danger" type="button">Eliminar</button>
                </div>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
