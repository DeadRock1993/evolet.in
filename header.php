<!DOCTYPE html>
<html lang="ru">
<head>
    <script>
        theme_directory = "<?php echo get_template_directory_uri() ?>";
    </script>
    <?php wp_head();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="Evolet Healthcare, Эволет, фармацевтическая компания" />
    <meta name="description" content="Evolet - международный фармацевтический холдинг" />
    <script type="text/javascript"
        data-skip-moving="true">(function (w, d, n) { var cl = "bx-core"; var ht = d.documentElement; var htc = ht ? ht.className : undefined; if (htc === undefined || htc.indexOf(cl) !== -1) { return; } var ua = n.userAgent; if (/(iPad;)|(iPhone;)/i.test(ua)) { cl += " bx-ios"; } else if (/Android/i.test(ua)) { cl += " bx-android"; } cl += (/(ipad|iphone|android|mobile|touch)/i.test(ua) ? " bx-touch" : " bx-no-touch"); cl += w.devicePixelRatio && w.devicePixelRatio >= 2 ? " bx-retina" : " bx-no-retina"; var ieVersion = -1; if (/AppleWebKit/.test(ua)) { cl += " bx-chrome"; } else if ((ieVersion = getIeVersion()) > 0) { cl += " bx-ie bx-ie" + ieVersion; if (ieVersion > 7 && ieVersion < 10 && !isDoctype()) { cl += " bx-quirks"; } } else if (/Opera/.test(ua)) { cl += " bx-opera"; } else if (/Gecko/.test(ua)) { cl += " bx-firefox"; } if (/Macintosh/i.test(ua)) { cl += " bx-mac"; } ht.className = htc ? htc + " " + cl : cl; function isDoctype() { if (d.compatMode) { return d.compatMode == "CSS1Compat"; } return d.documentElement && d.documentElement.clientHeight; } function getIeVersion() { if (/Opera/i.test(ua) || /Webkit/i.test(ua) || /Firefox/i.test(ua) || /Chrome/i.test(ua)) { return -1; } var rv = -1; if (!!(w.MSStream) && !(w.ActiveXObject) && ("ActiveXObject" in w)) { rv = 11; } else if (!!d.documentMode && d.documentMode >= 10) { rv = 10; } else if (!!d.documentMode && d.documentMode >= 9) { rv = 9; } else if (d.attachEvent && !/Opera/.test(ua)) { rv = 8; } if (rv == -1 || rv == 8) { var re; if (n.appName == "Microsoft Internet Explorer") { re = new RegExp("MSIE ([0-9]+[\.0-9]*)"); if (re.exec(ua) != null) { rv = parseFloat(RegExp.$1); } } else if (n.appName == "Netscape") { rv = 11; re = new RegExp("Trident/.*rv:([0-9]+[\.0-9]*)"); if (re.exec(ua) != null) { rv = parseFloat(RegExp.$1); } } } return rv; } })(window, document, navigator);</script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" type="text/css"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo get_template_directory_uri() ?>/css/products.css" type="text/css"  rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri() ?>/css/contacts.css" type="text/css"  rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri() ?>/css/career.css" type="text/css"  rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri() ?>/css/partners.css" type="text/css"  rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri() ?>/css/activities.css" type="text/css"  rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri() ?>/css/about.css" type="text/css"  rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri() ?>/style.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri() ?>/css/all.css" type="text/css" data-template-style="true" rel="stylesheet" />
    <title>Evolet - Вера в здоровое будущее</title>
</head>
<body>
<header class="header" id="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="header__wrap">
                    <a class="logo_a" href="<?php echo home_url( '/' ); ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" class="logo">
                    </a>
                   <div class="nav_heder_wrap">

                        <nav class="nav_header">
                                <?php 
                                $menuParameters = array(
                                    'theme_location'  => 'menu',
                                    'container'       => false,
                                    'echo'            => false,
                                    'items_wrap'      => '%3$s',
                                    'depth'           => 0,
                                  );
                                  
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                                
                                ?>
                                
                        </nav>

                        <div class="contacts">
                            <a href="tel://+91-0124 4202 936" class="phone">
                                <span>+91-0124 4202 936</span>
                                <svg class="icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 401.998 401.998" style="enable-background:new 0 0 401.998 401.998;"
                                    xml:space="preserve">
                                    <g>
                                        <path
                                            d="M401.129,311.475c-1.137-3.426-8.371-8.473-21.697-15.129c-3.61-2.098-8.754-4.949-15.41-8.566
                                    c-6.662-3.617-12.709-6.95-18.13-9.996c-5.432-3.045-10.521-5.995-15.276-8.846c-0.76-0.571-3.139-2.234-7.136-5
                                    c-4.001-2.758-7.375-4.805-10.14-6.14c-2.759-1.327-5.473-1.995-8.138-1.995c-3.806,0-8.56,2.714-14.268,8.135
                                    c-5.708,5.428-10.944,11.324-15.7,17.706c-4.757,6.379-9.802,12.275-15.126,17.7c-5.332,5.427-9.713,8.138-13.135,8.138
                                    c-1.718,0-3.86-0.479-6.427-1.424c-2.566-0.951-4.518-1.766-5.858-2.423c-1.328-0.671-3.607-1.999-6.845-4.004
                                    c-3.244-1.999-5.048-3.094-5.428-3.285c-26.075-14.469-48.438-31.029-67.093-49.676c-18.649-18.658-35.211-41.019-49.676-67.097
                                    c-0.19-0.381-1.287-2.19-3.284-5.424c-2-3.237-3.333-5.518-3.999-6.854c-0.666-1.331-1.475-3.283-2.425-5.852
                                    s-1.427-4.709-1.427-6.424c0-3.424,2.713-7.804,8.138-13.134c5.424-5.327,11.326-10.373,17.7-15.128
                                    c6.379-4.755,12.275-9.991,17.701-15.699c5.424-5.711,8.136-10.467,8.136-14.273c0-2.663-0.666-5.378-1.997-8.137
                                    c-1.332-2.765-3.378-6.139-6.139-10.138c-2.762-3.997-4.427-6.374-4.999-7.139c-2.852-4.755-5.799-9.846-8.848-15.271
                                    c-3.049-5.424-6.377-11.47-9.995-18.131c-3.615-6.658-6.468-11.799-8.564-15.415C98.986,9.233,93.943,1.997,90.516,0.859
                                    C89.183,0.288,87.183,0,84.521,0c-5.142,0-11.85,0.95-20.129,2.856c-8.282,1.903-14.799,3.899-19.558,5.996
                                    c-9.517,3.995-19.604,15.605-30.264,34.826C4.863,61.566,0.01,79.271,0.01,96.78c0,5.135,0.333,10.131,0.999,14.989
                                    c0.666,4.853,1.856,10.326,3.571,16.418c1.712,6.09,3.093,10.614,4.137,13.56c1.045,2.948,2.996,8.229,5.852,15.845
                                    c2.852,7.614,4.567,12.275,5.138,13.988c6.661,18.654,14.56,35.307,23.695,49.964c15.03,24.362,35.541,49.539,61.521,75.521
                                    c25.981,25.98,51.153,46.49,75.517,61.526c14.655,9.134,31.314,17.032,49.965,23.698c1.714,0.568,6.375,2.279,13.986,5.141
                                    c7.614,2.854,12.897,4.805,15.845,5.852c2.949,1.048,7.474,2.43,13.559,4.145c6.098,1.715,11.566,2.905,16.419,3.576
                                    c4.856,0.657,9.853,0.996,14.989,0.996c17.508,0,35.214-4.856,53.105-14.562c19.219-10.656,30.826-20.745,34.823-30.269
                                    c2.102-4.754,4.093-11.273,5.996-19.555c1.909-8.278,2.857-14.985,2.857-20.126C401.99,314.814,401.703,312.819,401.129,311.475z" />
                                    </g>
                                </svg>
                            </a>
                            <div class="adres">
                                201-203 (2nd floor), Tower B, Global Business Park, Sector 26, Gurugram – 122002, India.
                            </div>
                            <a href="mailto:info@evolet.ru" class="mail">info@evolet.ru</a>
                        </div>
                    </div> 

                    <div class="socials">
                        <a target="_blank" href="https://www.facebook.com/evolet.co.uk/"
                            class="socials__link fb"></a>
                        <a target="_blank" href="https://www.linkedin.com/company/evolet-healthcare"
                            class="socials__link in"></a>
                    </div>
                    <button class="nav_btn" onclick="toggle_nav()">
                        <span class="line"></span>
                    </button>
                </div>

            </div>
        </div>
    </div>
</header>