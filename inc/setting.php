<?php
if (is_admin()) {
    $options = array(
        //开始第一个选项标签数组
        array(
            'title' => '站点设置', //标签显示的文字
            'id'    => 'one', //标签的ID
            'type'  => 'panelstart' //顶部标签的类型
        ),
        array(
            'name' => '导航栏展示菜单',
            'id' => 'king_nav_display',
            'type' => 'text',
            'op_des' => '博客顶部「关于我」左边需要展示的菜单名称(自定义 => 添加菜单时所设置的菜单名称)，为空则不展示后台设置的菜单'
        ),
        array(
            'name' => '顶部展示菜单',
            'id' => 'king_nav_display_top',
            'type' => 'text',
            'op_des' => '博客顶部「博客名称」下方需要展示的菜单名称，为空则展示所有存在文章的分类'
        ),
        array(
            'name' => '列表单页文章数量',
            'id' => 'king_per_page',
            'type' => 'number',
            'op_des' => '博客每个存在文章列表的页面无限加载前展示多少篇文章'
        ),
        array(
            'name' => '站点Head关键词',
            'id' => 'king_gjc',
            'type' => 'text',
            'op_des' => '此博客的关键词，以英文半角逗号「,」分隔，将添加在博客head部分'
        ),
        array(
            'name' => '站点描述',
            'id' => 'king_ms',
            'type' => 'textarea',
            'op_des' => '此博客的描述，将添加在博客 head 部分与首页顶部名称下方'
        ),
        array(
            'name' => '站点标题描述',
            'id' => 'king_title_ms',
            'type' => 'textarea',
            'op_des' => '此博客的标题描述，将添加在博客首页顶部(若填写此项则在顶部替换站点描述展示并保留 head 描述为站点描述)'
        ),
        array(
            'name' => '站点 ICO 图标',
            'id' => 'king_ico',
            'type' => 'text',
            'op_des' => '此博客的 favicon 图标链接地址'
        ),
        array(
            'name' => '站点 Logo 图标',
            'id' => 'king_logo',
            'type' => 'text',
            'op_des' => '此博客的 Logo 图标链接地址'
        ),
        array(
            'name' => '站点 Logo 图标首页顶部展示',
            'id' => 'king_logo_header',
            'type' => 'select',
            'op_des' => '是否在站点首页顶部名称旁展示头像',
            'options' => array('关闭','开启')
        ),
        array(
            'name' => '站点ICP备案号',
            'id' => 'king_icp_display',
            'type' => 'text',
            'op_des' => '本站 ICP 备案号，将展示在站点左下角，为空不填则不展示'
        ),
        array(
            'name' => '在底部展示备案号',
            'id' => 'king_icp_display_bottom',
            'type' => 'select',
            'op_des' => '是否将备案号添加在站点底部区域展示，侧边展示将被关闭',
            'options' => array('关闭', '开启')
        ),
        array(
            'name' => '站长统计代码',
            'id' => 'king_zztj',
            'type' => 'textarea',
            'op_des' => '包含script标签的站长统计代码，将添加在博客head部分'
        ),
        array(
            'type'  => 'panelend' //标签段的结束
        ),


        array(
            'title' => '内容设置', //标签显示的文字
            'id'    => 'two', //标签的ID
            'type'  => 'panelstart' //顶部标签的类型
        ),


        array(
            'name' => '首页快速预览评论区',
            'id' => 'king_preview_comment',
            'type' => 'select',
            'op_des' => '是否开启在首页快速预览文章中展示评论区的功能',
            'options' => array('开启', '关闭')
        ),

        array(
            'name' => '文章列表作者信息显示',
            'id' => 'king_display_author',
            'type' => 'select',
            'op_des' => '是否在文章与文章列表中展示作者名称',
            'options' => array('关闭', '开启')
        ),

        array(
            'name' => '文章列表时间格式',
            'id' => 'king_date_format',
            'type' => 'select',
            'op_des' => '在文章列表中展示的日期格式，如MM-DD-YY',
            'options' => array('Y-m-d', 'm/d/Y', 'd/m/Y', 'Y年n月j日')
        ),

        array(
            'name' => '文章目录引索',
            'id' => 'king_single_index',
            'type' => 'select',
            'op_des' => '是否开启在文章左方展示的标题目录',
            'options' => array('开启', '关闭')
        ),

        array(
            'name' => '文章阅读进度',
            'id' => 'king_read',
            'type' => 'select',
            'op_des' => '是否开启在文章内容页顶部展示的阅读进度条',
            'options' => array('开启', '关闭')
        ),

        array(
            'name' => '文章 Markdown 解析',
            'id' => 'markdown-it',
            'type' => 'select',
            'op_des' => '是否在文章页面自动解析 MarkDown 内容（必须使用「文本/代码编辑」模式书写内容）',
            'options' => array('开启', '关闭')
        ),

        array(
            'name' => '首页排除分类',
            'id' => 'king_index_exclude',
            'type' => 'text',
            'op_des' => '在站点首页不显示的分类 ID，以英文半角逗号分隔'
        ),

        array(
            'name' => '顶栏排除分类',
            'id' => 'king_index_cate_exclude',
            'type' => 'text',
            'op_des' => '(若未填写顶部展示菜单)在站点顶栏不显示的分类 ID，以英文半角逗号分隔'
        ),
        array(
            'name' => '展示特殊文章列表样式的分类',
            'id' => 'king_cate_cate',
            'type' => 'number',
            'op_des' => '填写分类 ID，该分类将在文章列表展示为高亮样式的分类名与第一个标签'
        ),
        array(
            'name' => '无标签时占位内容',
            'id' => 'king_cate_cate_ph',
            'type' => 'text',
            'op_des' => '(若填写了上一项)展示分类标签的分类不存在第一个标签时的占位内容'
        ),
        array(
            'name' => '友情链接分类',
            'id' => 'king_fre_cate',
            'type' => 'number',
            'op_des' => '填写分类 ID，友情链接分类将展示不同样式的文章列表，添加友情链接形式为发布文章，格式为：标题=>标题,描述=>文章内容,图像=>特色图像,链接=>自定义字段 link(使用经典编辑器则可以在编辑文章时使用友情链接填写框)'
        ),
        array(
            'name' => '作品集分类',
            'id' => 'king_wor_cate',
            'type' => 'number',
            'op_des' => '填写分类 ID，作品集分类将展示与友情链接相同样式的文章列表与不同的描述'
        ),
        array(
            'type'  => 'panelend' //标签段的结束
        ),



        array(
            'title' => '导航设置', //标签显示的文字
            'id'    => 'three', //标签的ID
            'type'  => 'panelstart' //顶部标签的类型
        ),

        array(
            'name' => '「关于我」页面链接',
            'id' => 'king_abt_url',
            'type' => 'text',
            'op_des' => '展示在导航栏上的关于我链接'
        ),
        array(
            'name' => '「关于我」文本',
            'id' => 'king_about_text',
            'type' => 'text',
            'op_des' => '展示在导航栏上的替换「关于我」的文本'
        ),
        array(
            'name' => '导航栏第二按钮链接',
            'id' => 'king_nav_pu',
            'type' => 'text',
            'op_des' => '(若未填写导航栏菜单)展示在导航栏上的第二按钮链接'
        ),
        array(
            'name' => '导航栏第二按钮内容',
            'id' => 'king_nav_pn',
            'type' => 'text',
            'op_des' => '(若未填写导航栏菜单)展示在导航栏上的第二按钮内容'
        ),

        array(
            'type'  => 'panelend' //标签段的结束
        ),

    );
    //主题后台设置已完成，下面可以不用看了
    function git_add_theme_options_page()
    {
        global $options;
        if ($_GET['page'] == basename(__FILE__)) {
            if ('update' == $_REQUEST['action']) {
                foreach ($options as $value) {
                    if (isset($_REQUEST[$value['id']])) {
                        update_option($value['id'], $_REQUEST[$value['id']]);
                    } else {
                        delete_option($value['id']);
                    }
                }
                update_option('git_options_setup', true);
                header('Location: themes.php?page=setting.php&update=true');
                die;
            } else if ('reset' == $_REQUEST['action']) {
                foreach ($options as $value) {
                    delete_option($value['id']);
                }
                delete_option('git_options_setup');
                header('Location: themes.php?page=setting.php&reset=true');
                die;
            }
        }
        add_theme_page('主题设置', '主题设置', 'edit_theme_options', basename(__FILE__), 'git_options_page');
    }
    add_action('admin_menu', 'git_add_theme_options_page');

    function git_options_page()
    {
        global $options;
        $optionsSetup = get_option('git_options_setup') != '';
        if ($_REQUEST['update']) echo '<div class="updated" style="margin-top:15px"><p><strong>设置已保存</strong></p></div>';
        if ($_REQUEST['reset']) echo '<div class="updated" style="margin-top:15px"><p><strong>设置已重置</strong></p></div>';
        ?>

        <div class="wrap" style="width: 47%;margin: 10vh auto;">
            <h1 style="font-weight: 600;font-size: 2.5rem;">Tony 主题设置</h1>
            <p style="margin: 4px 0;color: #777;letter-spacing: .4px;">请务必正确配置 <b><a href="https://www.wpdaxue.com/wordpress-rewriterule.html" target="_blank" style="color: #555;text-decoration: none;margin-left: 5px;">WordPress 伪静态</a></b> 并设置 <b>非默认</b> 固定链接格式<br />原体基于 <a href="http://www.zhutihome.net/6542.html" target="_blank">主题之家 King 主题</a>，本主题已开源以尊重作者版权:<a target="_blank" href="https://github.com/HelipengTony/tony" style="color: #555;text-decoration: none;margin-left: 5px;">https://github.com/HelipengTony/tony</a><br />请在使用前仔细审阅以下每一项设置选项。积极收集反馈与建议, 任何问题请前往 <a href="https://github.com/HelipengTony/tony/issues" target="_blank">Github</a> 提交 Issues 以便 在后续版本统一调整</p>
            <div style="background: #f7f8f9;padding: 5px 20px;box-shadow: rgba(0, 0, 0, 0.08) 0px 1px 2px !important;border-radius: 4px;margin: 20px 0;">
                <?php admin_show_category(); ?>
            </div>

            <form method="post" style="box-shadow: rgba(0, 0, 0, 0.08) 0px 1px 2px !important;background: #f7f8f9;padding: 10px 20px;border-radius:4px">
                <h2 class="nav-tab-wrapper" style="border:none">
                    <?php
                    $panelIndex = 0;
                    foreach ($options as $value) {
                        if ($panelIndex !== 0) {
                            $margin = 'margin-left:10px';
                        }
                        if ($value['type'] == 'panelstart') echo '<a href="#' . $value['id'] . '" class="nav-tab' . ($panelIndex == 0 ? ' nav-tab-active' : '') . '" style="border: none;background: #fff;border-radius: 4px;padding: 5px 15px;margin: 0px;box-shadow: rgba(0, 0, 0, 0.08) 0px 1px 2px !important;' . $margin . '">' . $value['title'] . '</a>';
                        $panelIndex++;
                    }
                    ?>
                </h2>
                <!-- 开始建立选项类型 -->
                <?php
                $panelIndex = 0;
                foreach ($options as $value) {
                    switch ($value['type']) {
                        case 'panelstart': //最高标签
                            echo '<div class="panel" id="' . $value['id'] . '" ' . ($panelIndex == 0 ? ' style="display:block"' : '') . '><table class="form-table">';
                            $panelIndex++;
                            break;
                        case 'panelend':
                            echo '</table></div>';
                            break;
                        case 'subtitle':
                            echo '<tr><th colspan="2"><h3>' . $value['title'] . '</h3></th></tr>';
                            break;
                        case 'text':
                            ?>
                        <tr>
                            <th><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></th>
                            <td>
                                <label>
                                    <input name="<?php echo $value['id']; ?>" class="regular-text" id="<?php echo $value['id']; ?>" type='text' value="<?php if ($optionsSetup || get_option($value['id']) != '') {
                                                                                                                                                            echo stripslashes(get_option($value['id']));
                                                                                                                                                        } else {
                                                                                                                                                            echo $value['std'];
                                                                                                                                                        } ?>" />
                                    <span class="description"><?php echo $value['desc']; ?></span>
                                </label>
                                <p style="color: #999;margin-left: 3px;letter-spacing: .5px;"><?php echo $value['op_des'] ?></p>
                            </td>
                        </tr>
                        <?php
                        break;
                    case 'number':
                        ?>
                        <tr>
                            <th><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></th>
                            <td>
                                <label>
                                    <input name="<?php echo $value['id']; ?>" class="small-text" id="<?php echo $value['id']; ?>" type="number" value="<?php if ($optionsSetup || get_option($value['id']) != '') {
                                                                                                                                                            echo get_option($value['id']);
                                                                                                                                                        } else {
                                                                                                                                                            echo $value['std'];
                                                                                                                                                        } ?>" />
                                    <span class="description"><?php echo $value['desc']; ?></span>
                                </label>
                                <p style="color: #999;margin-left: 3px;letter-spacing: .5px;"><?php echo $value['op_des'] ?></p>
                            </td>
                        </tr>
                        <?php
                        break;
                    case 'password':
                        ?>
                        <tr>
                            <th><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></th>
                            <td>
                                <label>
                                    <input name="<?php echo $value['id']; ?>" class="regular-text" id="<?php echo $value['id']; ?>" type="password" value="<?php if ($optionsSetup || get_option($value['id']) != '') {
                                                                                                                                                                echo get_option($value['id']);
                                                                                                                                                            } else {
                                                                                                                                                                echo $value['std'];
                                                                                                                                                            } ?>" />
                                    <span class="description"><?php echo $value['desc']; ?></span>
                                </label>
                                <p style="color: #999;margin-left: 3px;letter-spacing: .5px;"><?php echo $value['op_des'] ?></p>
                            </td>
                        </tr>
                        <?php
                        break;
                    case 'textarea':
                        ?>
                        <tr>
                            <th><?php echo $value['name']; ?></th>
                            <td>
                                <p><label for="<?php echo $value['id']; ?>"><?php echo $value['desc']; ?></label></p>
                                <p><textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" rows="5" cols="50" class="large-text code"><?php if ($optionsSetup || get_option($value['id']) != '') {
                                                                                                                                                                echo stripslashes(get_option($value['id']));
                                                                                                                                                            } else {
                                                                                                                                                                echo $value['std'];
                                                                                                                                                            } ?></textarea></p>
                                <p style="color: #999;margin-left: 3px;letter-spacing: .5px;"><?php echo $value['op_des'] ?></p>
                            </td>
                        </tr>
                        <?php
                        break;
                    case 'select':
                        ?>
                        <tr>
                            <th><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></th>
                            <td>
                                <label>
                                    <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
                                        <?php foreach ($value['options'] as $option) : ?>
                                            <option value="<?php echo $option; ?>" <?php selected(get_option($value['id']), $option); ?>>
                                                <?php echo $option; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <span class="description"><?php echo $value['desc']; ?></span>
                                </label>
                                <p style="color: #999;margin-left: 3px;letter-spacing: .5px;"><?php echo $value['op_des'] ?></p>
                            </td>
                        </tr>

                        <?php
                        break;
                    case 'radio':
                        ?>
                        <tr>
                            <th><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></th>
                            <td>
                                <?php foreach ($value['options'] as $name => $option) : ?>
                                    <label>
                                        <input type="radio" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="<?php echo $option; ?>" <?php checked(get_option($value['id']), $option); ?>>
                                        <?php echo $name; ?>
                                    </label>
                                <?php endforeach; ?>
                                <p><span class="description"><?php echo $value['desc']; ?></span></p>
                                <p style="color: #999;margin-left: 3px;letter-spacing: .5px;"><?php echo $value['op_des'] ?></p>
                            </td>
                        </tr>

                        <?php
                        break;
                    case 'checkbox':
                        ?>
                        <tr>
                            <th><?php echo $value['name']; ?></th>
                            <td>
                                <label>
                                    <input type='checkbox' name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="1" <?php echo checked(get_option($value['id']), 1); ?> />
                                    <span><?php echo $value['desc']; ?></span>
                                </label>
                                <p style="color: #999;margin-left: 3px;letter-spacing: .5px;"><?php echo $value['op_des'] ?></p>
                            </td>
                        </tr>

                        <?php
                        break;
                    case 'checkboxs':
                        ?>
                        <tr>
                            <th><?php echo $value['name']; ?></th>
                            <td>
                                <?php $checkboxsValue = get_option($value['id']);
                                if (!is_array($checkboxsValue)) $checkboxsValue = array();
                                foreach ($value['options'] as $id => $title) : ?>
                                    <label>
                                        <input type="checkbox" name="<?php echo $value['id']; ?>[]" id="<?php echo $value['id']; ?>[]" value="<?php echo $id; ?>" <?php checked(in_array($id, $checkboxsValue), true); ?>>
                                        <?php echo $title; ?>
                                    </label>
                                <?php endforeach; ?>
                                <span class="description"><?php echo $value['desc']; ?></span>
                                <p style="color: #999;margin-left: 3px;letter-spacing: .5px;"><?php echo $value['op_des'] ?></p>
                            </td>
                        </tr>
                        <?php
                        break;
                }
            }
            ?>
                <!-- 结束建立选项类型 -->
                <p class="submit">
                    <input name="submit" type="submit" class="button button-primary" value="保存选项" />
                    <input type="hidden" name="action" value="update" />
                </p>
            </form>
            <form method="post" style="position: absolute;margin-top: -76px;margin-left: 110px;">
                <p>
                    <input name="reset" type="submit" class="button button-secondary" value="重置选项" onclick="return confirm('你确定要重置选项吗？重置之后您的全部设置将被清空，您确定您没有搞错？？ ');" />
                    <input type="hidden" name="action" value="reset" />
                </p>
            </form>
        </div>
        <style>
            .panel {
                display: none
            }

            .panel h3 {
                margin: 0;
                font-size: 1.2em
            }

            #panel_update ul {
                list-style-type: disc
            }

            .nav-tab-wrapper {
                clear: both
            }

            .nav-tab {
                position: relative
            }

            .nav-tab i:before {
                position: absolute;
                top: -10px;
                right: -8px;
                display: inline-block;
                padding: 2px;
                border-radius: 50%;
                background: #e14d43;
                color: #fff;
                content: "\f463";
                vertical-align: text-bottom;
                font: 400 18px/1 dashicons;
                speak: none
            }

            #theme-options-search {
                display: none;
                float: right;
                margin-top: -34px;
                width: 280px;
                font-weight: 300;
                font-size: 16px;
                line-height: 1.5
            }

            .updated+#theme-options-search {
                margin-top: -91px
            }

            .wrap.searching .nav-tab-wrapper a,
            .wrap.searching .panel tr,
            #attrselector {
                display: none
            }

            .wrap.searching .panel {
                display: block !important
            }

            #attrselector[attrselector*=ok] {
                display: block
            }
        </style>
        <style id="theme-options-filter"></style>
        <div id="attrselector" attrselector="ok"></div>
        <script>
            jQuery(function($) {
                $(".nav-tab").click(function() {
                    $(this).addClass("nav-tab-active").siblings().removeClass("nav-tab-active");
                    $(".panel").hide();
                    $($(this).attr("href")).show();
                    return false;
                });

                var themeOptionsFilter = $("#theme-options-filter");
                themeOptionsFilter.text("ok");
                if ($("#attrselector").is(":visible") && themeOptionsFilter.text() != "") {
                    $(".panel tr").each(function(el) {
                        $(this).attr("data-searchtext", $(this).text().replace(/\r|\n/g, '').replace(/ +/g, ' ').toLowerCase());
                    });

                    var wrap = $(".wrap");
                    $("#theme-options-search").show().on("input propertychange", function() {
                        var text = $(this).val().replace(/^ +| +$/, "").toLowerCase();
                        if (text != "") {
                            wrap.addClass("searching");
                            themeOptionsFilter.text(".wrap.searching .panel tr[data-searchtext*='" + text + "']{display:block}");
                        } else {
                            wrap.removeClass("searching");
                            themeOptionsFilter.text("");
                        };
                    });
                };
            });
        </script>
    <?php
}
//启用主题后自动跳转至选项页面
global $pagenow;
if (is_admin() && isset($_GET['activated']) && $pagenow == 'setting.php') {
        wp_redirect(admin_url('themes.php?page=functions.php'));
        exit;
    }
function git_enqueue_pointer_script_style($hook_suffix)
{
    $enqueue_pointer_script_style = false;
    $dismissed_pointers = explode(',', get_user_meta(get_current_user_id(), 'dismissed_wp_pointers', true));
    if (!in_array('git_options_pointer', $dismissed_pointers)) {
        $enqueue_pointer_script_style = true;
        add_action('admin_print_footer_scripts', 'git_pointer_print_scripts');
    }
    if ($enqueue_pointer_script_style) {
        wp_enqueue_style('wp-pointer');
        wp_enqueue_script('wp-pointer');
    }
}
add_action('admin_enqueue_scripts', 'git_enqueue_pointer_script_style');
function git_pointer_print_scripts()
{
    ?>
        <script>
            jQuery(document).ready(function($) {
                var $menuAppearance = $("#menu-appearance");
                $menuAppearance.pointer({
                    content: '<h3>最重要的一步</h3><p>感谢使用本主题，请先进行必要的设置以保证访客体验<br/><ul><li>1. 你必须使用非默认固定链接结构才可以正常使用本主题(推荐/%post_id%.html)</li><li>2. 请务必参照此 <a target="_blank" href="https://www.wpdaxue.com/wordpress-rewriterule.html">链接指南</a> 在服务器正确配置伪静态以使主题正常加载文章</li></ul></p>',
                    position: {
                        edge: "left",
                        align: "center"
                    },
                    close: function() {
                        $.post(ajaxurl, {
                            pointer: "git_options_pointer",
                            action: "dismiss-wp-pointer"
                        });
                    }
                }).pointer("open").pointer("widget").find("a").eq(0).click(function() {
                    var href = $(this).attr("href");
                    $menuAppearance.pointer("close");
                    setTimeout(function() {
                        location.href = href;
                    }, 700);
                    return false;
                });

                $(window).on("resize scroll", function() {
                    $menuAppearance.pointer("reposition");
                });
                $("#collapse-menu").click(function() {
                    $menuAppearance.pointer("reposition");
                });
            });
        </script>

    <?php
}

/* 主题检测更新部分 */
function theme_check_update($hook_suffix)
{
    add_action('admin_print_footer_scripts', 'theme_update_notice');
    wp_enqueue_style('wp-pointer');
    wp_enqueue_script('wp-pointer');
}
add_action('admin_enqueue_scripts', 'theme_check_update');

function theme_update_notice()
{
    $tony = wp_get_theme();
    ?>
        <script>
            jQuery(document).ready(function($) {
                var v = <?php echo $tony->get('Version'); ?>;
                $.ajax({
                    url: 'https://blog.ouorz.com/check_update.html?v=' + v,
                    type: "POST",
                    cache: false,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        if (data.status == true) {
                            show(data.version, data.download);
                        }
                    }
                });

                var show = function(new_v, d_url) {
                    var $menuAppearance = $("#menu-appearance");
                    $menuAppearance.pointer({
                        content: '<h3>更新提示</h3><p>Tony 主题现已更新至 V' + new_v + '，可能包含重要更新<br/>请前往 <a href="https://github.com/HelipengTony/tony">Github</a> / <a href="' + d_url + '">直接下载</a></p>',
                        position: {
                            edge: "left",
                            align: "center"
                        },
                        close: function() {
                            $.post(ajaxurl, {
                                pointer: "git_options_pointer",
                                action: "dismiss-wp-pointer"
                            });
                        }
                    }).pointer("open").pointer("widget").find("a").eq(0).click(function() {
                        var href = $(this).attr("href");
                        $menuAppearance.pointer("close");
                        setTimeout(function() {
                            location.href = href;
                        }, 700);
                        return false;
                    });

                    $(window).on("resize scroll", function() {
                        $menuAppearance.pointer("reposition");
                    });
                    $("#collapse-menu").click(function() {
                        $menuAppearance.pointer("reposition");
                    });
                }
            });
        </script>

    <?php
}

    /* 主题检测更新部分 */
}
?>