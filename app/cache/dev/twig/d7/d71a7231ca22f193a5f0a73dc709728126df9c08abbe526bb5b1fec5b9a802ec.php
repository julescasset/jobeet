<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_226fee78d7cdba74b0b8740d116ee35da6c94f0e654e00c6057b5eba1d10adfd extends Twig_Template
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
        $__internal_18f7d825bf54bceb466e71f6f6f38fc014481d3b902db9a55e06d8bb0fcf0f96 = $this->env->getExtension("native_profiler");
        $__internal_18f7d825bf54bceb466e71f6f6f38fc014481d3b902db9a55e06d8bb0fcf0f96->enter($__internal_18f7d825bf54bceb466e71f6f6f38fc014481d3b902db9a55e06d8bb0fcf0f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_18f7d825bf54bceb466e71f6f6f38fc014481d3b902db9a55e06d8bb0fcf0f96->leave($__internal_18f7d825bf54bceb466e71f6f6f38fc014481d3b902db9a55e06d8bb0fcf0f96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
