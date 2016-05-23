<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_239ae82e1c0b740d1a133a7bae1394c8e3105706f08a2c85b0cf56f2822e1bde extends Twig_Template
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
        $__internal_d4e27f9d2d10e4cdb92bb440346aafd9ff801bb03153a28b73e2ed974d16cf2c = $this->env->getExtension("native_profiler");
        $__internal_d4e27f9d2d10e4cdb92bb440346aafd9ff801bb03153a28b73e2ed974d16cf2c->enter($__internal_d4e27f9d2d10e4cdb92bb440346aafd9ff801bb03153a28b73e2ed974d16cf2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d4e27f9d2d10e4cdb92bb440346aafd9ff801bb03153a28b73e2ed974d16cf2c->leave($__internal_d4e27f9d2d10e4cdb92bb440346aafd9ff801bb03153a28b73e2ed974d16cf2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
