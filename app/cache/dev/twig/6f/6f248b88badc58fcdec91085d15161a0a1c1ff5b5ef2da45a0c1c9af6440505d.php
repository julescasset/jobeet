<?php

/* @SonataAdmin/standard_layout.html.twig */
class __TwigTemplate_1e6ec9b7505509d827e2a2c78c5b928efc53c5de4eb5c41339c48a9c664a8a99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bacc52271e45ea74d2c521dcbb99ec2daad4d990650eaf46d80194ec3565e86 = $this->env->getExtension("native_profiler");
        $__internal_7bacc52271e45ea74d2c521dcbb99ec2daad4d990650eaf46d80194ec3565e86->enter($__internal_7bacc52271e45ea74d2c521dcbb99ec2daad4d990650eaf46d80194ec3565e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/standard_layout.html.twig"));

        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_tab_menu"] = $this->renderBlock("tab_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        $context["_navbar_title"] = $this->renderBlock("navbar_title", $context, $blocks);
        // line 22
        $context["_list_filters_actions"] = $this->renderBlock("list_filters_actions", $context, $blocks);
        // line 23
        echo "
<!DOCTYPE html>
<html ";
        // line 25
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 27
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 32
        echo "
        ";
        // line 33
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 79
        echo "
        <title>
        ";
        // line 81
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 101
        echo "        </title>
    </head>
    <body ";
        // line 103
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 107
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 188
        echo "
        ";
        // line 189
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 327
        echo "    </div>

    ";
        // line 329
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 330
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 336
            echo "    ";
        }
        // line 337
        echo "
    </body>
</html>
";
        
        $__internal_7bacc52271e45ea74d2c521dcbb99ec2daad4d990650eaf46d80194ec3565e86->leave($__internal_7bacc52271e45ea74d2c521dcbb99ec2daad4d990650eaf46d80194ec3565e86_prof);

    }

    // line 25
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_23b4157278df13feab4108d2752bf8f8f16eda846589b3d3efe019a9a9cdc940 = $this->env->getExtension("native_profiler");
        $__internal_23b4157278df13feab4108d2752bf8f8f16eda846589b3d3efe019a9a9cdc940->enter($__internal_23b4157278df13feab4108d2752bf8f8f16eda846589b3d3efe019a9a9cdc940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_23b4157278df13feab4108d2752bf8f8f16eda846589b3d3efe019a9a9cdc940->leave($__internal_23b4157278df13feab4108d2752bf8f8f16eda846589b3d3efe019a9a9cdc940_prof);

    }

    // line 27
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_aedee7e6b0bfdb06c8b0fba9608dd7c09afc8fbc764fc30ea4fe1186016b869b = $this->env->getExtension("native_profiler");
        $__internal_aedee7e6b0bfdb06c8b0fba9608dd7c09afc8fbc764fc30ea4fe1186016b869b->enter($__internal_aedee7e6b0bfdb06c8b0fba9608dd7c09afc8fbc764fc30ea4fe1186016b869b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 28
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_aedee7e6b0bfdb06c8b0fba9608dd7c09afc8fbc764fc30ea4fe1186016b869b->leave($__internal_aedee7e6b0bfdb06c8b0fba9608dd7c09afc8fbc764fc30ea4fe1186016b869b_prof);

    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc702545c7582fa35adc8de765161f00a97aa91eeba5d82726128ec23b3534b4 = $this->env->getExtension("native_profiler");
        $__internal_cc702545c7582fa35adc8de765161f00a97aa91eeba5d82726128ec23b3534b4->enter($__internal_cc702545c7582fa35adc8de765161f00a97aa91eeba5d82726128ec23b3534b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 34
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 35
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        ";
        
        $__internal_cc702545c7582fa35adc8de765161f00a97aa91eeba5d82726128ec23b3534b4->leave($__internal_cc702545c7582fa35adc8de765161f00a97aa91eeba5d82726128ec23b3534b4_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2084ef569f3459003f0906fc86989ac267183b8bdf86a1e9d5fc0b20fadb35ae = $this->env->getExtension("native_profiler");
        $__internal_2084ef569f3459003f0906fc86989ac267183b8bdf86a1e9d5fc0b20fadb35ae->enter($__internal_2084ef569f3459003f0906fc86989ac267183b8bdf86a1e9d5fc0b20fadb35ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 40
        echo "            <script>
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 42
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 43
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_ICHECK: ";
        // line 44
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_STICKYFORMS: ";
        // line 45
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 46
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 48
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                };

                // http://getbootstrap.com/getting-started/#support-ie10-width
                if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                    var msViewportStyle = document.createElement('style');
                    msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                    document.querySelector('head').appendChild(msViewportStyle);
                }
            </script>

            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 60
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
            ";
        // line 63
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 64
        echo "            ";
        // line 65
        echo "            ";
        if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 66
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
            echo "\"></script>
            ";
        }
        // line 68
        echo "
            ";
        // line 70
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 71
            echo "                ";
            if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 72
            echo "
                ";
            // line 74
            echo "                ";
            if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 75
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 77
            echo "            ";
        }
        // line 78
        echo "        ";
        
        $__internal_2084ef569f3459003f0906fc86989ac267183b8bdf86a1e9d5fc0b20fadb35ae->leave($__internal_2084ef569f3459003f0906fc86989ac267183b8bdf86a1e9d5fc0b20fadb35ae_prof);

    }

    // line 81
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_e45f65660aead742c029f16b52d32f16544b4d429e4d63659c39798526603712 = $this->env->getExtension("native_profiler");
        $__internal_e45f65660aead742c029f16b52d32f16544b4d429e4d63659c39798526603712->enter($__internal_e45f65660aead742c029f16b52d32f16544b4d429e4d63659c39798526603712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 82
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 84
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")))) {
            // line 85
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 87
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 88
                echo "                    -
                    ";
                // line 89
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 90
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 91
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 92
                            echo "                                &gt;
                            ";
                        }
                        // line 94
                        echo "
                            ";
                        // line 95
                        echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 97
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "                ";
            }
            // line 99
            echo "            ";
        }
        // line 100
        echo "        ";
        
        $__internal_e45f65660aead742c029f16b52d32f16544b4d429e4d63659c39798526603712->leave($__internal_e45f65660aead742c029f16b52d32f16544b4d429e4d63659c39798526603712_prof);

    }

    // line 103
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_742a2a680654199893e0c19c2c243313322db3f0f48d7572bebeff08f10b1465 = $this->env->getExtension("native_profiler");
        $__internal_742a2a680654199893e0c19c2c243313322db3f0f48d7572bebeff08f10b1465->enter($__internal_742a2a680654199893e0c19c2c243313322db3f0f48d7572bebeff08f10b1465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_742a2a680654199893e0c19c2c243313322db3f0f48d7572bebeff08f10b1465->leave($__internal_742a2a680654199893e0c19c2c243313322db3f0f48d7572bebeff08f10b1465_prof);

    }

    // line 107
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_18c9dddd2b9481e8234ebb2051e82941b7e16e0a91b6622fa8140dea9f7d0beb = $this->env->getExtension("native_profiler");
        $__internal_18c9dddd2b9481e8234ebb2051e82941b7e16e0a91b6622fa8140dea9f7d0beb->enter($__internal_18c9dddd2b9481e8234ebb2051e82941b7e16e0a91b6622fa8140dea9f7d0beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 108
        echo "            <header class=\"main-header\">
                ";
        // line 109
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 116
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 128
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 186
        echo "            </header>
        ";
        
        $__internal_18c9dddd2b9481e8234ebb2051e82941b7e16e0a91b6622fa8140dea9f7d0beb->leave($__internal_18c9dddd2b9481e8234ebb2051e82941b7e16e0a91b6622fa8140dea9f7d0beb_prof);

    }

    // line 109
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_7dac2fddad4ad35c1daa804fd926013417ae34720e2b056d30619ff21eea4cbe = $this->env->getExtension("native_profiler");
        $__internal_7dac2fddad4ad35c1daa804fd926013417ae34720e2b056d30619ff21eea4cbe->enter($__internal_7dac2fddad4ad35c1daa804fd926013417ae34720e2b056d30619ff21eea4cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 110
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_7dac2fddad4ad35c1daa804fd926013417ae34720e2b056d30619ff21eea4cbe->leave($__internal_7dac2fddad4ad35c1daa804fd926013417ae34720e2b056d30619ff21eea4cbe_prof);

    }

    // line 116
    public function block_logo($context, array $blocks = array())
    {
        $__internal_608b8fe31e3c57825eb768c24e7487b6db966a0a23a96a7be309c236543bbc44 = $this->env->getExtension("native_profiler");
        $__internal_608b8fe31e3c57825eb768c24e7487b6db966a0a23a96a7be309c236543bbc44->enter($__internal_608b8fe31e3c57825eb768c24e7487b6db966a0a23a96a7be309c236543bbc44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 117
        echo "                    ";
        ob_start();
        // line 118
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('routing')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 119
        if ((("single_image" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 120
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 122
        echo "                            ";
        if ((("single_text" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 123
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 125
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 127
        echo "                ";
        
        $__internal_608b8fe31e3c57825eb768c24e7487b6db966a0a23a96a7be309c236543bbc44->leave($__internal_608b8fe31e3c57825eb768c24e7487b6db966a0a23a96a7be309c236543bbc44_prof);

    }

    // line 128
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_caa88383232d5b8deedc367d1a58557a86ebd8c4f2efd02d1b2ed96b09c69e84 = $this->env->getExtension("native_profiler");
        $__internal_caa88383232d5b8deedc367d1a58557a86ebd8c4f2efd02d1b2ed96b09c69e84->enter($__internal_caa88383232d5b8deedc367d1a58557a86ebd8c4f2efd02d1b2ed96b09c69e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 129
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 135
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 162
        echo "                        </div>

                        ";
        // line 164
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 184
        echo "                    </nav>
                ";
        
        $__internal_caa88383232d5b8deedc367d1a58557a86ebd8c4f2efd02d1b2ed96b09c69e84->leave($__internal_caa88383232d5b8deedc367d1a58557a86ebd8c4f2efd02d1b2ed96b09c69e84_prof);

    }

    // line 135
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_261180b0c5af8eb5cb78c994ef2877f2ddffd0c2c0af7d44d7b902af19e12509 = $this->env->getExtension("native_profiler");
        $__internal_261180b0c5af8eb5cb78c994ef2877f2ddffd0c2c0af7d44d7b902af19e12509->enter($__internal_261180b0c5af8eb5cb78c994ef2877f2ddffd0c2c0af7d44d7b902af19e12509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 136
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 137
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 138
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 139
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 140
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 141
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 142
                        echo "                                                        ";
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 143
                            echo "                                                            <li>
                                                                ";
                            // line 144
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 145
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">";
                                echo $this->getAttribute($context["menu"], "label", array());
                                echo "</a>
                                                                ";
                            } else {
                                // line 147
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 149
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 151
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 153
                        echo "                                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 154
                    echo "                                                ";
                }
                // line 155
                echo "                                            ";
            } else {
                // line 156
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 158
            echo "                                        </ol>
                                    ";
        }
        // line 160
        echo "                                </div>
                            ";
        
        $__internal_261180b0c5af8eb5cb78c994ef2877f2ddffd0c2c0af7d44d7b902af19e12509->leave($__internal_261180b0c5af8eb5cb78c994ef2877f2ddffd0c2c0af7d44d7b902af19e12509_prof);

    }

    // line 164
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_995bf3635b9a7b6a57fe8e91376988f078a58170690909e88c7e3329016c6757 = $this->env->getExtension("native_profiler");
        $__internal_995bf3635b9a7b6a57fe8e91376988f078a58170690909e88c7e3329016c6757->enter($__internal_995bf3635b9a7b6a57fe8e91376988f078a58170690909e88c7e3329016c6757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 165
        echo "                            <div class=\"navbar-custom-menu\">
                                <ul class=\"nav navbar-nav\">
                                    <li class=\"dropdown\">
                                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                            <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                        </a>
                                        ";
        // line 171
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "@SonataAdmin/standard_layout.html.twig", 171)->display($context);
        // line 172
        echo "                                    </li>
                                    <li class=\"dropdown user-menu\">
                                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                            <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu dropdown-user\">
                                            ";
        // line 178
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "@SonataAdmin/standard_layout.html.twig", 178)->display($context);
        // line 179
        echo "                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        ";
        
        $__internal_995bf3635b9a7b6a57fe8e91376988f078a58170690909e88c7e3329016c6757->leave($__internal_995bf3635b9a7b6a57fe8e91376988f078a58170690909e88c7e3329016c6757_prof);

    }

    // line 189
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_f37ab55784d3d6d98a2615077998788b21acaa8db61d2e4a3001d5abc42ba360 = $this->env->getExtension("native_profiler");
        $__internal_f37ab55784d3d6d98a2615077998788b21acaa8db61d2e4a3001d5abc42ba360->enter($__internal_f37ab55784d3d6d98a2615077998788b21acaa8db61d2e4a3001d5abc42ba360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 190
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 226
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 228
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 325
        echo "            </div>
        ";
        
        $__internal_f37ab55784d3d6d98a2615077998788b21acaa8db61d2e4a3001d5abc42ba360->leave($__internal_f37ab55784d3d6d98a2615077998788b21acaa8db61d2e4a3001d5abc42ba360_prof);

    }

    // line 190
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_4d66a0eea951da96ef222921ab43dd0a202a107f84fd3610ce933988e77e7eca = $this->env->getExtension("native_profiler");
        $__internal_4d66a0eea951da96ef222921ab43dd0a202a107f84fd3610ce933988e77e7eca->enter($__internal_4d66a0eea951da96ef222921ab43dd0a202a107f84fd3610ce933988e77e7eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 191
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 193
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 223
        echo "                    </section>
                </aside>
            ";
        
        $__internal_4d66a0eea951da96ef222921ab43dd0a202a107f84fd3610ce933988e77e7eca->leave($__internal_4d66a0eea951da96ef222921ab43dd0a202a107f84fd3610ce933988e77e7eca_prof);

    }

    // line 193
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_a852e94dfa273403b894ae5f5afb778983c0a92dbd3c1c5af2eec24059572f80 = $this->env->getExtension("native_profiler");
        $__internal_a852e94dfa273403b894ae5f5afb778983c0a92dbd3c1c5af2eec24059572f80->enter($__internal_a852e94dfa273403b894ae5f5afb778983c0a92dbd3c1c5af2eec24059572f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 194
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 208
        echo "
                            ";
        // line 209
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 210
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 215
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 222
        echo "                        ";
        
        $__internal_a852e94dfa273403b894ae5f5afb778983c0a92dbd3c1c5af2eec24059572f80->leave($__internal_a852e94dfa273403b894ae5f5afb778983c0a92dbd3c1c5af2eec24059572f80_prof);

    }

    // line 194
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_a0b913c9332304e8ece6fcba4ca3748873a465bd123c58eff56b02d65e5ee6e7 = $this->env->getExtension("native_profiler");
        $__internal_a0b913c9332304e8ece6fcba4ca3748873a465bd123c58eff56b02d65e5ee6e7->enter($__internal_a0b913c9332304e8ece6fcba4ca3748873a465bd123c58eff56b02d65e5ee6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 195
        echo "                                ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 196
            echo "                                    <form action=\"";
            echo $this->env->getExtension('routing')->getPath("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                        <div class=\"input-group custom-search-form\">
                                            <input type=\"text\" name=\"q\" value=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-flat\" type=\"submit\">
                                                        <i class=\"fa fa-search\"></i>
                                                    </button>
                                                </span>
                                        </div>
                                    </form>
                                ";
        }
        // line 207
        echo "                            ";
        
        $__internal_a0b913c9332304e8ece6fcba4ca3748873a465bd123c58eff56b02d65e5ee6e7->leave($__internal_a0b913c9332304e8ece6fcba4ca3748873a465bd123c58eff56b02d65e5ee6e7_prof);

    }

    // line 209
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_d2e77cb45e329d25fd2794d3f26f1e891ee4531b391e5368f8d7cb204b37a2e7 = $this->env->getExtension("native_profiler");
        $__internal_d2e77cb45e329d25fd2794d3f26f1e891ee4531b391e5368f8d7cb204b37a2e7->enter($__internal_d2e77cb45e329d25fd2794d3f26f1e891ee4531b391e5368f8d7cb204b37a2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_d2e77cb45e329d25fd2794d3f26f1e891ee4531b391e5368f8d7cb204b37a2e7->leave($__internal_d2e77cb45e329d25fd2794d3f26f1e891ee4531b391e5368f8d7cb204b37a2e7_prof);

    }

    // line 210
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_7fa89eb37d2b7064d266e0860e37ab8d2926a7dc4889e4cba025782bfc12d0ca = $this->env->getExtension("native_profiler");
        $__internal_7fa89eb37d2b7064d266e0860e37ab8d2926a7dc4889e4cba025782bfc12d0ca->enter($__internal_7fa89eb37d2b7064d266e0860e37ab8d2926a7dc4889e4cba025782bfc12d0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 211
        echo "                                ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 212
            echo "                                    ";
            echo $this->env->getExtension('knp_menu')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
            echo "
                                ";
        }
        // line 214
        echo "                            ";
        
        $__internal_7fa89eb37d2b7064d266e0860e37ab8d2926a7dc4889e4cba025782bfc12d0ca->leave($__internal_7fa89eb37d2b7064d266e0860e37ab8d2926a7dc4889e4cba025782bfc12d0ca_prof);

    }

    // line 215
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_070ecf31daa95bb5babd37a4b4e10a3a3e27009f95124c24a38270f9cfbbaf87 = $this->env->getExtension("native_profiler");
        $__internal_070ecf31daa95bb5babd37a4b4e10a3a3e27009f95124c24a38270f9cfbbaf87->enter($__internal_070ecf31daa95bb5babd37a4b4e10a3a3e27009f95124c24a38270f9cfbbaf87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 216
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 217
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 220
        echo "                                </p>
                            ";
        
        $__internal_070ecf31daa95bb5babd37a4b4e10a3a3e27009f95124c24a38270f9cfbbaf87->leave($__internal_070ecf31daa95bb5babd37a4b4e10a3a3e27009f95124c24a38270f9cfbbaf87_prof);

    }

    // line 217
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_a8f3c95b884f1d0ced1a734eadf59b5df53b54bfc3ce1cde2de0fb88340aa0ba = $this->env->getExtension("native_profiler");
        $__internal_a8f3c95b884f1d0ced1a734eadf59b5df53b54bfc3ce1cde2de0fb88340aa0ba->enter($__internal_a8f3c95b884f1d0ced1a734eadf59b5df53b54bfc3ce1cde2de0fb88340aa0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 218
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_a8f3c95b884f1d0ced1a734eadf59b5df53b54bfc3ce1cde2de0fb88340aa0ba->leave($__internal_a8f3c95b884f1d0ced1a734eadf59b5df53b54bfc3ce1cde2de0fb88340aa0ba_prof);

    }

    // line 228
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_23e70fc02af84461776ba932f9c2565075a3c66c2d64ed0b8811168af1c4ab80 = $this->env->getExtension("native_profiler");
        $__internal_23e70fc02af84461776ba932f9c2565075a3c66c2d64ed0b8811168af1c4ab80->enter($__internal_23e70fc02af84461776ba932f9c2565075a3c66c2d64ed0b8811168af1c4ab80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 229
        echo "                    <section class=\"content-header\">

                        ";
        // line 231
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 285
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 288
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 323
        echo "                    </section>
                ";
        
        $__internal_23e70fc02af84461776ba932f9c2565075a3c66c2d64ed0b8811168af1c4ab80->leave($__internal_23e70fc02af84461776ba932f9c2565075a3c66c2d64ed0b8811168af1c4ab80_prof);

    }

    // line 231
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_adb507b69062d27e0a5912accc25b44feb090c1000279caf083f008b9546823d = $this->env->getExtension("native_profiler");
        $__internal_adb507b69062d27e0a5912accc25b44feb090c1000279caf083f008b9546823d->enter($__internal_adb507b69062d27e0a5912accc25b44feb090c1000279caf083f008b9546823d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 232
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 284
        echo "                        ";
        
        $__internal_adb507b69062d27e0a5912accc25b44feb090c1000279caf083f008b9546823d->leave($__internal_adb507b69062d27e0a5912accc25b44feb090c1000279caf083f008b9546823d_prof);

    }

    // line 232
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_acf81fa5eb758008ce6ff7f65ceb6bca843d7bb9480cdb99807faa33eec93467 = $this->env->getExtension("native_profiler");
        $__internal_acf81fa5eb758008ce6ff7f65ceb6bca843d7bb9480cdb99807faa33eec93467->enter($__internal_acf81fa5eb758008ce6ff7f65ceb6bca843d7bb9480cdb99807faa33eec93467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 233
        echo "                                ";
        if ((( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")))) ||  !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"))))) {
            // line 234
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 236
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 243
            echo "
                                            <div class=\"navbar-collapse\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 246
            if ( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) {
                // line 247
                echo "                                                        ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                    ";
            }
            // line 249
            echo "                                                </div>

                                                ";
            // line 251
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 252
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 253
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 254
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 256
                echo "                                                    </div>
                                                ";
            }
            // line 258
            echo "                                                
                                                ";
            // line 259
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 275
            echo "
                                                ";
            // line 276
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions")))) {
                // line 277
                echo "                                                    ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"));
                echo "
                                                ";
            }
            // line 279
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 283
        echo "                            ";
        
        $__internal_acf81fa5eb758008ce6ff7f65ceb6bca843d7bb9480cdb99807faa33eec93467->leave($__internal_acf81fa5eb758008ce6ff7f65ceb6bca843d7bb9480cdb99807faa33eec93467_prof);

    }

    // line 236
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_1ad6b298055fae9145a8f849caa666c8e0fe88ec8dd4cde9a1c0cadabe269242 = $this->env->getExtension("native_profiler");
        $__internal_1ad6b298055fae9145a8f849caa666c8e0fe88ec8dd4cde9a1c0cadabe269242->enter($__internal_1ad6b298055fae9145a8f849caa666c8e0fe88ec8dd4cde9a1c0cadabe269242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 237
        echo "                                                ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title")))) {
            // line 238
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 239
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 242
        echo "                                            ";
        
        $__internal_1ad6b298055fae9145a8f849caa666c8e0fe88ec8dd4cde9a1c0cadabe269242->leave($__internal_1ad6b298055fae9145a8f849caa666c8e0fe88ec8dd4cde9a1c0cadabe269242_prof);

    }

    // line 259
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_4e34b1a2c3760a6c2fa91ada468b7655996718b08239c1f6240a2627b6f2e223 = $this->env->getExtension("native_profiler");
        $__internal_4e34b1a2c3760a6c2fa91ada468b7655996718b08239c1f6240a2627b6f2e223->enter($__internal_4e34b1a2c3760a6c2fa91ada468b7655996718b08239c1f6240a2627b6f2e223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 260
        echo "                                                    ";
        if ( !twig_test_empty(trim(twig_replace_filter((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
            // line 261
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 262
            if ((twig_length_filter($this->env, twig_split_filter($this->env, (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), "</a>")) > 2)) {
                // line 263
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 264
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 266
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 270
                echo "                                                            ";
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                        ";
            }
            // line 272
            echo "                                                        </ul>
                                                    ";
        }
        // line 274
        echo "                                                ";
        
        $__internal_4e34b1a2c3760a6c2fa91ada468b7655996718b08239c1f6240a2627b6f2e223->leave($__internal_4e34b1a2c3760a6c2fa91ada468b7655996718b08239c1f6240a2627b6f2e223_prof);

    }

    // line 288
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_3b04954d78705c0239ade54786ef863d59a87de34dbeb088cb2aeb2664d46390 = $this->env->getExtension("native_profiler");
        $__internal_3b04954d78705c0239ade54786ef863d59a87de34dbeb088cb2aeb2664d46390->enter($__internal_3b04954d78705c0239ade54786ef863d59a87de34dbeb088cb2aeb2664d46390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 289
        echo "
                            ";
        // line 290
        $this->displayBlock('notice', $context, $blocks);
        // line 293
        echo "
                            ";
        // line 294
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 295
            echo "                                <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 297
        echo "
                            ";
        // line 298
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 299
            echo "                                <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 301
        echo "
                            ";
        // line 302
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 303
            echo "                                <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 305
        echo "
                            ";
        // line 306
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 307
            echo "                                <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 309
        echo "
                            ";
        // line 310
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 311
            echo "                                ";
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 312
                echo "                                    <div class=\"row\">
                                        ";
                // line 313
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                                    </div>
                                ";
            }
            // line 316
            echo "
                                <div class=\"row\">
                                    ";
            // line 318
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                </div>

                            ";
        }
        // line 322
        echo "                        ";
        
        $__internal_3b04954d78705c0239ade54786ef863d59a87de34dbeb088cb2aeb2664d46390->leave($__internal_3b04954d78705c0239ade54786ef863d59a87de34dbeb088cb2aeb2664d46390_prof);

    }

    // line 290
    public function block_notice($context, array $blocks = array())
    {
        $__internal_22296dad4d4ddc3e2a65327d789542f115a35818d87479c5dbd35fda2cc4bffe = $this->env->getExtension("native_profiler");
        $__internal_22296dad4d4ddc3e2a65327d789542f115a35818d87479c5dbd35fda2cc4bffe->enter($__internal_22296dad4d4ddc3e2a65327d789542f115a35818d87479c5dbd35fda2cc4bffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 291
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "@SonataAdmin/standard_layout.html.twig", 291)->display($context);
        // line 292
        echo "                            ";
        
        $__internal_22296dad4d4ddc3e2a65327d789542f115a35818d87479c5dbd35fda2cc4bffe->leave($__internal_22296dad4d4ddc3e2a65327d789542f115a35818d87479c5dbd35fda2cc4bffe_prof);

    }

    // line 330
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_0aa7564d29916d818ff8c7b2a0e576f0c12736f76c9854f83556247fd4d7a7fd = $this->env->getExtension("native_profiler");
        $__internal_0aa7564d29916d818ff8c7b2a0e576f0c12736f76c9854f83556247fd4d7a7fd->enter($__internal_0aa7564d29916d818ff8c7b2a0e576f0c12736f76c9854f83556247fd4d7a7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 331
        echo "            ";
        // line 332
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_0aa7564d29916d818ff8c7b2a0e576f0c12736f76c9854f83556247fd4d7a7fd->leave($__internal_0aa7564d29916d818ff8c7b2a0e576f0c12736f76c9854f83556247fd4d7a7fd_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1171 => 332,  1169 => 331,  1163 => 330,  1156 => 292,  1153 => 291,  1147 => 290,  1140 => 322,  1133 => 318,  1129 => 316,  1123 => 313,  1120 => 312,  1117 => 311,  1115 => 310,  1112 => 309,  1106 => 307,  1104 => 306,  1101 => 305,  1095 => 303,  1093 => 302,  1090 => 301,  1084 => 299,  1082 => 298,  1079 => 297,  1073 => 295,  1071 => 294,  1068 => 293,  1066 => 290,  1063 => 289,  1057 => 288,  1050 => 274,  1046 => 272,  1040 => 270,  1033 => 266,  1028 => 264,  1025 => 263,  1023 => 262,  1020 => 261,  1017 => 260,  1011 => 259,  1004 => 242,  998 => 239,  995 => 238,  992 => 237,  986 => 236,  979 => 283,  973 => 279,  967 => 277,  965 => 276,  962 => 275,  960 => 259,  957 => 258,  953 => 256,  938 => 254,  934 => 253,  931 => 252,  929 => 251,  925 => 249,  919 => 247,  917 => 246,  912 => 243,  910 => 236,  906 => 234,  903 => 233,  897 => 232,  890 => 284,  887 => 232,  881 => 231,  873 => 323,  871 => 288,  866 => 285,  864 => 231,  860 => 229,  854 => 228,  846 => 218,  840 => 217,  832 => 220,  830 => 217,  827 => 216,  821 => 215,  814 => 214,  808 => 212,  805 => 211,  799 => 210,  787 => 209,  780 => 207,  766 => 198,  760 => 196,  757 => 195,  751 => 194,  744 => 222,  741 => 215,  738 => 210,  736 => 209,  733 => 208,  730 => 194,  724 => 193,  715 => 223,  713 => 193,  709 => 191,  703 => 190,  695 => 325,  693 => 228,  689 => 226,  686 => 190,  680 => 189,  669 => 179,  667 => 178,  659 => 172,  657 => 171,  649 => 165,  643 => 164,  635 => 160,  631 => 158,  625 => 156,  622 => 155,  619 => 154,  605 => 153,  599 => 151,  595 => 149,  589 => 147,  581 => 145,  579 => 144,  576 => 143,  573 => 142,  555 => 141,  552 => 140,  550 => 139,  547 => 138,  545 => 137,  542 => 136,  536 => 135,  528 => 184,  526 => 164,  522 => 162,  520 => 135,  512 => 129,  506 => 128,  499 => 127,  495 => 125,  489 => 123,  486 => 122,  478 => 120,  476 => 119,  471 => 118,  468 => 117,  462 => 116,  451 => 112,  447 => 110,  441 => 109,  433 => 186,  430 => 128,  427 => 116,  425 => 109,  422 => 108,  416 => 107,  404 => 103,  397 => 100,  394 => 99,  391 => 98,  377 => 97,  372 => 95,  369 => 94,  365 => 92,  362 => 91,  359 => 90,  342 => 89,  339 => 88,  336 => 87,  330 => 85,  328 => 84,  322 => 82,  316 => 81,  309 => 78,  306 => 77,  300 => 75,  297 => 74,  294 => 72,  289 => 71,  286 => 70,  283 => 68,  277 => 66,  274 => 65,  272 => 64,  270 => 63,  267 => 62,  258 => 60,  254 => 59,  240 => 48,  236 => 46,  230 => 45,  222 => 44,  214 => 43,  206 => 42,  202 => 40,  196 => 39,  189 => 37,  180 => 35,  175 => 34,  169 => 33,  159 => 28,  153 => 27,  141 => 25,  131 => 337,  128 => 336,  125 => 330,  123 => 329,  119 => 327,  117 => 189,  114 => 188,  112 => 107,  105 => 103,  101 => 101,  99 => 81,  95 => 79,  93 => 39,  90 => 38,  88 => 33,  85 => 32,  83 => 27,  78 => 25,  74 => 23,  72 => 22,  70 => 21,  68 => 20,  66 => 19,  64 => 18,  62 => 17,  60 => 16,  58 => 15,  56 => 14,  54 => 13,  52 => 12,  50 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* {% set _preview              = block('preview') %}*/
/* {% set _form                 = block('form') %}*/
/* {% set _show                 = block('show') %}*/
/* {% set _list_table           = block('list_table') %}*/
/* {% set _list_filters         = block('list_filters') %}*/
/* {% set _tab_menu             = block('tab_menu') %}*/
/* {% set _content              = block('content') %}*/
/* {% set _title                = block('title') %}*/
/* {% set _breadcrumb           = block('breadcrumb') %}*/
/* {% set _actions              = block('actions') %}*/
/* {% set _navbar_title         = block('navbar_title') %}*/
/* {% set _list_filters_actions = block('list_filters_actions') %}*/
/* */
/* <!DOCTYPE html>*/
/* <html {% block html_attributes %}class="no-js"{% endblock %}>*/
/*     <head>*/
/*         {% block meta_tags %}*/
/*             <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*             <meta charset="UTF-8">*/
/*             <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>*/
/*         {% endblock %}*/
/* */
/*         {% block stylesheets %}*/
/*             {% for stylesheet in sonata_admin.adminPool.getOption('stylesheets', []) %}*/
/*                     <link rel="stylesheet" href="{{ asset(stylesheet) }}">*/
/*             {% endfor %}*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             <script>*/
/*                 window.SONATA_CONFIG = {*/
/*                     CONFIRM_EXIT: {% if sonata_admin.adminPool.getOption('confirm_exit') %}true{% else %}false{% endif %},*/
/*                     USE_SELECT2: {% if sonata_admin.adminPool.getOption('use_select2') %}true{% else %}false{% endif %},*/
/*                     USE_ICHECK: {% if sonata_admin.adminPool.getOption('use_icheck') %}true{% else %}false{% endif %},*/
/*                     USE_STICKYFORMS: {% if sonata_admin.adminPool.getOption('use_stickyforms') %}true{% else %}false{% endif %}*/
/*                 };*/
/*                 window.SONATA_TRANSLATIONS = {*/
/*                     CONFIRM_EXIT:  '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'*/
/*                 };*/
/* */
/*                 // http://getbootstrap.com/getting-started/#support-ie10-width*/
/*                 if (navigator.userAgent.match(/IEMobile\/10\.0/)) {*/
/*                     var msViewportStyle = document.createElement('style');*/
/*                     msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));*/
/*                     document.querySelector('head').appendChild(msViewportStyle);*/
/*                 }*/
/*             </script>*/
/* */
/*             {% for javascript in sonata_admin.adminPool.getOption('javascripts', []) %}*/
/*                 <script src="{{ asset(javascript) }}"></script>*/
/*             {% endfor %}*/
/* */
/*             {% set locale = app.request.locale %}*/
/*             {# localize moment #}*/
/*             {% if locale[:2] != 'en' %}*/
/*                 <script src="{{ asset('bundles/sonatacore/vendor/moment/locale/' ~ locale|replace({'_':'-'}) ~ '.js') }}"></script>*/
/*             {% endif %}*/
/* */
/*             {# localize select2 #}*/
/*             {% if sonata_admin.adminPool.getOption('use_select2') %}*/
/*                 {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}*/
/* */
/*                 {# omit default EN locale #}*/
/*                 {% if locale[:2] != 'en' %}*/
/*                     <script src="{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}"></script>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         {% endblock %}*/
/* */
/*         <title>*/
/*         {% block sonata_head_title %}*/
/*             {{ 'Admin'|trans({}, 'SonataAdminBundle') }}*/
/* */
/*             {% if _title is not empty %}*/
/*                 {{ _title|raw }}*/
/*             {% else %}*/
/*                 {% if action is defined %}*/
/*                     -*/
/*                     {% for menu in admin.breadcrumbs(action) %}*/
/*                         {% if not loop.first %}*/
/*                             {%  if loop.index != 2 %}*/
/*                                 &gt;*/
/*                             {% endif %}*/
/* */
/*                             {{ menu.label }}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*             {% endif%}*/
/*         {% endblock %}*/
/*         </title>*/
/*     </head>*/
/*     <body {% block body_attributes %}class="sonata-bc skin-black fixed"{% endblock %}>*/
/* */
/*     <div class="wrapper">*/
/* */
/*         {% block sonata_header %}*/
/*             <header class="main-header">*/
/*                 {% block sonata_header_noscript_warning %}*/
/*                     <noscript>*/
/*                         <div class="noscript-warning">*/
/*                             {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}*/
/*                         </div>*/
/*                     </noscript>*/
/*                 {% endblock %}*/
/*                 {% block logo %}*/
/*                     {% spaceless %}*/
/*                         <a class="logo" href="{{ path('sonata_admin_dashboard') }}">*/
/*                             {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}*/
/*                                 <img src="{{ asset(sonata_admin.adminPool.titlelogo) }}" alt="{{ sonata_admin.adminPool.title }}">*/
/*                             {% endif %}*/
/*                             {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}*/
/*                                 <span>{{ sonata_admin.adminPool.title }}</span>*/
/*                             {% endif %}*/
/*                         </a>*/
/*                     {% endspaceless %}*/
/*                 {% endblock %}*/
/*                 {% block sonata_nav %}*/
/*                     <nav class="navbar navbar-static-top" role="navigation">*/
/*                         <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                         </a>*/
/* */
/*                         <div class="navbar-left">*/
/*                             {% block sonata_breadcrumb %}*/
/*                                 <div class="hidden-xs">*/
/*                                     {% if _breadcrumb is not empty or action is defined %}*/
/*                                         <ol class="nav navbar-top-links breadcrumb">*/
/*                                             {% if _breadcrumb is empty %}*/
/*                                                 {% if action is defined %}*/
/*                                                     {% for menu in admin.breadcrumbs(action) %}*/
/*                                                         {% if not loop.last  %}*/
/*                                                             <li>*/
/*                                                                 {% if menu.uri is not empty %}*/
/*                                                                     <a href="{{ menu.uri }}">{{ menu.label|raw }}</a>*/
/*                                                                 {% else %}*/
/*                                                                     {{ menu.label }}*/
/*                                                                 {% endif %}*/
/*                                                             </li>*/
/*                                                         {% else %}*/
/*                                                             <li class="active"><span>{{ menu.label }}</span></li>*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 {% endif %}*/
/*                                             {% else %}*/
/*                                                 {{ _breadcrumb|raw }}*/
/*                                             {% endif %}*/
/*                                         </ol>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                             {% endblock sonata_breadcrumb %}*/
/*                         </div>*/
/* */
/*                         {% block sonata_top_nav_menu %}*/
/*                             <div class="navbar-custom-menu">*/
/*                                 <ul class="nav navbar-nav">*/
/*                                     <li class="dropdown">*/
/*                                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                             <i class="fa fa-plus-square fa-fw"></i> <i class="fa fa-caret-down"></i>*/
/*                                         </a>*/
/*                                         {% include sonata_admin.adminPool.getTemplate('add_block') %}*/
/*                                     </li>*/
/*                                     <li class="dropdown user-menu">*/
/*                                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                             <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>*/
/*                                         </a>*/
/*                                         <ul class="dropdown-menu dropdown-user">*/
/*                                             {% include sonata_admin.adminPool.getTemplate('user_block') %}*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         {% endblock %}*/
/*                     </nav>*/
/*                 {% endblock sonata_nav %}*/
/*             </header>*/
/*         {% endblock sonata_header %}*/
/* */
/*         {% block sonata_wrapper %}*/
/*             {% block sonata_left_side %}*/
/*                 <aside class="main-sidebar">*/
/*                     <section class="sidebar">*/
/*                         {% block sonata_side_nav %}*/
/*                             {% block sonata_sidebar_search %}*/
/*                                 {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}*/
/*                                     <form action="{{ path('sonata_admin_search') }}" method="GET" class="sidebar-form" role="search">*/
/*                                         <div class="input-group custom-search-form">*/
/*                                             <input type="text" name="q" value="{{ app.request.get('q') }}" class="form-control" placeholder="{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}">*/
/*                                                 <span class="input-group-btn">*/
/*                                                     <button class="btn btn-flat" type="submit">*/
/*                                                         <i class="fa fa-search"></i>*/
/*                                                     </button>*/
/*                                                 </span>*/
/*                                         </div>*/
/*                                     </form>*/
/*                                 {% endif %}*/
/*                             {% endblock sonata_sidebar_search %}*/
/* */
/*                             {% block side_bar_before_nav %} {% endblock %}*/
/*                             {% block side_bar_nav %}*/
/*                                 {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}*/
/*                                     {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}*/
/*                                 {% endif %}*/
/*                             {% endblock side_bar_nav %}*/
/*                             {% block side_bar_after_nav %}*/
/*                                 <p class="text-center small" style="border-top: 1px solid #444444; padding-top: 10px">*/
/*                                     {% block side_bar_after_nav_content %}*/
/*                                         <a href="https://sonata-project.org" rel="noreferrer" target="_blank">sonata project</a>*/
/*                                     {% endblock %}*/
/*                                 </p>*/
/*                             {% endblock %}*/
/*                         {% endblock sonata_side_nav %}*/
/*                     </section>*/
/*                 </aside>*/
/*             {% endblock sonata_left_side %}*/
/* */
/*             <div class="content-wrapper">*/
/*                 {% block sonata_page_content %}*/
/*                     <section class="content-header">*/
/* */
/*                         {% block sonata_page_content_header %}*/
/*                             {% block sonata_page_content_nav %}*/
/*                                 {% if _tab_menu is not empty or _actions is not empty or _list_filters_actions is not empty %}*/
/*                                     <nav class="navbar navbar-default" role="navigation">*/
/*                                         <div class="container-fluid">*/
/*                                             {% block tab_menu_navbar_header %}*/
/*                                                 {% if _navbar_title is not empty %}*/
/*                                                     <div class="navbar-header">*/
/*                                                         <a class="navbar-brand" href="#">{{ _navbar_title|raw }}</a>*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                             {% endblock %}*/
/* */
/*                                             <div class="navbar-collapse">*/
/*                                                 <div class="navbar-left">*/
/*                                                     {% if _tab_menu is not empty %}*/
/*                                                         {{ _tab_menu|raw }}*/
/*                                                     {% endif %}*/
/*                                                 </div>*/
/* */
/*                                                 {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}*/
/*                                                     <div class="nav navbar-right btn-group">*/
/*                                                         {% for mode, settings in admin.listModes %}*/
/*                                                             <a href="{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}" class="btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}"><i class="{{ settings.class }}"></i></a>*/
/*                                                         {% endfor %}*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                                 */
/*                                                 {% block sonata_admin_content_actions_wrappers %}*/
/*                                                     {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}*/
/*                                                         <ul class="nav navbar-nav navbar-right">*/
/*                                                         {% if _actions|split('</a>')|length > 2 %}*/
/*                                                             <li class="dropdown sonata-actions">*/
/*                                                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class="caret"></b></a>*/
/*                                                                 <ul class="dropdown-menu" role="menu">*/
/*                                                                     {{ _actions|raw }}*/
/*                                                                 </ul>*/
/*                                                             </li>*/
/*                                                         {% else %}*/
/*                                                             {{ _actions|raw }}*/
/*                                                         {% endif %}*/
/*                                                         </ul>*/
/*                                                     {% endif %}*/
/*                                                 {% endblock sonata_admin_content_actions_wrappers %}*/
/* */
/*                                                 {% if _list_filters_actions is not empty %}*/
/*                                                     {{ _list_filters_actions|raw }}*/
/*                                                 {% endif %}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </nav>*/
/*                                 {% endif %}*/
/*                             {% endblock sonata_page_content_nav %}*/
/*                         {% endblock sonata_page_content_header %}*/
/*                     </section>*/
/* */
/*                     <section class="content">*/
/*                         {% block sonata_admin_content %}*/
/* */
/*                             {% block notice %}*/
/*                                 {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}*/
/*                             {% endblock notice %}*/
/* */
/*                             {% if _preview is not empty %}*/
/*                                 <div class="sonata-ba-preview">{{ _preview|raw }}</div>*/
/*                             {% endif %}*/
/* */
/*                             {% if _content is not empty %}*/
/*                                 <div class="sonata-ba-content">{{ _content|raw }}</div>*/
/*                             {% endif %}*/
/* */
/*                             {% if _show is not empty %}*/
/*                                 <div class="sonata-ba-show">{{ _show|raw }}</div>*/
/*                             {% endif %}*/
/* */
/*                             {% if _form is not empty %}*/
/*                                 <div class="sonata-ba-form">{{ _form|raw }}</div>*/
/*                             {% endif %}*/
/* */
/*                             {% if _list_table is not empty or _list_filters is not empty %}*/
/*                                 {% if _list_filters|trim %}*/
/*                                     <div class="row">*/
/*                                         {{ _list_filters|raw }}*/
/*                                     </div>*/
/*                                 {% endif %}*/
/* */
/*                                 <div class="row">*/
/*                                     {{ _list_table|raw }}*/
/*                                 </div>*/
/* */
/*                             {% endif %}*/
/*                         {% endblock sonata_admin_content %}*/
/*                     </section>*/
/*                 {% endblock sonata_page_content %}*/
/*             </div>*/
/*         {% endblock sonata_wrapper %}*/
/*     </div>*/
/* */
/*     {% if sonata_admin.adminPool.getOption('use_bootlint') %}*/
/*         {% block bootlint %}*/
/*             {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}*/
/*             <script type="text/javascript">*/
/*                 javascript:(function(){var s=document.createElement("script");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src="https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js";document.body.appendChild(s)})();*/
/*             </script>*/
/*         {% endblock %}*/
/*     {% endif %}*/
/* */
/*     </body>*/
/* </html>*/
/* */
