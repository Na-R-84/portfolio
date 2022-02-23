
<?php 
/*
    Template Name: Kontakt
    */

get_header();

?>
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

        <form action="">
          <label for="fullname">Namn:*</label>
          <input class="input" type="text" id="fullname" name="fullname" placeholder="John Doe" required>

          <label for="email">E-post:*</label>
          <input class="input " type="email" id="email" name="email" placeholder="email@address.com" required>

          <label for="subject">Ämne:</label>
          <input class="input name-input" type="text" id="subject" name="subject">

          <label for="message">Meddelande:*</label>
          <input class="txt-box" type="text" id="message" name="message" maxlength="540" placeholder="Max 540 ord" required>

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