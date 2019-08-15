    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="footer__wrap">
                        <div class="footer__about">
                            <a href="javascript:;">
                                <img class="logo" src="<?php echo get_template_directory_uri() ?>/img/logo_mini.svg">
                            </a>

                            <div class="contacts">
                                <div class="name">Evolet</div>
                                <div class="adres">
                                201-203 (2nd floor),
                                Tower B, Global Business Park,
                                Sector 26, Gurugram – 122002, India. </div>
                                <a href="mailto:info@evolet.ru" class="mail">info@evolet.ru</a>
                                <a class="p-conf" target="_blank" href="<?php echo home_url( '/' ); ?>/policy">Политика обработки
                                    персональных данных</a>
                            </div>
                        </div>
                        <div class="footer__nav">

                            <nav class="nav_footer">
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

                            <div class="links">
                                <div class="socials">
                                    <a target="_blank" href="https://www.facebook.com/evolet.co.uk"
                                        class="socials__link fb"></a>
                                    <a target="_blank" href="https://www.linkedin.com/company/evolet-healthcare"
                                        class="socials__link in"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="mark_title" id="mark_title">
        <div class="background"></div>
        <div id="mark_title_name" class="mark_title__name">Город</div>
    </div>
    
    <?php wp_footer();?>
    <script
        type="text/javascript">var _ba = _ba || []; _ba.push(["aid", "1560f0cab2f34a027d61b07434373ea1"]); _ba.push(["host", "evolet.ru"]); (function () { var ba = document.createElement("script"); ba.type = "text/javascript"; ba.async = true; ba.src = (document.location.protocol == "https:" ? "https://" : "http://") + "bitrix.info/ba.js"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ba, s); })();
    </script>
    <script>
        let intMap = new interactiveMap(JSON.parse('[{"x":"256.6","y":"216.08677842259493","desc":"","country":null},{"x":"256.6","y":"76.8","desc":"Evolet - \u0422\u0430\u0434\u0436\u0438\u043a\u0438\u0441\u0442\u0430\u043d","country":null},{"x":"316.","y":"113.5","desc":"\u0424\u0438\u043b\u0438\u043f\u043f\u0438\u043d\u044b","country":"PH"},{"x":"293.5","y":"101.3","desc":"\u0412\u044c\u0435\u0442\u043d\u0430\u043c","country":"VN"},{"x":"291.5","y":"105.5","desc":"\u041c\u044c\u044f\u043d\u043c\u0430","country":"MM"},{"x":"297.6","y":"109.3","desc":"\u041a\u0430\u043c\u0431\u043e\u0434\u0436\u0430","country":"KH"},{"x":"266.7","y":"96.9","desc":"\u0418\u043d\u0434\u0438\u044f","country":"IN"},{"x":"295.5","y":"64.6","desc":"\u041c\u043e\u043d\u0433\u043e\u043b\u0438\u044f","country":"MN"},{"x":"225.7","y":"81","desc":"\u0413\u0440\u0443\u0437\u0438\u044f","country":"GE"},{"x":"230","y":"73","desc":"\u0410\u0437\u0435\u0440\u0431\u0430\u0439\u0434\u0436\u0430\u043d","country":"AZ"},{"x":"260.7","y":"76.8","desc":"\u041a\u044b\u0440\u0433\u044b\u0437\u0441\u0442\u0430\u043d","country":"KG"},{"x":"653.59375","y":"216.08677842259493","desc":"\u0422\u0430\u0434\u0436\u0438\u043a\u0438\u0441\u0442\u0430\u043d","country":"TJ"},{"x":"254.5","y":"81","desc":"\u0410\u0444\u0433\u0430\u043d\u0438\u0441\u0442\u0430\u043d","country":"AF"},{"x":"244.3","y":"77","desc":"\u0422\u0443\u0440\u043a\u043c\u0435\u043d\u0438\u0441\u0442\u0430\u043d","country":"TM"},{"x":"256.7","y":"76.5","desc":"\u0423\u0437\u0431\u0435\u043a\u0438\u0441\u0442\u0430\u043d","country":"UZ"},{"x":"201.3","y":"56.4","desc":"\u041c\u043e\u0441\u043a\u0432\u0430","country":"RU"},{"x":"265","y":"76.5","desc":"\u041a\u0430\u0437\u0430\u0445\u0441\u0442\u0430\u043d","country":"KZ"}]'), document.getElementById('map_svg'));
    </script>
</body>
</html>