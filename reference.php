<?php $slider_content = get_field('slider_reference', 'option');
    if ( is_array($slider_content) && count( $slider_content ) > 2 ) { ?>
        <div class="lrbo-reference">
            <h2 class="lrbo-intro__title">REFERENTIES</h2>
            <p class="lrbo-intro__desc">Enkele van de referenties van Lrbo</p>
            <div class="lrbo-reference-slider-wrapper">
                <div class="lrbo-reference-slider__arrow lrbo-reference-slider__prev" id="lrbo-reference-slider__prev">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 47.255 47.255" style="enable-background:new 0 0 47.255 47.255;" xml:space="preserve">
                        <g>
                            <path d="M12.314,47.255c-0.256,0-0.512-0.098-0.707-0.293c-0.391-0.391-0.391-1.023,0-1.414l21.92-21.92l-21.92-21.92   c-0.391-0.391-0.391-1.023,0-1.414s1.023-0.391,1.414,0L35.648,22.92c0.391,0.391,0.391,1.023,0,1.414L13.021,46.962   C12.825,47.157,12.57,47.255,12.314,47.255z"/>
                        </g>
                    </svg>
                </div>
                <div class="lrbo-reference-slider-list" id="lrbo-reference-slider-list">
                    <?php foreach( $slider_content as $index => $item ) { ?>
                        <div class="lrbo-reference-slider" <? if( $index === 0) { ?>id='lrbo-ref'<?php } ?> >
                            <div class="lrbo-reference-slider__img " style="background-image: url(<?php echo $item['image']['url']; ?>);"></div>
                            <div class="lrbo-reference-slider__content">
                                <span class="lrbo-reference-slider__tag"><?php echo $item['type']; ?></span>
                                <h2 class="lrbo-reference-slider__title"><?php echo $item['title']; ?></h2>
                                <div class="lrbo-reference-slider__desc"><p><?php echo $item['description']; ?></p></div>
                                <a target="_blank_" class="lrbo-reference__link" href="<?php echo $item['link']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 9h-9v-9h-6v9h-9v6h9v9h6v-9h9z"/></svg></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="lrbo-reference-slider__arrow lrbo-reference-slider__next" id="lrbo-reference-slider__next">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 47.255 47.255" style="enable-background:new 0 0 47.255 47.255;" xml:space="preserve">
                        <g>
                            <path d="M12.314,47.255c-0.256,0-0.512-0.098-0.707-0.293c-0.391-0.391-0.391-1.023,0-1.414l21.92-21.92l-21.92-21.92   c-0.391-0.391-0.391-1.023,0-1.414s1.023-0.391,1.414,0L35.648,22.92c0.391,0.391,0.391,1.023,0,1.414L13.021,46.962   C12.825,47.157,12.57,47.255,12.314,47.255z"/>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    <?php } ?>
