@extends('mahasiswa.layout')

@section('content')

<h4 class="mt-5">Data Mahasiswa</h4>

<a href="{{ route('mahasiswa.create') }}" type="button" class="btn btn-success rounded-3">Tambah Data</a>

@if($message = Session::get('success'))
    <div class="alert alert-success mt-3" role="alert">
        {{ $message }}
    </div>
@endif

<table class="table table-hover mt-2">
    <thead>
      <tr>
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>No HP</th>
        <th>Alamat</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($mahasiswa as $mhs)
            <tr>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->no_hp }}</td>
                <td>{{ $mhs->alamat }}</td>
                <td>
                    <a href="{{ route('mahasiswa.edit', $mhs->nim) }}" type="button" class="btn btn-warning rounded-3">Ubah</a>

                    <!-- Button trigger modal -->
                    {{-- <button type="button" class="btn btn-danger" Mhs-bs-toggle="modal" Mhs-bs-target="#hapusModal{{ $mhs->nim }}">
                        Hapus
                    </button> --}}

                    <!-- Modal -->

                    <form action="{{route('mahasiswa.delete', $mhs->nim)}}" method="post" class="d-inline">
                        @csrf
                        @method('POST')
                        <button class="btn btn-danger">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@stop
