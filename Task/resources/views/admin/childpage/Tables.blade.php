@extends('admin.childpage.masterpage')
@section('content')

<!-- Main content -->
<div class="main-content" id="panel">

  <!-- Header -->
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Tables</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tables</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="#" class="btn btn-sm btn-neutral">New</a>
            <a href="#" class="btn btn-sm btn-neutral">Filters</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col">
        <div class="card">
          <!-- Card header -->
          <div class="card-header border-0">
            <h3 class="mb-0">Light table</h3>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
          @if ($message = Session::get('delete'))
                    <div class="alert alert-success alert-block">
                      <strong>{{ $message }}</strong>
                    </div>
                    @endif
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Delete</th>
                  <th scope="col">Edits</th>
                </tr>
              </thead>
              <tbody class="list">
                @foreach($post as $data)
                <tr>
                  <td class="budget">
                    {{$data->id}}
                  </td>
                  <td>
                    {{$data->name}}
                  </td>
                  <td>
                    {{$data->email}}
                  </td>
                  <td>

                    <a href="/admin/delete/{{$data->id}}"><button>Delete</button></a> 
                  
                    
                  </td>
                  <td>
                  <a href="/admin/edit/{{$data->id}}"><button>Update</button></a>
                  </td>
                  <td class="text-right">

                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          @endsection