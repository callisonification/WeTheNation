<div class="sidebar_heading sbb span5">
    <div class="sidebar_heading_left"> <!-- Img applied via CSS --> </div>
    <h3 class="red_title">Members in the News</h3>
    <div class="sidebar_heading_right"> <!-- Img applied via CSS --> </div>
  </div>
  <div id="sidebar_members" class="span5">
  	<?php foreach($news as $n):?>
    <div class="mbrholder">
      <div class="side_mbr">
      	<div class="img">
            <a href="<?php echo site_url('member_detail/get_details/'.$n->person_id); ?>" title="View Member Profile">
                <img src="<?=base_url('img/members/'.$n->bioguide_id.'.jpg');?>" title="" />
            </a>
        </div>
      </div>
      <p class="bl_title mgfix"><?=$n->name;?></p>
      <p class="article"><a href="<?=$n->url;?>" title="Go To Article" target="new"><?=$n->title;?></a></p>
    </div>
    <hr />
    <?php endforeach;?>
  <!-- //End sidebar MIN module -->
  </div>
</div>