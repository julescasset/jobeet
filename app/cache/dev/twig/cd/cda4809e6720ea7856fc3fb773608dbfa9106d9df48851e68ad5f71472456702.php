<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_4e5a99ac87dbd49b7d01178d3141415fe2d256179a7c9aeced04cb60324ed201 extends Twig_Template
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
        $__internal_fcbe9fb0b78c24535e46f9f09c2404037ec70afd4b264a980f74868da0e41dae = $this->env->getExtension("native_profiler");
        $__internal_fcbe9fb0b78c24535e46f9f09c2404037ec70afd4b264a980f74868da0e41dae->enter($__internal_fcbe9fb0b78c24535e46f9f09c2404037ec70afd4b264a980f74868da0e41dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_fcbe9fb0b78c24535e46f9f09c2404037ec70afd4b264a980f74868da0e41dae->leave($__internal_fcbe9fb0b78c24535e46f9f09c2404037ec70afd4b264a980f74868da0e41dae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
