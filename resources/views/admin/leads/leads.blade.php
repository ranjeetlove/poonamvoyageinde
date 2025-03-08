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
                <h3 class="card-title">Contact Details</h3>
                <h class="float-right"><strong>Date Time:</strong> {{$data->created_at}}</h5>
                <!-- <a href="{{url('admin/blog/create')}}" class="btn btn-primary float-right">Create</a> -->
              </div>
              @if(Session::has('flash_success'))
                  <div class="alert alert-success m-2">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ Session::get('flash_success') }}
                  </div>
              @endif
             <!-- /.card-header -->
              <div class="card-body contact-details-page">
               
               <h6><b>Name :</b> {{$data->name}}</h6> 
               <h6><b>Email :</b> {{$data->email}}</h6> 
               <h6><b>Mobile :</b> {{$data->mobile}}</h6> 
               <h6><b>Whatsapp :</b> {{$data->whatsapp}}</h6> 
               <h6><b>Subject :</b> {{$data->subject}}</h6> 
               <h6><b>Message :</b> {{$data->message}}</h6> 
              </div>
              <!-- /.card-body -->

        </div>
        <!-- /.card -->
        </div>
       </div>
      </div><!-- /.container-fluid -->
    </section> 
  
@endsection      