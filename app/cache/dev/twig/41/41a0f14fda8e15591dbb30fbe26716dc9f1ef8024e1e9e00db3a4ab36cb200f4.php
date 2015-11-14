<?php

/* ::base.html.twig */
class __TwigTemplate_b8474f471154b67277f0f9e279065ea56fb0fdd73a00615b2258d31b0cc0c17a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7663c4387f94a7be6123a465e73ee7404da4545ac09f36b04f1835e076d9e3fd = $this->env->getExtension("native_profiler");
        $__internal_7663c4387f94a7be6123a465e73ee7404da4545ac09f36b04f1835e076d9e3fd->enter($__internal_7663c4387f94a7be6123a465e73ee7404da4545ac09f36b04f1835e076d9e3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7663c4387f94a7be6123a465e73ee7404da4545ac09f36b04f1835e076d9e3fd->leave($__internal_7663c4387f94a7be6123a465e73ee7404da4545ac09f36b04f1835e076d9e3fd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f83a181e1440f1afd8c17ddd27bc97917c70553836365d9c7e4daf6bd044265a = $this->env->getExtension("native_profiler");
        $__internal_f83a181e1440f1afd8c17ddd27bc97917c70553836365d9c7e4daf6bd044265a->enter($__internal_f83a181e1440f1afd8c17ddd27bc97917c70553836365d9c7e4daf6bd044265a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony 2 CRUD";
        
        $__internal_f83a181e1440f1afd8c17ddd27bc97917c70553836365d9c7e4daf6bd044265a->leave($__internal_f83a181e1440f1afd8c17ddd27bc97917c70553836365d9c7e4daf6bd044265a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc8e3fa7ce0f263d65c669fadbcd432427422de876f422d874aceec2d00584ba = $this->env->getExtension("native_profiler");
        $__internal_cc8e3fa7ce0f263d65c669fadbcd432427422de876f422d874aceec2d00584ba->enter($__internal_cc8e3fa7ce0f263d65c669fadbcd432427422de876f422d874aceec2d00584ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cc8e3fa7ce0f263d65c669fadbcd432427422de876f422d874aceec2d00584ba->leave($__internal_cc8e3fa7ce0f263d65c669fadbcd432427422de876f422d874aceec2d00584ba_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d62f27ce97552d250ffd207c316d4a687af5f28f9a7958466e3fe9b740a22d77 = $this->env->getExtension("native_profiler");
        $__internal_d62f27ce97552d250ffd207c316d4a687af5f28f9a7958466e3fe9b740a22d77->enter($__internal_d62f27ce97552d250ffd207c316d4a687af5f28f9a7958466e3fe9b740a22d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d62f27ce97552d250ffd207c316d4a687af5f28f9a7958466e3fe9b740a22d77->leave($__internal_d62f27ce97552d250ffd207c316d4a687af5f28f9a7958466e3fe9b740a22d77_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b27b3fd143f31371b745fed5ce74177109dbe2e910a63c894a9eb52700a4f4ca = $this->env->getExtension("native_profiler");
        $__internal_b27b3fd143f31371b745fed5ce74177109dbe2e910a63c894a9eb52700a4f4ca->enter($__internal_b27b3fd143f31371b745fed5ce74177109dbe2e910a63c894a9eb52700a4f4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b27b3fd143f31371b745fed5ce74177109dbe2e910a63c894a9eb52700a4f4ca->leave($__internal_b27b3fd143f31371b745fed5ce74177109dbe2e910a63c894a9eb52700a4f4ca_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Symfony 2 CRUD{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
