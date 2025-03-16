@extends('layouts_admin.app')
@section('content')
<div class="content-body container">
    <div class="contact-form form">
        <form action="{{route('admin_marques.update',$marque->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">

                <div class="col-md-6">
                    <label for="marque">Marque</label>
                    <input type="text" class="form-control input-rounded" name="marque" value="{{$marque->marque}}">
                </div>
            </div>

            <div class="form-group col-md-6">
                <input class="form-control" type="file" id="image" name="image" onchange="previewPicture(this)" accept=".jpg, .png, .gif" >
            </div>

            <div class="form-group text-start">
                <input type="submit" class="btn btn-primary" value="Enregistrer">
            </div>
            <img src="/storage/{{$marque->image}}" alt="" id="picture" style="max-width: 100px; margin-top: 20px;" >

           
        </form>
    </div>
</div>
<script type="text/javascript" >
    // L'image img#image
    var picture = document.getElementById("picture");
     
    // La fonction previewPicture
    var previewPicture  = function (e) {

        // e.files contient un objet FileList
        const [image] = e.files

        // "image" est un objet File
        if (image) {
            // On change l'URL de l'image
            picture.src = URL.createObjectURL(image)
        }
    } 
</script>
@endsection