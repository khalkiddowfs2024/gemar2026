@extends('layouts_admin.app')
@section('content')
<div class="content-body container">
    <div class="contact-form form">
        <form action="{{route('admin_sous_familles.update',$sous_famille->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @php
                $familles=App\Models\Famille::all();
            @endphp
            <div class="col-md-6">
                    <label for="famille_id">Famille</label>
                    <select name="famille_id" id="famille_id" class="form-control input-rounded">
                        @foreach($familles as $famille)
                        <option value="{{$famille->id}}" {{$famille->id==$famille->famille_id?'selected':''}}>{{$famille->famille}}</option>
                        @endforeach

                    </select>
                </div>
            <div class="form-group">

                <div class="col-md-6">
                    <label for="famille">Sous Famille</label>
                    <input type="text" class="form-control input-rounded" name="sous_famille" value="{{$sous_famille->sous_famille}}">
                </div>
            </div>

            <div class="form-group col-md-6">
                <input class="form-control" type="file" id="image" name="image" onchange="previewPicture(this)" accept=".jpg, .png, .gif" >
            </div>

            <div class="form-group text-start">
                <input type="submit" class="btn btn-primary" value="Enregistrer">
            </div>
            <img src="/storage/{{$sous_famille->image}}" alt="" id="picture" style="max-width: 100px; margin-top: 20px;" >

           
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