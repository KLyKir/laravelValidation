<tr>
    <th scope="row">{{$user->id}}</th>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->password}}</td>
    <td><a href = "{{route('user.info', ['id' => $user->id])}}">Detail</a></td>
    <td><a href = "{{route('user.events', ['id' => $user->id])}}">Show Events</a></td>
    <td><a href = "{{route('user.update', ['id' => $user->id])}}">Update</a></td>
    <td><a href = "{{route('user.delete', ['id' => $user->id])}}">Delete</a></td>
</tr>
