
/* stylesheet switcher plugin, to only be used in conjunction with php in header */


/**** PERSONAL VERSION ***/
$(document).ready(function(){
    // Add the click handler to assign the the personal stylesheet
    $("#personal_style_btn a, a#personal_style_btn").click(function () {
        if ($.cookie('style') === "personal") {
            /// DOESN'T DO ANYTHING, CUZ IT'S ALREADY LOADED
        }       
        else { //do something if the cookie personal stylesheet cookie is turned off
            $.cookie('style','personal',{path:'/'}); //clicking on button sets the value to 'personal' of the cookie "style"
        }
    });
    // Add the click handler to switch the personal stylesheet
    $("#corporate_style_btn a, a#corporate_style_btn").click(function () {
        if ($.cookie('style') === "corporate") {
            /// DOESN'T DO ANYTHING, CUZ IT'S ALREADY LOADED            
        }       
        else { 
            $.cookie('style','corporate',{path:'/'}); //clicking on button sets the value to 'corporate' of the cookie "style"
        }
    });    
});


// /*You can add options like expiration or site-wide validity to the cookie, so if you want the cookie to be valid for a year, add this to the cookie command*/
// $.cookie('style', 'false', {expires: 365});
// /*If you want it to be valid across your whole domain, which may be most likely the case for your implementation, you can add path '/':*/
// $.cookie('style', 'false', {path: '/'});