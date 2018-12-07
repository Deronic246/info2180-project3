$(document).ready(function(){
    $('.body').load('dashboard.php');
    $('ul#options li a').click(function(){
        var page=$(this).attr('href');
        
        if(page=="dashboard.php"){
            $('.body').load(page);
        }
        else if (page=="nu.php"){
           $('.body').load(page); 
        }
        else if (page=="newjob.php"){
           $('.body').load(page); 
        }
        else if (page=="logout.php"){
           $(location).attr('href', "logout.php") 
        }
        return false;
    });
    
});