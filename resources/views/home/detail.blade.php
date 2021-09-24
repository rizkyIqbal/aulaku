@extends('home.layouts.main')

@section('container')
<div class="container" style="margin-top: 20px;">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title" style="font-weight: bold;">{{ $model->nama_tempat }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $model->alamat }} Kota {{ $model->kota }}</h6>
            <hr style="background-color: #36454F;">
            <img src="{{ URL::asset('images/jakarta.jpg'); }}" style="width: 1070px;" alt="">
            <hr>
            <h5 style="font-weight: bold;">Info Ruangan</h5>
            <table>
                <tbody>
                    <tr>
                        <td style="width: 100px;">
                            <p>Luas Aula</p>
                        </td>
                        <td style="width: 20px;">
                            <p>:</p>
                        </td>
                        <td>
                            <p> {{ $model->luas }}m/s</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Jumlah Kursi</p>
                        </td>
                        <td>
                            <p>:</p>
                        </td>
                        <td>
                            <p> {{ $model->kapasitas }} kursi</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Hari Operasi</p>
                        </td>
                        <td>
                            <p>:</p>
                        </td>
                        <td>
                            <p> {{ $model->hari_mulai }} s/d {{ $model->hari_selesai }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Jam Operasi</p>
                        </td>
                        <td>
                            <p>:</p>
                        </td>
                        <td>
                            <p> {{ $model->jam_mulai }} s/d {{ $model->jam_selesai }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Deskripsi
                        </td>
                    </tr>
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    {{ $model->deskripsi }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </tbody>
            </table>
            <hr>
            <p class="card-text" style="color: #007bff;">Rp. {{ $model->harga }} / hari</p>
            <a href="{{ url('/pemesanan/'.$model->id) }}">
                <button type=" button" class="btn btn-primary">Pesan Sekarang</button>
            </a>
        </div>
    </div>
</div>
@endsection