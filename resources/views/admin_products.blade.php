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
            <h1>Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
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
          <h3 class="card-title">Products</h3>

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
                      <th style="width: 1%">
                          ID
                      </th>
                      <th style="width: 20%"> Name </th>
                      <th style="width: 15%">Image </th>
                      <th>Price</th>
                      <th style="width: 7%">Manufacture</th>
                      <th style="width: 7%">Protype</th>
                      <th style="width: 30%">Decription</th>
                      <th style="width: 20%">Action</th>
                  </tr>
              </thead>
              <tbody>
				  	@foreach($Allproducts as $row)
                  <tr>
                      <td>{{ $row->id}}</td>
                      <td><a>{{ $row->name}}</a><br/></td>
                      <td><img src="assets/img/{{ $row->image}}" alt="loi" style="width:80px" ></td>
                      <td class="project_progress"> {{ number_format ($row->price) }} VND</td>
                      <td class="project-state"></td>
                      <td class="project-state"></td>
                      <td class="project-state">{{ $row->description}}</td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="admin_editproduct/{{$row->id}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          </form>
                          <form class="btn btn-danger btn-sm" method="POST" action="delete/{{$row->id}}" onsubmit="return confirm('Bạn Có Muốn Xóa Không?')">
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
</x-app-layout>