<div class="profile-item">
  <div class="image-box">
    <img src="<?=HTML_ROOT;?>/img/about/<?php echo $img ?>" alt="<?php echo $name ?>" class="image">
    <span class="close-btn"></span>
  </div>
  <p class="name"><?php echo $name ?><br>
  <span class="title"><?php echo $title ?></span></p>
  <div class="more-button-container">
      <div class="profile-button profile-button--see-more">See more</div>
      <div class="profile-button profile-button--close d-none">Close</div>
  </div>
  <p class="description"><?php echo $description ?></p>
</div>