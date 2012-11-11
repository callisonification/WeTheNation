<div id="topcontent" class="container">
  <div id="news_heading" class="span9">
    <div class="star_heading_left"> <!-- Img applied via CSS --> </div>
    <h2 class="red_title">Bills In the News</h2>
    <div class="star_heading_right"> <!-- Img applied via CSS --> </div>
  </div>
  <div id="news" class="span9">
  	<?php foreach($bills as $bill): ?>
    <div class="module news">
      <div class="icon stock"> <!-- Img applied via CSS --> 
      	<p class="bill_num"><?=$bill->display_num;?></p>
        <?php if($bill->bill_type == 'senate_bill' || $bill->bill_type == 'senate_joint_resolution' || $bill->bill_type == 'senate_concurrent_resolution' || $bill->bill_type == 'senate_resolution'):?>
        <p class="bill_name">Senate</p>
        <?php elseif($bill->bill_type == 'house_bill' || $bill->bill_type == 'house_joint_resolution' || $bill->bill_type == 'house_concurrent_resolution' || $bill->bill_type == 'house_resolution'):?>
        <p class="bill_name">House</p>
        <?php endif; ?>
      </div>
      <a href="<?php echo site_url('bill_detail/get_details/'.$bill->id); ?>" title="View Bill Details">
      <h3 class="bl_title"><?=$bill->title_common;?></h3>
      <p><?=word_limiter($bill->bill_summary, 75);?></p>
      </a>
      <div class="star_split"> <!-- Img applied via CSS --> </div>
    </div>
    <?php endforeach; ?>
    
<!-- // pagination built and ready / currently only shows 5 results //
    <div class="pagination pagination-centered">
      <ul>
        <li class="disabled"><a href="#">Prev</a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">Next</a></li>
      </ul>
    </div>	//-->  
</div>