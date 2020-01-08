<?php require(__DIR__ . '/../Layout/header.php'); ?>

    <div class="column one">
        <span class="pull-right"><a class="icon_bar" href="/Admin/add"><span class="icon">Add new</span></a></span>
        <h2 class="title">Management of applications </h2>
        
        <?php
        if (count($items) > 0) { ?>
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Prompt</th>
                    <th>Link</th>
                    <th>Active</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($items as $item) { ?>
                    <tr>
                        <th><?= $item[ 'id' ] ?></th>
                        <td><img style="height:40px;width:40px;" src="<?= $item[ 'image_link' ] ?>"
                                 alt="<?= $item[ 'title' ] ?>"></td>
                        <td><?= $item[ 'title' ] ?></td>
                        <td><small><?= mb_substr($item[ 'prompt' ], 0, 220) ?>...</small></td>
                        <td>
                            <?php if ($item[ 'platform_name' ] == 'Android') { ?>
                                <a href="<?= $item[ 'link' ] ?>" target="_blank">Android</a>
                            <?php } else { ?>
                                <a href="<?= $item[ 'link' ] ?>" target="_blank">iOS</a>
                            <?php } ?>
                        </td>
                        <td>
                            <a href="/Admin/revertState?id=<?= $item[ 'id' ] ?>">
                                <?php if ($item[ 'active' ]) { ?>
                                    <i class="fa fa-check" style="color:green;"></i>
                                <?php } else { ?>
                                    <i class="fa fa-times" style="color:red;"></i>
                                <?php } ?>
                            </a>
                        </td>
                        <td style="min-width: 180px;">
                            <a href="/Apps/show?id=<?= $item[ 'id' ] ?>" class='icon_bar icon_bar_small'>
                                <span class="button_icon"><i class="fa fa-eye"></i></span>
                            </a>
                            <a href="/Admin/edit?id=<?= $item[ 'id' ] ?>" class='icon_bar icon_bar_small'>
                                <span class="button_icon"><i class="fa fa-edit"></i></span>
                            </a>
                            <a href="/Admin/destroy?id=<?= $item[ 'id' ] ?>" class='icon_bar icon_bar_small'
                               onclick="return confirm('Are you sure?')">
                                <span class="button_icon"><i class="fa fa-trash"></i></span>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        
        <?php } else { ?>
            <p>Currently is nothing here. Please <a href="/Admin/add">add</a> your first application</p>
        <?php } ?>
    </div>
    <div class="column one">
        <?= $page ?>
    </div>


<?php require(__DIR__ . '/../Layout/footer.php'); ?>