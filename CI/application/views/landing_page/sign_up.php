  <div id="signup_form" class="span5">
    <h2>Take a Stand!</h2>
    <p><span>Join Today</span> and let Congress know how you feel about the issues.</p>
    <form id="signup" name="signup_form" method="POST" action="<?php echo site_url('account/register'); ?>">
      <label>Email</label>
      <input type="text" placeholder="ex: email@domain.com" class="span4" name="email">
      <span class="help-block">Not a valid password, please try again.</span>
      <span class="help-block"><?php echo($this->session->userdata('email_error'));?></span>
      <label>Password</label>
      <input type="password" placeholder="6-15 characters in length" class="span4" name="password">
      <span class="help-block">Not a valid password, please try again.</span>
      <label>Confirm Password</label>
      <input type="password" class="span4" name="repass">
      <span class="help-block">Password does not match, please try again</span>
      <div class="span5">
        <div class="span2 mgfix">
          <label>Zip Code</label>
          <input type="text" placeholder="ex: 12345" class="span2" name="zip">
          <span class="help-block">Not a valid zip code.</span> </div>
        <div class="span2">
          <label>Human Check</label>
          <input type="text" placeholder="2 + 2 = ?" class="span2" name="robot">
          <span class="help-block">Robot Alert!</span> </div>
      </div>
      <button type="submit" class="btn" id="submit">Sign Me Up!</button>
    </form>
  </div>
</div>
