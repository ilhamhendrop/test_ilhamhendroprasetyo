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
                        <a href="{{ route('obat.index') }}">back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
