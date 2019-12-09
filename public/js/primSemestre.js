$(document).on('click', '.materia-button', function(){
    divColum = $(this).parent().parent().parent().attr('id');
    divColum = '#'+divColum;
    $(divColum).remove();
});

$(document).on('click', '.materia-grupo-button', function(){
    divColum = $(this).parent().parent().parent().attr('id');
    divColum = '#'+divColum;
    $(divColum).remove();
});
