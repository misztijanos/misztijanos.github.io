
<article class="about-content">
	<h4 class="contact-title">Share our passion? Please sign up to get notified.</h4>
	<form class="form-inline contact-form" role="form" method="post" action="index.php#contact">
  <div class="form-group">
    <label class="sr-only" for="myemail">your email address</label>
    <input type="email" class="form-control" name="myemail" id="myemail" required placeholder="your email address">
  </div>
  <button id="submit" type="submit" name="submit" class="btn btn-danger">Notify me</button>
  </form>
  <p class="notice">
  <?php
  if (isset($_POST["submit"])) {
    $myfile = fopen("components/emails.txt", "a") or die("Unable to open file!");
    $txt = $_POST["myemail"] . "; ";
    echo "Thank you, " . $_POST["myemail"] . " has been added to our list.";
    fwrite($myfile, $txt);
    fclose($myfile);
  }
  ?> 
  </p>
  <hr>
</article>