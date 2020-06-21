<!DOCTYPE html>

<style>
/* Style all input fields */

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 5px 35px;
  font-size: 13px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>

 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div class="container mt-5 bg-dark text-light p-2 rounded w-25" >
     <div class="form">
      
            
      <div class="tab-content">
        <div id="signup">   
          <h1 class="text-center">Sign Up</h1>
          
          <form action="register.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap ">
              <label>
                First Name<span class="req" style="color: red;"> *</span>
              </label>
              <input type="text" name=fname required autocomplete="off" class="form-control" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req" style="color: red;"> *</span>
              </label>
              <input type="text" name=lname required autocomplete="off" class="form-control" />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req" style="color: red;"> *</span>
            </label>
            <input id="email" type="email" name=email required autocomplete="off" class="form-control" />
          </div>
          
          <div class="field-wrap">
              <label for="psw">Password <span class="req" style="color: red;"> *</span>
              </label>
    <input type="password" class="form-control" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required autocomplete="off"/>
           
          </div>
          <div class="field-wrap">
            <label>
              Confirm Password <span class="req" style="color: red;"> *</span>
            </label>
            <input type="password" name=cpassword required autocomplete="off" class="form-control" />
           
          </div>
          <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
	</div>			
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
          <a href="login.php" >Already have account, LOGIN !!</a>
          <button type="submit" class="btn btn-success mt-3 btn-block"/>Get Started</button>
          
          </form>

        </div>
        
     
      </div><!-- tab-content -->
      
</div> </html>