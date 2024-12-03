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
                        Add Obat
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" border="1">
                            <thead>
                                <tr>
                                    <th class="card-title">Nama</th>
                                    <th class="card-title">Tanggal Kadaluarsa</th>
                                    <th class="card-title">Stok</th>
                                    <th class="card-title">Satuan</th>
                                    <th class="card-title">Harga Beli</th>
                                    <th class="card-title">Harga Jual</th>
                                    <th class="card-title">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($obats as $obat)
                                    <tr>
                                        <td class="card-text">{{ $obat->name }}</td>
                                        <td class="card-text">{{ $obat->tgl_kadaluarsa }}</td>
                                        <td class="card-text">{{ $obat->stok }}</td>
                                        <td class="card-text">{{ $obat->satuan }}</td>
                                        <td class="card-text">{{ $obat->harga_beli }}</td>
                                        <td class="card-text">{{ $obat->harga_jual }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('obat.edit', ['obat' => $obat]) }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('obat.delete', ['obat' => $obat]) }}" class="btn btn-danger">Delete</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Input Obat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('obat.create') }}" method="post">
                    {{ crsf_flied() }}
                    <div class="form-group">
                        <label for="">Nama Obat</label>
                        <input type="text" class="form-control" name="name" placeholder="username"
                            id="">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Kadaluarsa</label>
                        <input type="date" class="form-control" name="tgl_kadaluarsa" placeholder="Tanggal Kadaluarsa" id="">
                    </div>
                    <div class="form-group">
                        <label for="">stok</label>
                        <input type="number" class="form-control" name="stok" placeholder="Stok" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Satuan</label>
                        <input type="number" class="form-control" name="Satuan" placeholder="Satuan" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Harga Beli</label>
                        <input type="number" class="form-control" name="harga_beli" placeholder="Harga Beli" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Harga Jual</label>
                        <input type="number" class="form-control" name="harga_jual" placeholder="Harga Jual" id="">
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
