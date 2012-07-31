$(document).ready(function() 
{
   slideShow();
	
   var i = 0;
   var pathname = window.location.pathname;
   var pathname = pathname.split('/');
   var pathname = pathname[pathname.length-1];

   $('.menuBox a').each(function()
   {
   		
        var test = $(this).attr('href');
        var test = test.split('/');
  		var test = test[test.length-1];

        if(test == pathname)
        {
           i = 1;
           $(this).addClass('active');
        }
 
   });
          
    if(i == 0)
    {
    	$('.menuBox a:first').addClass('active');
    }
    
    $('.menuBox a.active').click(function() { return false; });
    
    $('.realizationBox').hover(function()
    {
    	$(this).children('.pf_img_gray').animate({opacity: 0}, 300);
    	$(this).children('.pf_img_color').css("opacity", "0")
    		   .css("display", "block").animate({opacity: 1}, 300);
    }, function()
    {
     	$(this).children('.pf_img_gray').animate({opacity: 1}, 300);
    	$(this).children('.pf_img_color').animate({opacity: 0}, 300, function()
    	{
    		$(this).css("opacity", "0").css("display", "block");
    	});
    });
});

$(document).ready(function() {      
     
    //Execute the slideShow
    
 
});
 
function slideShow() 
{
    $('.realizations a').css({opacity: 0.0});
    $('.realizations a:first').css({opacity: 1}).animate({opacity: 1}, 400).addClass('show');
    setInterval('gallery()', 4000);
}
 
function gallery() 
{
    var current = ($('.realizations a.show')?  $('.realizations a.show') : $('.realizations a:first'));
    var next = ((current.next().length) ? ((current.next().hasClass('caption'))? $('.realizations a:first') :current.next()) : $('.realizations a:first'));   
  
    next.css({opacity: 0.0})
    .addClass('show')
    .animate({opacity: 1.0}, 1000);
    current.animate({opacity: 0.0}, 1000)
    .removeClass('show');
}














