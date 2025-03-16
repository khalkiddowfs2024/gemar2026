@extends('layouts_admin.app')
@section('content')
<div class="content-body container">
    <div class="contact-form form">
        <form action="{{route('admin_unites.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">

                <div class="col-md-6">
                    <label for="unite">Unite</label>
                    <input type="text" class="form-control input-rounded" name="unite" placeholder="unite">
                </div>
            </div>

            <div class="form-group text-start">
                <input type="submit" class="btn btn-primary" value="Enregistrer">
            </div>
        </form>
    </div>
</div>
@endsection