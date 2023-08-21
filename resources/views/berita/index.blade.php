@extends('dashboard')

@section('content') 
<div class="content-header"> 
    <div class="container-fluid"> 
        <div class="row mb-2">
            <div class="col-sm-6"> 
                <h1 class="m-0">Informasi</h1> 
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
                        <a href="{{ route('berita.create') }}" class="btn btn-md btn-success mb-3">TAMBAH INFORMASI</a>
                        <div class="table-responsive p-0"> 
                            <table class="table table-hover"> 
                                <thead> 
                                    <tr> 
                                        <th class="text-center">JUDUL INFORMASI</th> 
                                        <th class="text-center">FOTO INFORMASI</th>
                                        <th class="text-center w-50">DESKRIPSI INFORMASI</th>
                                        <th class="text-center">AKSI</th> 
                                    </tr> 
                                </thead> 
                                <tbody> @forelse ($berita as $item) 
                                    <tr> 
                                        <td class="text-center">{{ $item->judul }}</td> 
                                        <td class="text-center"><img src="{{ asset('storage/' . $item->image) }}" alt="Gambar Berita" class="rounded" width="200px" height="auto" style="max-height: 200px;"></td>
                                        <td class="text-center w-50">{{ \Illuminate\Support\Str::words($item->deskripsi, $words = 40, $end = '...') }}</td>
                                        <td class="text-center"> 
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('berita.destroy', $item->id) }}" method="POST"> 
                                                <a href="{{ route('berita.edit', $item->id) }}" class="btn btn-sm btn-primary">EDIT</a> 
                                                @csrf 
                                                @method('DELETE') 
                                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button> 
                                            </form> 
                                        </td>
                                    </tr> 
                                    
                                    @empty 
                                    <div class="alert alert-danger"> Data Informasi belum tersedia </div> 
                                    @endforelse 
                                </tbody> 
                            </table> 
                        </div>
                        <div class="d-flex">
                            <div class="mx-auto">
                                {{$berita->links("pagination::bootstrap-4")}}
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