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

/* modules/custom/course_register/templates/mail/payment-confirmation.html.twig */
class __TwigTemplate_48d7a318362ffc39ebf3faaf52ac9ae3 extends Template
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
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      color: #333;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
    }
    .header {
      text-align: center;
      margin-bottom: 30px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin: 15px 0;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
    .footer {
      margin-top: 30px;
      text-align: center;
      font-size: 0.9em;
      color: #666;
    }
  </style>
</head>
<body>
  <div class=\"container\">
    <div class=\"header\">
      <h1>Xác nhận thanh toán thành công</h1>
    </div>

    <p>Kính gửi ";
        // line 48
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["student_name"] ?? null), "html", null, true);
        yield ",</p>
    
    <p>Chúng tôi xin xác nhận bạn đã thanh toán thành công cho khóa học sau:</p>

    <table>
      <tr>
        <th colspan=\"2\">Thông tin khóa học</th>
      </tr>
      <tr>
        <td>Tên khóa học:</td>
        <td>";
        // line 58
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["course_name"] ?? null), "html", null, true);
        yield "</td>
      </tr>
      <tr>
        <td>Mã lớp:</td>
        <td>";
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["class_code"] ?? null), "html", null, true);
        yield "</td>
      </tr>
      <tr>
        <td>Học phí:</td>
        <td>";
        // line 66
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["amount"] ?? null), 0, ",", "."), "html", null, true);
        yield " VNĐ</td>
      </tr>
    </table>

    <p>Biên lai thanh toán đã được đính kèm trong email này. Bạn có thể tải về bằng cách click vào <a href=\"";
        // line 70
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["receipt_url"] ?? null), "html", null, true);
        yield "\">đây</a>.</p>

    <div class=\"footer\">
      <p>Email này được gửi tự động từ ";
        // line 73
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
        yield ".</p>
      <p>Nếu bạn cần hỗ trợ, vui lòng liên hệ với chúng tôi qua email hoặc hotline.</p>
      <p>© ";
        // line 75
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
        yield ". All rights reserved.</p>
    </div>
  </div>
</body>
</html>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["student_name", "course_name", "class_code", "amount", "receipt_url", "site_name"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/course_register/templates/mail/payment-confirmation.html.twig";
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
        return array (  137 => 75,  132 => 73,  126 => 70,  119 => 66,  112 => 62,  105 => 58,  92 => 48,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/course_register/templates/mail/payment-confirmation.html.twig", "/app/web/modules/custom/course_register/templates/mail/payment-confirmation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 48, "number_format" => 66, "date" => 75);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'number_format', 'date'],
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
