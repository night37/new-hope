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

/* admin/image/thumbnail.html.twig */
class __TwigTemplate_7e2876762a6f153731a6412fae30275a extends Template
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
            '_Animal_thumbnail_widget' => [$this, 'block__Animal_thumbnail_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('_Animal_thumbnail_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__Animal_thumbnail_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "\t<div class=\"form-group\">
\t\t<label for=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3), "html", null, true);
        yield "\" class=\"form-label\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 3), "label", [], "any", false, false, false, 3), [], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 3), "translation_domain", [], "any", false, false, false, 3)), "html", null, true);
        yield "</label>

\t\t<div class=\"input-group\">
\t\t\t<input id=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6), "html", null, true);
        yield "\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 6), "full_name", [], "any", false, false, false, 6), "html", null, true);
        yield "\" ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 6), "required", [], "any", false, false, false, 6)) {
            yield " required=\"required\" ";
        }
        yield " type=\"file\" class=\"form-control ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 6), "valid", [], "any", false, false, false, 6)) {
            yield "is-invalid";
        }
        yield "\">
\t\t\t<button class=\"btn btn-outline-secondary\" type=\"button\">Parcourir</button>
\t\t</div>

\t\t";
        // line 10
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 10), "value", [], "any", false, false, false, 10))) {
            // line 11
            yield "\t\t\t<div class=\"image-preview mt-2\">
\t\t\t\t<img src=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 12), "value", [], "any", false, false, false, 12)), "html", null, true);
            yield "\" alt=\"Aperçu\" style=\"max-width: 200px; border: 1px solid #ddd;\">
\t\t\t</div>
\t\t";
        }
        // line 15
        yield "
\t\t";
        // line 16
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 16), "valid", [], "any", false, false, false, 16)) {
            // line 17
            yield "\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 18), "errors", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                yield "\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 19), "html", null, true);
                yield "
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "\t\t\t</div>
\t\t";
        }
        // line 23
        yield "\t</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/image/thumbnail.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  118 => 23,  114 => 21,  105 => 19,  101 => 18,  98 => 17,  96 => 16,  93 => 15,  87 => 12,  84 => 11,  82 => 10,  65 => 6,  57 => 3,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/image/thumbnail.html.twig", "/var/www/html/templates/admin/image/thumbnail.html.twig");
    }
}
