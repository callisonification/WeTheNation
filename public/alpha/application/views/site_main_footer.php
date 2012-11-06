<div id="footer_content">
  <div class="container"> <img src="<?php echo base_url('img/slices/alt_logo_16.png'); ?>" alt="WeTheNation"/>
    <div class="span2 footfix">
      <h6>WeTheNation:</h6>
      <ul class="footerlinks">
        <li><a href="#bug_modal" title="Report a Bug" data-toggle="modal">Report a Bug</a></li>
        <!-- Modal -->
        <div id="bug_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Report a Bug</h3>
            </div>
            <div class="modal-body">
                <form id="bugform" name="bugform" method="post" action="<?=base_url('email_handler/send_bug');?>">
                	<input type="text" name="subject" placeholder="Name the bug" />
                    <br />
                    <textarea name="message" placeholder="Explain the bug"></textarea>
                    <br />
                    <input type="submit" value="Send" />
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
            </div>
        </div>
        <li><a href="#contact_modal" title="Contact Us" data-toggle="modal">Contact Us</a></li>
        <!-- Modal -->
        <div id="contact_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Contact Us</h3>
            </div>
            <div class="modal-body">
                <form id="contactform" name="contactform" method="post" action="<?=base_url('email_handler/send_contact');?>">
                	<input type="text" name="subject" placeholder="Subject" />
                    <br />
                    <textarea name="message" placeholder="Message"></textarea>
                    <br />
                    <input type="submit" value="Send" />
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
            </div>
        </div>        
        <li><a href="#" title="View Site Map">Site Map</a></li>
        <li><a href="#" title="Terms of Use Policy">Terms of Use</a></li>
        <li><a href="#" title="Privacy Policy">Privacy Policy</a></li>
      </ul>
    </div>
    <div class="span2 footfix2">
      <h6>Go To:</h6>
      <ul class="footerlinks">
        <li><a href="<?php echo site_url('bill_list');?>" title="View all Bills">All Bills</a></li>
        <li><a href="<?php echo site_url('bill_list/senate_bills');?>" title="View Senate Bills">Senate bills</a></li>
        <li><a href="<?php echo site_url('member_list/senate_members');?>" title="View Senate Members">Senate Members</a></li>
        <li><a href="<?php echo site_url('bill_list/house_bills');?>" title="View House Bills">House bills</a></li>
        <li><a href="<?php echo site_url('member_list/house_members');?>" title="View House Members">House Members</a></li>
      </ul>
    </div>
    <div class="span4 offset1" id="connect">
      <h6>Connect With Us:</h6>
      <ul id="badges">
        <li><a href="https://www.facebook.com/WeTheNati0n" title="Facebook" id="fb" target="new">Facebook</a></li>
        <li><a href="https://twitter.com/WeTheNati0n" title="Twitter" id="tw" target="new">Twitter</a></li>
        <li><a href="https://github.com/callisonification/WeTheNation" title="Github" id="gh" target="new">Github</a></li>
      </ul>
    </div>
    <div class="span5" id="newsletter">
      <h6>Sign up for our Newsletter:</h6>
      <p>Sign up for our newletter to receive updates about the site, its members, and future updates and features</p>
      <form class="navbar-form pull-left">
        <button type="submit" class="btn"><i class="icon-envelope"></i></button>
        <input type="text" class="span4" placeholder="Enter email address">
      </form>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container">
    <p>WeTheNation.us &copy; 2012 :: All Rights Reserved</p>
  </div>
</div>
</body>
<!-- JQUERY SCRIPT -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<!-- Bootstrap plugin -->
<script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('js/main.js');?>"></script>
<script src="<?php echo base_url('js/jquery_scrollTo.1.4.3.min.js');?>"></script>
<!-- Custom Plugins -->
</html>
