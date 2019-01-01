<?php

/* extension/module/costs_crud/editing_data.twig */
class __TwigTemplate_b777b2bc3e73460db96a9ac1e1503da4c303dbd8c5d91a583b9c983a35c57e8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<style type=\"text/css\">

label{
  font-size:20px;
  margin-top:20px;
  margin-bottom:10px;
  display:block;
  font-weight:500;
}
input, select, text-area{
  width:90%;
  max-width:90%;
  height:40px!important;
  line-height:40px !important;
  border-radius:10px;
  border:solid silver 2px;
}
textarea{
  height:150px;
  width:90%;
}
.school-system-form{
  padding-left:5%;
}
.crud-btn{
  display:block;
  margin:20px auto !important;
  border-radius:5px;
  width:300px;
  height:50px;
  background:#21c083;
  border:none;
  color:#fff;
  font-weight:600;
  font-size:20px;
  cursor:pointer;
}
.crud-btn a{
  color:#fff;
}
.crud-btn:disabled{
  color:#ccc;
}
.edit-btn, .delete-btn{
  width:100px;
  height:30px;
  font-size:16px;
}
.delete-btn{
  background:#f21700;
}
a{
  text-decoration:none;
}
</style>


<div class=\"container\" style=\"margin-left:20%\">

  ";
        // line 61
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 62
            echo "      ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
  ";
        }
        // line 64
        echo "
  ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 66
            echo "      <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
\t<form method=\"post\" action=\"";
        // line 69
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\"  enctype=\"multipart/form-data\" id=\"form\">
    ";
        // line 70
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 71
            echo "      <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 75
        echo "\t\t<label>Description</label>
\t\t<textarea name=\"cost_desc\">";
        // line 76
        echo $this->getAttribute((isset($context["costs"]) ? $context["costs"] : null), "description", array());
        echo "</textarea>

\t\t<label>Value</label>
\t\t<input required name=\"cost_value\" type=\"number\" value=\"";
        // line 79
        echo $this->getAttribute((isset($context["costs"]) ? $context["costs"] : null), "value", array());
        echo "\">

\t\t<button class=\"crud-btn\" ";
        // line 81
        if ((isset($context["edit"]) ? $context["edit"] : null)) {
            echo " disabled ";
        }
        echo " >";
        echo (isset($context["submit"]) ? $context["submit"] : null);
        echo "</button>
\t</form>
</div>

";
        // line 85
        if ((isset($context["edit"]) ? $context["edit"] : null)) {
            echo " 
<script>

\$('#form textarea, #form input').on('change keyup',function(){
    \$('.crud-btn').prop('disabled', false);
});

</script>
";
        }
        // line 94
        echo "
";
        // line 95
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/costs_crud/editing_data.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 95,  163 => 94,  151 => 85,  140 => 81,  135 => 79,  129 => 76,  126 => 75,  118 => 71,  116 => 70,  112 => 69,  109 => 68,  98 => 66,  94 => 65,  91 => 64,  85 => 62,  83 => 61,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <style type="text/css">*/
/* */
/* label{*/
/*   font-size:20px;*/
/*   margin-top:20px;*/
/*   margin-bottom:10px;*/
/*   display:block;*/
/*   font-weight:500;*/
/* }*/
/* input, select, text-area{*/
/*   width:90%;*/
/*   max-width:90%;*/
/*   height:40px!important;*/
/*   line-height:40px !important;*/
/*   border-radius:10px;*/
/*   border:solid silver 2px;*/
/* }*/
/* textarea{*/
/*   height:150px;*/
/*   width:90%;*/
/* }*/
/* .school-system-form{*/
/*   padding-left:5%;*/
/* }*/
/* .crud-btn{*/
/*   display:block;*/
/*   margin:20px auto !important;*/
/*   border-radius:5px;*/
/*   width:300px;*/
/*   height:50px;*/
/*   background:#21c083;*/
/*   border:none;*/
/*   color:#fff;*/
/*   font-weight:600;*/
/*   font-size:20px;*/
/*   cursor:pointer;*/
/* }*/
/* .crud-btn a{*/
/*   color:#fff;*/
/* }*/
/* .crud-btn:disabled{*/
/*   color:#ccc;*/
/* }*/
/* .edit-btn, .delete-btn{*/
/*   width:100px;*/
/*   height:30px;*/
/*   font-size:16px;*/
/* }*/
/* .delete-btn{*/
/*   background:#f21700;*/
/* }*/
/* a{*/
/*   text-decoration:none;*/
/* }*/
/* </style>*/
/* */
/* */
/* <div class="container" style="margin-left:20%">*/
/* */
/*   {% if error_warning %}*/
/*       {{ error_warning }}*/
/*   {% endif %}*/
/* */
/*   {% for breadcrumb in breadcrumbs %}*/
/*       <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*   {% endfor %}*/
/* */
/* 	<form method="post" action="{{action}}"  enctype="multipart/form-data" id="form">*/
/*     {% if error_warning %}*/
/*       <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i>{{ error_warning }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*       </div>*/
/*     {% endif %}*/
/* 		<label>Description</label>*/
/* 		<textarea name="cost_desc">{{costs.description}}</textarea>*/
/* */
/* 		<label>Value</label>*/
/* 		<input required name="cost_value" type="number" value="{{costs.value}}">*/
/* */
/* 		<button class="crud-btn" {% if edit %} disabled {% endif %} >{{ submit }}</button>*/
/* 	</form>*/
/* </div>*/
/* */
/* {% if edit %} */
/* <script>*/
/* */
/* $('#form textarea, #form input').on('change keyup',function(){*/
/*     $('.crud-btn').prop('disabled', false);*/
/* });*/
/* */
/* </script>*/
/* {% endif %}*/
/* */
/* {{ footer }}*/
