<!DOCTYPE html>
<!-- https://www.foundit.com.ph/seeker/registration -->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<div class="container">
	  <form name="custom_form" id="customForm" onsubmit="return FormValidation()" action="success.php">
	    <div class="form_box">
	 			<h1>Registration Form</h1>
	 			<label>Full Name-- <span>*</span></label>
	 			<div class="input-row">
				  <input type="text" name="name" placeholder="Enter your full name">
				  <span class="error">Enter Your Full Name</span>
				</div>
				<label>Email ID-- <span>*</span></label>
				<div class="input-row">
				  <input type="text" name="email" placeholder="Enter your Email">
				  <span class="error">Enter Your Email.</span>
				</div>
				<label>Password-- <span>*</span></label>
				<div class="input-row">
				  <input type="password" name="password" placeholder="Password should be minimum 6 characters">
				  <span class="error">Enter password. Minimum 6 characters required.</span>
				</div>
				<label>Mobile Number-- <span>*</span></label>
				<div class="input-row">
				  <select name="code" style="width: 100px;">
				    <option value="">+63</option>
				    <option value="">+31</option>
				    
				  </select>
				  <input type="text" name="phone" placeholder="Enter your Mobile Number for recruiters to reach you" style="width:535px;">
				  <span class="error" style="margin-left: 100px;">Please Enter Your Phone</span>
				</div>
				<label>Current Location-- <span>*</span></label>
				<div class="input-row">
				  <input type="text" name="location" placeholder="Select your current location">
				  <span class="error">Enter Your current location</span>
				</div>
				<label>Nationality-- <span>*</span></label>
				<div class="input-row">
				  <select name="nationality">
				    <option value="">Indian</option>
				    <option value="">Korean</option>
				    <option value="">Filipino</option>
				    
				  </select>
				  <span class="error">Please Select Your Nationality</span>
				</div>
				<label>Total Experience-- <span>*</span></label>
				<div class="input-row">
				  <select name="experience">
				    <option value="">Select experience(e.g. Fresher or Experience)</option>
				    <option value="0">0 year</option>
				    <option value="1">1 year</option>
				    
				  </select>
				  <span class="error">Select your work experience</span>
				</div>
				<label>Key Skills-- <span>*</span></label>
				<div class="input-row">
				  <input type="text" name="skills" placeholder="Enter or Select your skills">
				  <span class="error">Enter skills. At least one skill is required.</span>
				</div>
				<label>Preferred Industry-- <span>*</span></label>
				<div class="input-row">
				  <select name="industry">
				    <option value="">Select Industry</option>
				    <option value="alternate">Alternate</option>
				    <option value="it">IT</option>
				    
				  </select>
				  <span class="error">Enter industry. At least one industry is required.</span>
				</div>
				<label>Preferred Department/Function-- <span>*</span></label>
				<div class="input-row">
				  <select name="department">
				    <option value="">Select Function</option>
				    <option value="itit">IT</option>
				    <option value="compe">COMPE</option>
				    
				  </select>
				  <span class="error">Enter function. At least one function is required.</span>
				</div>
				<div class="input-row">
				 	<input type="submit" value="Submit" name="">
				  
				</div>

				
		
	    </div>
	  </form>
	</div>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>