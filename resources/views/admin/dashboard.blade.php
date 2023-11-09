@extends('layouts.master')
@section('title', 'dashboard')
@section('dashboard', 'active')
@section('content')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Selamat Datang Admin</h3>
                  <h6 class="font-weight-normal mb-0">Sistem berjalan dengan baik! Kamu memiliki <span class="text-primary">{{$total}} pesan belum dibaca!</span></h6>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Pesan Kepada Anda</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Status</th>
                          <th>Tanggal</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Pesan</th>
                        </tr>  
                      </thead>
                      <tbody>
                      @forelse ($datas as $data)
                        <tr>
                          <td class="font-weight-medium">
                            @if($data->status == 1)
                            <div class="badge badge-danger"><a href="{{route('dibaca',['id'=>$data->id])}}" class="text-white">belum dibaca</a></div>
                            @else
                            <div class="badge badge-success">terbaca</div>
                            @endif
                          </td>
                          <td>
                          {{$data->created_at->format('d M Y H:i')}}
                          </td>
                          <td>{{$data->nama}}</td>
                          <td class="font-weight-bold">{{$data->email}}</td>
                          <td style="width:20%">{{$data->pesan}}</td>
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