<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_caf6cae7cbe9e93384ff3a308470f6aab75408a3eac72a433dc0bc2fc4f63125 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SonataAdminBundle:Form:form_admin_fields.html.twig", 12);
        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'sonata_help' => array($this, 'block_sonata_help'),
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'form_row' => array($this, 'block_form_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'sonata_type_native_collection_widget_row' => array($this, 'block_sonata_type_native_collection_widget_row'),
            'sonata_type_native_collection_widget' => array($this, 'block_sonata_type_native_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
            'sonata_type_model_autocomplete_widget' => array($this, 'block_sonata_type_model_autocomplete_widget'),
            'sonata_type_choice_field_mask_widget' => array($this, 'block_sonata_type_choice_field_mask_widget'),
            'sonata_type_choice_multiple_sortable' => array($this, 'block_sonata_type_choice_multiple_sortable'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5f0a8d89a671f029b6b7690cc842e622a9b033080b27178e98eeb8e3664f977 = $this->env->getExtension("native_profiler");
        $__internal_c5f0a8d89a671f029b6b7690cc842e622a9b033080b27178e98eeb8e3664f977->enter($__internal_c5f0a8d89a671f029b6b7690cc842e622a9b033080b27178e98eeb8e3664f977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:form_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5f0a8d89a671f029b6b7690cc842e622a9b033080b27178e98eeb8e3664f977->leave($__internal_c5f0a8d89a671f029b6b7690cc842e622a9b033080b27178e98eeb8e3664f977_prof);

    }

    // line 14
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_f7714efc4f7717c9d4f8b0ac2257ae4b07acb0837333101af9eb2987fd73e633 = $this->env->getExtension("native_profiler");
        $__internal_f7714efc4f7717c9d4f8b0ac2257ae4b07acb0837333101af9eb2987fd73e633->enter($__internal_f7714efc4f7717c9d4f8b0ac2257ae4b07acb0837333101af9eb2987fd73e633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 15
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 16
            echo "        ";
            if ( !$this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 17
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "                    <li><i class=\"fa fa-exclamation-circle\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </ul>
        ";
            // line 22
            if ( !$this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</div>";
            }
            // line 23
            echo "    ";
        }
        
        $__internal_f7714efc4f7717c9d4f8b0ac2257ae4b07acb0837333101af9eb2987fd73e633->leave($__internal_f7714efc4f7717c9d4f8b0ac2257ae4b07acb0837333101af9eb2987fd73e633_prof);

    }

    // line 26
    public function block_sonata_help($context, array $blocks = array())
    {
        $__internal_c559c5bd299510e16506817db9ad0a66f9246d7032177c8a1fd15981c677badd = $this->env->getExtension("native_profiler");
        $__internal_c559c5bd299510e16506817db9ad0a66f9246d7032177c8a1fd15981c677badd->enter($__internal_c559c5bd299510e16506817db9ad0a66f9246d7032177c8a1fd15981c677badd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_help"));

        // line 27
        ob_start();
        // line 28
        if ((array_key_exists("sonata_help", $context) && (isset($context["sonata_help"]) ? $context["sonata_help"] : $this->getContext($context, "sonata_help")))) {
            // line 29
            echo "    <span class=\"help-block sonata-ba-field-widget-help\">";
            echo (isset($context["sonata_help"]) ? $context["sonata_help"] : $this->getContext($context, "sonata_help"));
            echo "</span>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c559c5bd299510e16506817db9ad0a66f9246d7032177c8a1fd15981c677badd->leave($__internal_c559c5bd299510e16506817db9ad0a66f9246d7032177c8a1fd15981c677badd_prof);

    }

    // line 34
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_6ea6e3c946b0b7a8d17df9f4071d55f80a44e873b4499199d5fb8908d76ca297 = $this->env->getExtension("native_profiler");
        $__internal_6ea6e3c946b0b7a8d17df9f4071d55f80a44e873b4499199d5fb8908d76ca297->enter($__internal_6ea6e3c946b0b7a8d17df9f4071d55f80a44e873b4499199d5fb8908d76ca297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 35
        $this->displayParentBlock("form_widget", $context, $blocks);
        echo "
    ";
        // line 36
        $this->displayBlock("sonata_help", $context, $blocks);
        
        $__internal_6ea6e3c946b0b7a8d17df9f4071d55f80a44e873b4499199d5fb8908d76ca297->leave($__internal_6ea6e3c946b0b7a8d17df9f4071d55f80a44e873b4499199d5fb8908d76ca297_prof);

    }

    // line 39
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_738f28a6fc2268980da6badd35e8a43b4e02d03ab4a1295e23e59cf4c5069796 = $this->env->getExtension("native_profiler");
        $__internal_738f28a6fc2268980da6badd35e8a43b4e02d03ab4a1295e23e59cf4c5069796->enter($__internal_738f28a6fc2268980da6badd35e8a43b4e02d03ab4a1295e23e59cf4c5069796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 40
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 41
        echo "    ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "file")) {
            // line 42
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
            // line 43
            echo "    ";
        }
        // line 44
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_738f28a6fc2268980da6badd35e8a43b4e02d03ab4a1295e23e59cf4c5069796->leave($__internal_738f28a6fc2268980da6badd35e8a43b4e02d03ab4a1295e23e59cf4c5069796_prof);

    }

    // line 47
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_af49baa958f66a51cfd88bcf67fe7829430f686c57f118926e30abc8309200b2 = $this->env->getExtension("native_profiler");
        $__internal_af49baa958f66a51cfd88bcf67fe7829430f686c57f118926e30abc8309200b2->enter($__internal_af49baa958f66a51cfd88bcf67fe7829430f686c57f118926e30abc8309200b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 48
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 49
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
        
        $__internal_af49baa958f66a51cfd88bcf67fe7829430f686c57f118926e30abc8309200b2->leave($__internal_af49baa958f66a51cfd88bcf67fe7829430f686c57f118926e30abc8309200b2_prof);

    }

    // line 52
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_e664c870bfa498b141f0b800c120f0501c7789ea216a4cb5f3a4f0f97f3492c0 = $this->env->getExtension("native_profiler");
        $__internal_e664c870bfa498b141f0b800c120f0501c7789ea216a4cb5f3a4f0f97f3492c0->enter($__internal_e664c870bfa498b141f0b800c120f0501c7789ea216a4cb5f3a4f0f97f3492c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 53
        if (((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")) == "{{ widget }}")) {
            // line 54
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 56
            echo "        ";
            $context["currencySymbol"] = trim(twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")));
            // line 57
            echo "        ";
            if (preg_match("/^{{ widget }}/", (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")))) {
                // line 58
                echo "            <div class=\"input-group\">";
                // line 59
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 60
                echo "<span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, (isset($context["currencySymbol"]) ? $context["currencySymbol"] : $this->getContext($context, "currencySymbol")), "html", null, true);
                echo "</span>
            </div>
        ";
            } elseif (preg_match("/{{ widget }}\$/",             // line 62
(isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")))) {
                // line 63
                echo "            <div class=\"input-group\">
                <span class=\"input-group-addon\">";
                // line 64
                echo twig_escape_filter($this->env, (isset($context["currencySymbol"]) ? $context["currencySymbol"] : $this->getContext($context, "currencySymbol")), "html", null, true);
                echo "</span>";
                // line 65
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 66
                echo "</div>
        ";
            }
            // line 68
            echo "    ";
        }
        
        $__internal_e664c870bfa498b141f0b800c120f0501c7789ea216a4cb5f3a4f0f97f3492c0->leave($__internal_e664c870bfa498b141f0b800c120f0501c7789ea216a4cb5f3a4f0f97f3492c0_prof);

    }

    // line 71
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_f188a5acdfc27b93f1a14fe1a56884fb9c9478d0b838d1a1081a68284b2daef0 = $this->env->getExtension("native_profiler");
        $__internal_f188a5acdfc27b93f1a14fe1a56884fb9c9478d0b838d1a1081a68284b2daef0->enter($__internal_f188a5acdfc27b93f1a14fe1a56884fb9c9478d0b838d1a1081a68284b2daef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 72
        echo "    ";
        ob_start();
        // line 73
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 74
        echo "        <div class=\"input-group\">
            ";
        // line 75
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">%</span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f188a5acdfc27b93f1a14fe1a56884fb9c9478d0b838d1a1081a68284b2daef0->leave($__internal_f188a5acdfc27b93f1a14fe1a56884fb9c9478d0b838d1a1081a68284b2daef0_prof);

    }

    // line 81
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_e2d5d39e2477f2354307bd6cac2507310e70a9f2758f1e87866781ff9a0e637f = $this->env->getExtension("native_profiler");
        $__internal_e2d5d39e2477f2354307bd6cac2507310e70a9f2758f1e87866781ff9a0e637f->enter($__internal_e2d5d39e2477f2354307bd6cac2507310e70a9f2758f1e87866781ff9a0e637f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 82
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 83
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 84
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 86
            echo "<div class=\"checkbox\">";
            // line 87
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 88
            echo "</div>";
        }
        
        $__internal_e2d5d39e2477f2354307bd6cac2507310e70a9f2758f1e87866781ff9a0e637f->leave($__internal_e2d5d39e2477f2354307bd6cac2507310e70a9f2758f1e87866781ff9a0e637f_prof);

    }

    // line 92
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_1bab6652ac09e7c98ddf9fa7f9e1b16db053e11ff160d4d0fb943861cbc26b73 = $this->env->getExtension("native_profiler");
        $__internal_1bab6652ac09e7c98ddf9fa7f9e1b16db053e11ff160d4d0fb943861cbc26b73->enter($__internal_1bab6652ac09e7c98ddf9fa7f9e1b16db053e11ff160d4d0fb943861cbc26b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 93
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 94
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 95
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 97
            echo "<div class=\"radio\">";
            // line 98
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 99
            echo "</div>";
        }
        
        $__internal_1bab6652ac09e7c98ddf9fa7f9e1b16db053e11ff160d4d0fb943861cbc26b73->leave($__internal_1bab6652ac09e7c98ddf9fa7f9e1b16db053e11ff160d4d0fb943861cbc26b73_prof);

    }

    // line 104
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_026a3c78a092ca3b91313e3c91a47b3738f5c988ec00a2dfa20d6a5181c7574b = $this->env->getExtension("native_profiler");
        $__internal_026a3c78a092ca3b91313e3c91a47b3738f5c988ec00a2dfa20d6a5181c7574b->enter($__internal_026a3c78a092ca3b91313e3c91a47b3738f5c988ec00a2dfa20d6a5181c7574b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 105
        ob_start();
        // line 106
        echo "    ";
        if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "options", array()), "form_type", array(), "array") == "horizontal"))) {
            // line 107
            echo "        ";
            $context["label_class"] = "col-sm-3";
            // line 108
            echo "    ";
        }
        // line 109
        echo "
    ";
        // line 110
        $context["label_class"] = (((array_key_exists("label_class", $context)) ? (_twig_default_filter((isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")), "")) : ("")) . " control-label");
        // line 111
        echo "
    ";
        // line 112
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 113
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . (isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")))));
            // line 114
            echo "
        ";
            // line 115
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 116
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 117
                echo "        ";
            }
            // line 118
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 119
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 120
                echo "        ";
            }
            // line 121
            echo "
        ";
            // line 122
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 123
                if ((array_key_exists("label_format", $context) &&  !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format"))))) {
                    // line 124
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 125
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 126
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 129
                    $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 132
            echo "
        <label";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 134
            if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            } else {
                // line 137
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "trans", array(0 => (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "method"), "html", null, true);
                echo "
            ";
            }
            // line 139
            echo "        </label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_026a3c78a092ca3b91313e3c91a47b3738f5c988ec00a2dfa20d6a5181c7574b->leave($__internal_026a3c78a092ca3b91313e3c91a47b3738f5c988ec00a2dfa20d6a5181c7574b_prof);

    }

    // line 144
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_120a11c9d3c650387ea150e4180492f58b319354c71de0e1f29653ad03c7efba = $this->env->getExtension("native_profiler");
        $__internal_120a11c9d3c650387ea150e4180492f58b319354c71de0e1f29653ad03c7efba->enter($__internal_120a11c9d3c650387ea150e4180492f58b319354c71de0e1f29653ad03c7efba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 145
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_120a11c9d3c650387ea150e4180492f58b319354c71de0e1f29653ad03c7efba->leave($__internal_120a11c9d3c650387ea150e4180492f58b319354c71de0e1f29653ad03c7efba_prof);

    }

    // line 148
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_7c789e34aaf22410f0f1b120f55379b9f2156482c563f19de10cc90c88667e3b = $this->env->getExtension("native_profiler");
        $__internal_7c789e34aaf22410f0f1b120f55379b9f2156482c563f19de10cc90c88667e3b->enter($__internal_7c789e34aaf22410f0f1b120f55379b9f2156482c563f19de10cc90c88667e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 149
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_7c789e34aaf22410f0f1b120f55379b9f2156482c563f19de10cc90c88667e3b->leave($__internal_7c789e34aaf22410f0f1b120f55379b9f2156482c563f19de10cc90c88667e3b_prof);

    }

    // line 152
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_9300573b16991ba44534b3682cf1140bf48718c75310dfdca71e0b949715d9d4 = $this->env->getExtension("native_profiler");
        $__internal_9300573b16991ba44534b3682cf1140bf48718c75310dfdca71e0b949715d9d4->enter($__internal_9300573b16991ba44534b3682cf1140bf48718c75310dfdca71e0b949715d9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 153
        echo "    ";
        if ($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
            // line 154
            echo "        ";
            $context["translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array());
            // line 155
            echo "    ";
        }
        // line 156
        echo "    ";
        // line 157
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 158
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 159
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 160
                echo "        ";
            }
            // line 161
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 162
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 163
                echo "        ";
            }
            // line 164
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 165
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 166
                echo "        ";
            }
            // line 167
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 168
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            // line 169
            if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
                // line 170
                echo "<span class=\"control-label__text\">";
                // line 171
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                // line 172
                echo "</span>";
            }
            // line 174
            echo "</label>
    ";
        }
        
        $__internal_9300573b16991ba44534b3682cf1140bf48718c75310dfdca71e0b949715d9d4->leave($__internal_9300573b16991ba44534b3682cf1140bf48718c75310dfdca71e0b949715d9d4_prof);

    }

    // line 178
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_0082657144f0b648368db80136947c4aad35204cee5851af4506a10584d432c4 = $this->env->getExtension("native_profiler");
        $__internal_0082657144f0b648368db80136947c4aad35204cee5851af4506a10584d432c4->enter($__internal_0082657144f0b648368db80136947c4aad35204cee5851af4506a10584d432c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 179
        ob_start();
        // line 180
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " list-unstyled")));
        // line 181
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 183
            echo "        <li>
            ";
            // line 184
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 185
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0082657144f0b648368db80136947c4aad35204cee5851af4506a10584d432c4->leave($__internal_0082657144f0b648368db80136947c4aad35204cee5851af4506a10584d432c4_prof);

    }

    // line 191
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_a23a47b3aadc9731b2bda3983c437d496021bdf6bba3330192f6487680416d9e = $this->env->getExtension("native_profiler");
        $__internal_a23a47b3aadc9731b2bda3983c437d496021bdf6bba3330192f6487680416d9e->enter($__internal_a23a47b3aadc9731b2bda3983c437d496021bdf6bba3330192f6487680416d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 192
        ob_start();
        // line 193
        echo "    ";
        if ((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && array_key_exists("placeholder", $context)) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))))) {
            // line 194
            echo "        ";
            $context["required"] = false;
            // line 195
            echo "    ";
        } elseif (((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && array_key_exists("empty_value", $context)) && array_key_exists("empty_value_in_choices", $context)) && (null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) &&  !(isset($context["empty_value_in_choices"]) ? $context["empty_value_in_choices"] : $this->getContext($context, "empty_value_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 196
            echo "        ";
            $context["required"] = false;
            // line 197
            echo "    ";
        }
        // line 198
        echo "
    ";
        // line 199
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 200
        echo "    ";
        if (((array_key_exists("sortable", $context) && (isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) && (isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 201
            echo "        ";
            $this->displayBlock("sonata_type_choice_multiple_sortable", $context, $blocks);
            echo "
    ";
        } else {
            // line 203
            echo "        <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo " multiple=\"multiple\"";
            }
            echo " >
            ";
            // line 204
            if ((array_key_exists("empty_value", $context) &&  !(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value"))))) {
                // line 205
                echo "                <option value=\"\"";
                if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 206
                if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 207
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 209
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 211
                echo "                </option>
            ";
            } elseif ((            // line 212
array_key_exists("placeholder", $context) &&  !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))))) {
                // line 213
                echo "                <option value=\"\"";
                if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 214
                if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 215
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 217
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 219
                echo "                </option>
            ";
            }
            // line 221
            echo "            ";
            if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
                // line 222
                echo "                ";
                $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
                // line 223
                echo "                ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                ";
                // line 224
                if ((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0)) {
                    // line 225
                    echo "                    <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                    echo "</option>
                ";
                }
                // line 227
                echo "            ";
            }
            // line 228
            echo "            ";
            $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
            // line 229
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
        </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a23a47b3aadc9731b2bda3983c437d496021bdf6bba3330192f6487680416d9e->leave($__internal_a23a47b3aadc9731b2bda3983c437d496021bdf6bba3330192f6487680416d9e_prof);

    }

    // line 235
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_63d2c27c4807ba2dd77d8049d1dba964fef889a802f7555203c9d1df585ec03c = $this->env->getExtension("native_profiler");
        $__internal_63d2c27c4807ba2dd77d8049d1dba964fef889a802f7555203c9d1df585ec03c->enter($__internal_63d2c27c4807ba2dd77d8049d1dba964fef889a802f7555203c9d1df585ec03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 236
        ob_start();
        // line 237
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 238
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 240
            echo "        ";
            if (( !array_key_exists("row", $context) || ((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")) == true))) {
                // line 241
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row")));
                // line 242
                echo "        ";
            }
            // line 243
            echo "        ";
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "col-sm-4")) : ("col-sm-4"));
            // line 244
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 245
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" => (((("<div class=\"" .             // line 246
(isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class"))) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (((("<div class=\"" .             // line 247
(isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class"))) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (((("<div class=\"" .             // line 248
(isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class"))) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 249
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_63d2c27c4807ba2dd77d8049d1dba964fef889a802f7555203c9d1df585ec03c->leave($__internal_63d2c27c4807ba2dd77d8049d1dba964fef889a802f7555203c9d1df585ec03c_prof);

    }

    // line 255
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_2e80f5d848145be1e59fe37341baccd2dcd92b4a1931585c7cd8d2c6db0d5bb2 = $this->env->getExtension("native_profiler");
        $__internal_2e80f5d848145be1e59fe37341baccd2dcd92b4a1931585c7cd8d2c6db0d5bb2->enter($__internal_2e80f5d848145be1e59fe37341baccd2dcd92b4a1931585c7cd8d2c6db0d5bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 256
        ob_start();
        // line 257
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 258
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 260
            echo "        ";
            if (( !array_key_exists("row", $context) || ((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")) == true))) {
                // line 261
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row")));
                // line 262
                echo "        ";
            }
            // line 263
            echo "        ";
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "col-sm-6")) : ("col-sm-6"));
            // line 264
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"";
            // line 265
            echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "html", null, true);
            echo "\">
                ";
            // line 266
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            echo "
            </div>
            ";
            // line 268
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                // line 269
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "html", null, true);
                echo "\">
                    ";
                // line 270
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 273
            echo "            ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                // line 274
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "html", null, true);
                echo "\">
                    ";
                // line 275
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 278
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2e80f5d848145be1e59fe37341baccd2dcd92b4a1931585c7cd8d2c6db0d5bb2->leave($__internal_2e80f5d848145be1e59fe37341baccd2dcd92b4a1931585c7cd8d2c6db0d5bb2_prof);

    }

    // line 283
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_5e93197447eced1e6e97f9198dde13574e2f1bb6944fb13774aad6b89296dd05 = $this->env->getExtension("native_profiler");
        $__internal_5e93197447eced1e6e97f9198dde13574e2f1bb6944fb13774aad6b89296dd05->enter($__internal_5e93197447eced1e6e97f9198dde13574e2f1bb6944fb13774aad6b89296dd05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 284
        ob_start();
        // line 285
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 286
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 288
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row")));
            // line 289
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 290
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            echo "
            ";
            // line 291
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            echo "

            ";
            // line 293
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), "vars", array()), "widget", array()) == "single_text")) {
                // line 294
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 295
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 298
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
                echo "
            ";
            }
            // line 300
            echo "
            ";
            // line 301
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), "vars", array()), "widget", array()) == "single_text")) {
                // line 302
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 303
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 306
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
                echo "
            ";
            }
            // line 308
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5e93197447eced1e6e97f9198dde13574e2f1bb6944fb13774aad6b89296dd05->leave($__internal_5e93197447eced1e6e97f9198dde13574e2f1bb6944fb13774aad6b89296dd05_prof);

    }

    // line 313
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_fc9978e3f5494ee1ee1991dbc8a0890fddf725977378e643fa6829bc9a59e3c3 = $this->env->getExtension("native_profiler");
        $__internal_fc9978e3f5494ee1ee1991dbc8a0890fddf725977378e643fa6829bc9a59e3c3->enter($__internal_fc9978e3f5494ee1ee1991dbc8a0890fddf725977378e643fa6829bc9a59e3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 314
        echo "    ";
        $context["show_label"] = ((array_key_exists("show_label", $context)) ? (_twig_default_filter((isset($context["show_label"]) ? $context["show_label"] : $this->getContext($context, "show_label")), true)) : (true));
        // line 315
        echo "    <div class=\"form-group";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 316
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", true, true)) {
            // line 317
            echo "            ";
            $context["label"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array()), (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) : ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))));
            // line 318
            echo "        ";
        }
        // line 319
        echo "
        ";
        // line 320
        $context["div_class"] = "sonata-ba-field";
        // line 321
        echo "
        ";
        // line 322
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 323
            echo "            ";
            $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " sonata-collection-row-without-label");
            // line 324
            echo "        ";
        }
        // line 325
        echo "
        ";
        // line 326
        if ((array_key_exists("sonata_admin", $context) && ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "options", array()), "form_type", array(), "array") == "horizontal"))) {
            // line 327
            echo "            ";
            if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
                // line 328
                echo "                ";
                if (twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array()))) {
                    // line 329
                    echo "                    ";
                    $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " col-sm-12");
                    // line 330
                    echo "                ";
                } else {
                    // line 331
                    echo "                    ";
                    $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " col-sm-9 col-sm-offset-3");
                    // line 332
                    echo "                ";
                }
                // line 333
                echo "            ";
            } else {
                // line 334
                echo "                ";
                $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " col-sm-9");
                // line 335
                echo "            ";
            }
            // line 336
            echo "        ";
        }
        // line 337
        echo "
        ";
        // line 338
        if ((isset($context["show_label"]) ? $context["show_label"] : $this->getContext($context, "show_label"))) {
            // line 339
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
        ";
        }
        // line 341
        echo "
        ";
        // line 342
        if ((array_key_exists("sonata_admin", $context) && (isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : $this->getContext($context, "sonata_admin_enabled")))) {
            // line 343
            echo "            ";
            $context["div_class"] = (((((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " sonata-ba-field-") . $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array())) . "-") . $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "inline", array()));
            // line 344
            echo "        ";
        }
        // line 345
        echo "
        ";
        // line 346
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 347
            echo "            ";
            $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " sonata-ba-field-error");
            // line 348
            echo "        ";
        }
        // line 349
        echo "
        <div class=\"";
        // line 350
        echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")), "html", null, true);
        echo "\">
            ";
        // line 351
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 352
        echo "
            ";
        // line 353
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 354
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 355
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
                </div>
            ";
        }
        // line 358
        echo "
            ";
        // line 359
        if (((array_key_exists("sonata_admin", $context) && (isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : $this->getContext($context, "sonata_admin_enabled"))) && (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "help", array()), false)) : (false)))) {
            // line 360
            echo "                <span class=\"help-block sonata-ba-field-help\">";
            echo $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "trans", array(0 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "help", array()), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "method");
            echo "</span>
            ";
        }
        // line 362
        echo "        </div>
    </div>
";
        
        $__internal_fc9978e3f5494ee1ee1991dbc8a0890fddf725977378e643fa6829bc9a59e3c3->leave($__internal_fc9978e3f5494ee1ee1991dbc8a0890fddf725977378e643fa6829bc9a59e3c3_prof);

    }

    // line 366
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_85cb88f86d58372a292fc435e8cdd8c74286ec3ced461ce469b5c31e183a0225 = $this->env->getExtension("native_profiler");
        $__internal_85cb88f86d58372a292fc435e8cdd8c74286ec3ced461ce469b5c31e183a0225->enter($__internal_85cb88f86d58372a292fc435e8cdd8c74286ec3ced461ce469b5c31e183a0225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 367
        $context["show_label"] = false;
        // line 368
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_85cb88f86d58372a292fc435e8cdd8c74286ec3ced461ce469b5c31e183a0225->leave($__internal_85cb88f86d58372a292fc435e8cdd8c74286ec3ced461ce469b5c31e183a0225_prof);

    }

    // line 371
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_388fc88e7576306d7c9b4be9bab58e5960da65d08a680a7d55dc0b4a28f260eb = $this->env->getExtension("native_profiler");
        $__internal_388fc88e7576306d7c9b4be9bab58e5960da65d08a680a7d55dc0b4a28f260eb->enter($__internal_388fc88e7576306d7c9b4be9bab58e5960da65d08a680a7d55dc0b4a28f260eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 372
        $context["show_label"] = false;
        // line 373
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_388fc88e7576306d7c9b4be9bab58e5960da65d08a680a7d55dc0b4a28f260eb->leave($__internal_388fc88e7576306d7c9b4be9bab58e5960da65d08a680a7d55dc0b4a28f260eb_prof);

    }

    // line 376
    public function block_sonata_type_native_collection_widget_row($context, array $blocks = array())
    {
        $__internal_ccc75124dacac2482ca137e20cdaff408122d33eba5b0ee1c6be6a021352b1ca = $this->env->getExtension("native_profiler");
        $__internal_ccc75124dacac2482ca137e20cdaff408122d33eba5b0ee1c6be6a021352b1ca->enter($__internal_ccc75124dacac2482ca137e20cdaff408122d33eba5b0ee1c6be6a021352b1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget_row"));

        // line 377
        ob_start();
        // line 378
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 379
        if ((isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"))) {
            // line 380
            echo "            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <a href=\"#\" class=\"btn btn-link sonata-collection-delete\">
                        <i class=\"fa fa-minus-circle\"></i>
                    </a>
                </div>
                <div class=\"col-xs-11\">
        ";
        }
        // line 388
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row', array("label" => false));
        echo "
        ";
        // line 389
        if ((isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"))) {
            // line 390
            echo "                </div>
            </div>
        ";
        }
        // line 393
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ccc75124dacac2482ca137e20cdaff408122d33eba5b0ee1c6be6a021352b1ca->leave($__internal_ccc75124dacac2482ca137e20cdaff408122d33eba5b0ee1c6be6a021352b1ca_prof);

    }

    // line 397
    public function block_sonata_type_native_collection_widget($context, array $blocks = array())
    {
        $__internal_e41b75ab109c7e16c640cae364dea71a7ec7d2906cb47691364db9f33baa6291 = $this->env->getExtension("native_profiler");
        $__internal_e41b75ab109c7e16c640cae364dea71a7ec7d2906cb47691364db9f33baa6291->enter($__internal_e41b75ab109c7e16c640cae364dea71a7ec7d2906cb47691364db9f33baa6291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget"));

        // line 398
        ob_start();
        // line 399
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 400
            echo "        ";
            $context["child"] = (isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype"));
            // line 401
            echo "        ";
            $context["allow_delete_backup"] = (isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"));
            // line 402
            echo "        ";
            $context["allow_delete"] = true;
            // line 403
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->renderBlock("sonata_type_native_collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "vars", array()), "name", array()), "class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))));
            // line 404
            echo "        ";
            $context["allow_delete"] = (isset($context["allow_delete_backup"]) ? $context["allow_delete_backup"] : $this->getContext($context, "allow_delete_backup"));
            // line 405
            echo "    ";
        }
        // line 406
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 407
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 408
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 409
            echo "            ";
            $this->displayBlock("sonata_type_native_collection_widget_row", $context, $blocks);
            echo "
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 411
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
        // line 412
        if ((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add"))) {
            // line 413
            echo "            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fa fa-plus-circle\"></i></a></div>
        ";
        }
        // line 415
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e41b75ab109c7e16c640cae364dea71a7ec7d2906cb47691364db9f33baa6291->leave($__internal_e41b75ab109c7e16c640cae364dea71a7ec7d2906cb47691364db9f33baa6291_prof);

    }

    // line 419
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        $__internal_2629dc17ff91a983ac8f0d48b979193e2ab31e9dd00d8a345f2a2718fbd48618 = $this->env->getExtension("native_profiler");
        $__internal_2629dc17ff91a983ac8f0d48b979193e2ab31e9dd00d8a345f2a2718fbd48618->enter($__internal_2629dc17ff91a983ac8f0d48b979193e2ab31e9dd00d8a345f2a2718fbd48618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget"));

        // line 420
        echo "    ";
        ob_start();
        // line 421
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 422
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 424
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 425
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
            echo "
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 427
        echo "
            ";
        // line 428
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2629dc17ff91a983ac8f0d48b979193e2ab31e9dd00d8a345f2a2718fbd48618->leave($__internal_2629dc17ff91a983ac8f0d48b979193e2ab31e9dd00d8a345f2a2718fbd48618_prof);

    }

    // line 433
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        $__internal_819a176a23ff9e03f798a4e36227cfe4e5574ab4930c8a26bc117b94b3eb00af = $this->env->getExtension("native_profiler");
        $__internal_819a176a23ff9e03f798a4e36227cfe4e5574ab4930c8a26bc117b94b3eb00af->enter($__internal_819a176a23ff9e03f798a4e36227cfe4e5574ab4930c8a26bc117b94b3eb00af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget_row"));

        // line 434
        echo "    ";
        ob_start();
        // line 435
        echo "        <div class=\"form-group";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars", array()), "errors", array())) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
        echo "\">

            ";
        // line 437
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'label');
        echo "

            ";
        // line 439
        $context["div_class"] = "";
        // line 440
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "options", array()), "form_type", array(), "array") == "horizontal")) {
            // line 441
            echo "                ";
            $context["div_class"] = "col-sm-9";
            // line 442
            echo "            ";
        }
        // line 443
        echo "
            <div class=\"";
        // line 444
        echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")), "html", null, true);
        echo " sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "inline", array()), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 445
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 446
        echo "            </div>

            ";
        // line 448
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars", array()), "errors", array())) > 0)) {
            // line 449
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 450
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'errors');
            echo "
                </div>
            ";
        }
        // line 453
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_819a176a23ff9e03f798a4e36227cfe4e5574ab4930c8a26bc117b94b3eb00af->leave($__internal_819a176a23ff9e03f798a4e36227cfe4e5574ab4930c8a26bc117b94b3eb00af_prof);

    }

    // line 457
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_95112f806cbc4dd74cce3130e6bfb2aa0e11a60b140cd3aff6d76ea0ac4f3f3a = $this->env->getExtension("native_profiler");
        $__internal_95112f806cbc4dd74cce3130e6bfb2aa0e11a60b140cd3aff6d76ea0ac4f3f3a->enter($__internal_95112f806cbc4dd74cce3130e6bfb2aa0e11a60b140cd3aff6d76ea0ac4f3f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        // line 458
        echo "    ";
        $this->loadTemplate((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "SonataAdminBundle:Form:form_admin_fields.html.twig", 458)->display($context);
        
        $__internal_95112f806cbc4dd74cce3130e6bfb2aa0e11a60b140cd3aff6d76ea0ac4f3f3a->leave($__internal_95112f806cbc4dd74cce3130e6bfb2aa0e11a60b140cd3aff6d76ea0ac4f3f3a_prof);

    }

    // line 461
    public function block_sonata_type_choice_field_mask_widget($context, array $blocks = array())
    {
        $__internal_36c2f46ffbcafaeec780f96b9220c966bbcd8699392e0677eda67254cad59002 = $this->env->getExtension("native_profiler");
        $__internal_36c2f46ffbcafaeec780f96b9220c966bbcd8699392e0677eda67254cad59002->enter($__internal_36c2f46ffbcafaeec780f96b9220c966bbcd8699392e0677eda67254cad59002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_field_mask_widget"));

        // line 462
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 463
        $context["main_form_name"] = twig_slice($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), 0, (twig_length_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) - twig_length_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))));
        // line 464
        echo "    <script>
        jQuery(document).ready(function() {
            var allFields = ";
        // line 466
        echo twig_jsonencode_filter((isset($context["all_fields"]) ? $context["all_fields"] : $this->getContext($context, "all_fields")));
        echo ";
            var map = ";
        // line 467
        echo twig_jsonencode_filter((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo ";

            showMaskChoiceEl = jQuery('#";
        // line 469
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) ? $context["main_form_name"] : $this->getContext($context, "main_form_name")), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "');

            showMaskChoiceEl.on('change', function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val)
            {
                var controlGroupIdFunc = function (field) {
                    return '#sonata-ba-field-container-";
        // line 478
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) ? $context["main_form_name"] : $this->getContext($context, "main_form_name")), "html", null, true);
        echo "' + field;

                };
                if (map[val] == undefined) {
                    jQuery.each(allFields, function (i, field) {
                        jQuery(controlGroupIdFunc(field)).hide();
                    });
                    return;
                }

                jQuery.each(allFields, function (i, field) {
                    jQuery(controlGroupIdFunc(field)).hide();
                });
                jQuery.each(map[val], function (i, field) {
                    jQuery(controlGroupIdFunc(field)).show();
                });
            }
            choice_field_mask_show(showMaskChoiceEl.val());
        });

    </script>
";
        
        $__internal_36c2f46ffbcafaeec780f96b9220c966bbcd8699392e0677eda67254cad59002->leave($__internal_36c2f46ffbcafaeec780f96b9220c966bbcd8699392e0677eda67254cad59002_prof);

    }

    // line 501
    public function block_sonata_type_choice_multiple_sortable($context, array $blocks = array())
    {
        $__internal_aea191dfe3007e33b9c120764aaf8e4b95c95c1cbce9db75d7fb89a023e7bbc0 = $this->env->getExtension("native_profiler");
        $__internal_aea191dfe3007e33b9c120764aaf8e4b95c95c1cbce9db75d7fb89a023e7bbc0->enter($__internal_aea191dfe3007e33b9c120764aaf8e4b95c95c1cbce9db75d7fb89a023e7bbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_multiple_sortable"));

        // line 502
        echo "    <input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), ","), "html", null, true);
        echo "\" />

    <script>
        jQuery(document).ready(function() {
            Admin.setup_sortable_select2(jQuery('#";
        // line 506
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "'), ";
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "choices", array()));
        echo ");
        });
    </script>
";
        
        $__internal_aea191dfe3007e33b9c120764aaf8e4b95c95c1cbce9db75d7fb89a023e7bbc0->leave($__internal_aea191dfe3007e33b9c120764aaf8e4b95c95c1cbce9db75d7fb89a023e7bbc0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1475 => 506,  1463 => 502,  1457 => 501,  1428 => 478,  1415 => 469,  1410 => 467,  1406 => 466,  1402 => 464,  1400 => 463,  1395 => 462,  1389 => 461,  1381 => 458,  1375 => 457,  1366 => 453,  1360 => 450,  1357 => 449,  1355 => 448,  1351 => 446,  1348 => 445,  1336 => 444,  1333 => 443,  1330 => 442,  1327 => 441,  1324 => 440,  1322 => 439,  1317 => 437,  1305 => 435,  1302 => 434,  1296 => 433,  1285 => 428,  1282 => 427,  1265 => 425,  1248 => 424,  1243 => 422,  1238 => 421,  1235 => 420,  1229 => 419,  1220 => 415,  1216 => 413,  1214 => 412,  1209 => 411,  1192 => 409,  1175 => 408,  1171 => 407,  1166 => 406,  1163 => 405,  1160 => 404,  1157 => 403,  1154 => 402,  1151 => 401,  1148 => 400,  1145 => 399,  1143 => 398,  1137 => 397,  1128 => 393,  1123 => 390,  1121 => 389,  1116 => 388,  1106 => 380,  1104 => 379,  1101 => 378,  1099 => 377,  1093 => 376,  1085 => 373,  1083 => 372,  1077 => 371,  1069 => 368,  1067 => 367,  1061 => 366,  1052 => 362,  1046 => 360,  1044 => 359,  1041 => 358,  1035 => 355,  1032 => 354,  1030 => 353,  1027 => 352,  1024 => 351,  1020 => 350,  1017 => 349,  1014 => 348,  1011 => 347,  1009 => 346,  1006 => 345,  1003 => 344,  1000 => 343,  998 => 342,  995 => 341,  989 => 339,  987 => 338,  984 => 337,  981 => 336,  978 => 335,  975 => 334,  972 => 333,  969 => 332,  966 => 331,  963 => 330,  960 => 329,  957 => 328,  954 => 327,  952 => 326,  949 => 325,  946 => 324,  943 => 323,  941 => 322,  938 => 321,  936 => 320,  933 => 319,  930 => 318,  927 => 317,  925 => 316,  916 => 315,  913 => 314,  907 => 313,  897 => 308,  891 => 306,  885 => 303,  882 => 302,  880 => 301,  877 => 300,  871 => 298,  865 => 295,  862 => 294,  860 => 293,  855 => 291,  851 => 290,  846 => 289,  843 => 288,  837 => 286,  834 => 285,  832 => 284,  826 => 283,  816 => 278,  810 => 275,  805 => 274,  802 => 273,  796 => 270,  791 => 269,  789 => 268,  784 => 266,  780 => 265,  775 => 264,  772 => 263,  769 => 262,  766 => 261,  763 => 260,  757 => 258,  754 => 257,  752 => 256,  746 => 255,  735 => 249,  733 => 248,  732 => 247,  731 => 246,  730 => 245,  725 => 244,  722 => 243,  719 => 242,  716 => 241,  713 => 240,  707 => 238,  704 => 237,  702 => 236,  696 => 235,  683 => 229,  680 => 228,  677 => 227,  671 => 225,  669 => 224,  664 => 223,  661 => 222,  658 => 221,  654 => 219,  651 => 217,  648 => 215,  646 => 214,  639 => 213,  637 => 212,  634 => 211,  631 => 209,  628 => 207,  626 => 206,  619 => 205,  617 => 204,  609 => 203,  603 => 201,  600 => 200,  598 => 199,  595 => 198,  592 => 197,  589 => 196,  586 => 195,  583 => 194,  580 => 193,  578 => 192,  572 => 191,  563 => 187,  556 => 185,  553 => 184,  550 => 183,  546 => 182,  541 => 181,  538 => 180,  536 => 179,  530 => 178,  521 => 174,  518 => 172,  516 => 171,  514 => 170,  512 => 169,  510 => 168,  495 => 167,  492 => 166,  489 => 165,  486 => 164,  483 => 163,  480 => 162,  477 => 161,  474 => 160,  471 => 159,  468 => 158,  465 => 157,  463 => 156,  460 => 155,  457 => 154,  454 => 153,  448 => 152,  441 => 149,  435 => 148,  428 => 145,  422 => 144,  412 => 139,  406 => 137,  403 => 135,  401 => 134,  386 => 133,  383 => 132,  379 => 129,  376 => 126,  375 => 125,  374 => 124,  372 => 123,  370 => 122,  367 => 121,  364 => 120,  361 => 119,  358 => 118,  355 => 117,  352 => 116,  350 => 115,  347 => 114,  344 => 113,  342 => 112,  339 => 111,  337 => 110,  334 => 109,  331 => 108,  328 => 107,  325 => 106,  323 => 105,  317 => 104,  309 => 99,  307 => 98,  305 => 97,  302 => 95,  300 => 94,  298 => 93,  292 => 92,  284 => 88,  282 => 87,  280 => 86,  277 => 84,  275 => 83,  273 => 82,  267 => 81,  255 => 75,  252 => 74,  249 => 73,  246 => 72,  240 => 71,  232 => 68,  228 => 66,  226 => 65,  223 => 64,  220 => 63,  218 => 62,  212 => 60,  210 => 59,  208 => 58,  205 => 57,  202 => 56,  199 => 54,  197 => 53,  191 => 52,  181 => 49,  178 => 48,  172 => 47,  162 => 44,  159 => 43,  156 => 42,  153 => 41,  150 => 40,  144 => 39,  137 => 36,  133 => 35,  127 => 34,  115 => 29,  113 => 28,  111 => 27,  105 => 26,  97 => 23,  93 => 22,  90 => 21,  81 => 19,  77 => 18,  74 => 17,  69 => 16,  67 => 15,  61 => 14,  11 => 12,);
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
/* */
/* {% extends 'form_div_layout.html.twig' %}*/
/* */
/* {% block form_errors -%}*/
/*     {% if errors|length > 0 %}*/
/*         {% if not form.parent %}<div class="alert alert-danger">{% endif %}*/
/*             <ul class="list-unstyled">*/
/*                 {% for error in errors %}*/
/*                     <li><i class="fa fa-exclamation-circle"></i> {{ error.message }}</li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         {% if not form.parent %}</div>{% endif %}*/
/*     {% endif %}*/
/* {%- endblock form_errors %}*/
/* */
/* {% block sonata_help %}*/
/* {% spaceless %}*/
/* {% if sonata_help is defined and sonata_help %}*/
/*     <span class="help-block sonata-ba-field-widget-help">{{ sonata_help|raw }}</span>*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block form_widget -%}*/
/*     {{ parent() }}*/
/*     {{ block('sonata_help') }}*/
/* {%- endblock form_widget %}*/
/* */
/* {% block form_widget_simple %}*/
/*     {% set type = type|default('text') %}*/
/*     {% if type != 'file' %}*/
/*         {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock form_widget_simple %}*/
/* */
/* {% block textarea_widget %}*/
/*     {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}*/
/*     {{ parent() }}*/
/* {% endblock textarea_widget %}*/
/* */
/* {% block money_widget -%}*/
/*     {% if money_pattern == '{{ widget }}' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else %}*/
/*         {% set currencySymbol = money_pattern|replace({'{{ widget }}': ''})|trim %}*/
/*         {% if money_pattern matches '/^{{ widget }}/' %}*/
/*             <div class="input-group">*/
/*                 {{- block('form_widget_simple') -}}*/
/*                 <span class="input-group-addon">{{ currencySymbol }}</span>*/
/*             </div>*/
/*         {% elseif money_pattern matches '/{{ widget }}$/' %}*/
/*             <div class="input-group">*/
/*                 <span class="input-group-addon">{{ currencySymbol }}</span>*/
/*                 {{- block('form_widget_simple') -}}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {%- endblock money_widget %}*/
/* */
/* {% block percent_widget %}*/
/*     {% spaceless %}*/
/*         {% set type = type|default('text') %}*/
/*         <div class="input-group">*/
/*             {{ block('form_widget_simple') }}*/
/*             <span class="input-group-addon">%</span>*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock percent_widget %}*/
/* */
/* {% block checkbox_widget -%}*/
/*     {% set parent_label_class = parent_label_class|default('') -%}*/
/*     {% if 'checkbox-inline' in parent_label_class %}*/
/*         {{- form_label(form, null, { widget: parent() }) -}}*/
/*     {% else -%}*/
/*         <div class="checkbox">*/
/*             {{- form_label(form, null, { widget: parent() }) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock checkbox_widget %}*/
/* */
/* {% block radio_widget -%}*/
/*     {%- set parent_label_class = parent_label_class|default('') -%}*/
/*     {% if 'radio-inline' in parent_label_class %}*/
/*         {{- form_label(form, null, { widget: parent() }) -}}*/
/*     {% else -%}*/
/*         <div class="radio">*/
/*             {{- form_label(form, null, { widget: parent() }) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock radio_widget %}*/
/* */
/* {# Labels #}*/
/* {% block form_label %}*/
/* {% spaceless %}*/
/*     {% if label is not same as(false) and sonata_admin.options['form_type'] == 'horizontal' %}*/
/*         {% set label_class = 'col-sm-3' %}*/
/*     {% endif %}*/
/* */
/*     {% set label_class = label_class|default('') ~ ' control-label' %}*/
/* */
/*     {% if label is not same as(false) %}*/
/*         {% set label_attr = label_attr|merge({'class': label_attr.class|default('') ~ label_class }) %}*/
/* */
/*         {% if not compound %}*/
/*             {% set label_attr = label_attr|merge({'for': id}) %}*/
/*         {% endif %}*/
/*         {% if required %}*/
/*             {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {% endif %}*/
/* */
/*         {% if label is empty %}*/
/*             {%- if label_format is defined and label_format is not empty -%}*/
/*                 {% set label = label_format|replace({*/
/*                     '%name%': name,*/
/*                     '%id%': id,*/
/*                 }) %}*/
/*             {%- else -%}*/
/*                 {% set label = name|humanize %}*/
/*             {%- endif -%}*/
/*         {% endif %}*/
/* */
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*             {% if not sonata_admin.admin %}*/
/*                 {{- label|trans({}, translation_domain) -}}*/
/*             {% else %}*/
/*                 {{ sonata_admin.admin.trans(label, {}, sonata_admin.field_description.translationDomain) }}*/
/*             {% endif %}*/
/*         </label>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_label %}*/
/* */
/* {% block checkbox_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock checkbox_label %}*/
/* */
/* {% block radio_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock radio_label %}*/
/* */
/* {% block checkbox_radio_label %}*/
/*     {% if sonata_admin.admin %}*/
/*         {% set translation_domain = sonata_admin.field_description.translationDomain %}*/
/*     {% endif %}*/
/*     {# Do not display the label if widget is not defined in order to prevent double label rendering #}*/
/*     {% if widget is defined %}*/
/*         {% if required %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {% endif %}*/
/*         {% if parent_label_class is defined %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}*/
/*         {% endif %}*/
/*         {% if label is not same as(false) and label is empty %}*/
/*             {% set label = name|humanize %}*/
/*         {% endif %}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*             {{- widget|raw -}}*/
/*             {%- if label is not same as(false) -%}*/
/*                 <span class="control-label__text">*/
/*                     {{- label|trans({}, translation_domain) -}}*/
/*                 </span>*/
/*             {%- endif -%}*/
/*         </label>*/
/*     {% endif %}*/
/* {% endblock checkbox_radio_label %}*/
/* */
/* {% block choice_widget_expanded %}*/
/* {% spaceless %}*/
/*     {% set attr = attr|merge({'class': attr.class|default('') ~ ' list-unstyled'}) %}*/
/*     <ul {{ block('widget_container_attributes') }}>*/
/*     {% for child in form %}*/
/*         <li>*/
/*             {{ form_widget(child, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}*/
/*         </li>*/
/*     {% endfor %}*/
/*     </ul>*/
/* {% endspaceless %}*/
/* {% endblock choice_widget_expanded %}*/
/* */
/* {% block choice_widget_collapsed %}*/
/* {% spaceless %}*/
/*     {% if required and placeholder is defined and placeholder is none %}*/
/*         {% set required = false %}*/
/*     {% elseif required and empty_value is defined and empty_value_in_choices is defined and empty_value is none and not empty_value_in_choices and not multiple %}*/
/*         {% set required = false %}*/
/*     {% endif %}*/
/* */
/*     {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}*/
/*     {% if (sortable is defined) and sortable and multiple %}*/
/*         {{ block('sonata_type_choice_multiple_sortable') }}*/
/*     {% else %}*/
/*         <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %} >*/
/*             {% if empty_value is defined and empty_value is not none %}*/
/*                 <option value=""{% if required and value is empty %} selected="selected"{% endif %}>*/
/*                     {% if not sonata_admin.admin %}*/
/*                         {{- empty_value|trans({}, translation_domain) -}}*/
/*                     {% else %}*/
/*                         {{- empty_value|trans({}, sonata_admin.field_description.translationDomain) -}}*/
/*                     {% endif%}*/
/*                 </option>*/
/*             {% elseif placeholder is defined and placeholder is not none %}*/
/*                 <option value=""{% if required and value is empty %} selected="selected"{% endif %}>*/
/*                     {% if not sonata_admin.admin %}*/
/*                         {{- placeholder|trans({}, translation_domain) -}}*/
/*                     {% else %}*/
/*                         {{- placeholder|trans({}, sonata_admin.field_description.translationDomain) -}}*/
/*                     {% endif%}*/
/*                 </option>*/
/*             {% endif %}*/
/*             {% if preferred_choices|length > 0 %}*/
/*                 {% set options = preferred_choices %}*/
/*                 {{ block('choice_widget_options') }}*/
/*                 {% if choices|length > 0 %}*/
/*                     <option disabled="disabled">{{ separator }}</option>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*             {% set options = choices %}*/
/*             {{ block('choice_widget_options') }}*/
/*         </select>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock choice_widget_collapsed %}*/
/* */
/* {% block date_widget %}*/
/* {% spaceless %}*/
/*     {% if widget == 'single_text' %}*/
/*         {{ block('form_widget_simple') }}*/
/*     {% else %}*/
/*         {% if row is not defined or row == true %}*/
/*             {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}*/
/*         {% endif %}*/
/*         {% set input_wrapper_class = input_wrapper_class|default('col-sm-4') %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{ date_pattern|replace({*/
/*                 '{{ year }}':  '<div class="'~ input_wrapper_class ~ '">' ~ form_widget(form.year) ~ '</div>',*/
/*                 '{{ month }}': '<div class="'~ input_wrapper_class ~ '">' ~ form_widget(form.month) ~ '</div>',*/
/*                 '{{ day }}':   '<div class="'~ input_wrapper_class ~ '">' ~ form_widget(form.day) ~ '</div>',*/
/*             })|raw }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock date_widget %}*/
/* */
/* {% block time_widget %}*/
/* {% spaceless %}*/
/*     {% if widget == 'single_text' %}*/
/*         {{ block('form_widget_simple') }}*/
/*     {% else %}*/
/*         {% if row is not defined or row == true %}*/
/*             {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}*/
/*         {% endif %}*/
/*         {% set input_wrapper_class = input_wrapper_class|default('col-sm-6') %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             <div class="{{ input_wrapper_class }}">*/
/*                 {{ form_widget(form.hour) }}*/
/*             </div>*/
/*             {% if with_minutes %}*/
/*                 <div class="{{ input_wrapper_class }}">*/
/*                     {{ form_widget(form.minute) }}*/
/*                 </div>*/
/*             {% endif %}*/
/*             {% if with_seconds %}*/
/*                 <div class="{{ input_wrapper_class }}">*/
/*                     {{ form_widget(form.second) }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock time_widget %}*/
/* */
/* {% block datetime_widget %}*/
/* {% spaceless %}*/
/*     {% if widget == 'single_text' %}*/
/*         {{ block('form_widget_simple') }}*/
/*     {% else %}*/
/*         {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{ form_errors(form.date) }}*/
/*             {{ form_errors(form.time) }}*/
/* */
/*             {% if form.date.vars.widget == 'single_text' %}*/
/*                 <div class="col-sm-2">*/
/*                     {{ form_widget(form.date) }}*/
/*                 </div>*/
/*             {% else %}*/
/*                 {{ form_widget(form.date, {'row': false, 'input_wrapper_class': 'col-sm-2'}) }}*/
/*             {% endif %}*/
/* */
/*             {% if form.time.vars.widget == 'single_text' %}*/
/*                 <div class="col-sm-2">*/
/*                     {{ form_widget(form.time) }}*/
/*                 </div>*/
/*             {% else %}*/
/*                 {{ form_widget(form.time, {'row': false, 'input_wrapper_class': 'col-sm-2'}) }}*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock datetime_widget %}*/
/* */
/* {% block form_row %}*/
/*     {% set show_label = show_label|default(true) %}*/
/*     <div class="form-group{% if errors|length > 0 %} has-error{% endif %}" id="sonata-ba-field-container-{{ id }}">*/
/*         {% if sonata_admin.field_description.options is defined %}*/
/*             {% set label = sonata_admin.field_description.options.name|default(label)  %}*/
/*         {% endif %}*/
/* */
/*         {% set div_class = 'sonata-ba-field' %}*/
/* */
/*         {% if label is same as(false) %}*/
/*             {% set div_class = div_class ~ ' sonata-collection-row-without-label' %}*/
/*         {% endif %}*/
/* */
/*         {% if sonata_admin is defined and sonata_admin.options['form_type'] == 'horizontal' %}*/
/*             {% if label is same as(false) %}*/
/*                 {% if 'collection' in form.parent.vars.block_prefixes %}*/
/*                     {% set div_class = div_class ~ ' col-sm-12' %}*/
/*                 {% else %}*/
/*                     {% set div_class = div_class ~ ' col-sm-9 col-sm-offset-3' %}*/
/*                 {% endif %}*/
/*             {% else %}*/
/*                 {% set div_class = div_class ~ ' col-sm-9' %}*/
/*             {% endif %}*/
/*         {% endif %}*/
/* */
/*         {% if show_label %}*/
/*             {{ form_label(form, label|default(null)) }}*/
/*         {% endif %}*/
/* */
/*         {% if sonata_admin is defined and sonata_admin_enabled %}*/
/*             {% set div_class = div_class ~ ' sonata-ba-field-' ~ sonata_admin.edit ~ '-' ~ sonata_admin.inline %}*/
/*         {% endif %}*/
/* */
/*         {% if errors|length > 0 %}*/
/*             {% set div_class = div_class ~ ' sonata-ba-field-error' %}*/
/*         {% endif %}*/
/* */
/*         <div class="{{ div_class }}">*/
/*             {{ form_widget(form, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}*/
/* */
/*             {% if errors|length > 0 %}*/
/*                 <div class="help-block sonata-ba-field-error-messages">*/
/*                     {{ form_errors(form) }}*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {% if sonata_admin is defined and sonata_admin_enabled and sonata_admin.field_description.help|default(false) %}*/
/*                 <span class="help-block sonata-ba-field-help">{{ sonata_admin.admin.trans(sonata_admin.field_description.help, {}, sonata_admin.field_description.translationDomain)|raw }}</span>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock form_row %}*/
/* */
/* {% block checkbox_row -%}*/
/*     {% set show_label = false %}*/
/*     {{ block('form_row') }}*/
/* {%- endblock checkbox_row %}*/
/* */
/* {% block radio_row -%}*/
/*     {% set show_label = false %}*/
/*     {{ block('form_row') }}*/
/* {%- endblock radio_row %}*/
/* */
/* {% block sonata_type_native_collection_widget_row %}*/
/* {% spaceless %}*/
/*     <div class="sonata-collection-row">*/
/*         {% if allow_delete %}*/
/*             <div class="row">*/
/*                 <div class="col-xs-1">*/
/*                     <a href="#" class="btn btn-link sonata-collection-delete">*/
/*                         <i class="fa fa-minus-circle"></i>*/
/*                     </a>*/
/*                 </div>*/
/*                 <div class="col-xs-11">*/
/*         {% endif %}*/
/*             {{ form_row(child, { label: false }) }}*/
/*         {% if allow_delete %}*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock sonata_type_native_collection_widget_row %}*/
/* */
/* {% block sonata_type_native_collection_widget %}*/
/* {% spaceless %}*/
/*     {% if prototype is defined %}*/
/*         {% set child = prototype %}*/
/*         {% set allow_delete_backup = allow_delete %}*/
/*         {% set allow_delete = true %}*/
/*         {% set attr = attr|merge({'data-prototype': block('sonata_type_native_collection_widget_row'), 'data-prototype-name': prototype.vars.name, 'class': attr.class|default('') }) %}*/
/*         {% set allow_delete = allow_delete_backup %}*/
/*     {% endif %}*/
/*     <div {{ block('widget_container_attributes') }}>*/
/*         {{ form_errors(form) }}*/
/*         {% for child in form %}*/
/*             {{ block('sonata_type_native_collection_widget_row') }}*/
/*         {% endfor %}*/
/*         {{ form_rest(form) }}*/
/*         {% if allow_add %}*/
/*             <div><a href="#" class="btn btn-link sonata-collection-add"><i class="fa fa-plus-circle"></i></a></div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock sonata_type_native_collection_widget %}*/
/* */
/* {% block sonata_type_immutable_array_widget %}*/
/*     {% spaceless %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{ form_errors(form) }}*/
/* */
/*             {% for key, child in form %}*/
/*                 {{ block('sonata_type_immutable_array_widget_row') }}*/
/*             {% endfor %}*/
/* */
/*             {{ form_rest(form) }}*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock sonata_type_immutable_array_widget %}*/
/* */
/* {% block sonata_type_immutable_array_widget_row %}*/
/*     {% spaceless %}*/
/*         <div class="form-group{% if child.vars.errors|length > 0%} error{%endif%}" id="sonata-ba-field-container-{{ id }}-{{ key }}">*/
/* */
/*             {{ form_label(child) }}*/
/* */
/*             {% set div_class = "" %}*/
/*             {% if sonata_admin.options['form_type'] == 'horizontal' %}*/
/*                 {% set div_class = 'col-sm-9' %}*/
/*             {% endif%}*/
/* */
/*             <div class="{{ div_class }} sonata-ba-field sonata-ba-field-{{ sonata_admin.edit }}-{{ sonata_admin.inline }} {% if child.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}">*/
/*                 {{ form_widget(child, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}*/
/*             </div>*/
/* */
/*             {% if child.vars.errors|length > 0 %}*/
/*                 <div class="help-block sonata-ba-field-error-messages">*/
/*                     {{ form_errors(child) }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_type_model_autocomplete_widget %}*/
/*     {% include template %}*/
/* {% endblock sonata_type_model_autocomplete_widget %}*/
/* */
/* {% block sonata_type_choice_field_mask_widget %}*/
/*     {{ block('choice_widget') }}*/
/*     {% set main_form_name = id|slice(0, id|length - name|length) %}*/
/*     <script>*/
/*         jQuery(document).ready(function() {*/
/*             var allFields = {{ all_fields|json_encode|raw }};*/
/*             var map = {{ map|json_encode|raw }};*/
/* */
/*             showMaskChoiceEl = jQuery('#{{ main_form_name }}{{ name }}');*/
/* */
/*             showMaskChoiceEl.on('change', function () {*/
/*                 choice_field_mask_show(jQuery(this).val());*/
/*             });*/
/* */
/*             function choice_field_mask_show(val)*/
/*             {*/
/*                 var controlGroupIdFunc = function (field) {*/
/*                     return '#sonata-ba-field-container-{{ main_form_name }}' + field;*/
/* */
/*                 };*/
/*                 if (map[val] == undefined) {*/
/*                     jQuery.each(allFields, function (i, field) {*/
/*                         jQuery(controlGroupIdFunc(field)).hide();*/
/*                     });*/
/*                     return;*/
/*                 }*/
/* */
/*                 jQuery.each(allFields, function (i, field) {*/
/*                     jQuery(controlGroupIdFunc(field)).hide();*/
/*                 });*/
/*                 jQuery.each(map[val], function (i, field) {*/
/*                     jQuery(controlGroupIdFunc(field)).show();*/
/*                 });*/
/*             }*/
/*             choice_field_mask_show(showMaskChoiceEl.val());*/
/*         });*/
/* */
/*     </script>*/
/* {% endblock %}*/
/* */
/* {%  block sonata_type_choice_multiple_sortable %}*/
/*     <input type="hidden" name="{{ full_name }}" id="{{ id }}" value="{{ value|join(',') }}" />*/
/* */
/*     <script>*/
/*         jQuery(document).ready(function() {*/
/*             Admin.setup_sortable_select2(jQuery('#{{ id }}'), {{ form.vars.choices|json_encode|raw }});*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
