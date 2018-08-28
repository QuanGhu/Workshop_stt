@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="{{ route('save.category') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="email">Nama Kategori</label>
                <input type="text" class="form-control" name="name" placeholder="Masukan Nama Kategori" />
            </div>
            <button type="submit" class="btn btn-success"> Simpan </button>
        </form>
    </div>
</div>
<table>
    <tr>
        <td>No</td>
        <td>Nama Kategori</td>
        <td>Aksi</td>
    </tr>
    @foreach($category as $key => $data)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $data->name }}</td>
            <td> 
                <a href="{{ route('delete.category', $data->id) }}">Hapus</a>
                <a href="{{ route('edit.category', $data->id) }}">Update</a>  
            </td>
        </tr>
    @endforeach
</table>
@endsection