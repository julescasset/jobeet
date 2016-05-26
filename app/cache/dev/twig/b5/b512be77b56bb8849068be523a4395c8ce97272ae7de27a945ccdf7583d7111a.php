<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e9fd2876d3f08bb1d3d12f58f6242881361f008631d2faa7ddd2065e84734505 extends Twig_Template
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
        $__internal_217dd11ae69cf0049980fb145d028d9c6c5e57c1cf5724b4af147b24968a1deb = $this->env->getExtension("native_profiler");
        $__internal_217dd11ae69cf0049980fb145d028d9c6c5e57c1cf5724b4af147b24968a1deb->enter($__internal_217dd11ae69cf0049980fb145d028d9c6c5e57c1cf5724b4af147b24968a1deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_217dd11ae69cf0049980fb145d028d9c6c5e57c1cf5724b4af147b24968a1deb->leave($__internal_217dd11ae69cf0049980fb145d028d9c6c5e57c1cf5724b4af147b24968a1deb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
