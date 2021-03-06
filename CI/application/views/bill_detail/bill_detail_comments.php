<div id="topcontent" class="container">
<div id="comment_heading" class="span10">
  <div class="star_heading_left"> <!-- Img applied via CSS --> </div>
  <h2 class="red_title">User Comments</h2>
  <div class="star_heading_right"> <!-- Img applied via CSS --> </div>
</div>
<div id="news" class="span10 bill_dtl">
  	<?php foreach($comment as $com) :?>
    <div class="user_comment"> <img src="<?php echo base_url('img/slices/missing_user.png');?>">
      <div class="comment_hook"> <!-- Img applied via CSS --></div>
      <div class="user_master_comment">
      	<p class="comment_user"><?=$com->user_name;?> Says:</p>
        <p><?=$com->comment;?></p>
        <p class="comment_date">Posted: <?=$com->date_time;?></p>
      </div>
    </div>
    <?php endforeach;?>
    <?php if($comment == NULL):?>
    <p class="no_comments">This member has no comments, be the first to write one!</p>
    <?php endif;?>
    <?php if($this->session->userdata('logged_in') === TRUE):?>
  <div id="comment_splitter"></div>
  <div id="add_comment"> <img src="<?php echo base_url('img/slices/missing_user.png');?>">
    <div class="comment_hook"> <!-- Img applied via CSS --></div>
    <div class="user_add_comment">
    <form name="bill_comment_form" id="bill_comment_form" method="post">
      <textarea rows="3" cols="50" placeholder="What do you think about this bill?" id="comment"></textarea>
      <input type="hidden" value="<?=$this->uri->segment(3);?>" id="bill_id" />
      <input type="hidden" value="<?=$this->session->userdata('user_id');?>" id="user_id" />
      <input type="hidden" value="<?=$this->session->userdata('display_name');?>" id="user_name" />
      <input type="hidden" value="<?=base_url('img/slices/missing_user.png');?>" id="user_photo" />
      <input type="hidden" value="bill" id="comment_type" />
      </div>
      <input type="submit" id="bill_comment_btn" class="btn submit" value="Add Comment">
      <input type="reset" class="btn-link reset" value="Cancel">
    </form>
  </div>
  <?php endif;?>
</div>
