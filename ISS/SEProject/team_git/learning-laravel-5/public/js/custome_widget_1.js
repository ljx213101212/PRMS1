/**
 * Created by jixiang on 25/8/15.
 */
$(document).ready(function(){
    var submitIcon = $('.searchbox-submit');
    var inputBox = $('.searchbox-input');
    var searchBox = $('.searchbox');
    var searchIcon = $('.searchbox-icon');

    var isOpen = false;
    submitIcon.css('display','none');

    searchIcon.click(function(){
        if(isOpen == false){
            searchBox.addClass('searchbox-open');
            searchIcon.css('display','none');
            submitIcon.css('display','block');
            inputBox.focus();
            isOpen = true;
        } else {
            searchBox.removeClass('searchbox-open');
            searchIcon.css('display','block');
            submitIcon.css('display','none');
            inputBox.focusout();
            isOpen = false;
        }
    });
    searchIcon.mouseup(function(){
        return false;
    });
    searchBox.mouseup(function(){
        return false;
    });

    $(document).mouseup(function(){
        if(isOpen == true){
            //searchIcon.css('display','block');
            searchIcon.click();
        }

        //var isExpaned = $('#bs-example-navbar-collapse-1').className;
        //if (isExpaned === 'navbar-collapse collapse in'){
        //    isExpaned.className='navbar-collapse collapse';
        //}
        $(".navbar-collapse").collapse('hide');
    });

    //var title = $(this).attr('title').toLowerCase();
    //alert(title);
    //var lastTab = $.cookie('lastTab');
    var lastTab = getCookie('lastTab');
    //alert(lastTab);
    if (lastTab) {
        $('.main-main-presentation-div ul li:has(a[href="' + lastTab + '"])').addClass("active");
    }
});
function buttonUp(){
    var inputVal = $('.searchbox-input').val();
    inputVal = $.trim(inputVal).length;
    if( inputVal !== 0){
        $('.searchbox-icon').css('display','none');
    } else {
        $('.searchbox-input').val('');
        //$('.searchbox-icon').css('display','block');
    }
}

$('.main-main-presentation-div ul li').click(function (e) {

    $(this).siblings().removeClass("active");
    $(this).addClass("active");
    var href = $(this).children('a').attr('href');

    //alert(href);
    //localStorage.setItem('lastTab', href);
    document.cookie = "lastTab="+href;
    //$.cookie('lastTab', href, {expires: 7});
    //alert(document.cookie);
    if(e.target.nodeName == 'A') return;

});



function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}


////



