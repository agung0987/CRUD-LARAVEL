@extends('header.navbar')
@section('content')
<div class="col-lg-12 grid-margin stretch-card" style="margin-top: 10%;">
    <div class="card">
        <div class="card-header">
             Edit Data
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="/update-mhs" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $mhs->id }}">
                <div class="row">
                    <label for="kt" class=" control-label">Nama <span style="color: red;">*</span></label>
                </div>
                <div class="row">
                    <input type="text" class="form-control" value="{{ $mhs->nama }}" name="nama" required>
                </div>
                <div class="row">
                    <label for="kt" class=" control-label">NIM <span style="color: red;">*</span></label>
                </div>
                <div class="row">
                    <input type="text" class="form-control" value="{{ $mhs->nim }}" name="nim" required>
                </div>
                <div class="row">
                    <label for="kt" class=" control-label">Alamat <span style="color: red;">*</span></label>
                </div>
                <div class="row">
                    <input type="text" class="form-control" value="{{ $mhs->alamat }}" name="alamat" required>
                </div>
                <div class="row mt-3 ">
                    <button type="submit" class="btn btn-primary w-25">
                        Edit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection