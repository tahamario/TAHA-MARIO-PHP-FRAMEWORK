<?php require base_path('views/components/head.php') ?>

<?php require base_path('views/components/nav.php') ?>

<div class="container">
    <h2>Sign Up</h2>
    <form action="/register" method="post">
        <label for="email">FullName:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" value="<?= $_POST['name'] ?? '' ?>">
        <?php if (isset($errors['name'])) : ?>
            <p style="color: red;margin: 0px 0 10px 0;"><?= $errors['name']; ?></p>
        <?php endif; ?>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" value="<?= $_POST['email'] ?? '' ?>">
        <?php if (isset($errors['email'])) : ?>
            <p style="color: red;margin: 0px 0 10px 0;"><?= $errors['email']; ?></p>
        <?php endif; ?>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password">
        <?php if (isset($errors['password'])) : ?>
            <p style="color: red;margin: 0px 0 10px 0;"><?= $errors['password']; ?></p>
        <?php endif; ?>

        <input type="submit" value="Sign Up">
    </form>
</div>

<?php require base_path('views/components/footer.php') ?>