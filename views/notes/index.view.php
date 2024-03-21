<?php require base_path('views/components/head.php') ?>

<?php require base_path('views/components/nav.php') ?>

<?php require base_path('views/components/banner.php') ?>

<div class="content">
    <div>
        <p>This is notes page</p>
        <br />
        <p style="display: flex; justify-content: end;">
            <a href="/note/create" style="margin: 10px;background: #0c0c6f;color: white;padding: 8px;border-radius: 5px;text-decoration: none;">
                Create Note
            </a>
        </p>
        <ul>
            <?php foreach ($notes as $note) : ?>
                <li><a href="note?id=<?= $note->id; ?>"><?= htmlspecialchars($note->title) ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<!-- <script>
    const textTOSpeak = "Bonjour, Monsieur Omar Sakioudi. Bonjour, Monsieur Laraki Abdallah . Bonjour, Monsieur Maroune Baroudi.";
    const utterance = new SpeechSynthesisUtterance(textTOSpeak);
    window.speechSynthesis.speak(utterance);
</script> -->
<?php require base_path('views/components/footer.php') ?>