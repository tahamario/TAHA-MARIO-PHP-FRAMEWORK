<?php require base_path('views/components/head.php') ?>

<?php require base_path('views/components/nav.php') ?>

<?php require base_path('views/components/banner.php') ?>

<div class="content">
    <div>
        <p><?= htmlspecialchars($note->title) ?></p>
        <br />
        <p>
            <a href="/notes" style="margin: 10px;background: #0c0c6f;color: white;padding: 8px;border-radius: 5px;text-decoration: none;">
                Go back
            </a>
        </p>

        <br />
        <ul>
            <li><?= htmlspecialchars($note->body) ?></li>
        </ul>
        <br />

        <form method="post">
            <input type="hidden" name="_method" value="DELETE" />
            <input type="hidden" name="noteUser" value=<?= $note->user_id ?> />
            <input type="hidden" name="noteId" value=<?= $note->id ?> />
            <button style="margin: 10px;background: #ad2525;color: white;padding: 8px;border-radius: 5px; border: none;">Delete</button>

            <a style="
                margin: 10px;
                text-decoration:none;
                background: #208d33;
                color: white;
                padding: 8px;
                border-radius: 5px; 
                border: none;" href=<?= "/note/edit?id={$note->id}" ?>>
                Update
            </a>
        </form>
    </div>
</div>
<?php require base_path('views/components/footer.php') ?>