@extends('admin.layout.appadmin')
@section('content')
<h1 class="mt-4">Tables</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Tables</li>
</ol>
<div class="card mb-4">
    <div class="card-body">
        DataTables is a third party plugin that is used to generate the demo table below. For more
        information about DataTables, please visit the
        <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
        .
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <!-- <i class="fas fa-table me-1"></i> -->
        <a class="btn btn-success" href="index.php?hal=table_produk/form_produk">Create Kategori</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach($kategoriproduk as $kp)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$kp->nama}}</td>
                    <td>
                        <a class="btn btn-primary">View</a>
                        <a class="btn btn-primary">Edit</a>
                        <a class="btn btn-primary" onclick="if(!confirm('Anda Yakin Hapus Data Produk?')) {return false}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection