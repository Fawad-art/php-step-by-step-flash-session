<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Submission</title>
</head>
<body>
    <div>
        <ul>
            @foreach($errors->all() as $e)
            <li>{{ $e }}</li>
            @endforeach
        </ul>
    </div>

    <form action="/user" method="POST">
        @csrf
        <input type="text" name="user" placeholder="name"><br><br>
        <input type="password" name="password" placeholder="password"><br><br>
        <input type="text" name="phone" placeholder="phone"><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>