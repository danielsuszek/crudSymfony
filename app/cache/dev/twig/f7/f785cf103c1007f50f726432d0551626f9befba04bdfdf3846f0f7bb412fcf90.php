<?php

/* DevTaskBundle:Task:edit.html.twig */
class __TwigTemplate_fcd2a4b45fcc50c9d440f5d86a0b4577ffaaeab1da705f8b912818b1a81ffcc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DevTaskBundle:Task:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a57ebef13b51a1946f9edd3e7f3f2ff09bacae2cb8b477b360e27abf64f3530e = $this->env->getExtension("native_profiler");
        $__internal_a57ebef13b51a1946f9edd3e7f3f2ff09bacae2cb8b477b360e27abf64f3530e->enter($__internal_a57ebef13b51a1946f9edd3e7f3f2ff09bacae2cb8b477b360e27abf64f3530e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevTaskBundle:Task:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a57ebef13b51a1946f9edd3e7f3f2ff09bacae2cb8b477b360e27abf64f3530e->leave($__internal_a57ebef13b51a1946f9edd3e7f3f2ff09bacae2cb8b477b360e27abf64f3530e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d52374abd7f80aa052cd08326bb6d670c3aeef5e4ac099fc7e202af1a81eef9 = $this->env->getExtension("native_profiler");
        $__internal_0d52374abd7f80aa052cd08326bb6d670c3aeef5e4ac099fc7e202af1a81eef9->enter($__internal_0d52374abd7f80aa052cd08326bb6d670c3aeef5e4ac099fc7e202af1a81eef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Task edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("task");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_0d52374abd7f80aa052cd08326bb6d670c3aeef5e4ac099fc7e202af1a81eef9->leave($__internal_0d52374abd7f80aa052cd08326bb6d670c3aeef5e4ac099fc7e202af1a81eef9_prof);

    }

    public function getTemplateName()
    {
        return "DevTaskBundle:Task:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Task edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('task') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
