@extends('admin.layouts.app')
@section('content')
    <!-- Main content -->

    <section class="content">
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-12">
          @if(session()->has('status'))
            <div class="alert alert-success">
              {{ session()->get('status') }}
            </div>
          @endif
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">About Us</h3>
                <a href="{{url('admin/about/create')}}" class="btn btn-primary float-right">Create</a>
              </div>
              @if(Session::has('flash_success'))
                  <div class="alert alert-success m-2">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ Session::get('flash_success') }}
                  </div>
              @endif
             <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Designation</th>
                      <th>image</th>
                      <th>About owner</th>
                      <th>About head</th>
                      <th>About content</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $row)
                    <tr>
                      <td>{{$row->name}}</td>
                      <td>{{$row->designation}}</td>
                      <td><img src="{{ URL::to('/') }}/uploads/abouts/{{ $row->image }}" alt="" class="img-responsive" width="100%" /></td>
                      <td>{{$row->about_owner}}</td>
                      <td>{{$row->about_head}}</td>
                      <td>{!!$row->about_content!!}</td>
                      <td>{{$row->status}}</td>
                      <td>
                        <a href="{{route('about-edit', ['id'=>$row->id]) }}" class="btn"><i class="fas fa-edit" style="color: blue;"></i></a>
                        <button form="resource-delete-{{$row->id}}"><i style="color: red;" class="fas fa-trash-alt"></i></button>
                        <form id="resource-delete-{{$row->id}}" action="{{ route('about-destroy', ['id'=>$row->id]) }}" style="display: inline-block;" onSubmit="return confirm('Are you sure you want to delete this item?');" method="POST">
                          @csrf
                          @method('POST')
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <br>
                {{ $data->links('pagination::bootstrap-4') }}
              </div>
              <!-- /.card-body -->

        </div>
        <!-- /.card -->
        </div>
       </div>
      </div><!-- /.container-fluid -->
    </section>
@endsection
