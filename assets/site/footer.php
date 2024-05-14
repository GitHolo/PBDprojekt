<footer id="footer">
    <div class="inner">
        <section>
            <h2>Contact Us</h2>
<form method="post" action="#">
    <div class="fields">
        <div class="field half">
            <input type="text" name="name" id="name" placeholder="Name" />
        </div>

        <div class="field half">
            <input type="text" name="email" id="email" placeholder="Email" />
        </div>

        <div class="field">
            <input type="text" name="subject" id="subject" placeholder="Subject" />
        </div>

        <div class="field">
            <textarea name="message" id="message" rows="3" placeholder="Notes"></textarea>
        </div>

        <div class="field text-right">
            <label>&nbsp;</label>
            <ul class="actions">
                <li><input type="submit" value="Send Message" class="primary" name="submit" /></li>
            </ul>
        </div>
    </div>
</form>

<?php
/*
if(isset($_POST['submit'])){
    $to = "papasrestaurants@hotmail.com";
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message";

    // Send the email
    if(mail($to, $subject, $email_content)){
        echo "<script>alert('Message sent successfully!');</script>";
    } else {
        echo "<script>alert('Failed to send message. Please try again later.');</script>";
    }
}
*/
?>

        </section>
       <?php include "./assets/site/fsection.php"; ?>
    </div>
</footer>