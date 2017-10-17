<?php

/* base.html.twig */
class __TwigTemplate_022e5fbe7553c6a016dcf07c24e69cb5d15b6be45fa6378c7d9809f11e8f699d extends Twig_Template
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
        $__internal_ca3e4081d4e2d62ce6f572f2c9b08582763e0e9ec5f148c506f94ea2f9b79dcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca3e4081d4e2d62ce6f572f2c9b08582763e0e9ec5f148c506f94ea2f9b79dcc->enter($__internal_ca3e4081d4e2d62ce6f572f2c9b08582763e0e9ec5f148c506f94ea2f9b79dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c42fb7bfdb91bbb940873db4ca35060e5e0ac0103f84199ea1f4a1e151c9f941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c42fb7bfdb91bbb940873db4ca35060e5e0ac0103f84199ea1f4a1e151c9f941->enter($__internal_c42fb7bfdb91bbb940873db4ca35060e5e0ac0103f84199ea1f4a1e151c9f941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_ca3e4081d4e2d62ce6f572f2c9b08582763e0e9ec5f148c506f94ea2f9b79dcc->leave($__internal_ca3e4081d4e2d62ce6f572f2c9b08582763e0e9ec5f148c506f94ea2f9b79dcc_prof);

        
        $__internal_c42fb7bfdb91bbb940873db4ca35060e5e0ac0103f84199ea1f4a1e151c9f941->leave($__internal_c42fb7bfdb91bbb940873db4ca35060e5e0ac0103f84199ea1f4a1e151c9f941_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8bc5b25399b63d3cbbfe5f96283137a19bde577ce8ab5d409594ee4f6c36a04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8bc5b25399b63d3cbbfe5f96283137a19bde577ce8ab5d409594ee4f6c36a04->enter($__internal_d8bc5b25399b63d3cbbfe5f96283137a19bde577ce8ab5d409594ee4f6c36a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9433ee6e308968d0f374309d833699c917b38faeac441c6c11ce6cbc72403893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9433ee6e308968d0f374309d833699c917b38faeac441c6c11ce6cbc72403893->enter($__internal_9433ee6e308968d0f374309d833699c917b38faeac441c6c11ce6cbc72403893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9433ee6e308968d0f374309d833699c917b38faeac441c6c11ce6cbc72403893->leave($__internal_9433ee6e308968d0f374309d833699c917b38faeac441c6c11ce6cbc72403893_prof);

        
        $__internal_d8bc5b25399b63d3cbbfe5f96283137a19bde577ce8ab5d409594ee4f6c36a04->leave($__internal_d8bc5b25399b63d3cbbfe5f96283137a19bde577ce8ab5d409594ee4f6c36a04_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_56a7905bd965ef0c368416f2d591e884c4f52cea0095439307432b8a644646cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56a7905bd965ef0c368416f2d591e884c4f52cea0095439307432b8a644646cc->enter($__internal_56a7905bd965ef0c368416f2d591e884c4f52cea0095439307432b8a644646cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_935139e23e3351450350fcfaf633940fc40b871aa5b3c3bc8ac627b64731d20a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_935139e23e3351450350fcfaf633940fc40b871aa5b3c3bc8ac627b64731d20a->enter($__internal_935139e23e3351450350fcfaf633940fc40b871aa5b3c3bc8ac627b64731d20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_935139e23e3351450350fcfaf633940fc40b871aa5b3c3bc8ac627b64731d20a->leave($__internal_935139e23e3351450350fcfaf633940fc40b871aa5b3c3bc8ac627b64731d20a_prof);

        
        $__internal_56a7905bd965ef0c368416f2d591e884c4f52cea0095439307432b8a644646cc->leave($__internal_56a7905bd965ef0c368416f2d591e884c4f52cea0095439307432b8a644646cc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_64da2d628f51663915d08fa43ba3abbaa97915f7f9663a0e6245482f43c6cbaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64da2d628f51663915d08fa43ba3abbaa97915f7f9663a0e6245482f43c6cbaf->enter($__internal_64da2d628f51663915d08fa43ba3abbaa97915f7f9663a0e6245482f43c6cbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f340b2097a4aa841dbba01d44a260ad3351140c3ed67655995d3a0f5fb08f9b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f340b2097a4aa841dbba01d44a260ad3351140c3ed67655995d3a0f5fb08f9b9->enter($__internal_f340b2097a4aa841dbba01d44a260ad3351140c3ed67655995d3a0f5fb08f9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f340b2097a4aa841dbba01d44a260ad3351140c3ed67655995d3a0f5fb08f9b9->leave($__internal_f340b2097a4aa841dbba01d44a260ad3351140c3ed67655995d3a0f5fb08f9b9_prof);

        
        $__internal_64da2d628f51663915d08fa43ba3abbaa97915f7f9663a0e6245482f43c6cbaf->leave($__internal_64da2d628f51663915d08fa43ba3abbaa97915f7f9663a0e6245482f43c6cbaf_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d742d8cdc26be353e863158dbbae9645adf9a741856031ece53102ac0b87086e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d742d8cdc26be353e863158dbbae9645adf9a741856031ece53102ac0b87086e->enter($__internal_d742d8cdc26be353e863158dbbae9645adf9a741856031ece53102ac0b87086e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b864cf93663ad4021eb935ad474d77d70cfed241864ba7155fcbd22092f9f13f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b864cf93663ad4021eb935ad474d77d70cfed241864ba7155fcbd22092f9f13f->enter($__internal_b864cf93663ad4021eb935ad474d77d70cfed241864ba7155fcbd22092f9f13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b864cf93663ad4021eb935ad474d77d70cfed241864ba7155fcbd22092f9f13f->leave($__internal_b864cf93663ad4021eb935ad474d77d70cfed241864ba7155fcbd22092f9f13f_prof);

        
        $__internal_d742d8cdc26be353e863158dbbae9645adf9a741856031ece53102ac0b87086e->leave($__internal_d742d8cdc26be353e863158dbbae9645adf9a741856031ece53102ac0b87086e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/fabienthetis/my_project_name/app/Resources/views/base.html.twig");
    }
}
