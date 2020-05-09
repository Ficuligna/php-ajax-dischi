<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
    <script src="main.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="container">

      <div class="header">
        <select class="" name="">
          <option value="All">All</option>
        </select>
        <button type="button" name="button">Searchami</button>
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimage.flaticon.com%2Ficons%2Fpng%2F512%2F25%2F25361.png&f=1&nofb=1">
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimage.flaticon.com%2Ficons%2Fpng%2F512%2F25%2F25361.png&f=1&nofb=1">
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimage.flaticon.com%2Ficons%2Fpng%2F512%2F25%2F25361.png&f=1&nofb=1">
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimage.flaticon.com%2Ficons%2Fpng%2F512%2F25%2F25361.png&f=1&nofb=1">
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimage.flaticon.com%2Ficons%2Fpng%2F512%2F25%2F25361.png&f=1&nofb=1">
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimage.flaticon.com%2Ficons%2Fpng%2F512%2F25%2F25361.png&f=1&nofb=1">
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimage.flaticon.com%2Ficons%2Fpng%2F512%2F25%2F25361.png&f=1&nofb=1">
      </div>


    </div>

    <!-- template -->
    <script class="post_template" type="text/x-handlebars-template">
				<div class="post">
					<img src="{{cover}}">
          <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimage.flaticon.com%2Ficons%2Fpng%2F512%2F25%2F25361.png&f=1&nofb=1">
  				<div class="titolo">
  					<h3>{{title}}</h3>
  					<p>{{artist}}</p>
  					<p>{{year}}</p>
  				</div>
        </div>
		</script>

  </body>
</html>
