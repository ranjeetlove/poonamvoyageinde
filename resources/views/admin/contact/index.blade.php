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
                <h3 class="card-title">Contact Us List</h3>
                <!-- <a href="{{url('admin/blog/create')}}" class="btn btn-primary float-right">Create</a> -->
              </div>
              @if(Session::has('flash_success'))
                  <div class="alert alert-success m-2">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ Session::get('flash_success') }}
                  </div>
              @endif
             <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>S.No.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Whatsapp</th>
                      <th>Subject</th>
                      <th>Message</th>
                      <th>Date Time</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $index => $row)
                    <tr>
                      <td>{{$index+1}}.</td>
                      <td>{{$row->name}}</td>
                      <td>{{$row->email}}</td>
                      <td>{{$row->mobile}}</td>
                      <td>{{$row->whatsapp}}</td>
                      <td>{{$row->subject}}</td>
                      <td>{{$row->message}}</td>
                      <!-- <td>
                        <span class="short-message">{{ Str::limit($row->message, 20) }}</span>
                        @if(strlen($row->message) > 20)
                            <a href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#messageModal" data-message="{{ $row->message }}" class="read-more"><small>Read More</small></a>
                        @endif
                      </td> -->
                      <td>{{$row->created_at}}</td>
                      <td>
                        <button class="btn bg-gradient-danger btn-sm" form="resource-delete-{{$row->id}}"><i style="color: white;" class="fas fa-trash-alt"></i></button>
                        <form id="resource-delete-{{$row->id}}" action="{{ route('contact-delete', ['id'=>$row->id]) }}" style="display: inline-block;" onSubmit="return confirm('Are you sure you want to delete this item?');" method="POST">
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

  <!-- Bootstrap Modal -->
  <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="messageModalLabel">Full Message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modalMessage">
                    <!-- Full message will be inserted here -->
                </div>
            </div>
        </div>
    </div>