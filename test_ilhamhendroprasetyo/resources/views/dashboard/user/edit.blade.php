@extends('dashboard.master.master_dashboard')

@section('title')
    Edit
@endsection

@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4 mb-4">
                    <div class="card-header">
                        <a href="{{ route('user.index') }}" class="btn btn-primary">
                            back
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.edit', ) }}" method="post">
                            {{ csrf_field() }}
                            @method('patch')
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username" value="{{ $user->username }}" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Role</label>
                                <select name="role" class="form-control" id="">
                                    <option value="{{ $user->role }}" selected>{{ $user->role }}</option>
                                    <option value="superuser">Super User</option>
                                    <option value="staff">Staff</option>
                                </select>
                            </div>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

