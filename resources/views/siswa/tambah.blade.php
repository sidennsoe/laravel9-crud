@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Data SIswa') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h1>Tambah Siswa</h1>
                        <a class="btn btn-block btn-danger mb-4" href="/siswa">Kembali</a>
                        <form action="/siswa/proses" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" name="nama" class="form-control" id="floatingInput"
                                    placeholder="Masukan Nama">
                                <label for="floatingInput">Nama</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" name="nisn" class="form-control" id="floatingInput"
                                    placeholder="Masukan NISN">
                                <label for="floatingInput">NISN</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" name="jurusan" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option value="">Pilih Jurusan</option>
                                    <option value="Agribinsnis Tanaman Pangan dan Hortikultura">Agribinsnis Tanaman Pangan
                                        dan
                                        Hortikultura</option>
                                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                    <option value="Teknik dan Bisnis Sepeda Motor">Teknik dan Bisnis Sepeda Motor</option>
                                </select>
                                <label for="floatingSelect">Jurusan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" name="jk" aria-label="Floating label select example">
                                    <option value="">Pilih Jenis Kellamin</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                                <label for="floatingSelect">Jenis Kelamin</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="tempat" class="form-control" id="floatingInput"
                                    placeholder="Masukan Tempat Lahir">
                                <label for="floatingInput">Tempat</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" name="tgl_lahir" class="form-control" id="floatingInput"
                                    placeholder="Masukan Tgl Lahir">
                                <label for="floatingInput">Tgl Lahir</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea name="alamat" class="form-control" placeholder="Masukan Alamat" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Alamat</label>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <input class="btn btn-primary btn-block btn-lg" type="submit" name="submit"
                                    value="Tambah">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
