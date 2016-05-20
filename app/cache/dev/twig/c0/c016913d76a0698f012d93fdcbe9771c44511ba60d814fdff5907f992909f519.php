<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_6f0e8fc294b81c77dd59c9fb205850f6d18d5778a709cfb1082295d346512983 extends Twig_Template
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
        $__internal_b5a1319de3667cb1d76858613bfcd131648d1ff6f7837918d1e4650dfb0b203f = $this->env->getExtension("native_profiler");
        $__internal_b5a1319de3667cb1d76858613bfcd131648d1ff6f7837918d1e4650dfb0b203f->enter($__internal_b5a1319de3667cb1d76858613bfcd131648d1ff6f7837918d1e4650dfb0b203f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b5a1319de3667cb1d76858613bfcd131648d1ff6f7837918d1e4650dfb0b203f->leave($__internal_b5a1319de3667cb1d76858613bfcd131648d1ff6f7837918d1e4650dfb0b203f_prof);

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
