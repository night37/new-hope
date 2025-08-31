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

/* registration/confirmation_email.html.twig */
class __TwigTemplate_b1cf0766904c778fc93b0975114dc402 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

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

        // line 2
        yield "<h1>Vérification de l'email</h1>

<p>Bonjour ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "surname", [], "any", false, false, false, 4), "html", null, true);
        yield ",</p>
<p>
  Merci de vous être inscrit sur notre site. Avant de pouvoir vous connecter,
  nous avons besoin de vérifier votre adresse email
</p>
<p>
  Veuillez cliquer sur le lien ci-dessous pour confirmer votre adresse email 
";
        // line 11
        if ((isset($context["sendResetPassword"]) || array_key_exists("sendResetPassword", $context) ? $context["sendResetPassword"] : (function () { throw new RuntimeError('Variable "sendResetPassword" does not exist.', 11, $this->source); })())) {
            // line 12
            yield "  et définir un mot de passe.
";
        } else {
            // line 14
            yield "  et vous connecter.
";
        }
        // line 16
        yield "  :
</p>
<p>
  <strong>Ce lien est valide pendant ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["expiresAt"]) || array_key_exists("expiresAt", $context) ? $context["expiresAt"] : (function () { throw new RuntimeError('Variable "expiresAt" does not exist.', 19, $this->source); })()), "d/m/Y H:i"), "html", null, true);
        yield "</strong>
</p>
";
        // line 21
        if ((isset($context["sendResetPassword"]) || array_key_exists("sendResetPassword", $context) ? $context["sendResetPassword"] : (function () { throw new RuntimeError('Variable "sendResetPassword" does not exist.', 21, $this->source); })())) {
            // line 22
            yield "  <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_reset_password", ["token" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 22, $this->source); })()), "token", [], "any", false, false, false, 22)]), "html", null, true);
            yield "\"> définir un mot de passe </a>
";
        } else {
            // line 24
            yield "  <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["signedUrl"]) || array_key_exists("signedUrl", $context) ? $context["signedUrl"] : (function () { throw new RuntimeError('Variable "signedUrl" does not exist.', 24, $this->source); })()), "html", null, true);
            yield "\">vérifier mon email</a>
";
        }
        // line 26
        yield "
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
        return "registration/confirmation_email.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  122 => 26,  116 => 24,  110 => 22,  108 => 21,  103 => 19,  98 => 16,  94 => 14,  90 => 12,  88 => 11,  76 => 4,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}
<h1>Vérification de l'email</h1>

<p>Bonjour {{ user.name }} {{ user.surname }},</p>
<p>
  Merci de vous être inscrit sur notre site. Avant de pouvoir vous connecter,
  nous avons besoin de vérifier votre adresse email
</p>
<p>
  Veuillez cliquer sur le lien ci-dessous pour confirmer votre adresse email 
{% if sendResetPassword %}
  et définir un mot de passe.
{% else %}
  et vous connecter.
{% endif %}
  :
</p>
<p>
  <strong>Ce lien est valide pendant {{ expiresAt|date('d/m/Y H:i') }}</strong>
</p>
{% if sendResetPassword %}
  <a href=\"{{ url('app_reset_password', { token: resetToken.token }) }}\"> définir un mot de passe </a>
{% else %}
  <a href=\"{{ signedUrl }}\">vérifier mon email</a>
{% endif %}

{% endblock %}
", "registration/confirmation_email.html.twig", "/var/www/html/templates/registration/confirmation_email.html.twig");
    }
}
