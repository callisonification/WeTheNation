  <div id="mbr_sidebar" class="span4 offset1">
     <h4 class="red_title">Newest Bills</h4>
    <ul class="pvb">
    <?php foreach($newbills as $bill):?>
      <li><a href="<?=base_url('bill_detail/get_details/'.$bill->id);?>" title="<?=$bill->title_common;?>"><?=character_limiter($bill->title_common, 65);?></a></li>
    <?php endforeach; ?>
    </ul>
    <h4 class="red_title">Trending Keywords</h4>
    <div class="keywords">
      <p class="keyword">Economy</p>
      <p class="keyword">Employment</p>
      <p class="keyword">Legislation</p>
      <p class="keyword">Health Care</p>
      <p class="keyword">Climate Change</p>
      <p class="keyword">Social Policy</p>
    </div>
    <h4 class="red_title">What People Are Saying</h4>
    <div class="bubble_2_right">
      <p class="regarding">Regarding bill H.R. 5678</p>
      <p><span>"</span>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus.<span>"</span></p>
      <p class="person">- Some Person</p>
    </div>
    <div class="bubble_2_left">
      <p class="regarding">Regarding bill H.R. 5678</p>
      <p><span>"</span>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus.<span>"</span></p>
      <p class="person">- Some Person</p>
    </div>
    <div class="bubble_2_right">
      <p class="regarding">Regarding bill H.R. 5678</p>
      <p><span>"</span>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus.<span>"</span></p>
      <p class="person">- Some Person</p>
    </div>
    <div class="bubble_2_left">
      <p class="regarding">Regarding bill H.R. 5678</p>
      <p><span>"</span>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus.<span>"</span></p>
      <p class="person">- Some Person</p>
    </div>
    <div class="bubble_2_right">
      <p class="regarding">Regarding bill H.R. 5678</p>
      <p><span>"</span>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus.<span>"</span></p>
      <p class="person">- Some Person</p>
    </div>
  </div>
</div>
