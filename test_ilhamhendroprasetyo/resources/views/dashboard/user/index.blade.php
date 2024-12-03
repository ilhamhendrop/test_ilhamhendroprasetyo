@extends('dashboard.master.master_dashboard')

@section('title')
    User
@endsection

@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4 mb-4">
                    <div class="card-header">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Add User
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" border="1">
                                <thead>
                                    <tr>
                                        <th class="card-title">Usename</th>
                                        <th class="card-title">Role</th>
                                        <th class="card-title">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="card-text">{{ $user->username }}</td>
                                            <td class="card-text">{{ $user->role }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('user.edit', ['user' => $user]) }}"
                                                    class="btn btn-primary">Edit Data</a>
                                                <a href="{{ route('user.edit.password', ['user' => $user]) }}"
                                                    class="btn btn-primary">
                                                    Edit Password
                                                </a>
                                                <a href="{{ route('user.delete') }}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('user.create') }}" method="post">
                        {{ crsf_flied() }}
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="username"
                                id="">
                        </div>
                        <div class="form-group">
                            <label for="">Role</label>
                            <select name="role" class="form-control">
                                <option selected>--Role--</option>
                                <option value="superuser">Super User</option>
                                <option value="staff">Staff</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                id="">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
