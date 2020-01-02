<h1><?= $model[ 'title' ] ?></h1>
<?php foreach ($model as $key => $field) { ?>
    <p><b><?= $key ?>: </b> <?= $field ?></p>
<?php } ?>
