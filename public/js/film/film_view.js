$( document ).ready(function() {
    url = 'api/films';
    $.ajax({
        url: '/api'+window.location.pathname,
        success: function (data) {
            console.log(data);
            let html = 
                '<div class="item-film-detail clearfix">'+
                    '<div class="left">'+
                    '<img src="'+window.location.origin+'/upload/img/'+data.photo+'" alt="">'+
                    '</div>'+
                    '<div class="right">'+
                        '<h3>'+data.name+'</h3>'+
                        '<p><b>Description: </b>'+data.description+'</p>'+
                        '<p><b>Realease date: </b>'+data.realease_date+'</p>'+
                        '<p><b>Rating: </b>'+data.rating+'</p>'+
                        '<p><b>Ticket: </b>'+data.ticket_price+'</p>'+
                        '<p><b>Country: </b>'+data.country+'</p>'+
                        '<p><b>Genre: </b>'+data.genre+'</p>'+
                    '</div>'+
                '</div>';
            let comments = '';
            data.comments.map(item => {
                comments +=
                    '<div class="row">'+
                        '<div class="item-comment">'+
                            '<b>'+item.name+'</b>'+
                            '<p>'+item.comment+'</p>'+
                        '</div>'+
                    '</div>';
            })
            $('#film-view').html(html);
            $('#film-comment').html(comments);

        }
    });

    $('#button-post-comment').click(function(){
        url = '/api/comment/create';
        let data = {user_id:1,film_id:3,comment:'abcd'};
        $.ajax({
            url: url,
            data:data,
            method: 'POST',
            success: function (data) {
            }
        });
    });
});