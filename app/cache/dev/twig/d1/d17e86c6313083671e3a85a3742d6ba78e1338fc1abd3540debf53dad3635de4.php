<?php

/* @SonataAdmin/Core/user_block.html.twig */
class __TwigTemplate_a9f975d97d5c5cfc10ecd6ea8c0307d89136368ee3a6cc49d3a3827155e17dfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bf9149da7a5355e6af2f72a4277d6bd7151d79051f849b43a89df465dcd495e = $this->env->getExtension("native_profiler");
        $__internal_8bf9149da7a5355e6af2f72a4277d6bd7151d79051f849b43a89df465dcd495e->enter($__internal_8bf9149da7a5355e6af2f72a4277d6bd7151d79051f849b43a89df465dcd495e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_8bf9149da7a5355e6af2f72a4277d6bd7151d79051f849b43a89df465dcd495e->leave($__internal_8bf9149da7a5355e6af2f72a4277d6bd7151d79051f849b43a89df465dcd495e_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_86a234b47dfb1e9ff268bd79b6bcca3aa96646a182ab0bbbeff7cc0e4796cc71 = $this->env->getExtension("native_profiler");
        $__internal_86a234b47dfb1e9ff268bd79b6bcca3aa96646a182ab0bbbeff7cc0e4796cc71->enter($__internal_86a234b47dfb1e9ff268bd79b6bcca3aa96646a182ab0bbbeff7cc0e4796cc71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a>";
        
        $__internal_86a234b47dfb1e9ff268bd79b6bcca3aa96646a182ab0bbbeff7cc0e4796cc71->leave($__internal_86a234b47dfb1e9ff268bd79b6bcca3aa96646a182ab0bbbeff7cc0e4796cc71_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}<a href="{{ path('logout') }}">Logout</a>{% endblock %}*/
