<div>
    <table>
        @foreach($usuarios as $usuario)
        <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->permiso_id}}</td>
        </tr>
        @endforeach
    </table>
</div>
