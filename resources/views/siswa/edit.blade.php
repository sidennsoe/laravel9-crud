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


                        <h1>Update Siswa</h1>
                        <a class="btn btn-block btn-danger mb-4" href="/siswa">Kembali</a>

                        <form action="/siswa/{{ $siswa->id }}" method="POST">
                            @method('put')
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" name="nama" class="form-control" id="floatingInput"
                                    placeholder="Masukan Nama" value="{{ $siswa->nama }}">
                                <label for="floatingInput">Nama</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" name="nisn" class="form-control" id="floatingInput"
                                    placeholder="Masukan NISN" value="{{ $siswa->nisn }}">
                                <label for="floatingInput">NISN</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" name="jurusan" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option value="Agribinsnis Tanaman Pangan dan Hortikultura"
                                        @if ($siswa->jurusan == 'Agribinsnis Tanaman Pangan dan Hortikultura') selected @endif>
                                        Agribinsnis Tanaman Pangan dan Hortikultura</option>
                                    <option value="Rekayasa Perangkat Lunak"
                                        @if ($siswa->jurusan == 'Rekayasa Perangkat Lunak') selected @endif>
                                        Rekayasa
                                        PerangkatLunak</option>
                                    <option value="Teknik dan Bisnis Sepeda Motor"
                                        @if ($siswa->jurusan == 'RTeknik dan Bisnis Sepeda Motor') selected @endif>Teknik dan
                                        Bisnis Sepeda Motor</option>
                                </select>
                                <label for="floatingSelect">Jurusan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" name="jk" aria-label="Floating label select example">
                                    <option value="">Pilih Jenis Kellamin</option>
                                    <option value="L" @if ($siswa->jk == 'L') selected @endif>Laki-laki
                                    </option>
                                    <option value="P" @if ($siswa->jk == 'P') selected @endif>Perempuan
                                    </option>
                                </select>
                                <label for="floatingSelect">Jenis Kelamin</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="tempat" class="form-control" id="floatingInput"
                                    placeholder="Masukan Tempat Lahir" value="{{ $siswa->tempat }}">
                                <label for="floatingInput">Tempat</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" name="tgl_lahir" class="form-control" id="floatingInput"
                                    placeholder="Masukan Tgl Lahir" value="{{ $siswa->tgl_lahir }}">
                                <label for="floatingInput">Tgl Lahir</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea name="alamat" class="form-control" placeholder="Masukan Alamat" id="floatingTextarea2" style="height: 100px">{{ $siswa->alamat }}</textarea>
                                <label for="floatingTextarea2">Alamat</label>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <input class="btn btn-primary btn-block btn-lg" type="submit" name="submit"
                                    value="Update">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
