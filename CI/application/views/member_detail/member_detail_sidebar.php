  <div id="mbr_sidebar" class="span4 offset1 marginfix">
    <h4 class="red_title">Votes Most Often With</h4>
    <div class="mbr_detail_sidebar"> <a href="<?php echo site_url('member_detail/get_details/'.$info['vmo'][0]->id); ?>">
      <h5 class="bl_title"><?=$info['vmo'][0]->display_name;?></h5>
      <div class="img"><img src="<?php echo base_url('img/members/'.$info['vmo'][0]->bioguide_id.'.jpg');?>"></div>
      <div class="sidebar_info">
        <p><?=$info['vmo'][0]->party;?></p>
        <p><?=$info['vmo'][0]->role_type;?></p>
        <div class="sidebar_rating">
          <p class="bl_title">Approval Rating</p>
          <p><span>XX%</span></p>
        </div>
      </div>
      </a> </div>
    <h4 class="red_title">Votes Lest Often With</h4>
    <div class="mbr_detail_sidebar"> <a href="<?php echo site_url('member_detail/get_details/'.$info['vlo'][0]->id); ?>">
      <h5 class="bl_title"><?=$info['vlo'][0]->display_name;?></h5>
      <div class="img"><img src="<?php echo base_url('img/members/'.$info['vlo'][0]->bioguide_id.'.jpg');?>"></div>
      <div class="sidebar_info">
        <p><?=$info['vlo'][0]->party;?></p>
        <p><?=$info['vlo'][0]->role_type;?></p>
        <div class="sidebar_rating">
          <p class="bl_title">Approval Rating</p>
          <p><span>XX%</span></p>
        </div>
      </div>
      </a> </div>
    <h4 class="red_title">Related News Articles</h4>
    <ul class="pvb">
      <li><a href="#">Link to news article</a></li>
      <li><a href="#">Link to news article</a></li>
      <li><a href="#">Link to news article</a></li>
      <li><a href="#">Link to news article</a></li>
      <li><a href="#">Link to news article</a></li>
      <li><a href="#">Link to news article</a></li>
    </ul>    
  </div>
</div>
</div>