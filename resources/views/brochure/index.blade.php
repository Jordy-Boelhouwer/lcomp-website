@extends('layouts.app')

@section('description', 'Bekijk onze folder voor alle aanbiedingen!')

@section('keywords', 'folder')

@section('title', 'Folder')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <iframe style="height:100%;width:100%;border:none;" src="http://lcomp.nl/folders/back2school/"></iframe>
                </div>
            </div>
        </div>
    </section>
@include('partials/footer')
@endsection
