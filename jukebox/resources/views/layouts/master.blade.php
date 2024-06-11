<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    @stack('styles')
</head>
<body>
    <nav>
        <ul>
            <li><a href="/genre/genre_index">genre</a></li>
            <li><a href="/song/index">song</a></li>
            <li><a href="/playlist/index">playlist</a></li>
        </ul>
    <h1>dit is de content van de master pagina</h1>
    @yield("content")
    <h1>Hello from the master page</h1>
    <footer>
        <p>Author: Joëlle van Breugel<br>
        <a href="hrever@gmail.com">My e-mailadres: hrever@gmail.com</a></p>
    </footer>
    @stack('js')
</body>
</html>