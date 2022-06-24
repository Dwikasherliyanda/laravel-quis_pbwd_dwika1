@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>
            Data Golongan
            <a class="btn btn-primary btn-sm float-end" href="{{ url('golongan/create') }}">Tambah Data</a>
        </h3>

        <table class="table table-striped">
            <tr>
                <td>ID Golongan</td>
                <td>Kode Golongan</td>
                <td>Nama Golongan</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            @foreach ($rows as $row)
                <tr>

                    <td>{{ $row->gol_id }}</td>                                       
                    <td>{{ $row->gol_kode }}</td>
                    <td>{{ $row->gol_nama }}</td>
                    <td><a href="{{ url('golongan/' . $row->gol_id . '/edit') }}" class="btn btn-secondary">Edit</a></td>
                    <td>
                        <form action="{{ url('golongan/' . $row->gol_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Hapus</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
