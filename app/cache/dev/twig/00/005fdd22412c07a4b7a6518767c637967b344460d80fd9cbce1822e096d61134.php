<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_cbc60c123e327e8ba01696de7db5fef1ac46a14dbd6cf78551b2124e410fc0c6 extends Twig_Template
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
        $__internal_25bf5260fb461faac446f6755f263cc2296e776c1ff0483914d3ce2ad54a0e9e = $this->env->getExtension("native_profiler");
        $__internal_25bf5260fb461faac446f6755f263cc2296e776c1ff0483914d3ce2ad54a0e9e->enter($__internal_25bf5260fb461faac446f6755f263cc2296e776c1ff0483914d3ce2ad54a0e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_25bf5260fb461faac446f6755f263cc2296e776c1ff0483914d3ce2ad54a0e9e->leave($__internal_25bf5260fb461faac446f6755f263cc2296e776c1ff0483914d3ce2ad54a0e9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
