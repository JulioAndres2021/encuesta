<table class="table" id="tabla_candidatos">
    {{-- <thead class="table-dark">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead> --}}
    <tbody>
        @if (count($candidatos) <= 0)
            <tr>
                <td class="text-danger">NO HAY DATOS CARGADOS</td>
                <td class="text-danger">---</td>
            </tr>
        @else
            @foreach ($candidatos as $row)
                <tr>
                    <th scope="row">
                        <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block d-flex">
                                <div class="">
                                    <div class="custom-block-icon-wrap">
                                        <div class="section-overlay"></div>
                                        <a href="detail-page.html" class="custom-block-image-wrap">
                                            <img src="{{asset('Front/images/podcast/sinrostro.png')}}"
                                                class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="custom-block-info">
                                    <div class="custom-block-top d-flex mb-1">
                                        <small>Votos: <span class="badge">{{ $row->votos }}</span></small>
                                    </div>
                                    <h5 class="mb-2">
                                        <a href="detail-page.html">
                                            {{ $row->candidatos->nombre }}
                                        </a>
                                    </h5>
                                    <p class="mb-0">{{ $row->candidatos->partido }}</p>
                                </div>
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-info btn_agregar_voto" data-id-voto="{{ $row->id }}"
                                        type="button" data-bs-toggle="modal" data-bs-target="#ModalVotarCandidato">Votar</button>
                                    {{-- <button class="btn btn-danger btn_eliminar_candidato" data-id-curso="{{ $row->id }}"
                                        type="button">Borrar</button> --}}
                                </div>
                            </div>
                        </div>
                    </th>
                    <td></td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>


