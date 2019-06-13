@extends('layouts.master') 
@section('content')
@if(isset($service))
<section class="inner-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                @if($service->category_id != 3)
                    <h1>Service du bien-être et de la santé.</h1>
                @else
                    <h1>{{ $service->name }}</h1>
                @endif
            </div>    
        </div>
    </div>
</section>
{{-- @if($service->category_id == 3)
<section class="inner-content" style="padding-bottom:0;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 margin-bottom">
                <h1 class="title-bottom-line"><strong>{{ $service->name }}</strong></h1>
            </div>
        </div>
    </div>
</section>
@endif --}}
<section class="inner-content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 margin-bottom">
                @if($service->category_id != 3 && $service->category_id != NULL)
                    <h1 class="title-bottom-line"><strong>Description</strong> {{ $service->name }}</h1>
                @endif
                <br><hr>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    @if($service->image)
                        <img src="/{{ $service->image }}" alt="Image" class="margin-bottom">
                    @endif
                    @if($service->images)
                        @foreach(json_decode($service->images) as $image)
                            <img src="/{{ $image }}" alt="Image" class="margin-bottom">
                        @endforeach
                    @endif
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {{ $service->description }} <br>
                    @if($service->body)
                        @if($service->category_id != null)
                            <h1 class="title-bottom-line"><strong>Plus de détails</strong></h1>
                        @endif
                    {!! $service->body !!} 
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@endsection
