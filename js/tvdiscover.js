/*jslint browser: true*/
/*global $ , JSON   */

//APIKEY: 88508155628429f2fa72e40e2331b0fa



$(function () {

    var api_key = "88508155628429f2fa72e40e2331b0fa";
    var base_uri = "http://api.themoviedb.org/3";
    var images_uri = "http://image.tmdb.org/t/p/w342//";
    //var sort_by = "vote_average.desc";


    var settings = {
        "async": true,
        "crossDomain": true,
        "url": base_uri + "/discover/tv?primary_release_year=2019&page=1&include_video=false&include_adult=false&sort_by=popularity.desc&language=en-US&api_key=" + api_key,
        "method": "GET",
        "headers": {},
        "data": "{}"
    }

    $.ajax(settings).done(function (response) {
        //console.log(response);
        for (var i = 0; i < 8; i++) {
            $('#tvposter' + i).html('<img id="poster" src=' + images_uri + response.results[i].poster_path + '>');
            $('#tvtitle' + i).html(response.results[i].name);
            $('#tvpar' + i).html(response.results[i].overview);
            var name= response.results[i].name;
            name= name.replace(/\s/g, '');
            $('#tvtitleNoSpaces' + i).html(name);
            $('#ttitle' + i).html(response.results[i].name);
            $('#tvid' + i).html(response.results[i].id);
        }
    });
});
