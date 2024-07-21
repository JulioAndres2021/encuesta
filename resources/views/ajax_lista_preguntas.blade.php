{{-- <table class="table" id="tabla_preguntas">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">TEXTO</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
       <!--para tabla relacionada  $row['candidato_id'] -->
       @foreach ($preguntas as $row)
       <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->texto }}</td>
            <td>
               <div class="d-grid gap-2 d-md-block">
                   <button class="btn btn-success btn_editar_pregunta" data-id-pregunta="{{ $row->id }}" type="button">Editar</button>
                   <button class="btn btn-danger btn_eliminar_pregunta" data-id-pregunta="{{ $row->id }}" type="button">Eliminar</button>
               </div>
           </td>
       </tr>
       @endforeach

    </tbody>
</table> --}}

