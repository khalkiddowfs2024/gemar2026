@extends('layouts_admin.app')
@section('content')
<div class="content-body container">
    <a href="{{route('admin_sous_familles.create')}}" class="btn btn-success col-3">Ajouter</a>
    <br>
    <div class="table-responsive">
        <table class="cart-summary table ">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Famille</th>
                    <th>Sous Famille</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sous_familles as $sous_famille)
                <tr>
                    <td>
                        <a href="product-detail-left-sidebar.html">
                            <img width="80" alt="Product Image" src="{{asset('storage/'.$sous_famille->image)}}">
                        </a>
                    </td>
                    <td>
                        <a href="product-detail-left-sidebar.html" class="product-name">{{$sous_famille->famille->famille}}</a>
                    </td>
                    <td>
                        <a href="product-detail-left-sidebar.html" class="product-name">{{$sous_famille->sous_famille}}</a>
                    </td>
                    <td>
                        <a href="{{route('admin_sous_familles.edit',$sous_famille->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        <form action="{{route('admin_sous_familles.destroy',$sous_famille->id)}}" method="POST" omsubmit="return confirm(this);" style="display: inline-block;">
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