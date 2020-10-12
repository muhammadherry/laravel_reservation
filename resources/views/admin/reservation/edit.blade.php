@extends('layout.master')

@section('title','Slider')

@push('css')

@endpush

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right"></ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

    <!-- Main content -->
<section class="content">
    <!-- Support Request -->
    <div class="card card-secondary">
        <div class="card-header">
          <h3 class="card-title">Edit</h3>
          
        </div>
        <div class="card-body">
            
            <form action="/reservation/{id}/update"method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Name</label>
                        <input value="{{$Reservation->name}}" name="name" type="text" maxlength="20" class="form-control" id="inputEmail4">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Phone</label>
                        <input value="{{$Reservation->phone}}" name="phone" type="text" maxlength="13" class="form-control" id="inputEmail4">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">E-mail</label>
                        <input value="{{$Reservation->email}}" name="email" type="email" maxlength="25" class="form-control" id="inputEmail4">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Message</label>
                        <input value="{{$Reservation->message}}" name="message" type="text" maxlength="50" class="form-control" id="inputEmail4">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Date Time</label>
                        <input value="{{$Reservation->dateandtime}}"class="form-control reserve-form empty iconified" name="dateandtime" type="text" id="datetimepicker1">
                    </div>
                    <div class="form-group ">
                        <label for="inputEmail4">Status</label>
                        <select name="status" class="form-control" id="exampleFormControlSelect1">
                            <option value="1">Active</option>
                            <option value="0">Non-Active</option>
                        </select>
                    </div>
                </div>

                
                <div align="right">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
		</div>
    </div> 
</section>
@endsection

@push('scripts')

@endpush