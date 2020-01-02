
<div class="card" style="margin-bottom:20px;">
    <div class="card-body">
        <h5 class="card-title"><?= $item['title'] ?> (<?= $item['platform_name']?>)</h5>
        <p class="card-text">
            <?= $item['prompt']?><br>
            The link to a application: <a href="<?= $item['link']?>"><?= $item['link']?></a>
        </p>
<!--        <a href="http://site.local/Apps/item/--><?//=$item['id'] ?><!--" class="btn btn-primary">I want!</a>-->
        <a href="<?= $item['link']?>" class="btn btn-primary">I want!</a>
    </div>
</div>