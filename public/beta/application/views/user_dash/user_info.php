<div id="mbr_info_container">
  <div class="container">
    <div class="mbr_detail_container">
      <div class="mbr_dtl_img"><img src="<?=base_url('img/slices/missing_user.png');?>" title="Person Name" width="150px" height="190px"></div>
      <h3 class="bl_title"><?=$person->display_name;?></h3>
      <?php if($person->user_party !== NULL):?>
      <h5 class="bl_title">[ <?=$person->user_party;?> ]</h5>
      <?php else:?>
      <h5 class="bl_title">[ Set your party, click Edit Info ]</h5>
      <?php endif;?>
      <?php if($person->display_status !== NULL):?>
      <p class="user_status"><?=$person->display_status;?></p>
      <?php else:?>
      <p class="user_status">No display message set, click edit info</p>
      <?php endif;?>
      <ul class="mbr_info_stats dashboard">
        <li><i class="icon-star"></i> Votes With Party : <strong>XX%</strong></li>
        <li><i class="icon-eye-open"></i> Bills Watching : <strong>XX</strong></li>
        <li><i class="icon-ban-circle"></i> Members Watching : <strong>XX</strong></li>
      </ul>
      <ul class="mbr_info_contact dashboard">
        <li><i class="icon-user"></i> Followers : xx</li>
        <li><i class="icon-print"></i> Following : xx</li>
        <li><i class="icon-eye-open"></i> Badges Earned xx / XX</li>
      </ul>
      <?php if($person->user_email === $this->session->userdata('user_email')):?>
      <a href="#edit_info" role="button" class="btn btn_follow mbr_follow btn_fix" data-toggle="modal">Edit Info</a>
      <!-- Modal -->
      <div id="edit_info" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 id="myModalLabel">Edit User Info</h3>
        </div>
        <div class="modal-body">
          <form name="user_info" method="post" action="<?=base_url('user_dashboard/update_user');?>">
          	<label class="bl_title">Your Name</label>
            <input class="text" type="text" name="name" value="<?=$person->display_name;?>" />
          	<label class="bl_title">Whats On Your Mind?</label>
            <input class="text" type="text" name="status" value="<?=$person->display_status;?>" maxlength="140" />
            <input type="hidden" name="id" value="<?=$person->id;?>" />
            <br />
            <input class="btn" type="submit" value="Save Changes"/>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        </div>
      </div>
      <?php elseif($person->user_email !== $this->session->userdata('user_email')):?>
      <button class="mbr_follow btn-primary btn btn_follow" type="button">Follow Member</button>
      <?php endif; ?>
    </div>
    <div id="mbr_rating_container" class="span5 offset1"> 
      <!-- following module goes here --> 
    </div>
  </div>
</div>
<div id="midsplit">
  <div class="container">
    <ul class="breadcrumb">
      <li class="active">Filter News<span class="divider">:</span></li>
      <li><a href="#">Bills</a><span class="divider"> | </span></li>
      <li><a href="#">Members</a></li>
    </ul>
  </div>
</div>
