<?php require base_path('views/components/head.php') ?>

<?php require base_path('views/components/nav.php') ?>

<div class="container">
    <h2>Login</h2>
    <?php if (isset($errors['credential'])) : ?>
        <span style="color: white;margin: 0px 0 10px 0;display: block;background-color: #e92121;
            text-align: center;border-radius: 5px;padding: 15px;"><?= $errors['credential']; ?></span>
    <?php endif; ?>
    <form action="/login" method="post">

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

        <input type="submit" value="Login">
    </form>
    <br />
    <p>
        Dont have account ? <a href="/register">Register</a>
    </p>
</div>

<?php require base_path('views/components/footer.php') ?>