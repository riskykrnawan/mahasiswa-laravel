{{-- @extends('layouts.global')

@section('title')
  Ini Halaman Home
@endsection
@section('content')
  <div class="container px-4 py-5">
    <h2 class="pb-2 border-bottom">Good Bye Worlds!</h2>
    <x-button>Ini Button</x-button>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      @foreach ($prodis as $prodi)
        <div class="col">
          <div class="d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3">
            <i class="bi {{ $prodi['logo'] }}"></i>
          </div>
          <h3 class="fs-2">{{ $prodi['nama'] }}</h3>
          <p>{{ $prodi['fakultas'] }}</p>
        </div>
      @endforeach
    </div>
  </div>
@endsection --}}


@extends('layouts.global')

@section('title')
Ini Halaman Home
@endsection

@section('content')
<div class="container px-4 py-5">
<h2 class="pb-2 border-bottom">Good Bye Worlds!</h2>
<table class="table">
<thead>
<tr>
  <th scope="col">#</th>
  <th scope="col">Nama</th>
  <th scope="col">NIM</th>
  <th scope="col">Prodi</th>
</tr>
</thead>
<tbody>
@foreach ($mahasiswas as $mahasiswa)
<tr>
  <th scope="row">{{ $mahasiswa->id }}</th>
<td>{{ $mahasiswa->nama }}</td>
<td>{{ $mahasiswa->nim }}</td>
<td>{{ $mahasiswa->prodi }}</td>
{{-- Cukup Panggil seperti di atas --}}
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection