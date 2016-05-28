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
        $__internal_a174155276ea8b6d37d46c93755e960255be06d91623c10a3b9eb71311bdcf9c = $this->env->getExtension("native_profiler");
        $__internal_a174155276ea8b6d37d46c93755e960255be06d91623c10a3b9eb71311bdcf9c->enter($__internal_a174155276ea8b6d37d46c93755e960255be06d91623c10a3b9eb71311bdcf9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a174155276ea8b6d37d46c93755e960255be06d91623c10a3b9eb71311bdcf9c->leave($__internal_a174155276ea8b6d37d46c93755e960255be06d91623c10a3b9eb71311bdcf9c_prof);

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
