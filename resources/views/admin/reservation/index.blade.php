@extends('layout.master')

@section('title','Reservation')

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
                <div class="table-responsive">
                    <table id="table" class="table table-striped table-bordered" style="width:100%">
                        <thead class="text-primary">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Time</th>
                            <th>Message</th>
                            <th>Status</th>
                        </thead>
                        <tbody>
                            @foreach($Reservation as $rst)
                            <tr>
                                <td>{{$rst->id}}</td>
                                <td>{{$rst->name}}</td>
                                <td>{{$rst->phone}}</td>
                                <td>{{$rst->email}}</td>
                                <td>{{$rst->dateandtime}}</td>
                                <td>{{$rst->message}}</td>
                                <td align="center">
                                    @if($rst->status == true)
                                    <span class="badge badge-primary">Confirmed</span>
                                    @else
                                    <span class="badge badge-danger">not Confirmed</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
				</div>
            </form>
        </div>
    </div>
</section>
@endsection