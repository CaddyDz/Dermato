@extends('layouts.master')

@section('content')
<section class="inner-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>{{ $category->name }}</h1>
            </div>
            @if($category->image)
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <img src="{{ secure_asset("storage/$category->image") }}" alt="Image" class="margin-bottom">
                </div>
            @endif
        </div>
    </div>
</section>
<!-- end inner header -->
@if(count($category->services) && ($category->id != 3))
<section class="inner-content" style="padding-bottom:0;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 margin-bottom">
                <h1 class="title-bottom-line"><strong>{{ $category->name }}</strong></h1>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h3><strong>Certains de nos services</strong></h3><br>
                <ul>
                    @foreach($category->services as $service)
                        <li>
                            <a href="{{ route('service', ['category' => $category, 'service' => $service]) }}">
                                {{ $service->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- end row -->
    </div>
</section>
@endif
<section class="boxed-image-feature">
    <div class="container" style="position:relative; z-index:2;">
        <div class="row">
            @foreach($category->services as $service)
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="content-box">
                    <div class="thumb">
                        <img src="{{ secure_asset("storage/$service->image") }}" alt="Image">
                    </div>
                    <div class="icon">
                        <img src="images/icon6.png" alt="Image">
                    </div>
                    <h3>{{ $service->name }}</h3>
                    <p>
                        {{ str_limit($service->description, $limit = 70, $end = '...') }}
                    </p>
                    <a href="{{ route('service', ['category' => $category, 'service' => $service]) }}" class="btn-ghost-md">
                        LIRE LA SUITE
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
