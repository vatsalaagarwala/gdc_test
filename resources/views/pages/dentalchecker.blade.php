<!DOCTYPE html>
<html>
<head>
	<title>Dental Checker</title>
</head>
<body style="background-color:rgb(252,248,227); ">

<link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="argon.css?v=1.0.1" rel="stylesheet">
  <!-- Docs CSS -->
  <link type="text/css" href="tool.css" rel="stylesheet">

                    
<!-- <div class="col-lg-10 justify-content-center">
<div class="card card-lift--hover shadow border-0">
<div class="card-body py-5">
<div class="icon icon-shape icon-shape-warning rounded-circle mb-4">
<i class="ni ni-planet"></i>
                    </div>
<div class="card-body py-5">
 -->
<section class="section section-lg section-shaped pb-250">
        <div class="shape shape-style-1 shape-default">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>



 <br>
<div class="container">
	<div class="row justify-content-center text-center">
		<div class="col-lg-10">
			<div class="card card-lift shadow border-10 py-5 px-5">

				<div class="container">
					<hr>
					<a class="btn btn-primary mt-4"><h1 class="display-5 font-weight-bold text-white">Dental Checker</h1></a>
									
					<hr>
					
					<br><br>
					<form action="">
					<div class="container">
						
						<fieldset class="row justify-content-left text-left">
					<br><b>Select Region affected :-</b><br>
					<ol>
		<li><input type="radio" name="region" value="gums" id="gums">Gums 
			<div class="conditional">
			<br><b>Select region of Gums affected:- </b><br><br>
				<ol>
					<li><input type="radio" name="gumRegion" value="upper" id="upper">Upper
						<div class="conditional">
						<br><b>Select the region of Upper Gum affected:-</b><br><br>
							<ol>
								<li><input type="radio" name="upper" value="front" id="front">Front
								<div class="conditional">
									<br><b>Select Symptom affecting Front of the Upper Gum:-</b><br><br>
									<ol>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Burning Sensation
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Infection</b><br><br></div> </li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Deficiency</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Swelling Gums
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Inflammatory/ Non-Inflammatory Gingival Enlargement</b><br><br></div> </li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Inflammatory/ Non-Inflammatory Gingival Enlargement</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Bleeding Gums
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Acute Gingivitis</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Chronic Gingivitis</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Redness of Gums
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Acute Gingivitis</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Chronic Gingivitis</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Pain
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Acute Periodontitis</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Chronic Periodontitis</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Pus Discharge<br><br>
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Periapical/Periodontal abscess</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Periapical/Periodontal abscess</b><br><br></div></li>
											</ol>
										</div></li>
									</ol>
								</div> </li>
			  					<li><input type="radio" name="upper" value="back" id="back">Back
			  					<div class="conditional">
									<br><b>Select Symptom affecting Back Of the Upper Gum:-</b><br><br>
									<ol>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Burning Sensation
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Infection</b><br><br></div> </li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Deficiency</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Swelling Gums
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Inflammatory/ Non-Inflammatory Gingival Enlargement</b><br><br></div> </li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Inflammatory/ Non-Inflammatory Gingival Enlargement</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Bleeding Gums
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Acute Gingivitis</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Chronic Gingivitis</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Redness of Gums
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Acute Gingivitis</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Chronic Gingivitis</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Pain
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Acute Periodontitis</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Chronic Periodontitis</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Pus Discharge<br><br>
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Periapical/Periodontal abscess</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Periapical/Periodontal abscess</b><br><br></div></li>
											</ol>
										</div></li>
									</ol>
								</div></li>	
								<li><input type="radio" name="upper" value="left" id="left">Left
								<div class="conditional">
									<br><b>Select Symptom affecting Left Of the Upper Gum:-</b><br><br>
									<ol>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Burning Sensation
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Infection</b><br><br></div> </li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Deficiency</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Swelling Gums
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Inflammatory/ Non-Inflammatory Gingival Enlargement</b><br><br></div> </li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Inflammatory/ Non-Inflammatory Gingival Enlargement</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Bleeding Gums
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Acute Gingivitis</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Chronic Gingivitis</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Redness of Gums
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Acute Gingivitis</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Chronic Gingivitis</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Pain
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Acute Periodontitis</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Chronic Periodontitis</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Pus Discharge<br><br>
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Periapical/Periodontal abscess</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Periapical/Periodontal abscess</b><br><br></div></li>
											</ol>
										</div></li>
									</ol>
								</div></li>				
								<li><input type="radio" name="upper" value="Right" id="right">Right<br><br>
								<div class="conditional">
									<br><b>Select Symptom affecting Right of the Upper Gum:-</b><br><br>
									<ol>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Burning Sensation
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Infection</b><br><br></div> </li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Deficiency</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Swelling Gums
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Inflammatory/ Non-Inflammatory Gingival Enlargement</b><br><br></div> </li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Inflammatory/ Non-Inflammatory Gingival Enlargement</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Bleeding Gums
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Acute Gingivitis</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Chronic Gingivitis</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Redness of Gums
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Acute Gingivitis</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Chronic Gingivitis</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Pain
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Acute Periodontitis</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Chronic Periodontitis</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Pus Discharge
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Periapical/Periodontal abscess</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Periapical/Periodontal abscess</b><br><br></div></li>
											</ol>
										</div></li>
									</ol>
								</div></li>	
							</ol>
						</div>
					</li>
					<li><input type="radio" name="gumRegion" value="lower" id="lower">Lower<br><br>
						<div class="conditional">
						<br><b>Select the region of Lower Gum affected:-</b><br><br>
							<ol>
								<li><input type="radio" name="upper" value="front" id="front">Front
								<div class="conditional">
									<br><b>Select Symptom affecting Front of the Lower Gum:-</b><br><br>
									<ol>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Burning Sensation
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Infection</b><br><br></div> </li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Deficiency</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Swelling Gums
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Inflammatory/ Non-Inflammatory Gingival Enlargement</b><br><br></div> </li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Inflammatory/ Non-Inflammatory Gingival Enlargement</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Bleeding Gums
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Acute Gingivitis</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Chronic Gingivitis</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Redness of Gums
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Acute Gingivitis</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Chronic Gingivitis</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Pain
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Acute Periodontitis</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Chronic Periodontitis</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Pus Discharge<br><br>
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Periapical/Periodontal abscess</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Periapical/Periodontal abscess</b><br><br></div></li>
											</ol>
										</div></li>
									</ol>
								</div> </li>
			  					<li><input type="radio" name="upper" value="back" id="back">Back
			  					<div class="conditional">
									<br><b>Select Symptom affecting Back Of the Lower Gum:-</b><br><br>
									<ol>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Burning Sensation
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Infection</b><br><br></div> </li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Deficiency</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Swelling Gums
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Inflammatory/ Non-Inflammatory Gingival Enlargement</b><br><br></div> </li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Inflammatory/ Non-Inflammatory Gingival Enlargement</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Bleeding Gums
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Acute Gingivitis</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Chronic Gingivitis</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Redness of Gums
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Acute Gingivitis</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Chronic Gingivitis</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Pain
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Acute Periodontitis</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Chronic Periodontitis</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Pus Discharge<br><br>
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Periapical/Periodontal abscess</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Periapical/Periodontal abscess</b><br><br></div></li>
											</ol>
										</div></li>
									</ol>
								</div></li>	
								<li><input type="radio" name="upper" value="left" id="left">Left
								<div class="conditional">
									<br><b>Select Symptom affecting Left Of the Lower Gum:-</b><br><br>
									<ol>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Burning Sensation
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Infection</b><br><br></div> </li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Deficiency</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Swelling Gums
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Inflammatory/ Non-Inflammatory Gingival Enlargement</b><br><br></div> </li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Inflammatory/ Non-Inflammatory Gingival Enlargement</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Bleeding Gums
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Acute Gingivitis</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Chronic Gingivitis</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Redness of Gums
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Acute Gingivitis</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Chronic Gingivitis</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Pain
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Acute Periodontitis</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Chronic Periodontitis</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Pus Discharge<br><br>
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Periapical/Periodontal abscess</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Periapical/Periodontal abscess</b><br><br></div></li>
											</ol>
										</div></li>
									</ol>
								</div></li>				
								<li><input type="radio" name="upper" value="Right" id="right">Right
								<div class="conditional">
									<br><b>Select Symptom affecting Right of the Lower Gum:-</b><br><br>
									<ol>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Burning Sensation
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Infection</b><br><br></div> </li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Deficiency</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Swelling Gums
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Inflammatory/ Non-Inflammatory Gingival Enlargement</b><br><br></div> </li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Inflammatory/ Non-Inflammatory Gingival Enlargement</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Bleeding Gums
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Acute Gingivitis</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Chronic Gingivitis</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Redness of Gums
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Acute Gingivitis</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Chronic Gingivitis</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Pain
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Acute Periodontitis</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Chronic Periodontitis</b><br><br></div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="gumRegionUpperFBLR" value="front" id="front">Pus Discharge<br><br>
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="gumRegionUpper" value="lessThanWeek" id="lessThanWeek">Less than a Week
												<div class="conditional"><br><b>Periapical/Periodontal abscess</b><br><br></div></li>
												<li><input type="radio" name="gumRegionUpper" value="moreThanWeek" id="moreThanWeek">More Than A week<br><br>
												<div class="conditional"><br><b>Periapical/Periodontal abscess</b><br><br></div></li>
											</ol>
										</div></li>
									</ol>
								</div></li>	
							</ol>	
						</div>	
					</li>
				</ol>
			</div>
		</li>
		<li><input type="radio" name="region" value="lips" id="lips">Lips
			<div class="conditional">
			<br><b>Select region of Lips affected:-</b><br><br>
				<ol>
					<li><input type="radio" name="lips" value="upper" id="upper">Upper
						<div class="conditional">
							<br><b>Select the region of the Upper Lip affected:-</b><br><br>
							<ol>
								<li><input type="radio" name="lipRegion" value="outside" id="outside">Outside
								<div class="conditional">
									<br><b>Select Symptom affecting the Outside Of the Upper Lip:-</b><br><br>
									<ol>
										<li><input type="radio" name="lipSymptom" value="ulcer" id="ulcer">Ulcer/Injury
											<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
												<ol>
												<li><input type="radio" name="lipSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
													<div class="conditional">
														<br><b>Trauma/Infection</b><br><br> 
													</div> </li>
													<li><input type="radio" name="lipSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
													<div class="conditional">
														<br><b>Infection/Malignancy</b><br><br> 
													</div></li>
													</ol>
												</div></li>
											<li><input type="radio" name="lipSymptom" value="swelling" id="swelling">Swelling<br><br>
										<div class="conditional">
										<b>How long has this been troubling you?</b><br><br>
										<ol>
											<li><input type="radio" name="tonsilsSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
												<div class="conditional">
													<br><b>Allergy/Acute Inflammation</b><br><br> 
												</div> </li>
												<li><input type="radio" name="tonsilsSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
												<div class="conditional">
													<b>Cyst/Tumour</b><br><br> 
												</div></li>
											</ol>
											</div></li>
											</ol>
								</div> </li>
								<li><input type="radio" name="lipRegion" value="inside" id="inside">Inside<br><br>
								<div class="conditional">
									<br><b>Select Symptom affecting the Inside Of the Upper Lip:-</b><br><br>
									<ol>
										<li><input type="radio" name="lipSymptom" value="ulcer" id="ulcer">Ulcer/Injury
											<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
												<li><input type="radio" name="tonsilsSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
												<div class="conditional">
													<br><b>Trauma/Infection</b><br><br> 
												</div> </li>
												<li><input type="radio" name="tonsilsSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two week<br><br>
												<div class="conditional">
													<br><b>Infection/Malignancy</b><br><br> 
												</div></li>
											</ol>
											</div></li>
										<li><input type="radio" name="lipSymptom" value="swelling" id="swelling">Swelling<br><br>
											<div class="conditional">
											<b>How long has this been troubling you?</b><br><br>
												<ol>
												<li><input type="radio" name="tonsilsSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
												<div class="conditional">
													<br><b>Allergy/Acute Inflammation</b><br><br> 
												</div> </li>
												<li><input type="radio" name="tonsilsSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two week<br><br>
												<div class="conditional">
													<b>Cyst/Tumour</b><br><br> 
												</div></li>
												</ol>
											</div></li>
										</ol>
									</div></li>
								</ol>
							</div></li>
						<li><input type="radio" name="lips" value="lower" id="lower">Lower<br><br>
						<div class="conditional">
							<b>Select the region of the Lower Lip affected:-</b><br><br>
							<ol>
								<li><input type="radio" name="lipRegion" value="outside" id="outside">Outside
								<div class="conditional">
									<br><b>Select Symptom affecting the Outside Of the Lower Lip:-</b><br><br>
									<ol>
										<li><input type="radio" name="lipSymptom" value="ulcer" id="ulcer">Ulcer/Injury
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol><li><input type="radio" name="lipSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
												<div class="conditional">
													<br><b>Trauma/Infection</b><br><br> 
												</div> </li>
												<li><input type="radio" name="lipSymtomDuration" value="lessThanWeek" id="lessThanWeek">More than two weeks<br><br>
												<div class="conditional">
													<b>Infection/Malignancy </b><br><br>
												</div> </li>
											</ol>
										</div> </li>
										<li><input type="radio" name="lipSymptom" value="swelling" id="swelling">Swelling<br><br>
										<div class="conditional">
											<b>How long has this been troubling you?</b><br><br>
											<ol><li><input type="radio" name="lipSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
												<div class="conditional">
													<br><b>Allergy/Acute Inflammation</b><br><br> 
												</div> </li>
												<li><input type="radio" name="lipSymtomDuration" value="lessThanWeek" id="lessThanWeek">More than two weeks<br><br>
												<div class="conditional">
													<b>Cyst/Tumour</b><br><br> 
												</div> </li>
											</ol>
										</div> </li>
									</ol>
								</div></li>
								<li><input type="radio" name="lipRegion" value="inside" id="inside">Inside<br><br>
								<div class="conditional">
									<b>Select Symptom affecting the Intside Of the Lower Lip:-</b><br><br>
									<ol>
										<li><input type="radio" name="lipSymptom" value="ulcer" id="ulcer">Ulcer/Injury
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol><li><input type="radio" name="lipSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
												<div class="conditional">
													<br><b>Trauma/Infection</b><br><br> 
												</div> </li>
												<li><input type="radio" name="lipSymtomDuration" value="lessThanWeek" id="lessThanWeek">More than two weeks<br><br>
												<div class="conditional">
													<b>Infection/Malignancy</b><br><br> 
												</div> </li>
											</ol>
										</div> </li>
										<li><input type="radio" name="lipSymptom" value="swelling" id="swelling">Swelling<br><br>
										<div class="conditional">
											<b>How long has this been troubling you?</b><br><br>
											<ol><li><input type="radio" name="lipSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
												<div class="conditional">
													<br><b>Allergy/Acute Inflammation</b><br><br> 
												</div> </li>
												<li><input type="radio" name="lipSymtomDuration" value="lessThanWeek" id="lessThanWeek">More than two weeks<br><br>
												<div class="conditional">
													<b>Cyst/Tumour </b><br><br>
												</div> </li>
											</ol>
										</div> </li>
									</ol>
								</div></li>
							</ol>
						</div> </li>
				</ol>
			</div>
		</li>
		<li><input type="radio" name="region" value="palate" id="palate">Palate
			<div class="conditional">
			<br><b>Select region of Palate affected:-</b><br><br>
				<ol>
					<li><input type="radio" name="palate" value="front" id="front">Front
					<div class="conditional">
						<br><b>Select Symptom affecting the Front of the Palate:-</b><br><br>
						<ol>
							<li><input type="radio" name="palateSymptom" value="ulcer" id="ulcer">Ulcer
							<div class="conditional">
							<br><b>How long has this been troubling you?</b><br><br>
						<ol>
							<li><input type="radio" name="palateSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
							<div class="conditional"><br><b>Trauma/Infection</b><br><br></div> </li>
							<li><input type="radio" name="palateSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
							<div class="conditional"><b>Malignancy</b><br><br></div> </li>
						</ol>
							</div></li>	
							<li><input type="radio" name="palateSymptom" value="injury" id="injury">Injury
							<div class="conditional">
							<br><b>How long has this been troubling you?</b><br><br>
						<ol>
							<li><input type="radio" name="palateSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
							<div class="conditional"><br><b>Trauma/Infection</b><br><br></div> </li>
							<li><input type="radio" name="palateSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
							<div class="conditional"><b>Malignancy</b><br><br></div> </li>
						</ol>
					</div></li>	
							<li><input type="radio" name="palateSymptom" value="swelling" id="swelling">Swelling
							<div class="conditional">
							<br><b>How long has this been troubling you?</b><br><br>
						<ol>
							<li><input type="radio" name="palateSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
							<div class="conditional"><br><b>Trauma/Infection</b><br><br></div> </li>
							<li><input type="radio" name="palateSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
							<div class="conditional"><b>Cyst/Tumour</b><br><br></div> </li>
						</ol>
					</div></li>
					<li><input type="radio" name="palateSymptom" value="pain" id="pain">Pain<br><br>
					<div class="conditional">
							<b>How long has this been troubling you?</b><br><br>
						<ol>
							<li><input type="radio" name="palateSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
							<div class="conditional"><br><b>Trauma/Infection</b><br><br></div> </li>
							<li><input type="radio" name="palateSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
							 <div class="conditional"><b>Malignancy</b><br><br></div> </li>
						</ol>
					</div></li>	
						</ol>
					</div> </li>
			  		<li><input type="radio" name="palate" value="back" id="back">Back
			  		<div class="conditional">
			  			<br><b>Select Symptom affecting the Back of the Palate:-</b><br><br>
						<ol>
							<li><input type="radio" name="palateSymptom" value="ulcer" id="ulcer">Ulcer
							<div class="conditional">
							<br><b>How long has this been troubling you?</b><br><br>
						<ol>
							<li><input type="radio" name="palateSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
							<div class="conditional"><br><b>Trauma/Infection</b><br><br></div> </li>
							<li><input type="radio" name="palateSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
							<div class="conditional"><b>Malignancy</b><br><br></div> </li>
						</ol>
					</div></li>
							<li><input type="radio" name="palateSymptom" value="injury" id="injury">Injury
							<div class="conditional">
							<br><b>How long has this been troubling you?</b><br><br>
						<ol>
							<li><input type="radio" name="palateSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
							<div class="conditional"><br><b>Trauma/Infection</b><br><br></div> </li>
							<li><input type="radio" name="palateSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
							<div class="conditional"><b>Malignancy</b><br><br></div> </li>
						</ol>
					</div></li>	
							<li><input type="radio" name="palateSymptom" value="swelling" id="swelling">Swelling
							<div class="conditional">
							<br><b>How long has this been troubling you?</b><br><br>
						<ol>
							<li><input type="radio" name="palateSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
							<div class="conditional"><br><b>Trauma/Infection</b><br><br></div> </li>
							<li><input type="radio" name="palateSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
							<div class="conditional"><b>Cyst/Tumour</b><br><br></div> </li>
						</ol>
					</div></li>
							<li><input type="radio" name="palateSymptom" value="pain" id="pain">Pain<br><br>
							<div class="conditional">
							<b>How long has this been troubling you?</b><br><br>
						<ol>
							<li><input type="radio" name="palateSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
							<div class="conditional"><br><b>Trauma/Infection</b><br><br></div> </li>
							<li><input type="radio" name="palateSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
							<div class="conditional"><b>Malignancy</b><br><br></div> </li>
						</ol>
					</div></li>	
						</ol>
			  		</div> </li>	
					<li><input type="radio" name="palate" value="left" id="left">Left
					<div class="conditional">
						<br><b>Select Symptom affecting the Left of the Palate:-</b><br><br>
						<ol>
							<li><input type="radio" name="palateSymptom" value="ulcer" id="ulcer">Ulcer
							<div class="conditional">
							<br><b>How long has this been troubling you?</b><br><br>
						<ol>
							<li><input type="radio" name="palateSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
							<div class="conditional"><br><b>Trauma/Infection</b><br><br></div> </li>
							<li><input type="radio" name="palateSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
							<div class="conditional"><b>Malignancy</b><br><br></div> </li>
						</ol>
					</div></li>	
							<li><input type="radio" name="palateSymptom" value="injury" id="injury">Injury
							<div class="conditional">
							<br><b>How long has this been troubling you?</b><br><br>
						<ol>
							<li><input type="radio" name="palateSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
							<div class="conditional"><br><b>Trauma/Infection</b><br><br></div> </li>
							<li><input type="radio" name="palateSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
							<div class="conditional"><b>Malignancy</b><br><br></div> </li>
						</ol>
					</div></li>	
							<li><input type="radio" name="palateSymptom" value="swelling" id="swelling">Swelling
							<div class="conditional">
							<br><b>How long has this been troubling you?</b><br><br>
						<ol>
							<li><input type="radio" name="palateSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
							<div class="conditional"><br><b>Trauma/Infection</b><br><br></div> </li>
							<li><input type="radio" name="palateSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
							<div class="conditional"><b>Cyst/Tumour</b><br><br></div> </li>
						</ol>
					</div></li>
							<li><input type="radio" name="palateSymptom" value="pain" id="pain">Pain<br><br>
							<div class="conditional">
							<b>How long has this been troubling you?</b><br><br>
						<ol>
							<li><input type="radio" name="palateSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
							<div class="conditional"><br><b>Trauma/Infection</b><br><br></div> </li>
							<li><input type="radio" name="palateSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
							<div class="conditional"><b>Malignancy</b><br><br></div> </li>
						</ol>
					</div></li>	
						</ol></li>				
					<li><input type="radio" name="palate" value="Right" id="right">Right<br><br>
					<div class="conditional">
						<b>Select symptom affecting the Right of the Palate</b><br><br>
						<ol>
							<li><input type="radio" name="palateSymptom" value="ulcer" id="ulcer">Ulcer
							<div class="conditional">
							<br><b>How long has this been troubling you?</b><br><br>
						<ol>
							<li><input type="radio" name="palateSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
							<div class="conditional"><br><b>Trauma/Infection</b><br><br></div> </li>
							<li><input type="radio" name="palateSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
							<div class="conditional"><b>Malignancy</b><br><br></div> </li>
						</ol>
					</div></li>	
							<li><input type="radio" name="palateSymptom" value="injury" id="injury">Injury
							<div class="conditional">
							<br><b>How long has this been troubling you?</b><br><br>
						<ol>
							<li><input type="radio" name="palateSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
							<div class="conditional"><br><b>Trauma/Infection</b><br><br></div> </li>
							<li><input type="radio" name="palateSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
							<div class="conditional"><b>Malignancy</b><br><br></div> </li>
						</ol>
					</div></li>	
							<li><input type="radio" name="palateSymptom" value="swelling" id="swelling">Swelling
							<div class="conditional">
							<br><b>How long has this been troubling you?</b><br><br>
						<ol>
							<li><input type="radio" name="palateSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
							<div class="conditional"><br><b>Trauma/Infection</b><br><br></div> </li>
							<li><input type="radio" name="palateSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
							<div class="conditional"><b>Cyst/Tumour</b><br><br></div> </li>
						</ol>
					</div></li>
							<li><input type="radio" name="palateSymptom" value="pain" id="pain">Pain<br><br>
							<div class="conditional">
							<b>How long has this been troubling you?</b><br><br>
						<ol>
							<li><input type="radio" name="palateSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
							<div class="conditional"><br><b>Trauma/Infection</b><br><br></div> </li>
							<li><input type="radio" name="palateSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than a week<br><br>
							<div class="conditional"><b>Malignancy</b><br><br></div> </li>
						</ol>
					</div></li>	
					</ol></li>				
				</ol>
			</div>
		</li>
		<li><input type="radio" name="region" value="teeth" id="teeth">Teeth
			<div class="conditional">
			<br><b>Select region of Teeth affected:-</b><br><br>
				<ol>
					<li><input type="radio" name="teeth" value="upper" id="upper">Upper
					<div class="conditional">
						<br><b>Select the region affecting Upper Teeth:-</b><br><br>
							<ol>
								<li><input type="radio" name="teethRegion" value="front" id="front">Front
								<div class="conditional">
									<br><b>Select Symptom affecting The Front of the Upper Teeth:-</b><br><br>
									<ol>
										<li><input type="radio" name="teethRegionUpper" value="pain" id="pain">Pain
										<div class="conditional">
											<br><b>Select activity during which pain occurs:-</b><br><br>
											<ol>
												<li><input type="radio" name="pain" value="pain" id="pain">On Chewing
												<div class="conditional">
													<br><b>Duration of pain while chewing:-</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">5 seconds
															<div class="conditional"><br><b>Apical Periodontitis</b><br><br></div> </li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">One minute
														<div class="conditional"><br><b>Periapical/ Periodontal abscess</b><br><br></div> </li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">On relieving chewing pressure<br><br>
														<div class="conditional"><b>Cracked Tooth Syndrome</b><br><br></div> </li>
													</ol>
												</div> </li>
												<li><input type="radio" name="pain" value="pain" id="pain">On Eating hot/cold<br><br>
												<div class="conditional">
													<b>Temprature:-</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Cold
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="cold" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Reversible Pulpitis</b><br><br>
																</div> </li>
																<li><input type="radio" name="cold" value="pain" id="pain">One Minute
																<div class="conditional"><br><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div> </li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Hot
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="hot" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Irreversible Pulpitis</b><br><br></div></li>
																<li><input type="radio" name="hot" value="pain" id="pain">One Minute<br><br>
																<div class="conditional"><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">None<br><br>
														<div class="conditional"><b>Pulp Necrosis</b><br><br></div> </li>
													</ol>
												</div></li>
											</ol>
										</div> </li>
										<li><input type="radio" name="teethRegionUpper" value="sensitivity" id="sensitivity">Sensitivity
										<div class="conditional">
											<br><b>Select activity during which pain occurs:-</b><br><br>
											<ol>
												<li><input type="radio" name="sensitivity" value="sensitivity" id="sensitivity">On Chewing
												<div class="conditional">
													<br><b>Select time duration of pain</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">5 seconds
														<div class="conditional"><br><b>Apical Periodontitis</b><br><br></div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">One minute
														<div class="conditional"><br><b>Periapical/ Periodontal abscess</b><br><br></div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">On relieving chewing pressure<br><br>
														<div class="conditional"><b>Cracked Tooth Syndrome</b><br><br</div></li>
													</ol>
												</div></li>
												<li><input type="radio" name="sensitivity" value="sensitivity" id="sensitivity">On Eating hot/cold<br><br>
												<div class="conditional">
													<b>Temprature:-</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Hot
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="hot" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Irreversible Pulpitis</b><br><br></div></li>
																<li><input type="radio" name="hot" value="pain" id="pain">One Minute<br><br>
																<div class="conditional"><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Cold
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="cold" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Reversible Pulpitis</b><br><br>
																</div> </li>
																<li><input type="radio" name="cold" value="pain" id="pain">One Minute<br><br>
																<div class="conditional"><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">None
														<div class="conditional"><br><b>Pulp Necrosis</b><br><br></div> </li>
													</ol>
												</div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="foodLodgement" id="foodLodgement">Food Lodgement
										<div class="conditional">
										<br><b>How long has this been troubling you?</b><br><br>											
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Cavity</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Cavity</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="crowdedTeeth" id="crowdedTeeth">Crowded Teeth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Malocclusion</b><br><br></div></li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Malocclusion</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="badOdour" id="badOdour">Bad Odour
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Halitosis</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><br><b>Halitosis</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="plaqueDeposits" id="plaqueDeposits">Plaque Deposits
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Poor Oral Hygiene</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><br><b>Poor Oral Hygiene</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="difficulty" id="difficulty">Difficulty in Biting/Chewing
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Periodontitis</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Periodontitis</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="yellowTeeth" id="yellowTeeth">Yellow Teeth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Tartar Deposits</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Tartar Deposits</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="stains" id="stains">Stains on Teeth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><b>Tartar Deposits/Decay</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Tartar Deposits/Decay</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="missingTooth" id="missingTooth">Missing Tooth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Collapsed Bite</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Collapsed Bite</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="looseteeth" id="looseteeth">Loose Teeth<br><br>
										<div class="conditional">
											<b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Periodontitis</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Periodontitis</b><br><br></div> </li>
											</ol>
										</div></li>	

									</ol>
								</div> </li>
			  					<li><input type="radio" name="teethRegion" value="back" id="back">Back
			  					<div class="conditional">
									<br><b>Select Symptom affecting The Back of the Upper Teeth:-</b><br><br>
									<ol>
										<li><input type="radio" name="teethRegionUpper" value="pain" id="pain">Pain
										<div class="conditional">
											<br><b>Select activity during which pain occurs:-</b><br><br>
											<ol>
												<li><input type="radio" name="pain" value="pain" id="pain">On Chewing
												<div class="conditional">
													<br><b>Duration of pain while chewing:-</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">5 seconds
															<div class="conditional"><br><b>Apical Periodontitis</b><br><br></div> </li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">One minute
														<div class="conditional"><br><b>Periapical/ Periodontal abscess</b><br><br></div> </li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">On relieving chewing pressure<br><br>
														<div class="conditional"><b>Cracked Tooth Syndrome</b><br><br></div> </li>
													</ol>
												</div> </li>
												<li><input type="radio" name="pain" value="pain" id="pain">On Eating hot/cold<br><br>
												<div class="conditional">
													<b>Temprature:-</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Cold
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="cold" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Reversible Pulpitis</b><br><br>
																</div> </li>
																<li><input type="radio" name="cold" value="pain" id="pain">One Minute
																<div class="conditional"><br><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div> </li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Hot
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="hot" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Irreversible Pulpitis</b><br><br></div></li>
																<li><input type="radio" name="hot" value="pain" id="pain">One Minute<br><br>
																<div class="conditional"><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">None<br><br>
														<div class="conditional"><b>Pulp Necrosis</b><br><br></div> </li>
													</ol>
												</div></li>
											</ol>
										</div> </li>
										<li><input type="radio" name="teethRegionUpper" value="sensitivity" id="sensitivity">Sensitivity
										<div class="conditional">
											<br><b>Select activity during which pain occurs:-</b><br><br>
											<ol>
												<li><input type="radio" name="sensitivity" value="sensitivity" id="sensitivity">On Chewing
												<div class="conditional">
													<br><b>Select time duration of pain</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">5 seconds
														<div class="conditional"><br><b>Apical Periodontitis</b><br><br></div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">One minute
														<div class="conditional"><br><b>Periapical/ Periodontal abscess</b><br><br></div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">On relieving chewing pressure<br><br>
														<div class="conditional"><b>Cracked Tooth Syndrome</b><br><br</div></li>
													</ol>
												</div></li>
												<li><input type="radio" name="sensitivity" value="sensitivity" id="sensitivity">On Eating hot/cold<br><br>
												<div class="conditional">
													<b>Temprature:-</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Hot
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="hot" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Irreversible Pulpitis</b><br><br></div></li>
																<li><input type="radio" name="hot" value="pain" id="pain">One Minute<br><br>
																<div class="conditional"><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Cold
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="cold" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Reversible Pulpitis</b><br><br>
																</div> </li>
																<li><input type="radio" name="cold" value="pain" id="pain">One Minute<br><br>
																<div class="conditional"><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">None
														<div class="conditional"><br><b>Pulp Necrosis</b><br><br></div> </li>
													</ol>
												</div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="foodLodgement" id="foodLodgement">Food Lodgement
										<div class="conditional">
										<br><b>How long has this been troubling you?</b><br><br>											
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Cavity</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Cavity</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="crowdedTeeth" id="crowdedTeeth">Crowded Teeth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Malocclusion</b><br><br></div></li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Malocclusion</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="badOdour" id="badOdour">Bad Odour
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Halitosis</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><br><b>Halitosis</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="plaqueDeposits" id="plaqueDeposits">Plaque Deposits
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Poor Oral Hygiene</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><br><b>Poor Oral Hygiene</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="difficulty" id="difficulty">Difficulty in Biting/Chewing
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Periodontitis</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Periodontitis</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="yellowTeeth" id="yellowTeeth">Yellow Teeth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Tartar Deposits</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Tartar Deposits</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="stains" id="stains">Stains on Teeth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><b>Tartar Deposits/Decay</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Tartar Deposits/Decay</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="missingTooth" id="missingTooth">Missing Tooth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Collapsed Bite</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Collapsed Bite</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="looseteeth" id="looseteeth">Loose Teeth<br><br>
										<div class="conditional">
											<b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Periodontitis</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Periodontitis</b><br><br></div> </li>
											</ol>
										</div></li>	

									</ol>
								</div></li>	
								<li><input type="radio" name="teethRegion" value="left" id="left">Left
								<div class="conditional">
									<br><b>Select Symptom affecting The Left of the Upper Teeth:-</b><br><br>
									<ol>
										<li><input type="radio" name="teethRegionUpper" value="pain" id="pain">Pain
										<div class="conditional">
											<br><b>Select activity during which pain occurs:-</b><br><br>
											<ol>
												<li><input type="radio" name="pain" value="pain" id="pain">On Chewing
												<div class="conditional">
													<br><b>Duration of pain while chewing:-</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">5 seconds
															<div class="conditional"><br><b>Apical Periodontitis</b><br><br></div> </li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">One minute
														<div class="conditional"><br><b>Periapical/ Periodontal abscess</b><br><br></div> </li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">On relieving chewing pressure<br><br>
														<div class="conditional"><b>Cracked Tooth Syndrome</b><br><br></div> </li>
													</ol>
												</div> </li>
												<li><input type="radio" name="pain" value="pain" id="pain">On Eating hot/cold<br><br>
												<div class="conditional">
													<b>Temprature:-</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Cold
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="cold" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Reversible Pulpitis</b><br><br>
																</div> </li>
																<li><input type="radio" name="cold" value="pain" id="pain">One Minute
																<div class="conditional"><br><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div> </li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Hot
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="hot" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Irreversible Pulpitis</b><br><br></div></li>
																<li><input type="radio" name="hot" value="pain" id="pain">One Minute<br><br>
																<div class="conditional"><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">None<br><br>
														<div class="conditional"><b>Pulp Necrosis</b><br><br></div> </li>
													</ol>
												</div></li>
											</ol>
										</div> </li>
										<li><input type="radio" name="teethRegionUpper" value="sensitivity" id="sensitivity">Sensitivity
										<div class="conditional">
											<br><b>Select activity during which pain occurs:-</b><br><br>
											<ol>
												<li><input type="radio" name="sensitivity" value="sensitivity" id="sensitivity">On Chewing
												<div class="conditional">
													<br><b>Select time duration of pain</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">5 seconds
														<div class="conditional"><br><b>Apical Periodontitis</b><br><br></div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">One minute
														<div class="conditional"><br><b>Periapical/ Periodontal abscess</b><br><br></div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">On relieving chewing pressure<br><br>
														<div class="conditional"><b>Cracked Tooth Syndrome</b><br><br</div></li>
													</ol>
												</div></li>
												<li><input type="radio" name="sensitivity" value="sensitivity" id="sensitivity">On Eating hot/cold<br><br>
												<div class="conditional">
													<b>Temprature:-</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Hot
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="hot" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Irreversible Pulpitis</b><br><br></div></li>
																<li><input type="radio" name="hot" value="pain" id="pain">One Minute<br><br>
																<div class="conditional"><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Cold
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="cold" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Reversible Pulpitis</b><br><br>
																</div> </li>
																<li><input type="radio" name="cold" value="pain" id="pain">One Minute<br><br>
																<div class="conditional"><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">None
														<div class="conditional"><br><b>Pulp Necrosis</b><br><br></div> </li>
													</ol>
												</div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="foodLodgement" id="foodLodgement">Food Lodgement
										<div class="conditional">
										<br><b>How long has this been troubling you?</b><br><br>											
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Cavity</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Cavity</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="crowdedTeeth" id="crowdedTeeth">Crowded Teeth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Malocclusion</b><br><br></div></li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Malocclusion</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="badOdour" id="badOdour">Bad Odour
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Halitosis</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><br><b>Halitosis</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="plaqueDeposits" id="plaqueDeposits">Plaque Deposits
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Poor Oral Hygiene</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><br><b>Poor Oral Hygiene</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="difficulty" id="difficulty">Difficulty in Biting/Chewing
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Periodontitis</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Periodontitis</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="yellowTeeth" id="yellowTeeth">Yellow Teeth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Tartar Deposits</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Tartar Deposits</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="stains" id="stains">Stains on Teeth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><b>Tartar Deposits/Decay</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Tartar Deposits/Decay</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="missingTooth" id="missingTooth">Missing Tooth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Collapsed Bite</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Collapsed Bite</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="looseteeth" id="looseteeth">Loose Teeth<br><br>
										<div class="conditional">
											<b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Periodontitis</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Periodontitis</b><br><br></div> </li>
											</ol>
										</div></li>	

									</ol>
								</div></li>				
								<li><input type="radio" name="teethRegion" value="Right" id="right">Right<br><br>
								<div class="conditional">
									<br><b>Select Symptom affecting The Right of the Upper Teeth:-</b><br><br>
									<ol>
										<li><input type="radio" name="teethRegionUpper" value="pain" id="pain">Pain
										<div class="conditional">
											<br><b>Select activity during which pain occurs:-</b><br><br>
											<ol>
												<li><input type="radio" name="pain" value="pain" id="pain">On Chewing
												<div class="conditional">
													<br><b>Duration of pain while chewing:-</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">5 seconds
															<div class="conditional"><br><b>Apical Periodontitis</b><br><br></div> </li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">One minute
														<div class="conditional"><br><b>Periapical/ Periodontal abscess</b><br><br></div> </li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">On relieving chewing pressure<br><br>
														<div class="conditional"><b>Cracked Tooth Syndrome</b><br><br></div> </li>
													</ol>
												</div> </li>
												<li><input type="radio" name="pain" value="pain" id="pain">On Eating hot/cold<br><br>
												<div class="conditional">
													<b>Temprature:-</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Cold
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="cold" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Reversible Pulpitis</b><br><br>
																</div> </li>
																<li><input type="radio" name="cold" value="pain" id="pain">One Minute
																<div class="conditional"><br><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div> </li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Hot
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="hot" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Irreversible Pulpitis</b><br><br></div></li>
																<li><input type="radio" name="hot" value="pain" id="pain">One Minute<br><br>
																<div class="conditional"><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">None<br><br>
														<div class="conditional"><b>Pulp Necrosis</b><br><br></div> </li>
													</ol>
												</div></li>
											</ol>
										</div> </li>
										<li><input type="radio" name="teethRegionUpper" value="sensitivity" id="sensitivity">Sensitivity
										<div class="conditional">
											<br><b>Select activity during which pain occurs:-</b><br><br>
											<ol>
												<li><input type="radio" name="sensitivity" value="sensitivity" id="sensitivity">On Chewing
												<div class="conditional">
													<br><b>Select time duration of pain</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">5 seconds
														<div class="conditional"><br><b>Apical Periodontitis</b><br><br></div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">One minute
														<div class="conditional"><br><b>Periapical/ Periodontal abscess</b><br><br></div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">On relieving chewing pressure<br><br>
														<div class="conditional"><b>Cracked Tooth Syndrome</b><br><br</div></li>
													</ol>
												</div></li>
												<li><input type="radio" name="sensitivity" value="sensitivity" id="sensitivity">On Eating hot/cold<br><br>
												<div class="conditional">
													<b>Temprature:-</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Hot
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="hot" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Irreversible Pulpitis</b><br><br></div></li>
																<li><input type="radio" name="hot" value="pain" id="pain">One Minute<br><br>
																<div class="conditional"><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Cold
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="cold" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Reversible Pulpitis</b><br><br>
																</div> </li>
																<li><input type="radio" name="cold" value="pain" id="pain">One Minute<br><br>
																<div class="conditional"><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">None
														<div class="conditional"><br><b>Pulp Necrosis</b><br><br></div> </li>
													</ol>
												</div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="foodLodgement" id="foodLodgement">Food Lodgement
										<div class="conditional">
										<br><b>How long has this been troubling you?</b><br><br>											
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Cavity</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Cavity</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="crowdedTeeth" id="crowdedTeeth">Crowded Teeth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Malocclusion</b><br><br></div></li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Malocclusion</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="badOdour" id="badOdour">Bad Odour
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Halitosis</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><br><b>Halitosis</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="plaqueDeposits" id="plaqueDeposits">Plaque Deposits
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Poor Oral Hygiene</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><br><b>Poor Oral Hygiene</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="difficulty" id="difficulty">Difficulty in Biting/Chewing
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Periodontitis</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Periodontitis</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="yellowTeeth" id="yellowTeeth">Yellow Teeth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Tartar Deposits</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Tartar Deposits</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="stains" id="stains">Stains on Teeth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><b>Tartar Deposits/Decay</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Tartar Deposits/Decay</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="missingTooth" id="missingTooth">Missing Tooth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Collapsed Bite</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Collapsed Bite</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="looseteeth" id="looseteeth">Loose Teeth<br><br>
										<div class="conditional">
											<b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Periodontitis</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Periodontitis</b><br><br></div> </li>
											</ol>
										</div></li>	

									</ol>
								</div></li>
							</ol>	
						</div>	</li>
					<li><input type="radio" name="teeth" value="teethRegion" id="lower">Lower<br><br>
					<div class="conditional">
						<b>Select the region affecting Lower Teeth:-</b><br><br>
							<ol>
								<li><input type="radio" name="teethRegion" value="front" id="front">Front
								<div class="conditional">
									<br><b>Select Symptom affecting The Front of the Lower Teeth:-</b><br><br>
									<ol>
										<li><input type="radio" name="teethRegionUpper" value="pain" id="pain">Pain
										<div class="conditional">
											<br><b>Select activity during which pain occurs:-</b><br><br>
											<ol>
												<li><input type="radio" name="pain" value="pain" id="pain">On Chewing
												<div class="conditional">
													<br><b>Duration of pain while chewing:-</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">5 seconds
															<div class="conditional"><br><b>Apical Periodontitis</b><br><br></div> </li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">One minute
														<div class="conditional"><br><b>Periapical/ Periodontal abscess</b><br><br></div> </li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">On relieving chewing pressure<br><br>
														<div class="conditional"><b>Cracked Tooth Syndrome</b><br><br></div> </li>
													</ol>
												</div> </li>
												<li><input type="radio" name="pain" value="pain" id="pain">On Eating hot/cold<br><br>
												<div class="conditional">
													<b>Temprature:-</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Cold
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="cold" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Reversible Pulpitis</b><br><br>
																</div> </li>
																<li><input type="radio" name="cold" value="pain" id="pain">One Minute
																<div class="conditional"><br><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div> </li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Hot
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="hot" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Irreversible Pulpitis</b><br><br></div></li>
																<li><input type="radio" name="hot" value="pain" id="pain">One Minute<br><br>
																<div class="conditional"><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">None<br><br>
														<div class="conditional"><b>Pulp Necrosis</b><br><br></div> </li>
													</ol>
												</div></li>
											</ol>
										</div> </li>
										<li><input type="radio" name="teethRegionUpper" value="sensitivity" id="sensitivity">Sensitivity
										<div class="conditional">
											<br><b>Select activity during which pain occurs:-</b><br><br>
											<ol>
												<li><input type="radio" name="sensitivity" value="sensitivity" id="sensitivity">On Chewing
												<div class="conditional">
													<br><b>Select time duration of pain</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">5 seconds
														<div class="conditional"><br><b>Apical Periodontitis</b><br><br></div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">One minute
														<div class="conditional"><br><b>Periapical/ Periodontal abscess</b><br><br></div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">On relieving chewing pressure<br><br>
														<div class="conditional"><b>Cracked Tooth Syndrome</b><br><br</div></li>
													</ol>
												</div></li>
												<li><input type="radio" name="sensitivity" value="sensitivity" id="sensitivity">On Eating hot/cold<br><br>
												<div class="conditional">
													<b>Temprature:-</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Hot
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="hot" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Irreversible Pulpitis</b><br><br></div></li>
																<li><input type="radio" name="hot" value="pain" id="pain">One Minute<br><br>
																<div class="conditional"><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Cold
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="cold" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Reversible Pulpitis</b><br><br>
																</div> </li>
																<li><input type="radio" name="cold" value="pain" id="pain">One Minute<br><br>
																<div class="conditional"><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">None
														<div class="conditional"><br><b>Pulp Necrosis</b><br><br></div> </li>
													</ol>
												</div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="foodLodgement" id="foodLodgement">Food Lodgement
										<div class="conditional">
										<br><b>How long has this been troubling you?</b><br><br>											
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Cavity</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Cavity</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="crowdedTeeth" id="crowdedTeeth">Crowded Teeth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Malocclusion</b><br><br></div></li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Malocclusion</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="badOdour" id="badOdour">Bad Odour
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Halitosis</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><br><b>Halitosis</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="plaqueDeposits" id="plaqueDeposits">Plaque Deposits
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Poor Oral Hygiene</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><br><b>Poor Oral Hygiene</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="difficulty" id="difficulty">Difficulty in Biting/Chewing
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Periodontitis</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Periodontitis</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="yellowTeeth" id="yellowTeeth">Yellow Teeth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Tartar Deposits</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Tartar Deposits</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="stains" id="stains">Stains on Teeth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><b>Tartar Deposits/Decay</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Tartar Deposits/Decay</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="missingTooth" id="missingTooth">Missing Tooth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Collapsed Bite</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Collapsed Bite</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="looseteeth" id="looseteeth">Loose Teeth<br><br>
										<div class="conditional">
											<b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Periodontitis</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Periodontitis</b><br><br></div> </li>
											</ol>
										</div></li>	

									</ol>
								</div> </li>
			  					<li><input type="radio" name="teethRegion" value="back" id="back">Back
			  					<div class="conditional">
									<br><b>Select Symptom affecting The Back of the Lower Teeth:-</b><br><br>
									<ol>
										<li><input type="radio" name="teethRegionUpper" value="pain" id="pain">Pain
										<div class="conditional">
											<br><b>Select activity during which pain occurs:-</b><br><br>
											<ol>
												<li><input type="radio" name="pain" value="pain" id="pain">On Chewing
												<div class="conditional">
													<br><b>Duration of pain while chewing:-</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">5 seconds
															<div class="conditional"><br><b>Apical Periodontitis</b><br><br></div> </li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">One minute
														<div class="conditional"><br><b>Periapical/ Periodontal abscess</b><br><br></div> </li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">On relieving chewing pressure<br><br>
														<div class="conditional"><b>Cracked Tooth Syndrome</b><br><br></div> </li>
													</ol>
												</div> </li>
												<li><input type="radio" name="pain" value="pain" id="pain">On Eating hot/cold<br><br>
												<div class="conditional">
													<b>Temprature:-</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Cold
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="cold" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Reversible Pulpitis</b><br><br>
																</div> </li>
																<li><input type="radio" name="cold" value="pain" id="pain">One Minute
																<div class="conditional"><br><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div> </li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Hot
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="hot" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Irreversible Pulpitis</b><br><br></div></li>
																<li><input type="radio" name="hot" value="pain" id="pain">One Minute<br><br>
																<div class="conditional"><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">None<br><br>
														<div class="conditional"><b>Pulp Necrosis</b><br><br></div> </li>
													</ol>
												</div></li>
											</ol>
										</div> </li>
										<li><input type="radio" name="teethRegionUpper" value="sensitivity" id="sensitivity">Sensitivity
										<div class="conditional">
											<br><b>Select activity during which pain occurs:-</b><br><br>
											<ol>
												<li><input type="radio" name="sensitivity" value="sensitivity" id="sensitivity">On Chewing
												<div class="conditional">
													<br><b>Select time duration of pain</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">5 seconds
														<div class="conditional"><br><b>Apical Periodontitis</b><br><br></div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">One minute
														<div class="conditional"><br><b>Periapical/ Periodontal abscess</b><br><br></div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">On relieving chewing pressure<br><br>
														<div class="conditional"><b>Cracked Tooth Syndrome</b><br><br</div></li>
													</ol>
												</div></li>
												<li><input type="radio" name="sensitivity" value="sensitivity" id="sensitivity">On Eating hot/cold<br><br>
												<div class="conditional">
													<b>Temprature:-</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Hot
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="hot" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Irreversible Pulpitis</b><br><br></div></li>
																<li><input type="radio" name="hot" value="pain" id="pain">One Minute<br><br>
																<div class="conditional"><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Cold
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="cold" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Reversible Pulpitis</b><br><br>
																</div> </li>
																<li><input type="radio" name="cold" value="pain" id="pain">One Minute<br><br>
																<div class="conditional"><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">None
														<div class="conditional"><br><b>Pulp Necrosis</b><br><br></div> </li>
													</ol>
												</div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="foodLodgement" id="foodLodgement">Food Lodgement
										<div class="conditional">
										<br><b>How long has this been troubling you?</b><br><br>											
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Cavity</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Cavity</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="crowdedTeeth" id="crowdedTeeth">Crowded Teeth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Malocclusion</b><br><br></div></li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Malocclusion</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="badOdour" id="badOdour">Bad Odour
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Halitosis</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><br><b>Halitosis</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="plaqueDeposits" id="plaqueDeposits">Plaque Deposits
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Poor Oral Hygiene</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><br><b>Poor Oral Hygiene</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="difficulty" id="difficulty">Difficulty in Biting/Chewing
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Periodontitis</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Periodontitis</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="yellowTeeth" id="yellowTeeth">Yellow Teeth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Tartar Deposits</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Tartar Deposits</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="stains" id="stains">Stains on Teeth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><b>Tartar Deposits/Decay</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Tartar Deposits/Decay</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="missingTooth" id="missingTooth">Missing Tooth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Collapsed Bite</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Collapsed Bite</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="looseteeth" id="looseteeth">Loose Teeth<br><br>
										<div class="conditional">
											<b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Periodontitis</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Periodontitis</b><br><br></div> </li>
											</ol>
										</div></li>	

									</ol>
								</div></li>	
								<li><input type="radio" name="teethRegion" value="left" id="left">Left
								<div class="conditional">
									<br><b>Select Symptom affecting The Left of the Lower Teeth:-</b><br><br>
									<ol>
										<li><input type="radio" name="teethRegionUpper" value="pain" id="pain">Pain
										<div class="conditional">
											<br><b>Select activity during which pain occurs:-</b><br><br>
											<ol>
												<li><input type="radio" name="pain" value="pain" id="pain">On Chewing
												<div class="conditional">
													<br><b>Duration of pain while chewing:-</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">5 seconds
															<div class="conditional"><br><b>Apical Periodontitis</b><br><br></div> </li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">One minute
														<div class="conditional"><br><b>Periapical/ Periodontal abscess</b><br><br></div> </li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">On relieving chewing pressure<br><br>
														<div class="conditional"><b>Cracked Tooth Syndrome</b><br><br></div> </li>
													</ol>
												</div> </li>
												<li><input type="radio" name="pain" value="pain" id="pain">On Eating hot/cold<br><br>
												<div class="conditional">
													<b>Temprature:-</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Cold
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="cold" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Reversible Pulpitis</b><br><br>
																</div> </li>
																<li><input type="radio" name="cold" value="pain" id="pain">One Minute
																<div class="conditional"><br><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div> </li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Hot
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="hot" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Irreversible Pulpitis</b><br><br></div></li>
																<li><input type="radio" name="hot" value="pain" id="pain">One Minute<br><br>
																<div class="conditional"><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">None<br><br>
														<div class="conditional"><b>Pulp Necrosis</b><br><br></div> </li>
													</ol>
												</div></li>
											</ol>
										</div> </li>
										<li><input type="radio" name="teethRegionUpper" value="sensitivity" id="sensitivity">Sensitivity
										<div class="conditional">
											<br><b>Select activity during which pain occurs:-</b><br><br>
											<ol>
												<li><input type="radio" name="sensitivity" value="sensitivity" id="sensitivity">On Chewing
												<div class="conditional">
													<br><b>Select time duration of pain</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">5 seconds
														<div class="conditional"><br><b>Apical Periodontitis</b><br><br></div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">One minute
														<div class="conditional"><br><b>Periapical/ Periodontal abscess</b><br><br></div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">On relieving chewing pressure<br><br>
														<div class="conditional"><b>Cracked Tooth Syndrome</b><br><br</div></li>
													</ol>
												</div></li>
												<li><input type="radio" name="sensitivity" value="sensitivity" id="sensitivity">On Eating hot/cold<br><br>
												<div class="conditional">
													<b>Temprature:-</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Hot
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="hot" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Irreversible Pulpitis</b><br><br></div></li>
																<li><input type="radio" name="hot" value="pain" id="pain">One Minute<br><br>
																<div class="conditional"><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Cold
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="cold" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Reversible Pulpitis</b><br><br>
																</div> </li>
																<li><input type="radio" name="cold" value="pain" id="pain">One Minute<br><br>
																<div class="conditional"><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">None
														<div class="conditional"><br><b>Pulp Necrosis</b><br><br></div> </li>
													</ol>
												</div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="foodLodgement" id="foodLodgement">Food Lodgement
										<div class="conditional">
										<br><b>How long has this been troubling you?</b><br><br>											
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Cavity</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Cavity</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="crowdedTeeth" id="crowdedTeeth">Crowded Teeth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Malocclusion</b><br><br></div></li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Malocclusion</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="badOdour" id="badOdour">Bad Odour
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Halitosis</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><br><b>Halitosis</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="plaqueDeposits" id="plaqueDeposits">Plaque Deposits
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Poor Oral Hygiene</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><br><b>Poor Oral Hygiene</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="difficulty" id="difficulty">Difficulty in Biting/Chewing
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Periodontitis</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Periodontitis</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="yellowTeeth" id="yellowTeeth">Yellow Teeth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Tartar Deposits</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Tartar Deposits</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="stains" id="stains">Stains on Teeth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><b>Tartar Deposits/Decay</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Tartar Deposits/Decay</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="missingTooth" id="missingTooth">Missing Tooth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Collapsed Bite</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Collapsed Bite</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="looseteeth" id="looseteeth">Loose Teeth<br><br>
										<div class="conditional">
											<b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Periodontitis</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Periodontitis</b><br><br></div> </li>
											</ol>
										</div></li>	

									</ol>
								</div></li>				
								<li><input type="radio" name="teethRegion" value="Right" id="right">Right<br><br>
								<div class="conditional">
									<br><b>Select Symptom affecting The Right of the Lower Teeth:-</b><br><br>
									<ol>
										<li><input type="radio" name="teethRegionUpper" value="pain" id="pain">Pain
										<div class="conditional">
											<br><b>Select activity during which pain occurs:-</b><br><br>
											<ol>
												<li><input type="radio" name="pain" value="pain" id="pain">On Chewing
												<div class="conditional">
													<br><b>Duration of pain while chewing:-</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">5 seconds
															<div class="conditional"><br><b>Apical Periodontitis</b><br><br></div> </li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">One minute
														<div class="conditional"><br><b>Periapical/ Periodontal abscess</b><br><br></div> </li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">On relieving chewing pressure<br><br>
														<div class="conditional"><b>Cracked Tooth Syndrome</b><br><br></div> </li>
													</ol>
												</div> </li>
												<li><input type="radio" name="pain" value="pain" id="pain">On Eating hot/cold<br><br>
												<div class="conditional">
													<b>Temprature:-</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Cold
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="cold" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Reversible Pulpitis</b><br><br>
																</div> </li>
																<li><input type="radio" name="cold" value="pain" id="pain">One Minute
																<div class="conditional"><br><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div> </li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Hot
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="hot" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Irreversible Pulpitis</b><br><br></div></li>
																<li><input type="radio" name="hot" value="pain" id="pain">One Minute<br><br>
																<div class="conditional"><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">None<br><br>
														<div class="conditional"><b>Pulp Necrosis</b><br><br></div> </li>
													</ol>
												</div></li>
											</ol>
										</div> </li>
										<li><input type="radio" name="teethRegionUpper" value="sensitivity" id="sensitivity">Sensitivity
										<div class="conditional">
											<br><b>Select activity during which pain occurs:-</b><br><br>
											<ol>
												<li><input type="radio" name="sensitivity" value="sensitivity" id="sensitivity">On Chewing
												<div class="conditional">
													<br><b>Select time duration of pain</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">5 seconds
														<div class="conditional"><br><b>Apical Periodontitis</b><br><br></div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">One minute
														<div class="conditional"><br><b>Periapical/ Periodontal abscess</b><br><br></div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">On relieving chewing pressure<br><br>
														<div class="conditional"><b>Cracked Tooth Syndrome</b><br><br</div></li>
													</ol>
												</div></li>
												<li><input type="radio" name="sensitivity" value="sensitivity" id="sensitivity">On Eating hot/cold<br><br>
												<div class="conditional">
													<b>Temprature:-</b><br><br>
													<ol>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Hot
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="hot" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Irreversible Pulpitis</b><br><br></div></li>
																<li><input type="radio" name="hot" value="pain" id="pain">One Minute<br><br>
																<div class="conditional"><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">Cold
														<div class="conditional">
															<br><b>Select time duration of pain</b><br><br>
															<ol>
																<li><input type="radio" name="cold" value="pain" id="pain"> 5 seconds
																<div class="conditional"><br><b>Reversible Pulpitis</b><br><br>
																</div> </li>
																<li><input type="radio" name="cold" value="pain" id="pain">One Minute<br><br>
																<div class="conditional"><b>Irreversible Pulpitis</b><br><br></div></li>
															</ol>
														</div></li>
														<li><input type="radio" name="Chewing" value="pain" id="pain">None
														<div class="conditional"><br><b>Pulp Necrosis</b><br><br></div> </li>
													</ol>
												</div></li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="foodLodgement" id="foodLodgement">Food Lodgement
										<div class="conditional">
										<br><b>How long has this been troubling you?</b><br><br>											
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Cavity</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Cavity</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="crowdedTeeth" id="crowdedTeeth">Crowded Teeth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Malocclusion</b><br><br></div></li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Malocclusion</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="badOdour" id="badOdour">Bad Odour
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Halitosis</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><br><b>Halitosis</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="plaqueDeposits" id="plaqueDeposits">Plaque Deposits
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Poor Oral Hygiene</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><br><b>Poor Oral Hygiene</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="difficulty" id="difficulty">Difficulty in Biting/Chewing
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Periodontitis</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Periodontitis</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="yellowTeeth" id="yellowTeeth">Yellow Teeth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Tartar Deposits</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Tartar Deposits</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="stains" id="stains">Stains on Teeth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><b>Tartar Deposits/Decay</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Tartar Deposits/Decay</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="missingTooth" id="missingTooth">Missing Tooth
										<div class="conditional">
											<br><b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Collapsed Bite</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Collapsed Bite</b><br><br></div> </li>
											</ol>
										</div></li>
										<li><input type="radio" name="teethRegionUpper" value="looseteeth" id="looseteeth">Loose Teeth<br><br>
										<div class="conditional">
											<b>How long has this been troubling you?</b><br><br>
											<ol>
											<li><input type="radio" name="teethSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
											<div class="conditional"><br><b>Periodontitis</b><br><br></div> </li>
											<li><input type="radio" name="teethSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than two weeks<br><br>
											<div class="conditional"><b>Periodontitis</b><br><br></div> </li>
											</ol>
										</div></li>	

									</ol>
								</div></li>
							</ol>	
						</div>	</li>
				</ol>
			</div>
		</li>
		<li><input type="radio" name="region" value="tongue" id="tongue">Tongue
			<div class="conditional">
			<br><b>Select region of Tongue affected:-</b><br><br>
				<ol>
					<li><input type="radio" name="tongue" value="upper" id="upper">Upper
					<div class="conditional">
						<br><b>Select Symptom :-</b><br><br>
						<ol>
							<li><input type="radio" name="tongueSymptom" value="ulcer" id="ulcer">Ulcer/Injury <br><br>
							<div class="conditional">
								<b>How long has this been troubling you?</b><br><br>
								<ol>
									<li><input type="radio" name="tongueSymptomDuration" value="lessThanWeek" id="lessThanWeek">Less than a Week
									<div class="conditional"><br><b>Acute Inflammation of Tongue </b><br><br></div> </li>
									<li><input type="radio" name="tongueSymptomDuration" value="moreThanWeek" id="moreThanWeek">More than a Week
									<div class="conditional"><br><b>Chronic Inflammation of Tongue</b><br><br></div> </li>
									<li><input type="radio" name="tongueSymptomDuration" value="moreThanWeek" id="moreThanWeek">More than two Weeks<br><br>
									<div class="conditional"><b>Malignancy</b><br><br></div> </li>
								</ol>
							</div></li>
						</ol>
					</div> </li>
					<li><input type="radio" name="tongue" value="lower" id="lower">Lower
					<div class="conditional">
						<br><b>Select Symptom :-</b><br><br>
						<ol>
							<li><input type="radio" name="tongueSymptom" value="ulcer" id="ulcer">Ulcer/Injury <br><br>
							<div class="conditional">
								<b>How long has this been troubling you?</b><br><br>
								<ol>
									<li><input type="radio" name="tongueSymptomDuration" value="lessThanWeek" id="lessThanWeek">Less than a Week
									<div class="conditional"><br><b>Acute Inflammation of Tongue </b><br><br></div> </li>
									<li><input type="radio" name="tongueSymptomDuration" value="moreThanWeek" id="moreThanWeek">More than a Week
									<div class="conditional"><br><b>Chronic Inflammation of Tongue</b><br><br></div> </li>
									<li><input type="radio" name="tongueSymptomDuration" value="moreThanWeek" id="moreThanWeek">More than two Weeks<br><br>
									<div class="conditional"><b>Malignancy</b><br><br></div> </li>
								</ol>
							</div></li>
						</ol>
					</div></li>
					<li><input type="radio" name="tongue" value="front" id="front">Front
					<div class="conditional">
						<br><b>Select Symptom :-</b><br><br>
						<ol>
							<li><input type="radio" name="tongueSymptom" value="ulcer" id="ulcer">Ulcer/Injury <br><br>
							<div class="conditional">
								<b>How long has this been troubling you?</b><br><br>
								<ol>
									<li><input type="radio" name="tongueSymptomDuration" value="lessThanWeek" id="lessThanWeek">Less than a Week
									<div class="conditional"><br><b>Acute Inflammation of Tongue </b><br><br></div> </li>
									<li><input type="radio" name="tongueSymptomDuration" value="moreThanWeek" id="moreThanWeek">More than a Week
									<div class="conditional"><br><b>Chronic Inflammation of Tongue</b><br><br></div> </li>
									<li><input type="radio" name="tongueSymptomDuration" value="moreThanWeek" id="moreThanWeek">More than two Weeks<br><br>
									<div class="conditional"><b>Malignancy</b><br><br></div> </li>
								</ol>
							</div></li>
						</ol>
					</div></li>
					<li><input type="radio" name="tongue" value="back" id="back">Back
					<div class="conditional">
						<br><b>Select Symptom :-</b><br><br>
						<ol>
							<li><input type="radio" name="tongueSymptom" value="ulcer" id="ulcer">Ulcer/Injury <br><br>
							<div class="conditional">
								<b>How long has this been troubling you?</b><br><br>
								<ol>
									<li><input type="radio" name="tongueSymptomDuration" value="lessThanWeek" id="lessThanWeek">Less than a Week
									<div class="conditional"><br><b>Acute Inflammation of Tongue </b><br><br></div> </li>
									<li><input type="radio" name="tongueSymptomDuration" value="moreThanWeek" id="moreThanWeek">More than a Week
									<div class="conditional"><br><b>Chronic Inflammation of Tongue</b><br><br></div> </li>
									<li><input type="radio" name="tongueSymptomDuration" value="moreThanWeek" id="moreThanWeek">More than two Weeks<br><br>
									<div class="conditional"><b>Malignancy</b><br><br></div> </li>
								</ol>
							</div></li>
						</ol>
					</div></li>
					<li><input type="radio" name="tongue" value="left" id="left">Left
					<div class="conditional">
						<br><b>Select Symptom :-</b><br><br>
						<ol>
							<li><input type="radio" name="tongueSymptom" value="ulcer" id="ulcer">Ulcer/Injury <br><br>
							<div class="conditional">
								<b>How long has this been troubling you?</b><br><br>
								<ol>
									<li><input type="radio" name="tongueSymptomDuration" value="lessThanWeek" id="lessThanWeek">Less than a Week
									<div class="conditional"><br><b>Acute Inflammation of Tongue </b><br><br></div> </li>
									<li><input type="radio" name="tongueSymptomDuration" value="moreThanWeek" id="moreThanWeek">More than a Week
									<div class="conditional"><br><b>Chronic Inflammation of Tongue</b><br><br></div> </li>
									<li><input type="radio" name="tongueSymptomDuration" value="moreThanWeek" id="moreThanWeek">More than two Weeks<br><br>
									<div class="conditional"><b>Malignancy</b><br><br></div> </li>
								</ol>
							</div></li>
						</ol>
					</div></li>
					<li><input type="radio" name="tongue" value="Right" id="right">Right<br><br>
						<div class="conditional">
						<b>Select Symptom :-</b><br><br>
						<ol>
							<li><input type="radio" name="tongueSymptom" value="ulcer" id="ulcer">Ulcer/Injury <br><br>
							<div class="conditional">
								<b>How long has this been troubling you?</b><br><br>
								<ol>
									<li><input type="radio" name="tongueSymptomDuration" value="lessThanWeek" id="lessThanWeek">Less than a Week
									<div class="conditional"><br><b>Acute Inflammation of Tongue </b><br><br></div> </li>
									<li><input type="radio" name="tongueSymptomDuration" value="moreThanWeek" id="moreThanWeek">More than a Week
									<div class="conditional"><br><b>Chronic Inflammation of Tongue</b><br><br></div> </li>
									<li><input type="radio" name="tongueSymptomDuration" value="moreThanWeek" id="moreThanWeek">More than two Weeks<br><br>
									<div class="conditional"><b>Malignancy</b><br><br></div> </li>
								</ol>
							</div></li>
						</ol>
					</div>
					</li>
				</ol>
			</div>
		</li>
		<li><input type="radio" name="region" value="gums" id="tonsils">Tonsils
			<div class="conditional">
			<br><b>Select symptons for Tonsils:-</b><br><br>
				<ol>
					<li><input type="radio" name="tonsils" value="redness" id="redness">Redness
					<div class="conditional">
						<br><b>Tonsil Symptom Duration:-</b><br><br>
						<ol>
							<li><input type="radio" name="tonsilsSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
							<div class="conditional">
								<br><b>Acute Tonsilitis</b><br><br> 
							</div> </li>
							<li><input type="radio" name="tonsilsSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than a week<br><br>
							<div class="conditional">
								<b>Chronic Tonsilitis</b><br><br> 
							</div></li>
						</ol>
					</div> </li>
					<li><input type="radio" name="tonsils" value="swelling" id="swelling">Swelling
					<div class="conditional">
						<br><b>Tonsil Symptom Duration:-</b><br><br>
						<ol>
							<li><input type="radio" name="tonsilsSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
							<div class="conditional">
								<br><b>Acute Tonsilitis</b><br><br> 
							</div></li>
							<li><input type="radio" name="tonsilsSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than a week<br><br>
							<div class="conditional">
								<b>Chronic Tonsilitis</b><br><br> 
							</div></li>
						</ol>
					</div></li>
					<li><input type="radio" name="tonsils" value="pain" id="pain">Pain
					<div class="conditional">
						<br><b>Tonsil Symptom Duration:-</b><br><br>
						<ol>
							<li><input type="radio" name="tonsilsSymtomDuration" value="lessThanWeek" id="lessThanWeek">Less than a week
							<div class="conditional">
								<br><b>Acute Tonsilitis</b><br><br> 
							</div></li>
							<li><input type="radio" name="tonsilsSymtomDuration" value="moreThanWeek" id="moreThanWeek">More than a week
							<div class="conditional">
								<br><b>Acute Tonsilitis</b><br><br> 
							</div></li>
						</ol>
					</div></li>
				</ol>
			</div>
		</li>
					</div>
						</ol>
						<a href="#" class="btn btn-warning mt-4">Submit</a>
					</fieldset>
						<br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>