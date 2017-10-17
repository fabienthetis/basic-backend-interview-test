<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9686a4200268e8228f08a645977c6ab94f42aa617b6e80356a4d3defaa116264 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_82dc0f220f14b68638c2db4ecf589b1d0810dd759d0e8088bf8fb61dd79009b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82dc0f220f14b68638c2db4ecf589b1d0810dd759d0e8088bf8fb61dd79009b5->enter($__internal_82dc0f220f14b68638c2db4ecf589b1d0810dd759d0e8088bf8fb61dd79009b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1c99ee5779a86f4a7c9ce4b7a38cd8b635e4729474fad9e9cf61530c7ef9097d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c99ee5779a86f4a7c9ce4b7a38cd8b635e4729474fad9e9cf61530c7ef9097d->enter($__internal_1c99ee5779a86f4a7c9ce4b7a38cd8b635e4729474fad9e9cf61530c7ef9097d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82dc0f220f14b68638c2db4ecf589b1d0810dd759d0e8088bf8fb61dd79009b5->leave($__internal_82dc0f220f14b68638c2db4ecf589b1d0810dd759d0e8088bf8fb61dd79009b5_prof);

        
        $__internal_1c99ee5779a86f4a7c9ce4b7a38cd8b635e4729474fad9e9cf61530c7ef9097d->leave($__internal_1c99ee5779a86f4a7c9ce4b7a38cd8b635e4729474fad9e9cf61530c7ef9097d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c78907652ffae2255aaf99e5298786c2d463d4f3ac61519988864e3876246029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c78907652ffae2255aaf99e5298786c2d463d4f3ac61519988864e3876246029->enter($__internal_c78907652ffae2255aaf99e5298786c2d463d4f3ac61519988864e3876246029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a09e94dad3ba84f8d6f86ecc9b61b584a658b00394eff251e48e95de49725caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09e94dad3ba84f8d6f86ecc9b61b584a658b00394eff251e48e95de49725caa->enter($__internal_a09e94dad3ba84f8d6f86ecc9b61b584a658b00394eff251e48e95de49725caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a09e94dad3ba84f8d6f86ecc9b61b584a658b00394eff251e48e95de49725caa->leave($__internal_a09e94dad3ba84f8d6f86ecc9b61b584a658b00394eff251e48e95de49725caa_prof);

        
        $__internal_c78907652ffae2255aaf99e5298786c2d463d4f3ac61519988864e3876246029->leave($__internal_c78907652ffae2255aaf99e5298786c2d463d4f3ac61519988864e3876246029_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d53d8e6e5cab37e653ac359a83e4fb064caf0cca9ab5e32fe0a71046848c900b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d53d8e6e5cab37e653ac359a83e4fb064caf0cca9ab5e32fe0a71046848c900b->enter($__internal_d53d8e6e5cab37e653ac359a83e4fb064caf0cca9ab5e32fe0a71046848c900b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8ac7922cdbc85072d23d71e38f7d5681fc1524aa1ce921c6c5b54e10c71f8b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac7922cdbc85072d23d71e38f7d5681fc1524aa1ce921c6c5b54e10c71f8b18->enter($__internal_8ac7922cdbc85072d23d71e38f7d5681fc1524aa1ce921c6c5b54e10c71f8b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8ac7922cdbc85072d23d71e38f7d5681fc1524aa1ce921c6c5b54e10c71f8b18->leave($__internal_8ac7922cdbc85072d23d71e38f7d5681fc1524aa1ce921c6c5b54e10c71f8b18_prof);

        
        $__internal_d53d8e6e5cab37e653ac359a83e4fb064caf0cca9ab5e32fe0a71046848c900b->leave($__internal_d53d8e6e5cab37e653ac359a83e4fb064caf0cca9ab5e32fe0a71046848c900b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8f10ada5c56abd8ddf7c730c7b66cbefcb7a2e879902ee409e483e6da257c18b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f10ada5c56abd8ddf7c730c7b66cbefcb7a2e879902ee409e483e6da257c18b->enter($__internal_8f10ada5c56abd8ddf7c730c7b66cbefcb7a2e879902ee409e483e6da257c18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_62211c0e306b98951d5af312518c00fca0b97ad22cb7051953a6ba7355387e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62211c0e306b98951d5af312518c00fca0b97ad22cb7051953a6ba7355387e2f->enter($__internal_62211c0e306b98951d5af312518c00fca0b97ad22cb7051953a6ba7355387e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_62211c0e306b98951d5af312518c00fca0b97ad22cb7051953a6ba7355387e2f->leave($__internal_62211c0e306b98951d5af312518c00fca0b97ad22cb7051953a6ba7355387e2f_prof);

        
        $__internal_8f10ada5c56abd8ddf7c730c7b66cbefcb7a2e879902ee409e483e6da257c18b->leave($__internal_8f10ada5c56abd8ddf7c730c7b66cbefcb7a2e879902ee409e483e6da257c18b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/fabienthetis/my_project_name_save/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
