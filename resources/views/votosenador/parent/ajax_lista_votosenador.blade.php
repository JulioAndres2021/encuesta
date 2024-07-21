<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">IP</th>
            <th scope="col">FECHA</th>
            <th scope="col">SENADOR_ID</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <!--para tabla relacionada  $row['candidato_id'] -->
        @foreach ($votosenadores as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td scope="row">{{ $row->ip }}</td>
            <td>{{ $row->fecha }}</td>
            <td>{{ $row->senador_id}}</td>
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
