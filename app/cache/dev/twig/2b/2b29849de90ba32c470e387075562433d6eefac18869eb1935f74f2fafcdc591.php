<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7b11b5bd169c8e51d15f6b750cdfa03163db7d6c2db63331ccd5f1bfbc7d7b16 extends Twig_Template
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
        $__internal_dd721fbe83017490b649ea6efac3a85e5348db96b7c4b88881c6b15ffe5e0fed = $this->env->getExtension("native_profiler");
        $__internal_dd721fbe83017490b649ea6efac3a85e5348db96b7c4b88881c6b15ffe5e0fed->enter($__internal_dd721fbe83017490b649ea6efac3a85e5348db96b7c4b88881c6b15ffe5e0fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_dd721fbe83017490b649ea6efac3a85e5348db96b7c4b88881c6b15ffe5e0fed->leave($__internal_dd721fbe83017490b649ea6efac3a85e5348db96b7c4b88881c6b15ffe5e0fed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
