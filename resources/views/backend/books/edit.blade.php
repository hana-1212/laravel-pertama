@extends('backend.layout.base')
@section('content')
<div class="card">
    <form action="{{route('admin.author-update')}}" method="post">
        @csrf
        <input type="hidden" name="id" class="" value="{{$data->id}}">
        <div class="card-header">
            <h3 class="card-title">
             Edit Author Baru
            </h3>
         </div>
         <div class="card-body">
            <div class="form-group">
                <label for="" class="">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{$data->nama}}">
            </div>

            <div class="form-group">
                <label for="" class="">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" value="{{$data->tempat_lahir}}">
            </div>

            <div class="form-group">
                <label for="" class="">Nomor Telepon</label>
                <input type="number" name="nomor_telfon" class="form-control" value="{{$data->nomor_telfon}}">
            </div>
         </div>
         <div class="card-footer">
             <a href="{{route('admin.author')}}" class="btn btn-secondary">
                 Back
             </a>
             <button type="submit" class="btn btn-primary">
                 Simpan
             </button>
         </div>
    </form>
</div>
@endsection
