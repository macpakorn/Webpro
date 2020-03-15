<!doctype html>
<html lang="en" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Main</title>
<link rel="canonical" href="https://manganelo.com/genre-all" />
<link rel="stylesheet" href="https://manganelo.com/themes/hm/css/c-style.css?v=1.1.2" />
<link rel="stylesheet" href="https://manganelo.com/themes/hm/css/owl.theme.css" />
<link rel="stylesheet" href="https://manganelo.com/themes/hm/css/owl.carousel.css" />
<link rel="stylesheet" href="https://manganelo.com/themes/hm/css/tooltip.css?v=1.1.2" />
<link rel="stylesheet" href="https://manganelo.com/themes/hm/css/c-style-search.css?v=1.1.2" />
<link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700,700italic&subset=latin,vietnamese' rel='stylesheet' />
<script type="text/javascript" src="https://manganelo.com/themes/hm/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="https://manganelo.com/themes/hm/js/owl.carousel.js"></script>
<script type="text/javascript" src="https://manganelo.com/themes/hm/js/cookie.js"></script>
<link rel="stylesheet" href="https://manganelo.com/themes/starrate/css/style.css" />
<script type="text/javascript" src="https://manganelo.com/themes/starrate/js/starwarsjs.js"></script>
<script>
    baseurljs = 'https://manganelo.com/';
        tooltypejs = '';
</script>

<link rel="stylesheet" href="https://manganelo.com/themes/hm/css/c-style-genres.css">
</head>
<body>

<div class="panel-breadcrumb">Reviews</div>
<div class="panel-content-genres">

@foreach($users as $user)

<div class="content-genres-item">
<a rel="nofollow" class="genres-item-img" href="http://127.0.0.1:8000/posts/{{ $user->id}}" title="Playerunknown's battlegrounds">
<img class="img-loading" src="/images/{{ $user->img }}" alt="Image" />
<em class="genres-item-rate">{{ $user->score}}</em> </a>
<div class="genres-item-info">
<h3><a class="genres-item-name text-nowrap a-h" href="http://127.0.0.1:8000/posts/{{ $user->id}}" title="">{{ $user->title}}</a></h3>
<h3>Genres:{{ $user->type }}</h3>
<div class="genres-item-description">
{{ $user->content }}<i class="genres-item-description-linear"></i>
</div>
<a rel="nofollow" class="genres-item-readmore" href="http://127.0.0.1:8000/posts/{{ $user->id}}">Read more</a>
</div>
</div>
@endforeach
</div>
<div class="container-header-top">
    <div class="box-user-options">
<a id='create' class="user-register" href="http://127.0.0.1:8000/upload">Create</a>
</div>
</div>

<script type="text/javascript" src="https://manganelo.com/themes/hm/js/changes-mode-genres.js?v=1.1.1"></script>
</body>
</html>
