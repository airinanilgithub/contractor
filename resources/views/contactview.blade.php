@extends("admintheme")
@section("content")
<table class="table ">
<tr>
    <th>User name</th>
    <th>Name</th>
    <th>Email </th>
    <th>Message</th>
    
   
</tr>
@foreach($contacts as $contact)
<tr>
    <td>{{$contact->user}}</td>
    <td>{{ $contact->coname}}</td>
    <td>{{ $contact->coemail}}</td>
    <td>{{ $contact->Message }}</td>
   
   
   


</tr>

@endforeach

</table>

@endsection