@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="css/style.css">
<div class="card mt-5">
    <div class="card-header text-center ">
        CRUD Data Panitia - <b> Tambah Data </b> | Deep App
    </div>
    <div class="card-body ">
        <form method="post" action="/panitia/store">

            {{ csrf_field() }}

            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama pegawai ..">

                @if($errors->has('nama'))
                    <div class="text-danger">
                        {{ $errors->first('nama')}}
                    </div>
                @endif

            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" placeholder="Alamat pegawai .."></textarea>

                 @if($errors->has('alamat'))
                    <div class="text-danger">
                        {{ $errors->first('alamat')}}
                    </div>
                @endif

            </div>

            <div class="form-group mt-4">
                 <a href="/panitia" class="btn btn-danger">Kembali</a>
                <input type="submit" class="btn btn-success" value="Simpan">
            </div>

        </form>

    </div>
</div>
@endsection
