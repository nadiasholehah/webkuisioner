@extends('LAYOUT/master')
@section('content')
@section('judul','Data Pertanyaan')


        <div class="container">
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
            @endif
            <div class="row">
            <div class="col-lg-12">
            <form action="/pertanyaan/{{$pertanyaan->id}}/update" method="POST">
                    {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Id</label>
                    <input name="id_pertanyaan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pertanyaan->id_pertanyaan}}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Pertanyaan</label>
                    <textarea name="text_pertanyaan" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$pertanyaan->text_pertanyaan}}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kategori Pertanyaan</label>
                    <select name="kategori_pertanyaan" class="form-control" id="exampleFormControlSelect1">
                        <option value="Pilihan Ganda" @if($pertanyaan->kategori_pertanyaan == 'Pilihan Ganda') selected @endif>Pilihan Ganda</option>
                        <option value="Angka" @if($pertanyaan->kategori_pertanyaan == 'Angka') selected @endif>Angka</option>
                        <option value="Mata Uang" @if($pertanyaan->kategori_pertanyaan == 'Mata Uang') selected @endif>Mata Uang</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-warning">Update</button>
                </form>
                </div>
            </div>
        </div>
    

@endsection