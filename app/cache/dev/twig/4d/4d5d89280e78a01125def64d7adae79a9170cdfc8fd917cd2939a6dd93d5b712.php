<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_1b468ca8cc44f64071a17cd1e3d4a9dd1bae3a20875f05be8e1d2ea59d6d9869 extends Twig_Template
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
        $__internal_f9968bc9de88cd5a4ff8e85b35bb39514287cf96b25b50ee4c1e8aeb6b9c281d = $this->env->getExtension("native_profiler");
        $__internal_f9968bc9de88cd5a4ff8e85b35bb39514287cf96b25b50ee4c1e8aeb6b9c281d->enter($__internal_f9968bc9de88cd5a4ff8e85b35bb39514287cf96b25b50ee4c1e8aeb6b9c281d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_f9968bc9de88cd5a4ff8e85b35bb39514287cf96b25b50ee4c1e8aeb6b9c281d->leave($__internal_f9968bc9de88cd5a4ff8e85b35bb39514287cf96b25b50ee4c1e8aeb6b9c281d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/*         <traces>*/
/* {% for trace in exception.trace %}*/
/*             <trace>*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/*             </trace>*/
/* {% endfor %}*/
/*         </traces>*/
/* */