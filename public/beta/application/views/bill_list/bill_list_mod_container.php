<div id="topcontent" class="container">
<div id="news" class="span10">
<?php foreach($bills as $bill): ?>
<div class="module bill">
<a href="<?php echo site_url('bill_detail/get_details/'.$bill->id); ?>" title="<?=$bill->title_full;?>" rel="tooltip" class="customtooltip"> 

<!-- // Check the status and assign appropriate icon -->
<?php if($bill->current_status == 'Passed' || $bill->current_status == 'Passed: Senate' || $bill->current_status == 'Passed: House'): ?>
<div class="bill_photo pass">
<!-- Img applied via CSS -->
<?php elseif($bill->current_status == 'Vetoed' || $bill->current_status == 'Vetoed: Senate' || $bill->current_status == 'Vetoed: House'): ?>
<div class="bill_photo veto">
<!-- Img applied via CSS -->
<?php elseif($bill->current_status == 'Failed' || $bill->current_status == 'Failed: Senate' || $bill->current_status == 'Failed: House' ): ?>
<div class="bill_photo fail">
<!-- Img applied via CSS -->
<?php elseif($bill->current_status == 'Enacted'): ?>
<div class="bill_photo enact"> <!-- Img applied via CSS -->
  <?php elseif($bill->current_status == 'Introduced' || $bill->current_status == 'Referred' || $bill->current_status == 'Veto Override' 
	  || $bill->current_status == 'Reported' ): ?>
  <div class="bill_photo stock"> <!-- Img applied via CSS -->
    <?php endif; ?>
    <!-- //End icon check -->
    <p class="bill_num">
      <?=$bill->display_num;?>
    </p>
    <!-- //Check for bill type and assign appropriate icon title -->
    <?php if($bill->bill_type == 'senate_bill' || $bill->bill_type == 'senate_joint_resolution' || $bill->bill_type == 'senate_concurrent_resolution' || $bill->bill_type == 'senate_resolution'):?>
    <p class="bill_name">Senate</p>
    <?php elseif($bill->bill_type == 'house_bill' || $bill->bill_type == 'house_joint_resolution' || $bill->bill_type == 'house_concurrent_resolution' || $bill->bill_type == 'house_resolution'):?>
    <p class="bill_name">House</p>
    <?php endif; ?>
    <!-- //End icon title check --> 
  </div>
  <h3 class="bl_title">
    <?=character_limiter($bill->title_common, 50);?>
  </h3>
  <p>
    <?=word_limiter($bill->bill_summary, 75);?>
  </p>
  </a>
  <div class="stat_holder">
    <div class="status"> 
      <!-- // Check the status and assign appropriate icon -->
      <?php if($bill->current_status == 'Passed' || $bill->current_status == 'Passed: Senate' || $bill->current_status == 'Passed: House'): ?>
      <p class="label label-success">
        <?=$bill->current_status;?>
      </p>
      <!-- Img applied via CSS -->
      <?php elseif($bill->current_status == 'Vetoed' || $bill->current_status == 'Vetoed: Senate' || $bill->current_status == 'Vetoed: House'): ?>
      <div class="bill_photo veto">
        <p class="label label-important">
          <?=$bill->current_status;?>
        </p>
        <?php elseif($bill->current_status == 'Failed' || $bill->current_status == 'Failed: Senate' || $bill->current_status == 'Failed: House' ): ?>
        <p class="label label-warning">
          <?=$bill->current_status;?>
        </p>
        <?php elseif($bill->current_status == 'Enacted'): ?>
        <p class="label label-info">
          <?=$bill->current_status;?>
        </p>
        <?php elseif($bill->current_status == 'Introduced' || $bill->current_status == 'Referred' || $bill->current_status == 'Veto Override' 
	  || $bill->current_status == 'Reported' ): ?>
        <p class="label label-default">
          <?=$bill->current_status;?>
        </p>
        <?php endif; ?>
        <!-- //End icon check --> 
      </div>
      <div class="introduced">
        <p>Bill Introduced:
          <?=$bill->intro_date;?>
        </p>
      </div>
      <div class="stats">
        <p class="label label-info">30 Views | <a href="#">20 Comments</a></p>
      </div>
    </div>
    <div class="star_split xl"> <!-- Img applied via CSS --> </div>
  </div>
  <?php endforeach; ?>
</div>
