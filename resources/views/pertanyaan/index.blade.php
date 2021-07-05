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
                <div >
                <button type="button" class="btn btn-success btn-sm mb-3" data-toggle="modal" data-target="#exampleModal">
                    Tambah pertanyaan
                </button>

                    
                </div>
                
                <table class="table table-hover">
                    <tr>
                        <th>Id</th>
                        <th>Pertanyaan</th>
                        <th>Kategori Pertanyaan</th>
                        <th>Opsi</th>
                    </tr>
                    @foreach($data_pertanyaan as $pertanyaan)
                    <tr>
                        <td>{{$pertanyaan->id_pertanyaan}}</td>
                        <td>{{$pertanyaan->text_pertanyaan}}</td>
                        <td>{{$pertanyaan->kategori_pertanyaan}}</td>
                        <td>
                            <a href="/pertanyaan/{{$pertanyaan->id}}/edit" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                            <a href="/pertanyaan/{{$pertanyaan->id}}/delete" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pertanyaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body">
            <form action="/pertanyaan/create" method="POST">
                    {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Id</label>
                    <input name="id_pertanyaan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Pertanyaan</label>
                    <textarea name="text_pertanyaan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kategori Pertanyaan</label>
                    <select name="kategori_pertanyaan" class="form-control" id="exampleFormControlSelect1">
                        <option value="Pilihan Ganda">Pilihan Ganda</option>
                        <option value="Angka">Angka</option>
                        <option value="Mata Uang">Mata Uang</option>
                    </select>
                </div>      

            
           
        </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
    </div>
</div>


@endsection