<?php
$videoIds = [
    'Pv1Xhpz7FMI',
    'gPv4sMNNVJg',
    'lG7l8XfZ-Ho'
];
?>
<section id="music" class="listen">
    <div class="main-wrapper">
        <div class="inner-wrapper">
            <h2>Music</h2>
            <div class="gallery">
                <ul class="gallery-list" data-gallery>
                    <?php for ($i = 0; $i < count($videoIds); $i++): ?>
                        <li href="https://www.youtube.com/watch?v=<?php echo $videoIds[$i]; ?>">
                            <div class="hover-wrapper">
                                <div class="video">
                                    <img src="https://img.youtube.com/vi/<?php echo $videoIds[$i]; ?>/0.jpg">
                                    <div class="play-button"></div>
                                </div>
                            </div>
                        </li>
                    <?php endfor; ?>
                </ul>
            </div>
<!--            <iframe src="https://open.spotify.com/embed/artist/5ZmSTVQXMFaJAN7Cj1I4w5" width="100%" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>-->
        </div>
    </div>
</section>