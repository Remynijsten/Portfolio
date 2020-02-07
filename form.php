<form action="mail.php" name="form" method="post">
  <div class="form-group">
    <label for="name">Name:</label>
    <input name="name" type="name" class="form-control" placeholder="Enter Name" id="name" required>
  </div>

  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email" required>
  </div>

  <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="phone" class="form-control" placeholder="Your Phone Number" id="phone">
  </div>

  <div class="form-group">
    <label for="message">Message</label>
    <textarea name="message" type="message" class="form-control" placeholder="Enter Your Message" id="message" required></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

