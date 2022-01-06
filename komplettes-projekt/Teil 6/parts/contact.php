<section class="contact" id="contact">
  <div class="container">
    <h3 class="text-center">Kontaktformular</h3>
    <p class="text-center text-muted font-italic">Hinterlasse uns doch eine Nachricht!</p>
  
    <form method="POST" action="contact.php">
      <div class="row">
        <div class="col-12 col-sm-6">
          <input class="form-control mb-3" type="text" name="name" placeholder="Dein Name *" required />
          <input class="form-control mb-3" type="email" name="email" placeholder="Deine E-Mail *" required />
          <input class="form-control mb-3 mb-sm-0" type="text" name="subject" placeholder="Betreff *" required />
        </div>
        <div class="col-12 col-sm-6">
          <textarea class="form-control contact-message" name="message" placeholder="Deine Nachricht *" required></textarea>
        </div>
      </div>
      <div class="text-center">
        <button type="submit" class="mt-3 btn btn-primary">Nachricht abschicken!</button>
      </div>
    </form>
  </div>
</section>