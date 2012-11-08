<div id="mbr_info_container">
  <div class="container">
    <div class="mbr_detail_container">
      <div class="mbr_dtl_img"><img src="<?php echo base_url('img/members/'.$member->bioguide_id.'.jpg');?>" title="Person Name" width="150px" height="190px"></div>
      <h3 class="bl_title"><?=$member->display_name;?></h3>
      <p><?=$member->description;?></p>
      <ul class="mbr_info_stats">
        <li><i class="icon-adjust"></i>Total Session Votes : <strong><?=$member->total_session_votes;?></strong></li>
        <li><i class="icon-star"></i>Approval Rating : <strong>XX%</strong></li>
        <li><i class="icon-ok-sign"></i>With Party Vote : <strong><?=$member->with_party_percentage;?>%</strong></li>
        <li><i class="icon-ban-circle"></i>Abstain Percentage : <strong><?=$member->abstains_percentage;?>%</strong></li>
      </ul>
      <ul class="mbr_info_contact">
        <li><i class="icon-envelope"></i><a href="#">Email this member</a></li>
        <li><i class="icon-user"></i><a href="<?=$member->website;?>" target="new">Members website</a></li>
        <li><i class="icon-print"></i>Phone : <?=$member->phone;?></li>
        <li><i class="icon-eye-open"></i>Total views : xx</li>
      </ul>
      <button class="mbr_follow btn-primary btn btn_follow" type="button">Follow Member</button>
    </div>
    <div id="mbr_rating_container" class="span5 offset1">
      <h3>Average User Rating</h3>
      <h4>60%</h4>
      <p class="total_votes">200 Votes</p>
      <div id="mbr_rates">
        <p>Rate This Member</p>
        <ul class="star_list">
          <li><a href="#" class="brz" title="20%">20</a></li>
          <li><a href="#" class="brz" title="40%">40</a></li>
          <li><a href="#" class="slv" title="60%">60</a></li>
          <li><a href="#" class="slv" title="80%">80</a></li>
          <li><a href="#" class="gld" title="100%">100</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="midsplit">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo base_url();?>">Home</a><span class="divider"> / </span></li>
      <?php if($member->role_type === 'Senator'): ?>
      <li><a href="<?php echo site_url('member_list/senate_members');?>">Senate Members</a><span class="divider"> / </span></li>
      <?php elseif($member->role_type === 'Representative') :?>
      <li><a href="<?php echo site_url('member_list/house_members');?>">House Members</a><span class="divider"> / </span></li>
	  <?php endif; ?>      
      <li class="active"><?=$member->display_name;?></li>
    </ul>
  </div>
</div>