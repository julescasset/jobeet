<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_5beb7a46747443214b52c2077ca6e608e4b5502793023c7a987d59684c1a7ebf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be526e65ddf9e5390617b3a7a75ba61dafef7240b934d904edb2a58ad92824c6 = $this->env->getExtension("native_profiler");
        $__internal_be526e65ddf9e5390617b3a7a75ba61dafef7240b934d904edb2a58ad92824c6->enter($__internal_be526e65ddf9e5390617b3a7a75ba61dafef7240b934d904edb2a58ad92824c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_be526e65ddf9e5390617b3a7a75ba61dafef7240b934d904edb2a58ad92824c6->leave($__internal_be526e65ddf9e5390617b3a7a75ba61dafef7240b934d904edb2a58ad92824c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
