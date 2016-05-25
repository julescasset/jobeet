<?php

/* :job:admin.html.twig */
class __TwigTemplate_ba3f1c1f7865143d17b2cb03317881659bd4fba1816d81e1ed7f1870d1376882 extends Twig_Template
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
        // line 1
        echo "<div id=\"job_actions\">
    <h3>Admin</h3>
    <ul>
        ";
        // line 4
        if ( !$this->getAttribute((isset($context["job"]) ? $context["job"] : null), "isActivated", array())) {
            // line 5
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_edit", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "token", array()))), "html", null, true);
            echo "\">Edit</a></li>
            <li><form action=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_publish", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "token", array()))), "html", null, true);
            echo "\" method=\"post\">
                    ";
            // line 7
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["publish_form"]) ? $context["publish_form"] : null), 'widget');
            echo "
                    <button type=\"submit\">Publish</button>
                </form>
            </li>
        ";
        }
        // line 12
        echo "        <li>
            <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("job_delete", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "token", array()))), "html", null, true);
        echo "\" method=\"post\">
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
                <button type=\"submit\" onclick=\"if(!confirm('Are you sure?')) { return false; }\">Delete</button>
            </form>
        </li>
        ";
        // line 18
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "isActivated", array())) {
            // line 19
            echo "            <li ";
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "expiresSoon", array())) {
                echo " class=\"expires_soon\" ";
            }
            echo ">
                ";
            // line 20
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "isExpired", array())) {
                // line 21
                echo "                    Expired
                ";
            } else {
                // line 23
                echo "                    Expires in <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "getDaysBeforeExpires", array()), "html", null, true);
                echo "</strong> days
                ";
            }
            // line 25
            echo "
                ";
            // line 26
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "expiresSoon", array())) {
                // line 27
                echo "                    - <a href=\"\">Extend</a> for another 30 days
                ";
            }
            // line 29
            echo "            </li>
        ";
        } else {
            // line 31
            echo "            <li>
                [Bookmark this <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("job_preview", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "token", array()), "company" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "companyslug", array()), "location" => $this->getAttribute(            // line 33
(isset($context["job"]) ? $context["job"] : null), "locationslug", array()), "position" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "positionslug", array()))), "html", null, true);
            echo "\">URL</a>
                to manage this job in the future.]
            </li>
        ";
        }
        // line 37
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return ":job:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 37,  95 => 33,  94 => 32,  91 => 31,  87 => 29,  83 => 27,  81 => 26,  78 => 25,  72 => 23,  68 => 21,  66 => 20,  59 => 19,  57 => 18,  50 => 14,  46 => 13,  43 => 12,  35 => 7,  31 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div id="job_actions">*/
/*     <h3>Admin</h3>*/
/*     <ul>*/
/*         {% if not job.isActivated %}*/
/*             <li><a href="{{ path('job_edit', { 'token': job.token }) }}">Edit</a></li>*/
/*             <li><form action="{{ path('job_publish', { 'token': job.token }) }}" method="post">*/
/*                     {{ form_widget(publish_form) }}*/
/*                     <button type="submit">Publish</button>*/
/*                 </form>*/
/*             </li>*/
/*         {% endif %}*/
/*         <li>*/
/*             <form action="{{ path('job_delete', { 'token': job.token }) }}" method="post">*/
/*                 {{ form_widget(delete_form) }}*/
/*                 <button type="submit" onclick="if(!confirm('Are you sure?')) { return false; }">Delete</button>*/
/*             </form>*/
/*         </li>*/
/*         {% if job.isActivated %}*/
/*             <li {% if job.expiresSoon %} class="expires_soon" {% endif %}>*/
/*                 {% if job.isExpired %}*/
/*                     Expired*/
/*                 {% else %}*/
/*                     Expires in <strong>{{ job.getDaysBeforeExpires }}</strong> days*/
/*                 {% endif %}*/
/* */
/*                 {% if job.expiresSoon %}*/
/*                     - <a href="">Extend</a> for another 30 days*/
/*                 {% endif %}*/
/*             </li>*/
/*         {% else %}*/
/*             <li>*/
/*                 [Bookmark this <a href="{{ url('job_preview', { 'token': job.token, 'company': job.companyslug,*/
/*                     'location': job.locationslug, 'position': job.positionslug }) }}">URL</a>*/
/*                 to manage this job in the future.]*/
/*             </li>*/
/*         {% endif %}*/
/*     </ul>*/
/* </div>*/
