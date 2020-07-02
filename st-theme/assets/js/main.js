jQuery(document).ready(function () {
    // on switch toggle
    document.getElementById("page-toggle").addEventListener("click", function () {
        if (document.getElementById("page-toggle").checked) {
            window.location.href = String(window.location.origin) + "#for-volunteers";
            if (window.location.hash == "#for-volunteers") {
                // TURN ON switch animation after page loads
                jQuery('.switch').toggleClass("toggle-switch-animation");
                document.getElementById("page-toggle").checked = true;

                // toggle relevant text 
                jQuery('#for-volunteers-section').css("display", "block");
                jQuery('#for-businesses').css("display", "none");

                // toggle relevant color
                jQuery('body').css("background", "rgb(81, 109, 235)");
                jQuery('body').css("color", "white");
                jQuery('p').css("color", "rgb(250, 250, 250)");
                jQuery(":header").css("color", "rgb(250, 250, 250)");
                jQuery('#toggle-businesses').css("color", "rgb(62, 62, 62)");
                jQuery('#toggle-volunteers').css("color", "#f6c253");
            }
        } else {
            window.location.href = String(window.location.origin) + "#for-businesses";
            if (window.location.hash == "#for-businesses") {
                // TURN ON switch animation after page loads
                jQuery('.switch').toggleClass("toggle-switch-animation");
                document.getElementById("page-toggle").checked = false;

                // toggle relevant text 
                jQuery('#for-volunteers-section').css("display", "none");
                jQuery('#for-businesses').css("display", "block");

                // toggle relevant colors 
                jQuery('body').css("background", "white");
                jQuery('body').css("color", "rgb(31, 31, 31)");
                jQuery('p').css("color", "rgb(62, 62, 62)");
                jQuery(":header").css("color", "rgb(62, 62, 62)");
                jQuery('#toggle-businesses').css("color", "#f6c253");
                jQuery('#toggle-volunteers').css("color", "rgb(62, 62, 62)");
            }
        }
    });

    // on volunteer page load
    if (window.location.hash == "#for-volunteers") {
        // TURN ON switch animation after page loads
        jQuery('.switch').toggleClass("toggle-switch-animation");
        document.getElementById("page-toggle").checked = true;

        // toggle relevant text 
        jQuery('#for-volunteers-section').css("display", "block");
        jQuery('#for-businesses').css("display", "none");

        // toggle relevant color
        jQuery('body').css("background", "rgb(81, 109, 235)");
        jQuery('body').css("color", "white");
        jQuery('p').css("color", "rgb(250, 250, 250)");
        jQuery(":header").css("color", "rgb(250, 250, 250)");
        jQuery('#toggle-businesses').css("color", "rgb(62, 62, 62)");
        jQuery('#toggle-volunteers').css("color", "#f6c253");
    }

    jQuery('.navbar-nav>li>a').not(".dropdown-toggle").on('click', function () {
        jQuery('.navbar-collapse').collapse('hide');
    });
});