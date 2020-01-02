<?php require(__DIR__ . '/../Layout/header.php'); ?>

    <div class="container">
        <h1>Management of applications <small class="pull-right"><a href="/Admin/add">Add new</a></small></h1>
        
        <?php
        if(count($items) > 0) { ?>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Prompt</th>
                    <th scope="col">Link</th>
                    <th scope="col">Active</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($items as $item) { ?>
                    <tr>
                        <th scope="row"><?= $item['id']?></th>
                        <td><?= $item['title']?></td>
                        <td><?= $item['prompt']?></td>
                        <td><?= $item['link']?></td>
                        <td>
                            <a href="/Admin/revertState?id=<?= $item['id']?>">
                                <?php if($item['active']) {?>
                                    <i class="fa fa-check"></i>
                                <?php } else { ?>
                                    <i class="fa fa-times"></i>
                                <?php } ?>
                            </a>
                        </td>
                        <td>
                            <form action="/Admin/destroy?id=<?= $item['id']?>" method="post" role="form">
                                <div class='btn-group'>
                                    <a href="/Admin/show?id=<?= $item['id']?>" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                                    <a href="/Admin/edit?id=<?= $item['id']?>" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                                    <button type="submit" class='btn btn-default btn-xs' onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                                </div>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            
        <?php } else { ?>
            <p>Currently is nothing here. Please <a href="/Admin/add">add</a> your first application</p>
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