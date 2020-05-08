function handle(ref){
  var source = $(ref).html();
  var template = Handlebars.compile(source);
  return template;
}

function getData(){
  $.ajax({
    url: "api.php",
    success: function(data){
      console.log(data)
      for (var variable in data) {
        var context ={
          cover: data[variable].poster,
          title: data[variable].title,
          artist: data[variable].author,
          year: data[variable].year
        }
        console.log(data[variable].poster);
        $(".container").append(handle('.post_template')(context));
      }
    }
  })
}

function init(){
  getData();
}
$(document).ready(init)
