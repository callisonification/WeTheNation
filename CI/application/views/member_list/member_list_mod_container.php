<div id="topcontent" class="container">
<div id="news" class="span10">
  <?php foreach($members as $member): ?>
  <div id="<?=$member->state;?>" class="module mbr"> <a href="<?php echo site_url('member_detail/get_details/'.$member->id); ?>" title="View this member >>">
    <div class="mbr_photo"><img src="<?php echo base_url('img/members/'.$member->bioguide_id.'.jpg'); ?>" height="115px" width="95px" /></div>
    <h3 class="bl_title">
      <?=$member->display_name;?>
    </h3>
    <p>
      <?=$member->description;?>
    </p>
    </a>
    <ul>
      <li><i class="icon-star"></i> Approval Rating <strong><?=$member->approval_rating;?>%</strong></li>
      <li><i class="icon-ok-sign"></i> With Party Vote <strong>
        <?=$member->with_party_percentage;?>
        %</strong></li>
      <li><i class="icon-ban-circle"></i> Abstain Percentage <strong>
        <?=$member->abstains_percentage;?>
        %</strong></li>
    </ul>
    <div class="stats">
      <p class="label label-info">30 Views | <a href="#" title="View all comments">20 Comments</a></p>
    </div>
    <div class="star_split xl"> <!-- Img applied via CSS --> </div>
  </div>
  <?php endforeach; ?>
</div>
