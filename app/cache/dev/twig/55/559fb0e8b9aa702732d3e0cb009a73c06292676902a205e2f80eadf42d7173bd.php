<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e7cb1918bd07fe862d58df8d00df0bf698278aa2bbea8843bd87afd567fcf698 extends Twig_Template
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
        $__internal_e13e057628fa1549ee5cbd7627172301167ad00a28c6c31239b0fec773d3d87d = $this->env->getExtension("native_profiler");
        $__internal_e13e057628fa1549ee5cbd7627172301167ad00a28c6c31239b0fec773d3d87d->enter($__internal_e13e057628fa1549ee5cbd7627172301167ad00a28c6c31239b0fec773d3d87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e13e057628fa1549ee5cbd7627172301167ad00a28c6c31239b0fec773d3d87d->leave($__internal_e13e057628fa1549ee5cbd7627172301167ad00a28c6c31239b0fec773d3d87d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
