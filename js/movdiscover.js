/*jslint browser: true*/
/*global $ , JSON   */

//APIKEY: 88508155628429f2fa72e40e2331b0fa


$(function () {

    var api_key = "88508155628429f2fa72e40e2331b0fa";
    var base_uri = "http://api.themoviedb.org/3";
    var images_uri = "http://image.tmdb.org/t/p/w342//";
    //var sort_by = "vote_average.desc";
    //var sort_by = "revenue.desc";




    var settings = {
        "async": true,
        "crossDomain": true,
        "url": base_uri + "/discover/movie?api_key=" + api_key + "&release_date.gte=2019&include_adult=false&include_video=false&language=en-US&page=1",
        "method": "GET",
        "headers": {},
        "data": "{}"
    }

    $.ajax(settings).done(function (response) {
        //console.log(response);
        for (var i = 0; i < 8; i++) {
            $('#poster' + i).html('<img id="poster" src=' + images_uri + response.results[i].poster_path + '>');
            $('#title' + i).html(response.results[i].title);
            $('#par' + i).html(response.results[i].overview);
            var name= response.results[i].title;
            name= name.replace(/\s/g, '');
           $('#movtitleNoSpaces' + i).html(name);
            $('#title' + i).html(response.results[i].title);
            $('#mid' + i).html(response.results[i].id);
          




        }
    });

});
