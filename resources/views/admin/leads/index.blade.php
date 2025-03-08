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
                <h3 class="card-title">All Leads</h3>
                <!-- <a href="{{url('admin/blog/create')}}" class="btn btn-primary float-right">Create</a> -->
              </div>
              @if(Session::has('flash_success'))
                  <div class="alert alert-success m-2">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ Session::get('flash_success') }}
                  </div>
              @endif
             <!-- /.card-header -->
              <div class="table-responsive">
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>S.No.</th>
                      <th>Region</th>
                      <th>Interest</th>
                      <th>Accommodation</th>
                      <th>Budget</th>
                      <th>Children</th>
                      <th>Departure Date</th>
                      <th>Return Date</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Date Time</th>
                      <!-- <th>Action</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $index => $row)
                    <tr>
                      <td>{{$index+1}}.</td>
                      <td>{{$row->region}}</td>
                      <td>{{$row->interest}}</td>
                      <td>{{$row->accommodation}}</td>
                      <td style="min-width:120px">{{$row->budget}}</td>
                      <td>{{$row->children}}</td>
                      <td style="min-width:140px">{{$row->departure_date}}</td>
                      <td style="min-width:120px">{{$row->return_date}}</td>
                      <td>{{$row->email}}</td>
                      <td>{{$row->phone}}</td>
                      <td style="min-width:160px">{{$row->created_at}}</td>
                      <!-- <td style="min-width:100px">
                      
                      </td> -->
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <br>
                {{ $data->links('pagination::bootstrap-4') }}
              </div>
              </div>
              <!-- /.card-body -->

        </div>
        <!-- /.card -->
        </div>
       </div>
      </div><!-- /.container-fluid -->
    </section> 
  
@endsection      
