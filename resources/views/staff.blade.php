@extends('layouts.master')

@section('container')
    <h1 class="text-center">Data Staff</h1>
    <div class="mb-4">
    <button type="button" class="btn btn-success ">Tambah Data</button>
    </div>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID Staff</th>
                <th scope="col">NIP</th>
                <th scope="col">Email Staff</th>
                <th scope="col">Nama Staff</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">No. HP</th>
              </tr>
            </thead>
            <tbody>
              @foreach($staff as $stf)
              <tr>
                <th scope="row">{{$stf->id}}</th>
                <td>{{$stf->nip}}</td>
                <td>{{$stf->email}}</td>
                <td>{{$stf->nama}}</td>
                <td>{{$stf->tanggal_lahir}}</td>
                <td>{{$stf->no_hp}}</td>
                <td>
                    <button type="button" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection