<?php
$slides = [
    [
        'image' => 'img/img1.jpg',
        'caption' => 'Slide 1 Caption',
        'alt' => 'Image 1'
    ],
    [
        'image' => 'img/img2.jpg',
        'caption' => 'Slide 2 Caption',
        'alt' => 'Image 2'
    ],
    [
        'image' => 'img/img3.jpg',
        'caption' => 'Slide 3 Caption',
        'alt' => 'Image 3'
    ],
];
?>

<section class="p-3 rounded" id="home">
    <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <?php foreach ($slides as $index => $slide): ?>
                <li data-bs-target="#carouselIndicators"
                    data-bs-slide-to="<?php echo $index; ?>"
                    class="<?php echo $index === 0 ? 'active' : ''; ?>"></li>
            <?php endforeach; ?>
        </ol>
        <div class="carousel-inner rounded h-50">
            <?php foreach ($slides as $index => $slide): ?>
                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                    <img src="<?php echo $slide['image']; ?>"
                        class=" w-100 img-fluid"
                        style="max-height: 40vh"
                        alt="<?php echo $slide['alt']; ?>">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo $slide['caption']; ?></h5>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <a class="carousel-control-prev" href="#carouselIndicators" role="button"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselIndicators" role="button"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>
</section>