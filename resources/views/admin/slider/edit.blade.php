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
            
            <form action="/slider/{{$sliders->id}}/update"method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Title</label>
                        <input value="{{$sliders->title}}" name="title" type="text" maxlength="50" class="form-control" id="inputEmail4">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Sub Title</label>
                        <input value="{{$sliders->sub_title}}" name="sub_title" type="text" maxlength="50" class="form-control" id="inputEmail4">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Image</label>
                        <input value="{{$sliders->image}}" name="image" type="file" maxlength="50" class="form-control" id="inputEmail4">
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