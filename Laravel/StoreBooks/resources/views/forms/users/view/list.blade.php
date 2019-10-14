<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>E-mail</th>
            <th>rol</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $key => $user)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{$user->name}}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->rol->rol }}</td>

            <td>

                <a href="{{url('/user/seach')}}/{{ $user->id }}"  title="Editar">
                    <span class="glyphicon glyphicon-pencil">Editar</span>
                </a>

            </td>
        </tr>

        @empty

        <div class="alert alert-dismissible alert-warning">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <h4>Usuarios no existentes!</h4>

    </div>




        @endforelse
    </tbody>
</table>


 {!! $users->render()!!}
