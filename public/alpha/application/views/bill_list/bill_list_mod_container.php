<div id="topcontent" class="container">
  <div id="news" class="span10">
  	<?php foreach($bills as $bill): ?>
    <div class="module bill"><a href="<?php echo site_url('bill_detail/get_details/'.$bill->id); ?>" title="<?=$bill->title_full;?>" rel="tooltip" class="customtooltip">
      <div class="bill_photo passed"> <!-- Img applied via CSS --> 
      	<p class="bill_num"><?=$bill->display_num;?></p>
        <?php if($bill->bill_type == 'senate_bill' || $bill->bill_type == 'senate_joint_resolution' || $bill->bill_type == 'senate_concurrent_resolution' || $bill->bill_type == 'senate_resolution'):?>
        <p class="bill_name">Senate</p>
        <?php elseif($bill->bill_type == 'house_bill' || $bill->bill_type == 'house_joint_resolution' || $bill->bill_type == 'house_concurrent_resolution' || $bill->bill_type == 'house_resolution'):?>
        <p class="bill_name">House</p>
        <?php endif; ?>
      </div>
      <h3 class="bl_title"><?=character_limiter($bill->title_common, 50);?></h3>
      <p><?=word_limiter($bill->bill_summary, 75);?></p>
      </a>
      <div class="stat_holder">
          <div class="status">
            <p class="label label-success"><?=$bill->current_status;?></p>
          </div>
          <div class="introduced">
            <p>Bill Introduced: <?=$bill->intro_date;?></p>
          </div>
          <div class="stats">
            <p class="label label-info">30 Views | <a href="#">20 Comments</a></p>
          </div>
      </div>
      <div class="star_split xl"> <!-- Img applied via CSS --> </div>
    </div>
    <?php endforeach; ?>
  </div>
