<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Get the Perfect Gift</title>

    <!-- Icons font CSS-->
    <link href="../vendor/perfect/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../vendor/perfect/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/perfect/main.css" rel="stylesheet" media="all">
</head>

<body>
	
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins" >
		
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Tell us more about them</h2>
                    <form method="get" action="perfect_results.php">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Relationship to them</label>
                                    <input class="input--style-4" type="text" name="rship">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Age</label>
                                    <input class="input--style-4" type="text" name="age">
                                </div>
                            </div>
                       
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"> What is their Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                           

                        <div class="input-group">
                            <label class="label">Sports Interest</label>
                            <div class="rs-select2 js-select-simple select--no-search">
							<select id="trait1" name ="trait1" class="form-control">
										<option value="" trait1>Sports Interest</option>
											<option value="not-sporty">Not-Sporty</option>
											<option value="Basketball">Basketball</option>
											<option value="Football">Football</option>
										</select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						<div class="input-group">
                            <label class="label">Personality</label>
                            <div class="rs-select2 js-select-simple select--no-search">
							<select id="trait2" name ="trait2" class="form-control">
										<option value="" personality>Personality</option>
											<option value="extrovert">Extrovert</option>
											<option value="introvert">Introvert</option>
											<option value="Ambivert">Ambivert</option>
										</select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						<div class="input-group">
                            <label class="label">Character</label>
                            <div class="rs-select2 js-select-simple select--no-search">
							<select id="trait2" name ="trait3" class="form-control">
							<option value="" character>Character</option>
											<option value="creative">Creative</option>
											<option value="logical">Logical</option>
										</select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						<div class="col-2">
                                <div class="input-group">
                                    <label class="label">Anything we should keep in mind?</label>
                                    <input class="input--style-4" type="text" name="trait4">
                                </div>
                            </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Get the perfect Gift</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../vendor/perfect/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../vendor/perfect/select2/select2.min.js"></script>
    <script src="../vendor/perfect/datepicker/moment.min.js"></script>
    <script src="../vendor/perfect/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="../js/perfect/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->