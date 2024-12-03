@extends('dashboard.master.master_dashboard')

@section('title')
    Edit Password
@endsection

@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4 mb-4">
                    <div class="card-header">
                        <h5>Edit Password</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.update.password', ['user' => $user]) }}" method="post">
                            {{ csrf_field() }}
                            @method('patch')
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" id="">
                            </div>
                            <button class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

