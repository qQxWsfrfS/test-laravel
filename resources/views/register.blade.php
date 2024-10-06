<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>

    <body>

        <form action="/register" method="POST">
            @csrf
            <label for="name">Имя
                <input type="text" name="name" placeholder="Имя" required/>
            </label>
            <br>
            <label for="email">Email
                <input type="email" name="email" placeholder="Почта" required/>
            </label>
            <br>
            <label for="password">Password
                <input type="text" name="password" placeholder="Пароль" required>
            </label>
            <br>
            <input type="submit" value="Регистрация">
        </form>
    </body>
</html>
