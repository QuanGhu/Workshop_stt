@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="{{ route('update.category') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" value="{{ $data->id }}" name="id"/>
            <div class="form-group">
                <label for="email">Nama Kategori</label>
                <input type="text" class="form-control" name="name" value="{{$data->name}}"/>
            </div>
            <button type="submit" class="btn btn-success"> Simpan </button>
        </form>
    </div>
</div>
@endsection