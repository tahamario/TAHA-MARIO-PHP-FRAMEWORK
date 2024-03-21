<?php require base_path('views/components/head.php') ?>

<?php require base_path('views/components/nav.php') ?>

<?php require base_path('views/components/banner.php') ?>

<div class="content">
    <div>
        <p>This is a create note page</p>
        <br />
        <p>
            <a href="/notes" style="margin: 10px;background: #0c0c6f;color: white;padding: 8px;border-radius: 5px;text-decoration: none;">
                Go back
            </a>
        </p>
        <br />

        <form method="Post" action="/note" style="display: flex; justify-content: center; align-items: center;flex-direction:column">
            <div style=" margin: 5px 0">
                <label>
                    Title :
                    <input type="text" name="title" placeholder="Note title" />
                </label>
                <?php if (isset($errors['title'])) : ?>
                    <p style="color: red;margin: 10px 0;"><?= $errors['title']; ?></p>
                <?php endif; ?>
            </div>
            <div style=" margin: 5px 0">
                <label>
                    Body :
                    <textarea name="body" rows="3" placeholder="Note description..."><?= $_POST['body']?? ''; ?></textarea>
                </label>
                <?php if (isset($errors['body'])) : ?>
                    <p style="color: red;margin: 10px 0;"><?= $errors['body']; ?></p>
                <?php endif; ?>
            </div>
            <button type="submit">Create</button>
        </form>

    </div>
</div>
<?php require base_path('views/components/footer.php') ?>