<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

#EDIT THE FOLLOWING:
$toAddress = "info@nicholaskrege.dreamhosters.com";  //place your/your client's email address here
$toName = "Dr. Gallant"; //place your client's name here
$website = "Web120 FP";  //place NAME of your client's website here
#--------------END CONFIG AREA ------------------------#
$sendEmail = TRUE; //if true, will send an email, otherwise just show user data.
$dateFeedback = true; //if true will show date/time with reCAPTCHA error - style a div with class of dateFeedback
include_once 'config.php'; #site keys go inside your config.php file
include 'contact-lib/contact_include.php'; #complex unsightly code moved here
$response = null;
$reCaptcha = new ReCaptcha($secretKey);
if (isset($_POST["g-recaptcha-response"]))
{// if submitted check response
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
if ($response != null && $response->success)
    {#reCAPTCHA agrees data is valid (PROCESS FORM & SEND EMAIL)
        handle_POST($skipFields,$sendEmail,$toName,$fromAddress,$toAddress,$website,$fromDomain);             #Here we can enter the data sent into a database in a later version of this file
    ?>
    <!-- START HTML FEEDBACK -->
    <div class="contact-feedback">
        <h2>Your Form Have Been Received!</h2>
        <p>Thanks for reaching out!</p>
        <p>We'll respond via email within 24 hours, if you requested information.</p>
    </div>    
    <!-- END HTML FEEDBACK -->        
    <?php
}else{#show form, either for first time, or if data not valid per reCAPTCHA 
    if($response != null && !$response->success)
    {
        $feedback = dateFeedback($dateFeedback);
        send_POSTtoJS($skipFields); #function for sending POST data to JS array to reload form elements
    }//end failure feedback
 
?>

<!-- ********************FORM GOES BELOW******************** -->

<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="form-style-8">
        <label>
            <input type="text" name="field1" required="required" placeholder=" Full Name*" title="Name is required" tabindex="10" size="44" />
            <br />
            <input type="email" name="field2" required="required" placeholder=" Email*" title="A valid email is required" tabindex="10" size="44" />
        </label>
    </div>
    <div class="form-style-8">
        <label class="how">
			<strong>How Did You Hear About Us?</strong><br />
			<select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
				<option value="">Choose an option</option>
				<option value="Website">Website</option>
				<option value="Social Media">Social Media</option>
				<option value="A Friend">A Friend</option>
                <option value="Current Patient">A Current Client (Specify in Comments)</option>
				<option value="Other">Other (Specify in Comments)</option>
			</select>
		</label>
    </div>
    <div class="form-style-8">
        <label>
            <textarea name="Comments" placeholder="Message" onkeyup="adjust_textarea(this)"></textarea>
        </label>
    </div>
    <div><?=$feedback?></div>
    <div class="center">
    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
    </div>
    <div class="form-style-8">
        <input class="button" type="submit" value="Send Message" />
    </div>
</form>

    <script type="text/javascript"
        src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>
<?php
}
?>
