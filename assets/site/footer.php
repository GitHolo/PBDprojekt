<footer id="footer">
    <div class="inner">
        <section>
            <!-- Title for the contact form -->
            <h2>Contact Us</h2>
            <!-- Contact form -->
            <form method="post" action="#">
                <div class="fields">
                    <!-- Input field for name -->
                    <div class="field half">
                        <input type="text" name="name" id="name" placeholder="Name" />
                    </div>
                    <!-- Input field for email -->
                    <div class="field half">
                        <input type="text" name="email" id="email" placeholder="Email" />
                    </div>
                    <!-- Input field for subject -->
                    <div class="field">
                        <input type="text" name="subject" id="subject" placeholder="Subject" />
                    </div>
                    <!-- Textarea for message -->
                    <div class="field">
                        <textarea name="message" id="message" rows="3" placeholder="Notes"></textarea>
                    </div>
                    <!-- Submit button -->
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
                // Define recipient email
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
                // Note: This part does not work on XAMPP
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
