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
class __TwigTemplate_dfca1bdb251150b6ec27c6cf888f533e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Se connecter";
        yield from [];
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        // line 11
        if (($context["error"] ?? null)) {
            // line 12
            yield "  <div
    class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4\"
  >
    ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 15), CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 15), "security"), "html", null, true);
            yield "
  </div>
  ";
        }
        // line 17
        yield " ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 17)) {
            // line 18
            yield "  <div
    class=\"bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded mb-4\"
  >
    You are logged in as ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 21), "userIdentifier", [], "any", false, false, false, 21), "html", null, true);
            yield ",
    <a href=\"";
            // line 22
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"text-blue-500 underline\">
      >Logout</a
    >
  </div>
  ";
        }
        // line 27
        yield "  <div class=\"mb-4\">
    <p class=\"text-sm text-gray-600 mb-4 mt-4\">
      Vous n'avez pas de compte ?&nbsp;
      <a
        href=\"";
        // line 31
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
        value=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("submit"), "html", null, true);
        yield "\"
      />
      <div>
        <label for=\"inputEmail\" class=\"block text-sm font-medium text-gray-700\"
          >Email</label
        >
        <input
          type=\"email\"
          value=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["email"] ?? null), "html", null, true);
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
    <div class=\"mt-4 text-center\">
      <a
        href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\"
        class=\"text-sm text-blue-600 hover:text-blue-500\"
        >Mot de passe oublié ?</a
      >
    </div>
  </div>
</div>
";
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
        return array (  192 => 94,  143 => 48,  132 => 40,  120 => 31,  114 => 27,  106 => 22,  102 => 21,  97 => 18,  94 => 17,  88 => 15,  83 => 12,  81 => 11,  73 => 5,  71 => 3,  62 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "security/login.html.twig", "/var/www/html/templates/security/login.html.twig");
    }
}
