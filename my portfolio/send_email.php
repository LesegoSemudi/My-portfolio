<?php
if(isset($_POST['send'])){
    $to = "tsheposemudi@gmail.com"; // Your email address
    $subject = "Website Contact Form"; // Subject of the email
    $name = $_POST['fullname']; // Sender's name
    $email = $_POST['email']; // Sender's email address
    $message = $_POST['message']; // Message content
    
    $headers = "From: $name <$email>\r\n"; // Construct the email headers
    
    // Send the email
    if(mail($to, $subject, $message, $headers)){
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
}
?>

<section class="contact-form">
    <h3 class="h3 form-title">Contact Form</h3>
    <form action="#" class="form" method="POST" data-form>
        <div class="input-wrapper">
            <input type="text" name="fullname" class="form-input" placeholder="Full name" required data-form-input>
            <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
        </div>
        <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>
        <button class="form-btn" type="submit" name="send" disabled data-form-btn>
            <ion-icon name="paper-plane"></ion-icon>
            <span>Send Message</span>
        </button>
    </form>
</section>
