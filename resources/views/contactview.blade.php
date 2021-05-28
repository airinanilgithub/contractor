@extends("admintheme")
@section("content")
<table class="table ">
<tr>
    <th>User name</th> 
    <th>Message</th>
    <th>Contact Date</th>
   
</tr>
@foreach($contacts as $contact)
<tr>
    <td>{{$contact->user}}</td>
    <td>{{ $contact->Message }}</td>
    <td>{{$contact->date}}</td>
</tr>

@endforeach

</table>

@endsection