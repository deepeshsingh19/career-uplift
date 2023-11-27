<form method="post" action="login.php" autocomplete="on">
    <h3>Log in</h3>
    <hr>
    <p>
        <label for="username" class="uname" data-icon="u"> Enter your username </label>
        <input id="username" name="username" required="required" type="text" />
    </p>
    <p>
        <label for="password" class="youpasswd" data-icon="p"> Enter your password </label>
        <input id="password" name="password" required="required" type="password" />
    </p>
    <p class="login button">
        <input type="submit" name="login" value="Login" />
    </p>
    <p class="change_link">
        Not a member yet ?
        <a href="#toregister" class="to_register">Sign up</a>
    </p>
</form>