@extends('layouts.master')

@section('content')
<section class="inner-header">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>CONTACTEZ NOUS</h1>
			</div>
		</div>
	</div>
</section>
<!-- end inner header -->
<section class="inner-content">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-8 col-xs-12">
				<div class="left-side">
					<h1 class="title-bottom-line"><strong>Formulaire de </strong>contact</h1>
					<p>Envoyez-nous un message à propos de votre préoccupation</p>
					<form id="contact-form" action="/contact" method="POST">
						@csrf
						<input type="text" name="name" id="name" placeholder="Votre Nom" required>
						<input type="text" name="surname" id="surname" placeholder="Nom de Famille" required>
						<input type="text" name="phone" id="phone" placeholder="Numéro Téléphone" required>
						<input type="text" name="email" id="email" placeholder="E-mail" required>
						<input type="text" name="subject" id="subject" placeholder="Quelle est votre raison de contact" class="subject" required>
						<textarea name="message" id="message" placeholder="Votre Message" required></textarea>
						<input type="submit" name="submit" value="ENVOIE-LE">
					</form>
					@if($flash = session('success'))
					<div id="success">
						<p>Votre message a bien été envoyé! Nous serons en contact dès que possible.</p>
					</div>
					@elseif($flash = session('errors'))
					<div id="error">
						<p>Quelque chose s'est mal passé, essayez de rafraîchir et de soumettre à nouveau le formulaire.</p>
					</div>
					@endif				
				</div>
			</div>
			<!-- end left side -->
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="side-bar">
					<h1 class="title-bottom-line"><strong>SIÈGE </strong> Cabinet</h1>
					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Emplacement de cabinet</a> </h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse in">
								<div class="panel-body gray-bg">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.848367319451!2d3.0853908149538682!3d36.72620277956187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fade2487f8c7d%3A0x58cb282a60bc2c88!2sDermatologue+Alger!5e0!3m2!1sen!2sdz!4v1530884153669"
									 frameborder="0" style="width:100%; height:140px;border:0" allowfullscreen></iframe>
									<p><strong>Cabinet Dr Altubor</strong></p>
									{{--  Kouba - Alger  --}}
									<p>Coopérative Abbess Laghrour<br> Kouba
									</p>
									<p>En face L'Hôpital de Kouba</p>
									<h3>{{ setting('site.phone_number') }}</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end right side -->
		</div>
		<!-- end row -->
	</div>
</section>
<!-- end section -->
@endsection
