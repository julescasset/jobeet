<?php

/* SonataCoreBundle:Form:colorpicker.html.twig */
class __TwigTemplate_bf0d2161a30f8ca58f346a68bcb05af65de275447d116cab9daef455a5469c43 extends Twig_Template
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
        $__internal_2a2df41f948ca39ece37c3bea6eb7217a887b740a851c2ee212edab9a1d42a27 = $this->env->getExtension("native_profiler");
        $__internal_2a2df41f948ca39ece37c3bea6eb7217a887b740a851c2ee212edab9a1d42a27->enter($__internal_2a2df41f948ca39ece37c3bea6eb7217a887b740a851c2ee212edab9a1d42a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_2a2df41f948ca39ece37c3bea6eb7217a887b740a851c2ee212edab9a1d42a27->leave($__internal_2a2df41f948ca39ece37c3bea6eb7217a887b740a851c2ee212edab9a1d42a27_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_32a05c15a2923c397f919e0ff739b6bc52ba7fedd8310362163b2b4bec6c4cb9 = $this->env->getExtension("native_profiler");
        $__internal_32a05c15a2923c397f919e0ff739b6bc52ba7fedd8310362163b2b4bec6c4cb9->enter($__internal_32a05c15a2923c397f919e0ff739b6bc52ba7fedd8310362163b2b4bec6c4cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

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
        
        $__internal_32a05c15a2923c397f919e0ff739b6bc52ba7fedd8310362163b2b4bec6c4cb9->leave($__internal_32a05c15a2923c397f919e0ff739b6bc52ba7fedd8310362163b2b4bec6c4cb9_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:colorpicker.html.twig";
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
