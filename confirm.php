<?php 


	if(isset($_POST['submit'])){


		session_start();
		$text = $_SESSION['text'];
		$name = $_SESSION['name'];
		$call = $_SESSION['call'];


		require('WriteHTML.php');

		$name = 'C:/xampp/htdocs/pdf/nasir/'.$a_f_name.'_'.substr($call,7).'.pdf';


		$pdf = new PDF_HTML();
		// First page
		$pdf->AddPage();
		$pdf->SetFont('Arial','',16);
		$pdf->WriteHTML($text);
		$pdf->Output($name,'F');


		header('Location: index.php');


	}






?>











<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Confirm</title>
	<link rel="stylesheet" href="css/bootstrap.css" />

	<link rel="stylesheet" href="css/style.css">

	
</head>
<body>



	<div class="container mt-5">
		<div class="row justify-content-center">
		  <div class="col-12 col-lg-6">
		  	<div class="p-3">
		  		
					<form action="" method="post">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores beatae ipsa molestias iste quis a qui facilis esse aperiam nisi, ducimus libero repellendus. Expedita cumque quas excepturi ipsum fugit aperiam et provident vitae aut ex maxime, dolore culpa dolorum sunt ad accusantium quidem repellendus, dolorem natus, consectetur, tempora earum odit.</p>

						<div class="custom-control custom-checkbox mb-3">
						      <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
						      <label id="confirm-check" class="custom-control-label" for="customCheck">Confirm</label>
						    </div>

						<input type="submit" class="button" id="submit" disabled="true" name="submit">
					</form>


		  	</div>
		  </div>
		</div>
	</div>
	


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script>
		$(document).ready(function(){
			

			$('input[type="checkbox"]').click(function(){
		           if($(this).prop("checked") == true){
		                 $("#submit").prop('disabled', false);
		           }
		           else if($(this).prop("checked") == false){
		                 $("#submit").prop('disabled', true);
		           }
		       });
			
		})
	</script>
</body>
</html>