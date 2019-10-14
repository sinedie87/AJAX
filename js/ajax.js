/* Récupére les données de la BDD via JSON */

$.ajax({
    method: 'GET',
    dataType: 'json',
    url: 'datas.php',
    async: false
}).done(function( response ){
    console.log(response)
        for(let content of response){
            $('.glide__slides').append("<li class='glide__slide'>"
            + "<div class='contents'>"
            + "<a href=" + content.url + ' target="_blank">' + "<img src=" + content.image + ">" + "</a>"
            + "<h2>" + content.title + "</h2>" 
            + "<p id='detail'>" + content.description + "</p>"
            + "<h4>" + "Technologies utilisées :" + "<h4>"
            + "<p id='techno'>" + content.technologies + "</p></div>"
            + "</li></ul></div></div>")
    }

})



