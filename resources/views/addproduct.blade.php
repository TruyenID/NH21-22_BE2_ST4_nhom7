@extends('layout_admin')
	@section('content-admin')
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Products Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="{{url ('saveproduct') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" id="inputName" class="form-control" name="name" required>
              </div>
              <div class="form-group">
                <label for="inputStatus">Manufactures</label>
                <select id="inputStatus" class="form-control custom-select" name="manu" required>
                  @foreach($manufactures as $row)
                  <option value="{{$row->manu_id}}" selected >{{$row->manu_name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Prototype</label>
                <select id="inputStatus" class="form-control custom-select"  name="type">
                  @foreach($protypes as $row)
                  <option value="{{$row->type_id}}" selected >{{$row->type_name}}</option>
                  @endforeach
                </select>
                <!-- <input type="text" id="inputName" class="form-control" name="type" required> -->
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Price</label>
                <input type="text" id="inputClientCompany" class="form-control"  name="price" required>
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Image</label>
                <input type="file" class="form-control" id="test_input" name="image">
                <button  class="btn btn-success" id="test_button">Check file</button>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script>
                  $(document).ready(function(){
                    $("#test_button").click(function() {
                    var test_value = $("#test_input").val();
                    var extension = test_value.split('.').pop().toLowerCase();
                    if ($.inArray(extension, ['png', 'gif', 'jpeg', 'jpg','jfif']) == -1) {
                    alert("File invalid!, please choose image file");
                    return false;
                    } else {
                    alert("File valid!");
                    return false;
                    }
                    });
                    });
                </script>
              </div>
              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea id="summernote" class="form-control" rows="4"  name="des"></textarea>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Feature</label>
                <input type="text" id="inputClientCompany" class="form-control"  name="feature" required>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <input name="submit" type="submit" value="Create new Product" class="btn btn-success float-right">
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
</x-app-layout>
