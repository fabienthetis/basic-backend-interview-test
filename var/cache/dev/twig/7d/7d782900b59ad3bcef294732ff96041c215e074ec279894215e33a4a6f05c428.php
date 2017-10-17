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
        $__internal_79f6acd43e29d8d5101496f6a3bcf1d1e5b74a517281bd8c87331b0b863450d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f6acd43e29d8d5101496f6a3bcf1d1e5b74a517281bd8c87331b0b863450d9->enter($__internal_79f6acd43e29d8d5101496f6a3bcf1d1e5b74a517281bd8c87331b0b863450d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_6127af1bcc0b908a6057501ddff25ddfbcc2e8e7e63220e95630358598e556dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6127af1bcc0b908a6057501ddff25ddfbcc2e8e7e63220e95630358598e556dc->enter($__internal_6127af1bcc0b908a6057501ddff25ddfbcc2e8e7e63220e95630358598e556dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_79f6acd43e29d8d5101496f6a3bcf1d1e5b74a517281bd8c87331b0b863450d9->leave($__internal_79f6acd43e29d8d5101496f6a3bcf1d1e5b74a517281bd8c87331b0b863450d9_prof);

        
        $__internal_6127af1bcc0b908a6057501ddff25ddfbcc2e8e7e63220e95630358598e556dc->leave($__internal_6127af1bcc0b908a6057501ddff25ddfbcc2e8e7e63220e95630358598e556dc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_69480621c7ebcf06b260f43f44c5755dd3e8799bae6ccb3b125ffb6054de6846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69480621c7ebcf06b260f43f44c5755dd3e8799bae6ccb3b125ffb6054de6846->enter($__internal_69480621c7ebcf06b260f43f44c5755dd3e8799bae6ccb3b125ffb6054de6846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8e95c93d4e56aac04e724e0021035926085d756b60407275318ddef02925928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e95c93d4e56aac04e724e0021035926085d756b60407275318ddef02925928->enter($__internal_b8e95c93d4e56aac04e724e0021035926085d756b60407275318ddef02925928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b8e95c93d4e56aac04e724e0021035926085d756b60407275318ddef02925928->leave($__internal_b8e95c93d4e56aac04e724e0021035926085d756b60407275318ddef02925928_prof);

        
        $__internal_69480621c7ebcf06b260f43f44c5755dd3e8799bae6ccb3b125ffb6054de6846->leave($__internal_69480621c7ebcf06b260f43f44c5755dd3e8799bae6ccb3b125ffb6054de6846_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6d0d88d3efe9d86d6f11d9bb756a7469261014fffe48cbcd37f55bb9e017667c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d0d88d3efe9d86d6f11d9bb756a7469261014fffe48cbcd37f55bb9e017667c->enter($__internal_6d0d88d3efe9d86d6f11d9bb756a7469261014fffe48cbcd37f55bb9e017667c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ffe9d24506e84a12448912e2f9875e0b4a65aebb5ccca3df76098a6857af3244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe9d24506e84a12448912e2f9875e0b4a65aebb5ccca3df76098a6857af3244->enter($__internal_ffe9d24506e84a12448912e2f9875e0b4a65aebb5ccca3df76098a6857af3244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ffe9d24506e84a12448912e2f9875e0b4a65aebb5ccca3df76098a6857af3244->leave($__internal_ffe9d24506e84a12448912e2f9875e0b4a65aebb5ccca3df76098a6857af3244_prof);

        
        $__internal_6d0d88d3efe9d86d6f11d9bb756a7469261014fffe48cbcd37f55bb9e017667c->leave($__internal_6d0d88d3efe9d86d6f11d9bb756a7469261014fffe48cbcd37f55bb9e017667c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5b7c8096b887a43a7f3e26aa6de855bb61551d5ab8b3bfa28d53794c4f28f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5b7c8096b887a43a7f3e26aa6de855bb61551d5ab8b3bfa28d53794c4f28f53->enter($__internal_f5b7c8096b887a43a7f3e26aa6de855bb61551d5ab8b3bfa28d53794c4f28f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c64b67f766d8cc33cb2f3617299a86ca8f5395fa5dc706921d53000c3128864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c64b67f766d8cc33cb2f3617299a86ca8f5395fa5dc706921d53000c3128864->enter($__internal_9c64b67f766d8cc33cb2f3617299a86ca8f5395fa5dc706921d53000c3128864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9c64b67f766d8cc33cb2f3617299a86ca8f5395fa5dc706921d53000c3128864->leave($__internal_9c64b67f766d8cc33cb2f3617299a86ca8f5395fa5dc706921d53000c3128864_prof);

        
        $__internal_f5b7c8096b887a43a7f3e26aa6de855bb61551d5ab8b3bfa28d53794c4f28f53->leave($__internal_f5b7c8096b887a43a7f3e26aa6de855bb61551d5ab8b3bfa28d53794c4f28f53_prof);

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
", "@Twig/layout.html.twig", "/Users/fabienthetis/my_project_name_save/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
