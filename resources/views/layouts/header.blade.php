<header>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
                <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="/">
                  <img src="/{{ setting('site.logo') }}" alt="Image" width="90" height="90">
                </a>
            </div>
            <!-- end navbar-header -->
            <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="bs-example-navbar-collapse-1">
                <ul class="social-media hidden-sm">
                    <li><a href="https://www.facebook.com/Dr.Atika.Al.Tubor"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="/"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="/"><i class="ion-social-googleplus"></i></a></li>
                </ul>
                <!-- end social-media -->
                <ul class="nav navbar-nav">
                    <li><a href="/">Acceuil</a></li>
                    @foreach($categories as $category)
                        <li>
                            <a href="{{ url('/' . $category->slug) }}">{{ $category->name }}</a>
                            <ul>
                                @foreach($category->services as $service)
                                <li>
                                    <a href="{{ url($category->slug . '/' . $service->slug) }}">
                                        {{ $service->name }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>                        
                    @endforeach
                    <li><a href="/cabinet">Cabinet</a></li>
                    {{-- <li><a href="faq.html">FAQ</a></li> --}}
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/about">À Propos</a></li>
                </ul>
                <!-- end nav -->
            </div>
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </nav>
    <!-- end navbar -->
</header>
<!-- end header -->
