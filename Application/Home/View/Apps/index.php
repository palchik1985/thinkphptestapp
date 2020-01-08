<?php require(__DIR__ . '/../Layout/header.php'); ?>

    <div class="container">
        <h2>Frontend page with a list of applications</h2>
        <h4>Filter by platform:
            <a href="/Apps/index?platform_id=1">Android</a>,
            <a href="/Apps/index?platform_id=2">iOS</a> or <a href="/Apps/index">show all</a>
        </h4>
        <?php
        if (count($items) > 0) {
            foreach ($items as $item) {
                require(__DIR__ . '/item_card.php');
            }
        } else { ?>
            <p>Currently is nothing here.</p>
        <?php } ?>
    </div>
    <div class="container">
        <nav aria-label="...">
            <nav aria-label="...">
                <?= $page ?>
            </nav>
        </nav>

    </div>

<?php require(__DIR__ . '/../Layout/footer.php'); ?>