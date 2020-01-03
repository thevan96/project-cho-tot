<div class="row">
    <div class="col-12">
        <?php foreach ($data as $item): ?>
        <a href="realestal/detail/<?= $item['id']?>" class="item">
            <div class="row bg-light">
                <div class="col-md-3" style="background-color: darkgray"></div>
                <div class="col-md-2 ">
                    <img src="<?= URLROOT ?>/public/imageUpload/index2.jpeg" alt="image" class="img-fruid" style="max-width: 130px">
                </div>
                <div class="col-md-4">
                    <strong><?= $item['title'] ?></strong>
                    <p class="text-danger"><?= $item['value'] ?></p>
                    <p class="font-italic"><?= $item['typeown'] ?></p>
                    <p class="font-weight-lighter"> <?= $item['address'] ?></p>
                </div>
                <div class="col-md-3" style="background-color: darkgray"></div>
            </div>
        </a>
        <?php endforeach; ?>
        <hr>
    </div>
</div>
