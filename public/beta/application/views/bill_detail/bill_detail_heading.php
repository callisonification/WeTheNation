<div id="mbr_info_container">
<div class="container">
  <div class="bill_detail_container">
    <h3 class="bl_title">
      <?=word_limiter($bill->title_full, 18);?>
    </h3>
    <?php if($bill->bill_summary === NULL || $bill->bill_summary === '	'):?>
    <p>No summary available at this time...</p>
    <?php else:?>
    <p>
      <?=$bill->bill_summary;?>
    </p>
    <?php endif;?>
    <div class="secondary_info"> <a href="#full_sum" role="button" class="btn btn-small" data-toggle="modal"><i class="icon-list"></i> Full Summary</a>
      <div id="full_sum" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 id="myModalLabel">
            <?=$bill->title_full;?>
          </h3>
        </div>
        <div class="modal-body">
          <?php if($bill->bill_summary === NULL || $bill->bill_summary === '	'):?>
          <p>No summary available at this time...</p>
          <?php else:?>
          <p>
            <?=$bill->bill_summary;?>
          </p>
          <?php endif;?>
        </div>
        <div class="modal-footer">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
      </div>
      <a href="#full_bill" role="button" class="btn btn-small" data-toggle="modal"><i class="icon-file"></i> Full Bill</a>
      <div id="full_bill" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 id="myModalLabel">
            <?=$bill->title_full;?>
          </h3>
        </div>
        <div class="modal-body">
          <p>One fine body…</p>
        </div>
        <div class="modal-footer">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
      </div>
      <!-- // Check the status and assign appropriate color -->
      <?php if($bill->current_status == 'Passed' || $bill->current_status == 'Passed: Senate' || $bill->current_status == 'Passed: House'): ?>
      <p class="first label label-success">
        <?=$bill->current_status;?>
      </p>
      <!-- Img applied via CSS -->
      <?php elseif($bill->current_status == 'Vetoed' || $bill->current_status == 'Vetoed: Senate' || $bill->current_status == 'Vetoed: House'): ?>
      <div class="bill_photo veto">
        <p class="first label label-important">
          <?=$bill->current_status;?>
        </p>
        <?php elseif($bill->current_status == 'Failed' || $bill->current_status == 'Failed: Senate' || $bill->current_status == 'Failed: House' ): ?>
        <p class="first label label-warning">
          <?=$bill->current_status;?>
        </p>
        <?php elseif($bill->current_status == 'Enacted'): ?>
        <p class="first label label-info">
          <?=$bill->current_status;?>
        </p>
        <?php elseif($bill->current_status == 'Introduced' || $bill->current_status == 'Referred' || $bill->current_status == 'Veto Override' 
	  || $bill->current_status == 'Reported' ): ?>
        <p class="first label label-default">
          <?=$bill->current_status;?>
        </p>
        <?php endif; ?>
        <!-- //End icon check -->
        <p class="label">XX views</p>
        <button type="button" class="btn btn-small btn_follow bill_follow"><i class="icon-check"></i> Follow Bill</button>
      </div>
    </div>
    <?php if($this->session->userdata('logged_in') == FALSE):?>
    <div id="not_a_user">
      <p>Want to vote on this bill?</p>
      <p><a href="">Sign In</a> or <a href="">Sign Up</a></p>
    </div>
    <?php endif;?>
    <div id="bill_rating_container" class="span5 offset1">
      <h3>Vote On This Bill</h3>
      <p>Approve</p>
      <p>Disapprove</p>
      <?php if($user_vote === NULL):?>
      <a href="#" name="thumbup" class="thumbup thumb" title="Approve" data-billId="<?=$bill->id;?>" data-userId="<?=$this->session->userdata('user_id')?>" data-type="vote" data-vote="YAY">Approve</a>
      <?php elseif($user_vote[0]->vote_value === 'YAY'):?>
      <a href="#" name="thumbup" class="thumbup thumb active" title="Approve" data-billId="<?=$bill->id;?>" data-userId="<?=$this->session->userdata('user_id')?>" data-type="vote" data-vote="YAY">Approve</a>
      <?php else:?>
      <a href="#" name="thumbup" class="thumbup thumb" title="Approve" data-billId="<?=$bill->id;?>" data-userId="<?=$this->session->userdata('user_id')?>" data-type="vote" data-vote="YAY">Approve</a>
      <?php endif;?>
      <?php if($user_vote === NULL):?>
      <a href="#" name="thumbdown" class="thumbdown thumb" title="Disapprove" data-billId="<?=$bill->id;?>" data-userId="<?=$this->session->userdata('user_id')?>" data-type="vote" data-vote="NAY">Disapprove</a>
      <?php elseif($user_vote[0]->vote_value === 'NAY'):?>
      <a href="#" name="thumbdown" class="thumbdown thumb active" title="Disapprove" data-billId="<?=$bill->id;?>" data-userId="<?=$this->session->userdata('user_id')?>" data-type="vote" data-vote="NAY">Disapprove</a>
      <?php else:?>
      <a href="#" name="thumbdown" class="thumbdown thumb" title="Disapprove" data-billId="<?=$bill->id;?>" data-userId="<?=$this->session->userdata('user_id')?>" data-type="vote" data-vote="NAY">Disapprove</a>
      <?php endif;?>
      <?php if($bill->approval_rating === NULL || $bill->approval_rating == 0):?>
      <p class="approval_rating">0%</p>
      <p class="disapproval_rating">0%</p>
      <?php else:?>
      <p class="approval_rating">
        <?=$bill->approval_rating;?>
        %</p>
      <p class="disapproval_rating">
        <?=($bill->approval_rating - 100);?>
        %</p>
      <?php endif;?>
    </div>
  </div>
</div>
<div id="midsplit">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>">Home</a><span class="divider"> / </span></li>
      <!-- Checks the bill type and loads the correct breadcrumb -->
      <?php if($bill->bill_type === 'senate_bill' || $bill->bill_type === 'senate_joint_resolution' || $bill->bill_type === 'senate_concurrent_resolution' || $bill->bill_type === 'senate_resolution'): ?>
      <li><a href="<?php echo site_url('bill_list/senate_bills'); ?>">Senate</a><span class="divider"> / </span></li>
      <?php elseif($bill->bill_type === 'house_bill' || $bill->bill_type === 'house_joint_resolution' || $bill->bill_type === 'house_concurrent_resolution' || $bill->bill_type === 'house_resolution'): ?>
      <li><a href="<?php echo site_url('bill_list/house_bills'); ?>">House</a><span class="divider"> / </span></li>
      <?php endif; ?>
      <!-- //End first breadcrumb check --> 
      <!-- //Checks the bill type and loads the correct secondary breadcrumb -->
      <?php if($bill->bill_type === 'senate_bill'): ?>
      <li><a href="<?php echo site_url('bill_list/senate_bills'); ?>">Bills</a><span class="divider"> / </span></li>
      <?php elseif($bill->bill_type === 'house_bill'): ?>
      <li><a href="<?php echo site_url('bill_list/house_bills'); ?>">Bills</a><span class="divider"> / </span></li>
      <?php elseif($bill->bill_type === 'senate_joint_resolution'): ?>
      <li><a href="<?php echo site_url('bill_list/senate_joint_res_bills'); ?>">Joint Resolution</a><span class="divider"> / </span></li>
      <?php elseif($bill->bill_type === 'house_joint_resolution'): ?>
      <li><a href="<?php echo site_url('bill_list/house_joint_res_bills'); ?>">Joint Resolution</a><span class="divider"> / </span></li>
      <?php elseif($bill->bill_type === 'senate_concurrent_resolution'): ?>
      <li><a href="<?php echo site_url('bill_list/senate_con_res_bills'); ?>">Concurrent Resolution</a><span class="divider"> / </span></li>
      <?php elseif($bill->bill_type === 'house_concurrent_resolution'): ?>
      <li><a href="<?php echo site_url('bill_list/house_con_res_bills'); ?>">Concurrent Resolution</a><span class="divider"> / </span></li>
      <?php elseif($bill->bill_type === 'senate_resolution'): ?>
      <li><a href="<?php echo site_url('bill_list/senate_res_bills'); ?>">Resolution</a><span class="divider"> / </span></li>
      <?php elseif($bill->bill_type === 'house_resolution'): ?>
      <li><a href="<?php echo site_url('bill_list/house_res_bills'); ?>">Resolution</a><span class="divider"> / </span></li>
      <?php endif; ?>
      <!-- //End second breadcrumb check -->
      <li class="active">
        <?=$bill->display_num;?>
      </li>
    </ul>
  </div>
</div>
