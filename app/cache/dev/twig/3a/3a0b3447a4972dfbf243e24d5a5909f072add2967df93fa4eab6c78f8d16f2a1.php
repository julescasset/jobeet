<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_99391878f72f99afcbe6919634577cbb155f9c00b72e7a55ed81a7135d39d915 extends Twig_Template
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
        $__internal_279cc9615be861005ecd9857be97deffb2303af9f6e42fe04fd2238e184fbcd5 = $this->env->getExtension("native_profiler");
        $__internal_279cc9615be861005ecd9857be97deffb2303af9f6e42fe04fd2238e184fbcd5->enter($__internal_279cc9615be861005ecd9857be97deffb2303af9f6e42fe04fd2238e184fbcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_279cc9615be861005ecd9857be97deffb2303af9f6e42fe04fd2238e184fbcd5->leave($__internal_279cc9615be861005ecd9857be97deffb2303af9f6e42fe04fd2238e184fbcd5_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_b2c4009970d257d290405b4e8bc3a2121a0e9b2f0cbe678456ed2bbc0a823731 = $this->env->getExtension("native_profiler");
        $__internal_b2c4009970d257d290405b4e8bc3a2121a0e9b2f0cbe678456ed2bbc0a823731->enter($__internal_b2c4009970d257d290405b4e8bc3a2121a0e9b2f0cbe678456ed2bbc0a823731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a>";
        
        $__internal_b2c4009970d257d290405b4e8bc3a2121a0e9b2f0cbe678456ed2bbc0a823731->leave($__internal_b2c4009970d257d290405b4e8bc3a2121a0e9b2f0cbe678456ed2bbc0a823731_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}<a href="{{ path('logout') }}">Logout</a>{% endblock %}*/
