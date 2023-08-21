@extends('dashboard') 

@section('content') 
<div class="content-header"> 
    <div class="container-fluid"> 
        <div class="row mb-2"> 
            <div class="col-sm-6"> 
                <h1 class="m-0">Edit Informasi</h1> 
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
                        <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data"> 
                            @method('PUT')
                            @csrf 
                            <div class="form-row"> 
                                <div class="form-group col-md-12"> 
                                    <label class="font-weight-bold">Judul Informasi</label> 
                                    <input type="text" class="form-control 
                                    @error('judul_berita') is-invalid 
                                    @enderror" name="judul_berita" value="{{ $berita->judul }}" placeholder="Masukkan Judul Informasi"> 
                                    @error('judul_berita') 
                                    <div class="invalid-feedback"> {{ $message }} </div> 
                                    @enderror 
                                </div> 
                            </div> 
                            
                            <div class="form-row"> 
                                <div class="form-group col-md-12"> 
                                    <label class="font-weight-bold">Foto Informasi</label> 
                                    <input type="file" class="form-control @error('foto_berita') is-invalid @enderror" name="foto_berita" value="{{ $berita->gambar }}" placeholder="Masukkan Foto Informasi"> @error('foto_berita') 
                                    <div class="invalid-feedback"> {{ $message }} </div> 
                                    @enderror
                                </div> 
                                
                                <div class="form-group col-md-12"> 
                                    <label class="font-weight-bold">Deskripsi Informasi</label>
                                    <textarea class="form-control @error('deskripsi_berita') is-invalid @enderror" rows="7" name="deskripsi_berita" placeholder="Masukkan Deskripsi Informasi">{{ $berita->deskripsi }}</textarea>
                                    @error('deskripsi_berita')
                                    <div class="invalid-feedback"> {{ $message }} </div> 
                                    @enderror 
                                </div> 
                            </div> 
                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button> 
                        </form> 
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