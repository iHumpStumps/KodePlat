var  mn = $(".navbar.navbar-default");
var  mns = "navbar-fixed-top";
var  hdr = $('#header').height();

$(window).scroll(function() {
    if( $(this).scrollTop() > (hdr+200) ) {
        mn.addClass(mns);
    } else {
        mn.removeClass(mns);
    }
});

/*Tab Highlighter Functionality*/
$(document).on('click', 'ul.navbar-body li a', function(){
    var $this = $(this);
    TabHighlighter.set($this);
    $this.closest('li').siblings('.active').removeClass('active');
    $this.closest('li').addClass('active');
});
var TabHighlighter = {
    set: function($this){
        $('.tab-highlighter').css({
            'left':  $this.closest('li').offset().left,
            'width': $this.closest('li').outerWidth()
        });
    },
    refresh: function(){
        var $this = $('.tabs ul.navbar-body li.active a');
        $('.tab-highlighter').css({
            'left':  $this.closest('li').offset().left,
            'width': $this.closest('li').outerWidth()
        });
    }
};
$(window).resize(function(){
    TabHighlighter.refresh();
});
$(document).ready(function(){
    TabHighlighter.refresh();
});
