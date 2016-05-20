<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_56cf4de1fc474527f24d0ddbcbb5a123a9a0898d11e659652c765d4fa02db8cf extends Twig_Template
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
        $__internal_1f540dbbd3a736097f839161734381f1518264631ab8ee57dcd04036e312562d = $this->env->getExtension("native_profiler");
        $__internal_1f540dbbd3a736097f839161734381f1518264631ab8ee57dcd04036e312562d->enter($__internal_1f540dbbd3a736097f839161734381f1518264631ab8ee57dcd04036e312562d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_1f540dbbd3a736097f839161734381f1518264631ab8ee57dcd04036e312562d->leave($__internal_1f540dbbd3a736097f839161734381f1518264631ab8ee57dcd04036e312562d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->block($form, 'form_widget_simple', array('type' => isset($type) ? $type : 'hidden')) ?>*/
/* */
