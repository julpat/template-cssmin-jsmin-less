$(function(){
    $('.boxes').each(function(){
        var $root = $(this);
        var iNewHeight = 0;
        $('> div', $root).each(function(){
            if($(this).height() > iNewHeight){
                iNewHeight = $(this).height();
            }
        });
        $('> .item', $root).height(iNewHeight).addClass('sameHeight');
    });
});
