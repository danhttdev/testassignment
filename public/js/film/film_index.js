$( document ).ready(function() {
    url = 'api/films';
    $.ajax({
        url: url,
        success: function (data) {
            let html = '';
            data.map(item => {
                html += '<div class="row">'+
                    '<div class="item-film clearfix">'+
                        '<div class="left">'+
                            '<img src="upload/img/'+item.photo+'" alt="">'+
                        '</div>'+
                        '<div class="right">'+
                            '<h3>'+item.name+'</h3>'+
                            '<p><b>Description: </b>'+item.description+'</p>'+
                            '<p><b>Realease date: </b>'+item.realease_date+'</p>'+
                            '<p><b>Rating: </b>'+item.rating+'</p>'+
                            '<p><b>Ticket: </b>'+item.ticket_price+'</p>'+
                            '<p><b>Country: </b>'+item.country+'</p>'+
                            '<p><b>Genre: </b>'+item.genre+'</p>'+
                            '<a href="films/'+item.slug+'"><button type="button" class="btn btn-default">View</button></a>'+
                        '</div>'+
                    '</div>'+
                '</div>';
            });
            $('#film-index').html(html);
        }
    });
});