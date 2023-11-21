@extends('layout.main')

@section('content')
<h2><u>Your Manhwa List:</u></h2>
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Chapter</th>
        <th>Author</th>
        <th>Action</th>
    </tr>
    @foreach ($manhwa as $manhwak)
    <tr>
        <td>{{$manhwak["id"]}}</td>
        <td>{{$manhwak["nama"]}}</td>
        <td>{{$manhwak["jumlah_chap"]}}</td>
        <td>{{$manhwak["author"]}}</td>

        <td>
            <a type="button" class="btn btn-outline-secondary" href="/Manhwa/detailman/{{$manhwak['id']}}" >Detail</a>
        </td>
    </tr>
    @endforeach

  </table>
@endsection