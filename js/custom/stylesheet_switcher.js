
/* stylesheet switcher plugin */


/**** PERSONAL VERSION ***/
$(document).ready(function(){
    // Append the stylesheet on page load 
    if ($.cookie('personalStyle') === "true") {
	  $('head').append('<link rel="stylesheet" href="/wp-content/themes/attentivepress/css/personal.css" type="text/css" id="personal_stylesheet"/>'); 
	  $("#corporate_stylesheet").remove();
    }
    if ($.cookie('personalStyle') === "true") {
	  $('head').append('<link rel="stylesheet" href="/wp-content/themes/attentivepress/css/personal.css" type="text/css" id="personal_stylesheet"/>'); 
	  $("#personal_stylesheet").remove();
    }
    
    // Add the click handler to switch the personal stylesheet
    $("#personal_style_btn a").click(function () {
        if ($.cookie('personalStyle') === "true") {
        	alert( "Personal Stylesheet Cookie is TURNED ON " );
        }       
        else { //do something if the cookie personal stylesheet cookie is turned off
            alert( "Personal Stylesheet Cookie is OFF " );
			$('head').append('<link rel="stylesheet" href="/wp-content/themes/attentivepress/css/personal.css" type="text/css" id="personal_stylesheet"/>');
            $.cookie('personalStyle','true',{path:'/'}); //clicking on button turns personalStyle cookie to true
            $.cookie('corporateStyle','false',{path:'/'}); //clicking on personal button turns corporateStyle cookie to false
            alert( "Personal Stylesheet Cookie is now on " );        
        }
    });
    // Add the click handler to switch the personal stylesheet
    $("#corporate_style_btn a").click(function () {
        if ($.cookie('personalStyle') === "true") {
            alert( "Personal Stylesheet Cookie is ON, we'll now turn that off and the corporate cookie on " );

        	$('head').append('<link rel="stylesheet" href="/wp-content/themes/attentivepress/css/corporate.css" type="text/css" id="personal_stylesheet"/>');
            $.cookie('personalStyle','false',{path:'/'}); //clicking on button turns personalStyle cookie to true
            $.cookie('corporateStyle','true',{path:'/'}); //clicking on personal button turns corporateStyle cookie to false
            $("#personal_stylesheet").remove();
        }       
        else { 
            alert( "corporate Stylesheet Cookie is already ON " );
        }
    });    
});


// /*You can add options like expiration or site-wide validity to the cookie, so if you want the cookie to be valid for a year, add this to the cookie command*/
// $.cookie('personal_style', 'false', {expires: 365});
// /*If you want it to be valid across your whole domain, which may be most likely the case for your implementation, you can add path '/':*/
// $.cookie('personal_style', 'false', {path: '/'});