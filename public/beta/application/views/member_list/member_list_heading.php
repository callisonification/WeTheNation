<?php if(uri_string() === 'member_list/senate_members'): ?>
<div id="bill_info_container">
  <div class="container">
    <div id="mbr_heading" class="span9">
      <div class="star_heading_left"> <!-- Img applied via CSS --> </div>
      <h2 class="red_title">Senate</h2>
      <div class="star_heading_right"> <!-- Img applied via CSS --> </div>
      <p>This is a list of all 100 members of the current U.S. Senate. Use the buttons to the right to sort this list in other ways, such as most viewed.</p>
    </div>
    <div id="sortable" class="span5 mbr_sort">
      <p>Sort Members:</p>
      <div class="btn-group sortby" data-toggle="buttons-radio">
        <button type="button" class="btn active">Name</button>
        <button type="button" class="btn">State</button>
        <button type="button" class="btn">Rating</button>
        <button type="button" class="btn">Views</button>
      </div>
    </div>
  </div>
</div>
<div id="midsplit">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>">Home</a><span class="divider"> / </span></li>
      <li class="active">Senate Members</li>
    </ul>
  </div>
</div>
<?php elseif(uri_string() === 'member_list/house_members'): ?>
<div id="bill_info_container">
  <div class="container">
    <div id="mbr_heading" class="span9">
      <div class="star_heading_left"> <!-- Img applied via CSS --> </div>
      <h2 class="red_title">House</h2>
      <div class="star_heading_right"> <!-- Img applied via CSS --> </div>
      <p>This is a list of all 435 members of the current U.S. House of Representatives. Use the buttons to the right to sort this list in other ways, such as most viewed.</p>
    </div>
    <div id="sortable" class="span5 mbr_sort">
      <p>Sort Members:</p>
      <div class="btn-group sortby" data-toggle="buttons-radio">
        <button type="button" class="btn active">Name</button>
        <button type="button" class="btn">State</button>
        <button type="button" class="btn">Rating</button>
        <button type="button" class="btn">Views</button>
      </div>
    </div>
  </div>
</div>
<div id="midsplit">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>">Home</a><span class="divider"> / </span></li>
      <li class="active">House Members</li>
    </ul>
  </div>
</div>
<?php endif; ?>