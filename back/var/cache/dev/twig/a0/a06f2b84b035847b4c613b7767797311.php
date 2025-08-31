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

/* security/login.html.twig */
class __TwigTemplate_b3c49932a80d3f82df0b6489f24be4f2 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Se connecter";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        yield " <div class=\"min-h-screen bg-cover bg-center flex items-center
justify-center\" style=\"background-image: url('";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/login_background.jpg"), "html", null, true);
        // line 5
        yield "')\">
<div class=\"bg-white shadow-lg rounded-lg p-8 max-w-md w-full opacity-75\">
  <h1 class=\"text-2xl font-bold text-center text-gray-800 mb-6\">
    Se connecter
  </h1>
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["errorMessage"]) {
            // line 11
            yield "  <div class=\"bg-red-100 border border-red-400 px-4 py-3 rounded mb-4\">
    <p class=\"text-red-700\">";
            // line 12
            yield $context["errorMessage"];
            yield "</p>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['errorMessage'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield " ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", ["success"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["successMessage"]) {
            // line 15
            yield "  <div class=\"bg-green-100 border border-green-400 px-4 py-3 rounded mb-4\">
    <p class=\"text-green-700\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["successMessage"], "html", null, true);
            yield "</p>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['successMessage'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "
  <div class=\"mb-4\">
    <p class=\"text-sm text-gray-600 mb-4 mt-4\">
      Vous n'avez pas de compte ?&nbsp;
      <a
        href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\"
        class=\"text-blue-600 hover:text-blue-500\"
        >Créer un compte</a
      >
    </p>
    <form method=\"post\" class=\"gap-4 flex flex-col\">
      <input
        type=\"hidden\"
        name=\"_csrf_token\"
        data-controller=\"csrf-protection\"
        value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\"
      />
      <div>
        <label for=\"inputEmail\" class=\"block text-sm font-medium text-gray-700\"
          >Email</label
        >
        <input
          type=\"email\"
          value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 42, $this->source); })()), "html", null, true);
        yield "\"
          name=\"email\"
          id=\"inputEmail\"
          class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm\"
          autocomplete=\"email\"
          required
          autofocus
        />
      </div>

      <div>
        <label
          for=\"inputPassword\"
          class=\"block text-sm font-medium text-gray-700\"
          >Mot de passe</label
        >
        <input
          type=\"password\"
          name=\"password\"
          id=\"inputPassword\"
          class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm\"
          autocomplete=\"current-password\"
          required
        />
      </div>
      <div class=\"flex items-center\">
        <input
          type=\"checkbox\"
          name=\"_remember_me\"
          id=\"rememberMe\"
          class=\"h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded\"
        />
        <label for=\"rememberMe\" class=\"ml-2 block text-sm text-gray-900\"
          >Se souvenir de moi</label
        >
      </div>

      <button
        type=\"submit\"
        class=\"w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2\"
      >
        Se connecter
      </button>
    </form>
    <div class=\"mt-4\">
      <a
        href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\"
        class=\"text-sm text-blue-600 hover:text-blue-500\"
        >Mot de passe oublié ?</a
      >
    </div>
  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  223 => 88,  174 => 42,  163 => 34,  150 => 24,  143 => 19,  134 => 16,  131 => 15,  126 => 14,  117 => 12,  114 => 11,  110 => 10,  103 => 5,  101 => 3,  86 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %} {% block title %}Se connecter{% endblock %} {%
block body %} <div class=\"min-h-screen bg-cover bg-center flex items-center
justify-center\" style=\"background-image: url('{{
  asset(\"assets/images/login_background.jpg\")
}}')\">
<div class=\"bg-white shadow-lg rounded-lg p-8 max-w-md w-full opacity-75\">
  <h1 class=\"text-2xl font-bold text-center text-gray-800 mb-6\">
    Se connecter
  </h1>
  {% for errorMessage in app.flashes('danger') %}
  <div class=\"bg-red-100 border border-red-400 px-4 py-3 rounded mb-4\">
    <p class=\"text-red-700\">{{ errorMessage | raw }}</p>
  </div>
  {% endfor %} {% for successMessage in app.flashes('success') %}
  <div class=\"bg-green-100 border border-green-400 px-4 py-3 rounded mb-4\">
    <p class=\"text-green-700\">{{ successMessage }}</p>
  </div>
  {% endfor %}

  <div class=\"mb-4\">
    <p class=\"text-sm text-gray-600 mb-4 mt-4\">
      Vous n'avez pas de compte ?&nbsp;
      <a
        href=\"{{ path('app_register') }}\"
        class=\"text-blue-600 hover:text-blue-500\"
        >Créer un compte</a
      >
    </p>
    <form method=\"post\" class=\"gap-4 flex flex-col\">
      <input
        type=\"hidden\"
        name=\"_csrf_token\"
        data-controller=\"csrf-protection\"
        value=\"{{ csrf_token('authenticate') }}\"
      />
      <div>
        <label for=\"inputEmail\" class=\"block text-sm font-medium text-gray-700\"
          >Email</label
        >
        <input
          type=\"email\"
          value=\"{{ email }}\"
          name=\"email\"
          id=\"inputEmail\"
          class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm\"
          autocomplete=\"email\"
          required
          autofocus
        />
      </div>

      <div>
        <label
          for=\"inputPassword\"
          class=\"block text-sm font-medium text-gray-700\"
          >Mot de passe</label
        >
        <input
          type=\"password\"
          name=\"password\"
          id=\"inputPassword\"
          class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm\"
          autocomplete=\"current-password\"
          required
        />
      </div>
      <div class=\"flex items-center\">
        <input
          type=\"checkbox\"
          name=\"_remember_me\"
          id=\"rememberMe\"
          class=\"h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded\"
        />
        <label for=\"rememberMe\" class=\"ml-2 block text-sm text-gray-900\"
          >Se souvenir de moi</label
        >
      </div>

      <button
        type=\"submit\"
        class=\"w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2\"
      >
        Se connecter
      </button>
    </form>
    <div class=\"mt-4\">
      <a
        href=\"{{ path('app_forgot_password_request') }}\"
        class=\"text-sm text-blue-600 hover:text-blue-500\"
        >Mot de passe oublié ?</a
      >
    </div>
  </div>
</div>
{% endblock %}
", "security/login.html.twig", "/var/www/html/templates/security/login.html.twig");
    }
}
