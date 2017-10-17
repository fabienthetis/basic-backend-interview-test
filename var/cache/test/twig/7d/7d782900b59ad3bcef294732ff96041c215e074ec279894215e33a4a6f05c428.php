<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_66e7e75ec9c0010641dbe585aeeac70571ef1f0833e1a7882f58c23aa7e6cdbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_284f3c49f637e91b1740c333a683988bea9c0f96ee94e3f304b0c89b274afd90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_284f3c49f637e91b1740c333a683988bea9c0f96ee94e3f304b0c89b274afd90->enter($__internal_284f3c49f637e91b1740c333a683988bea9c0f96ee94e3f304b0c89b274afd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_72811d0ccc1298d1efa01ba5f9037e4fa81a7c131b61b771f1cdec62a492ee86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72811d0ccc1298d1efa01ba5f9037e4fa81a7c131b61b771f1cdec62a492ee86->enter($__internal_72811d0ccc1298d1efa01ba5f9037e4fa81a7c131b61b771f1cdec62a492ee86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_284f3c49f637e91b1740c333a683988bea9c0f96ee94e3f304b0c89b274afd90->leave($__internal_284f3c49f637e91b1740c333a683988bea9c0f96ee94e3f304b0c89b274afd90_prof);

        
        $__internal_72811d0ccc1298d1efa01ba5f9037e4fa81a7c131b61b771f1cdec62a492ee86->leave($__internal_72811d0ccc1298d1efa01ba5f9037e4fa81a7c131b61b771f1cdec62a492ee86_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_934fc90ee0e19836d155df6d0c60ca87ac353f0f9b64bfcf302479dabc7a6b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_934fc90ee0e19836d155df6d0c60ca87ac353f0f9b64bfcf302479dabc7a6b4c->enter($__internal_934fc90ee0e19836d155df6d0c60ca87ac353f0f9b64bfcf302479dabc7a6b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7ca5c044bbb1ec8a1b53c5b2d7eb6a327f61fe98a1aa1497741080c7277671c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca5c044bbb1ec8a1b53c5b2d7eb6a327f61fe98a1aa1497741080c7277671c4->enter($__internal_7ca5c044bbb1ec8a1b53c5b2d7eb6a327f61fe98a1aa1497741080c7277671c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7ca5c044bbb1ec8a1b53c5b2d7eb6a327f61fe98a1aa1497741080c7277671c4->leave($__internal_7ca5c044bbb1ec8a1b53c5b2d7eb6a327f61fe98a1aa1497741080c7277671c4_prof);

        
        $__internal_934fc90ee0e19836d155df6d0c60ca87ac353f0f9b64bfcf302479dabc7a6b4c->leave($__internal_934fc90ee0e19836d155df6d0c60ca87ac353f0f9b64bfcf302479dabc7a6b4c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7fa5de7c7be4adaa2b0f7ee6ebd0f518d84001488fcc2341a109f6913a08ea65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fa5de7c7be4adaa2b0f7ee6ebd0f518d84001488fcc2341a109f6913a08ea65->enter($__internal_7fa5de7c7be4adaa2b0f7ee6ebd0f518d84001488fcc2341a109f6913a08ea65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d225a3e8789527b0c774383c6ff7c2c82093b9e2a0f67107c25985eaf7658742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d225a3e8789527b0c774383c6ff7c2c82093b9e2a0f67107c25985eaf7658742->enter($__internal_d225a3e8789527b0c774383c6ff7c2c82093b9e2a0f67107c25985eaf7658742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d225a3e8789527b0c774383c6ff7c2c82093b9e2a0f67107c25985eaf7658742->leave($__internal_d225a3e8789527b0c774383c6ff7c2c82093b9e2a0f67107c25985eaf7658742_prof);

        
        $__internal_7fa5de7c7be4adaa2b0f7ee6ebd0f518d84001488fcc2341a109f6913a08ea65->leave($__internal_7fa5de7c7be4adaa2b0f7ee6ebd0f518d84001488fcc2341a109f6913a08ea65_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_448c351135532e59688d9470f0d0fd294df126ebd6ebb5e8acb79f105a55dd26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_448c351135532e59688d9470f0d0fd294df126ebd6ebb5e8acb79f105a55dd26->enter($__internal_448c351135532e59688d9470f0d0fd294df126ebd6ebb5e8acb79f105a55dd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e06f962e90fa74a65b7b1e3104717455edefe7f170e7b2c1cc57b0db963f27cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e06f962e90fa74a65b7b1e3104717455edefe7f170e7b2c1cc57b0db963f27cd->enter($__internal_e06f962e90fa74a65b7b1e3104717455edefe7f170e7b2c1cc57b0db963f27cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e06f962e90fa74a65b7b1e3104717455edefe7f170e7b2c1cc57b0db963f27cd->leave($__internal_e06f962e90fa74a65b7b1e3104717455edefe7f170e7b2c1cc57b0db963f27cd_prof);

        
        $__internal_448c351135532e59688d9470f0d0fd294df126ebd6ebb5e8acb79f105a55dd26->leave($__internal_448c351135532e59688d9470f0d0fd294df126ebd6ebb5e8acb79f105a55dd26_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/fabienthetis/GIT_TEST/basic-backend-interview-test/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
