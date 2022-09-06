@extends('Template.base')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <div class="card">
            <div class="card-header">
              Tambah Data Produk
            </div>
            <div class="card-body">
                <form action="{{url('Produk', $Produk->id)}}" method="post">
                  @csrf
                  @method("PUT")
                  <div class="form-group">
                      <label for="" class="control-label">Nama</label>
                      <input type="text" class="form-control" name="nama" value="{{$Produk->nama}}">
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Harga</label>
                            <input type="text" class="form-control" name="harga" value="{{$Produk->harga}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="control-label">Stok</label>
                            <input type="text" class="form-control" name="stok" value="{{$Produk->stok}}">
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="" class="control-label">Deskripsi</label>
                      <textarea name="deskripsi" class="form-control">{{$Produk->deskripsi}}</textarea>
                  </div>
                  <button class="btn-dark float-right"><i class="fa fa-save"></i> Simpan </button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
