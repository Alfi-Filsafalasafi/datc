@extends('layouts.master')
@section('title', 'Artikel Pribadi')
@section('artikel_pribadi', 'active')
@section('content')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Artikel Pribadi</h3>
                  <h6 class="font-weight-normal mb-0">Berikut Artikel yang Anda miliki, Anda bisa melihatnya di <span class="text-primary"> <a href="{{url('/')}}">Landing Page</a></span></h6>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
          @if(session()->has('success'))
            <div class="container">
                <div class="alert alert-success alert-dismissible fade show  mt-4" role="alert">
                    <strong>Berhasil!</strong> {{session()->get('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
          @endif
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <a href="{{route('artikel_pribadi.create')}}" class="btn btn-sm btn-success btn-icon-text"><i class="ti-plus btn-icon-prepend"></i>Tambah</a>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Detail</th>
                          <th>Foto</th>
                          <th>Judul</th>
                          <th>Deskripsi</th>
                        </tr>  
                      </thead>
                      <tbody>
                      @forelse ($datas as $data)
                        <tr>
                          <td>
                            <form method="POST" action="{{ route('artikel.delete', $data->id) }}">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <a href="{{ route('artikel_pribadi.edit', ['id' => $data->id]) }}" class="btn btn-warning btn-rounded btn-icon" style="padding-top:12px">
                                  <i class="ti-marker-alt"></i>
                                </a>
                                <a href="{{ route('artikel_pribadi.delete', ['id' => $data->id]) }}" class="btn btn-danger btn-rounded btn-icon show_confirm" style="padding-top:12px">
                                  <i class="ti-trash"></i>
                                </a>
                            </form>
                          </td>
                          <td>
                            <a href="{{route('detail_artikel', ['id' => $data->id])}}" target="_blank">lihat</a>
                          </td>
                          <td>
                            <img src="{{ asset('img/artikel/' . $data->img)}}" class="img rounded-0" style="width:128px;height:64px" alt="" srcset="">
                          </td>
                          <td>{{$data->judul}}</td>
                          <td>{{$data->deskripsi}}</td>
                        </tr>
                      @empty
                        <tr>
                          <td colspan="8" style="text-align: center;">Tidak Ada Data</td>
                        </tr>
                      @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
</div>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: "Apakah anda yakin untuk menghapus data ini ?",
              text: "",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>
@endsection