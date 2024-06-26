@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Gudang</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Gudang</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('admin.gudang.update', ['id'=>$data->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                  <!-- left column -->
                  <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Form Edit Gudang</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form>
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputNama1">Nama</label>
                            <input type="text" class="form-control" id="exampleInputNama1" value="{{ $data->name }}" name="nama" placeholder="Enter Name">
                            @error('nama')
                                <small>{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputstock1">Stock</label>
                            <input type="number" class="form-control" name="stock" value="{{ $data->stock }}" id="exampleInputstock1" placeholder="Enter stock">
                            @error('stock')
                                <small>{{ $message }}</small>
                            @enderror
                          </div>
                        </div>
                        <!-- /.card-body -->
        
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                    </div>
                    <!-- /.card -->
        
                  </div>
                  <!--/.col (left) -->
                </div>

            </form>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
    <!-- /.content -->
</div>
@endsection