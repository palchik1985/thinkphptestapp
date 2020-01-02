<?php require(__DIR__ . './../Layout/header.php'); ?>

    <style>
        .form-group {
            margin-bottom: 20px;
        }
    </style>

<!--<div class="section">-->
    <div class="container">
        <h2 class="title">Add new app to market</h2>
        <form action="/Admin/store" method="post" role="form">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp">
                <small id="titleHelp" class="form-text text-muted">Choose the title of your application.</small>
            </div>
            <div class="form-group">
                <label for="prompt">Prompt</label>
                <textarea class="form-control" id="prompt" name="prompt" rows="3" aria-describedby="promptHelp"></textarea>
                <small id="promptHelp" class="form-text text-muted">Fill the description of your application.</small>
            </div>
            <div class="form-group">
                <label for="platform_id">Platform</label>
                <select class="form-control" id="platform_id" name="platform_id">
                    <option value="1">ANDROID</option>
                    <option value="2">IOS</option>
                </select>
            </div>
            <div class="form-group">
                <label for="link">Link to image</label>
                <input type="text" name="image_link" class="form-control" id="image_link" aria-describedby="image_linkHelp">
                <small id="image_linkHelp" class="form-text text-muted">Place here the link to your application.</small>
            </div>
            <div class="form-group">
                <label for="link">Link to file</label>
                <input type="text" name="link" class="form-control" id="link" aria-describedby="linkHelp">
                <small id="linkHelp" class="form-text text-muted">Place here the link to your application.</small>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input pull-left" name="active" id="active">
                <label class="form-check-label" for="active">Active</label>
                <small id="activeHelp" class="form-text text-muted">Choose if your application will be active for the
                    downloading.</small>
            </div>
            <div class="form-group">
                <label for="verification_code">Verification</label>
                <?php
                ob_start();
                $Verify = new \Think\Verify();
                $Verify->entry();
                $ver = base64_encode(ob_get_contents());
                ob_end_clean();
                echo '<img src="data:image/png;base64,'.$ver.'"/>';
                ?>
                <input type="text" name="verification_code" class="form-control" id="verification_code" aria-describedby="verification_codeHelp">
                <small id="verification_codeHelp" class="form-text text-muted">Place here the link to your application.</small>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<!--</div>-->



<?php require(__DIR__ . './../Layout/footer.php'); ?>