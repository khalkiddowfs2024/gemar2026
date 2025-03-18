@extends('layouts_admin.app')
@section('content')
<div class="content-body container">
    <a href="{{route('admin_produits.create')}}" class="btn btn-success col-3">Ajouter</a>
    <br>
    <div class="table-responsive">
        <table class="cart-summary table ">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Designation</th>
                    <th>Prix HT</th>
                    <th>TVA</th>
                    <th>Prix TTC</th>
                    <th>Stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produits as $produit)
                <tr>
                    <td>
                        <a href="product-detail-left-sidebar.html">
                            <img width="80" alt="Product Image" src="{{asset('storage/'.$produit->image)}}">
                        </a>
                    </td>
                    <td>
                        <a href="product-detail-left-sidebar.html" class="product-name">{{$produit->designation}}</a>
                        <br>
                        <p class="">{{$produit->sous_famille->sous_famille}}</p>
                    </td>
                    <td>
                        <a href="product-detail-left-sidebar.html" class="product-name">{{$produit->prix_ht}}</a>
                    </td>
                    <td>
                        <a href="product-detail-left-sidebar.html" class="product-name">{{$produit->tva}}</a>
                    </td>
                    <td>
                        <a href="product-detail-left-sidebar.html" class="product-name">{{$produit->prix_ttc()}}</a>
                    </td>
                    <td>
                        <a href="product-detail-left-sidebar.html" class="product-name">{{$produit->stock}}</a>
                    </td>
                    <td>
                        <a href="{{route('admin_produits.edit',$produit->id)}}" class="btn btn-primary btn-xs" ><i class="fa fa-edit"></i></a>
                        <form action="{{route('admin_produits.destroy',$produit->id)}}" method="POST" omsubmit="return confirm(this);" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
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