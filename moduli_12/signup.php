<?php

	include_once('config.php');	


	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];

		
        $sql = "insert into users (name, surname, email) values (:name, :surname, :email)";
        $sqlQuery = $conn->prepare($sql);
    
        $sqlQuery->bindParam(':name', $name); 
        $sqlQuery->bindParam(':surname', $surname); 
        $sqlQuery->bindParam(':email', $email);

        $sqlQuery->execute();

        echo "Data saved successfully ...";
	}
?>

<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body> <a href="dashboard.php">Dashboard</a>
        <!--
        <form action="signup.php" method="POST">
            <input type="text" name="name" placeholder="Name"></br>
            <input type="text" name="surname" placeholder="Surname"></br>
            <input type="email" name="email" placeholder="Email"></br>
            <button type="submit" name="submit">Add</button>
        </form> -->
        <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form action="signup.php" method="POST" >

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div data-mdb-input-init class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-lg" name="name" />
                    <label class="form-label" for="firstName">First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div data-mdb-input-init class="form-outline">
                    <input type="text" id="lastName" class="form-control form-control-lg" name="surname" />
                    <label class="form-label" for="lastName" >Last Name</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div data-mdb-input-init class="form-outline datepicker w-100">
                    <input type="text" class="form-control form-control-lg" id="birthdayDate" />
                    <label for="birthdayDate" class="form-label">Birthday</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                      value="option1" checked />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                      value="option2" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                      value="option3" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div data-mdb-input-init class="form-outline">
                    <input type="email" id="emailAddress" class="form-control form-control-lg" name="email" />
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div data-mdb-input-init class="form-outline">
                    <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-12">

                  <select class="select form-control-lg">
                    <option value="1" disabled>Choose option</option>
                    <option value="2">Subject 1</option>
                    <option value="3">Subject 2</option>
                    <option value="4">Subject 3</option>
                  </select>
                  <label class="form-label select-label">Choose option</label>

                </div>
              </div>

              <div class="mt-4 pt-2">
                <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Submit" name="submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    </body>
</html>
