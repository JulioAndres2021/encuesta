<table class="table table-responsive">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Comentario</th>
        <th scope="col">Fecha</th>
        {{-- <th scope="col">Estado</th> --}}
      </tr>
    </thead>
    <tbody class="table-group-divider">
       <!--para tabla relacionada  $row['candidato_id'] -->
       @foreach ($comentarios as $row)
       <tr>

        @if ($row->estado == 'DISABLED')
            <td colspan="4"><span class="badge text-bg-warning">--Comentario en revisión por el administrador--</span></td>
        @elseif ($row->estado == 'DELETED')
            <td colspan="4"><span class="badge text-bg-danger">--EL COMENTARIO NO CUMPLE CON LAS NORMAS DE LA PÁGINA--</span></td>
        @else
            <td>{{ $row->id }}</td>
            <td>{{ $row->texto }}</td>
            <td>{{ $row->created_at->since()}}</td>
            {{-- <td ><span class="badge text-bg-success">Aprobado</span></td> --}}
        @endif

           {{-- <td>
               <div class="d-grid gap-2 d-md-block">
                   <button class="btn btn-success" type="button">Editar</button>
                   <button class="btn btn-danger" type="button">Eliminar</button>
               </div>
           </td> --}}
       </tr>
       @endforeach

    </tbody>
</table>
