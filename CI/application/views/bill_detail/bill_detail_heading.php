<div id="mbr_info_container">
  <div class="container">
    <div class="bill_detail_container">
	<h3 class="bl_title"><?=$bill->title_full;?></h3>
    <p><?=$bill->bill_summary;?></p>
    <div class="secondary_info">
    	<button type="button" class="btn btn-small"><i class="icon-list"></i> Full Summary</button>
    	<button type="button" class="btn btn-small"><i class="icon-file"></i> Full Bill</button>
        <p class="first"><?=$bill->current_status;?></p>
        <p>1000 views</p>
        <button type="button" class="btn-small btn-primary bill_follow">Follow Bill</button>
    </div>
    </div>
    <div id="bill_rating_container" class="span5 offset1">
      <h3>Vote On This Bill</h3>
      	<p>Approve</p>
        <p>Disapprove</p>        
		<a href="#" name="thumbup" class="thumbup" title="Approve">Approve</a>
		<a href="#" name="thumbdown" class="thumbdown" title="Disapprove">Disapprove</a>
        <p class="approval_rating">50%</p> 
        <p class="disapproval_rating">50%</p>              
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
      <!-- Checks the bill type and loads the correct secondary breadcrumb -->
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
      <li class="active"><?=$bill->display_num;?></li>
    </ul>
  </div>
</div>