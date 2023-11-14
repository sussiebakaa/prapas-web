@extends('layout.main')

@section('content')
<h2><u>Your Anime List:</u></h2>
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Rating</th>
        <th>Action</th>
    </tr>
    @foreach ($anime as $animek)
    <tr>
        <td>{{$animek["id"]}}</td>
        <td>{{$animek["nama"]}}</td>
        <td>{{$animek["rating"]}}</td>

        <td>
            <a type="button" class="btn btn-outline-secondary" href="/Anime/detailnime/{{$animek['id']}}" >Detail</a>
        </td>
    </tr>
    @endforeach

  </table>
  
@endsection