<div id="topcontent" class="container">
  <div id="comment_heading" class="span10">
    <div class="star_heading_left"> <!-- Img applied via CSS --> </div>
    <h2 class="red_title">User Comments</h2>
    <div class="star_heading_right"> <!-- Img applied via CSS --> </div>
  </div>
  <div id="news" class="span10 mbr_dtl">
    <div class="user_comment"> <img src="<?php echo base_url('img/slices/mbr.jpg');?>">
      <div class="comment_hook"> <!-- Img applied via CSS --></div>
      <div class="user_master_comment">
        <p>this is a comment Lobortis nisl ut aliquip, ex ea commodo consequat duis autem vel! Vulputate velit esse molestie consequat vel illum dolore eu feugiat nulla. Littera gothica quam nunc putamus parum claram anteposuerit litterarum formas humanitatis. Delenit augue duis dolore te feugait nulla facilisi nam liber tempor cum soluta nobis eleifend.</p>
        <div class="nested_comment"> <img src="<?php echo base_url('img/slices/mbr_small.jpg');?>">
          <p>this is a nested comment</p>
        </div>
        <div class="nested_comment"> <img src="<?php echo base_url('img/slices/mbr_small.jpg');?>">
          <p>this is another nested comment</p>
        </div>
        <p class="add_comment"><a href="#">Leave a comment +</a></p>
        <div class="inline_comment">
          <form name="inline_comment_form" method="post" action="">
            <textarea role="3" cols="50" placeholder="Add comment"></textarea>
            <input type="submit" value="Submit">
            <a href="">Cancel</a>
          </form>
        </div>
      </div>
    </div>
    <div class="user_comment"> <img src="<?php echo base_url('img/slices/mbr.jpg');?>">
      <div class="comment_hook"> <!-- Img applied via CSS --></div>
      <div class="user_master_comment">
        <p>this is a comment Lobortis nisl ut aliquip, ex ea commodo consequat duis autem vel! Vulputate velit esse molestie consequat vel illum dolore eu feugiat nulla.</p>
        <p class="add_comment"><a href="#">Leave a comment +</a></p>
      </div>
    </div>
    <div id="comment_splitter"></div>
    <div id="add_comment"> <img src="<?php echo base_url('img/slices/mbr.jpg');?>">
      <div class="comment_hook"> <!-- Img applied via CSS --></div>
      <div class="user_master_comment">
      <form name="mbr_comment_form" method="post" action="">
        <textarea rows="3" cols="50" placeholder="What do you think about this member?"></textarea>
        </div>
        <input type="submit" class="btn submit" value="Add Comment">
        <input type="reset" class="btn-link reset" value="Cancel">
      </form>
    </div>
  </div>
