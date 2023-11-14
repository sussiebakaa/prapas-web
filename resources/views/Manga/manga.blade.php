@extends('layout.main')

@section('content')
<h2><u>Your Manga List:</u></h2>
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Rating</th>
        <th>Action</th>
    </tr>
    @foreach ($manga as $mangak)
    <tr>
        <td>{{$mangak["id"]}}</td>
        <td>{{$mangak["nama"]}}</td>
        <td>{{$mangak["rating"]}}</td>

        <td>
            <a type="button" class="btn btn-outline-secondary" href="/Manga/detailmanga/{{$mangak['id']}}" >Detail</a>
        </td>
    </tr>
    @endforeach

  </table>
@endsection