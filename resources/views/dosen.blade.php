@extends('layouts.master')

@section('container')
    <h1 class="text-center">Data Dosen</h1>
    <div class="mb-4">
    <button type="button" class="btn btn-success ">Tambah Data</button>
    </div>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID Dosen</th>
                <th scope="col">NIP</th>
                <th scope="col">Nama Dosen</th>
                <th scope="col">Email Dosen</th>
                <th scope="col">No. HP</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($dosen as $dsn)
              <tr>
                <th scope="row">{{$dsn->id_dosen}}</th>
                <td>{{$dsn->nip}}</td>
                <td>{{$dsn->nama_dosen}}</td>
                <td>{{$dsn->email_dosen}}</td>
                <td>{{$dsn->no_hp}}</td>
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