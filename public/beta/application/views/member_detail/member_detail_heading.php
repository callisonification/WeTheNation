<div id="mbr_info_container">
  <div class="container">
    <div class="mbr_detail_container">
      <div class="mbr_dtl_img"><img src="<?php echo base_url('img/members/'.$member->bioguide_id.'.jpg');?>" title="Person Name" width="150px" height="190px"></div>
      <h3 class="bl_title">
        <?=$member->display_name;?>
      </h3>
      <p>
        <?=$member->description;?>
      </p>
      <ul class="mbr_info_stats">
        <li><i class="icon-adjust"></i>Total Session Votes : <strong><?=$member->total_session_votes;?></strong></li>
        <?php if($member_rate['rate'] == 0):?>
        <li><i class="icon-star"></i>Approval Rating : <strong>0%</strong></li>
        <?php else:?>
        <li><i class="icon-star"></i>Approval Rating : <strong><?=$member_rate['rate']?>%</strong></li>
        <?php endif;?>
        <li><i class="icon-ok-sign"></i>With Party Vote : <strong><?=$member->with_party_percentage;?>%</strong></li>
        <li><i class="icon-ban-circle"></i>Abstain Percentage : <strong><?=$member->abstains_percentage;?>%</strong></li>
      </ul>
      <ul class="mbr_info_contact">
        <li><i class="icon-envelope"></i><a href="<?=$member->webform;?>" target="new">Email this member</a></li>
        <li><i class="icon-user"></i><a href="<?=$member->website;?>" target="new">Members website</a></li>
        <li><i class="icon-print"></i>Phone : <?=$member->phone;?></li>
        <li><i class="icon-eye-open"></i>Total views : xx</li>
      </ul>
      <button class="mbr_follow btn-primary btn btn_follow" type="button">Follow Member</button>
    </div>
    <?php if($this->session->userdata('logged_in') == FALSE):?>
    <div id="not_a_user">
    	<p>Want to rate this member?</p>
        <p><a href="">Sign In</a> or <a href="">Sign Up</a></p>
    </div>
    <?php endif;?>    
    <div id="mbr_rating_container" class="span5 offset1">
      <h3>Average User Rating</h3>
      <?php if($member_rate['rate'] == 0):?>
      <h4>0%</h4>
      <p class="total_votes">No Votes</p>
      <?php else:?>
      <h4><?=$member_rate['rate']?>%</h4>
      <p class="total_votes">
        <?=$member_rate['tv'];?>
        Votes</p>
      <?php endif;?>
      <div id="mbr_rates">
        <p>Rate This Member</p>
        <ul class="star_list">
          <?php if($user_rate === NULL):?>
          <li><a href="#" class="brz star" title="20%" data-memberId="<?=$member->id;?>" data-userId="<?=$this->session->userdata('user_id')?>" data-value="20">20</a></li>
          <?php elseif($user_rate[0]->rate_value >= 20):?>
          <li><a href="#" class="brz star voted" title="20%" data-memberId="<?=$member->id;?>" data-userId="<?=$this->session->userdata('user_id')?>" data-value="20">20</a></li>
          <?php else:?>
          <li><a href="#" class="brz star" title="20%" data-memberId="<?=$member->id;?>" data-userId="<?=$this->session->userdata('user_id')?>" data-value="20">20</a></li>
          <?php endif;?>
          <!-- ends first star rating check :: First bronze -->
          <?php if($user_rate === NULL):?>
          <li><a href="#" class="brz star" title="40%" data-memberId="<?=$member->id;?>" data-userId="<?=$this->session->userdata('user_id')?>" data-value="40">40</a></li>
          <?php elseif($user_rate[0]->rate_value >= 40):?>
          <li><a href="#" class="brz star voted" title="40%" data-memberId="<?=$member->id;?>" data-userId="<?=$this->session->userdata('user_id')?>" data-value="40">40</a></li>
          <?php else:?>
          <li><a href="#" class="brz star" title="40%" data-memberId="<?=$member->id;?>" data-userId="<?=$this->session->userdata('user_id')?>" data-value="40">40</a></li>
          <?php endif;?>
          <!-- ends first star rating check :: Second bronze -->          
          <?php if($user_rate === NULL):?>
          <li><a href="#" class="slv star" title="60%" data-memberId="<?=$member->id;?>" data-userId="<?=$this->session->userdata('user_id')?>" data-value="60">60</a></li>
          <?php elseif($user_rate[0]->rate_value >= 60):?>
          <li><a href="#" class="slv star voted" title="60%" data-memberId="<?=$member->id;?>" data-userId="<?=$this->session->userdata('user_id')?>" data-value="60">60</a></li>
          <?php else:?>
          <li><a href="#" class="slv star" title="60%" data-memberId="<?=$member->id;?>" data-userId="<?=$this->session->userdata('user_id')?>" data-value="60">60</a></li>
          <?php endif;?>
          <!-- ends first star rating check :: First silver -->          
          <?php if($user_rate === NULL):?>
          <li><a href="#" class="slv star" title="80%" data-memberId="<?=$member->id;?>" data-userId="<?=$this->session->userdata('user_id')?>" data-value="80">80</a></li>
          <?php elseif($user_rate[0]->rate_value >= 80):?>
          <li><a href="#" class="slv star voted" title="80%" data-memberId="<?=$member->id;?>" data-userId="<?=$this->session->userdata('user_id')?>" data-value="80">80</a></li>
          <?php else:?>
          <li><a href="#" class="slv star" title="80%" data-memberId="<?=$member->id;?>" data-userId="<?=$this->session->userdata('user_id')?>" data-value="80">80</a></li>
          <?php endif;?>
          <!-- ends first star rating check :: Second silver -->          
          <?php if($user_rate === NULL):?>
          <li><a href="#" class="gld star" title="100%" data-memberId="<?=$member->id;?>" data-userId="<?=$this->session->userdata('user_id')?>" data-value="100">100</a></li>
          <?php elseif($user_rate[0]->rate_value == 100):?>
          <li><a href="#" class="gld star voted" title="100%" data-memberId="<?=$member->id;?>" data-userId="<?=$this->session->userdata('user_id')?>" data-value="100">100</a></li>
          <?php else:?>
          <li><a href="#" class="gld star" title="100%" data-memberId="<?=$member->id;?>" data-userId="<?=$this->session->userdata('user_id')?>" data-value="100">100</a></li>
          <?php endif;?>
          <!-- ends first star rating check :: Gold star -->          
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
      <li class="active">
        <?=$member->display_name;?>
      </li>
    </ul>
  </div>
</div>
