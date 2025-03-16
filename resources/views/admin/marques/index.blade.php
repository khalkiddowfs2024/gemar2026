@extends('layouts_admin.app')
@section('content')

<a href="{{route('admin_marques.create')}}" class="btn btn-success col-3">Ajouter</a>
<br>

<!-- begin row -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-statistics">
            <div class="card-body">
                <div class="datatable-wrapper table-responsive">
                    <table id="datatable" class="display compact table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Marque</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($marques as $marque)
                            <tr>
                                <td>
                                    <a href="product-detail-left-sidebar.html">
                                        <img width="80" alt="Product Image" src="{{asset('storage/'.$marque->image)}}">
                                    </a>
                                </td>
                                <td>
                                    <a href="product-detail-left-sidebar.html" class="product-name">{{$marque->marque}}</a>
                                </td>
                                <td>
                                    <a href="{{route('admin_marques.edit',$marque->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                    <form action="{{route('admin_marques.destroy',$marque->id)}}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>


                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection