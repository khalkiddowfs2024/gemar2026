@extends('layouts_admin.app')
@section('content')
<div class="content-body container">
    <div class="contact-form form">
        <form action="{{route('admin_sous_familles.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @php
                $familles=App\Models\Famille::all();
            @endphp
            <div class="form-group">

                <div class="col-md-6">
                    <label for="famille_id">Famille</label>
                    <select name="famille_id" id="famille_id" class="form-control input-rounded">
                        @foreach($familles as $famille)
                        <option value="{{$famille->id}}">{{$famille->famille}}</option>
                        @endforeach

                    </select>
                </div>
            </div>
            <div class="form-group">

                <div class="col-md-6">
                    <label for="sous_famille">Sous_famille</label>
                    <input type="text" class="form-control input-rounded" name="sous_famille" placeholder="sous_famille">
                </div>
            </div>

            <div class="form-group col-md-6">
                <input class="form-control" type="file" id="image" name="image" onchange="previewPicture(this)" accept=".jpg, .png, .gif" required>
            </div>

            <img src="" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
            <div class="form-group text-start">
                <input type="submit" class="btn btn-primary" value="Enregistrer">
            </div>
            <img src="#" alt="" id="picture" style="max-width: 200px; margin-top: 20px;">
        </form>
    </div>
</div>
<script type="text/javascript">
    // L'image img#image
    var picture = document.getElementById("picture");

    // La fonction previewPicture
    var previewPicture = function(e) {

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