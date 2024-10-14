@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Daftar Produk</h1>
    <a href="" class="btn btn-primary">Tambah Produk</a>
    {{-- <a href="{{ route('products.create') }}" class="btn btn-primary">Tambah Produk</a> --}}

    <table class="table mt-3">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Lokasi</th>
                <th>Kondisi</th>
                <th>Stok</th>
                <th>Tanggal Publish</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->nama_barang }}</td>
                <td>{{ $product->harga }}</td>
                <td>{{ $product->lokasi }}</td>
                <td>{{ $product->kondisi }}</td>
                <td>{{ $product->stok }}</td>
                <td>{{ $product->tanggal_publish }}</td>
                <td>
                    <a href="" class="btn btn-warning">Edit</a>
                    <form action="" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                    {{-- <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection