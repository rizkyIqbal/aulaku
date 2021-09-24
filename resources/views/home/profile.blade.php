@extends('home.layouts.main')

@section('container')
<div class="container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-lg-4 col-md-6">
            <div class="doctor-img-block">
                <img src="https://pngtree.com/freepng/vector-edit-profile-icon_4101351.html" alt="" class="img-fluid w-100">

                <div class="info-block mt-4">
                    <h4 class="mb-0">{{ $model->name }}</h4>
                    <p>{{ $model->email }}</p>
                    <p style="color: #007bff;">{{ $model->nohandphone }}</p>
                </div>
            </div>
        </div>

        <div class="col-lg-8 col-md-6">
            <div class="doctor-details mt-4 mt-lg-0">
                <h2 class="text-md">Profile</h2>
                <div class="divider my-4"></div>
                <form method="POST" action="{{ url('profile/' . $model) }}">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" value="{{ $model->name }}">

                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input name="email" type="email" class="form-control" id="disabledTextInput" aria-describedby="emailHelp" placeholder="Enter email" value="{{ $model->email }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor Handphone</label>
                                <input name="nohandphone" type="text" class="form-control" id="disabledTextInput" aria-describedby="emailHelp" placeholder="Enter number" value="{{ $model->nohandphone }}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection