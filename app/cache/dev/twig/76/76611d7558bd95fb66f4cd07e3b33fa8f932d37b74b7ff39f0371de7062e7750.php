<?php

/* @SonataCore/Form/colorpicker.html.twig */
class __TwigTemplate_4b00723d1a122f66ae9253c0de461e7f5bcd8c2aacd76d0e99281559ee3232a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_selector_widget' => array($this, 'block_sonata_type_color_selector_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_999f9b13045fa02f2dfe933cb0d043209c44868a21bca97f03dab22e304a504c = $this->env->getExtension("native_profiler");
        $__internal_999f9b13045fa02f2dfe933cb0d043209c44868a21bca97f03dab22e304a504c->enter($__internal_999f9b13045fa02f2dfe933cb0d043209c44868a21bca97f03dab22e304a504c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataCore/Form/colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_999f9b13045fa02f2dfe933cb0d043209c44868a21bca97f03dab22e304a504c->leave($__internal_999f9b13045fa02f2dfe933cb0d043209c44868a21bca97f03dab22e304a504c_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_1f12a14022adf7ff747266387f7d3d77395ebf64e135602e4355a8fd27d6283f = $this->env->getExtension("native_profiler");
        $__internal_1f12a14022adf7ff747266387f7d3d77395ebf64e135602e4355a8fd27d6283f->enter($__internal_1f12a14022adf7ff747266387f7d3d77395ebf64e135602e4355a8fd27d6283f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        // line 12
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1f12a14022adf7ff747266387f7d3d77395ebf64e135602e4355a8fd27d6283f->leave($__internal_1f12a14022adf7ff747266387f7d3d77395ebf64e135602e4355a8fd27d6283f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataCore/Form/colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 24,  42 => 14,  40 => 13,  35 => 12,  23 => 11,);
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
/* {% block sonata_type_color_selector_widget %}*/
/*     {{ block('choice_widget') }}*/
/*     {% spaceless %}*/
/*         <script type="text/javascript">*/
/*             jQuery(function ($) {*/
/*                 var select2FormatColorSelect = function format(state) {*/
/*                     if (!state.id || state.disabled) {*/
/*                         return state.text;*/
/*                     }*/
/* */
/*                     return ' <i class="fa fa-square" style="color: '+ state.id +'"></i> ' + state.text;*/
/*                 };*/
/* */
/*                 $('#{{ id }}').select2({*/
/*                     formatResult:    select2FormatColorSelect,*/
/*                     formatSelection: select2FormatColorSelect,*/
/*                     width:           '100%',*/
/*                     escapeMarkup:    function(m) { return m; }*/
/*                 });*/
/*             });*/
/*         </script>*/
/*     {% endspaceless %}*/
/* {% endblock sonata_type_color_selector_widget %}*/
/* */
