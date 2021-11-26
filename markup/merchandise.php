<?php

$productUrls = [
    'https://image.spreadshirtmedia.net/image-server/v1/products/T1212A228PA3523PT17X46Y44D199351114FS3997/views/1,width=650,height=650,appearanceId=228,backgroundColor=ffffff.jpg',
    'https://image.spreadshirtmedia.net/image-server/v1/products/T268A70PA393PT10X0Y5D199351232FS3695/views/3,width=650,height=650,appearanceId=70,backgroundColor=ffffff,crop=detail,modelId=1261.jpg',
    'https://image.spreadshirtmedia.net/image-server/v1/products/T1089A2PA4283PT17X18Y0D199350608FS1827/views/1,width=650,height=650,appearanceId=2,backgroundColor=ffffff.jpg',
    'https://image.spreadshirtmedia.net/image-server/v1/products/T1007A109PA4345PT17X41Y35D199297086FS4412/views/1,width=650,height=650,appearanceId=109,backgroundColor=ffffff.jpg'
];

?>

<section id="merchandise" class="merchandise">
    <div class="main-wrapper">
        <div class="inner-wrapper">
            <h2>Merchandise</h2>
            <ul class="merchandise-list">
                <?php foreach ($productUrls as $url): ?>
                    <li>
                        <img src="<?php echo $url; ?>" alt="">
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="button-wrapper">
                <a target="_blank" href="https://whiteleaf.myspreadshop.de/all" class="button">
                    <span>Go to shop</span>
                </a>
            </div>
        </div>
    </div>
</section>