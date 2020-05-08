<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>

    <script src="main.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="container">

    </div>

    <!-- template -->
    <script class="post_template" type="text/x-handlebars-template">
				<div class="post">
					<img src="{{cover}}" />
				</div>
				<div class="titolo">
					<h3>{{title}}</h3>
					<p>{{artist}}</p>
					<p>{{year}}</p>
				</div>
		</script>

  </body>
</html>
