<?php require(__DIR__ . './../Layout/header.php'); ?>
    
    
    <div class="container">
        <h1>Edit your app </h1>
        <h4>App name: <?= $model['title'] ?></h4>
        <form action="/Admin/update?id=<?= $model['id']?>" method="post" role="form">
            <input type="hidden" id="id" name="id" value="<?=$model['id']?>">
            <div class="form-group">
                <label for="title">Title</label>
                <input value="<?= $model['title'] ?>" type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp">
                <small id="titleHelp" class="form-text text-muted">Choose the title of your application.</small>
            </div>
            <div class="form-group">
                <label for="prompt">Prompt</label>
                <textarea class="form-control" id="prompt" name="prompt" rows="3" aria-describedby="promptHelp"><?= $model['prompt'] ?></textarea>
                <small id="promptHelp" class="form-text text-muted">Fill the description of your application.</small>
            </div>
            <div class="form-group">
                <label for="platform_id">Platform</label>
                <select class="form-control" id="platform_id" name="platform_id">
                    <option value="1" <?= $model['platform_id'] == "1" ? 'selected' : ''?>>ANDROID</option>
                    <option value="2" <?= $model['platform_id'] == "2" ? 'selected=selected' : ''?>>IOS</option>
                </select>
            </div>
            <div class="form-group">
                <label for="link">Link to file</label>
                <input type="text" value="<?= $model['link'] ?>" name="link" class="form-control" id="link" aria-describedby="linkHelp">
                <small id="linkHelp" class="form-text text-muted">Place here the link to your application.</small>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" <?= ($model['active']) ? 'checked=checked' : '' ?> class="form-check-input" name="active" id="active">
                <label class="form-check-label" for="active">Active</label>
                <small id="activeHelp" class="form-text text-muted">Choose if your application will be active for the
                    downloading.</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


<?php require(__DIR__ . './../Layout/footer.php'); ?>