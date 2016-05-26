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
        $__internal_929a6859ad90deda6de3f498106b3eaaaad3617415e6084a4f74c66aead777a1 = $this->env->getExtension("native_profiler");
        $__internal_929a6859ad90deda6de3f498106b3eaaaad3617415e6084a4f74c66aead777a1->enter($__internal_929a6859ad90deda6de3f498106b3eaaaad3617415e6084a4f74c66aead777a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_929a6859ad90deda6de3f498106b3eaaaad3617415e6084a4f74c66aead777a1->leave($__internal_929a6859ad90deda6de3f498106b3eaaaad3617415e6084a4f74c66aead777a1_prof);

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
