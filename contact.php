
<?php 
/*
    Template Name: Kontakt
*/
?>

<?php get_header() ?>

    <section class="contact-container">
      <div class="title">
      <?php $our_title = get_the_title(get_option('page_for_posts',true)); ?>
        <h2><?php echo $our_title; ?></h2>
      </div> 
      <section class="boxes">
          <a href="tel:0704979794">
            <div class="box">
              <h5>Ring Mig</h5>
                <i class="fa fa-phone"></i>
            </div>
          </a>
          <a href="mailto:nasimr.dev@gmail.com">
            <div class="box">
              <h5>Mejla Mig</h5>
                <i class="fa fa-envelope"></i>
            </div>
          </a>
          <a href="https://www.linkedin.com/in/nasim-roshan-1637a056/">
            <div class="box">
              <h5>Linkedin</h5>
              <i class="fa fa-linkedin"></i>
            </div>
          </a>
      </section>

    
      <section class="form-container">

        <form method="post" id="contactForm" name="myemailform" action="<?php the_permalink(); ?>">
          <label for="fullname">Namn:*</label>
          <input class="input" type="text" id="fullname" name="fullname" placeholder="John Doe" required>

          <label for="email">E-post:*</label>
          <input class="input " type="email" id="email" name="email" placeholder="email@address.com" required>

          <label for="subject">Ämne:</label>
          <input class="input name-input" type="text" id="subject" name="subject">

          <label for="message">Meddelande:*</label>
          <textarea name="message" id="message" rows="6" cols="20" required></textarea>

          <input class="send-btn" type="submit" value="Skicka">
        </form>     
        
        <div class="contact-info">
          <div class="address">
            <h5>Adress:</h5>
            <p>Gullvivevägen13 <br>246 51, Löddeköpinge</p>
          </div>
          <div class="tel">
            <h5>Tel:</h5>
            <p>0704979794</p>
          </div>
        </div>
      </section>

  </section>
  <?php get_footer(); ?>
<!-- 
  if(!isset($_POST['submit'])){
          echo "error; please submit thr form!";
        }
        //samla alla input som ska skickas och bektäftas
        $name =     $_POST['fullname'];
        $email =    $_POST['email'];
        $message =  $_POST['message'];

        if(empty($name)||empty($email) || empty($message)){
          echo "Namn, och E-post och Meddelande är obligatoriska!";
          exit;
        }
        $email_form =         'nasimr.dev@gmail.com'; //e-post som ska få mejl
        $email_subject =      "Ny meddelande från din hemsidan";
        $to =                 "nasimr.dev@gmail.com";
        $email_body =         "Du har fått ett ny mejl från $name.\n". 
                              "e-post adress : $email\n". 
                              "meddelande : $message". 
        mail($to,$email_form,$email_subject,$email_body);
        echo "vi har fått ditt mejl";
        ?> --> -->