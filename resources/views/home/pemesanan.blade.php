@extends('home.layouts.main')

@section('container')
<div class="container" style="margin-top: 20px;">
    @if (Auth::check())
    <h5>Pemesanan Aula</h5>
    <h6 style="color: grey;">Pastikan Data Yang Terisi Sudah Benar</h6>
    <div class="card">
        <div class="card-body">
            <form method="GET" action="{{ url('pemesanan/') }}">
                @csrf
                <div class="form-group">
                    <fieldset disabled>
                        <label for="exampleInputEmail1">Nama Pesanan</label>
                        <input name="nama_pesanan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nama pesanan" value="{{$model->name}}_{{ $hall->id }}_{{ substr($hall->nama_tempat,0,3) }}">
                    </fieldset>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <fieldset disabled>
                                <label for="disabledTextInput">Nama Pemesan</label>
                                <input name="nama_pemesan" type="text" class="form-control" id="disabledTextInput" aria-describedby="emailHelp" placeholder="Enter name" value="{{ $model->name }}">
                            </fieldset>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <fieldset disabled>
                                <label for="exampleInputEmail1">Email</label>
                                <input name="email" type="email" class="form-control" id="disabledTextInput" aria-describedby="emailHelp" placeholder="Enter email" value="{{ $model->email }}">
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <fieldset disabled>
                        <label for="exampleInputEmail1">Nomor Handphone</label>
                        <input name="nohandphone" type="text" class="form-control" id="disabledTextInput" aria-describedby="emailHelp" placeholder="Enter number" value="{{ $model->nohandphone }}">
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
    <hr>
    <h5>Rincian Harga</h5>
    <h6 style="color: grey;">Berikut Rincian Harga Sewa</h6>
    <form method="POST" action="{{ url('pemesanan/') }}">
        @csrf
        <input name="nama_pesanan" type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nama pesanan" value="{{$model->name}}_{{ $hall->id }}_{{ substr($hall->nama_tempat,0,3) }}">
        <input name="nama_hall" type="hidden" class="form-control" id="disabledTextInput" aria-describedby="emailHelp" placeholder="Enter name" value="{{ $hall->nama_tempat }}">
        <input name="nama_pemesan" type="hidden" class="form-control" id="disabledTextInput" aria-describedby="emailHelp" placeholder="Enter name" value="{{ $model->name }}">
        <input name="email" type="hidden" class="form-control" id="disabledTextInput" aria-describedby="emailHelp" placeholder="Enter email" value="{{ $model->email }}">
        <input name="nohandphone" type="hidden" class="form-control" id="disabledTextInput" aria-describedby="emailHelp" placeholder="Enter number" value="{{ $model->nohandphone }}">
        <input name="totalharga" type="hidden" class="form-control" id="disabledTextInput" aria-describedby="emailHelp" placeholder="Enter number" value="Rp.{{ $hall->harga }}">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <p>
                            Total Harga
                        </p>
                    </div>
                    <div class="col-6">
                        <p style="text-align: end;">Rp.{{ $hall->harga }}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <p>
                            {{ $hall->nama_tempat }}
                        </p>
                    </div>
                    <div class="col-6">
                        <p style="text-align: end;">Rp.{{ $hall->harga }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-end flex-column bd-highlight mb-3">
            <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Pesan</button>
        </div>
    </form>

    @else
    <?= redirect()->intended('/login'); ?>
    @endif
</div>
@endsection