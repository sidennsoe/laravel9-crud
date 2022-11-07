@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ __('Berhasil login!') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <a class="btn btn-block btn-success mb-4" href="/siswa/tambah">+ Tambah siswa</a>

                        <div class="row align-content-end mt-2">

                            <div class="col-4">
                                <form action="/siswa" method="GET">
                                    <div class="form-floating mb-3">
                                        <input type="search" name="search" class="form-control" id="floatingInput"
                                            placeholder="Masukan Nama">
                                        <label for="floatingInput">Cari Nama</label>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <table class="table table-striped table-hover px-4 p-3 border bg-light">
                            <tr>

                                <th>Nama</th>
                                <th>NISN</th>
                                <th>Jurusan</th>
                                <th>JK</th>
                                <th>Tempat</th>
                                <th>Tgl Lahir</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach ($siswa as $s)
                                <tr>
                                    <td>{{ $s->nama }}</td>
                                    <td>{{ $s->nisn }}</td>
                                    <td>{{ $s->jurusan }}</td>
                                    <td>{{ $s->jk }}</td>
                                    <td>{{ $s->tempat }}</td>
                                    <td>{{ $s->tgl_lahir }}</td>
                                    <td>{{ $s->alamat }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <a class="btn btn-primary rounded-1" href="/siswa/{{ $s->id }}/edit">
                                                Edit</a>
                                            <form action="/siswa/{{ $s->id }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <input class="btn btn-danger rounded-1" type="submit" value="Hapus">
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <div class="my-5 Page navigation">

                            {{ $siswa->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
