<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @GregwarCaptcha/captcha.html.twig */
class __TwigTemplate_38cbbe06932837ceaba780c3f412ee0e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'captcha_widget' => [$this, 'block_captcha_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GregwarCaptcha/captcha.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GregwarCaptcha/captcha.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('captcha_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_captcha_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "captcha_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "captcha_widget"));

        // line 2
        if ((isset($context["is_human"]) || array_key_exists("is_human", $context) ? $context["is_human"] : (function () { throw new RuntimeError('Variable "is_human" does not exist.', 2, $this->source); })())) {
            // line 3
            yield "-
";
        } else {
            // line 5
            $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 6
                yield "    <img class=\"captcha_image\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["image_id"]) || array_key_exists("image_id", $context) ? $context["image_id"] : (function () { throw new RuntimeError('Variable "image_id" does not exist.', 6, $this->source); })()), "html", null, true);
                yield "\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["captcha_code"]) || array_key_exists("captcha_code", $context) ? $context["captcha_code"] : (function () { throw new RuntimeError('Variable "captcha_code" does not exist.', 6, $this->source); })()), "html", null, true);
                yield "\" alt=\"\" title=\"captcha\" width=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["captcha_width"]) || array_key_exists("captcha_width", $context) ? $context["captcha_width"] : (function () { throw new RuntimeError('Variable "captcha_width" does not exist.', 6, $this->source); })()), "html", null, true);
                yield "\" height=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["captcha_height"]) || array_key_exists("captcha_height", $context) ? $context["captcha_height"] : (function () { throw new RuntimeError('Variable "captcha_height" does not exist.', 6, $this->source); })()), "html", null, true);
                yield "\" />
    ";
                // line 7
                if ((isset($context["reload"]) || array_key_exists("reload", $context) ? $context["reload"] : (function () { throw new RuntimeError('Variable "reload" does not exist.', 7, $this->source); })())) {
                    // line 8
                    yield "    <script type=\"text/javascript\">
        function reload_";
                    // line 9
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["image_id"]) || array_key_exists("image_id", $context) ? $context["image_id"] : (function () { throw new RuntimeError('Variable "image_id" does not exist.', 9, $this->source); })()), "html", null, true);
                    yield "() {
            var img = document.getElementById('";
                    // line 10
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["image_id"]) || array_key_exists("image_id", $context) ? $context["image_id"] : (function () { throw new RuntimeError('Variable "image_id" does not exist.', 10, $this->source); })()), "html", null, true);
                    yield "');
            img.src = '";
                    // line 11
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["captcha_code"]) || array_key_exists("captcha_code", $context) ? $context["captcha_code"] : (function () { throw new RuntimeError('Variable "captcha_code" does not exist.', 11, $this->source); })()), "html", null, true);
                    yield "?n=' + (new Date()).getTime();
        }
    </script>
    <a class=\"captcha_reload\" href=\"javascript:reload_";
                    // line 14
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["image_id"]) || array_key_exists("image_id", $context) ? $context["image_id"] : (function () { throw new RuntimeError('Variable "image_id" does not exist.', 14, $this->source); })()), "html", null, true);
                    yield "();\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Renew", [], "gregwar_captcha"), "html", null, true);
                    yield "</a>
    ";
                }
                // line 16
                yield "    ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'widget');
                yield "
";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 5
            yield Twig\Extension\CoreExtension::spaceless($_v0);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@GregwarCaptcha/captcha.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  124 => 5,  117 => 16,  110 => 14,  104 => 11,  100 => 10,  96 => 9,  93 => 8,  91 => 7,  80 => 6,  78 => 5,  74 => 3,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block captcha_widget %}
{% if is_human %}
-
{% else %}
{% apply spaceless %}
    <img class=\"captcha_image\" id=\"{{ image_id }}\" src=\"{{ captcha_code }}\" alt=\"\" title=\"captcha\" width=\"{{ captcha_width }}\" height=\"{{ captcha_height }}\" />
    {% if reload %}
    <script type=\"text/javascript\">
        function reload_{{ image_id }}() {
            var img = document.getElementById('{{ image_id }}');
            img.src = '{{ captcha_code }}?n=' + (new Date()).getTime();
        }
    </script>
    <a class=\"captcha_reload\" href=\"javascript:reload_{{ image_id }}();\">{{ 'Renew'|trans({}, 'gregwar_captcha') }}</a>
    {% endif %}
    {{ form_widget(form) }}
{% endapply %}
{% endif %}
{% endblock %}
", "@GregwarCaptcha/captcha.html.twig", "/var/www/html/vendor/gregwar/captcha-bundle/Resources/views/captcha.html.twig");
    }
}
