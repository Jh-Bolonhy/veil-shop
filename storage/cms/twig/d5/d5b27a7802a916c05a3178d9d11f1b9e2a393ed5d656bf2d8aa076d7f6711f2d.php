<?php

/* E:\xampp\htdocs\oct-veil-shop-fin/themes/demo/partials/site/header.htm */
class __TwigTemplate_ddb60f9a96e26c997c30f1fe10e1f1e743756220187b81261366e00d223f4917 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar-pink navbar navbar-default navbar-fixed-top \" role=\"navigation\" >
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" id=\"toggle-navigation-btn\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("magazin-fat-u-halimat");
        echo "\">HaliFata.RU</a>
        </div>
        <div id=\"menu-to-collapse\" class=\"collapse navbar-collapse navbar-main-collapse pull-right phone-menu\">
            <ul class=\"nav navbar-nav\">

              <li class=\"";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "magazin-fat-u-halimat")) {
            echo "active-page";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("magazin-fat-u-halimat");
        echo "\">Виды фат </a></li>
\t            <li class=\"dot-razdelitel\"></li>
\t            <li class=\"";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "ajax")) {
            echo "active-page";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ajax");
        echo "\">Как выбрать</a></li>
\t            <li class=\"dot-razdelitel\"></li>
              <li class=\"";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "plugins")) {
            echo "active-page";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("plugins");
        echo "\">О нас</a></li>
\t            <li class=\"separator v-razdelitel\"></li>
\t            <li class=\"nav-item\"><a class=\"navbar-link\"><span class=\"rounded-span\"> &nbsp&#10084;&nbsp</span> <span class=\"rounded-span\"> &nbsp 3 &nbsp </span></a></li>
\t            <li class=\"separator v-razdelitel\"></li>
\t            <li class=\"nav-item ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "testovaya-forma")) {
            echo "active-page";
        }
        echo "\"><a class=\"navbar-link\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("testovaya-forma");
        echo "\">Получить консультацию</a></li>

            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\oct-veil-shop-fin/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 24,  61 => 20,  52 => 18,  43 => 16,  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar-pink navbar navbar-default navbar-fixed-top \" role=\"navigation\" >
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" id=\"toggle-navigation-btn\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ 'magazin-fat-u-halimat'|page }}\">HaliFata.RU</a>
        </div>
        <div id=\"menu-to-collapse\" class=\"collapse navbar-collapse navbar-main-collapse pull-right phone-menu\">
            <ul class=\"nav navbar-nav\">

              <li class=\"{% if this.page.id == 'magazin-fat-u-halimat' %}active-page{% endif %}\"><a href=\"{{ 'magazin-fat-u-halimat'|page }}\">Виды фат </a></li>
\t            <li class=\"dot-razdelitel\"></li>
\t            <li class=\"{% if this.page.id == 'ajax' %}active-page{% endif %}\"><a href=\"{{ 'ajax'|page }}\">Как выбрать</a></li>
\t            <li class=\"dot-razdelitel\"></li>
              <li class=\"{% if this.page.id == 'plugins' %}active-page{% endif %}\"><a href=\"{{ 'plugins'|page }}\">О нас</a></li>
\t            <li class=\"separator v-razdelitel\"></li>
\t            <li class=\"nav-item\"><a class=\"navbar-link\"><span class=\"rounded-span\"> &nbsp&#10084;&nbsp</span> <span class=\"rounded-span\"> &nbsp 3 &nbsp </span></a></li>
\t            <li class=\"separator v-razdelitel\"></li>
\t            <li class=\"nav-item {% if this.page.id == 'testovaya-forma' %}active-page{% endif %}\"><a class=\"navbar-link\" href=\"{{ 'testovaya-forma'|page }}\">Получить консультацию</a></li>

            </ul>
        </div>
    </div>
</nav>", "E:\\xampp\\htdocs\\oct-veil-shop-fin/themes/demo/partials/site/header.htm", "");
    }
}
