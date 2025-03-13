@extends('layouts.app')
@section('content')

<div id="all">


    <!-- Main Content -->
    <div id="content" class="site-content">
        <!-- Breadcrumb -->
        <div id="breadcrumb">
            
                <h2 class="title">Categorie</h2>
           
        </div>

        <div class="container">
            <div class="contact-page">

                <div class="contact-form form">
                    <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
                    @csrf    
                    <div class="form-group row">
                            <div class="col-md-6">
                                <input type="text" name="categorie" placeholder="categorie">
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="file" name="image">
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" class="btn btn-primary" value="Enregistrer">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>


@endsection