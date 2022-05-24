@extends('layout_admin')
	@section('content-admin')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Billing</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Billings</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Billings</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 10%">
                          ID
                      </th>
                      <th style="width: 20%"> Name </th>
                      <th style="width: 20%"> Email </th>
                      <th style="width: 20%"> Address </th>
                      <th style="width: 20%"> Phone </th>
                      <th style="width: 20%"> Say SomeThin </th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($billings as $row)
                  <tr>
                      <td>{{$row->id}}</td>
                      <td><a>{{$row->name}}</a><br/></td>
                      <td><a>{{$row->email}}</a><br/></td>
                      <td><a>{{$row->address}}</a><br/></td>
                      <td><a>{{$row->phone}}</a><br/></td>
                      <td><a>{{$row->saysomething}}</a><br/></td>
                      <td class="project-actions text-right">
                      <a class="btn btn-info btn-sm" href="admin_editmanufacture/{{$row->id}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <form class="btn btn-danger btn-sm" method="POST" action="deletebilling/{{$row->id}}" onsubmit="return confirm('Bạn Có Muốn Xóa Không?')">
                          @method('DELETE')
                          @csrf
                          <i class="fas fa-trash">
                              </i>
                          <button type="submit">Delete</button>
                        </form>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection