@extends('layouts_admin.app')
@section('content')
<div class="content-body container">
    <a href="{{route('admin_familles.create')}}" class="btn btn-success col-3">Ajouter</a>
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
                        <a href="product-detail-left-sidebar.html" class="product-name">{{$famille->categorie->categorie}}</a>
                    </td>
                    <td>
                        <a href="product-detail-left-sidebar.html" class="product-name">{{$famille->famille}}</a>
                    </td>
                    <td>
                        <a href="{{route('admin_familles.edit',$famille->id)}}" class="btn btn-primary"><i class="bi bi-pencil"></i></a>
                        <form action="{{route('admin_familles.destroy',$famille->id)}}" method="POST" omsubmit="return confirm(this);" style="display: inline-block;">
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
<script>
    function confirm(form) {

        alert('Please enter');
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger"
            },
            buttonsStyling: false
        });
        swalWithBootstrapButtons.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                swalWithBootstrapButtons.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire({
                    title: "Cancelled",
                    text: "Your imaginary file is safe :)",
                    icon: "error"
                });
            }
        });
    }
</script>
@endsection