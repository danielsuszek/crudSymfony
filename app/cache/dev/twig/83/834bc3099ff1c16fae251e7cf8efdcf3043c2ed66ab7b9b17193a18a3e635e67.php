<?php

/* DevTaskBundle:Task:new.html.twig */
class __TwigTemplate_a3b5fb54e703fdf31a16c91c3449d759a71bfadf8fc28261d9715135dd2dec05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DevTaskBundle:Task:new.html.twig", 1);
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
        $__internal_f135936c5ef5660bd6b41719736b13d6f94fbfd3cafa98eabd6006d10cd26a9a = $this->env->getExtension("native_profiler");
        $__internal_f135936c5ef5660bd6b41719736b13d6f94fbfd3cafa98eabd6006d10cd26a9a->enter($__internal_f135936c5ef5660bd6b41719736b13d6f94fbfd3cafa98eabd6006d10cd26a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevTaskBundle:Task:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f135936c5ef5660bd6b41719736b13d6f94fbfd3cafa98eabd6006d10cd26a9a->leave($__internal_f135936c5ef5660bd6b41719736b13d6f94fbfd3cafa98eabd6006d10cd26a9a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_354be993c77352a24d471e37d881aeea1fb00f281ab137a521d3734ea5cd1933 = $this->env->getExtension("native_profiler");
        $__internal_354be993c77352a24d471e37d881aeea1fb00f281ab137a521d3734ea5cd1933->enter($__internal_354be993c77352a24d471e37d881aeea1fb00f281ab137a521d3734ea5cd1933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Task creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
</ul>
";
        
        $__internal_354be993c77352a24d471e37d881aeea1fb00f281ab137a521d3734ea5cd1933->leave($__internal_354be993c77352a24d471e37d881aeea1fb00f281ab137a521d3734ea5cd1933_prof);

    }

    public function getTemplateName()
    {
        return "DevTaskBundle:Task:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Task creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('task') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
