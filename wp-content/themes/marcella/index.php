 <?php get_header(); ?>
 <div class="row">
 	<div class="col-md-12 Benvenuti">
 		<h1>Siete invitati a Natura in festa</h1>
 		<h4>Qui troverete tutti i dettagli riguardanti la manifestazione </h4>
 	</div>
 </div>


 <!--form begin-->
 <div class="container-fluid">
 	<div class="row text-center">
 		<h1>Contattaci</h1>
 		<h3>Scrivi i tuoi dati negli appositi spazi</h3>
 	</div>
 </div>

 <form class="concas-form">
 	<div class="row">

 		<div class="col-md-6">
 			<div class="form-group">
 				<label for="exampleInputEmail1">Email</label>
 				<input type="email" class="form-control" id="exampleInputEmail1" placeholder=" Digita qui la tua Email" required autofocus="">
 			</div>
 			<div class="form-group">
 				<label for="exampleInputPassword1"> Password</label>
 				<input type="password" class="form-control" id="exampleInputPassword1" placeholder=" Digita qui la tua Password" required>
 			</div>
 		</div>

 		<div class="col-md-6">
 			<label for="exampleInputEmail1">Scrivi un commento</label>
 			<textarea class="form-control" rows="3" required></textarea>
 		</div>

 	</div>
 	<div class="row text-center">
 		<button type="submit" class="btn btn-default">Submit</button>
 	</form>
 </div>
</div> 
<?php get_footer();  ?>