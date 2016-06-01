
$(function(){
    $("#menu-toggle").click(function(){
        $("#navbar").toggleClass('active');
    });


    $("[class^=paper-form__]").on("focus", function(){
        $(this).prev("label").addClass("active");
    }).on("blur", function(){
        if($(this).val().length === 0){
            $(this).prev("label").removeClass("active");
        }
    });
    
    // prevent iphone to open safari when a link is clicked.
    $('a').on('click', function(e){
        //e.preventDefault();
        window.location = $(this).attr("href");
        return false;
    });
});
