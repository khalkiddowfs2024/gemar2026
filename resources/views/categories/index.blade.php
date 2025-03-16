@extends('layouts_admin.app')
@section('content')


<div id="all">
    <!-- Main Content -->
    <div id="content" class="site-content">
        <!-- Breadcrumb -->
        <div class="row">

            <!-- Page Content -->
            <div id="center-column" class="col-lg-12 col-md-12">
                <div class="product-category-page">
                    <a href="{{route('categories.create')}}" class="btn btn-success">Ajouter</a>

                    <div class="page-cart">
                        <div class="table-responsive">
                            <table class="cart-summary table table-bordered">
                                <thead>
                                    <tr>

                                        <th class="width-80 text-center">Image</th>
                                        <th>Categorie</th>
                                        <th class="width-100 text-center">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($categories as $categorie)
                                    
                                    <tr>
                                        <td>
                                            <a href="product-detail-left-sidebar.html">
                                                <img width="80" alt="Product Image" class="img-responsive" src="{{asset('storage/'.$categorie->image)}}">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="product-detail-left-sidebar.html" class="product-name">{{$categorie->categorie}}</a>
                                        </td>
                                        <td>
                                            
                                            <a href="{{route('categories.edit',2)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                            <form action="{{route('categories.destroy',$categorie->id)}}" method="POST" style="display: inline-block;">
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
    </div>
</div>
@endsection