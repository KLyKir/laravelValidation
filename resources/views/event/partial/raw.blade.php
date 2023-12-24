<tr>
    <th scope="row">{{$event->id}}</th>
    <td>{{$event->name}}</td>
    <td>{{$event->date}}</td>
    <td>{{$event->time}}</td>
    <td><a href = "{{route('event.show', ['id' => $event->id])}}">Show</a></td>
</tr>

