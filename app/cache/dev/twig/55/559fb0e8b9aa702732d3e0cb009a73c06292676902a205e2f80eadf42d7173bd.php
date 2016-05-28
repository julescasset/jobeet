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
        $__internal_79b8e83b9eefc3df88ceab0a71f742aba7a1a6aadcd9f523989840a24ad8aeaf = $this->env->getExtension("native_profiler");
        $__internal_79b8e83b9eefc3df88ceab0a71f742aba7a1a6aadcd9f523989840a24ad8aeaf->enter($__internal_79b8e83b9eefc3df88ceab0a71f742aba7a1a6aadcd9f523989840a24ad8aeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_79b8e83b9eefc3df88ceab0a71f742aba7a1a6aadcd9f523989840a24ad8aeaf->leave($__internal_79b8e83b9eefc3df88ceab0a71f742aba7a1a6aadcd9f523989840a24ad8aeaf_prof);

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
