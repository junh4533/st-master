jQuery(document).ready(function () {


    // on switch toggle
    document.getElementById("page-toggle").addEventListener("click", function () {
        // toggle section for businesses and interns 
        jQuery('#for-volunteers-section').toggleClass("d-block");
        jQuery('#for-businesses').toggleClass("d-none");

        // toggle section colors
        jQuery('body').toggleClass("cornflower-bg");
        jQuery('body').toggleClass("white-text");
        jQuery('p').toggleClass("off-white-text");
        jQuery(":header").toggleClass("off-white-text");
        jQuery('#toggle-businesses').toggleClass("gray-text");
        jQuery('#toggle-volunteers').toggleClass("pastel-yellow-text");
        
        // toggle color for fb feed 
        jQuery('.blog_style_objects_conteiner_1_0').find('*').toggleClass("transparent-bg");
        jQuery('.blog_style_objects_conteiner_1_0').find('a').toggleClass("pastel-yellow-text");
        jQuery('.blog_style_objects_conteiner_1_0').find('i').toggleClass("pastel-yellow-text");
        jQuery('.paging-input_0').toggleClass("white-text");
        
        if (document.getElementById("page-toggle").checked) {
            window.location.href = String(window.location.origin) + "#for-volunteers";
            if (window.location.hash == "#for-volunteers") {
                document.getElementById("page-toggle").checked = true;
                jQuery('#apply-now').attr("href", document.location.host + "/open-applications/");
            }
        } else {
            window.location.href = String(window.location.origin) + "#for-businesses";
            if (window.location.hash == "#for-businesses") {
                document.getElementById("page-toggle").checked = false;
            }
        }
    });

    jQuery('.navbar-nav>li>a').not(".dropdown-toggle").on('click', function () {
        jQuery('.navbar-collapse').collapse('hide');
    });
});