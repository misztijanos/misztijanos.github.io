<article class="contact content">
  <a id="scroll-helper" href="#"></a>
	<h1>Contact Us</h1><hr>
  <p>We're happy to answer any questions you have and we'll even drop by for a visit if you'd like to meet us in person before making your pet sitting decision.</p>
  <div class="row">
  
    <div class="col-xs-6 col-sm-4 col-sm-offset-2">
      <div class="thumbnail">
        <img src="images/oldphone.jpg" alt="...">
        <div class="caption">
          <p class="text-center">778-872-8735</p>
        </div>
      </div>
    </div>

    <div class="col-xs-6 col-sm-4">
      <div class="thumbnail">
        <img src="images/mailbox.jpg" alt="...">
        <div class="caption">
          <a class="center-block" href="mailto:helen@vancouverpetsitting.com" target="_top">
            <p class="text-center">helen@vancouverpetsitting.com</p>
          </a>
        </div>
      </div>
    </div>

  </div>

<!-- the form:  -->  
  <?php
    // display form if user has not clicked submit
    if (!isset($_POST["submit"])) {
  ?>
  <h1>OR</h1><!-- <br><br><br> -->
  <form class="form-horizontal" role="form" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <div class="form-group">
      <label class="col-sm-3 control-label" for="myname">Name</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" name="myname" id="myname" autofocus required>
      </div><!-- controls -->
    </div><!-- row -->

    <div class="form-group">
      <label class="col-sm-3 control-label" or="myemail">Email address</label>
      <div class="col-sm-7">
        <input type="email" class="form-control" name="myemail" id="myemail" required autocomplete="off" />
      </div><!-- controls -->
    </div><!-- row -->

    <div class="form-group">
      <label class="col-sm-3 control-label" for="myemail">Comments</label>
      <div class="col-sm-7">
        <textarea type="comment" class="form-control" name="mycomment" id="mycomment"rows="5"></textarea>
      </div><!-- controls -->
    </div><!-- row -->

    <div class="form-group">
    <div class="col-sm-offset-3 col-sm-7">
      <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
  </form>

  <?php
      } else {    // the user has submitted the form
        // Check if the input fields are filled out
        if (isset($_POST["myname"])) {
          $from = $_POST["myemail"]; // sender
          $subject = "Mail from " . $_POST["myname"] . " using VancouverPetSitting's contact form";
          $message = $_POST["mycomment"];
          // message lines should not exceed 70 characters (PHP rule), so wrap it
          $message = wordwrap($message, 70);
          // send mail
          $mail = mail("helen@vancouverpetsitting.com", $subject, $message, "From: $from\n");
          if($mail){
          echo "<br><p class='text-center'>Thank you for sending us your message.</p><br>";
            }else{
          echo "Failed, sending mail with the php function mail() doesn't seem to work on this server."; 
            }
          
        }
      }
  ?>

</article>

