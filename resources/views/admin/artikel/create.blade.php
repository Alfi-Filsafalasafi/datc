@extends('layouts.master')
@section('title', 'Tambah Artikel')
@section('artikel', 'active')
@section('content')
<div class="content-wrapper">
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Artikel</h4>
                  <p class="card-description">
                    Anda dapat menambah artikel pada form berikut
                  </p>
                  <form class="forms-sample" action="{{route('artikel.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                      <label>Gambar</label>
                      <input type="file" name="img" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info @error('img') is-invalid @enderror" disabled placeholder="Upload Image">
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
                      <input type="text" name="judul" value="{{old('judul')}}" class="form-control @error('judul') is-invalid @enderror" id="exampleInputName1">
                      @error('judul')
                            <small class="text-danger"><b>{{$message}}</b></small>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Deskripsi</label>
                      <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="exampleTextarea1" rows="4">{{old('deskripsi')}}</textarea>
                      @error('deskripsi')
                            <small class="text-danger"><b>{{$message}}</b></small>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Link Url</label>
                      <input type="text" name="link" value="{{old('link')}}" class="form-control @error('link') is-invalid @enderror" id="exampleInputName1">
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