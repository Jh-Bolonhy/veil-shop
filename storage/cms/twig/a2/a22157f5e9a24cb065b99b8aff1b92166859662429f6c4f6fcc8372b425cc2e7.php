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
\t\t        <div class=\"col-sm-2\"></div>

\t\t        <div class=\"col-sm-3\">

\t\t\t\t\t\t\t<h4 class=\"footer-header\"> Карта сайта: </h4>
              <ul class=\"bottom-menu\">
                  <li class=\"bordered-right ";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Виды свадебных фат</a></li>
                  <li class=\"bordered-right ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "ajax")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ajax");
        echo "\">Как выбрать фату?</a></li>
                  <li class=\"bordered-right ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "plugins")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("plugins");
        echo "\">О нас</a></li>
\t                <li class=\"bordered-right ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "testovaya-forma")) {
            echo "active";
        }
        echo "\">
\t      \t\t            <a href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("testovaya-forma");
        echo "\">
\t      \t\t\t            <strong>Получите консультацию</strong>
\t      \t\t            </a>
\t      \t            </li>
\t                <li class=\"bordered-right\">&nbsp</li>
\t                <li class=\"bordered-right\">&nbsp</li>
\t                <li class=\"bordered-right\">&nbsp</li>
\t                <li class=\"bordered-right\">&nbsp</li>
              </ul>
\t\t\t        ";
        // line 25
        if (0) {
            // line 26
            echo "\t\t\t        <h4 class=\"footer-header\"> Мы в социальных сетях </h4>
\t\t\t        <p> Иконки социальных сетей </p>
\t\t\t\t\t\t\t";
        }
        // line 29
        echo "            </div>

\t\t        <div class=\"col-sm-7 text-justify bordered-left\">
\t\t\t        <h4 class=\"footer-header footer-voprosi\"> У Вас остались вопросы? - Задайте их нам! </h4>
\t\t\t             
\t\t\t                 
\t\t\t\t\t\t\t<div id=\"divForAnyFlash1\">
\t\t\t\t\t\t\t\t";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["Orderform"] ?? null) . "::_flash")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"jumbotron\">

\t\t\t\t\t\t\t<form
\t\t\t\t\t\t\t\tdata-request=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["Orderform"] ?? null), "html", null, true);
        echo "::onAddOrder\"
\t\t\t\t\t\t\t  data-request-update=\"
\t\t\t\t\t\t\t       '";
        // line 43
        echo twig_escape_filter($this->env, ($context["Orderform"] ?? null), "html", null, true);
        echo "::_flash' : '#divForAnyFlash1'
\t\t\t\t\t\t\t    ,  '";
        // line 44
        echo twig_escape_filter($this->env, ($context["Orderform"] ?? null), "html", null, true);
        echo "::_dumper' : '#info'
\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\taction=\"#contact-form1\"
\t\t\t\t\t\t\t\tid=\"contact-form1\"
\t\t\t\t\t\t\t>

\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t    <label for=\"inputComment1\" class=\"col-sm-2 col-form-label footer-form-label\">Комментарий</label>
\t\t\t\t\t\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t    <textarea
\t\t\t\t\t\t\t\t\t\t    name=\"commentary1\"
\t\t\t\t\t\t\t\t\t\t    class=\"form-control size-large\"
\t\t\t\t\t\t\t\t\t\t    id=\"inputComment1\"
\t\t\t\t\t\t\t\t\t\t    rows=\"2\"
\t\t\t\t\t\t\t\t\t\t    placeholder=\"Ваш вопрос\"
\t\t\t\t\t\t\t\t\t    >";
        // line 59
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "commentary1"));
        echo "</textarea>
\t\t\t\t\t\t\t\t    </div>

\t\t\t\t\t\t\t\t\t\t";
        // line 62
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", array(0 => "commentary1"), "method")) {
            // line 63
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\"></div>
\t\t\t\t\t\t\t\t\t\t\t    <div class=\" col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t        <small class=\"error-message\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "commentary1"), "method"), "html", null, true);
            echo "</small>
\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t    <label for=\"inputName1\" class=\"col-sm-2 col-form-label footer-form-label\">Имя</label>
\t\t\t\t\t\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t      <input
\t\t\t\t\t\t\t\t\t      name=\"name1\"
\t\t\t\t\t\t\t\t\t      type=\"name\"
\t\t\t\t\t\t\t\t\t      class=\"form-control\"
\t\t\t\t\t\t\t\t\t      id=\"inputName1\"
\t\t\t\t\t\t\t\t\t      placeholder=\"Как к Вам обращаться?\"
\t\t\t\t\t\t\t\t\t      value=\"";
        // line 78
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "name1"));
        echo "\"
\t\t\t\t\t\t\t\t      />
\t\t\t\t\t\t\t\t    </div>

\t\t\t\t\t\t\t\t\t";
        // line 82
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", array(0 => "name1"), "method")) {
            // line 83
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\"></div>
\t\t\t\t\t\t\t\t\t    <div class=\" col-sm-10\">
\t\t\t\t\t\t\t\t\t        <small class=\"error-message\">";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "name1"), "method"), "html", null, true);
            echo "</small>
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 88
        echo "\t\t\t\t\t\t\t  </div>

\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t<label for=\"telephone1\" class=\"col-sm-2 col-form-label footer-form-label\">Телефон</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input id=\"telephone1\"
\t\t\t\t\t\t\t\t\t\ttype=\"tel\"
\t\t\t\t\t\t\t\t\t\tname=\"phone_test1\"
\t\t\t\t\t\t\t\t\t\tmask-pattern=\"(XXX) XXX XXXX\"
\t\t\t\t\t\t\t\t\t\tpattern=\"\\(\\d{3}\\) \\d{3}\\ \\d{4}\"
\t\t\t\t\t\t\t\t\t\tclass=\"form-control masked\"
\t\t\t\t\t\t\t\t\t\ttitle=\"10-digit number\"
\t\t\t\t\t\t\t\t\t\tplaceholder=\"Удобный контактный телефон\"
\t\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 101
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "phone_test1"));
        echo "\"
\t\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 104
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", array(0 => "phone_test1"), "method")) {
            // line 105
            echo "\t\t\t\t\t\t\t\t\t\t          <div class=\"col-sm-2\"></div>
\t\t\t\t\t\t\t\t\t\t          <div class=\" col-sm-10\">
\t\t\t\t\t\t\t\t\t\t              <small class=\"error-message\">";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "phone_test1"), "method"), "html", null, true);
            echo "</small>
\t\t\t\t\t\t\t\t\t\t          </div>
\t\t\t\t\t\t\t\t\t\t      ";
        }
        // line 110
        echo "\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"from-footer\">
\t\t\t\t\t\t\t  <div class=\"form-group row\">
\t\t\t\t\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t\t\t\t      <button type=\"submit\" class=\"btn btn-primary btn-footer\" data-attach-loading>Отправить!</button>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t  </div>



\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t";
        // line 122
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 123
        echo "\t\t\t\t\t\t\t\t\t<script src=\"http://oct-veil-shop-fin/plugins/leonidmuzyka/clients/assets/js/masking-input.js\" data-autoinit=\"true\"></script>
\t\t\t\t\t\t\t\t";
        // line 122
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 125
        echo "
\t\t\t\t\t\t\t\t";
        // line 126
        if (0) {
            // line 127
            echo "\t\t\t\t\t\t\t\t<div class=\"container\" id=\"info\">
\t\t\t\t\t\t\t    ";
            // line 128
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['for_dump'] = twig_get_attribute($this->env, $this->source, ($context["Orderform"] ?? null), "for_dump", array())            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["Orderform"] ?? null) . "::_dumper")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 129
            echo "\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t";
        }
        // line 131
        echo "\t\t\t\t\t\t\t</div>
\t\t        </div>
\t\t        <div class=\"col-sm-3\"></div>
\t        </div>
\t        <div class=\"row\">
\t\t        <p class=\"muted credit text-center\">&copy; 2013 - ";
        // line 136
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Khalimat Saidudinova &amp; Leonid Muzyka.</p>
\t        </div>
        </div>
    </div>
\t\t<div>";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "redirected", array()), "html", null, true);
        echo " </div>
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
        return array (  265 => 140,  258 => 136,  251 => 131,  247 => 129,  242 => 128,  239 => 127,  237 => 126,  234 => 125,  232 => 122,  229 => 123,  227 => 122,  213 => 110,  207 => 107,  203 => 105,  201 => 104,  195 => 101,  180 => 88,  174 => 85,  170 => 83,  168 => 82,  161 => 78,  149 => 68,  143 => 65,  139 => 63,  137 => 62,  131 => 59,  113 => 44,  109 => 43,  104 => 41,  98 => 37,  94 => 36,  85 => 29,  80 => 26,  78 => 25,  66 => 16,  60 => 15,  52 => 14,  44 => 13,  36 => 12,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"footer\">
    <div class=\"black\">
        <div class=\"container\">
\t        <hr>
\t        <div class=\"row\">
\t\t        <div class=\"col-sm-2\"></div>

\t\t        <div class=\"col-sm-3\">

\t\t\t\t\t\t\t<h4 class=\"footer-header\"> Карта сайта: </h4>
              <ul class=\"bottom-menu\">
                  <li class=\"bordered-right {% if this.page.id == 'home' %}active{% endif %}\"><a href=\"{{ 'home'|page }}\">Виды свадебных фат</a></li>
                  <li class=\"bordered-right {% if this.page.id == 'ajax' %}active{% endif %}\"><a href=\"{{ 'ajax'|page }}\">Как выбрать фату?</a></li>
                  <li class=\"bordered-right {% if this.page.id == 'plugins' %}active{% endif %}\"><a href=\"{{ 'plugins'|page }}\">О нас</a></li>
\t                <li class=\"bordered-right {% if this.page.id == 'testovaya-forma' %}active{% endif %}\">
\t      \t\t            <a href=\"{{ 'testovaya-forma'|page }}\">
\t      \t\t\t            <strong>Получите консультацию</strong>
\t      \t\t            </a>
\t      \t            </li>
\t                <li class=\"bordered-right\">&nbsp</li>
\t                <li class=\"bordered-right\">&nbsp</li>
\t                <li class=\"bordered-right\">&nbsp</li>
\t                <li class=\"bordered-right\">&nbsp</li>
              </ul>
\t\t\t        {% if 0 %}
\t\t\t        <h4 class=\"footer-header\"> Мы в социальных сетях </h4>
\t\t\t        <p> Иконки социальных сетей </p>
\t\t\t\t\t\t\t{% endif %}
            </div>

\t\t        <div class=\"col-sm-7 text-justify bordered-left\">
\t\t\t        <h4 class=\"footer-header footer-voprosi\"> У Вас остались вопросы? - Задайте их нам! </h4>
\t\t\t             
\t\t\t                 
\t\t\t\t\t\t\t<div id=\"divForAnyFlash1\">
\t\t\t\t\t\t\t\t{% partial Orderform ~ '::_flash' %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"jumbotron\">

\t\t\t\t\t\t\t<form
\t\t\t\t\t\t\t\tdata-request=\"{{ Orderform }}::onAddOrder\"
\t\t\t\t\t\t\t  data-request-update=\"
\t\t\t\t\t\t\t       '{{ Orderform }}::_flash' : '#divForAnyFlash1'
\t\t\t\t\t\t\t    ,  '{{ Orderform }}::_dumper' : '#info'
\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\taction=\"#contact-form1\"
\t\t\t\t\t\t\t\tid=\"contact-form1\"
\t\t\t\t\t\t\t>

\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t    <label for=\"inputComment1\" class=\"col-sm-2 col-form-label footer-form-label\">Комментарий</label>
\t\t\t\t\t\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t    <textarea
\t\t\t\t\t\t\t\t\t\t    name=\"commentary1\"
\t\t\t\t\t\t\t\t\t\t    class=\"form-control size-large\"
\t\t\t\t\t\t\t\t\t\t    id=\"inputComment1\"
\t\t\t\t\t\t\t\t\t\t    rows=\"2\"
\t\t\t\t\t\t\t\t\t\t    placeholder=\"Ваш вопрос\"
\t\t\t\t\t\t\t\t\t    >{{ form_value('commentary1') }}</textarea>
\t\t\t\t\t\t\t\t    </div>

\t\t\t\t\t\t\t\t\t\t{% if (errors.has('commentary1')) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\"></div>
\t\t\t\t\t\t\t\t\t\t\t    <div class=\" col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t        <small class=\"error-message\">{{ errors.first('commentary1') }}</small>
\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t    <label for=\"inputName1\" class=\"col-sm-2 col-form-label footer-form-label\">Имя</label>
\t\t\t\t\t\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t      <input
\t\t\t\t\t\t\t\t\t      name=\"name1\"
\t\t\t\t\t\t\t\t\t      type=\"name\"
\t\t\t\t\t\t\t\t\t      class=\"form-control\"
\t\t\t\t\t\t\t\t\t      id=\"inputName1\"
\t\t\t\t\t\t\t\t\t      placeholder=\"Как к Вам обращаться?\"
\t\t\t\t\t\t\t\t\t      value=\"{{ form_value('name1') }}\"
\t\t\t\t\t\t\t\t      />
\t\t\t\t\t\t\t\t    </div>

\t\t\t\t\t\t\t\t\t{% if (errors.has('name1')) %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\"></div>
\t\t\t\t\t\t\t\t\t    <div class=\" col-sm-10\">
\t\t\t\t\t\t\t\t\t        <small class=\"error-message\">{{ errors.first('name1') }}</small>
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t  </div>

\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t<label for=\"telephone1\" class=\"col-sm-2 col-form-label footer-form-label\">Телефон</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input id=\"telephone1\"
\t\t\t\t\t\t\t\t\t\ttype=\"tel\"
\t\t\t\t\t\t\t\t\t\tname=\"phone_test1\"
\t\t\t\t\t\t\t\t\t\tmask-pattern=\"(XXX) XXX XXXX\"
\t\t\t\t\t\t\t\t\t\tpattern=\"\\(\\d{3}\\) \\d{3}\\ \\d{4}\"
\t\t\t\t\t\t\t\t\t\tclass=\"form-control masked\"
\t\t\t\t\t\t\t\t\t\ttitle=\"10-digit number\"
\t\t\t\t\t\t\t\t\t\tplaceholder=\"Удобный контактный телефон\"
\t\t\t\t\t\t\t\t\t\tvalue=\"{{ form_value('phone_test1') }}\"
\t\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% if (errors.has('phone_test1')) %}
\t\t\t\t\t\t\t\t\t\t          <div class=\"col-sm-2\"></div>
\t\t\t\t\t\t\t\t\t\t          <div class=\" col-sm-10\">
\t\t\t\t\t\t\t\t\t\t              <small class=\"error-message\">{{ errors.first('phone_test1') }}</small>
\t\t\t\t\t\t\t\t\t\t          </div>
\t\t\t\t\t\t\t\t\t\t      {% endif %}
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"from-footer\">
\t\t\t\t\t\t\t  <div class=\"form-group row\">
\t\t\t\t\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t\t\t\t      <button type=\"submit\" class=\"btn btn-primary btn-footer\" data-attach-loading>Отправить!</button>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t  </div>



\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t{% put scripts %}
\t\t\t\t\t\t\t\t\t<script src=\"http://oct-veil-shop-fin/plugins/leonidmuzyka/clients/assets/js/masking-input.js\" data-autoinit=\"true\"></script>
\t\t\t\t\t\t\t\t{% endput %}

\t\t\t\t\t\t\t\t{% if 0 %}
\t\t\t\t\t\t\t\t<div class=\"container\" id=\"info\">
\t\t\t\t\t\t\t    {% partial Orderform ~ '::_dumper' for_dump=Orderform.for_dump %}
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t        </div>
\t\t        <div class=\"col-sm-3\"></div>
\t        </div>
\t        <div class=\"row\">
\t\t        <p class=\"muted credit text-center\">&copy; 2013 - {{ \"now\"|date(\"Y\") }} Khalimat Saidudinova &amp; Leonid Muzyka.</p>
\t        </div>
        </div>
    </div>
\t\t<div>{{ this.page.redirected }} </div>
</div>", "E:\\xampp\\htdocs\\oct-veil-shop-fin/themes/demo/partials/site/footer.htm", "");
    }
}
