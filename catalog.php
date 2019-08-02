<?php /*Template Name: Catalog*/?>
<?php get_header();?>	

<div class="products_description gray">
    <div class="container">
        <ol class="breadcrumb wow fadeIn"><li><a href="<?php echo home_url( '/' ); ?>">Главная</a></li><li class="active">Продукты</li></ol>        <div class="row">
            <div class="col-sm-6">
                <section class="section">
                    <h1 class="section__header">Продукты брендов Spey, Belinda и Vegapharm</h1>
                    <p class="section__text">
                        В 2011 году компания Evolet объединила в себе практически полный цикл услуг в области фарминдустрии - от разработки препаратов до розничных продаж. Централизованное управление этим процессом позволило значительно сократить издержки (за счет сокращения нескольких звеньев) и заметно улучшить соотношение цены и качества поставляемых препаратов.
                    </p>                
                </section>
            </div>
            <div class="col-sm-6">
                <div class="big_text">
	 Всего каталог продукции <b>Evolet</b> насчитывает более 1&nbsp;200 позиций
</div>
<br>            </div>
        </div>
    </div>
</div>

<section class="products">
    <div class="container">

        
            <div class="row">
            <div class="col-md-6">
                <section class="section">
                    <div>
                        <div class="search">
                            <div class="select" id="select">
                                <div class="select__selected">
                                    <div class="description">Выберите тип продукции</div>
                                    <div class="value" id="value">Все</div>
                                    <div class="icon"></div>
                                </div>

                                <input id="catalog_filter_url" name="url" type="hidden" value="/catalog/" />

                                <div class="select__list">

                                    
                                        <div class="select__item" onclick="oCatalogFilter.setUrl('/catalog/')" data-name="Все">
                                            <label class="label" for="country_1">Все</label>
                                        </div>

                                    
                                        <div class="select__item" onclick="oCatalogFilter.setUrl('/catalog/vitaminy-i-mineraly/')" data-name="Витамины и минералы">
                                            <label class="label" for="country_1">Витамины и минералы</label>
                                        </div>

                                    
                                        <div class="select__item" onclick="oCatalogFilter.setUrl('/catalog/urologicheskie-preparaty/')" data-name="Урологические препараты">
                                            <label class="label" for="country_1">Урологические препараты</label>
                                        </div>

                                    
                                        <div class="select__item" onclick="oCatalogFilter.setUrl('/catalog/antianemicheskie-preparaty/')" data-name="Антианемические препараты">
                                            <label class="label" for="country_1">Антианемические препараты</label>
                                        </div>

                                    
                                        <div class="select__item" onclick="oCatalogFilter.setUrl('/catalog/antigistaminnye-preparaty/')" data-name="Антигистаминные препараты">
                                            <label class="label" for="country_1">Антигистаминные препараты</label>
                                        </div>

                                    
                                        <div class="select__item" onclick="oCatalogFilter.setUrl('/catalog/antimikrobnye-preparaty/')" data-name="Антимикробные препараты">
                                            <label class="label" for="country_1">Антимикробные препараты</label>
                                        </div>

                                    
                                        <div class="select__item" onclick="oCatalogFilter.setUrl('/catalog/ginekologicheskie-preparaty/')" data-name="Гинекологические препараты">
                                            <label class="label" for="country_1">Гинекологические препараты</label>
                                        </div>

                                    
                                        <div class="select__item" onclick="oCatalogFilter.setUrl('/catalog/dermatologicheskie-preparaty/')" data-name="Дерматологические препараты">
                                            <label class="label" for="country_1">Дерматологические препараты</label>
                                        </div>

                                    
                                        <div class="select__item" onclick="oCatalogFilter.setUrl('/catalog/neyrotropnye-preparaty/')" data-name="Нейротропные препараты">
                                            <label class="label" for="country_1">Нейротропные препараты</label>
                                        </div>

                                    
                                        <div class="select__item" onclick="oCatalogFilter.setUrl('/catalog/npvp/')" data-name="НПВП">
                                            <label class="label" for="country_1">НПВП</label>
                                        </div>

                                    
                                        <div class="select__item" onclick="oCatalogFilter.setUrl('/catalog/pishchevaritelnyy-trakt-i-obmen-veshchestv/')" data-name="Пищеварительный тракт и обмен веществ">
                                            <label class="label" for="country_1">Пищеварительный тракт и обмен веществ</label>
                                        </div>

                                    
                                        <div class="select__item" onclick="oCatalogFilter.setUrl('/catalog/protivogribkovye-preparaty/')" data-name="Противогрибковые препараты">
                                            <label class="label" for="country_1">Противогрибковые препараты</label>
                                        </div>

                                    
                                        <div class="select__item" onclick="oCatalogFilter.setUrl('/catalog/serdechno-sosudistye-preparaty/')" data-name="Сердечно-сосудистые препараты">
                                            <label class="label" for="country_1">Сердечно-сосудистые препараты</label>
                                        </div>

                                    
                                </div>

                            </div>
                            <button class="btn_green_fill" onclick="oCatalogFilter.loadList()">Найти</button>
                        </div>
                    </div>
                                                                
                </section>
            </div>
        </div>

        
        <div class="row">
            <div id="ajax_container" class="col-sm-12">

                
                
                    <div class="products_slider">

    
        
        <div id="bx_3218110189_93" class="product_slider__wrap">
            <a href="pishchevaritelnyy-trakt-i-obmen-veshchestv/laktospey-kids/index.html" class="products_slider__item">

                <div class="label"
                     style="background-color:#F0FFF0;color:#8FBC8F;"                >
                    Пищеварительный тракт и обмен веществ                </div>

                <img src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/resize_cache/iblock/608/258_270_1/608359728c2c7352ea1ea73692336f01.png?153373410844576" alt="Лактоспей Кидс" class="image">
                <h4 class="card_header">Лактоспей Кидс</h4>
                <p class="card_description">
                    Способствует восстановлению нормальной кишечной микрофлоры при дисбактериозах                </p>
                <div class="card_bottom">
                    <img class="logo" src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/iblock/d09/d0924ed9080f4e28e05d25c8d42af1d8.png?153373771879596" alt="SPEY" class="logotype">
                </div>
            </a>
        </div>

    
        
        <div id="bx_3218110189_94" class="product_slider__wrap">
            <a href="ginekologicheskie-preparaty/lilayz-roza-vaginalnye-suppozitorii-5-mg-10/index.html" class="products_slider__item">

                <div class="label"
                     style="background-color:#FFF0F5;color:#4B0082;"                >
                    Гинекологические препараты                </div>

                <img src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/resize_cache/iblock/a2f/258_270_1/a2f3073bd77a369ed847d9fa0da5a420.png?153373411142417" alt="Лилайз Роза вагинальные суппозитории, 5 мг, №10" class="image">
                <h4 class="card_header">Лилайз Роза вагинальные суппозитории, 5 мг, №10</h4>
                <p class="card_description">
                    Лилайз Роза — cпособствует быстрой регенерации и реформированию слизистой оболочки влагалища.                </p>
                <div class="card_bottom">
                    <img class="logo" src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/iblock/d09/d0924ed9080f4e28e05d25c8d42af1d8.png?153373771879596" alt="SPEY" class="logotype">
                </div>
            </a>
        </div>

    
        
        <div id="bx_3218110189_80" class="product_slider__wrap">
            <a href="vitaminy-i-mineraly/lindavit-pregna/index.html" class="products_slider__item">

                <div class="label"
                     style="background-color:#def7c4;color:#417505;"                >
                    Витамины и минералы                </div>

                <img src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/resize_cache/iblock/bca/258_270_1/bca93e24d7884d37a41c6c1c14ece1db.png?153373409576217" alt="Линдавит прегна" class="image">
                <h4 class="card_header">Линдавит прегна</h4>
                <p class="card_description">
                    Биологическая активная добавка к пище разработанная специально для беременных и кормящих женщин                </p>
                <div class="card_bottom">
                    <img class="logo" src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/iblock/4d1/4d1f7e024846fe6263749242e9f7b752.png?153373529979524" alt="Belinda" class="logotype">
                </div>
            </a>
        </div>

    
        
        <div id="bx_3218110189_89" class="product_slider__wrap">
            <a href="serdechno-sosudistye-preparaty/diosperedin-tabletki-450-mg-50-mg-30/index.html" class="products_slider__item">

                <div class="label"
                     style="background-color:#FFEFD5;color:#800000;"                >
                    Сердечно-сосудистые препараты                </div>

                <img src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/resize_cache/iblock/44d/258_270_1/44dc9f4a21f3884f7f51658a6f73d199.png?153373409741572" alt="Диоспередин таблетки, 450 мг+50 мг, №30" class="image">
                <h4 class="card_header">Диоспередин таблетки, 450 мг+50 мг, №30</h4>
                <p class="card_description">
                    Диосперидин обладает венотонизирующим и ангиопротективным свойствами                </p>
                <div class="card_bottom">
                    <img class="logo" src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/iblock/d09/d0924ed9080f4e28e05d25c8d42af1d8.png?153373771879596" alt="SPEY" class="logotype">
                </div>
            </a>
        </div>

    
        
        <div id="bx_3218110189_78" class="product_slider__wrap">
            <a href="antimikrobnye-preparaty/belatsef/index.html" class="products_slider__item">

                <div class="label"
                     style="background-color:#EEE8AA;color:#556B2F;"                >
                    Антимикробные препараты                </div>

                <img src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/resize_cache/iblock/a62/258_270_1/a625f71d049cd98af1691dd9974731d9.png?153373409643665" alt="Белацеф" class="image">
                <h4 class="card_header">Белацеф</h4>
                <p class="card_description">
                    Антибактериальные препараты для системного использования.                </p>
                <div class="card_bottom">
                    <img class="logo" src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/iblock/4d1/4d1f7e024846fe6263749242e9f7b752.png?153373529979524" alt="Belinda" class="logotype">
                </div>
            </a>
        </div>

    
        
        <div id="bx_3218110189_40" class="product_slider__wrap">
            <a href="serdechno-sosudistye-preparaty/bagroven/index.html" class="products_slider__item">

                <div class="label"
                     style="background-color:#FFEFD5;color:#800000;"                >
                    Сердечно-сосудистые препараты                </div>

                <img src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/resize_cache/iblock/f93/258_270_1/f9317d8f16df220febd1557a260d1e78.png?153373409654405" alt="Багровен" class="image">
                <h4 class="card_header">Багровен</h4>
                <p class="card_description">
                    Бисопролол является высокоселективным бета1-адреноблокатором, без собственной симпатомиметической и мембраностабилизирующей активности.                </p>
                <div class="card_bottom">
                    <img class="logo" src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/iblock/4d1/4d1f7e024846fe6263749242e9f7b752.png?153373529979524" alt="Belinda" class="logotype">
                </div>
            </a>
        </div>

    
        
        <div id="bx_3218110189_97" class="product_slider__wrap">
            <a href="dermatologicheskie-preparaty/novosalik-maz-0-5-mg-30-mg-30-g/index.html" class="products_slider__item">

                <div class="label"
                     style="background-color:#DCDCDC;color:#2F4F4F;"                >
                    Дерматологические препараты                </div>

                <img src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/resize_cache/iblock/446/258_270_1/446fc6440132a0a412d47902cd19a771.png?153373181360991" alt="Новосалик мазь, 0,5 мг + 30 мг, 30 г" class="image">
                <h4 class="card_header">Новосалик мазь, 0,5 мг + 30 мг, 30 г</h4>
                <p class="card_description">
                    Новосалик обладает противовоспалительным, противозудным, антипролиферативным, кератолитическим и противомикробным действиями.                </p>
                <div class="card_bottom">
                    <img class="logo" src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/iblock/c83/c83dfab8d50c560c52041ca8da71c060.png?153373569279524" alt="Vegapharm" class="logotype">
                </div>
            </a>
        </div>

    
        
        <div id="bx_3218110189_91" class="product_slider__wrap">
            <a href="npvp/inforin-tabletki-200-mg-i-400-mg-10/index.html" class="products_slider__item">

                <div class="label"
                     style="background-color:#f3eba1;color:#755505;"                >
                    НПВП                </div>

                <img src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/resize_cache/iblock/ff4/258_270_1/ff4a6833430e7e67fdf4e94d7ccab592.png?153373409543049" alt="Инфорин таблетки, 200 мг и 400 мг, №10" class="image">
                <h4 class="card_header">Инфорин таблетки, 200 мг и 400 мг, №10</h4>
                <p class="card_description">
                    Оказывает анальгезирующее, жаропонижающее и противовоспалительное действие                </p>
                <div class="card_bottom">
                    <img class="logo" src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/iblock/d09/d0924ed9080f4e28e05d25c8d42af1d8.png?153373771879596" alt="SPEY" class="logotype">
                </div>
            </a>
        </div>

    
        
        <div id="bx_3218110189_42" class="product_slider__wrap">
            <a href="vitaminy-i-mineraly/atribet/index.html" class="products_slider__item">

                <div class="label"
                     style="background-color:#def7c4;color:#417505;"                >
                    Витамины и минералы                </div>

                <img src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/resize_cache/iblock/b4b/258_270_1/b4b396d5cea6bae8243f3c927f413420.png?153373725354971" alt="Атрибет" class="image">
                <h4 class="card_header">Атрибет</h4>
                <p class="card_description">
                    Снижает уровни холестерина и липопротеинов в плазме крови.                </p>
                <div class="card_bottom">
                    <img class="logo" src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/iblock/4d1/4d1f7e024846fe6263749242e9f7b752.png?153373529979524" alt="Belinda" class="logotype">
                </div>
            </a>
        </div>

    
        
        <div id="bx_3218110189_81" class="product_slider__wrap">
            <a href="vitaminy-i-mineraly/lindakalts/index.html" class="products_slider__item">

                <div class="label"
                     style="background-color:#def7c4;color:#417505;"                >
                    Витамины и минералы                </div>

                <img src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/resize_cache/iblock/643/258_270_1/6434e11921c70342d4fc669b8dca2eae.png?153373409774222" alt="Линдакалц" class="image">
                <h4 class="card_header">Линдакалц</h4>
                <p class="card_description">
                    Биологически активная добавка к пище, содержащая в настоящее время наиболее усваиваемую форму кальция, аминокислотный хелат и витамин D3                </p>
                <div class="card_bottom">
                    <img class="logo" src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/iblock/4d1/4d1f7e024846fe6263749242e9f7b752.png?153373529979524" alt="Belinda" class="logotype">
                </div>
            </a>
        </div>

    
        
        <div id="bx_3218110189_88" class="product_slider__wrap">
            <a href="antigistaminnye-preparaty/divlaksin-zhevatelnye-tabletki-4-mg-20/index.html" class="products_slider__item">

                <div class="label"
                     style="background-color:#aaeaf7;color:#054475;"                >
                    Антигистаминные препараты                </div>

                <img src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/resize_cache/iblock/51e/258_270_1/51eac8019bf7aadd7895abdf867fa708.png?153373409627251" alt="Дивлаксин жевательные таблетки, 4 мг, №20" class="image">
                <h4 class="card_header">Дивлаксин жевательные таблетки, 4 мг, №20</h4>
                <p class="card_description">
                    Дивлаксин является антагонистом лейкотриеновых рецепторов.                </p>
                <div class="card_bottom">
                    <img class="logo" src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/iblock/d09/d0924ed9080f4e28e05d25c8d42af1d8.png?153373771879596" alt="SPEY" class="logotype">
                </div>
            </a>
        </div>

    
        
        <div id="bx_3218110189_36" class="product_slider__wrap">
            <a href="serdechno-sosudistye-preparaty/avtoreks/index.html" class="products_slider__item">

                <div class="label"
                     style="background-color:#FFEFD5;color:#800000;"                >
                    Сердечно-сосудистые препараты                </div>

                <img src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/resize_cache/iblock/8d9/258_270_1/8d945812c7a10b9e1f3aac810783c90d.png?153373409423348" alt="Авторекс" class="image">
                <h4 class="card_header">Авторекс</h4>
                <p class="card_description">
                    Блокатор медленных кальциевых каналов II поколения, производное дигидропиридина. Оказывает антигипертензивное и антиангинальное действие                </p>
                <div class="card_bottom">
                    <img class="logo" src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/iblock/4d1/4d1f7e024846fe6263749242e9f7b752.png?153373529979524" alt="Belinda" class="logotype">
                </div>
            </a>
        </div>

    
        
        <div id="bx_3218110189_95" class="product_slider__wrap">
            <a href="antigistaminnye-preparaty/tsvetoks-rastvor-dlya-priyema-vnutr-1-mg-120-ml/index.html" class="products_slider__item">

                <div class="label"
                     style="background-color:#aaeaf7;color:#054475;"                >
                    Антигистаминные препараты                </div>

                <img src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/resize_cache/iblock/576/258_270_1/5767f8271c119c9a70ed9dbcdfe6a8e3.png?153373409741626" alt="Цветокс раствор для приёма внутрь, 1 мг, 120 мл" class="image">
                <h4 class="card_header">Цветокс раствор для приёма внутрь, 1 мг, 120 мл</h4>
                <p class="card_description">
                    Цветокс — это противоаллергическое средство — Н1 — гистаминовых рецепторов блокатор.                </p>
                <div class="card_bottom">
                    <img class="logo" src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/iblock/d09/d0924ed9080f4e28e05d25c8d42af1d8.png?153373771879596" alt="SPEY" class="logotype">
                </div>
            </a>
        </div>

    
        
        <div id="bx_3218110189_83" class="product_slider__wrap">
            <a href="neyrotropnye-preparaty/tserebral/index.html" class="products_slider__item">

                <div class="label"
                     style="background-color:#FAEBD7;color:#B8860B;"                >
                    Нейротропные препараты                </div>

                <img src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/resize_cache/iblock/d7a/258_270_1/d7a5dd23d9a5e05c3763bfc1a74d4916.png?153373409870765" alt="Церебрал" class="image">
                <h4 class="card_header">Церебрал</h4>
                <p class="card_description">
                    Рекомендован для улучшения умственной работоспособности, повышения внимания                </p>
                <div class="card_bottom">
                    <img class="logo" src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/iblock/4d1/4d1f7e024846fe6263749242e9f7b752.png?153373529979524" alt="Belinda" class="logotype">
                </div>
            </a>
        </div>

    
        
        <div id="bx_3218110189_82" class="product_slider__wrap">
            <a href="antianemicheskie-preparaty/lindafer-plyus/index.html" class="products_slider__item">

                <div class="label"
                     style="background-color:#FFDAB9;color:#A52A2A;"                >
                    Антианемические препараты                </div>

                <img src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/resize_cache/iblock/ccb/258_270_1/ccbeabebf15e4041a5b924e6fd3a09c0.png?153373410865893" alt="Линдафер плюс" class="image">
                <h4 class="card_header">Линдафер плюс</h4>
                <p class="card_description">
                    Является биологической активной добавкой к пище, которая в своем составе содержит железо.                </p>
                <div class="card_bottom">
                    <img class="logo" src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/iblock/4d1/4d1f7e024846fe6263749242e9f7b752.png?153373529979524" alt="Belinda" class="logotype">
                </div>
            </a>
        </div>

    
        
        <div id="bx_3218110189_90" class="product_slider__wrap">
            <a href="npvp/inforin-aktiv-gel-50-mg-30-mg-40-g/index.html" class="products_slider__item">

                <div class="label"
                     style="background-color:#f3eba1;color:#755505;"                >
                    НПВП                </div>

                <img src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/resize_cache/iblock/bdb/258_270_1/bdb92d1c48e5dfb98eff085774ef1ea5.png?153373409840697" alt="Инфорин Актив гель, 50 мг+30 мг, 40 г" class="image">
                <h4 class="card_header">Инфорин Актив гель, 50 мг+30 мг, 40 г</h4>
                <p class="card_description">
                    Инфорин Актив гель — нестероидное противовоспалительное средство &#40;НПВП&#41;.                </p>
                <div class="card_bottom">
                    <img class="logo" src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/iblock/d09/d0924ed9080f4e28e05d25c8d42af1d8.png?153373771879596" alt="SPEY" class="logotype">
                </div>
            </a>
        </div>

    
        
        <div id="bx_3218110189_98" class="product_slider__wrap">
            <a href="dermatologicheskie-preparaty/vegaderm-maz-0-5mg-10-mg-1-mg-15-mg/index.html" class="products_slider__item">

                <div class="label"
                     style="background-color:#DCDCDC;color:#2F4F4F;"                >
                    Дерматологические препараты                </div>

                <img src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/resize_cache/iblock/e47/258_270_1/e47034acf02c5f17282ab5b398acef40.png?153373409755601" alt="Вегадерм мазь, 0,5мг+10 мг+1 мг, 15 мг" class="image">
                <h4 class="card_header">Вегадерм мазь, 0,5мг+10 мг+1 мг, 15 мг</h4>
                <p class="card_description">
                    Препарат оказывает противовоспалительное, противоаллергическое, антибактериальное и противогрибковое действие.                </p>
                <div class="card_bottom">
                    <img class="logo" src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/iblock/c83/c83dfab8d50c560c52041ca8da71c060.png?153373569279524" alt="Vegapharm" class="logotype">
                </div>
            </a>
        </div>

    
        
        <div id="bx_3218110189_37" class="product_slider__wrap">
            <a href="urologicheskie-preparaty/proktaluron-rektalnye-suppozitorii-5-mg-10/index.html" class="products_slider__item">

                <div class="label"
                     style="background-color:#AFEEEE;color:#191970;"                >
                    Урологические препараты                </div>

                <img src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/resize_cache/iblock/69b/258_270_1/69bef279f83cecb0c1d75ff6417b86c4.png?153373251631964" alt="Прокталурон ректальные суппозитории, 5 мг, №10" class="image">
                <h4 class="card_header">Прокталурон ректальные суппозитории, 5 мг, №10</h4>
                <p class="card_description">
                    Прокталурон — способствует быстрому восстановлению слизистой оболочки аноректального канала.                </p>
                <div class="card_bottom">
                    <img class="logo" src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/iblock/d09/d0924ed9080f4e28e05d25c8d42af1d8.png?153373771879596" alt="SPEY" class="logotype">
                </div>
            </a>
        </div>

    
        
        <div id="bx_3218110189_87" class="product_slider__wrap">
            <a href="npvp/gervetin-sprey-1-5-mg-30-ml/index.html" class="products_slider__item">

                <div class="label"
                     style="background-color:#f3eba1;color:#755505;"                >
                    НПВП                </div>

                <img src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/resize_cache/iblock/262/258_270_1/2628a68ea9692f3be86a0359dab7478f.png?153373409538650" alt="Герветин спрей, 1,5 мг, 30 мл" class="image">
                <h4 class="card_header">Герветин спрей, 1,5 мг, 30 мл</h4>
                <p class="card_description">
                    Герветин спрей оказывает противовоспалительное, анальгезирующее, местно анестезирующее и антибактериальное действие против широкого спектра микроорганизмов.                </p>
                <div class="card_bottom">
                    <img class="logo" src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/iblock/d09/d0924ed9080f4e28e05d25c8d42af1d8.png?153373771879596" alt="SPEY" class="logotype">
                </div>
            </a>
        </div>

    
        
        <div id="bx_3218110189_38" class="product_slider__wrap">
            <a href="serdechno-sosudistye-preparaty/belandzh/index.html" class="products_slider__item">

                <div class="label"
                     style="background-color:#FFEFD5;color:#800000;"                >
                    Сердечно-сосудистые препараты                </div>

                <img src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/resize_cache/iblock/75f/258_270_1/75fb93cb90b6a6b43a7b4919742b5467.png?153373409661540" alt="Беландж" class="image">
                <h4 class="card_header">Беландж</h4>
                <p class="card_description">
                    Бисопролол является высокоселективным бета1-адреноблокатором                </p>
                <div class="card_bottom">
                    <img class="logo" src="https://opt-1287907.ssl.1c-bitrix-cdn.ru/upload/iblock/4d1/4d1f7e024846fe6263749242e9f7b752.png?153373529979524" alt="Belinda" class="logotype">
                </div>
            </a>
        </div>

    
</div>
                
                
            </div>
        </div>
    </div>

            <div class="center show_all"><button class="btn_green" id="btn_show_all_products" onclick="oCatalogFilter.setUrl('/catalog/'); oCatalogFilter.loadList()">Показать все</button></div>
    
</section>

<div class="rewrite gray" style="display:none;">
    <div class="container" style="display:none;">

        
<div class="row">
    <div class="col-sm-6">
        <form id="SEND_APP" name="SEND_APP" action="index.html" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="sessid" id="sessid_1" value="4fc040c9a0c85bf4597b5f9e40bdd278" />            <input type="hidden" name="WEB_FORM_ID" value="3" />

            <div class="form">
                <div class="form__wrap">
                    <div class="form__inputs">

                        
                            
                                                                        <div class="input_wrap">
                                            <input name="form_text_6"
                                                   value=""
                                                   data-code="fio"
                                                   class="input"
                                                   type="text"
                                                 required                                            >
                                            <label class="placeholder">ФИО</label>
                                        </div>
                                        
                            
                        
                            
                                                                        <div class="input_wrap">
                                            <input name="form_text_7"
                                                   value=""
                                                   data-code="company"
                                                   class="input"
                                                   type="text"
                                                 required                                            >
                                            <label class="placeholder">Компания</label>
                                        </div>
                                        
                            
                        
                            
                                                                        <div class="input_wrap">
                                            <input name="form_email_8"
                                                   value=""
                                                   data-code="email"
                                                   class="input"
                                                   type="text"
                                                 required                                            >
                                            <label class="placeholder">e-mail</label>
                                        </div>
                                        
                            
                        
                            
                                
                            
                        
                    </div>
                    <div class="form__others">

                        
                            
                                
                            
                        
                            
                                
                            
                        
                            
                                
                            
                        
                            
                                                                        <div class="textarea_wrap">
                                            <textarea class="textarea"
                                                      name="form_textarea_9"
                                                      value=""
                                                                                            ></textarea>
                                            <label class="placeholder">Дополнительная информация</label>
                                        </div> 
                                        
                            
                        
                        <input name="web_form_submit" value="Запросить" class="btn_green_fill" type="submit"><br><p>Нажимая на кнопку "Запросить", Вы даете <a href="../policy/index.html">согласие на обработку своих персональных данных</a></p>
                    </div>
                </div>
               <div class="thanks">
                    Спасибо за заявку! Мы свяжемся с Вами в ближайшее время!
                    <button class="btn_green" onclick="sendAppForm.setReadyState()"; type="reset">Отправить ещё</button>
                </div>
            </div>
        </form>
    </div>
</div>


    </div>
</div>
<?php get_footer();?>