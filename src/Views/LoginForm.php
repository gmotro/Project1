<?php

namespace Views;


class LoginForm extends View
{
    public function __construct()
    {
        $this->content = <<<LOGIN_FORM
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Example Login Form</title>
        <link rel="stylesheet" href="css/login.css" />
    </head>
    <body>
        <div class="container" align="center">
            <form method="POST" action="/auth">
                Username: <input type="text" name="username" size="15" /><br />
                Password: <input type="password" name="password" size="15" /><br /><br />
                <select name="LoginType">
                    <option value="FromFile">From File</option>
                    <option value="FromMemery">From Memery</option>
                    <option value="FromDBMySQL">From DB MySQL</option>
                    <option value="FromDBSQLite">From DB SQLite</option>
                </select><br /><br /><br />
                <p><input type="submit" value="Login" /></p>
            </form>
        </div>
    </body>
</html>
LOGIN_FORM;
    }
}
