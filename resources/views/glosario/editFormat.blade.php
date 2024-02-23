
<!--
<main>
    <div class="container py-4">
        <h2>Glosario de Términos</h2>
        <hr>

        <div class="card">
            <h3 class="card-title" style="text-align:center;">Agregar nuevo concepto  &nbsp;
                    <a href="{{ url('glosario/create') }}" class="btn btn-sucess btn-sm mb-3"><img src="{{ asset('dist/images/añadir.png') }}" width="30" height="30" alt=""> </a>
            </h3>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Definicion</th>
                <th scope="col">Imagen</th>
                <th scope="col"></th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($terminos as $termino)
                    <tr>
                        <th>{{ $termino-> id}}</th>
                        <td>{{ $termino-> nombre}}</td>
                        <td>{{ $termino-> definicion}}</td>
                        <th>{{ $termino-> imagen}}</th>
                        <td><a href="{{ url('glosario/'.$termino->id.'/editar') }}" class="btn btn-warning btn-sm" role="button" aria-disabled="true"><i class="bi bi-pencil-square"></i> Editar</a></td>
                        <td>
                            <form action="{{ url('glosario/'.$termino->id) }}" method="POST">
                                @method("DELETE")
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
    </div>
</main> 
-->