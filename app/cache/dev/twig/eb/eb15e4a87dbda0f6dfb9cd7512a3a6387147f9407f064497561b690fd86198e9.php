<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_7ca69d2c8af722f91ec4b25efaf3618d608f96632ad0e140689b17f96677988d extends Twig_Template
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
        $__internal_d4237cbcdf2e83ef7982cbd5bacc78637a57d40c59253d2f7309293faa1381fd = $this->env->getExtension("native_profiler");
        $__internal_d4237cbcdf2e83ef7982cbd5bacc78637a57d40c59253d2f7309293faa1381fd->enter($__internal_d4237cbcdf2e83ef7982cbd5bacc78637a57d40c59253d2f7309293faa1381fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d4237cbcdf2e83ef7982cbd5bacc78637a57d40c59253d2f7309293faa1381fd->leave($__internal_d4237cbcdf2e83ef7982cbd5bacc78637a57d40c59253d2f7309293faa1381fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
