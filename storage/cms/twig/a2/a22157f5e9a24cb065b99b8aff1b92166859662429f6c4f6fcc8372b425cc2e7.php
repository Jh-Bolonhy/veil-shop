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

\t\t        <div class=\"col-sm-7 text-justify\">
\t\t\t        <p class=\"footer-header\"> <b>У Вас остались вопросы? - Задайте их нам!</b></p>
\t\t\t             
\t\t\t                 
\t\t\t\t\t\t\t<div id=\"divForAnyFlash1\">
\t\t\t\t\t\t\t\t";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["Orderform"] ?? null) . "::_flash")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"jumbotron\">

\t\t\t\t\t\t\t<form
\t\t\t\t\t\t\t\tdata-request=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["Orderform"] ?? null), "html", null, true);
        echo "::onAddOrder\"
\t\t\t\t\t\t\t  data-request-update=\"
\t\t\t\t\t\t\t       '";
        // line 34
        echo twig_escape_filter($this->env, ($context["Orderform"] ?? null), "html", null, true);
        echo "::_flash' : '#divForAnyFlash1'
\t\t\t\t\t\t\t    ,  '";
        // line 35
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
\t\t\t\t\t\t\t\t\t\t    placeholder=\"Задайте Ваш вопрос\"
\t\t\t\t\t\t\t\t\t    >";
        // line 50
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "commentary1"));
        echo "</textarea>
\t\t\t\t\t\t\t\t    </div>

\t\t\t\t\t\t\t\t\t\t";
        // line 53
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", array(0 => "commentary1"), "method")) {
            // line 54
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\"></div>
\t\t\t\t\t\t\t\t\t\t\t    <div class=\" col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t        <small class=\"error-message\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "commentary1"), "method"), "html", null, true);
            echo "</small>
\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 59
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
        // line 69
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "name1"));
        echo "\"
\t\t\t\t\t\t\t\t      />
\t\t\t\t\t\t\t\t    </div>

\t\t\t\t\t\t\t\t\t";
        // line 73
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", array(0 => "name1"), "method")) {
            // line 74
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\"></div>
\t\t\t\t\t\t\t\t\t    <div class=\" col-sm-10\">
\t\t\t\t\t\t\t\t\t        <small class=\"error-message\">";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "name1"), "method"), "html", null, true);
            echo "</small>
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 79
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
\t\t\t\t\t\t\t\t\t\tplaceholder=\"Введите удобный контактный телефон\"
\t\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 92
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "phone_test1"));
        echo "\"
\t\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 95
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", array(0 => "phone_test1"), "method")) {
            // line 96
            echo "\t\t\t\t\t\t\t\t\t\t          <div class=\"col-sm-2\"></div>
\t\t\t\t\t\t\t\t\t\t          <div class=\" col-sm-10\">
\t\t\t\t\t\t\t\t\t\t              <small class=\"error-message\">";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "phone_test1"), "method"), "html", null, true);
            echo "</small>
\t\t\t\t\t\t\t\t\t\t          </div>
\t\t\t\t\t\t\t\t\t\t      ";
        }
        // line 101
        echo "\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"from-footer\">
\t\t\t\t\t\t\t  <div class=\"form-group row\">
\t\t\t\t\t\t\t    <div class=\"col-sm-10\">
\t\t\t\t\t\t\t      <button type=\"submit\" class=\"btn btn-primary\" data-attach-loading>Отправляем!</button>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t  </div>



\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t\t";
        // line 113
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 114
        echo "\t\t\t\t\t\t\t\t\t<script src=\"http://oct-veil-shop-fin/plugins/leonidmuzyka/clients/assets/js/masking-input.js\" data-autoinit=\"true\"></script>
\t\t\t\t\t\t\t\t";
        // line 113
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 116
        echo "
\t\t\t\t\t\t\t\t";
        // line 117
        if (0) {
            // line 118
            echo "\t\t\t\t\t\t\t\t<div class=\"container\" id=\"info\">
\t\t\t\t\t\t\t    ";
            // line 119
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['for_dump'] = twig_get_attribute($this->env, $this->source, ($context["Orderform"] ?? null), "for_dump", array())            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["Orderform"] ?? null) . "::_dumper")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 120
            echo "\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t";
        }
        // line 122
        echo "\t\t\t\t\t\t\t</div>
\t\t        </div>
\t\t        <div class=\"col-sm-3\"></div>
\t        </div>
\t        <div class=\"row\">
\t\t        <p class=\"muted credit text-center\">&copy; 2013 - ";
        // line 127
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Khlimat Saidudinova &amp; Leonid Muzyka.</p>
\t        </div>
        </div>
    </div>
\t\t<div>";
        // line 131
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
        return array (  243 => 131,  236 => 127,  229 => 122,  225 => 120,  220 => 119,  217 => 118,  215 => 117,  212 => 116,  210 => 113,  207 => 114,  205 => 113,  191 => 101,  185 => 98,  181 => 96,  179 => 95,  173 => 92,  158 => 79,  152 => 76,  148 => 74,  146 => 73,  139 => 69,  127 => 59,  121 => 56,  117 => 54,  115 => 53,  109 => 50,  91 => 35,  87 => 34,  82 => 32,  76 => 28,  72 => 27,  52 => 14,  44 => 13,  36 => 12,  23 => 1,);
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

\t\t        <div class=\"col-sm-7 text-justify\">
\t\t\t        <p class=\"footer-header\"> <b>У Вас остались вопросы? - Задайте их нам!</b></p>
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
\t\t\t\t\t\t\t\t\t\t    placeholder=\"Задайте Ваш вопрос\"
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
\t\t\t\t\t\t\t\t\t\tplaceholder=\"Введите удобный контактный телефон\"
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
\t\t\t\t\t\t\t      <button type=\"submit\" class=\"btn btn-primary\" data-attach-loading>Отправляем!</button>
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
\t\t        <p class=\"muted credit text-center\">&copy; 2013 - {{ \"now\"|date(\"Y\") }} Khlimat Saidudinova &amp; Leonid Muzyka.</p>
\t        </div>
        </div>
    </div>
\t\t<div>{{ this.page.redirected }} </div>
</div>", "E:\\xampp\\htdocs\\oct-veil-shop-fin/themes/demo/partials/site/footer.htm", "");
    }
}
