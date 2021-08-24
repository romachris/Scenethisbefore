/*jslint browser: true*/
/*global $ , JSON   */

//APIKEY: 88508155628429f2fa72e40e2331b0fa


$(function postIt() {

    var api_key = "88508155628429f2fa72e40e2331b0fa";
    var base_uri = "http://api.themoviedb.org/3";
    var images_uri = "http://image.tmdb.org/t/p/w342//";
    var v = "27205";


    var settings = {
        "async": true,
        "crossDomain": true,
        "url": base_uri + "/movie/" + v + "?api_key=" + api_key + "&callback=?",
        "method": "GET",
        "headers": {},
        "data": "{}"
    }
    console.log(api_key);


    $.ajax(settings).done(function (response) {
        console.log(response);
        console.log(api_key);


        for (var i = 0; i < 8; i++) {

            $('#mov' + i).html('<img id="poster" src=' + images_uri + response.results.poster_path + '>');
        }


    });


});
