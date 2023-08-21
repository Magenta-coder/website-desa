@extends('dashboard') 

@section('content') 
<div class="content-header"> 
    <div class="container-fluid"> 
        <div class="row mb-2"> 
            <div class="col-sm-6"> 
                <h1 class="m-0">Edit Profile</h1> 
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
                        <form action="{{ route('jabatan.update',$jabatan->id) }}" method="POST" enctype="multipart/form-data"> 
                            @method('PUT')
                            @csrf 
                            <div class="form-row"> 
                                <div class="form-group col-md-12"> 
                                    <label class="font-weight-bold">Nama Profile</label> 
                                    <input type="text" class="form-control 
                                    @error('nama') is-invalid 
                                    @enderror" name="nama" value="{{ $jabatan->nama }}" placeholder="Masukkan Nama"> 
                                    @error('nama') 
                                    <div class="invalid-feedback"> {{ $message }} </div> 
                                    @enderror 
                                </div> 
                            </div>
                            
                            <div class="form-row"> 
                                <div class="form-group col-md-12"> 
                                    <label class="font-weight-bold">Jabatan Profile</label> 
                                    <input type="text" class="form-control 
                                    @error('jabatan') is-invalid 
                                    @enderror" name="jabatan" value="{{ $jabatan->jabatan }}" placeholder="Masukkan Jabatan"> 
                                    @error('jabatan') 
                                    <div class="invalid-feedback"> {{ $message }} </div> 
                                    @enderror 
                                </div> 
                            </div> 
                            
                            <div class="form-row"> 
                                <div class="form-group col-md-12"> 
                                    <label class="font-weight-bold">Foto Profile</label> 
                                    <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}" placeholder="Masukkan Foto"> @error('foto') 
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