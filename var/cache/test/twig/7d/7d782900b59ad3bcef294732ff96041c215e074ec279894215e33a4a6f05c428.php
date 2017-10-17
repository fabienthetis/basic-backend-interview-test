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
        $__internal_1560a5edd3d44cf5f8b4f935a106a8233828d28faf201904478df633cbd515b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1560a5edd3d44cf5f8b4f935a106a8233828d28faf201904478df633cbd515b4->enter($__internal_1560a5edd3d44cf5f8b4f935a106a8233828d28faf201904478df633cbd515b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f7f848ca2a0b8527d16ee19dff57abc7fff96a0a52967e6366df5b7949d4e3ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f848ca2a0b8527d16ee19dff57abc7fff96a0a52967e6366df5b7949d4e3ed->enter($__internal_f7f848ca2a0b8527d16ee19dff57abc7fff96a0a52967e6366df5b7949d4e3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_1560a5edd3d44cf5f8b4f935a106a8233828d28faf201904478df633cbd515b4->leave($__internal_1560a5edd3d44cf5f8b4f935a106a8233828d28faf201904478df633cbd515b4_prof);

        
        $__internal_f7f848ca2a0b8527d16ee19dff57abc7fff96a0a52967e6366df5b7949d4e3ed->leave($__internal_f7f848ca2a0b8527d16ee19dff57abc7fff96a0a52967e6366df5b7949d4e3ed_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e163b32a0ebbb6748049702582b90d4816f33910e74a7c7a38bd2798e8d5cb2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e163b32a0ebbb6748049702582b90d4816f33910e74a7c7a38bd2798e8d5cb2f->enter($__internal_e163b32a0ebbb6748049702582b90d4816f33910e74a7c7a38bd2798e8d5cb2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_df9cce2a83df721f5db14b476c8819e8a952b97bc13e47ccb0d2f8d5ae3657b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9cce2a83df721f5db14b476c8819e8a952b97bc13e47ccb0d2f8d5ae3657b3->enter($__internal_df9cce2a83df721f5db14b476c8819e8a952b97bc13e47ccb0d2f8d5ae3657b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_df9cce2a83df721f5db14b476c8819e8a952b97bc13e47ccb0d2f8d5ae3657b3->leave($__internal_df9cce2a83df721f5db14b476c8819e8a952b97bc13e47ccb0d2f8d5ae3657b3_prof);

        
        $__internal_e163b32a0ebbb6748049702582b90d4816f33910e74a7c7a38bd2798e8d5cb2f->leave($__internal_e163b32a0ebbb6748049702582b90d4816f33910e74a7c7a38bd2798e8d5cb2f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_59a317dd5164555f9dc427a40168d4ca146be314932daf639a4a410ec5b5175b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59a317dd5164555f9dc427a40168d4ca146be314932daf639a4a410ec5b5175b->enter($__internal_59a317dd5164555f9dc427a40168d4ca146be314932daf639a4a410ec5b5175b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6160cc4a4132da36faa54162b67c256355349f9ac979bd74b5c55f3aa8c4af0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6160cc4a4132da36faa54162b67c256355349f9ac979bd74b5c55f3aa8c4af0d->enter($__internal_6160cc4a4132da36faa54162b67c256355349f9ac979bd74b5c55f3aa8c4af0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6160cc4a4132da36faa54162b67c256355349f9ac979bd74b5c55f3aa8c4af0d->leave($__internal_6160cc4a4132da36faa54162b67c256355349f9ac979bd74b5c55f3aa8c4af0d_prof);

        
        $__internal_59a317dd5164555f9dc427a40168d4ca146be314932daf639a4a410ec5b5175b->leave($__internal_59a317dd5164555f9dc427a40168d4ca146be314932daf639a4a410ec5b5175b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_492651b0bc71f97edc19b6bb9d29c7d6033b08ace0b2ac9c48a8a79a0afc1827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_492651b0bc71f97edc19b6bb9d29c7d6033b08ace0b2ac9c48a8a79a0afc1827->enter($__internal_492651b0bc71f97edc19b6bb9d29c7d6033b08ace0b2ac9c48a8a79a0afc1827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_039b5514526786bf82e0ace691f2816c5e7418a95f52f900befaaca285253bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_039b5514526786bf82e0ace691f2816c5e7418a95f52f900befaaca285253bbe->enter($__internal_039b5514526786bf82e0ace691f2816c5e7418a95f52f900befaaca285253bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_039b5514526786bf82e0ace691f2816c5e7418a95f52f900befaaca285253bbe->leave($__internal_039b5514526786bf82e0ace691f2816c5e7418a95f52f900befaaca285253bbe_prof);

        
        $__internal_492651b0bc71f97edc19b6bb9d29c7d6033b08ace0b2ac9c48a8a79a0afc1827->leave($__internal_492651b0bc71f97edc19b6bb9d29c7d6033b08ace0b2ac9c48a8a79a0afc1827_prof);

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
