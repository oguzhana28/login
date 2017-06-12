<div class="container">
    <h1>Welkom bij het inlogsysteem.</h1>
    <p>Je bent nu in het register scherm.</p>
    <form method="post" action="<?= URL ?>register/createSave">
        <div>
            <label>Email:</label>
            <input class="input" type="text" id="Email" name="Email"></input>
        </div>
        </br>
        <div>
            <label>Username:</label>
            <input class="input" type="text" id="Username" name="Username"></input>
        </div>
        </br>
        <div>
            <label>Password:</label>
            <input class="input" type="password" id="Password" name="Password"></input>
        </div>
        </br>
        <div>
            <input class="button" type="submit" name="submit" value="save"></input>
        </div>
    </form>
    <ul>
        <li>
            <a class="register" href="<?= URL ?>home/index">ga terug!
            </a>
    </ul>
    </form>
</div>