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
            <h1>Manufactures</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Manufactures</li>
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
          <h3 class="card-title">Manufactures</h3>

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
                  </tr>
              </thead>
              <tbody>
                  @foreach($manufactures as $row)
                  <tr>
                      <td>{{$row->manu_id}}</td>
                      <td><a>{{$row->manu_name}}</a><br/></td>
                      <td class="project-actions text-right">
                        <form class="btn btn-info btn-sm" method="POST" action="edit/{{$row->manu_id}}" onsubmit="return confirm('Bạn Có Muốn Xóa Không?')">
                         
                          @csrf
                          <i class="fas fa-pencil-alt">
                              </i>
                          <button type="submit">Edit</button>
                        </form>
                          <form class="btn btn-danger btn-sm" method="POST" action="delete/{{$row->manu_id}}" onsubmit="return confirm('Bạn Có Muốn Xóa Không?')">
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