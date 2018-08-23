<article class="contact">
  <br><br>
  <p class="info">Please contact the webmaster regarding this website </p>
  <p class="info">WebMaster@seifutibo.org</p>
  <br>
  <?php
    // display form if user has not clicked submit
    if (!isset($_POST["submit"])) {
  ?>
  <p class="info">Use the following simple form to submit your comments, messages and Donations*</p>
  <form class="registration form-horizontal" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
   <section class="row">
      <label class="col col-lg-4 control-label" for="myname">Name</label>
      <div class="controls">
        <input class="col col-lg-8" type="text" name="myname" id="myname" autofocus required>
      </div><!-- controls -->
    </section><!-- row -->

    <section class="row">
      <label class="col col-lg-4 control-label" for="myemail">Email adress</label>
      <div class="controls">
        <input class="col col-lg-8" type="email" name="myemail" id="myemail" required autocomplete="off" />
      </div><!-- controls -->
    </section><!-- row -->

    <section class="row">
      <label class="col col-lg-4 control-label" for="myemail">Comments</label>
      <div class="controls">
        <textarea class="col col-lg-8" type="comment" name="mycomment" id="mycomment"rows="5"></textarea>
      </div><!-- controls -->
    </section><!-- row -->

    <div class="additional">
      <br>
      <button class="btn" type="submit" name="submit">Submit</button>
      <p>* Donation can be sent to the following address, Pls mention the type of donation sent and relavent information before you submit the form.</p>      
      <p>Make Check Payable to Seifu Makonnen</p>
      <p class="address">One West Bank</p>
      <p class="address">850 Wilshire Blvd</p>
      <p class="address">Santa Monica, Ca 90401</p>
      <p class="address">Att. Martha Negash</p>
    </div>
  </form>

  <?php
      } else {    // the user has submitted the form
        // Check if the input fields are filled out
        if (isset($_POST["myname"])) {
          $from = $_POST["myemail"]; // sender
          $subject = "Mail from " . $_POST["myname"] . "using seifutibo.org's contact form";
          $message = $_POST["mycomment"];
          // message lines should not exceed 70 characters (PHP rule), so wrap it
          $message = wordwrap($message, 70);
          // send mail
          $mail = mail("mekugirma@gmail.com", $subject, $message, "From: $from\n");
          if($mail){
          echo "<br><p>Thank you for sending us your message.</p><br>";
            }else{
          echo "Failed, sending mail with the php function mail() doesn't seem to work on this server."; 
            }
          
        }
      }
  ?>
  

</article><!-- home -->
