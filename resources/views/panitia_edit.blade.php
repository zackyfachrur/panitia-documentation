@extends('layouts.main')

@section('container')
<div class="card mt-5">
    <div class="card-header text-center">
        CRUD Data Panitia - <strong>EDIT DATA</strong> - Deep App
    </div>
    <div class="card-body">
        <a href="/panitia" class="btn btn-primary">Kembali</a>
        <br/>
        <br/>


        <form method="post" action="/panitia/update/{{ $panitia->id }}">

            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama panitia .." value=" {{ $panitia->nama }}">

                @if($errors->has('nama'))
                    <div class="text-danger">
                        {{ $errors->first('nama')}}
                    </div>
                @endif

            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" placeholder="Alamat panitia .."> {{ $panitia->alamat }} </textarea>

                 @if($errors->has('alamat'))
                    <div class="text-danger">
                        {{ $errors->first('alamat')}}
                    </div>
                @endif

            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Simpan">
            </div>

        </form>

    </div>
</div>
@endsection
