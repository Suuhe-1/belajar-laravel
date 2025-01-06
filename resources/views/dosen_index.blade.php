@extends('layout', ['title' => 'Tabel Dosen'])
@section('content2')
<div class="card mt-5">
  <div class="card-body">
        <h2 class="card-title">Table Dosen</h2>
        <a href="/dosen/create" class="btn btn-primary mt-2">Tambah Data </a>
    <table class="table table-dark table-striped table-bordered border-light mt-2">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama Dosen</th>
                <th>NIDN</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosen as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->nidn }}</td>
                <td>{{ $item->jenis_kelamin }}</td>
                <td>{{ $item->alamat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $dosen->links() !!}
  </div>
</div>
@endsection
