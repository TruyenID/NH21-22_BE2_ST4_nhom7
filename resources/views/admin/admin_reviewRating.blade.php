@extends('layout_admin')
    @section('content-admin')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Review_Ratings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Review_Ratings</li>
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
          <h3 class="card-title">Review_Ratings</h3>

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
                      <th style="width: 20%"> Post_Id </th>
                      <th style="width: 20%"> Name </th>
                      <th style="width: 20%"> Email </th>
                      <th style="width: 20%"> Phone </th>
                      <th style="width: 20%"> Srat_Rating </th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($review_ratings as $row)
                  <tr>
                      <td>{{$row->id}}</td>
                      <td><a>{{$row->post_id}}</a><br/></td>
                      <td><a>{{$row->name}}</a><br/></td>
                      <td><a>{{$row->email}}</a><br/></td>
                      <td><a>{{$row->phone}}</a><br/></td>
                      <td><a>{{$row->star_rating}}</a><br/></td>
                          <form class="btn btn-danger btn-sm" method="POST" action="deletereview-rating/{{$row->type_id}}" onsubmit="return confirm('Bạn Có Muốn Xóa Không?')">
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
