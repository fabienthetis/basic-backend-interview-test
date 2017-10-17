<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0daaa3d5cfd073d06a3840dd526eb53dc2929fac357308915d14d50f05ae0819 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d536c1d0891de656ea96608765428d6b235d5699a24b36a21983a6c817be0cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d536c1d0891de656ea96608765428d6b235d5699a24b36a21983a6c817be0cb->enter($__internal_8d536c1d0891de656ea96608765428d6b235d5699a24b36a21983a6c817be0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0bfc9e594613e370e607307cc73a1022595b99945fa18491e4a543e3ed975368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bfc9e594613e370e607307cc73a1022595b99945fa18491e4a543e3ed975368->enter($__internal_0bfc9e594613e370e607307cc73a1022595b99945fa18491e4a543e3ed975368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d536c1d0891de656ea96608765428d6b235d5699a24b36a21983a6c817be0cb->leave($__internal_8d536c1d0891de656ea96608765428d6b235d5699a24b36a21983a6c817be0cb_prof);

        
        $__internal_0bfc9e594613e370e607307cc73a1022595b99945fa18491e4a543e3ed975368->leave($__internal_0bfc9e594613e370e607307cc73a1022595b99945fa18491e4a543e3ed975368_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4879ed9add5bf34b721cc53c49ac0a55487a2a6ad1f035e79e3cefeb6a81b9f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4879ed9add5bf34b721cc53c49ac0a55487a2a6ad1f035e79e3cefeb6a81b9f6->enter($__internal_4879ed9add5bf34b721cc53c49ac0a55487a2a6ad1f035e79e3cefeb6a81b9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_39559b35bc6d9e92bc9dd4113b2b72729de68ebd58dd3c65c383a87a5b76433b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39559b35bc6d9e92bc9dd4113b2b72729de68ebd58dd3c65c383a87a5b76433b->enter($__internal_39559b35bc6d9e92bc9dd4113b2b72729de68ebd58dd3c65c383a87a5b76433b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_39559b35bc6d9e92bc9dd4113b2b72729de68ebd58dd3c65c383a87a5b76433b->leave($__internal_39559b35bc6d9e92bc9dd4113b2b72729de68ebd58dd3c65c383a87a5b76433b_prof);

        
        $__internal_4879ed9add5bf34b721cc53c49ac0a55487a2a6ad1f035e79e3cefeb6a81b9f6->leave($__internal_4879ed9add5bf34b721cc53c49ac0a55487a2a6ad1f035e79e3cefeb6a81b9f6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_407dde586e5e30d599ba031e8dea27b80cdf158551e7d482aac2d81d307a5d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_407dde586e5e30d599ba031e8dea27b80cdf158551e7d482aac2d81d307a5d36->enter($__internal_407dde586e5e30d599ba031e8dea27b80cdf158551e7d482aac2d81d307a5d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aeed513fd51ac82179c46ceb88325d17a0e255467d5157fe82c504df760c508e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeed513fd51ac82179c46ceb88325d17a0e255467d5157fe82c504df760c508e->enter($__internal_aeed513fd51ac82179c46ceb88325d17a0e255467d5157fe82c504df760c508e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aeed513fd51ac82179c46ceb88325d17a0e255467d5157fe82c504df760c508e->leave($__internal_aeed513fd51ac82179c46ceb88325d17a0e255467d5157fe82c504df760c508e_prof);

        
        $__internal_407dde586e5e30d599ba031e8dea27b80cdf158551e7d482aac2d81d307a5d36->leave($__internal_407dde586e5e30d599ba031e8dea27b80cdf158551e7d482aac2d81d307a5d36_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c09ea96a86b487eebe46d88da0d67fb8a455012bd3ac5161909d34742f131a39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c09ea96a86b487eebe46d88da0d67fb8a455012bd3ac5161909d34742f131a39->enter($__internal_c09ea96a86b487eebe46d88da0d67fb8a455012bd3ac5161909d34742f131a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_934d4eda4469b6930c93671d9de3b94d700dfa24af369d7118dcef11eca13e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_934d4eda4469b6930c93671d9de3b94d700dfa24af369d7118dcef11eca13e88->enter($__internal_934d4eda4469b6930c93671d9de3b94d700dfa24af369d7118dcef11eca13e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_934d4eda4469b6930c93671d9de3b94d700dfa24af369d7118dcef11eca13e88->leave($__internal_934d4eda4469b6930c93671d9de3b94d700dfa24af369d7118dcef11eca13e88_prof);

        
        $__internal_c09ea96a86b487eebe46d88da0d67fb8a455012bd3ac5161909d34742f131a39->leave($__internal_c09ea96a86b487eebe46d88da0d67fb8a455012bd3ac5161909d34742f131a39_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/fabienthetis/my_project_name_save/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
