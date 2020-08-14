<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>SavingTakeouts</title>
    <!-- Description, Keywords and Author -->
    <meta name="description"
        content="A non-profit organization that connects freelance specialists to small businesses to provide free marketing and technological services.">
    <meta name="keywords"
        content="non profit, small businesses, Pandemic assistance, free services, Volunteer, Internship, SavingTakeouts, Saving, Takeouts, Business Consultation, Marketing, Advertising, Graphic Design, Web Design, Website, Branding, Social Media">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); //includes scripts and stylesheets ?> 
</head>
    <body <?php body_class(); //displays class names for the body ?>>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-xl navbar-light fixed-top">
    <!-- Brand -->
    <a class="navbar-brand" href="<?php echo get_site_url(); ?>/#home">
        <svg class="w-25" id="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 743 743.3">
            <defs>
                <style>
                    .cls-1 {
                        fill: none;
                        stroke-width: 20px;
                    }

                    .cls-1,
                    .cls-2 {
                        stroke: #000;
                        stroke-miterlimit: 10;
                    }
                </style>
            </defs>
            <g id="Layer_2" data-name="Layer 2">
                <g id="Layer_1-2" data-name="Layer 1">
                    <rect class="cls-1" x="10" y="10.3" width="723" height="723" rx="74.88" />
                    <path class="cls-2 path" fill="none" stroke-width="10"
                        d="M485.93,386.88q7.57,7.94,7.57,21.36a37.43,37.43,0,0,1-12.69,28.81Q468.48,448,451,448q-29.91,0-42.36-29.18L432.1,408q4.88,8.55,7.45,10.86a16.94,16.94,0,0,0,12,4.64q13.92,0,13.92-12.69,0-7.33-10.75-13.68-4.14-2.07-8.3-4t-8.42-4q-12-5.86-16.85-11.72-6.23-7.44-6.22-19.17,0-15.49,10.62-25.63a37.27,37.27,0,0,1,26.37-10.13q22.81,0,33.93,23.56l-22.7,12.08q-5.39-11-13.31-11a9.15,9.15,0,0,0-6.47,2.5,8.36,8.36,0,0,0-2.68,6.41q0,6.84,15.86,13.55Q478.37,378.94,485.93,386.88Zm83.83-104.74H542.29v43.58H530.57v25.64h11.72v93.26h27.47V351.36h21.36V325.72H569.76Zm88.11,137A17,17,0,0,0,628.94,431a16.71,16.71,0,0,0,17,17.09,16.24,16.24,0,0,0,12-4.89,16.92,16.92,0,0,0,0-24Z" />
                    <polyline class="cls-1" points="296.8 231.57 296.8 235.54 296.8 505.84 296.8 507.46" />
                    <polyline class="cls-1" points="541.84 7.57 538.91 10.3 360.12 176.63 296.8 235.54 293.67 238.45" />
                    <polyline class="cls-1"
                        points="294.99 504.16 296.8 505.84 360.06 564.69 541.3 733.3 543.19 735.06" />
                    <polyline class="cls-1" points="178.13 7.32 181.33 10.3 360.12 176.63 360.92 177.38" />
                    <polyline class="cls-1" points="360.06 564.69 178.81 733.3 176.92 735.06" />
                </g>
            </g>
        </svg>
    </a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo get_site_url(); ?>/#mission">Our Mission</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo get_site_url(); ?>/#how-does-it-work">How does it work?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo get_site_url(); ?>/#services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo get_site_url(); ?>/#fb-feed">Latest Updates</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo get_site_url(); ?>/our-team">Our Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo get_site_url(); ?>/open-applications">Opportunities</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="<?php #echo get_site_url(); ?>/blog">Blog</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo get_site_url(); ?>/contact-us">Contact Us</a>
            </li>
        </ul>
    </div>
</nav>