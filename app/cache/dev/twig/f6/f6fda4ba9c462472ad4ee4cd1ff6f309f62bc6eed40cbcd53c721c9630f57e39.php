<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7e0a739b4687c9ab1d1499b1366be51ee7d67792d530f14fafc2e8ef0a063f2a extends Twig_Template
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
        $__internal_2f7f088c09f6fbcf2d6a536c3f5ab8337b992cffb768e6d05ec71867cc48fc91 = $this->env->getExtension("native_profiler");
        $__internal_2f7f088c09f6fbcf2d6a536c3f5ab8337b992cffb768e6d05ec71867cc48fc91->enter($__internal_2f7f088c09f6fbcf2d6a536c3f5ab8337b992cffb768e6d05ec71867cc48fc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_2f7f088c09f6fbcf2d6a536c3f5ab8337b992cffb768e6d05ec71867cc48fc91->leave($__internal_2f7f088c09f6fbcf2d6a536c3f5ab8337b992cffb768e6d05ec71867cc48fc91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
