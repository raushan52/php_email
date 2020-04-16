<?php include('php_process.php'); ?>
<link rel="stylesheet" href="style.css" type='text/css'> 
<div class="container">  
  <form id="contact" action="<?= $_SERVER['PHP_SELF']; ?> " method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" name="name" value="<?= $name ?>" autofocus>
      <span class="error"><?= $name_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="text" name="email" tabindex="2" value="<?= $email ?>">
      <span class="error"><?= $email_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="text" tabindex="3"  name="phone" value="<?= $phone ?>">
      <span class="error"><?= $phone_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site starts with http://" type="text" tabindex="4" name="url" value="<?= $url ?>">
      <span class="error"><?= $url_error ?></span>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." tabindex="5" type="text" name="message" value="<?= $message ?>"></textarea>
      
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <div class="success"><?= $success; ?></div>
  </form>
 
  
</div>