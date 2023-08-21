@extends('dashboard')

@section('content') 
<div class="content-header"> 
    <div class="container-fluid"> 
        <div class="row mb-2">
            <div class="col-sm-6"> 
                <h1 class="m-0">Profile</h1> 
            </div> 
        </div> 
        <!-- /.row --> 
    </div> 
    <!-- /.container-fluid --> 
</div> 

<!-- /.content-header --> 

<!-- Main content --> 
<div class="content"> 
    <div class="container-fluid"> 
        <div class="row"> 
            <div class="col-12"> 
                <div class="card"> 
                    <div class="card-body">
                        <a href="{{ route('jabatan.create') }}" class="btn btn-md btn-success mb-3">TAMBAH PROFILE</a>
                        <div class="table-responsive p-0"> 
                            <table class="table table-hover"> 
                                <thead> 
                                    <tr> 
                                        <th class="text-center">NAMA</th> 
                                        <th class="text-center">JABATAN</th>
                                        <th class="text-center">FOTO</th>
                                        <th class="text-center">AKSI</th> 
                                    </tr> 
                                </thead> 
                                <tbody> @forelse ($jabatan as $item) 
                                    <tr> 
                                        <td class="text-center">{{ $item->nama }}</td> 
                                        <td class="text-center">{{ $item->jabatan }}</td>
                                        <td class="text-center"><img src="{{ asset('storage/' . $item->foto) }}" alt="Gambar Profile" class="rounded" width="200px" height="auto" style="max-height: 200px;"></td>
                                        <td class="text-center"> 
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('jabatan.destroy', $item->id) }}" method="POST"> 
                                                <a href="{{ route('jabatan.edit', $item->id) }}" class="btn btn-sm btn-primary">EDIT</a> 
                                                @csrf 
                                                @method('DELETE') 
                                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button> 
                                            </form> 
                                        </td>
                                    </tr> 
                                    
                                    @empty 
                                    <div class="alert alert-danger"> Data Profile Belum Tersedia </div> 
                                    @endforelse 
                                </tbody> 
                            </table> 
                        </div>
                        <div class="d-flex">
                            <div class="mx-auto">
                                {{$jabatan->links("pagination::bootstrap-4")}}
                            </div>
                        </div>
                    </div> 
                    <!-- /.card-body --> 
                </div> 
                <!-- /.card --> 
            </div> 
            <!-- /.col-md-6 --> 
        </div> 
        <!-- /.row --> 
    </div> 
    <!-- /.container-fluid --> 
</div> 
@endsection