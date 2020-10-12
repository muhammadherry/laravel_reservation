@extends('layout.master')

@section('title','Slider')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
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
<section class="content">
    <!-- Support Request -->
    <div class="card card-secondary">
        <div class="card-body">
            <form > 
                <div align="right">
                    <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#staticBackdrop">
                         Button Add
                    </button> 
                </div>
                <div class="table-responsive card-content">
                    <table id="table" class="table table-striped table-bordered" style="width:100%">
                        <thead class="text-primary">
                            <th>ID</th>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Image</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($sliders as $sdr)
                            <tr>
                                <td>{{$sdr->id}}</td>
                                <td>{{$sdr->title}}</td>
                                <td>{{$sdr->sub_title}}</td>
                                <td>{{$sdr->image}}</td>
                                <td>{{$sdr->created_at}}</td>
                                <td>{{$sdr->updated_at}}</td>
                                <td>
                                    <a href="/slider/{{$sdr->id}}/edit" class="btn btn-outline-success">Edit</a>
                                    <a href="/slider/{{$sdr->id}}/destroy" class="btn btn-outline-danger" onclick="return confirm('Yakin nih di hapus ?')">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
				</div>
            </form>
        </div>
    </div>
    <!-- Modal-->
    <div class="modal fade " id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add/Edit Workflow</h5>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="slider/create"method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="inputEmail4">Title</label>
                            <input name="title" type="text" maxlength="10" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail4">Sub Title</label>
                            <input name="sub_title" type="text" maxlength="50" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail4">Image</label>
                            <input name="image" type="file" maxlength="50" placeholder="ReadOnly"class="form-control" id="inputEmail4"ReadOnly>
                        </div>            
                        <div align="right">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>                           
            </div>
        </div>
    </div> 
</section>
@endsection

@push('scripts')
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready( function () 
        {
            $('#table').DataTable();
        } );
</script>
@endpush