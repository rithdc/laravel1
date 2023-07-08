<tr @if($loop->even) class="table-primary" @endif>
    <th scope="row">{{$loop->index}}</th>
    <td>{{$contact->first_name}}</td>
    <td>{{$contact->last_name}}</td>
    <td>{{$contact->email}}</td>
    <td>{{$contact->company_id}}</td>
    <td width="150">
    <a href="{{route('contacts.show',$contact->id)}}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="bi bi-eye-fill"></i></a>
    <a href="{{route('contacts.create')}}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="bi bi-pencil-square"></i></a>
<a href="#" class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="confirm('Are you sure?')"><i class="bi bi-x-circle"></i></a></td>
</tr>
