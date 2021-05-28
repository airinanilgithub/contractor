@extends("admintheme")
@section("content")
<br>
<br>
<div class="container">
<div class="row">
<table class="table table-borderless  table-dark">
<tr>
    <th>User name</th> 
    <th>Message</th>
    <th>Contact Date</th>
   
</tr>
@foreach($contacts as $contact)
<tr class=" table-primary">
    <td>{{$contact->user}}</td>
    <td>{{ $contact->Message }}</td>
    <td>{{$contact->date}}</td>
</tr>

@endforeach

</table>
</div>
</div>
@endsection