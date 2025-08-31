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

/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_fbd4e4c64550d8d65ab33df0fdaa2772 extends Template
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
            'head_metas' => [$this, 'block_head_metas'],
            'page_title' => [$this, 'block_page_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'importmap' => [$this, 'block_importmap'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'body' => [$this, 'block_body'],
            'body_attr' => [$this, 'block_body_attr'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'javascript_page_layout' => [$this, 'block_javascript_page_layout'],
            'javascript_page_color_scheme' => [$this, 'block_javascript_page_color_scheme'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'user_menu' => [$this, 'block_user_menu'],
            'wrapper' => [$this, 'block_wrapper'],
            'responsive_header' => [$this, 'block_responsive_header'],
            'responsive_header_logo' => [$this, 'block_responsive_header_logo'],
            'sidebar' => [$this, 'block_sidebar'],
            'header' => [$this, 'block_header'],
            'header_navbar' => [$this, 'block_header_navbar'],
            'header_logo' => [$this, 'block_header_logo'],
            'main_menu_wrapper' => [$this, 'block_main_menu_wrapper'],
            'main_content_wrapper' => [$this, 'block_main_content_wrapper'],
            'content_top_header' => [$this, 'block_content_top_header'],
            'search_wrapper' => [$this, 'block_search_wrapper'],
            'search' => [$this, 'block_search'],
            'search_form' => [$this, 'block_search_form'],
            'search_form_filters' => [$this, 'block_search_form_filters'],
            'header_custom_menu_wrapper' => [$this, 'block_header_custom_menu_wrapper'],
            'header_custom_menu' => [$this, 'block_header_custom_menu'],
            'settings_dropdown_wrapper' => [$this, 'block_settings_dropdown_wrapper'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'content_title' => [$this, 'block_content_title'],
            'content_help' => [$this, 'block_content_help'],
            'page_actions_wrapper' => [$this, 'block_page_actions_wrapper'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'body_javascript' => [$this, 'block_body_javascript'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["__internal_trans_default_domain50b8e341924d6f4bc8d86dfac44ce6d5"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 2), "translationDomain", [], "any", false, false, false, 2);
        // line 3
        yield "
<!DOCTYPE html>
<html lang=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "htmlLocale", [], "any", false, false, false, 5), "html", null, true);
        yield "\" dir=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "textDirection", [], "any", false, false, false, 5), "html", null, true);
        yield "\" data-turbo=\"false\">
<head>
    ";
        // line 7
        yield from $this->unwrap()->yieldBlock('head_metas', $context, $blocks);
        // line 14
        yield "
    ";
        // line 15
        $context["page_title_block_output"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        yield "    <title>";
        yield Twig\Extension\CoreExtension::striptags(($context["page_title_block_output"] ?? null));
        yield "</title>

    ";
        // line 18
        yield from $this->unwrap()->yieldBlock('head_stylesheets', $context, $blocks);
        // line 21
        yield "
    ";
        // line 22
        yield from $this->unwrap()->yieldBlock('configured_stylesheets', $context, $blocks);
        // line 26
        yield "
    ";
        // line 27
        yield from $this->unwrap()->yieldBlock('head_favicon', $context, $blocks);
        // line 30
        yield "
    ";
        // line 31
        yield from $this->unwrap()->yieldBlock('head_javascript', $context, $blocks);
        // line 38
        yield "
    ";
        // line 39
        yield from $this->unwrap()->yieldBlock('configured_javascripts', $context, $blocks);
        // line 43
        yield "
    ";
        // line 44
        yield from $this->unwrap()->yieldBlock('configured_head_contents', $context, $blocks);
        // line 49
        yield "</head>

";
        // line 51
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 382
        yield "</html>
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_metas(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    ";
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from         $this->unwrap()->yieldBlock("content_title", $context, $blocks);
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "        <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.css", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 19), "defaultAssetPackageName", [], "any", false, false, false, 19)), "html", null, true);
        yield "\">
    ";
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", true, true, false, 23) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 23), "cssAssets", [], "any", false, false, false, 23)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 23), "cssAssets", [], "any", false, false, false, 23)) : ([]))], false);
        yield "
        ";
        // line 24
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", true, true, false, 24) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 24), "webpackEncoreAssets", [], "any", false, false, false, 24)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 24), "webpackEncoreAssets", [], "any", false, false, false, 24)) : ([]))], false);
        yield "
    ";
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_favicon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "        <link rel=\"shortcut icon\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardFaviconPath", [], "any", false, false, false, 28)), "html", null, true);
        yield "\">
    ";
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.js", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 32), "defaultAssetPackageName", [], "any", false, false, false, 32)), "html", null, true);
        yield "\"></script>

        ";
        // line 34
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 37
        yield "    ";
        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_importmap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_importmap.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 35), "assetMapperAssets", [], "any", true, true, false, 35) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 35), "assetMapperAssets", [], "any", false, false, false, 35)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 35), "assetMapperAssets", [], "any", false, false, false, 35)) : ([]))], false);
        yield "
        ";
        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 40), "jsAssets", [], "any", true, true, false, 40) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 40), "jsAssets", [], "any", false, false, false, 40)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 40), "jsAssets", [], "any", false, false, false, 40)) : ([]))], false);
        yield "
        ";
        // line 41
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 41), "webpackEncoreAssets", [], "any", true, true, false, 41) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 41), "webpackEncoreAssets", [], "any", false, false, false, 41)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 41), "webpackEncoreAssets", [], "any", false, false, false, 41)) : ([]))], false);
        yield "
    ";
        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_head_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 45
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 45), "headContents", [], "any", true, true, false, 45) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 45), "headContents", [], "any", false, false, false, 45)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 45), "headContents", [], "any", false, false, false, 45)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 46
            yield "            ";
            yield $context["htmlContent"];
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['htmlContent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "    ";
        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 52
        yield "    <body ";
        yield from $this->unwrap()->yieldBlock('body_attr', $context, $blocks);
        // line 53
        yield "        id=\"";
        yield from $this->unwrap()->yieldBlock('body_id', $context, $blocks);
        yield "\"
        class=\"ea ";
        // line 54
        yield from $this->unwrap()->yieldBlock('body_class', $context, $blocks);
        yield "\"
        data-ea-content-width=\"";
        // line 55
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 55), "contentWidth", [], "any", true, true, false, 55) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 55), "contentWidth", [], "any", false, false, false, 55)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 55), "contentWidth", [], "any", false, false, false, 55), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", true, true, false, 55) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 55)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 55), "html", null, true)) : ("normal"))));
        yield "\"
        data-ea-sidebar-width=\"";
        // line 56
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 56), "sidebarWidth", [], "any", true, true, false, 56) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 56), "sidebarWidth", [], "any", false, false, false, 56)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 56), "sidebarWidth", [], "any", false, false, false, 56), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", true, true, false, 56) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 56)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 56), "html", null, true)) : ("normal"))));
        yield "\"
        data-ea-dark-scheme-is-enabled=\"";
        // line 57
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 57)) ? ("true") : ("false"));
        yield "\"
        data-ea-default-color-scheme=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardDefaultColorScheme", [], "any", false, false, false, 58), "html", null, true);
        yield "\"
        data-ea-icon-set=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 59), "iconSet", [], "any", false, false, false, 59), "html", null, true);
        yield "\"
        data-ea-icon-prefix=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 60), "defaultIconPrefix", [], "any", false, false, false, 60), "html", null, true);
        yield "\"
    >
    ";
        // line 62
        yield from $this->unwrap()->yieldBlock('javascript_page_layout', $context, $blocks);
        // line 65
        yield "    ";
        yield from $this->unwrap()->yieldBlock('javascript_page_color_scheme', $context, $blocks);
        // line 68
        yield "
    ";
        // line 69
        yield from $this->unwrap()->yieldBlock('wrapper_wrapper', $context, $blocks);
        // line 372
        yield "
    ";
        // line 373
        yield from $this->unwrap()->yieldBlock('body_javascript', $context, $blocks);
        // line 374
        yield "
    ";
        // line 375
        yield from $this->unwrap()->yieldBlock('configured_body_contents', $context, $blocks);
        // line 380
        yield "    </body>
";
        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_attr(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript_page_layout(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 63
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page-layout.js", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 63), "defaultAssetPackageName", [], "any", false, false, false, 63)), "html", null, true);
        yield "\"></script>
    ";
        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript_page_color_scheme(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 66
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page-color-scheme.js", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 66), "defaultAssetPackageName", [], "any", false, false, false, 66)), "html", null, true);
        yield "\"></script>
    ";
        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wrapper_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 70
        yield "        ";
        yield from $this->unwrap()->yieldBlock('flash_messages', $context, $blocks);
        // line 73
        yield "
        ";
        // line 74
        $context["user_menu_avatar"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 75
            yield "            ";
            if ((null == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 75), "avatarUrl", [], "any", false, false, false, 75))) {
                // line 76
                yield "                <span class=\"user-avatar\">
                    ";
                // line 77
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:user"]);
                yield "
                </span>
            ";
            } else {
                // line 80
                yield "                <img class=\"user-avatar\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 80), "avatarUrl", [], "any", false, false, false, 80), "html", null, true);
                yield "\" />
            ";
            }
            // line 82
            yield "        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        yield "
        ";
        // line 84
        $context["user_menu"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 85
            yield "            ";
            yield from $this->unwrap()->yieldBlock('user_menu', $context, $blocks);
            // line 102
            yield "        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 103
        yield "
        ";
        // line 104
        $context["impersonator_permission"] = ((Twig\Extension\CoreExtension::constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter::IS_IMPERSONATOR", null, true)) ? ("IS_IMPERSONATOR") : ("ROLE_PREVIOUS_ADMIN"));
        // line 105
        yield "
        ";
        // line 106
        $context["user_menu_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 107
            yield "            ";
            $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
            $preRendered = $_v0->preRender("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray([]));
            if (null !== $preRendered) {
                yield $preRendered; 
            } else {
                $preRenderEvent = $_v0->startEmbedComponent("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/layout.html.twig", 30618993461);
                $embeddedContext = $preRenderEvent->getVariables();
                $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 30618993461);
                $this->loadTemplate("@EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 107, "30618993461")->display($embeddedContext, $embeddedBlocks);
                $_v0->finishEmbedComponent();
            }
            // line 118
            yield "        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 119
        yield "
        ";
        // line 120
        $context["settings_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 121
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardLocales", [], "any", false, false, false, 121) || CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 121))) {
                // line 122
                yield "                ";
                $_v1 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
                $preRendered = $_v1->preRender("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-settings"]));
                if (null !== $preRendered) {
                    yield $preRendered; 
                } else {
                    $preRenderEvent = $_v1->startEmbedComponent("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-settings"]), $context, "@EasyAdmin/layout.html.twig", 41080889271);
                    $embeddedContext = $preRenderEvent->getVariables();
                    $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                    $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                    $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 41080889271);
                    $this->loadTemplate("@EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 122, "41080889271")->display($embeddedContext, $embeddedBlocks);
                    $_v1->finishEmbedComponent();
                }
                // line 156
                yield "            ";
            }
            // line 157
            yield "        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 158
        yield "
        <div class=\"wrapper\">
            ";
        // line 160
        yield from $this->unwrap()->yieldBlock('wrapper', $context, $blocks);
        // line 369
        yield "        </div>
        </div>
    ";
        yield from [];
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_flash_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 71
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["flash_messages"], "method", false, false, false, 71));
        yield "
        ";
        yield from [];
    }

    // line 85
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_user_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 86
        yield "                ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 86), "items", [], "any", false, false, false, 86)) > 0)) {
            // line 87
            yield "                    ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Divider");
            yield "

                    ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 89), "items", [], "any", false, false, false, 89));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 90
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isMenuSection", [], "any", false, false, false, 90)) {
                    // line 91
                    yield "                            ";
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 91)) {
                        // line 92
                        yield "                                ";
                        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Divider");
                        yield "
                            ";
                    }
                    // line 94
                    yield "
                            ";
                    // line 95
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Header", ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 95), [],                     // line 2
($context["__internal_trans_default_domain50b8e341924d6f4bc8d86dfac44ce6d5"] ?? null)), "class" => CoreExtension::getAttribute($this->env, $this->source,                     // line 95
$context["item"], "cssClass", [], "any", false, false, false, 95), "icon" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 95), "htmlAttributes" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "htmlAttributes", [], "any", false, false, false, 95)]);
                    yield "
                        ";
                } else {
                    // line 97
                    yield "                            ";
                    yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 97), [],                     // line 2
($context["__internal_trans_default_domain50b8e341924d6f4bc8d86dfac44ce6d5"] ?? null)), "class" => ("user-action " . CoreExtension::getAttribute($this->env, $this->source,                     // line 97
$context["item"], "cssClass", [], "any", false, false, false, 97)), "icon" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 97), "url" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 97), "target" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "linkTarget", [], "any", false, false, false, 97), "rel" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "linkRel", [], "any", false, false, false, 97), "referrerpolicy" => "origin-when-cross-origin", "htmlAttributes" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "htmlAttributes", [], "any", false, false, false, 97)]);
                    yield "
                        ";
                }
                // line 99
                yield "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            yield "                ";
        }
        // line 101
        yield "            ";
        yield from [];
    }

    // line 160
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 161
        yield "                <div class=\"responsive-header\">
                    ";
        // line 162
        yield from $this->unwrap()->yieldBlock('responsive_header', $context, $blocks);
        // line 192
        yield "                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        ";
        // line 196
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 218
        yield "
                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>
                ";
        // line 222
        yield from $this->unwrap()->yieldBlock('main_content_wrapper', $context, $blocks);
        // line 368
        yield "            ";
        yield from [];
    }

    // line 162
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_responsive_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 163
        yield "                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            ";
        // line 164
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:menu-bars"]);
        yield "
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            ";
        // line 168
        yield from $this->unwrap()->yieldBlock('responsive_header_logo', $context, $blocks);
        // line 173
        yield "                        </div>

                        ";
        // line 175
        $_v2 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v2->preRender("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => ("ms-auto user-menu-wrapper " . (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) ? ("user-is-impersonated") : ("")))]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v2->startEmbedComponent("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => ("ms-auto user-menu-wrapper " . (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) ? ("user-is-impersonated") : ("")))]), $context, "@EasyAdmin/layout.html.twig", 3994479931);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 3994479931);
            $this->loadTemplate("@EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 175, "3994479931")->display($embeddedContext, $embeddedBlocks);
            $_v2->finishEmbedComponent();
        }
        // line 189
        yield "
                        ";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["settings_dropdown"] ?? null), "html", null, true);
        yield "
                    ";
        yield from [];
    }

    // line 168
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_responsive_header_logo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 169
        yield "                                <a class=\"responsive-logo\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 169)), "html", null, true);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 169));
        yield "\">
                                    ";
        // line 170
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 170);
        yield "
                                </a>
                            ";
        yield from [];
    }

    // line 196
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 197
        yield "                            <header class=\"main-header\">
                                ";
        // line 198
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 212
        yield "                            </header>

                            ";
        // line 214
        yield from $this->unwrap()->yieldBlock('main_menu_wrapper', $context, $blocks);
        // line 217
        yield "                        ";
        yield from [];
    }

    // line 198
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 199
        yield "                                <nav class=\"navbar\" role=\"navigation\">
                                    ";
        // line 200
        yield from $this->unwrap()->yieldBlock('header_navbar', $context, $blocks);
        // line 210
        yield "                                </nav>
                                ";
        yield from [];
    }

    // line 200
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 201
        yield "                                        <div id=\"header-logo\">
                                            ";
        // line 202
        yield from $this->unwrap()->yieldBlock('header_logo', $context, $blocks);
        // line 208
        yield "                                        </div>
                                    ";
        yield from [];
    }

    // line 202
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_logo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 203
        yield "                                                <a class=\"logo\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 203)), "html", null, true);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 203));
        yield "\">
                                                    <span class=\"logo-custom\">";
        // line 204
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 204);
        yield "</span>
                                                    <span class=\"logo-compact\">";
        // line 205
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:home"]);
        yield "</span>
                                                </a>
                                            ";
        yield from [];
    }

    // line 214
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_menu_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 215
        yield "                                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["main_menu"], "method", false, false, false, 215));
        yield "
                            ";
        yield from [];
    }

    // line 222
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_content_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 223
        yield "                <section class=\"main-content\">
                    ";
        // line 224
        $context["has_search"] = ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 224)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 224), "isSearchEnabled", [], "any", false, false, false, 224));
        // line 225
        yield "                    <aside class=\"content-top ";
        yield ((($context["has_search"] ?? null)) ? ("ea-search-enabled") : ("ea-search-disabled"));
        yield "\">
                        ";
        // line 226
        yield from $this->unwrap()->yieldBlock('content_top_header', $context, $blocks);
        // line 319
        yield "                    </aside>

                    <div class=\"content-wrapper\">
                        ";
        // line 322
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 363
        yield "
                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
                ";
        yield from [];
    }

    // line 226
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 227
        yield "                            ";
        yield from $this->unwrap()->yieldBlock('search_wrapper', $context, $blocks);
        // line 296
        yield "
                            ";
        // line 297
        yield from $this->unwrap()->yieldBlock('header_custom_menu_wrapper', $context, $blocks);
        // line 314
        yield "
                            ";
        // line 315
        yield from $this->unwrap()->yieldBlock('settings_dropdown_wrapper', $context, $blocks);
        // line 318
        yield "                        ";
        yield from [];
    }

    // line 227
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 228
        yield "                            <div class=\"content-search\">
                                ";
        // line 229
        if (($context["has_search"] ?? null)) {
            // line 230
            yield "                                    ";
            yield from $this->unwrap()->yieldBlock('search', $context, $blocks);
            // line 293
            yield "                                ";
        }
        // line 294
        yield "                            </div>
                            ";
        yield from [];
    }

    // line 230
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 231
        yield "                                        ";
        $context["formActionUrl"] = null;
        // line 232
        yield "                                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "usePrettyUrls", [], "any", false, false, false, 232)) {
            // line 233
            yield "                                            ";
            // line 234
            yield "                                            ";
            $context["crudController"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 234), "attributes", [], "any", false, true, false, 234), "get", ["crudControllerFqcn"], "method", true, true, false, 234) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 234), "attributes", [], "any", false, false, false, 234), "get", ["crudControllerFqcn"], "method", false, false, false, 234)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 234), "attributes", [], "any", false, false, false, 234), "get", ["crudControllerFqcn"], "method", false, false, false, 234)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 234), "query", [], "any", false, false, false, 234), "get", ["crudControllerFqcn"], "method", false, false, false, 234)));
            // line 235
            yield "                                            ";
            $context["formActionUrl"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", [($context["crudController"] ?? null)], "method", false, false, false, 235), "setAction", ["index"], "method", false, false, false, 235), "set", ["page", 1], "method", false, false, false, 235);
            // line 236
            yield "                                        ";
        }
        // line 237
        yield "                                        <form class=\"form-action-search\" method=\"get\" ";
        if (($context["formActionUrl"] ?? null)) {
            yield "action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formActionUrl"] ?? null), "html", null, true);
            yield "\"";
        }
        yield ">
                                            ";
        // line 238
        yield from $this->unwrap()->yieldBlock('search_form', $context, $blocks);
        // line 291
        yield "                                        </form>
                                    ";
        yield from [];
    }

    // line 238
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 239
        yield "                                                ";
        yield from $this->unwrap()->yieldBlock('search_form_filters', $context, $blocks);
        // line 264
        yield "
                                                ";
        // line 265
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "usePrettyUrls", [], "any", false, false, false, 265)) {
            // line 266
            yield "                                                    <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                    <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"";
            // line 267
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 267), "query", [], "any", false, false, false, 267), "get", ["crudControllerFqcn"], "method", false, false, false, 267), "html", null, true);
            yield "\">
                                                    <input type=\"hidden\" name=\"page\" value=\"1\">
                                                ";
        }
        // line 270
        yield "
                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        ";
        // line 273
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:search", "class" => "content-search-icon"]);
        yield "

                                                        <label class=\"content-search-label\" data-value=\"";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 275), "query", [], "any", false, false, false, 275), "get", ["query"], "method", false, false, false, 275), "html", null, true);
        yield "\">
                                                            <input class=\"form-control ";
        // line 276
        yield (((null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 276), "query", [], "any", false, false, false, 276), "get", ["query"], "method", false, false, false, 276))) ? ("is-blank") : (""));
        yield "\" type=\"search\" name=\"query\" value=\"";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 276), "query", [], "any", false, true, false, 276), "get", ["query"], "method", true, true, false, 276) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 276), "query", [], "any", false, false, false, 276), "get", ["query"], "method", false, false, false, 276)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 276), "query", [], "any", false, false, false, 276), "get", ["query"], "method", false, false, false, 276), "html", null, true)) : (""));
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.search", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 276), "translationParameters", [], "any", false, false, false, 276), "EasyAdminBundle"), [],         // line 2
($context["__internal_trans_default_domain50b8e341924d6f4bc8d86dfac44ce6d5"] ?? null)), "html", null, true);
        // line 276
        yield "\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 276), "currentAction", [], "any", false, false, false, 276) == "index") && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 276), "autofocusSearch", [], "any", false, false, false, 276) == true))) {
            yield " autofocus=\"autofocus\"";
        }
        yield ">
                                                        </label>

                                                        ";
        // line 279
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 279), "query", [], "any", false, false, false, 279), "get", ["query"], "method", false, false, false, 279)) {
            // line 280
            yield "                                                            ";
            $context["search_reset_url"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", ["query"], "method", false, false, false, 280);
            // line 281
            yield "                                                            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "usePrettyUrls", [], "any", false, false, false, 281)) {
                // line 282
                yield "                                                                ";
                $context["search_reset_url"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", ["query"], "method", false, false, false, 282), "setController", [($context["crudController"] ?? null)], "method", false, false, false, 282), "setAction", ["index"], "method", false, false, false, 282), "set", ["page", 1], "method", false, false, false, 282);
                // line 283
                yield "                                                            ";
            }
            // line 284
            yield "                                                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search_reset_url"] ?? null), "html", null, true);
            yield "\" class=\"content-search-reset\">
                                                                ";
            // line 285
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:xmark"]);
            yield "
                                                            </a>
                                                        ";
        }
        // line 288
        yield "                                                    </div>
                                                </div>
                                            ";
        yield from [];
    }

    // line 239
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_form_filters(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 240
        yield "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 240), "appliedFilters", [], "any", false, false, false, 240));
        foreach ($context['_seq'] as $context["field"] => $context["fieldValue"]) {
            // line 241
            yield "                                                        ";
            if (is_iterable($context["fieldValue"])) {
                // line 242
                yield "                                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["fieldValue"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 243
                    yield "                                                                ";
                    // line 244
                    yield "                                                                ";
                    if (is_iterable($context["value"])) {
                        // line 245
                        yield "                                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable($context["value"]);
                        foreach ($context['_seq'] as $context["index"] => $context["iterValue"]) {
                            // line 246
                            yield "                                                                        ";
                            // line 247
                            yield "                                                                        ";
                            if (is_iterable($context["iterValue"])) {
                                // line 248
                                yield "                                                                            ";
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable($context["iterValue"]);
                                foreach ($context['_seq'] as $context["subIndex"] => $context["subIterValue"]) {
                                    // line 249
                                    yield "                                                                                <input type=\"hidden\" name=\"filters[";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"], "html", null, true);
                                    yield "][";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                                    yield "][";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["index"], "html", null, true);
                                    yield "][";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["subIndex"], "html", null, true);
                                    yield "]\" value=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["subIterValue"], "html", null, true);
                                    yield "\">
                                                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['subIndex'], $context['subIterValue'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 251
                                yield "                                                                        ";
                            } else {
                                // line 252
                                yield "                                                                            <input type=\"hidden\" name=\"filters[";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"], "html", null, true);
                                yield "][";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                                yield "][";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["index"], "html", null, true);
                                yield "]\" value=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["iterValue"], "html", null, true);
                                yield "\">
                                                                        ";
                            }
                            // line 254
                            yield "                                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['index'], $context['iterValue'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 255
                        yield "                                                                ";
                    } else {
                        // line 256
                        yield "                                                                    <input type=\"hidden\" name=\"filters[";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"], "html", null, true);
                        yield "][";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                        yield "]\" value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                        yield "\">
                                                                ";
                    }
                    // line 258
                    yield "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 259
                yield "                                                        ";
            } else {
                // line 260
                yield "                                                            <input type=\"hidden\" name=\"filters[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"], "html", null, true);
                yield "]\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["fieldValue"], "html", null, true);
                yield "\">
                                                        ";
            }
            // line 262
            yield "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['field'], $context['fieldValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        yield "                                                ";
        yield from [];
    }

    // line 297
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_custom_menu_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 298
        yield "                            <div class=\"navbar-custom-menu\">
                                ";
        // line 299
        yield from $this->unwrap()->yieldBlock('header_custom_menu', $context, $blocks);
        // line 312
        yield "                            </div>
                            ";
        yield from [];
    }

    // line 299
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_custom_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 300
        yield "                                    ";
        $_v3 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v3->preRender("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => ("user-menu-wrapper " . (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) ? ("user-is-impersonated") : ("")))]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v3->startEmbedComponent("ea:ActionMenu", Twig\Extension\CoreExtension::toArray(["class" => ("user-menu-wrapper " . (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) ? ("user-is-impersonated") : ("")))]), $context, "@EasyAdmin/layout.html.twig", 7277531191);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 7277531191);
            $this->loadTemplate("@EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 300, "7277531191")->display($embeddedContext, $embeddedBlocks);
            $_v3->finishEmbedComponent();
        }
        // line 311
        yield "                                ";
        yield from [];
    }

    // line 315
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_settings_dropdown_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 316
        yield "                                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["settings_dropdown"] ?? null), "html", null, true);
        yield "
                            ";
        yield from [];
    }

    // line 322
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 323
        yield "                            <article class=\"content\">
                                ";
        // line 324
        yield from $this->unwrap()->yieldBlock('content_header_wrapper', $context, $blocks);
        // line 348
        yield "
                                <section id=\"main\" class=\"content-body\">
                                    ";
        // line 350
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 351
        yield "                                </section>

                                ";
        // line 353
        yield from $this->unwrap()->yieldBlock('content_footer_wrapper', $context, $blocks);
        // line 361
        yield "                            </article>
                        ";
        yield from [];
    }

    // line 324
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_header_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 325
        yield "                                    ";
        $context["has_help_message"] =  !Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 325), "helpMessage", [], "any", true, true, false, 325) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 325), "helpMessage", [], "any", false, false, false, 325)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 325), "helpMessage", [], "any", false, false, false, 325)) : ("")));
        // line 326
        yield "                                    <section class=\"content-header\">
                                        ";
        // line 327
        yield from $this->unwrap()->yieldBlock('content_header', $context, $blocks);
        // line 346
        yield "                                    </section>
                                ";
        yield from [];
    }

    // line 327
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 328
        yield "                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    ";
        // line 330
        yield from $this->unwrap()->yieldBlock('content_title', $context, $blocks);
        // line 331
        yield "
                                                    ";
        // line 332
        yield from $this->unwrap()->yieldBlock('content_help', $context, $blocks);
        // line 339
        yield "                                                </h1>
                                            </div>

                                            ";
        // line 342
        yield from $this->unwrap()->yieldBlock('page_actions_wrapper', $context, $blocks);
        // line 345
        yield "                                        ";
        yield from [];
    }

    // line 330
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 332
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 333
        yield "                                                        ";
        if (($context["has_help_message"] ?? null)) {
            // line 334
            yield "                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 334), "helpMessage", [], "any", false, false, false, 334), [],             // line 2
($context["__internal_trans_default_domain50b8e341924d6f4bc8d86dfac44ce6d5"] ?? null)), "html");
            // line 334
            yield "\">
                                                                ";
            // line 335
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:circle-info"]);
            yield "
                                                            </a>
                                                        ";
        }
        // line 338
        yield "                                                    ";
        yield from [];
    }

    // line 342
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 343
        yield "                                                <div class=\"page-actions\">";
        yield from $this->unwrap()->yieldBlock('page_actions', $context, $blocks);
        yield "</div>
                                            ";
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 350
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 353
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_footer_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 354
        yield "                                    ";
        $context["content_footer"] = ((        $this->unwrap()->hasBlock("content_footer", $context, $blocks)) ? (        $this->unwrap()->renderBlock("content_footer", $context, $blocks)) : (""));
        // line 355
        yield "                                    ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["content_footer"] ?? null))) {
            // line 356
            yield "                                        <section class=\"content-footer\">
                                            ";
            // line 357
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["content_footer"] ?? null), "html", null, true);
            yield "
                                        </section>
                                    ";
        }
        // line 360
        yield "                                ";
        yield from [];
    }

    // line 373
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 375
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configured_body_contents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 376
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 376), "bodyContents", [], "any", true, true, false, 376) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 376), "bodyContents", [], "any", false, false, false, 376)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 376), "bodyContents", [], "any", false, false, false, 376)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 377
            yield "            ";
            yield $context["htmlContent"];
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['htmlContent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 379
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  1467 => 379,  1458 => 377,  1453 => 376,  1446 => 375,  1436 => 373,  1431 => 360,  1425 => 357,  1422 => 356,  1419 => 355,  1416 => 354,  1409 => 353,  1399 => 350,  1382 => 343,  1375 => 342,  1370 => 338,  1364 => 335,  1361 => 334,  1359 => 2,  1357 => 334,  1354 => 333,  1347 => 332,  1337 => 330,  1332 => 345,  1330 => 342,  1325 => 339,  1323 => 332,  1320 => 331,  1318 => 330,  1314 => 328,  1307 => 327,  1301 => 346,  1299 => 327,  1296 => 326,  1293 => 325,  1286 => 324,  1280 => 361,  1278 => 353,  1274 => 351,  1272 => 350,  1268 => 348,  1266 => 324,  1263 => 323,  1256 => 322,  1248 => 316,  1241 => 315,  1236 => 311,  1221 => 300,  1214 => 299,  1208 => 312,  1206 => 299,  1203 => 298,  1196 => 297,  1191 => 263,  1185 => 262,  1177 => 260,  1174 => 259,  1168 => 258,  1158 => 256,  1155 => 255,  1149 => 254,  1137 => 252,  1134 => 251,  1117 => 249,  1112 => 248,  1109 => 247,  1107 => 246,  1102 => 245,  1099 => 244,  1097 => 243,  1092 => 242,  1089 => 241,  1084 => 240,  1077 => 239,  1070 => 288,  1064 => 285,  1059 => 284,  1056 => 283,  1053 => 282,  1050 => 281,  1047 => 280,  1045 => 279,  1036 => 276,  1034 => 2,  1029 => 276,  1025 => 275,  1020 => 273,  1015 => 270,  1009 => 267,  1006 => 266,  1004 => 265,  1001 => 264,  998 => 239,  991 => 238,  985 => 291,  983 => 238,  974 => 237,  971 => 236,  968 => 235,  965 => 234,  963 => 233,  960 => 232,  957 => 231,  950 => 230,  944 => 294,  941 => 293,  938 => 230,  936 => 229,  933 => 228,  926 => 227,  921 => 318,  919 => 315,  916 => 314,  914 => 297,  911 => 296,  908 => 227,  901 => 226,  892 => 363,  890 => 322,  885 => 319,  883 => 226,  878 => 225,  876 => 224,  873 => 223,  866 => 222,  858 => 215,  851 => 214,  843 => 205,  839 => 204,  832 => 203,  825 => 202,  819 => 208,  817 => 202,  814 => 201,  807 => 200,  801 => 210,  799 => 200,  796 => 199,  789 => 198,  784 => 217,  782 => 214,  778 => 212,  776 => 198,  773 => 197,  766 => 196,  758 => 170,  751 => 169,  744 => 168,  737 => 190,  734 => 189,  720 => 175,  716 => 173,  714 => 168,  707 => 164,  704 => 163,  697 => 162,  692 => 368,  690 => 222,  684 => 218,  682 => 196,  676 => 192,  674 => 162,  671 => 161,  664 => 160,  659 => 101,  656 => 100,  642 => 99,  637 => 97,  636 => 2,  634 => 97,  629 => 95,  628 => 2,  627 => 95,  624 => 94,  618 => 92,  615 => 91,  612 => 90,  595 => 89,  589 => 87,  586 => 86,  579 => 85,  571 => 71,  564 => 70,  557 => 369,  555 => 160,  551 => 158,  547 => 157,  544 => 156,  529 => 122,  526 => 121,  524 => 120,  521 => 119,  517 => 118,  502 => 107,  500 => 106,  497 => 105,  495 => 104,  492 => 103,  488 => 102,  485 => 85,  483 => 84,  480 => 83,  476 => 82,  470 => 80,  464 => 77,  461 => 76,  458 => 75,  456 => 74,  453 => 73,  450 => 70,  443 => 69,  435 => 66,  428 => 65,  420 => 63,  413 => 62,  403 => 54,  393 => 53,  383 => 52,  377 => 380,  375 => 375,  372 => 374,  370 => 373,  367 => 372,  365 => 69,  362 => 68,  359 => 65,  357 => 62,  352 => 60,  348 => 59,  344 => 58,  340 => 57,  336 => 56,  332 => 55,  328 => 54,  323 => 53,  320 => 52,  313 => 51,  308 => 48,  299 => 46,  294 => 45,  287 => 44,  280 => 41,  275 => 40,  268 => 39,  260 => 35,  253 => 34,  248 => 37,  246 => 34,  240 => 32,  233 => 31,  225 => 28,  218 => 27,  211 => 24,  206 => 23,  199 => 22,  191 => 19,  184 => 18,  173 => 15,  163 => 8,  156 => 7,  150 => 382,  148 => 51,  144 => 49,  142 => 44,  139 => 43,  137 => 39,  134 => 38,  132 => 31,  129 => 30,  127 => 27,  124 => 26,  122 => 22,  119 => 21,  117 => 18,  111 => 16,  106 => 15,  103 => 14,  101 => 7,  94 => 5,  90 => 3,  88 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_fbd4e4c64550d8d65ab33df0fdaa2772___30618993461 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 107
        return $this->loadTemplate(($context["__parent__"] ?? null), "@EasyAdmin/layout.html.twig", 107);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 108
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $_v4 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v4->preRender("ea:ActionMenu:ActionList:Content", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-user-details"]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v4->startEmbedComponent("ea:ActionMenu:ActionList:Content", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-user-details"]), $context, "@EasyAdmin/layout.html.twig", 6417279391);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 6417279391);
            $this->loadTemplate("@EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 108, "6417279391")->display($embeddedContext, $embeddedBlocks);
            $_v4->finishEmbedComponent();
        }
        // line 115
        yield "
                ";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user_menu"] ?? null), "html", null, true);
        yield "
            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  1568 => 116,  1565 => 115,  1545 => 108,  1526 => 107,  1467 => 379,  1458 => 377,  1453 => 376,  1446 => 375,  1436 => 373,  1431 => 360,  1425 => 357,  1422 => 356,  1419 => 355,  1416 => 354,  1409 => 353,  1399 => 350,  1382 => 343,  1375 => 342,  1370 => 338,  1364 => 335,  1361 => 334,  1359 => 2,  1357 => 334,  1354 => 333,  1347 => 332,  1337 => 330,  1332 => 345,  1330 => 342,  1325 => 339,  1323 => 332,  1320 => 331,  1318 => 330,  1314 => 328,  1307 => 327,  1301 => 346,  1299 => 327,  1296 => 326,  1293 => 325,  1286 => 324,  1280 => 361,  1278 => 353,  1274 => 351,  1272 => 350,  1268 => 348,  1266 => 324,  1263 => 323,  1256 => 322,  1248 => 316,  1241 => 315,  1236 => 311,  1221 => 300,  1214 => 299,  1208 => 312,  1206 => 299,  1203 => 298,  1196 => 297,  1191 => 263,  1185 => 262,  1177 => 260,  1174 => 259,  1168 => 258,  1158 => 256,  1155 => 255,  1149 => 254,  1137 => 252,  1134 => 251,  1117 => 249,  1112 => 248,  1109 => 247,  1107 => 246,  1102 => 245,  1099 => 244,  1097 => 243,  1092 => 242,  1089 => 241,  1084 => 240,  1077 => 239,  1070 => 288,  1064 => 285,  1059 => 284,  1056 => 283,  1053 => 282,  1050 => 281,  1047 => 280,  1045 => 279,  1036 => 276,  1034 => 2,  1029 => 276,  1025 => 275,  1020 => 273,  1015 => 270,  1009 => 267,  1006 => 266,  1004 => 265,  1001 => 264,  998 => 239,  991 => 238,  985 => 291,  983 => 238,  974 => 237,  971 => 236,  968 => 235,  965 => 234,  963 => 233,  960 => 232,  957 => 231,  950 => 230,  944 => 294,  941 => 293,  938 => 230,  936 => 229,  933 => 228,  926 => 227,  921 => 318,  919 => 315,  916 => 314,  914 => 297,  911 => 296,  908 => 227,  901 => 226,  892 => 363,  890 => 322,  885 => 319,  883 => 226,  878 => 225,  876 => 224,  873 => 223,  866 => 222,  858 => 215,  851 => 214,  843 => 205,  839 => 204,  832 => 203,  825 => 202,  819 => 208,  817 => 202,  814 => 201,  807 => 200,  801 => 210,  799 => 200,  796 => 199,  789 => 198,  784 => 217,  782 => 214,  778 => 212,  776 => 198,  773 => 197,  766 => 196,  758 => 170,  751 => 169,  744 => 168,  737 => 190,  734 => 189,  720 => 175,  716 => 173,  714 => 168,  707 => 164,  704 => 163,  697 => 162,  692 => 368,  690 => 222,  684 => 218,  682 => 196,  676 => 192,  674 => 162,  671 => 161,  664 => 160,  659 => 101,  656 => 100,  642 => 99,  637 => 97,  636 => 2,  634 => 97,  629 => 95,  628 => 2,  627 => 95,  624 => 94,  618 => 92,  615 => 91,  612 => 90,  595 => 89,  589 => 87,  586 => 86,  579 => 85,  571 => 71,  564 => 70,  557 => 369,  555 => 160,  551 => 158,  547 => 157,  544 => 156,  529 => 122,  526 => 121,  524 => 120,  521 => 119,  517 => 118,  502 => 107,  500 => 106,  497 => 105,  495 => 104,  492 => 103,  488 => 102,  485 => 85,  483 => 84,  480 => 83,  476 => 82,  470 => 80,  464 => 77,  461 => 76,  458 => 75,  456 => 74,  453 => 73,  450 => 70,  443 => 69,  435 => 66,  428 => 65,  420 => 63,  413 => 62,  403 => 54,  393 => 53,  383 => 52,  377 => 380,  375 => 375,  372 => 374,  370 => 373,  367 => 372,  365 => 69,  362 => 68,  359 => 65,  357 => 62,  352 => 60,  348 => 59,  344 => 58,  340 => 57,  336 => 56,  332 => 55,  328 => 54,  323 => 53,  320 => 52,  313 => 51,  308 => 48,  299 => 46,  294 => 45,  287 => 44,  280 => 41,  275 => 40,  268 => 39,  260 => 35,  253 => 34,  248 => 37,  246 => 34,  240 => 32,  233 => 31,  225 => 28,  218 => 27,  211 => 24,  206 => 23,  199 => 22,  191 => 19,  184 => 18,  173 => 15,  163 => 8,  156 => 7,  150 => 382,  148 => 51,  144 => 49,  142 => 44,  139 => 43,  137 => 39,  134 => 38,  132 => 31,  129 => 30,  127 => 27,  124 => 26,  122 => 22,  119 => 21,  117 => 18,  111 => 16,  106 => 15,  103 => 14,  101 => 7,  94 => 5,  90 => 3,  88 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_fbd4e4c64550d8d65ab33df0fdaa2772___6417279391 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 108
        return $this->loadTemplate(($context["__parent__"] ?? null), "@EasyAdmin/layout.html.twig", 108);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 109
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "<div>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user_menu_avatar"] ?? null), "html", null, true);
        yield "</div>
                    <div>
                        <span class=\"user-label\">";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", [], "EasyAdminBundle"), "html", null, true);
        yield "</span>
                        <span class=\"user-name\">";
        // line 112
        yield (((null === CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 112))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", [], "EasyAdminBundle"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 112), "name", [], "any", false, false, false, 112), "html", null, true)));
        yield "</span>
                    </div>
                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  1664 => 112,  1660 => 111,  1648 => 109,  1629 => 108,  1568 => 116,  1565 => 115,  1545 => 108,  1526 => 107,  1467 => 379,  1458 => 377,  1453 => 376,  1446 => 375,  1436 => 373,  1431 => 360,  1425 => 357,  1422 => 356,  1419 => 355,  1416 => 354,  1409 => 353,  1399 => 350,  1382 => 343,  1375 => 342,  1370 => 338,  1364 => 335,  1361 => 334,  1359 => 2,  1357 => 334,  1354 => 333,  1347 => 332,  1337 => 330,  1332 => 345,  1330 => 342,  1325 => 339,  1323 => 332,  1320 => 331,  1318 => 330,  1314 => 328,  1307 => 327,  1301 => 346,  1299 => 327,  1296 => 326,  1293 => 325,  1286 => 324,  1280 => 361,  1278 => 353,  1274 => 351,  1272 => 350,  1268 => 348,  1266 => 324,  1263 => 323,  1256 => 322,  1248 => 316,  1241 => 315,  1236 => 311,  1221 => 300,  1214 => 299,  1208 => 312,  1206 => 299,  1203 => 298,  1196 => 297,  1191 => 263,  1185 => 262,  1177 => 260,  1174 => 259,  1168 => 258,  1158 => 256,  1155 => 255,  1149 => 254,  1137 => 252,  1134 => 251,  1117 => 249,  1112 => 248,  1109 => 247,  1107 => 246,  1102 => 245,  1099 => 244,  1097 => 243,  1092 => 242,  1089 => 241,  1084 => 240,  1077 => 239,  1070 => 288,  1064 => 285,  1059 => 284,  1056 => 283,  1053 => 282,  1050 => 281,  1047 => 280,  1045 => 279,  1036 => 276,  1034 => 2,  1029 => 276,  1025 => 275,  1020 => 273,  1015 => 270,  1009 => 267,  1006 => 266,  1004 => 265,  1001 => 264,  998 => 239,  991 => 238,  985 => 291,  983 => 238,  974 => 237,  971 => 236,  968 => 235,  965 => 234,  963 => 233,  960 => 232,  957 => 231,  950 => 230,  944 => 294,  941 => 293,  938 => 230,  936 => 229,  933 => 228,  926 => 227,  921 => 318,  919 => 315,  916 => 314,  914 => 297,  911 => 296,  908 => 227,  901 => 226,  892 => 363,  890 => 322,  885 => 319,  883 => 226,  878 => 225,  876 => 224,  873 => 223,  866 => 222,  858 => 215,  851 => 214,  843 => 205,  839 => 204,  832 => 203,  825 => 202,  819 => 208,  817 => 202,  814 => 201,  807 => 200,  801 => 210,  799 => 200,  796 => 199,  789 => 198,  784 => 217,  782 => 214,  778 => 212,  776 => 198,  773 => 197,  766 => 196,  758 => 170,  751 => 169,  744 => 168,  737 => 190,  734 => 189,  720 => 175,  716 => 173,  714 => 168,  707 => 164,  704 => 163,  697 => 162,  692 => 368,  690 => 222,  684 => 218,  682 => 196,  676 => 192,  674 => 162,  671 => 161,  664 => 160,  659 => 101,  656 => 100,  642 => 99,  637 => 97,  636 => 2,  634 => 97,  629 => 95,  628 => 2,  627 => 95,  624 => 94,  618 => 92,  615 => 91,  612 => 90,  595 => 89,  589 => 87,  586 => 86,  579 => 85,  571 => 71,  564 => 70,  557 => 369,  555 => 160,  551 => 158,  547 => 157,  544 => 156,  529 => 122,  526 => 121,  524 => 120,  521 => 119,  517 => 118,  502 => 107,  500 => 106,  497 => 105,  495 => 104,  492 => 103,  488 => 102,  485 => 85,  483 => 84,  480 => 83,  476 => 82,  470 => 80,  464 => 77,  461 => 76,  458 => 75,  456 => 74,  453 => 73,  450 => 70,  443 => 69,  435 => 66,  428 => 65,  420 => 63,  413 => 62,  403 => 54,  393 => 53,  383 => 52,  377 => 380,  375 => 375,  372 => 374,  370 => 373,  367 => 372,  365 => 69,  362 => 68,  359 => 65,  357 => 62,  352 => 60,  348 => 59,  344 => 58,  340 => 57,  336 => 56,  332 => 55,  328 => 54,  323 => 53,  320 => 52,  313 => 51,  308 => 48,  299 => 46,  294 => 45,  287 => 44,  280 => 41,  275 => 40,  268 => 39,  260 => 35,  253 => 34,  248 => 37,  246 => 34,  240 => 32,  233 => 31,  225 => 28,  218 => 27,  211 => 24,  206 => 23,  199 => 22,  191 => 19,  184 => 18,  173 => 15,  163 => 8,  156 => 7,  150 => 382,  148 => 51,  144 => 49,  142 => 44,  139 => 43,  137 => 39,  134 => 38,  132 => 31,  129 => 30,  127 => 27,  124 => 26,  122 => 22,  119 => 21,  117 => 18,  111 => 16,  106 => 15,  103 => 14,  101 => 7,  94 => 5,  90 => 3,  88 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_fbd4e4c64550d8d65ab33df0fdaa2772___41080889271 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 122
        return $this->loadTemplate(($context["__parent__"] ?? null), "@EasyAdmin/layout.html.twig", 122);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 123
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $_v5 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v5->preRender("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-settings-button", "data-bs-offset" => "0,5", "withoutDropdownToggleMarker" => true]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v5->startEmbedComponent("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["class" => "dropdown-settings-button", "data-bs-offset" => "0,5", "withoutDropdownToggleMarker" => true]), $context, "@EasyAdmin/layout.html.twig", 22121858011);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 22121858011);
            $this->loadTemplate("@EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 123, "22121858011")->display($embeddedContext, $embeddedBlocks);
            $_v5->finishEmbedComponent();
        }
        // line 126
        yield "
                    ";
        // line 127
        $_v6 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v6->preRender("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v6->startEmbedComponent("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/layout.html.twig", 22265535521);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 22265535521);
            $this->loadTemplate("@EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 127, "22265535521")->display($embeddedContext, $embeddedBlocks);
            $_v6->finishEmbedComponent();
        }
        // line 155
        yield "                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  1782 => 155,  1768 => 127,  1765 => 126,  1745 => 123,  1726 => 122,  1664 => 112,  1660 => 111,  1648 => 109,  1629 => 108,  1568 => 116,  1565 => 115,  1545 => 108,  1526 => 107,  1467 => 379,  1458 => 377,  1453 => 376,  1446 => 375,  1436 => 373,  1431 => 360,  1425 => 357,  1422 => 356,  1419 => 355,  1416 => 354,  1409 => 353,  1399 => 350,  1382 => 343,  1375 => 342,  1370 => 338,  1364 => 335,  1361 => 334,  1359 => 2,  1357 => 334,  1354 => 333,  1347 => 332,  1337 => 330,  1332 => 345,  1330 => 342,  1325 => 339,  1323 => 332,  1320 => 331,  1318 => 330,  1314 => 328,  1307 => 327,  1301 => 346,  1299 => 327,  1296 => 326,  1293 => 325,  1286 => 324,  1280 => 361,  1278 => 353,  1274 => 351,  1272 => 350,  1268 => 348,  1266 => 324,  1263 => 323,  1256 => 322,  1248 => 316,  1241 => 315,  1236 => 311,  1221 => 300,  1214 => 299,  1208 => 312,  1206 => 299,  1203 => 298,  1196 => 297,  1191 => 263,  1185 => 262,  1177 => 260,  1174 => 259,  1168 => 258,  1158 => 256,  1155 => 255,  1149 => 254,  1137 => 252,  1134 => 251,  1117 => 249,  1112 => 248,  1109 => 247,  1107 => 246,  1102 => 245,  1099 => 244,  1097 => 243,  1092 => 242,  1089 => 241,  1084 => 240,  1077 => 239,  1070 => 288,  1064 => 285,  1059 => 284,  1056 => 283,  1053 => 282,  1050 => 281,  1047 => 280,  1045 => 279,  1036 => 276,  1034 => 2,  1029 => 276,  1025 => 275,  1020 => 273,  1015 => 270,  1009 => 267,  1006 => 266,  1004 => 265,  1001 => 264,  998 => 239,  991 => 238,  985 => 291,  983 => 238,  974 => 237,  971 => 236,  968 => 235,  965 => 234,  963 => 233,  960 => 232,  957 => 231,  950 => 230,  944 => 294,  941 => 293,  938 => 230,  936 => 229,  933 => 228,  926 => 227,  921 => 318,  919 => 315,  916 => 314,  914 => 297,  911 => 296,  908 => 227,  901 => 226,  892 => 363,  890 => 322,  885 => 319,  883 => 226,  878 => 225,  876 => 224,  873 => 223,  866 => 222,  858 => 215,  851 => 214,  843 => 205,  839 => 204,  832 => 203,  825 => 202,  819 => 208,  817 => 202,  814 => 201,  807 => 200,  801 => 210,  799 => 200,  796 => 199,  789 => 198,  784 => 217,  782 => 214,  778 => 212,  776 => 198,  773 => 197,  766 => 196,  758 => 170,  751 => 169,  744 => 168,  737 => 190,  734 => 189,  720 => 175,  716 => 173,  714 => 168,  707 => 164,  704 => 163,  697 => 162,  692 => 368,  690 => 222,  684 => 218,  682 => 196,  676 => 192,  674 => 162,  671 => 161,  664 => 160,  659 => 101,  656 => 100,  642 => 99,  637 => 97,  636 => 2,  634 => 97,  629 => 95,  628 => 2,  627 => 95,  624 => 94,  618 => 92,  615 => 91,  612 => 90,  595 => 89,  589 => 87,  586 => 86,  579 => 85,  571 => 71,  564 => 70,  557 => 369,  555 => 160,  551 => 158,  547 => 157,  544 => 156,  529 => 122,  526 => 121,  524 => 120,  521 => 119,  517 => 118,  502 => 107,  500 => 106,  497 => 105,  495 => 104,  492 => 103,  488 => 102,  485 => 85,  483 => 84,  480 => 83,  476 => 82,  470 => 80,  464 => 77,  461 => 76,  458 => 75,  456 => 74,  453 => 73,  450 => 70,  443 => 69,  435 => 66,  428 => 65,  420 => 63,  413 => 62,  403 => 54,  393 => 53,  383 => 52,  377 => 380,  375 => 375,  372 => 374,  370 => 373,  367 => 372,  365 => 69,  362 => 68,  359 => 65,  357 => 62,  352 => 60,  348 => 59,  344 => 58,  340 => 57,  336 => 56,  332 => 55,  328 => 54,  323 => 53,  320 => 52,  313 => 51,  308 => 48,  299 => 46,  294 => 45,  287 => 44,  280 => 41,  275 => 40,  268 => 39,  260 => 35,  253 => 34,  248 => 37,  246 => 34,  240 => 32,  233 => 31,  225 => 28,  218 => 27,  211 => 24,  206 => 23,  199 => 22,  191 => 19,  184 => 18,  173 => 15,  163 => 8,  156 => 7,  150 => 382,  148 => 51,  144 => 49,  142 => 44,  139 => 43,  137 => 39,  134 => 38,  132 => 31,  129 => 30,  127 => 27,  124 => 26,  122 => 22,  119 => 21,  117 => 18,  111 => 16,  106 => 15,  103 => 14,  101 => 7,  94 => 5,  90 => 3,  88 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_fbd4e4c64550d8d65ab33df0fdaa2772___22121858011 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 123
        return $this->loadTemplate(($context["__parent__"] ?? null), "@EasyAdmin/layout.html.twig", 123);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 124
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:gear"]);
        yield "
                    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  1860 => 124,  1841 => 123,  1782 => 155,  1768 => 127,  1765 => 126,  1745 => 123,  1726 => 122,  1664 => 112,  1660 => 111,  1648 => 109,  1629 => 108,  1568 => 116,  1565 => 115,  1545 => 108,  1526 => 107,  1467 => 379,  1458 => 377,  1453 => 376,  1446 => 375,  1436 => 373,  1431 => 360,  1425 => 357,  1422 => 356,  1419 => 355,  1416 => 354,  1409 => 353,  1399 => 350,  1382 => 343,  1375 => 342,  1370 => 338,  1364 => 335,  1361 => 334,  1359 => 2,  1357 => 334,  1354 => 333,  1347 => 332,  1337 => 330,  1332 => 345,  1330 => 342,  1325 => 339,  1323 => 332,  1320 => 331,  1318 => 330,  1314 => 328,  1307 => 327,  1301 => 346,  1299 => 327,  1296 => 326,  1293 => 325,  1286 => 324,  1280 => 361,  1278 => 353,  1274 => 351,  1272 => 350,  1268 => 348,  1266 => 324,  1263 => 323,  1256 => 322,  1248 => 316,  1241 => 315,  1236 => 311,  1221 => 300,  1214 => 299,  1208 => 312,  1206 => 299,  1203 => 298,  1196 => 297,  1191 => 263,  1185 => 262,  1177 => 260,  1174 => 259,  1168 => 258,  1158 => 256,  1155 => 255,  1149 => 254,  1137 => 252,  1134 => 251,  1117 => 249,  1112 => 248,  1109 => 247,  1107 => 246,  1102 => 245,  1099 => 244,  1097 => 243,  1092 => 242,  1089 => 241,  1084 => 240,  1077 => 239,  1070 => 288,  1064 => 285,  1059 => 284,  1056 => 283,  1053 => 282,  1050 => 281,  1047 => 280,  1045 => 279,  1036 => 276,  1034 => 2,  1029 => 276,  1025 => 275,  1020 => 273,  1015 => 270,  1009 => 267,  1006 => 266,  1004 => 265,  1001 => 264,  998 => 239,  991 => 238,  985 => 291,  983 => 238,  974 => 237,  971 => 236,  968 => 235,  965 => 234,  963 => 233,  960 => 232,  957 => 231,  950 => 230,  944 => 294,  941 => 293,  938 => 230,  936 => 229,  933 => 228,  926 => 227,  921 => 318,  919 => 315,  916 => 314,  914 => 297,  911 => 296,  908 => 227,  901 => 226,  892 => 363,  890 => 322,  885 => 319,  883 => 226,  878 => 225,  876 => 224,  873 => 223,  866 => 222,  858 => 215,  851 => 214,  843 => 205,  839 => 204,  832 => 203,  825 => 202,  819 => 208,  817 => 202,  814 => 201,  807 => 200,  801 => 210,  799 => 200,  796 => 199,  789 => 198,  784 => 217,  782 => 214,  778 => 212,  776 => 198,  773 => 197,  766 => 196,  758 => 170,  751 => 169,  744 => 168,  737 => 190,  734 => 189,  720 => 175,  716 => 173,  714 => 168,  707 => 164,  704 => 163,  697 => 162,  692 => 368,  690 => 222,  684 => 218,  682 => 196,  676 => 192,  674 => 162,  671 => 161,  664 => 160,  659 => 101,  656 => 100,  642 => 99,  637 => 97,  636 => 2,  634 => 97,  629 => 95,  628 => 2,  627 => 95,  624 => 94,  618 => 92,  615 => 91,  612 => 90,  595 => 89,  589 => 87,  586 => 86,  579 => 85,  571 => 71,  564 => 70,  557 => 369,  555 => 160,  551 => 158,  547 => 157,  544 => 156,  529 => 122,  526 => 121,  524 => 120,  521 => 119,  517 => 118,  502 => 107,  500 => 106,  497 => 105,  495 => 104,  492 => 103,  488 => 102,  485 => 85,  483 => 84,  480 => 83,  476 => 82,  470 => 80,  464 => 77,  461 => 76,  458 => 75,  456 => 74,  453 => 73,  450 => 70,  443 => 69,  435 => 66,  428 => 65,  420 => 63,  413 => 62,  403 => 54,  393 => 53,  383 => 52,  377 => 380,  375 => 375,  372 => 374,  370 => 373,  367 => 372,  365 => 69,  362 => 68,  359 => 65,  357 => 62,  352 => 60,  348 => 59,  344 => 58,  340 => 57,  336 => 56,  332 => 55,  328 => 54,  323 => 53,  320 => 52,  313 => 51,  308 => 48,  299 => 46,  294 => 45,  287 => 44,  280 => 41,  275 => 40,  268 => 39,  260 => 35,  253 => 34,  248 => 37,  246 => 34,  240 => 32,  233 => 31,  225 => 28,  218 => 27,  211 => 24,  206 => 23,  199 => 22,  191 => 19,  184 => 18,  173 => 15,  163 => 8,  156 => 7,  150 => 382,  148 => 51,  144 => 49,  142 => 44,  139 => 43,  137 => 39,  134 => 38,  132 => 31,  129 => 30,  127 => 27,  124 => 26,  122 => 22,  119 => 21,  117 => 18,  111 => 16,  106 => 15,  103 => 14,  101 => 7,  94 => 5,  90 => 3,  88 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_fbd4e4c64550d8d65ab33df0fdaa2772___22265535521 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 127
        return $this->loadTemplate(($context["__parent__"] ?? null), "@EasyAdmin/layout.html.twig", 127);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 128
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $_v7 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v7->preRender("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray([]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v7->startEmbedComponent("ea:ActionMenu:ActionList", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/layout.html.twig", 3361749131);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 3361749131);
            $this->loadTemplate("@EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 128, "3361749131")->display($embeddedContext, $embeddedBlocks);
            $_v7->finishEmbedComponent();
        }
        // line 154
        yield "                    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  1966 => 154,  1946 => 128,  1927 => 127,  1860 => 124,  1841 => 123,  1782 => 155,  1768 => 127,  1765 => 126,  1745 => 123,  1726 => 122,  1664 => 112,  1660 => 111,  1648 => 109,  1629 => 108,  1568 => 116,  1565 => 115,  1545 => 108,  1526 => 107,  1467 => 379,  1458 => 377,  1453 => 376,  1446 => 375,  1436 => 373,  1431 => 360,  1425 => 357,  1422 => 356,  1419 => 355,  1416 => 354,  1409 => 353,  1399 => 350,  1382 => 343,  1375 => 342,  1370 => 338,  1364 => 335,  1361 => 334,  1359 => 2,  1357 => 334,  1354 => 333,  1347 => 332,  1337 => 330,  1332 => 345,  1330 => 342,  1325 => 339,  1323 => 332,  1320 => 331,  1318 => 330,  1314 => 328,  1307 => 327,  1301 => 346,  1299 => 327,  1296 => 326,  1293 => 325,  1286 => 324,  1280 => 361,  1278 => 353,  1274 => 351,  1272 => 350,  1268 => 348,  1266 => 324,  1263 => 323,  1256 => 322,  1248 => 316,  1241 => 315,  1236 => 311,  1221 => 300,  1214 => 299,  1208 => 312,  1206 => 299,  1203 => 298,  1196 => 297,  1191 => 263,  1185 => 262,  1177 => 260,  1174 => 259,  1168 => 258,  1158 => 256,  1155 => 255,  1149 => 254,  1137 => 252,  1134 => 251,  1117 => 249,  1112 => 248,  1109 => 247,  1107 => 246,  1102 => 245,  1099 => 244,  1097 => 243,  1092 => 242,  1089 => 241,  1084 => 240,  1077 => 239,  1070 => 288,  1064 => 285,  1059 => 284,  1056 => 283,  1053 => 282,  1050 => 281,  1047 => 280,  1045 => 279,  1036 => 276,  1034 => 2,  1029 => 276,  1025 => 275,  1020 => 273,  1015 => 270,  1009 => 267,  1006 => 266,  1004 => 265,  1001 => 264,  998 => 239,  991 => 238,  985 => 291,  983 => 238,  974 => 237,  971 => 236,  968 => 235,  965 => 234,  963 => 233,  960 => 232,  957 => 231,  950 => 230,  944 => 294,  941 => 293,  938 => 230,  936 => 229,  933 => 228,  926 => 227,  921 => 318,  919 => 315,  916 => 314,  914 => 297,  911 => 296,  908 => 227,  901 => 226,  892 => 363,  890 => 322,  885 => 319,  883 => 226,  878 => 225,  876 => 224,  873 => 223,  866 => 222,  858 => 215,  851 => 214,  843 => 205,  839 => 204,  832 => 203,  825 => 202,  819 => 208,  817 => 202,  814 => 201,  807 => 200,  801 => 210,  799 => 200,  796 => 199,  789 => 198,  784 => 217,  782 => 214,  778 => 212,  776 => 198,  773 => 197,  766 => 196,  758 => 170,  751 => 169,  744 => 168,  737 => 190,  734 => 189,  720 => 175,  716 => 173,  714 => 168,  707 => 164,  704 => 163,  697 => 162,  692 => 368,  690 => 222,  684 => 218,  682 => 196,  676 => 192,  674 => 162,  671 => 161,  664 => 160,  659 => 101,  656 => 100,  642 => 99,  637 => 97,  636 => 2,  634 => 97,  629 => 95,  628 => 2,  627 => 95,  624 => 94,  618 => 92,  615 => 91,  612 => 90,  595 => 89,  589 => 87,  586 => 86,  579 => 85,  571 => 71,  564 => 70,  557 => 369,  555 => 160,  551 => 158,  547 => 157,  544 => 156,  529 => 122,  526 => 121,  524 => 120,  521 => 119,  517 => 118,  502 => 107,  500 => 106,  497 => 105,  495 => 104,  492 => 103,  488 => 102,  485 => 85,  483 => 84,  480 => 83,  476 => 82,  470 => 80,  464 => 77,  461 => 76,  458 => 75,  456 => 74,  453 => 73,  450 => 70,  443 => 69,  435 => 66,  428 => 65,  420 => 63,  413 => 62,  403 => 54,  393 => 53,  383 => 52,  377 => 380,  375 => 375,  372 => 374,  370 => 373,  367 => 372,  365 => 69,  362 => 68,  359 => 65,  357 => 62,  352 => 60,  348 => 59,  344 => 58,  340 => 57,  336 => 56,  332 => 55,  328 => 54,  323 => 53,  320 => 52,  313 => 51,  308 => 48,  299 => 46,  294 => 45,  287 => 44,  280 => 41,  275 => 40,  268 => 39,  260 => 35,  253 => 34,  248 => 37,  246 => 34,  240 => 32,  233 => 31,  225 => 28,  218 => 27,  211 => 24,  206 => 23,  199 => 22,  191 => 19,  184 => 18,  173 => 15,  163 => 8,  156 => 7,  150 => 382,  148 => 51,  144 => 49,  142 => 44,  139 => 43,  137 => 39,  134 => 38,  132 => 31,  129 => 30,  127 => 27,  124 => 26,  122 => 22,  119 => 21,  117 => 18,  111 => 16,  106 => 15,  103 => 14,  101 => 7,  94 => 5,  90 => 3,  88 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_fbd4e4c64550d8d65ab33df0fdaa2772___3361749131 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 128
        return $this->loadTemplate(($context["__parent__"] ?? null), "@EasyAdmin/layout.html.twig", 128);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 129
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardLocales", [], "any", false, false, false, 129)) {
            // line 130
            yield "                                ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Header", ["class" => "dropdown-locales-label", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.locale", [], "EasyAdminBundle")]);
            yield "
                            ";
        }
        // line 132
        yield "
                            ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardLocales", [], "any", false, false, false, 133));
        foreach ($context['_seq'] as $context["_key"] => $context["localeDto"]) {
            // line 134
            yield "                                ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "usePrettyUrls", [], "any", false, false, false, 134)) {
                // line 135
                yield "                                    ";
                $context["url"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "set", ["_locale", CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 135)], "method", false, false, false, 135), "set", ["entityId", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 135), "attributes", [], "any", false, false, false, 135), "get", ["entityId"], "method", false, false, false, 135)], "method", false, false, false, 135);
                // line 136
                yield "                                ";
            } else {
                // line 137
                yield "                                    ";
                $context["url"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "set", ["_locale", CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 137)], "method", false, false, false, 137);
                // line 138
                yield "                                ";
            }
            // line 139
            yield "                                ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["class" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 139), "locale", [], "any", false, false, false, 139) == CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 139))) ? ("active") : ("")), "url" => CoreExtension::getAttribute($this->env, $this->source, ($context["url"] ?? null), "generateUrl", [], "method", false, false, false, 139), "icon" => CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "icon", [], "any", false, false, false, 139), "label" => CoreExtension::getAttribute($this->env, $this->source, $context["localeDto"], "name", [], "any", false, false, false, 139)]);
            yield "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['localeDto'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        yield "
                            ";
        // line 142
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 142)) {
            // line 143
            yield "                                ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardLocales", [], "any", false, false, false, 143)) {
                // line 144
                yield "                                    ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Divider");
                yield "
                                ";
            }
            // line 146
            yield "
                                ";
            // line 147
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Header", ["class" => "dropdown-appearance-label", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.label", [], "EasyAdminBundle")]);
            yield "

                                ";
            // line 149
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["class" => "dropdown-appearance-item", "url" => "#", "icon" => "internal:sun", "data-ea-color-scheme" => "light", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.light", [], "EasyAdminBundle")]);
            yield "
                                ";
            // line 150
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["class" => "dropdown-appearance-item", "url" => "#", "icon" => "internal:moon", "data-ea-color-scheme" => "dark", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.dark", [], "EasyAdminBundle")]);
            yield "
                                ";
            // line 151
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:ActionMenu:ActionList:Item", ["class" => "dropdown-appearance-item active", "url" => "#", "icon" => "internal:desktop", "data-ea-color-scheme" => "auto", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.auto", [], "EasyAdminBundle")]);
            yield "
                            ";
        }
        // line 153
        yield "                        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  2124 => 153,  2119 => 151,  2115 => 150,  2111 => 149,  2106 => 147,  2103 => 146,  2097 => 144,  2094 => 143,  2092 => 142,  2089 => 141,  2080 => 139,  2077 => 138,  2074 => 137,  2071 => 136,  2068 => 135,  2065 => 134,  2061 => 133,  2058 => 132,  2052 => 130,  2044 => 129,  2025 => 128,  1966 => 154,  1946 => 128,  1927 => 127,  1860 => 124,  1841 => 123,  1782 => 155,  1768 => 127,  1765 => 126,  1745 => 123,  1726 => 122,  1664 => 112,  1660 => 111,  1648 => 109,  1629 => 108,  1568 => 116,  1565 => 115,  1545 => 108,  1526 => 107,  1467 => 379,  1458 => 377,  1453 => 376,  1446 => 375,  1436 => 373,  1431 => 360,  1425 => 357,  1422 => 356,  1419 => 355,  1416 => 354,  1409 => 353,  1399 => 350,  1382 => 343,  1375 => 342,  1370 => 338,  1364 => 335,  1361 => 334,  1359 => 2,  1357 => 334,  1354 => 333,  1347 => 332,  1337 => 330,  1332 => 345,  1330 => 342,  1325 => 339,  1323 => 332,  1320 => 331,  1318 => 330,  1314 => 328,  1307 => 327,  1301 => 346,  1299 => 327,  1296 => 326,  1293 => 325,  1286 => 324,  1280 => 361,  1278 => 353,  1274 => 351,  1272 => 350,  1268 => 348,  1266 => 324,  1263 => 323,  1256 => 322,  1248 => 316,  1241 => 315,  1236 => 311,  1221 => 300,  1214 => 299,  1208 => 312,  1206 => 299,  1203 => 298,  1196 => 297,  1191 => 263,  1185 => 262,  1177 => 260,  1174 => 259,  1168 => 258,  1158 => 256,  1155 => 255,  1149 => 254,  1137 => 252,  1134 => 251,  1117 => 249,  1112 => 248,  1109 => 247,  1107 => 246,  1102 => 245,  1099 => 244,  1097 => 243,  1092 => 242,  1089 => 241,  1084 => 240,  1077 => 239,  1070 => 288,  1064 => 285,  1059 => 284,  1056 => 283,  1053 => 282,  1050 => 281,  1047 => 280,  1045 => 279,  1036 => 276,  1034 => 2,  1029 => 276,  1025 => 275,  1020 => 273,  1015 => 270,  1009 => 267,  1006 => 266,  1004 => 265,  1001 => 264,  998 => 239,  991 => 238,  985 => 291,  983 => 238,  974 => 237,  971 => 236,  968 => 235,  965 => 234,  963 => 233,  960 => 232,  957 => 231,  950 => 230,  944 => 294,  941 => 293,  938 => 230,  936 => 229,  933 => 228,  926 => 227,  921 => 318,  919 => 315,  916 => 314,  914 => 297,  911 => 296,  908 => 227,  901 => 226,  892 => 363,  890 => 322,  885 => 319,  883 => 226,  878 => 225,  876 => 224,  873 => 223,  866 => 222,  858 => 215,  851 => 214,  843 => 205,  839 => 204,  832 => 203,  825 => 202,  819 => 208,  817 => 202,  814 => 201,  807 => 200,  801 => 210,  799 => 200,  796 => 199,  789 => 198,  784 => 217,  782 => 214,  778 => 212,  776 => 198,  773 => 197,  766 => 196,  758 => 170,  751 => 169,  744 => 168,  737 => 190,  734 => 189,  720 => 175,  716 => 173,  714 => 168,  707 => 164,  704 => 163,  697 => 162,  692 => 368,  690 => 222,  684 => 218,  682 => 196,  676 => 192,  674 => 162,  671 => 161,  664 => 160,  659 => 101,  656 => 100,  642 => 99,  637 => 97,  636 => 2,  634 => 97,  629 => 95,  628 => 2,  627 => 95,  624 => 94,  618 => 92,  615 => 91,  612 => 90,  595 => 89,  589 => 87,  586 => 86,  579 => 85,  571 => 71,  564 => 70,  557 => 369,  555 => 160,  551 => 158,  547 => 157,  544 => 156,  529 => 122,  526 => 121,  524 => 120,  521 => 119,  517 => 118,  502 => 107,  500 => 106,  497 => 105,  495 => 104,  492 => 103,  488 => 102,  485 => 85,  483 => 84,  480 => 83,  476 => 82,  470 => 80,  464 => 77,  461 => 76,  458 => 75,  456 => 74,  453 => 73,  450 => 70,  443 => 69,  435 => 66,  428 => 65,  420 => 63,  413 => 62,  403 => 54,  393 => 53,  383 => 52,  377 => 380,  375 => 375,  372 => 374,  370 => 373,  367 => 372,  365 => 69,  362 => 68,  359 => 65,  357 => 62,  352 => 60,  348 => 59,  344 => 58,  340 => 57,  336 => 56,  332 => 55,  328 => 54,  323 => 53,  320 => 52,  313 => 51,  308 => 48,  299 => 46,  294 => 45,  287 => 44,  280 => 41,  275 => 40,  268 => 39,  260 => 35,  253 => 34,  248 => 37,  246 => 34,  240 => 32,  233 => 31,  225 => 28,  218 => 27,  211 => 24,  206 => 23,  199 => 22,  191 => 19,  184 => 18,  173 => 15,  163 => 8,  156 => 7,  150 => 382,  148 => 51,  144 => 49,  142 => 44,  139 => 43,  137 => 39,  134 => 38,  132 => 31,  129 => 30,  127 => 27,  124 => 26,  122 => 22,  119 => 21,  117 => 18,  111 => 16,  106 => 15,  103 => 14,  101 => 7,  94 => 5,  90 => 3,  88 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_fbd4e4c64550d8d65ab33df0fdaa2772___3994479931 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 175
        return $this->loadTemplate(($context["__parent__"] ?? null), "@EasyAdmin/layout.html.twig", 175);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 176
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $_v8 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v8->preRender("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["class" => "user-details", "data-bs-offset" => "0,5", "withoutDropdownToggleMarker" => true]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v8->startEmbedComponent("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["class" => "user-details", "data-bs-offset" => "0,5", "withoutDropdownToggleMarker" => true]), $context, "@EasyAdmin/layout.html.twig", 23953587231);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 23953587231);
            $this->loadTemplate("@EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 176, "23953587231")->display($embeddedContext, $embeddedBlocks);
            $_v8->finishEmbedComponent();
        }
        // line 185
        yield "                            ";
        $_v9 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v9->preRender("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v9->startEmbedComponent("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/layout.html.twig", 24216236701);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 24216236701);
            $this->loadTemplate("@EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 185, "24216236701")->display($embeddedContext, $embeddedBlocks);
            $_v9->finishEmbedComponent();
        }
        // line 188
        yield "                        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  2237 => 188,  2222 => 185,  2202 => 176,  2183 => 175,  2124 => 153,  2119 => 151,  2115 => 150,  2111 => 149,  2106 => 147,  2103 => 146,  2097 => 144,  2094 => 143,  2092 => 142,  2089 => 141,  2080 => 139,  2077 => 138,  2074 => 137,  2071 => 136,  2068 => 135,  2065 => 134,  2061 => 133,  2058 => 132,  2052 => 130,  2044 => 129,  2025 => 128,  1966 => 154,  1946 => 128,  1927 => 127,  1860 => 124,  1841 => 123,  1782 => 155,  1768 => 127,  1765 => 126,  1745 => 123,  1726 => 122,  1664 => 112,  1660 => 111,  1648 => 109,  1629 => 108,  1568 => 116,  1565 => 115,  1545 => 108,  1526 => 107,  1467 => 379,  1458 => 377,  1453 => 376,  1446 => 375,  1436 => 373,  1431 => 360,  1425 => 357,  1422 => 356,  1419 => 355,  1416 => 354,  1409 => 353,  1399 => 350,  1382 => 343,  1375 => 342,  1370 => 338,  1364 => 335,  1361 => 334,  1359 => 2,  1357 => 334,  1354 => 333,  1347 => 332,  1337 => 330,  1332 => 345,  1330 => 342,  1325 => 339,  1323 => 332,  1320 => 331,  1318 => 330,  1314 => 328,  1307 => 327,  1301 => 346,  1299 => 327,  1296 => 326,  1293 => 325,  1286 => 324,  1280 => 361,  1278 => 353,  1274 => 351,  1272 => 350,  1268 => 348,  1266 => 324,  1263 => 323,  1256 => 322,  1248 => 316,  1241 => 315,  1236 => 311,  1221 => 300,  1214 => 299,  1208 => 312,  1206 => 299,  1203 => 298,  1196 => 297,  1191 => 263,  1185 => 262,  1177 => 260,  1174 => 259,  1168 => 258,  1158 => 256,  1155 => 255,  1149 => 254,  1137 => 252,  1134 => 251,  1117 => 249,  1112 => 248,  1109 => 247,  1107 => 246,  1102 => 245,  1099 => 244,  1097 => 243,  1092 => 242,  1089 => 241,  1084 => 240,  1077 => 239,  1070 => 288,  1064 => 285,  1059 => 284,  1056 => 283,  1053 => 282,  1050 => 281,  1047 => 280,  1045 => 279,  1036 => 276,  1034 => 2,  1029 => 276,  1025 => 275,  1020 => 273,  1015 => 270,  1009 => 267,  1006 => 266,  1004 => 265,  1001 => 264,  998 => 239,  991 => 238,  985 => 291,  983 => 238,  974 => 237,  971 => 236,  968 => 235,  965 => 234,  963 => 233,  960 => 232,  957 => 231,  950 => 230,  944 => 294,  941 => 293,  938 => 230,  936 => 229,  933 => 228,  926 => 227,  921 => 318,  919 => 315,  916 => 314,  914 => 297,  911 => 296,  908 => 227,  901 => 226,  892 => 363,  890 => 322,  885 => 319,  883 => 226,  878 => 225,  876 => 224,  873 => 223,  866 => 222,  858 => 215,  851 => 214,  843 => 205,  839 => 204,  832 => 203,  825 => 202,  819 => 208,  817 => 202,  814 => 201,  807 => 200,  801 => 210,  799 => 200,  796 => 199,  789 => 198,  784 => 217,  782 => 214,  778 => 212,  776 => 198,  773 => 197,  766 => 196,  758 => 170,  751 => 169,  744 => 168,  737 => 190,  734 => 189,  720 => 175,  716 => 173,  714 => 168,  707 => 164,  704 => 163,  697 => 162,  692 => 368,  690 => 222,  684 => 218,  682 => 196,  676 => 192,  674 => 162,  671 => 161,  664 => 160,  659 => 101,  656 => 100,  642 => 99,  637 => 97,  636 => 2,  634 => 97,  629 => 95,  628 => 2,  627 => 95,  624 => 94,  618 => 92,  615 => 91,  612 => 90,  595 => 89,  589 => 87,  586 => 86,  579 => 85,  571 => 71,  564 => 70,  557 => 369,  555 => 160,  551 => 158,  547 => 157,  544 => 156,  529 => 122,  526 => 121,  524 => 120,  521 => 119,  517 => 118,  502 => 107,  500 => 106,  497 => 105,  495 => 104,  492 => 103,  488 => 102,  485 => 85,  483 => 84,  480 => 83,  476 => 82,  470 => 80,  464 => 77,  461 => 76,  458 => 75,  456 => 74,  453 => 73,  450 => 70,  443 => 69,  435 => 66,  428 => 65,  420 => 63,  413 => 62,  403 => 54,  393 => 53,  383 => 52,  377 => 380,  375 => 375,  372 => 374,  370 => 373,  367 => 372,  365 => 69,  362 => 68,  359 => 65,  357 => 62,  352 => 60,  348 => 59,  344 => 58,  340 => 57,  336 => 56,  332 => 55,  328 => 54,  323 => 53,  320 => 52,  313 => 51,  308 => 48,  299 => 46,  294 => 45,  287 => 44,  280 => 41,  275 => 40,  268 => 39,  260 => 35,  253 => 34,  248 => 37,  246 => 34,  240 => 32,  233 => 31,  225 => 28,  218 => 27,  211 => 24,  206 => 23,  199 => 22,  191 => 19,  184 => 18,  173 => 15,  163 => 8,  156 => 7,  150 => 382,  148 => 51,  144 => 49,  142 => 44,  139 => 43,  137 => 39,  134 => 38,  132 => 31,  129 => 30,  127 => 27,  124 => 26,  122 => 22,  119 => 21,  117 => 18,  111 => 16,  106 => 15,  103 => 14,  101 => 7,  94 => 5,  90 => 3,  88 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_fbd4e4c64550d8d65ab33df0fdaa2772___23953587231 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 176
        return $this->loadTemplate(($context["__parent__"] ?? null), "@EasyAdmin/layout.html.twig", 176);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 179
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 179), "avatarDisplayed", [], "any", false, false, false, 179)) {
            // line 180
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user_menu_avatar"] ?? null), "html", null, true);
            yield "
                                ";
        } else {
            // line 182
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["class" => "user-avatar", "name" => (( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 182))) ? ("internal:user") : ("internal:user-xmark"))]);
            yield "
                                ";
        }
        // line 184
        yield "                            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  2335 => 184,  2329 => 182,  2323 => 180,  2315 => 179,  2296 => 176,  2237 => 188,  2222 => 185,  2202 => 176,  2183 => 175,  2124 => 153,  2119 => 151,  2115 => 150,  2111 => 149,  2106 => 147,  2103 => 146,  2097 => 144,  2094 => 143,  2092 => 142,  2089 => 141,  2080 => 139,  2077 => 138,  2074 => 137,  2071 => 136,  2068 => 135,  2065 => 134,  2061 => 133,  2058 => 132,  2052 => 130,  2044 => 129,  2025 => 128,  1966 => 154,  1946 => 128,  1927 => 127,  1860 => 124,  1841 => 123,  1782 => 155,  1768 => 127,  1765 => 126,  1745 => 123,  1726 => 122,  1664 => 112,  1660 => 111,  1648 => 109,  1629 => 108,  1568 => 116,  1565 => 115,  1545 => 108,  1526 => 107,  1467 => 379,  1458 => 377,  1453 => 376,  1446 => 375,  1436 => 373,  1431 => 360,  1425 => 357,  1422 => 356,  1419 => 355,  1416 => 354,  1409 => 353,  1399 => 350,  1382 => 343,  1375 => 342,  1370 => 338,  1364 => 335,  1361 => 334,  1359 => 2,  1357 => 334,  1354 => 333,  1347 => 332,  1337 => 330,  1332 => 345,  1330 => 342,  1325 => 339,  1323 => 332,  1320 => 331,  1318 => 330,  1314 => 328,  1307 => 327,  1301 => 346,  1299 => 327,  1296 => 326,  1293 => 325,  1286 => 324,  1280 => 361,  1278 => 353,  1274 => 351,  1272 => 350,  1268 => 348,  1266 => 324,  1263 => 323,  1256 => 322,  1248 => 316,  1241 => 315,  1236 => 311,  1221 => 300,  1214 => 299,  1208 => 312,  1206 => 299,  1203 => 298,  1196 => 297,  1191 => 263,  1185 => 262,  1177 => 260,  1174 => 259,  1168 => 258,  1158 => 256,  1155 => 255,  1149 => 254,  1137 => 252,  1134 => 251,  1117 => 249,  1112 => 248,  1109 => 247,  1107 => 246,  1102 => 245,  1099 => 244,  1097 => 243,  1092 => 242,  1089 => 241,  1084 => 240,  1077 => 239,  1070 => 288,  1064 => 285,  1059 => 284,  1056 => 283,  1053 => 282,  1050 => 281,  1047 => 280,  1045 => 279,  1036 => 276,  1034 => 2,  1029 => 276,  1025 => 275,  1020 => 273,  1015 => 270,  1009 => 267,  1006 => 266,  1004 => 265,  1001 => 264,  998 => 239,  991 => 238,  985 => 291,  983 => 238,  974 => 237,  971 => 236,  968 => 235,  965 => 234,  963 => 233,  960 => 232,  957 => 231,  950 => 230,  944 => 294,  941 => 293,  938 => 230,  936 => 229,  933 => 228,  926 => 227,  921 => 318,  919 => 315,  916 => 314,  914 => 297,  911 => 296,  908 => 227,  901 => 226,  892 => 363,  890 => 322,  885 => 319,  883 => 226,  878 => 225,  876 => 224,  873 => 223,  866 => 222,  858 => 215,  851 => 214,  843 => 205,  839 => 204,  832 => 203,  825 => 202,  819 => 208,  817 => 202,  814 => 201,  807 => 200,  801 => 210,  799 => 200,  796 => 199,  789 => 198,  784 => 217,  782 => 214,  778 => 212,  776 => 198,  773 => 197,  766 => 196,  758 => 170,  751 => 169,  744 => 168,  737 => 190,  734 => 189,  720 => 175,  716 => 173,  714 => 168,  707 => 164,  704 => 163,  697 => 162,  692 => 368,  690 => 222,  684 => 218,  682 => 196,  676 => 192,  674 => 162,  671 => 161,  664 => 160,  659 => 101,  656 => 100,  642 => 99,  637 => 97,  636 => 2,  634 => 97,  629 => 95,  628 => 2,  627 => 95,  624 => 94,  618 => 92,  615 => 91,  612 => 90,  595 => 89,  589 => 87,  586 => 86,  579 => 85,  571 => 71,  564 => 70,  557 => 369,  555 => 160,  551 => 158,  547 => 157,  544 => 156,  529 => 122,  526 => 121,  524 => 120,  521 => 119,  517 => 118,  502 => 107,  500 => 106,  497 => 105,  495 => 104,  492 => 103,  488 => 102,  485 => 85,  483 => 84,  480 => 83,  476 => 82,  470 => 80,  464 => 77,  461 => 76,  458 => 75,  456 => 74,  453 => 73,  450 => 70,  443 => 69,  435 => 66,  428 => 65,  420 => 63,  413 => 62,  403 => 54,  393 => 53,  383 => 52,  377 => 380,  375 => 375,  372 => 374,  370 => 373,  367 => 372,  365 => 69,  362 => 68,  359 => 65,  357 => 62,  352 => 60,  348 => 59,  344 => 58,  340 => 57,  336 => 56,  332 => 55,  328 => 54,  323 => 53,  320 => 52,  313 => 51,  308 => 48,  299 => 46,  294 => 45,  287 => 44,  280 => 41,  275 => 40,  268 => 39,  260 => 35,  253 => 34,  248 => 37,  246 => 34,  240 => 32,  233 => 31,  225 => 28,  218 => 27,  211 => 24,  206 => 23,  199 => 22,  191 => 19,  184 => 18,  173 => 15,  163 => 8,  156 => 7,  150 => 382,  148 => 51,  144 => 49,  142 => 44,  139 => 43,  137 => 39,  134 => 38,  132 => 31,  129 => 30,  127 => 27,  124 => 26,  122 => 22,  119 => 21,  117 => 18,  111 => 16,  106 => 15,  103 => 14,  101 => 7,  94 => 5,  90 => 3,  88 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_fbd4e4c64550d8d65ab33df0fdaa2772___24216236701 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 185
        return $this->loadTemplate(($context["__parent__"] ?? null), "@EasyAdmin/layout.html.twig", 185);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 186
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user_menu_dropdown"] ?? null), "html", null, true);
        yield "
                            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  2413 => 186,  2394 => 185,  2335 => 184,  2329 => 182,  2323 => 180,  2315 => 179,  2296 => 176,  2237 => 188,  2222 => 185,  2202 => 176,  2183 => 175,  2124 => 153,  2119 => 151,  2115 => 150,  2111 => 149,  2106 => 147,  2103 => 146,  2097 => 144,  2094 => 143,  2092 => 142,  2089 => 141,  2080 => 139,  2077 => 138,  2074 => 137,  2071 => 136,  2068 => 135,  2065 => 134,  2061 => 133,  2058 => 132,  2052 => 130,  2044 => 129,  2025 => 128,  1966 => 154,  1946 => 128,  1927 => 127,  1860 => 124,  1841 => 123,  1782 => 155,  1768 => 127,  1765 => 126,  1745 => 123,  1726 => 122,  1664 => 112,  1660 => 111,  1648 => 109,  1629 => 108,  1568 => 116,  1565 => 115,  1545 => 108,  1526 => 107,  1467 => 379,  1458 => 377,  1453 => 376,  1446 => 375,  1436 => 373,  1431 => 360,  1425 => 357,  1422 => 356,  1419 => 355,  1416 => 354,  1409 => 353,  1399 => 350,  1382 => 343,  1375 => 342,  1370 => 338,  1364 => 335,  1361 => 334,  1359 => 2,  1357 => 334,  1354 => 333,  1347 => 332,  1337 => 330,  1332 => 345,  1330 => 342,  1325 => 339,  1323 => 332,  1320 => 331,  1318 => 330,  1314 => 328,  1307 => 327,  1301 => 346,  1299 => 327,  1296 => 326,  1293 => 325,  1286 => 324,  1280 => 361,  1278 => 353,  1274 => 351,  1272 => 350,  1268 => 348,  1266 => 324,  1263 => 323,  1256 => 322,  1248 => 316,  1241 => 315,  1236 => 311,  1221 => 300,  1214 => 299,  1208 => 312,  1206 => 299,  1203 => 298,  1196 => 297,  1191 => 263,  1185 => 262,  1177 => 260,  1174 => 259,  1168 => 258,  1158 => 256,  1155 => 255,  1149 => 254,  1137 => 252,  1134 => 251,  1117 => 249,  1112 => 248,  1109 => 247,  1107 => 246,  1102 => 245,  1099 => 244,  1097 => 243,  1092 => 242,  1089 => 241,  1084 => 240,  1077 => 239,  1070 => 288,  1064 => 285,  1059 => 284,  1056 => 283,  1053 => 282,  1050 => 281,  1047 => 280,  1045 => 279,  1036 => 276,  1034 => 2,  1029 => 276,  1025 => 275,  1020 => 273,  1015 => 270,  1009 => 267,  1006 => 266,  1004 => 265,  1001 => 264,  998 => 239,  991 => 238,  985 => 291,  983 => 238,  974 => 237,  971 => 236,  968 => 235,  965 => 234,  963 => 233,  960 => 232,  957 => 231,  950 => 230,  944 => 294,  941 => 293,  938 => 230,  936 => 229,  933 => 228,  926 => 227,  921 => 318,  919 => 315,  916 => 314,  914 => 297,  911 => 296,  908 => 227,  901 => 226,  892 => 363,  890 => 322,  885 => 319,  883 => 226,  878 => 225,  876 => 224,  873 => 223,  866 => 222,  858 => 215,  851 => 214,  843 => 205,  839 => 204,  832 => 203,  825 => 202,  819 => 208,  817 => 202,  814 => 201,  807 => 200,  801 => 210,  799 => 200,  796 => 199,  789 => 198,  784 => 217,  782 => 214,  778 => 212,  776 => 198,  773 => 197,  766 => 196,  758 => 170,  751 => 169,  744 => 168,  737 => 190,  734 => 189,  720 => 175,  716 => 173,  714 => 168,  707 => 164,  704 => 163,  697 => 162,  692 => 368,  690 => 222,  684 => 218,  682 => 196,  676 => 192,  674 => 162,  671 => 161,  664 => 160,  659 => 101,  656 => 100,  642 => 99,  637 => 97,  636 => 2,  634 => 97,  629 => 95,  628 => 2,  627 => 95,  624 => 94,  618 => 92,  615 => 91,  612 => 90,  595 => 89,  589 => 87,  586 => 86,  579 => 85,  571 => 71,  564 => 70,  557 => 369,  555 => 160,  551 => 158,  547 => 157,  544 => 156,  529 => 122,  526 => 121,  524 => 120,  521 => 119,  517 => 118,  502 => 107,  500 => 106,  497 => 105,  495 => 104,  492 => 103,  488 => 102,  485 => 85,  483 => 84,  480 => 83,  476 => 82,  470 => 80,  464 => 77,  461 => 76,  458 => 75,  456 => 74,  453 => 73,  450 => 70,  443 => 69,  435 => 66,  428 => 65,  420 => 63,  413 => 62,  403 => 54,  393 => 53,  383 => 52,  377 => 380,  375 => 375,  372 => 374,  370 => 373,  367 => 372,  365 => 69,  362 => 68,  359 => 65,  357 => 62,  352 => 60,  348 => 59,  344 => 58,  340 => 57,  336 => 56,  332 => 55,  328 => 54,  323 => 53,  320 => 52,  313 => 51,  308 => 48,  299 => 46,  294 => 45,  287 => 44,  280 => 41,  275 => 40,  268 => 39,  260 => 35,  253 => 34,  248 => 37,  246 => 34,  240 => 32,  233 => 31,  225 => 28,  218 => 27,  211 => 24,  206 => 23,  199 => 22,  191 => 19,  184 => 18,  173 => 15,  163 => 8,  156 => 7,  150 => 382,  148 => 51,  144 => 49,  142 => 44,  139 => 43,  137 => 39,  134 => 38,  132 => 31,  129 => 30,  127 => 27,  124 => 26,  122 => 22,  119 => 21,  117 => 18,  111 => 16,  106 => 15,  103 => 14,  101 => 7,  94 => 5,  90 => 3,  88 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_fbd4e4c64550d8d65ab33df0fdaa2772___7277531191 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 300
        return $this->loadTemplate(($context["__parent__"] ?? null), "@EasyAdmin/layout.html.twig", 300);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 301
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $_v10 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v10->preRender("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["class" => "user-details", "withoutDropdownToggleMarker" => true]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v10->startEmbedComponent("ea:ActionMenu:Button", Twig\Extension\CoreExtension::toArray(["class" => "user-details", "withoutDropdownToggleMarker" => true]), $context, "@EasyAdmin/layout.html.twig", 15502912091);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 15502912091);
            $this->loadTemplate("@EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 301, "15502912091")->display($embeddedContext, $embeddedBlocks);
            $_v10->finishEmbedComponent();
        }
        // line 307
        yield "                                        ";
        $_v11 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v11->preRender("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v11->startEmbedComponent("ea:ActionMenu:Overlay", Twig\Extension\CoreExtension::toArray([]), $context, "@EasyAdmin/layout.html.twig", 30369516121);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 30369516121);
            $this->loadTemplate("@EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 307, "30369516121")->display($embeddedContext, $embeddedBlocks);
            $_v11->finishEmbedComponent();
        }
        // line 310
        yield "                                    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  2534 => 310,  2519 => 307,  2499 => 301,  2480 => 300,  2413 => 186,  2394 => 185,  2335 => 184,  2329 => 182,  2323 => 180,  2315 => 179,  2296 => 176,  2237 => 188,  2222 => 185,  2202 => 176,  2183 => 175,  2124 => 153,  2119 => 151,  2115 => 150,  2111 => 149,  2106 => 147,  2103 => 146,  2097 => 144,  2094 => 143,  2092 => 142,  2089 => 141,  2080 => 139,  2077 => 138,  2074 => 137,  2071 => 136,  2068 => 135,  2065 => 134,  2061 => 133,  2058 => 132,  2052 => 130,  2044 => 129,  2025 => 128,  1966 => 154,  1946 => 128,  1927 => 127,  1860 => 124,  1841 => 123,  1782 => 155,  1768 => 127,  1765 => 126,  1745 => 123,  1726 => 122,  1664 => 112,  1660 => 111,  1648 => 109,  1629 => 108,  1568 => 116,  1565 => 115,  1545 => 108,  1526 => 107,  1467 => 379,  1458 => 377,  1453 => 376,  1446 => 375,  1436 => 373,  1431 => 360,  1425 => 357,  1422 => 356,  1419 => 355,  1416 => 354,  1409 => 353,  1399 => 350,  1382 => 343,  1375 => 342,  1370 => 338,  1364 => 335,  1361 => 334,  1359 => 2,  1357 => 334,  1354 => 333,  1347 => 332,  1337 => 330,  1332 => 345,  1330 => 342,  1325 => 339,  1323 => 332,  1320 => 331,  1318 => 330,  1314 => 328,  1307 => 327,  1301 => 346,  1299 => 327,  1296 => 326,  1293 => 325,  1286 => 324,  1280 => 361,  1278 => 353,  1274 => 351,  1272 => 350,  1268 => 348,  1266 => 324,  1263 => 323,  1256 => 322,  1248 => 316,  1241 => 315,  1236 => 311,  1221 => 300,  1214 => 299,  1208 => 312,  1206 => 299,  1203 => 298,  1196 => 297,  1191 => 263,  1185 => 262,  1177 => 260,  1174 => 259,  1168 => 258,  1158 => 256,  1155 => 255,  1149 => 254,  1137 => 252,  1134 => 251,  1117 => 249,  1112 => 248,  1109 => 247,  1107 => 246,  1102 => 245,  1099 => 244,  1097 => 243,  1092 => 242,  1089 => 241,  1084 => 240,  1077 => 239,  1070 => 288,  1064 => 285,  1059 => 284,  1056 => 283,  1053 => 282,  1050 => 281,  1047 => 280,  1045 => 279,  1036 => 276,  1034 => 2,  1029 => 276,  1025 => 275,  1020 => 273,  1015 => 270,  1009 => 267,  1006 => 266,  1004 => 265,  1001 => 264,  998 => 239,  991 => 238,  985 => 291,  983 => 238,  974 => 237,  971 => 236,  968 => 235,  965 => 234,  963 => 233,  960 => 232,  957 => 231,  950 => 230,  944 => 294,  941 => 293,  938 => 230,  936 => 229,  933 => 228,  926 => 227,  921 => 318,  919 => 315,  916 => 314,  914 => 297,  911 => 296,  908 => 227,  901 => 226,  892 => 363,  890 => 322,  885 => 319,  883 => 226,  878 => 225,  876 => 224,  873 => 223,  866 => 222,  858 => 215,  851 => 214,  843 => 205,  839 => 204,  832 => 203,  825 => 202,  819 => 208,  817 => 202,  814 => 201,  807 => 200,  801 => 210,  799 => 200,  796 => 199,  789 => 198,  784 => 217,  782 => 214,  778 => 212,  776 => 198,  773 => 197,  766 => 196,  758 => 170,  751 => 169,  744 => 168,  737 => 190,  734 => 189,  720 => 175,  716 => 173,  714 => 168,  707 => 164,  704 => 163,  697 => 162,  692 => 368,  690 => 222,  684 => 218,  682 => 196,  676 => 192,  674 => 162,  671 => 161,  664 => 160,  659 => 101,  656 => 100,  642 => 99,  637 => 97,  636 => 2,  634 => 97,  629 => 95,  628 => 2,  627 => 95,  624 => 94,  618 => 92,  615 => 91,  612 => 90,  595 => 89,  589 => 87,  586 => 86,  579 => 85,  571 => 71,  564 => 70,  557 => 369,  555 => 160,  551 => 158,  547 => 157,  544 => 156,  529 => 122,  526 => 121,  524 => 120,  521 => 119,  517 => 118,  502 => 107,  500 => 106,  497 => 105,  495 => 104,  492 => 103,  488 => 102,  485 => 85,  483 => 84,  480 => 83,  476 => 82,  470 => 80,  464 => 77,  461 => 76,  458 => 75,  456 => 74,  453 => 73,  450 => 70,  443 => 69,  435 => 66,  428 => 65,  420 => 63,  413 => 62,  403 => 54,  393 => 53,  383 => 52,  377 => 380,  375 => 375,  372 => 374,  370 => 373,  367 => 372,  365 => 69,  362 => 68,  359 => 65,  357 => 62,  352 => 60,  348 => 59,  344 => 58,  340 => 57,  336 => 56,  332 => 55,  328 => 54,  323 => 53,  320 => 52,  313 => 51,  308 => 48,  299 => 46,  294 => 45,  287 => 44,  280 => 41,  275 => 40,  268 => 39,  260 => 35,  253 => 34,  248 => 37,  246 => 34,  240 => 32,  233 => 31,  225 => 28,  218 => 27,  211 => 24,  206 => 23,  199 => 22,  191 => 19,  184 => 18,  173 => 15,  163 => 8,  156 => 7,  150 => 382,  148 => 51,  144 => 49,  142 => 44,  139 => 43,  137 => 39,  134 => 38,  132 => 31,  129 => 30,  127 => 27,  124 => 26,  122 => 22,  119 => 21,  117 => 18,  111 => 16,  106 => 15,  103 => 14,  101 => 7,  94 => 5,  90 => 3,  88 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_fbd4e4c64550d8d65ab33df0fdaa2772___15502912091 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 301
        return $this->loadTemplate(($context["__parent__"] ?? null), "@EasyAdmin/layout.html.twig", 301);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 302
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user_menu_avatar"] ?? null), "html", null, true);
        yield "
                                            ";
        // line 303
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 303), "isNameDisplayed", [], "any", false, false, false, 303)) {
            // line 304
            yield "                                                <span class=\"user-name\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 304), "name", [], "any", false, false, false, 304), "html", null, true);
            yield "</span>
                                            ";
        }
        // line 306
        yield "                                        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  2630 => 306,  2624 => 304,  2622 => 303,  2612 => 302,  2593 => 301,  2534 => 310,  2519 => 307,  2499 => 301,  2480 => 300,  2413 => 186,  2394 => 185,  2335 => 184,  2329 => 182,  2323 => 180,  2315 => 179,  2296 => 176,  2237 => 188,  2222 => 185,  2202 => 176,  2183 => 175,  2124 => 153,  2119 => 151,  2115 => 150,  2111 => 149,  2106 => 147,  2103 => 146,  2097 => 144,  2094 => 143,  2092 => 142,  2089 => 141,  2080 => 139,  2077 => 138,  2074 => 137,  2071 => 136,  2068 => 135,  2065 => 134,  2061 => 133,  2058 => 132,  2052 => 130,  2044 => 129,  2025 => 128,  1966 => 154,  1946 => 128,  1927 => 127,  1860 => 124,  1841 => 123,  1782 => 155,  1768 => 127,  1765 => 126,  1745 => 123,  1726 => 122,  1664 => 112,  1660 => 111,  1648 => 109,  1629 => 108,  1568 => 116,  1565 => 115,  1545 => 108,  1526 => 107,  1467 => 379,  1458 => 377,  1453 => 376,  1446 => 375,  1436 => 373,  1431 => 360,  1425 => 357,  1422 => 356,  1419 => 355,  1416 => 354,  1409 => 353,  1399 => 350,  1382 => 343,  1375 => 342,  1370 => 338,  1364 => 335,  1361 => 334,  1359 => 2,  1357 => 334,  1354 => 333,  1347 => 332,  1337 => 330,  1332 => 345,  1330 => 342,  1325 => 339,  1323 => 332,  1320 => 331,  1318 => 330,  1314 => 328,  1307 => 327,  1301 => 346,  1299 => 327,  1296 => 326,  1293 => 325,  1286 => 324,  1280 => 361,  1278 => 353,  1274 => 351,  1272 => 350,  1268 => 348,  1266 => 324,  1263 => 323,  1256 => 322,  1248 => 316,  1241 => 315,  1236 => 311,  1221 => 300,  1214 => 299,  1208 => 312,  1206 => 299,  1203 => 298,  1196 => 297,  1191 => 263,  1185 => 262,  1177 => 260,  1174 => 259,  1168 => 258,  1158 => 256,  1155 => 255,  1149 => 254,  1137 => 252,  1134 => 251,  1117 => 249,  1112 => 248,  1109 => 247,  1107 => 246,  1102 => 245,  1099 => 244,  1097 => 243,  1092 => 242,  1089 => 241,  1084 => 240,  1077 => 239,  1070 => 288,  1064 => 285,  1059 => 284,  1056 => 283,  1053 => 282,  1050 => 281,  1047 => 280,  1045 => 279,  1036 => 276,  1034 => 2,  1029 => 276,  1025 => 275,  1020 => 273,  1015 => 270,  1009 => 267,  1006 => 266,  1004 => 265,  1001 => 264,  998 => 239,  991 => 238,  985 => 291,  983 => 238,  974 => 237,  971 => 236,  968 => 235,  965 => 234,  963 => 233,  960 => 232,  957 => 231,  950 => 230,  944 => 294,  941 => 293,  938 => 230,  936 => 229,  933 => 228,  926 => 227,  921 => 318,  919 => 315,  916 => 314,  914 => 297,  911 => 296,  908 => 227,  901 => 226,  892 => 363,  890 => 322,  885 => 319,  883 => 226,  878 => 225,  876 => 224,  873 => 223,  866 => 222,  858 => 215,  851 => 214,  843 => 205,  839 => 204,  832 => 203,  825 => 202,  819 => 208,  817 => 202,  814 => 201,  807 => 200,  801 => 210,  799 => 200,  796 => 199,  789 => 198,  784 => 217,  782 => 214,  778 => 212,  776 => 198,  773 => 197,  766 => 196,  758 => 170,  751 => 169,  744 => 168,  737 => 190,  734 => 189,  720 => 175,  716 => 173,  714 => 168,  707 => 164,  704 => 163,  697 => 162,  692 => 368,  690 => 222,  684 => 218,  682 => 196,  676 => 192,  674 => 162,  671 => 161,  664 => 160,  659 => 101,  656 => 100,  642 => 99,  637 => 97,  636 => 2,  634 => 97,  629 => 95,  628 => 2,  627 => 95,  624 => 94,  618 => 92,  615 => 91,  612 => 90,  595 => 89,  589 => 87,  586 => 86,  579 => 85,  571 => 71,  564 => 70,  557 => 369,  555 => 160,  551 => 158,  547 => 157,  544 => 156,  529 => 122,  526 => 121,  524 => 120,  521 => 119,  517 => 118,  502 => 107,  500 => 106,  497 => 105,  495 => 104,  492 => 103,  488 => 102,  485 => 85,  483 => 84,  480 => 83,  476 => 82,  470 => 80,  464 => 77,  461 => 76,  458 => 75,  456 => 74,  453 => 73,  450 => 70,  443 => 69,  435 => 66,  428 => 65,  420 => 63,  413 => 62,  403 => 54,  393 => 53,  383 => 52,  377 => 380,  375 => 375,  372 => 374,  370 => 373,  367 => 372,  365 => 69,  362 => 68,  359 => 65,  357 => 62,  352 => 60,  348 => 59,  344 => 58,  340 => 57,  336 => 56,  332 => 55,  328 => 54,  323 => 53,  320 => 52,  313 => 51,  308 => 48,  299 => 46,  294 => 45,  287 => 44,  280 => 41,  275 => 40,  268 => 39,  260 => 35,  253 => 34,  248 => 37,  246 => 34,  240 => 32,  233 => 31,  225 => 28,  218 => 27,  211 => 24,  206 => 23,  199 => 22,  191 => 19,  184 => 18,  173 => 15,  163 => 8,  156 => 7,  150 => 382,  148 => 51,  144 => 49,  142 => 44,  139 => 43,  137 => 39,  134 => 38,  132 => 31,  129 => 30,  127 => 27,  124 => 26,  122 => 22,  119 => 21,  117 => 18,  111 => 16,  106 => 15,  103 => 14,  101 => 7,  94 => 5,  90 => 3,  88 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}


/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_fbd4e4c64550d8d65ab33df0fdaa2772___30369516121 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 307
        return $this->loadTemplate(($context["__parent__"] ?? null), "@EasyAdmin/layout.html.twig", 307);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 308
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user_menu_dropdown"] ?? null), "html", null, true);
        yield "
                                        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/layout.html.twig";
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
        return array (  2708 => 308,  2689 => 307,  2630 => 306,  2624 => 304,  2622 => 303,  2612 => 302,  2593 => 301,  2534 => 310,  2519 => 307,  2499 => 301,  2480 => 300,  2413 => 186,  2394 => 185,  2335 => 184,  2329 => 182,  2323 => 180,  2315 => 179,  2296 => 176,  2237 => 188,  2222 => 185,  2202 => 176,  2183 => 175,  2124 => 153,  2119 => 151,  2115 => 150,  2111 => 149,  2106 => 147,  2103 => 146,  2097 => 144,  2094 => 143,  2092 => 142,  2089 => 141,  2080 => 139,  2077 => 138,  2074 => 137,  2071 => 136,  2068 => 135,  2065 => 134,  2061 => 133,  2058 => 132,  2052 => 130,  2044 => 129,  2025 => 128,  1966 => 154,  1946 => 128,  1927 => 127,  1860 => 124,  1841 => 123,  1782 => 155,  1768 => 127,  1765 => 126,  1745 => 123,  1726 => 122,  1664 => 112,  1660 => 111,  1648 => 109,  1629 => 108,  1568 => 116,  1565 => 115,  1545 => 108,  1526 => 107,  1467 => 379,  1458 => 377,  1453 => 376,  1446 => 375,  1436 => 373,  1431 => 360,  1425 => 357,  1422 => 356,  1419 => 355,  1416 => 354,  1409 => 353,  1399 => 350,  1382 => 343,  1375 => 342,  1370 => 338,  1364 => 335,  1361 => 334,  1359 => 2,  1357 => 334,  1354 => 333,  1347 => 332,  1337 => 330,  1332 => 345,  1330 => 342,  1325 => 339,  1323 => 332,  1320 => 331,  1318 => 330,  1314 => 328,  1307 => 327,  1301 => 346,  1299 => 327,  1296 => 326,  1293 => 325,  1286 => 324,  1280 => 361,  1278 => 353,  1274 => 351,  1272 => 350,  1268 => 348,  1266 => 324,  1263 => 323,  1256 => 322,  1248 => 316,  1241 => 315,  1236 => 311,  1221 => 300,  1214 => 299,  1208 => 312,  1206 => 299,  1203 => 298,  1196 => 297,  1191 => 263,  1185 => 262,  1177 => 260,  1174 => 259,  1168 => 258,  1158 => 256,  1155 => 255,  1149 => 254,  1137 => 252,  1134 => 251,  1117 => 249,  1112 => 248,  1109 => 247,  1107 => 246,  1102 => 245,  1099 => 244,  1097 => 243,  1092 => 242,  1089 => 241,  1084 => 240,  1077 => 239,  1070 => 288,  1064 => 285,  1059 => 284,  1056 => 283,  1053 => 282,  1050 => 281,  1047 => 280,  1045 => 279,  1036 => 276,  1034 => 2,  1029 => 276,  1025 => 275,  1020 => 273,  1015 => 270,  1009 => 267,  1006 => 266,  1004 => 265,  1001 => 264,  998 => 239,  991 => 238,  985 => 291,  983 => 238,  974 => 237,  971 => 236,  968 => 235,  965 => 234,  963 => 233,  960 => 232,  957 => 231,  950 => 230,  944 => 294,  941 => 293,  938 => 230,  936 => 229,  933 => 228,  926 => 227,  921 => 318,  919 => 315,  916 => 314,  914 => 297,  911 => 296,  908 => 227,  901 => 226,  892 => 363,  890 => 322,  885 => 319,  883 => 226,  878 => 225,  876 => 224,  873 => 223,  866 => 222,  858 => 215,  851 => 214,  843 => 205,  839 => 204,  832 => 203,  825 => 202,  819 => 208,  817 => 202,  814 => 201,  807 => 200,  801 => 210,  799 => 200,  796 => 199,  789 => 198,  784 => 217,  782 => 214,  778 => 212,  776 => 198,  773 => 197,  766 => 196,  758 => 170,  751 => 169,  744 => 168,  737 => 190,  734 => 189,  720 => 175,  716 => 173,  714 => 168,  707 => 164,  704 => 163,  697 => 162,  692 => 368,  690 => 222,  684 => 218,  682 => 196,  676 => 192,  674 => 162,  671 => 161,  664 => 160,  659 => 101,  656 => 100,  642 => 99,  637 => 97,  636 => 2,  634 => 97,  629 => 95,  628 => 2,  627 => 95,  624 => 94,  618 => 92,  615 => 91,  612 => 90,  595 => 89,  589 => 87,  586 => 86,  579 => 85,  571 => 71,  564 => 70,  557 => 369,  555 => 160,  551 => 158,  547 => 157,  544 => 156,  529 => 122,  526 => 121,  524 => 120,  521 => 119,  517 => 118,  502 => 107,  500 => 106,  497 => 105,  495 => 104,  492 => 103,  488 => 102,  485 => 85,  483 => 84,  480 => 83,  476 => 82,  470 => 80,  464 => 77,  461 => 76,  458 => 75,  456 => 74,  453 => 73,  450 => 70,  443 => 69,  435 => 66,  428 => 65,  420 => 63,  413 => 62,  403 => 54,  393 => 53,  383 => 52,  377 => 380,  375 => 375,  372 => 374,  370 => 373,  367 => 372,  365 => 69,  362 => 68,  359 => 65,  357 => 62,  352 => 60,  348 => 59,  344 => 58,  340 => 57,  336 => 56,  332 => 55,  328 => 54,  323 => 53,  320 => 52,  313 => 51,  308 => 48,  299 => 46,  294 => 45,  287 => 44,  280 => 41,  275 => 40,  268 => 39,  260 => 35,  253 => 34,  248 => 37,  246 => 34,  240 => 32,  233 => 31,  225 => 28,  218 => 27,  211 => 24,  206 => 23,  199 => 22,  191 => 19,  184 => 18,  173 => 15,  163 => 8,  156 => 7,  150 => 382,  148 => 51,  144 => 49,  142 => 44,  139 => 43,  137 => 39,  134 => 38,  132 => 31,  129 => 30,  127 => 27,  124 => 26,  122 => 22,  119 => 21,  117 => 18,  111 => 16,  106 => 15,  103 => 14,  101 => 7,  94 => 5,  90 => 3,  88 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/var/www/html/vendor/easycorp/easyadmin-bundle/templates/layout.html.twig");
    }
}
