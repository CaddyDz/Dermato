<section class="appointment">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2>Rendez-vous</h2>
			</div>
			<!-- end col-12 -->
			<form>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<label>Nom du patient</label>
					<input type="text">
				</div>
				<!-- end col-4 -->
				<div class="col-md-4 col-sm-4 col-xs-12">
					<label>Phone number</label>
					<input type="text" id="phone">
				</div>
				<!-- end col-4 -->
				<div class="col-md-4 col-sm-4 col-xs-12">
					<label>E-mail</label>
					<input type="text">
				</div>
				<!-- end col-4 -->
				<div class="col-xs-12">
					<hr>
				</div>
				<!-- end col-12 -->
				<div class="col-md-4 col-sm-6 col-xs-12 date">
					<label>Select date</label>
					<input type="text" class="datepicker" data-date-format="mm/dd/yy" placeholder="mm/dd/yy" maxlength="8">
				</div>
				<!-- end col-3 -->
				<div class="col-md-4 col-sm-6 col-xs-12 department">
					<label>Department</label>
					<select>
          <option>Cardiology</option>
        </select>
				</div>
				<!-- end col-3 -->
				<div class="col-md-4 col-sm-12 col-xs-12 gender">
					<input type="radio" checked>
					<label>Male</label>
					<input type="radio">
					<label>Female</label>
					<input type="submit" value="MAKE IT">
				</div>
				<!-- end col-4 -->
			</form>
			<!-- end form -->
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</section>
<!-- end appointment -->
