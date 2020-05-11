function handle(ref){
  var source = $(ref).html();
  var template = Handlebars.compile(source);
  return template;
}

function getFilteredData(){
  $("button").click(function(){
    var autore = $("select").val();
    var query = "artist=" + autore;
    $.ajax({
      url: "prova.php/",
      data: ['artist': autore],
      success: function(data){
        $(".post").remove();
        for (var variable in data) {
          console.log(data);

          var context ={
            cover: data[variable].poster,
            title: data[variable].title,
            artist: data[variable].author,
            year: data[variable].year
          }
          $(".container").append(handle('.post_template')(context));
          $("select").append('<option value="' + data[variable].author + '">'+ data[variable].author +'</option>');
        }
      }
    })
  })
};


function getData(){
  $.ajax({
    url: "api.php",
    success: function(data){
      for (var variable in data) {
        var context ={
          cover: data[variable].poster,
          title: data[variable].title,
          artist: data[variable].author,
          year: data[variable].year
        }
        $(".container").append(handle('.post_template')(context));
        $("select").append('<option value="' + data[variable].author + '">'+ data[variable].author +'</option>');
      }
    }
  })
}


function init(){
  getData();
  getFilteredData();
}

$(document).ready(init)
