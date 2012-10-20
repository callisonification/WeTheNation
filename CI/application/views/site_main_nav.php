<div id="navsplit">
  <div class="container">
    <div class="btn-toolbar span14">
      <h1><a href="<?php echo base_url(); ?>" id="hatch" title="Back to Home Page">WeTheNation</a></h1>
      <a href="<?php echo site_url('bill_list');?>" class="btn">Bills</a>
      <div class="btn-group"> <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Senate <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url('bill_list/senate_bills');?>" title="View all Senate bills">Senate Bills</a></li>
          <li><a href="<?php echo site_url('member_list/senate_members');?>" title="View all Senate members">Senate Members</a></li>
        </ul>
      </div>
      <div class="btn-group"> <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">House <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url('bill_list/house_bills');?>" title="View all House bills">House Bills</a></li>
          <li><a href="<?php echo site_url('member_list/house_members');?>" title="View all House members">House Members</a></li>
        </ul>
      </div>
      <form class="navbar-search pull-right" method="post" action="">
        <input type="text" class="form-search" placeholder="Search">
        <button type="submit" class="btn searchbtn"><i class="icon-search"></i></button>
      </form>
    </div>
  </div>
</div>
