  <div id="mbr_sidebar" class="span4 offset1 marginfix">
    <h4 class="red_title">Votes Most Often With</h4>
    <div class="mbr_detail_sidebar"> <a href="<?php echo site_url('member_detail/get_details/'.$info['vmo'][0]->person_id); ?>">
      <h5 class="bl_title"><?=$info['vmo'][0]->display_name;?></h5>
      <div class="img"><img src="<?php echo base_url('img/members/'.$info['vmo'][0]->bioguide_id.'.jpg');?>"></div>
      <div class="sidebar_info">
        <p><?=$info['vmo'][0]->party;?></p>
        <p><?=$info['vmo'][0]->role_type;?></p>
        <div class="sidebar_rating">
          <p class="bl_title">Approval Rating</p>
          <?php if($info['vmo'][0]->approval_rating === NULL):?>
          <p><span>0%</span></p>
          <?php else:?>
          <p><span><?=$info['vmo'][0]->approval_rating;?>%</span></p>
          <?php endif;?>
        </div>
      </div>
      </a> </div>
    <h4 class="red_title">Votes Lest Often With</h4>
    <div class="mbr_detail_sidebar"> <a href="<?php echo site_url('member_detail/get_details/'.$info['vlo'][0]->person_id); ?>">
      <h5 class="bl_title"><?=$info['vlo'][0]->display_name;?></h5>
      <div class="img"><img src="<?php echo base_url('img/members/'.$info['vlo'][0]->bioguide_id.'.jpg');?>"></div>
      <div class="sidebar_info">
        <p><?=$info['vlo'][0]->party;?></p>
        <p><?=$info['vlo'][0]->role_type;?></p>
        <div class="sidebar_rating">
          <p class="bl_title">Approval Rating</p>
          <?php if($info['vlo'][0]->approval_rating === NULL):?>
          <p><span>0%</span></p>
          <?php else:?>
          <p><span><?=$info['vlo'][0]->approval_rating;?>%</span></p>
          <?php endif;?>
        </div>
      </div>
      </a> </div>
    <h4 class="red_title">Related News Articles</h4>
    <ul class="pvb">
    <?php if($news == NULL):?>
      <li>No related articles at this time...</li> 
    <?php else:?>   
    <?php foreach($news as $n):?>
      <li><a href="<?=$n->url;?>"><?=$n->title;?></a></li>
     <?php endforeach;?>
     <?php endif;?>
    </ul>    
  </div>
</div>
</div>