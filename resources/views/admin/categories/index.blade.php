@extends('layouts_admin.app')
@section('content')
<div class="content-body container">
    <a href="{{route('admin_categories.create')}}" class="btn btn-success col-3">Ajouter</a>
    <div class="table-responsive">
        <table class="cart-summary table ">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Categorie</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $categorie)
                <tr>
                    <td>
                        <a href="product-detail-left-sidebar.html">
                            <img width="80" alt="Product Image" src="{{asset('storage/'.$categorie->image)}}">
                        </a>
                    </td>
                    <td>
                        <a href="product-detail-left-sidebar.html" class="product-name">{{$categorie->categorie}}</a>
                    </td>
                    <td>
                        <a href="{{route('admin_categories.edit',$categorie->id)}}" class="btn btn-primary"><i class="bi bi-pencil"></i></a>
                        <form action="{{route('admin_categories.destroy',$categorie->id)}}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

    </div>
</div>
@endsection