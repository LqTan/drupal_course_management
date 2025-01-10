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

/* modules/custom/course_register/templates/node--receipt--pdf.html.twig */
class __TwigTemplate_a33074c2ecd3bf13844cc75f9c3fe4e6 extends Template
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
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\">
  <style>
    @font-face {
      font-family: 'DejaVu Sans';
      src: url('";
        // line 9
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/fonts/DejaVuSans.ttf') format('truetype');
      font-weight: normal;
      font-style: normal;
    }
    body {
      font-family: 'DejaVu Sans', sans-serif;
      font-size: 11pt;
      line-height: 1.3;
      color: #000;
      margin: 0;
      padding: 20px;
    }
    .receipt-container {
      width: 100%;
      font-family: 'DejaVu Sans', sans-serif;
    }
    /* Header styles */
    .header-table {
      margin-bottom: 20px;
      border-collapse: collapse;
    }
    .main-title {
      font-size: 16pt;
      font-weight: bold;
      margin: 0 0 10px 0;
      text-align: center;
    }
    .receipt-number {
      font-size: 12pt;
      margin: 5px 0;
      text-align: center;
    }
    .date {
      margin: 5px 0;
      text-align: center;
    }
    .sub-title {
      font-size: 12pt;
      margin: 5px 0;
      text-align: center;
    }
    .copy-note, .date {
      margin: 5px 0;
      text-align: center;
    }
    .receipt-info p {
      margin: 5px 0;
      text-align: left;
    }
    /* Info section styles */
    .info-section {
      margin: 10px 0;
    }
    .info-section p {
      margin: 5px 0;
    }
    /* Payment table styles */
    .payment-table {
      border-collapse: collapse;
      margin: 20px 0;
      width: 100%;
    }
    .payment-table th,
    .payment-table td {
      border: 1px solid #000;
      padding: 5px;
    }
    .table-header th {
      font-weight: bold;
      text-align: center;
    }
    /* Signature section styles */
    .signature-table {
      margin-top: 30px;
      border-collapse: collapse;
    }
    .sign-title {
      font-weight: bold;
      margin: 0;
    }
    .sign-note {
      font-style: italic;
      font-size: 10pt;
      margin: 5px 0;
    }
  </style>
</head>
<body>
<div class=\"receipt-container\">
  ";
        // line 99
        yield "  <table class=\"header-table\" width=\"100%\">
    <tr>
      <td style=\"text-align: center;\">
        <h1 class=\"main-title\">BIÊN LAI THANH TOÁN</h1>
        <p class=\"receipt-number\">Số: ";
        // line 103
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_receipt_number", [], "any", false, false, true, 103), "value", [], "any", false, false, true, 103), "html", null, true);
        yield "</p>
        <p class=\"date\">Ngày ";
        // line 104
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_receipt_date", [], "any", false, false, true, 104), "value", [], "any", false, false, true, 104), "d"), "html", null, true);
        yield "
          tháng ";
        // line 105
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_receipt_date", [], "any", false, false, true, 105), "value", [], "any", false, false, true, 105), "m"), "html", null, true);
        yield "
          năm ";
        // line 106
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_receipt_date", [], "any", false, false, true, 106), "value", [], "any", false, false, true, 106), "Y"), "html", null, true);
        yield "</p>
      </td>
    </tr>
  </table>

  ";
        // line 112
        yield "  <div class=\"info-section\">
    <p>Đơn vị thu tiền: ABC EDUCATION CENTER</p>
    <p>Địa chỉ: 123 ABC Street, District 1, HCMC</p>
    <p>MST: 0123456789</p>
    <p>Điện thoại: 1900 1234</p>
  </div>

  ";
        // line 120
        yield "  ";
        $context["student"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_receipt_student", [], "any", false, false, true, 120), "entity", [], "any", false, false, true, 120);
        // line 121
        yield "  <div class=\"info-section\">
    <p>Họ tên người nộp tiền: ";
        // line 122
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["student"] ?? null), "field_fullname", [], "any", false, false, true, 122), "value", [], "any", false, false, true, 122), "html", null, true);
        yield "</p>
    <p>Địa chỉ: ";
        // line 123
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["student"] ?? null), "field_address", [], "any", false, false, true, 123), "value", [], "any", false, false, true, 123), "html", null, true);
        yield "</p>
  </div>

  ";
        // line 127
        yield "  <table class=\"payment-table\">
    <tr class=\"table-header\">
      <th width=\"8%\">STT</th>
      <th width=\"40%\">Nội dung thu</th>
      <th width=\"12%\">ĐVT</th>
      <th width=\"12%\">Số lượng</th>
      <th width=\"14%\">Đơn giá</th>
      <th width=\"14%\">Thành tiền</th>
    </tr>

    ";
        // line 137
        $context["total_classes"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_receipt_class", [], "any", false, false, true, 137));
        // line 138
        yield "    ";
        $context["amount_per_class"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_receipt_amount", [], "any", false, false, true, 138), "value", [], "any", false, false, true, 138) / ($context["total_classes"] ?? null));
        // line 139
        yield "
    ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_receipt_class", [], "any", false, false, true, 140));
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
        foreach ($context['_seq'] as $context["_key"] => $context["class_item"]) {
            // line 141
            yield "      ";
            $context["class"] = CoreExtension::getAttribute($this->env, $this->source, $context["class_item"], "entity", [], "any", false, false, true, 141);
            // line 142
            yield "      ";
            $context["course"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["class"] ?? null), "field_class_course_reference", [], "any", false, false, true, 142), "entity", [], "any", false, false, true, 142);
            // line 143
            yield "      <tr>
        <td align=\"center\">";
            // line 144
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 144), "html", null, true);
            yield "</td>
        <td>
          ";
            // line 146
            if (($context["course"] ?? null)) {
                // line 147
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["course"] ?? null), "label", [], "any", false, false, true, 147), "html", null, true);
                yield " (";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["class"] ?? null), "label", [], "any", false, false, true, 147), "html", null, true);
                yield ")
          ";
            } else {
                // line 149
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["class"] ?? null), "label", [], "any", false, false, true, 149), "html", null, true);
                yield "
          ";
            }
            // line 151
            yield "        </td>
        <td align=\"center\">Khóa</td>
        <td align=\"center\">1</td>
        <td align=\"right\">";
            // line 154
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["amount_per_class"] ?? null), 0, ",", "."), "html", null, true);
            yield "</td>
        <td align=\"right\">";
            // line 155
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["amount_per_class"] ?? null), 0, ",", "."), "html", null, true);
            yield "</td>
      </tr>
    ";
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
        unset($context['_seq'], $context['_key'], $context['class_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        yield "  </table>

  ";
        // line 161
        yield "  <div class=\"total-section\">
    <p>Tổng
      tiền: ";
        // line 163
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_receipt_amount", [], "any", false, false, true, 163), "value", [], "any", false, false, true, 163), 0, ",", "."), "html", null, true);
        yield "</p>
    <p>Số tiền bằng chữ: ";
        // line 164
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\course_register\TwigExtension\NumberToWords']->numberToWords(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_receipt_amount", [], "any", false, false, true, 164), "value", [], "any", false, false, true, 164)), "html", null, true);
        yield "</p>
  </div>

  ";
        // line 168
        yield "  <table class=\"signature-table\" width=\"100%\">
    <tr>
      <td width=\"50%\" align=\"center\">
        <p class=\"sign-title\">Người nộp tiền</p>
        <p class=\"sign-note\">(Ký, ghi rõ họ tên)</p>
        <br><br><br>
        <p>";
        // line 174
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["student"] ?? null), "field_fullname", [], "any", false, false, true, 174), "value", [], "any", false, false, true, 174), "html", null, true);
        yield "</p>
      </td>
      <td width=\"50%\" align=\"center\">
        <p class=\"sign-title\">Người thu tiền</p>
        <p class=\"sign-note\">(Ký, đóng dấu, ghi rõ họ tên)</p>
        <br><br><br>
      </td>
    </tr>
  </table>
</div>
</body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["base_path", "directory", "node", "loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/course_register/templates/node--receipt--pdf.html.twig";
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
        return array (  315 => 174,  307 => 168,  301 => 164,  297 => 163,  293 => 161,  289 => 158,  272 => 155,  268 => 154,  263 => 151,  257 => 149,  249 => 147,  247 => 146,  242 => 144,  239 => 143,  236 => 142,  233 => 141,  216 => 140,  213 => 139,  210 => 138,  208 => 137,  196 => 127,  190 => 123,  186 => 122,  183 => 121,  180 => 120,  171 => 112,  163 => 106,  159 => 105,  155 => 104,  151 => 103,  145 => 99,  53 => 9,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/course_register/templates/node--receipt--pdf.html.twig", "/app/web/modules/custom/course_register/templates/node--receipt--pdf.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 120, "for" => 140, "if" => 146);
        static $filters = array("escape" => 9, "date" => 104, "length" => 137, "number_format" => 154, "number_to_words" => 164);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'date', 'length', 'number_format', 'number_to_words'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
