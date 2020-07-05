@extends('adminlte.master')

@section('content')
  <div>
    <div class="card card-primary ml-3 mr-3 mt-3">
              <div class="card-header">
                <h3 class="card-title">Pertanyaan Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/questions" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul Pertanyaan</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Pertanyaan">
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi Pertanyaan</label>
                    <textarea class="form-control" rows="3" placeholder="Isi Pertanyaan"></textarea>
                  </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
  </div>

@endsection
