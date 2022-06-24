@extends('layouts.app')
@section('content')
 
    <div class="container">

        <h3>
            Data Users
            <a class="btn btn-primary btn-sm float-end" href="{{ url('users/create') }}">Tambah Data</a>
        </h3>

        <table class="table table-striped">
              <thead>
        <tr>
                <td>Nama User</td>
                <td>Email User</td>
                <td>HP User</td>
                <td>Alamat User</td>
                <td>Pos User</td>
                <td>Role User</td>
                <td>Status Aktif</td>                                
                            <td>EDIT</td>
                <td>HAPUS</td>
        </tr>
      </thead>
<?php $no=1;
?>
         @foreach ($rows as $row)
            <tr>
                    <td>{{ $row->user_nama }}</td>
                    <td>{{ $row->user_email }}</td>
                    <td>{{ $row->user_hp }}</td>
                    <td>{{ $row->user_alamat }}</td>
                    <td>{{ $row->user_pos }}</td>
                    <td>{{ $row->user_role }}</td>
                    <td>{{ $row->user_aktif }}</td>
                <td>
            <a href="{{ url('users/' . $row->user_id . '/edit') }}" class="btn btn-secondary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ url('users/' . $row->user_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Hapus</button>
                        </form>                </td>
            </tr>
        @endforeach
    </table>

    </div>
    </body>

</html>

@endsection