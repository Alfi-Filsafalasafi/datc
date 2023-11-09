@extends('layouts.master')
@section('title', 'Edit Artikel')
@section('artikel', 'active')
@section('content')
<div class="content-wrapper">
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Artikel</h4>
                  <p class="card-description">
                    Anda dapat mengedit artikel pada form berikut <br>
                    <small class="text-warning">*kosongi image jika tidak ingin merubah</small>
                  </p>
                  <form class="forms-sample" action="{{route('artikel.update',['id' => $artikel->id])}}" method="POST" enctype="multipart/form-data">
                  @method('PATCH')
                  @csrf
                    <div class="form-group">
                      <label>Gambar</label>
                      <input type="file" name="img" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info @error('img') is-invalid @enderror" disabled placeholder="{{$artikel->img}}">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                         @error('img')
                            <small class="text-danger"><b>{{$message}}</b></small>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Judul</label>
                      <input type="text" name="judul" value="{{old('judul') ?? $artikel->judul}}" class="form-control @error('judul') is-invalid @enderror" id="exampleInputName1">
                      @error('judul')
                            <small class="text-danger"><b>{{$message}}</b></small>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Deskripsi</label>
                      <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="exampleTextarea1" rows="4">{{old('deskripsi') ?? $artikel->deskripsi}}</textarea>
                      @error('deskripsi')
                            <small class="text-danger"><b>{{$message}}</b></small>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Link Url</label>
                      <input type="text" name="link" value="{{old('link') ?? $artikel->link}}" class="form-control @error('link') is-invalid @enderror" id="exampleInputName1">
                      @error('link')
                            <small class="text-danger"><b>{{$message}}</b></small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
</div>

@endsection