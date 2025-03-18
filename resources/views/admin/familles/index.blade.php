@extends('layouts_admin.app')
@section('content')
<div class="content-body container">
    <a href="{{route('admin_familles.create')}}" class="btn btn-success col-3">Ajouter</a>
    <br>
    <div class="table-responsive">
        <table class="cart-summary table ">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Categorie</th>
                    <th>Famille</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($familles as $famille)
                <tr>
                    <td>
                        <a href="product-detail-left-sidebar.html">
                            <img width="80" alt="Product Image" src="{{asset('storage/'.$famille->image)}}">
                        </a>
                    </td>
                    <td>
                        <a href="product-detail-left-sidebar.html" class="product-name">{{$famille->famille}}</a>
                    </td>
                    <td>
                        <a href="product-detail-left-sidebar.html" class="product-name">{{$famille->famille}}</a>
                    </td>
                    <td>
                        <a href="{{route('admin_familles.edit',$famille->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        <form action="{{route('admin_familles.destroy',$famille->id)}}" method="POST" onsubmit="return confirm(this)" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

    </div>
</div>
<script type="application/javascript">
    function confirm(form) {

        alert('Please enter');
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
            }
        });
    }
</script>
@endsection