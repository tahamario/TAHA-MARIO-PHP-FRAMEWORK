<?php require base_path('views/components/head.php') ?>

<?php require base_path('views/components/nav.php') ?>

<?php require base_path('views/components/banner.php') ?>

<div class="content">
    <div>
        <p>This is a edit note page</p>
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
                    <input type="text" name="title" placeholder="Note title" value="<?= $note->title ?? $_POST['title'] ?? "" ?>"/>
                </label>
                <?php if (isset($errors['title'])) : ?>
                    <p style="color: red;margin: 10px 0;"><?= $errors['title']; ?></p>
                <?php endif; ?>
            </div>
            <div style=" margin: 5px 0">
                <label>
                    Body :
                    <textarea name="body" rows="3" placeholder="Note description..."><?= $note->body ?? $_POST['body'] ?? ''; ?>
                    </textarea>
                </label>
                <?php if (isset($errors['body'])) : ?>
                    <p style="color: red;margin: 10px 0;"><?= $errors['body']; ?></p>
                <?php endif; ?>
            </div>
            <button type="submit">Update</button>
            <input type="hidden" name="id_note" value="<?= $note->id ?>" />
            <input type="hidden" name="_method" value="PUT" />
        </form>

    </div>
</div>
<?php require base_path('views/components/footer.php') ?>