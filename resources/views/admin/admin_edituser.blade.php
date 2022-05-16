@extends('layout_admin')
	@section('content-admin')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">home</a></li>
              <li class="breadcrumb-item active">User Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        @foreach($users as $row)
      <form action="{{url ('update_datauser/'.$row->id) }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      @method('PUT')
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
                <label for="inputName">UserName</label>
                <input type="text" id="inputName" class="form-control" value="{{$row->name}}" name="username" required>
              </div>
              <div class="form-group">
              <label for="inputClientCompany">Email</label>
                <input type="email" id="inputClientCompany" class="form-control" value="{{$row->email}}"  name="email"  required>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">PassWord</label>
                <input type="password" id="inputClientCompany" class="form-control" value="{{$row->password}}" name="password"  required>
              </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        @endforeach
      <div class="row">
        <div class="col-12">
          <input name="submit" type="submit" value="Edit User" class="btn btn-success float-right">
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
