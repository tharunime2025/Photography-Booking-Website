<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
    <link rel="stylesheet" type="text/css" href="reachoutform1.css">
    <?php
session_start(); // Start the session if not already started

// Check if session data is available
if (isset($_SESSION['form_data'])) {
    $form_data = $_SESSION['form_data'];
    // Clear session data to avoid retaining it for future visits
    unset($_SESSION['form_data']);
} else {
    $form_data = array(
        'name' => '',
        'pnumber' => '',
        'email' => '',
        'date' => '',
        'gnumber' => '',
        'location' => '',
        'service_type' => '',
        'message' => '',
        'authorize' => '',
    );
}
?>
</head>
<body>
<?php include 'defheader.php'; ?>
<!-- <p id="p1">Let’s talk! We’re looking forward to getting to know you and your event plans. we love a WhatsApp message or a Phone Call. Amazing photography starts with getting know each other.When coming in for your initial consultation, youcan expect to meet your photography team anddive further into our customized wedding photography packages.</p> -->
 <!-- <header>  
    <h2>A M A Z I N G ! </h2>
    <p>WEDDINGS & ELOPEMENT | HONEYMOON | COUPLE | PORTRAIT </p>
 </header> -->

 <div class="page-title">
        <h1>Reach Out</h1>
    </div>
    <div class="pre-form">
    <h2 style ="color: #737373">Complete the form below to get in touch with us. We're here to answer your queries, discuss your photography needs, and turn your moments into lasting memories. Looking forward to hearing from you!</h2>
    <!-- <p>More content here...</p> -->
</div>
 <form action="process_form.php" method="post" onsubmit="return validateForm()" autocomplete="off">
<Fieldset>
<legend style="color: #2F4F4F " align="center"  >  📷Oculaa Photography </legend>

<h1 align="center">IF YOU WANT EMOTIONAL MEMORIES , CONTACT US ✨</h1>

<table>

    <label for="name">Name : </label>
    <input type="text" id="name" name="name" placeholder="Name" required><br><br>

    <label for="pnumber">phone number:</label>
    <input type="tel" id="pnumber" name="pnumber"  placeholder="Phone Number" maxlength="10" actionrequired><br><br>

    <label for="email">Email :</label>
    <input type="text" id="email" name="email"  placeholder="Email" required><br><br>

    <label for="date">Event Date :</label>
    <input type="date" id="date" name="date"  placeholder="Event Date" required><br><br>

    <label for="gnumber">Guest Number :</label>
    <input type="number" id="gnumber" name="gnumber"  placeholder="Guest Number" required><br><br>

    <label for="location">Location :</label>
    <input type="text" id="location" name="location" placeholder="Location" required><br><br>

<!-- ... (previous code) ... -->
<label for="service" id="service">What Type of Service Would You Like ? </label> <br>

<input type="radio" name="service_type" value="option1" onclick="showOptions('option1_options')">Wedding<br>

<div id="option1_options" class="additional-options" style="display:none;">
    <input type="radio" name="sub_option_option1" value="sub_option1">Gold<br>
    <input type="radio" name="sub_option_option1" value="sub_option2">Platinum<br>
</div>

<input type="radio" name="service_type" value="option2" onclick="showOptions('option2_options')">Birthday<br>

<div id="option2_options" class="additional-options" style="display:none;">
    <input type="radio" name="sub_option_option2" value="sub_option1">Gold<br>
    <input type="radio" name="sub_option_option2" value="sub_option2">Platinum<br>
</div>

<input type="radio" name="service_type" value="option3" onclick="showOptions('option3_options')">Event<br>

<div id="option3_options" class="additional-options" style="display:none;">
    <input type="radio" name="sub_option_option3" value="sub_option1">Gold<br>
    <input type="radio" name="sub_option_option3" value="sub_option2">Platinum<br>
</div>

<input type="radio" name="service_type" value="option4" onclick="showOptions('option4_options')">Graduation<br>

<div id="option4_options" class="additional-options" style="display:none;">
        <input type="radio" name="option4_sub_option" value="sub_option1">Individual<br>
        <input type="radio" name="option4_sub_option" value="sub_option2">Couple<br>
        <input type="radio" name="option4_sub_option" value="sub_option3">Group<br>
</div><br><br>

<label for="other">Other :</label>
<textarea id="message" name="message" rows="6" cols="80" placeholder="Tell me about what this day will be like , how important it is for you to have real and exciting memories made by us." ></textarea><br><br>

<input type="checkbox" name="authorize" id="authorize"> I authorize the processing of my personal data . </br><br>
<input type="submit" value="Submit">
<!-- ... (remaining code) ... -->
    
  
    <!-- Additional fields -->
    
    <!-- <label for="field5">Field 5:</label> -->
    <!-- <input type="text" id="field5" name="field5"><br><br> -->
<!--  -->

   

    
<div id="error-message" style="color: red;"></div>

</table>
</Fieldset>
</form>
<div class="contact-info">
    <h2>Contact Oculaa Photography</h2>
    <p>Stay connected with us on social media:</p>
    <ul class="social-links">
        <li><a href="https://www.facebook.com/OculaaPhotography" target="_blank">Facebook</a></li>
        <li><a href="https://www.instagram.com/oculaaphotography" target="_blank">Instagram</a></li>
        <li><a href="https://twitter.com/OculaaPhoto" target="_blank">Twitter</a></li>
        <li><a href="https://www.linkedin.com/company/oculaaphotography" target="_blank">LinkedIn</a></li>
        <li><a href="mailto:oculaaphotography@gmail.com" target="_blank">Email</a><li>

    </ul>
    <p>Contact us directly:</p>
    <ul class="contact-details">
        <li><i class="fas fa-phone"></i> Call: +94 7 112 32034</li>
        <li><i class="fab fa-whatsapp"></i> WhatsApp: +94 7 112 32034</li>
    </ul>
</div>

<?php include 'footer.php'; ?>

<script>
function validateForm() {
    var name = document.getElementById("name").value;
    var pnumber = document.getElementById("pnumber").value;
    var email = document.getElementById("email").value;
    var date = document.getElementById("date").value;
    var gnumber = document.getElementById("gnumber").value;
    var location = document.getElementById("location").value;
    var mainOptionChecked = document.querySelector('input[name="service_type"]:checked');
    var subOptionChecked;


// Check if a sub-option is selected based on the service type
    if (mainOptionChecked) {
        subOptionChecked = document.querySelector('input[name="sub_option_' + mainOptionChecked.value + '"]:checked');
    }

    var authorizationChecked = document.getElementById("authorize").checked;

    

    if (name == "" || pnumber == "" || email == "" || date == "" || gnumber == "" || location == "" || mainOptionChecked == null || subOptionChecked == null) {
        document.getElementById("error-message").innerHTML = "Please fill out all fields and select a service type and sub-option.";
        return false;
    }

    if (parseInt(gnumber) <= 1) {
        document.getElementById("error-message").innerHTML = "Guest Number must be greater than 1.";
        return false;
    }
    if (!/^\d{10}$/.test(pnumber)) {
        document.getElementById("error-message").innerHTML = "Phone Number must be a 10-digit numerical value.";
        return false;
    }

    if (!/^\d+$/.test(pnumber)) {
        document.getElementById("error-message").innerHTML = "Phone Number must contain only numerical digits.";
        return false;
    }
    if (!document.getElementById("authorize").checked) {
        document.getElementById("error-message").innerHTML = "Please authorize the processing of your personal data.";
        return false;
    }

    return true;
}

function showOptions(option) {
            var options = document.getElementsByClassName('additional-options');

            for (var i = 0; i < options.length; i++) {
                options[i].style.display = 'none';
            }

            document.getElementById(option).style.display = 'block';
        }
</script>


</body>
</html>
