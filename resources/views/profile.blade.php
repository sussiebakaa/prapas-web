@extends('layout.main')

@section('content')
<img src="{{ $foto }}" alt="Foto Pengguna" width="100">
<h3>User: <u> {{ $pengguna }} </u></h3>
<p>Email: {{ $email }} </p>
<p><small>Join Since: {{ $tanggalbergabung }} </small><p>
@endsection