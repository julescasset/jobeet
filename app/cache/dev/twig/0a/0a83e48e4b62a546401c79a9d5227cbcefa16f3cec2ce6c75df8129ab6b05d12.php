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
        $__internal_7641db96bef8d12949770540072819ad3af05ced8b5a547a0d9f8723fb269a3d = $this->env->getExtension("native_profiler");
        $__internal_7641db96bef8d12949770540072819ad3af05ced8b5a547a0d9f8723fb269a3d->enter($__internal_7641db96bef8d12949770540072819ad3af05ced8b5a547a0d9f8723fb269a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7641db96bef8d12949770540072819ad3af05ced8b5a547a0d9f8723fb269a3d->leave($__internal_7641db96bef8d12949770540072819ad3af05ced8b5a547a0d9f8723fb269a3d_prof);

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
