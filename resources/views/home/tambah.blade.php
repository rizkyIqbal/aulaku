@extends('home.layouts.main')

@section('container')
<div class="container">
    @if (Auth::check())
    <div class="card">
        <div class="card-header">
            Tambah Aula Anda
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('tambah') }}">
                @csrf
                <h4>Detail Tempat</h4>
                <hr>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Tempat</label>
                    <input name="nama_tempat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleSelectRounded0">Kota</label>
                    <select class="custom-select rounded-0" id="exampleSelectRounded0" name="kota">
                        <?php
                        // Loop untuk mengambil satu per satu.
                        foreach ($kota as $k) : ?>
                            <option value="{{ $k }}">{{ $k }}</option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kapasitas</label>
                    <input name="kapasitas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Luas</label>
                    <input name="luas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleSelectRounded0">Hari Operasional</label>
                    <div class="row">
                        <div class="col-5">
                            <select class="custom-select rounded-0" id="exampleSelectRounded0" name="hari_mulai">
                                <?php
                                // Loop untuk mengambil satu per satu.
                                foreach ($hari as $h) : ?>
                                    <option value="{{ $h }}">{{ $h }}</option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-2">
                            <p style="text-align: center;">s/d</p>
                        </div>
                        <div class="col-5">
                            <select class="custom-select rounded-0" id="exampleSelectRounded0" name="hari_selesai">
                                <?php
                                // Loop untuk mengambil satu per satu.
                                foreach ($hari as $h) : ?>
                                    <option value="{{ $h }}">{{ $h }}</option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleSelectRounded0">Jam Operasional</label>
                    <div class="row">
                        <div class="col-5">
                            <select class="custom-select rounded-0" id="exampleSelectRounded0" name="jam_mulai">
                                <?php
                                // Loop untuk mengambil satu per satu.
                                foreach ($jam as $j) : ?>
                                    <option value="{{ $j }}">{{ $j }}</option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-2">
                            <p style="text-align: center;">s/d</p>
                        </div>
                        <div class="col-5">
                            <select class="custom-select rounded-0" id="exampleSelectRounded0" name="jam_selesai">
                                <?php
                                // Loop untuk mengambil satu per satu.
                                foreach ($jam as $j) : ?>
                                    <option value="{{ $j }}">{{ $j }}</option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input name="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Deskripsi</label>
                    <input name="deskripsi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>
    @else
    <?= redirect()->intended('/login'); ?>
    @endif
</div>
@endsection