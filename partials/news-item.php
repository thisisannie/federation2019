<!-- News Item -->
<div class="col-12 col-sm-6 col-md-5 <?php if($side == "right") {echo "offset-md-2";} ?> news-col">
    <div class="news-article news-article--<?php echo $side ?>">
        <a href="news__<?php echo $slug ?>" class="news-article__link">
            <div class="news-article__feature-img">
                <div class="news-article__text-mask news-article__text-mask--outer">
                    <h2 class="visuallyhidden"><?php echo $title ?></h2>
                    <div class="news-article__text news-article__text--outer">
                        <span class="animate animate--slide-left-25"><?php echo $title ?></span>
                    </div>
                </div>
                <div class="news-article__image-mask">
                    <img src="img/news/<?php echo $slug ?>/<?php echo $img ?>" alt="" class="news-article__image">
                </div>
                <div class="news-article__text-mask news-article__text-mask--inner">
                    <div class="news-article__text news-article__text--inner">
                        <span class="animate animate--slide-left-25"><?php echo $title ?></span>
                    </div>
                </div>
            </div>
            <p class="animate animate--fade-up-25"><?php echo $copy ?></p>
            <span class="link-button animate animate--fade-up-25">See more</span>
        </a>
    </div>
</div>