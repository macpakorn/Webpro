<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Reviews</title>
  </head>
  <body>
      <div class="container">
        <h1>{{ $post->title }}</h1>
        <iframe width="560" height="315" src="{{ $post->youtube }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <br>
        <strong><u><font size="4">รีวิว</font></u></strong>
        <p><font size="2">{{ $post->content }}</font></p>
        <a href="http://127.0.0.1:8000/"><u>Go back</u></a>

        <div id="disqus_thread"></div>

<script>

var disqus_config = function () {
this.page.url = '{{ Request::url() }}';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = {{ $post->id }}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://webpro-6.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript><a href="https://disqus.com/?ref_noscript"></a></noscript>
      </div>
  </body>
</html>
