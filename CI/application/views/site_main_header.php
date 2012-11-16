<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>WeTheNation.us :: Real Change Starts Here</title>
<link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('css/main.css" rel="stylesheet');?>">
<link rel="icon" type="image/png" href="<?php echo base_url('img/slices/favicon.ico'); ?>">
<meta name="keywords" content="congress,senate,house of representatives,bills,legislation,legislator,law,amendment,resolution,joint resolution,concurrent resolution,nation,we the nation,wethenation" />
<meta name="description" content="WeTheNation is a non-partisan, not for profit, social site that provides the facts about Congress including its current members and current legislation. WeTheNation provides users a way to keep track of, vote on, and share their opinions on current members and bills in Congress." />
<meta name="robots" content="index, follow" />
<meta name="language" content="en" />
<meta name="author" content="Christopher Allison" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34814245-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
<div id="topsplit">
  <div class="container">
    <div id="tsInfo" class="row">
      <p class="span9 offset1">Site News :: You wanted it Nation, YOU GOT IT! Welcome to Beta...</p>
      <?php if($this->session->userdata('logged_in') === FALSE):?>
      <p class="span2 offset4"><a href="#" id="si" title="Sign In">Sign In</a> <span> | </span> <a href="#signup_modal" data-toggle="modal" title="Sign Up">Sign Up</a></p>
      <?php elseif($this->session->userdata('logged_in') === TRUE):?>
      <p class="span3 offset3">Welcome back, <a href="<?=base_url('user_dashboard/get_user')?>">
        <?=$this->session->userdata('display_name');?>
        </a> | <a href="<?=base_url('account/logout');?>">Sign Out</a></p>
      <?php endif;?>
      <!-- Modal -->
      <div id="signup_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 id="myModalLabel">Sign Up</h3>
        </div>
        <div class="modal-body">
            <form id="signup" name="signup_form" method="POST" action="<?php echo site_url('account/register'); ?>">
              <label>First Name</label>
              <input type="text"class="span4" name="fname" id="fname">
              <label>Email</label>
              <input type="text" placeholder="email@domain.com" class="span4" name="email" id="email">
              <span class="help-block"><?php echo($this->session->userdata('email_error'));?></span>
              <label>Password &nbsp;<em>Minimum 6 characters</em></label>
              <input type="password" placeholder="••••••" class="span4" name="password" id="password">
              <label>Confirm Password</label>
              <input type="password" class="span4" name="repass" id="repass">
              <input type="hidden" name="lat" id="lat" />
              <input type="hidden" name="lon" id="lon" />
              <div class="span5">
                <div class="span2 human">
                  <label>Human Check</label>
                  <input type="text" placeholder="2 + 2 = ?" class="span2" name="robot" id="robot">
                  <span class="help-block"><?php echo($this->session->userdata('bot_error'));?></span>          
                </div>
                <div class="span5">
                	<input type="checkbox" name="tos"/><p class="tos">Agree to <a href="#tos_modal" title="View Terms Of Service" data-toggle="modal">Terms Of Service</a></p>
                </div>
              </div>
              <button type="submit" class="btn" id="submit">Sign Me Up!</button>
            </form>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
</div>
