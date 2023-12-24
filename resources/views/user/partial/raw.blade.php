<tr>
    <th scope="row">{{$user->id}}</th>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->password}}</td>
    <td><a href = "{{route('user.info', ['id' => $user->id])}}">Detail</a></td>
</tr>
