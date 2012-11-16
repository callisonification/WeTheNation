<div id="bill_info_container">
  <div class="container">
    <div id="mbr_heading" class="span9">
    <?php if($this->uri->uri_string() === 'bill_list' || $this->uri->uri_string() === 'bill_list/senate_bills' || $this->uri->uri_string() === 'bill_list/house_bills'): ?>
      <div class="star_heading_left small"> <!-- Img applied via CSS --> </div>
      <h2>Congressional Bills</h2>
      <div class="star_heading_right small"> <!-- Img applied via CSS --> </div>
      <p class="bill_def">Bills are the most common form of proposals for laws. They require approval from both the House and Senate, as well as the President's signature, in order to become laws.</p>
    <?php elseif($this->uri->uri_string() === 'bill_list/senate_joint_res_bills' || $this->uri->uri_string() === 'bill_list/house_joint_res_bills'): ?>
      <div class="star_heading_left small"> <!-- Img applied via CSS --> </div>
      <h2>Joint Resolutions</h2>
      <div class="star_heading_right small"> <!-- Img applied via CSS --> </div>
      <p class="bill_def">Joint Resolutions go through the same process as bills to become laws. They are used for appropriations, to amend the Constitution, and to declare war.</p>
    <?php elseif($this->uri->uri_string() === 'bill_list/senate_con_res_bills' || $this->uri->uri_string() === 'bill_list/house_con_res_bills'): ?>
      <div class="star_heading_left small"> <!-- Img applied via CSS --> </div>
      <h2>Concurrent Resolutions</h2>
      <div class="star_heading_right small"> <!-- Img applied via CSS --> </div>
      <p class="bill_def">Concurrent resolutions don't become laws. They affect the functioning of Congress itself by requesting a call for recess, a joint session, the creation of a joint committee, and more.</p>
    <?php elseif($this->uri->uri_string() === 'bill_list/senate_res_bills' || $this->uri->uri_string() === 'bill_list/house_res_bills'): ?>
      <div class="star_heading_left small"> <!-- Img applied via CSS --> </div>
      <h2>Resolutions</h2>
      <div class="star_heading_right small"> <!-- Img applied via CSS --> </div>
      <p class="bill_def">Resolutions (also called "simple resolutions") are not proposals for laws, but rather are statements of opinion by Congress on various matters.</p>
    <?php endif; ?>
    </div>
    <div id="sortable" class="span5 bill_sort">
      <p>Filter Bills:</p>
      <div class="sort_btns btn-toolbar"> <a href="<?=site_url('bill_list');?>" class="btn btn-small">All Bills</a>
        <div class="btn-group"> <a class="btn dropdown-toggle btn-small" data-toggle="dropdown" href="#">Senate Bills <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?=site_url('bill_list/senate_bills');?>" title="View all Senate bills">Senate Bills</a></li>
            <li><a href="<?=site_url('bill_list/senate_joint_res_bills');?>" title="View Senate Joint Resolutions">Joint Resolutions</a></li>
            <li><a href="<?=site_url('bill_list/senate_con_res_bills');?>" title="View Senate Concurrent Resolutions">Concurrent Resolutions</a></li>
            <li><a href="<?=site_url('bill_list/senate_res_bills');?>" title="View Senate Resolutions">Resolutions</a></li>
          </ul>
        </div>
        <div class="btn-group"> <a class="btn dropdown-toggle btn-small" data-toggle="dropdown" href="#">House Bills <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?=site_url('bill_list/house_bills');?>" title="View all House bills">House Bills</a></li>
            <li><a href="<?=site_url('bill_list/house_joint_res_bills');?>" title="View House Joint Resolutions">Joint Resolutions</a></li>
            <li><a href="<?=site_url('bill_list/house_con_res_bills');?>" title="View House Concurrent Resolutions">Concurrent Resolutions</a></li>
            <li><a href="<?=site_url('bill_list/house_res_bills');?>" title="View House Resolutions">Resolutions</a></li>
          </ul>
        </div>
      </div>
      <p>Sort Bills:</p>
      <div class="btn-group sortby" data-toggle="buttons-radio">
        <button type="button" class="btn active">Views</button>
        <button type="button" class="btn">Popularity</button>
        <button type="button" class="btn">Introduced Date</button>
      </div>
    </div>
  </div>
</div>
<div id="midsplit">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>">Home</a><span class="divider"> / </span></li>
      <?php if($this->uri->uri_string() === 'bill_list'): ?>
          <li class="active">All Bills</li>
      <?php elseif($this->uri->uri_string() === 'bill_list/senate_bills'): ?>
          <li><a href="<?php echo site_url('bill_list/senate_bills'); ?>">Senate</a>
          </li><span class="divider"> / </span>
          <li class="active">Bills</li>
      <?php elseif($this->uri->uri_string() === 'bill_list/senate_joint_res_bills'): ?>
          <li><a href="<?php echo site_url('bill_list/senate_bills'); ?>">Senate</a>
          </li><span class="divider"> / </span>
          <li class="active">Joint Resolutions</li>
      <?php elseif($this->uri->uri_string() === 'bill_list/senate_con_res_bills'): ?>
          <li><a href="<?php echo site_url('bill_list/senate_bills'); ?>">Senate</a>
          </li><span class="divider"> / </span>
          <li class="active">Concurrent Resolutions</li>
      <?php elseif($this->uri->uri_string() === 'bill_list/senate_res_bills'): ?>
          <li><a href="<?php echo site_url('bill_list/senate_bills'); ?>">Senate</a>
          </li><span class="divider"> / </span>
          <li class="active">Resolutions</li>
      <?php elseif($this->uri->uri_string() === 'bill_list/house_bills'): ?>
          <li><a href="<?php echo site_url('bill_list/house_bills'); ?>">House</a>
          </li><span class="divider"> / </span>
          <li class="active">Bills</li>
      <?php elseif($this->uri->uri_string() === 'bill_list/house_joint_res_bills'): ?>
          <li><a href="<?php echo site_url('bill_list/house_bills'); ?>">House</a>
          </li><span class="divider"> / </span>
          <li class="active">Joint Resolutions</li>
      <?php elseif($this->uri->uri_string() === 'bill_list/house_con_res_bills'): ?>
          <li><a href="<?php echo site_url('bill_list/house_bills'); ?>">House</a>
          </li><span class="divider"> / </span>
          <li class="active">Concurrent Resolutions</li>
      <?php elseif($this->uri->uri_string() === 'bill_list/house_res_bills'): ?>
          <li><a href="<?php echo site_url('bill_list/house_bills'); ?>">House</a>
          </li><span class="divider"> / </span>
          <li class="active">Resolutions</li>
      <?php endif; ?>
    </ul>
  </div>
</div>