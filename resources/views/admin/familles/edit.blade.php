@extends('layouts_admin.app')
@section('content')
<div class="content-body container">
    <div class="contact-form form">
        <form action="{{route('admin_familles.update',$famille->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @php
            $categories=App\Models\Categorie::all();
            @endphp
            <div class="col-md-6">
                    <label for="categorie_id">Categorie</label>
                    <select name="categorie_id" id="categorie_id" class="form-control input-rounded">
                        @foreach($categories as $categorie)
                        <option value="{{$categorie->id}}" {{$categorie->id==$famille->categorie_id?'selected':''}}>{{$categorie->categorie}}</option>
                        @endforeach

                    </select>
                </div>
            <div class="form-group">

                <div class="col-md-6">
                    <label for="famille">Famille</label>
                    <input type="text" class="form-control input-rounded" name="famille" value="{{$famille->famille}}">
                </div>
            </div>

            <div class="form-group col-md-6">
                <input class="form-control" type="file" id="image" name="image" onchange="previewPicture(this)" accept=".jpg, .png, .gif" >
            </div>

            <div class="form-group text-start">
                <input type="submit" class="btn btn-primary" value="Enregistrer">
            </div>
            <img src="/storage/{{$famille->image}}" alt="" id="picture" style="max-width: 100px; margin-top: 20px;" >

           
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