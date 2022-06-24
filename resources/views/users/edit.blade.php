@extends('layouts.app')
@section('content')
    <div class="container">
                <h3>Edit Data Users</h3>

        <form action="{{ url('/users/' . $row->users_id) }}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>Nama Users</label>
                <input type="text" class="form-control" name="user_nama" value="{{ $row->user_nama }}"></>
            </div>
                <label>Email User</label>
                <div class="mb-3">
                    <input type="text" name="user_email" class="form-control"  value="{{ $row->user_email }}">
                </div>
                <label >Alamat User</label>
                <div class="mb-3">
                    <input type="text" name="user_alamat" class="form-control" value="{{ $row->user_alamat }}">
                </div>
                <label>HP User</label>
                <div class="mb-3">
                    <input type="text" name="user_hp" class="form-control" value="{{ $row->user_hp }}">
                </div>
                <label>Pos User</label>
                <div class="mb-3">
                    <input type="text" name="user_pos" class="form-control"  value="{{ $row->user_pos }}">
                </div>
                <label >Role</label>
                <div class="mb-3">
                    <input type="text" name="user_role" class="form-control"  value="{{ $row->user_role }}" >
                </div>
                <label>Status Aktif</label>
                <div class="mb-3">
                    <input type="text" name="user_aktif" class="form-control"  value="{{ $row->user_aktif }}">
                </div>                                                       
             <hr>
            <div class="mb-3">
                <input type="submit" value="UPDATE">
            </div>
        </form>
</div>
    
@endsection 