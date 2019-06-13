@extends('layouts.master')

@section('content')
<section class="inner-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>À Propos de Dermatologue</h1>
            </div>
        </div>
    </div>
</section>
@include('partials.video')
@include('partials.cabinet')
@include('partials.doctor')
@endsection
