<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scaled=1.0, minimun-scale=1.0">
    <title>Mon mini-blog</title>
</head>
<body>

<h1>Nos articles</h1>
<ul>
    @foreach($articles as $article)
        <li><a href="{{$article['id']}}">{{$article['title'] }}</a></li>
    @endforeach
</ul>
</body>
</html>
