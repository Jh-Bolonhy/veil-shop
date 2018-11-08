<?php

/* E:\xampp\htdocs\oct-veil-shop-fin/themes/demo/partials/site/footer.htm */
class __TwigTemplate_68ebc8898c3a9e752bbcfbe5b1b09966d046688ab5e5fa3769f10c100167bee8 extends Twig_Template
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
        echo "<div id=\"footer\">
    <div class=\"black\">
        <div class=\"container\">
\t        <hr>
\t        <div class=\"row\">
\t\t        <div class=\"col-sm-3\"></div>

\t\t        <div class=\"col-sm-3\">

\t\t\t\t\t\t\t<p class=\"footer-header\"> <b>Карта сайта: </b></p>
              <ul class=\"bottom-menu\">
                  <li class=\"";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Виды свадебных фат</a></li>
                  <li class=\"";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "ajax")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ajax");
        echo "\">Как выбрать фату?</a></li>
                  <li class=\"";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "plugins")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("plugins");
        echo "\">О нас</a></li>
\t                <li class=\"separator\"><hr></li>
              </ul>
\t\t\t        <p class=\"footer-header\"> <b> Мы в социальных сетях </b></p>
\t\t\t        <p> Иконки социальных сетей </p>

            </div>
\t\t        <div class=\"col-sm-5 text-justify\">
\t\t\t        <p class=\"footer-header\"> <b>У Вас остались вопросы? - Задайте их нам!</b></p>
\t\t\t\t\t\t\t<form action=\"\">
\t\t\t\t\t\t\t\t<label> Введите Ваш вопрос: </label> <br>
\t\t\t\t\t\t\t\t<input type=\"text\"/>  <br>
\t\t\t\t\t\t\t\t<label> Как к Вам обращаться? </label> <br>
\t\t\t\t\t\t\t\t<input type=\"text\"/>
<br>
\t\t\t\t\t\t\t\t<button type=\"submit\"> Отпрвить вопрос </button>
\t\t\t\t\t\t\t</form>
\t\t        </div>
\t\t        <div class=\"col-sm-3\"></div>
\t        </div>
\t        <div class=\"row\">
\t\t        <p class=\"muted credit text-center\">&copy; 2013 - ";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Khlimat Saidudinova &amp; Leonid Muzyka.</p>
\t        </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\oct-veil-shop-fin/themes/demo/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 35,  52 => 14,  44 => 13,  36 => 12,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"footer\">
    <div class=\"black\">
        <div class=\"container\">
\t        <hr>
\t        <div class=\"row\">
\t\t        <div class=\"col-sm-3\"></div>

\t\t        <div class=\"col-sm-3\">

\t\t\t\t\t\t\t<p class=\"footer-header\"> <b>Карта сайта: </b></p>
              <ul class=\"bottom-menu\">
                  <li class=\"{% if this.page.id == 'home' %}active{% endif %}\"><a href=\"{{ 'home'|page }}\">Виды свадебных фат</a></li>
                  <li class=\"{% if this.page.id == 'ajax' %}active{% endif %}\"><a href=\"{{ 'ajax'|page }}\">Как выбрать фату?</a></li>
                  <li class=\"{% if this.page.id == 'plugins' %}active{% endif %}\"><a href=\"{{ 'plugins'|page }}\">О нас</a></li>
\t                <li class=\"separator\"><hr></li>
              </ul>
\t\t\t        <p class=\"footer-header\"> <b> Мы в социальных сетях </b></p>
\t\t\t        <p> Иконки социальных сетей </p>

            </div>
\t\t        <div class=\"col-sm-5 text-justify\">
\t\t\t        <p class=\"footer-header\"> <b>У Вас остались вопросы? - Задайте их нам!</b></p>
\t\t\t\t\t\t\t<form action=\"\">
\t\t\t\t\t\t\t\t<label> Введите Ваш вопрос: </label> <br>
\t\t\t\t\t\t\t\t<input type=\"text\"/>  <br>
\t\t\t\t\t\t\t\t<label> Как к Вам обращаться? </label> <br>
\t\t\t\t\t\t\t\t<input type=\"text\"/>
<br>
\t\t\t\t\t\t\t\t<button type=\"submit\"> Отпрвить вопрос </button>
\t\t\t\t\t\t\t</form>
\t\t        </div>
\t\t        <div class=\"col-sm-3\"></div>
\t        </div>
\t        <div class=\"row\">
\t\t        <p class=\"muted credit text-center\">&copy; 2013 - {{ \"now\"|date(\"Y\") }} Khlimat Saidudinova &amp; Leonid Muzyka.</p>
\t        </div>
        </div>
    </div>
</div>", "E:\\xampp\\htdocs\\oct-veil-shop-fin/themes/demo/partials/site/footer.htm", "");
    }
}
