<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>

<body>

    <section>
        @if(!$user)
            где твае имя дебилойд

        @else
            <div>Вы успешно зарегистрировались {{ $user->name }}</div>

        @endif
    </section>
</body>
</html>
