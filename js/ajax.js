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
            + "<div class='contents'><h2>"
            + content.title + "</h2>" 
            + "<img src=" + content.image + ">"
            + "<a href=" + content.url + ' target="_blank">' + "Lien" +"</a>"
            + "<p class='description'>" + content.description + "</p>"
            + "<p>" + content.technologies + "</p></div>"
            + "</li></ul></div></div>")
    }

})



