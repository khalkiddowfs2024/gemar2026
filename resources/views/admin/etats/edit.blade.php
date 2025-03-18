@extends('layouts_admin.app')
@section('content')
<div class="content-body container">
    <div class="contact-form form">
        <form action="{{route('admin_etats.update',$etat->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">

                <div class="col-md-6">
                    <label for="etat">Etat</label>
                    <input type="text" class="form-control input-rounded" name="etat" value="{{$etat->etat}}">
                </div>
                <br>
                <div class="col-md-6">
                    <label for="color">Color</label>
                    <input type="color" class="form-control input-rounded" name="color" value="{{$etat->color}}">
                </div>
            </div>

            <div class="form-group text-start">
                <input type="submit" class="btn btn-primary" value="Enregistrer">
            </div>

           
        </form>
    </div>
</div>
@endsection