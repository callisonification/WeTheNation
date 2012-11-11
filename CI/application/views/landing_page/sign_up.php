<div id="signup_form" class="span5">
<h2 class="red_title">Join The Nation!</h2>
<p>Take A Stand, Join Today</p>
<form id="signup" name="signup_form" method="POST" action="<?php echo site_url('account/register'); ?>">
  <label>First Name</label>
  <input type="text"class="span4" name="fname">
  <label>Email</label>
  <input type="text" placeholder="ex: email@domain.com" class="span4" name="email">
  <span class="help-block">Not a valid email, please try again.</span>
  <span class="help-block"><?php echo($this->session->userdata('email_error'));?></span>
  <label>Password</label>
  <input type="password" placeholder="6-15 characters in length" class="span4" name="password">
  <span class="help-block">Not a valid password, please try again.</span>
  <label>Confirm Password</label>
  <input type="password" class="span4" name="repass">
  <span class="help-block">Password does not match, please try again</span>
  <div class="span5">
    <div class="span2 human">
      <label>Human Check</label>
      <input type="text" placeholder="2 + 2 = ?" class="span2" name="robot">
      <span class="help-block">Robot Alert!</span>
      <span class="help-block"><?php echo($this->session->userdata('bot_error'));?></span>          
    </div>
  </div>
  <input type="checkbox" name="tos"/><p class="tos">Agree to <a href="#tos_modal" title="View Terms Of Service" data-toggle="modal">Terms Of Service</a></p>
  <button type="submit" class="btn" id="submit">Sign Me Up!</button>
</form>
</div>
</div>
