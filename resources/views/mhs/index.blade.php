@extends('header.navbar')
@section('content')
<div class="col-lg-12 grid-margin stretch-card " style="margin-top: 10%;">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Mahasiswa</h4>
            <div class="d-flex justify-content-end">
                <a href="/tambah-mhs" class="btn btn-outline-success"><i class="mdi mdi-account-plus"></i> Tambah Data</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> No </th>
                            <th> Nama </th>
                            <th> Nim </th>
                            <th> Alamat </th>
                            <th> Aksi </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mahasiswa as $mhs)
                        <tr>
                            <td>
                                @php $no = 1; @endphp
                                {{ $loop->index+1 }}
                            </td>
                            <td>
                                {{$mhs->nama}}
                            </td>
                            <td>
                                {{$mhs->nim}}
                            </td>
                            <td>
                                {{$mhs->alamat}}
                            </td>
                            <td>
                                <a href="edit-mhs/{{ $mhs->id }}">Edit</a>
                                
                                <a href="/delete-mhs/{{ $mhs->id }}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection