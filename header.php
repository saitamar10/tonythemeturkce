<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta charset="utf-8">
    <title><?php site_page_title(); ?></title>
    <meta http-equiv="x-dns-prefetch-control" content="on" />
    <link rel="dns-prefetch" href="https://cdn.staticfile.org" />
    <meta name="keywords" content="<?php echo get_option('king_gjc'); ?>" />
    <meta name="description" content="<?php echo get_option('king_ms'); ?>">
    <link rel="Shortcut Icon" href="<?php echo get_option('king_ico') ?>" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://static.ouorz.com/popper.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/instantclick-1.2.2.js" type="module"></script>
    <?php if (isset($_COOKIE['tony_view'])) { ?>
        <link type="text/css" rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/darkmode.css">
    <?php } else { ?>
        <link type="text/css" rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/css/style.css">
    <?php } ?>
    <link type="text/css" rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());  ?>/css/caomei-cion.css">
    <link href="https://cdn.staticfile.org/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.staticfile.org/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdn.staticfile.org/uikit/3.3.0/css/uikit.min.css" rel="stylesheet">
    <script src="https://cdn.staticfile.org/uikit/3.3.0/js/uikit.min.js"></script>
    <script src="https://cdn.staticfile.org/vue/2.6.11/vue.min.js"></script>
    <script src="https://cdn.staticfile.org/axios/0.19.2/axios.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.goup.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/header.js"></script>
    <?php echo stripslashes(get_option('king_zztj')); ?>
    <script src="https://cdn.staticfile.org/highlight.js/9.18.1/highlight.min.js"></script>
    <link href="https://cdn.staticfile.org/highlight.js/9.18.1/styles/a11y-dark.min.css" rel="stylesheet">
    <!-- 额外的 css 获取 -->
    <style>
        <?php echo wp_get_custom_css(); ?>
    </style>
    
</head>

<body id="body">

    <?php if (!wp_is_mobile()) { ?>
        <header class="tony-header-fixed" id="header-div">
            <?php if (is_single()) { ?>
                <div class="header-div1">
                    <a href="<?php echo site_url() ?>" style="display: inline-block;"><img src="<?php if(get_option('king_logo')) echo get_option('king_logo'); else echo 'https://static.ouorz.com/t.jpg' ?>"></a>
                    <a href="<?php echo site_url() ?>/feed" style="display: inline-block;margin-top: 12px;margin-left: 15px;"><button type="button" class="btn btn-light" style="letter-spacing: 1px;font-weight: 500;">RSS</button></a>
                    <a style="margin-top: 12px;margin-left: 12px;"><button onclick="open_search();" type="button" class="btn btn-light" style="letter-spacing: 1px;font-weight: 500;">Ara</button></a>
                </div>
            <?php } else { ?>
                <div class="header-div1-1">
                    <a href="<?php echo site_url() ?>"><img src="<?php if(get_option('king_logo')) echo get_option('king_logo'); else echo 'https://static.ouorz.com/t.jpg' ?>"></a>
                    <a style="margin-top: 12px;margin-left: 12px;"><button onclick="open_search();" type="button" class="btn btn-light" style="letter-spacing: 1px;font-weight: 500;">Ara</button></a>
                </div>
            <?php } ?>
            <!-- 菜单部分 -->
            <div class="header-div2">
                <a href="<?php echo site_url() ?>"><button type="button" class="btn btn-light" style="letter-spacing: 1px;font-weight: 500;">Ana Sayfa</button></a>
                <?php if (get_option('king_nav_pu') !== '') { ?>
                    <a href="<?php echo get_option('king_nav_pu'); ?>"><button type="button" class="btn btn-light" style="letter-spacing: 1px;font-weight: 500;"><?php echo get_option('king_nav_pn'); ?></button></a>
                <?php } ?>

                <!-- 系统菜单部分 -->
                <?php
                    if (get_option('king_nav_display')) {
                        $array_menu = wp_get_nav_menu_items(get_option('king_nav_display'));
                        $menu = array();
                        foreach ($array_menu as $m) {
                            if (empty($m->menu_item_parent)) {
                                ?>
                            <a href="<?php echo $m->url ?>"><button type="button" class="btn btn-light" style="letter-spacing: 1px;font-weight: 500;"><?php echo $m->title ?></button></a>
                <?php }
                        }
                    } ?>
                <!-- 系统菜单部分 -->

                <button type="button" class="btn btn-primary" style="letter-spacing: 1px;font-weight: 600;padding-right: 15px;"><a href="<?php echo get_option('king_abt_url'); ?>" style="text-decoration:none;color:white"><i class="czs-user-l" style="margin-right:5px"></i><?php echo get_option('king_about_text') ? get_option('king_about_text') : 'Hakkımda'; ?></a></button>
            </div>
            <!-- 菜单部分 -->
        </header>

    <?php } else { ?>
        <header class="tony-header-fixed" id="header-div">
            <div class="header-div1-1">
                <a href="<?php echo site_url() ?>" class="mob-header-text"><?php echo get_bloginfo('name'); ?></a>
            </div>
            <div class="header-div2" style="padding-top: 12px;">
                <a style="font-size: 1.6rem;color:#333;text-decoration:none" href="<?php echo get_option('king_abt_url'); ?>"><i class="czs-label-info-l"></i></a>
            </div>
        </header>
    <?php } ?>

    <div id="view-div" class="center-info" style="display:none">
        <p id="view-text">-&nbsp;<?php if (!is_single() && !is_page()) echo 'makale listesi';else echo 'Blog içeriği'; ?>&nbsp;-</p>
    </div>



    <div id="jv-loadingbar"></div>
    <script type="text/javascript">
        $("#jv-loadingbar").show();
        $("#jv-loadingbar").animate({
            width: "20%"
        }, 100);
        $("#jv-loadingbar").animate({
            width: "100%"
        }, 100, function() {
            $("#jv-loadingbar").fadeOut(1000, function() {
                $("#jv-loadingbar").css("width", "0");
            });
        });
    </script>

    <div id="search_form" class="search_form_dis">
        <div class="search-bg-b"></div>
        <div class="search-bg" id="search-div">
            <div class="search-div1">
                <h3>İçerik ara<button type="button" class="btn btn-primary" style="font-weight: 600;padding: 4px 14px;font-size: .9rem;margin-top: 6px;margin-left: 10px;float: right;" onclick="close_search();">Kapat</button></h3>
                <p>Bu sitenin tüm içeriğinden ihtiyacınız olanı bulun</p>
                <input class="uk-input" type="text" placeholder="Lütfen arama içeriğini girin ve Enter'a basın..." v-on:keyup.enter="search_query" v-model.trim="search_key">
            </div>
            <div class="search-div2">
                <ul v-if="search_loading">
                    <template v-if="search_content.length !== 0">
                        <li v-for="search in search_content">
                            <a :href="search.link">
                                <h4 v-html="search.title.rendered"></h4>
                                <p v-html="search.post_excerpt.four"></p>
                            </a>
                        </li>
                    </template>
                    <template v-else>
                        <li>
                            <h4 style="color:#777">Eşleşen makale yok</h4>
                            <p>Lütfen arama terimlerinizi değiştirmeyi deneyin ve tekrar deneyin...</p>
                        </li>
                    </template>
                </ul>
                <ul v-if="loading_ph">
                    <ul>
                        <li class="search-line" style="padding: 30px;background: #f1f2f3;border: none;"></li>
                        <li class="search-line" style="padding: 30px;background: #f1f2f3;border: none;"></li>
                        <li class="search-line" style="padding: 30px;background: #f1f2f3;border: none;"></li>
                    </ul>
                </ul>
            </div>
        </div>
    </div>

    <script>
        var search_vue = new Vue({
            el: '#search-div',
            data() {
                return {
                    search_content: null,
                    search_key: null,
                    search_loading: false,
                    loading_ph: true,
                    search_open: false
                }
            },
            methods: {
                search_query: function() {
                    this.search_loading = false;
                    this.loading_ph = true;

                    var s = this.search_key;
                    axios.get('<?php echo site_url() ?>/wp-json/wp/v2/posts?search=' + s + '<?php if (get_option('king_index_exclude')) echo '&categories_exclude=' . get_option('king_index_exclude'); ?>')
                        .then(response => {
                            this.search_content = response.data;
                            this.loading_ph = false;
                            this.search_loading = true;
                        })
                }
            }
        })
    </script>
    <main role="main">
        <div class="grid grid-centered" style="<?php if (!is_single() && !is_page()) echo 'max-width: 660px;padding: 0px 20px;margin-top: 80px;'; ?>">
            <div class="grid-cell" id="grid-cell">