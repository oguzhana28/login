<div class="container">
    <h1>Welkom bij het inlogsysteem.</h1>
    <p>Je bent nu in home/index.</p>
    <form method="post" action="<?= URL ?>Home/login">
        <label class="email">Email:</label>
        <input class="input" type="text" name="Email">
        </br>
        <label class="password">Password:</label>
        <input class="input" type="password" name="Password">
        </br>
        <input class="button" type="submit" value="log in">
        <ul>
            <li>
                <p class="register">Nog geen account?</p><a class="register" href="<?= URL ?>register/index"> maak hier uw account aan!
            </a>
        </ul>
    </form>

</div>