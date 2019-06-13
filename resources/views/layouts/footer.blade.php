<section class="footer-bar">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2><i class="ion-iphone"></i>{{ setting('site.phone_number') }}</h2>
                <ul>
                    <li><a href="https://www.facebook.com/Dr.Atika.Al.Tubor"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                </ul>
                <!-- end ul -->
                <h4>Suivez-nous sur les réseaux sociaux</h4>
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end footer-bar -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-12 col-xs-12"> <img src="/{{ setting('site.logo') }}" alt="Image" class="pull-left">
                <p class="copyright">Copyright © {{ date('Y') }}, {{ setting('site.title') }}</p>
            </div>
            <!-- end col-2 -->
            {{-- <div class="col-md-4 col-sm-12 col-xs-12">
                <form>
                    <h4>NEWSLETTER</h4>
                    <p>Sed diam nonummy nibh euismod tincidunt !</p>
                    <input type="text" placeholder="Type your e-mail">
                    <input type="submit" value="JOIN US">
                </form>
            </div> --}}
            <!-- end col-4 -->
            <div class="col-md-2 col-sm-4 col-xs-6">
                <h4>Navigation</h4>
                <ul>
                    <li><a href="{{ url('/') }}">Accueil</a></li>
                    <li><a href="{{ url('/cabinet') }}">Cabinet</a></li>
                    <li><a href="{{ url('/contact') }}">Contacter Nous</a></li>
                </ul>
            </div>
            <!-- end col-2 -->
            <div class="col-md-2 col-sm-4 col-xs-6">
                <h4>Nos Service</h4>
                <ul>
                    @foreach($categories as $category)
                        <li>
                            <a href="{{ $category->slug }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- end col-2 -->
            <div class="col-md-2 col-sm-4 col-xs-12">
                <h4>Réseaux Sociaux</h4>
                <ul>
                    <li><a href="https://www.facebook.com/Dr.Atika.Al.Tubor">Facebook</a></li>
                    <li><a href="/">Twitter</a></li>
                    <li><a href="/">Google Plus</a></li>
                    <li><a href="/">Linkedin</a></li>
                </ul>
            </div>
            <!-- end col-2 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</footer>
<!-- end footer -->
