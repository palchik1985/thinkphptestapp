<?php require(__DIR__ . '/../Layout/header.php'); ?>

    <div class="container">
        <h1>List of applications</h1>
        
        <?php
        if(count($items) > 0) {
            foreach ($items as $item) {
                require(__DIR__ . '/item_card.php');
            }
        } else { ?>
            <p>Currently is nothing here. Please <a href="/Apps/add">add</a> your first application</p>
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