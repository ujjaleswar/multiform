 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <style type="text/css">
    
	#regiration_form fieldset:not(:first-of-type) {
		display: none;
	}
  </style>
  <title>PHPflow.com :  Multi step Form Using PHP,Bootstrap and jQuery</title>
</head>
<body>
  <div class="container">
    <h1>STUDENT REGISTRATION FORM</h1>
	<div class="progress">
		<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
	
	<form id="regiration_form"  novalidate action="action.php" method="post">
	<fieldset>
	<h2> Step 1: Add Personal Details</h2>
	<div class="name-container">
        <label for="start">Name</label>
    <input type="text" name="fname" placeholder="first " class="input" />
    <input type="text" name="lname" placeholder="last" class="input" />
    </div>
    <div class="Dob-container">
        <label for="start">date of birth</label>
<input type="date" id="start" name="trip-start"
       min="1960-01-01" max="2022-12-31">
    </div>
    <div class="email-container">
        <label for="start">Email</label>
        <input type="email" name="email" placeholder="email id" class="input" /> 
      </div>
      <label for="start"> Father Name</label>
      <div class="Fname-container">
      <input type="text" name="ffname" placeholder="first " class="input" />
      <input type="text" name="flname" placeholder="last" class="input" />
      </div>
      <label for="start"> Mother Name</label>
      <div class="Mname-container">
      <input type="text" name="mfname" placeholder="first " class="input" />
      <input type="text" name="mlname" placeholder="last" class="input" />
      </div>
      <div class="GEN-container">
      <label for="start">Gender</label>
      <input type="radio" name="gender" value="male"> Male<br>
<input type="radio" name="gender" value="female"> Female<br>
<input type="radio" name="gender" value="other"> Other
</div>
<div class="NAT-container">
    <label for="start">Nationality</label>
  <input type="text" id="fname" name="Nationality" required>
  </div>
  <div class="HOMADD-container">
  <label for="start">HomeAddress</label>
  <input type="text" name="HomeAddress" placeholder="Street Address " class="input" />
</div>
    <div class="ad">
<input type="text" name="city" placeholder="city " class="input" />
<input type="text" name="country" placeholder="country " class="input" />
</div>
<div class="HOMTEL-container">
    <label for="start">Telephone-Home</label> 
    <input type="tel" id="phone" name="phone" placeholder="###-###-###" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required> 
</div>
<div class="MOB-container">
    <label for="start">Telephone-Mobile</label> 
    <input type="tel" id="phone" name="mob" placeholder="###-###-###" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required> 
</div>
	  <input type="button" name="data[password]" class="next btn btn-info" value="Next" />
	</fieldset>
	<fieldset>
	<h2>Step 2: EDUCATIONS DETAILS</h2>
  <div class="group2">
	<div class="HSC-container">
        <label for="start">HSC Institution name</label>
      <input type="text" id="hscInsti" name="hscInstitution"required>
      </div>
      <div class="HSC-Board">
        <label for="start">HSC Board</label>
        <input type="text" name="hsc" placeholder="i.e CBSC,ICSC OR State board " class="input" required/>
      </div> 
      <div class="HSC-container">
        <label for="start">hSC Score in percentage</label>
      <input type="text" id="fname" name="HSCpercentage"required>
      </div>
      <div class="HSC-container">
        <label for="start">SSC Institution name</label>
      <input type="text" id="SSCInsti" name="SSCInstitution"required>
      </div>
      
      <div class="SSC-Board">
        <label for="start">SSC Board</label>
        <input type="text" name="ssc" placeholder="i.e CBSC,ICSC OR State board " class="input" required/>
      </div>
      <div class="HSC-container">
        <label for="start">SSC Score in percentage</label>
      <input type="text" id="fname" name="SSCpercentage"required>
      </div>
      <div class="HSC-container">
        <label for="start">Currently purshing</label>
      <input type="text" id="fname" name="Currentlypurshing"required>
      </div>
      <div class="HSC-container">
        <label for="start">Current educational Institution name</label>
      <input type="text" id="fname" name="Currenteducational"required>
      </div>
      <div class="HSC-container">
        <label for="start">overall percentage</label>
      <input type="text" id="fname" name="overalp"required>
      </div>
      <div class="HSC-container">
        <label for="start">current bacllogs if aby</label>
      <input type="text" id="fname" name="currentbac"required>
      </div> 
</div>
	  <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
		<input type="button" name="next" class="next btn btn-info" value="Next" />
	</fieldset>
	<fieldset>
		<h2>Step 3:  Information</h2>
		<label for="start">Recent passport type photograph</label>
	  <div class="form-group">
		<label for="address">upload pic</label>
		<input type="file" name="pic"/>
</div>
<label for="start">HSC mark sheet</label>
	  <div class="form-group">
		<label for="address">upload pic</label>
		<input type="file" name="pic"/>
</div>
<label for="start">SSC marksheet</label>
	  <div class="form-group">
		<label for="address">upload pic</label>
		<input type="file" name="pic"/>
</div>
		<input type="button" name="previous" class="previous btn btn-default" value="Previous" />
		<input type="submit" name="submit" class="submit btn btn-success" value="Submit" id="submit_data" />
	</fieldset>
	</form>
  </div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
	var current = 1,current_step,next_step,steps;
	steps = $("fieldset").length;
	$(".next").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().next();
		next_step.show();
		current_step.hide();
		setProgressBar(++current);
	});
	$(".previous").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().prev();
		next_step.show();
		current_step.hide();
		setProgressBar(--current);
	});
	setProgressBar(current);
	// Change progress bar action
	function setProgressBar(curStep){
		var percent = parseFloat(100 / steps) * curStep;
		percent = percent.toFixed();
		$(".progress-bar")
			.css("width",percent+"%")
			.html(percent+"%");		
	}
});
</script>