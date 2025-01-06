@extends('layout', ['title' => 'Tabel Mahasiswa'])
@section('content1')
<div class="card mt-5">
    <div class="card-body">
        <h2 class="card-title">Table Mahasiswa</h2>
        <a href="/mahasiswa/create" class="btn btn-primary mt-2">Tambah Data </a>
        <table class="table table-dark table-striped table-bordered border-light mt-2">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nim }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $mahasiswa->links() !!}
    </div>
</div>
@endsection
