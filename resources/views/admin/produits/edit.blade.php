@extends('layouts_admin.app')
@section('content')
<div class="content-body container">
    <div class="contact-form form">
        <form action="{{route('admin_produits.update',$produit->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @php
                $sous_familles=App\Models\SousFamille::all();
                $marques=App\Models\Marque::all();
                $unites=App\Models\Unite::all();
            @endphp
            <div class="form-group">

                <div class="col-md-6">
                    <label for="sous_famille_id">Sous Famille</label>
                    <select name="sous_famille_id" id="sous_famille_id" class="form-control input-rounded">
                        @foreach($sous_familles as $sous_famille)
                        <option value="{{$sous_famille->id}}" {{$sous_famille->id==$produit->sous_famille_id?'selected':''}}>{{$sous_famille->sous_famille}}</option>
                        @endforeach

                    </select>
                    <div class="col-md-6">
                    <label for="marque">Marque</label>
                    <select name="marque_id" id="marque_id" class="form-control input-rounded">
                        @foreach($marques as $marque)
                        <option value="{{$marque->id}}"{{$marque->id==$produit->marque_id?'selected':''}}>{{$marque->marque}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-md-6">
                    <label for="unite_id">Unite</label>
                    <select name="unite_id" id="unite_id" class="form-control input-rounded">
                        @foreach($unites as $unite)
                        <option value="{{$unite->id}}" {{$unite->id==$produit->unite_id?'selected':''}}>{{$unite->unite}}</option>
                        @endforeach

                    </select>
                </div>
                </div>
            </div>
            <div class="form-group">

                <div class="col-md-6">
                    <label for="designation">Designation</label>
                    <input type="text" class="form-control input-rounded" name="designation" value="{{$produit->designation}}">
                </div>
                <div class="col-md-6">
                    <label for="description">Description</label>
                    <input type="text" class="form-control input-rounded" name="description" value="{{$produit->description}}">
                </div>
                <div class="col-md-6">
                    <label for="prix_ht">Prix HT</label>
                    <input type="text" class="form-control input-rounded" name="prix_ht" value="{{$produit->prix_ht}}">
                </div>
                <div class="col-md-6">
                    <label for="tva">TVA</label>
                    <input type="text" class="form-control input-rounded" name="tva" value="{{$produit->tva}}">
                </div>
                <div class="col-md-6">
                    <label for="stock">Stock</label>
                    <input type="text" class="form-control input-rounded" name="stock" value="{{$produit->stock}}">
                </div>
                <div class="col-md-6">
                    <label for="prix_achat_ht">Prix Achat</label>
                    <input type="text" class="form-control input-rounded" name="prix_achat_ht" value="{{$produit->prix_achat_ht}}">
                </div>

            </div>
                <div class="form-group col-md-6">
                    <input class="form-control" type="file" id="image" name="image" onchange="previewPicture(this)" accept=".jpg, .png, .gif" required>
                </div>

            <img src="" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
            <div class="form-group text-start">
                <input type="submit" class="btn btn-primary" value="Enregistrer">
            </div>
            <img src="/storage/{{$produit->image}}" alt="" id="picture" style="max-width: 200px; margin-top: 20px;">
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