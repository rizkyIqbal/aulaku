@extends('home.layouts.main')

@section('container')
@if (Auth::check())
<div class="container" style="margin-top: 20px;">
    <h3>History Pemesanan</h3>
    <hr>
    @foreach($hasil as $hsl)
    <h5>{{ $hsl->date_created }}</h4>
        <div class="card mb-4">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ URL::asset('images/jakarta.jpg'); }}" class="img-fluid rounded-start" style="width: 100%; height: 100%;" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $hsl->nama_pesanan }}</h5>
                        <p class="card-text">{{ $hsl->nama_hall }}</p>
                        <div class="row">
                            <div class="col-sm-6">

                                <p class="card-text" style="color: #007bff;"><small>{{ $hsl->totalharga }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
</div>
@else
<?= redirect()->intended('/login'); ?>
@endif
@endsection