<div class="nav">
    <ul>
        <li class=<?= isInUrl('/') ? "active-li" : '' ?>>
            <a href="/">Home</a>
        </li>
        <li class=<?= isInUrl('/about') ? "active-li" : '' ?>>
            <a href="/about">About</a>
        </li>
        <li class=<?= isInUrl('/notes') ? "active-li" : '' ?>>
            <a href="/notes">Notes</a>
        </li>
        <li class=<?= isInUrl('/contact') ? "active-li" : '' ?>>
            <a href="/contact">Contact</a>
        </li>
        <li class=<?= isInUrl('/curl') ? "active-li" : '' ?>>
            <a href="/curl" target="_blank">Curl</a>
        </li>
    </ul>
    <ul>
        <li class=<?= isInUrl('/login') ? "active-li" : '' ?>>
            <?php if ($_SESSION['auth'] ?? false) : ?>
                <form action="/logout" method="post">
                    <input type="submit" value="Log out">
                </form>
            <?php else : ?>
                <a href="/login">Login</a>
            <?php endif; ?>
        </li>
    </ul>
</div>