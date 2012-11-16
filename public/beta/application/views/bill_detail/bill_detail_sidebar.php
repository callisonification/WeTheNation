  <div id="mbr_sidebar" class="span4 offset1 marginfix">
    <h4 class="red_title">Bill Sponsored By</h4>
    <div class="mbr_detail_sidebar"> <a href="<?=site_url('member_detail/get_details/'.$info[0]->person_id);?>">
      <h5 class="bl_title"><?=$info[0]->display_name;?></h5>
      <div class="img"><img src="<?php echo base_url('img/members/'.$info[0]->bioguide_id.'.jpg');?>"></div>
      <div class="sidebar_info">
        <p><?=$info[0]->party;?></p>
        <p><?=$info[0]->role_type;?></p>
        <div class="sidebar_rating">
          <p class="bl_title">Approval Rating</p>
          <p><span>XX%</span></p>
        </div>
      </div>
      </a> </div>
    <h4 class="red_title">Trending Keywords</h4>
    <div class="keywords">
      <p class="keyword">Economy</p>
      <p class="keyword">Employment</p>
      <p class="keyword">Legislation</p>
      <p class="keyword">Health Care</p>
      <p class="keyword">Climate Change</p>
      <p class="keyword">Social Policy</p>
    </div>
  </div>
</div>
</div>