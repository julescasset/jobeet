<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_13cb1e94d07cefd9a3ae6f545df95465b09b5dc3544ba6563f4e89bd4f1d45c2 extends Twig_Template
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
        $__internal_b9091a374dd7d6345bbf0c985be3291dea364de0f6737e569378c26427dd3496 = $this->env->getExtension("native_profiler");
        $__internal_b9091a374dd7d6345bbf0c985be3291dea364de0f6737e569378c26427dd3496->enter($__internal_b9091a374dd7d6345bbf0c985be3291dea364de0f6737e569378c26427dd3496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b9091a374dd7d6345bbf0c985be3291dea364de0f6737e569378c26427dd3496->leave($__internal_b9091a374dd7d6345bbf0c985be3291dea364de0f6737e569378c26427dd3496_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
