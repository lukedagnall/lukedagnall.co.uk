<div class="form-wrapper">
  <div id="form-messages"></div>

  <form id="ajax-contact" method="post" action="mailer.php">
    <div class="field">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
    </div>

    <div class="field">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>

    <div class="field">
      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>
    </div>

    <button class="btn btn--submit">
      <span class="btn__text">Send message</span>
    </button>
  </form>
</div>
