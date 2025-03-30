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
                <h3 class="card-title">Testimonial</h3>
                <a href="{{url('admin/testimonial/create')}}" class="btn btn-primary float-right">Create</a>
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
                      <th>Country Name</th>
                      <th>Name</th>
                      <th>image</th>
                      <th>Designation</th>
                      <th>Comment heading</th>
                      <!-- <th>Comment content</th> -->
                      <th>Rating</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $row)
                    <tr>
                     <td>{{$row->country}}</td>
                     <td>{{$row->name}}</td>
                     <td><img src="{{ URL::to('/') }}/uploads/testimonials/{{ $row->image }}" alt="" class="img-responsive" width="80px" /></td>
                     <td>{{$row->designation}}</td>
                     <td>{{$row->comment_head}}</td>
                     <!-- <td>{!!$row->comment_content!!}</td> -->
                     <td>{{$row->rating}}</td>
                     <td>{{$row->status}}</td>
                     <td style="min-width:100px">
                        <a href="{{route('testimonial-edit', ['id'=>$row->id]) }}" class="btn bg-gradient-primary btn-sm"><i class="fas fa-edit"></i></a>
                        <button form="resource-delete-{{$row->id}}" class="btn bg-gradient-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        <form id="resource-delete-{{$row->id}}" action="{{ route('testimonial-destroy', ['id'=>$row->id]) }}" style="display: inline-block;" onSubmit="return confirm('Are you sure you want to delete this item?');" method="POST">
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
