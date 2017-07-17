<?php
require('../../assets/includes/header.inc.php');
// if(){}
?>
<div class="row">
  <div class="banner">
    <div class="banner-image">
      <img src="../../assets/images/banners/contact.jpg" alt="FaithWorker Ministry">
    </div>
  </div>
  <section>
    <h2>Contact FaithWorker Ministry</h2>
    <div class="fwm-contact col-md-6">
      <form class="form-contact" action="" method="post">
        <div class="form-group">
          <label for="contact_email">Email Address</label>
          <input type="email" class="form-control" id="contact_email" name="contact_email" placeholder="Email Address">
        </div>
        <div class="form-group">
          <label for="contact_firstname">First Name</label>
          <input type="text" class="form-control" id="contact_firstname" name="contact_firstname" placeholder="First Name">
        </div>
        <div class="form-group">
          <label for="contact_lastname">Last Name</label>
          <input type="text" class="form-control" id="contact_lastname" name="contact_lastname" placeholder="Last Name">
        </div>
        <div class="form-group">
          <label for="contact_subject">Subject</label>
          <input type="text" class="form-control" id="contact_subject" name="contact_subject" placeholder="Subject">
        </div>
        <div class="form-group">
          <label for="contact_message">Message</label>
          <textarea class="form-control" id="contact_message" name="contact_message" rows="3"></textarea>
        </div>
        <p>
          <button type="submit" class="btn btn-default" name="contact_submit">Submit Message</button>
        </p>
      </form>
    </div>
  </section>
  <aside class="col-md-6" id="contact-sidebar">
    <address>
      <strong>Woodstream Church</strong><br>
      9800 Lottsford Road<br>
      Mitchellville MD 20721<br>
      <span title="Phone">Phone:</span> (301) 955-1142
    </address>

    <address>
      <strong>Email</strong><br>
      <a href="mailto:info@FaithWorker.org">info@FaithWorker.org</a>
    </address>
  </aside>
</div>
<?php require('../../assets/includes/footer.inc.php'); ?>
