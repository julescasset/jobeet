<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f90cc660bffbb620a3d65020f5a057b05047b3df0c97f9cc39cc85b9172340df extends Twig_Template
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
        $__internal_a0f88c8e1d1d9e271e9efe7fa74694ca94ffd3f918c63eaf54e8223fc25babb9 = $this->env->getExtension("native_profiler");
        $__internal_a0f88c8e1d1d9e271e9efe7fa74694ca94ffd3f918c63eaf54e8223fc25babb9->enter($__internal_a0f88c8e1d1d9e271e9efe7fa74694ca94ffd3f918c63eaf54e8223fc25babb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a0f88c8e1d1d9e271e9efe7fa74694ca94ffd3f918c63eaf54e8223fc25babb9->leave($__internal_a0f88c8e1d1d9e271e9efe7fa74694ca94ffd3f918c63eaf54e8223fc25babb9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
