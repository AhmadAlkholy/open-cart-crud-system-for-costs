<?php

/* extension/module/costs_crud/show_data.twig */
class __TwigTemplate_a27fa61aebdbd0fd89fb6b35a2b9bde8f7c29ba8c1450b51c286c8491cd69f00 extends Twig_Template
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

.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-table100 {
  min-height: 100vh;
  background: #d1d1d1;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  padding: 13px 30px;
}

.wrap-table100 {
  width: 1300px;
}

/*//////////////////////////////////////////////////////////////////
[ Table ]*/
table {
  width: 100%;
  background-color: #fff;
}

th, td {
  font-weight: unset;
  padding-right: 10px;
}

.column100 {
  padding-left: 10px;
  padding-right:10px;
  text-align:center;
}

.column100.column1 {
}

.row100.head th {
  padding-top: 24px;
  padding-bottom: 20px;
}

.row100 td {
  padding-top: 18px;
  padding-bottom: 14px;
}




/*==================================================================
[ Ver2 ]*/
.table100.ver2 td {
  font-family: Montserrat-Regular;
  font-size: 14px;
  color: #808080;
  line-height: 1.4;
}

.table100.ver2 th {
  font-family: Montserrat-Medium;
  font-size: 12px;
  color: #fff;
  line-height: 1.4;
  text-transform: uppercase;

  background-color: #333333;
}

.table100.ver2 .row100:hover td {
  background-color: #83d160;
  color: #fff;
}

.table100.ver2 .hov-column-ver2 {
  background-color: #83d160;
  color: #fff;
}

.table100.ver2 .hov-column-head-ver2 {
  background-color: #484848 !important;
}

.table100.ver2 .row100 td:hover {
  background-color: #57b846;
  color: #fff;
}

/*==================================================================
[ Ver2 ]*/
.table100.ver2 tbody tr:nth-child(even) {
  background-color: #eaf8e6;
}

.table100.ver2 td {
  font-family: Montserrat-Regular;
  font-size: 14px;
  color: #808080;
  line-height: 1.4;
}

.table100.ver2 th {
  font-family: Montserrat-Medium;
  font-size: 12px;
  color: #fff;
  line-height: 1.4;
  text-transform: uppercase;

  background-color: #333333;
}

.table100.ver2 .row100:hover td {
  background-color: #83d160;
  color: #fff;
}

.table100.ver2 .hov-column-ver2 {
  background-color: #83d160;
  color: #fff;
}

.table100.ver2 .hov-column-head-ver2 {
  background-color: #484848 !important;
}

.table100.ver2 .row100 td:hover {
  background-color: #57b846;
  color: #fff;
}
.row100:target{
  animation: added 1.5s ease-in;
}
@keyframes added{
  30%{
    background:lightgreen;
  }
}


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
<div class=\"container\" style=\"margin-left:15%\">
  <div class=\"limiter\">
  \t<div class=\"container-table100\">
      
      <ul class=\"breadcrumb\">
        ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 211
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "      </ul>
          \t\t
  \t\t<h1><a href=\"";
        // line 215
        echo (isset($context["add_link"]) ? $context["add_link"] : null);
        echo "\">Add New Record</a></h1>
  \t\t<div class=\"wrap-table100\">

  \t\t\t<div class=\"table100 ver2 m-b-110\">
  \t\t\t\t<table data-vertable=\"ver2\">
  \t\t\t\t\t<thead>
  \t\t\t\t\t\t<tr class=\"row100 head\">
  \t\t\t\t\t\t\t<th class=\"column100 column1\" data-column=\"column1\">Cost id</th>
  \t\t\t\t\t\t\t<th class=\"column100 column2\" data-column=\"column2\">Cost Description</th>
  \t\t\t\t\t\t\t<th class=\"column100 column4\" data-column=\"column4\">Cost Value</th>
  \t\t\t\t\t\t\t
  \t\t\t\t\t\t\t\t<th class=\"column100 column6\" data-column=\"column6\"></th>
  \t\t\t\t\t\t\t\t<th class=\"column100 column7\" data-column=\"column7\"></th>
  \t\t\t\t\t\t\t
  \t\t\t\t\t\t</tr>
  \t\t\t\t\t</thead>
  \t\t\t\t\t<tbody>

              ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["costs"]) ? $context["costs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cost"]) {
            // line 234
            echo "                <tr class=\"row100\" id=\"row";
            echo $this->getAttribute($context["cost"], "id", array());
            echo "\">
                  <td class=\"column100 column1\" data-column=\"column1\">";
            // line 235
            echo $this->getAttribute($context["cost"], "id", array());
            echo "</td>
                  <td class=\"column100 column2\" data-column=\"column2\">";
            // line 236
            echo $this->getAttribute($context["cost"], "description", array());
            echo "</td>
                  <td class=\"column100 column4\" data-column=\"column4\">";
            // line 237
            echo $this->getAttribute($context["cost"], "value", array());
            echo "</td>
                  
                  <td class=\"column100 column6\" data-column=\"column6\">
                    <a href=\"";
            // line 240
            echo (isset($context["edit_link"]) ? $context["edit_link"] : null);
            echo $this->getAttribute($context["cost"], "id", array());
            echo "\">
                      <button class=\"crud-btn edit-btn\" data-action=\"edit\" data-target=\"\">Edit</button>
                    </a></td>

                  <td class=\"column100 column7\" data-column=\"column7\"><button class=\"crud-btn delete-btn\" data-action=\"delete\" data-target=\"";
            // line 244
            echo $this->getAttribute($context["cost"], "id", array());
            echo "\">Delete</button></td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "  \t\t\t\t\t\t
  \t\t\t\t\t</tbody>
  \t\t\t\t</table>
  \t\t\t</div>
  \t\t</div>
  \t</div>
  </div>
</div>

<script>
\$('.delete-btn').on('click', function(){
  var link = \"";
        // line 258
        echo (isset($context["delete_link"]) ? $context["delete_link"] : null);
        echo "\".replace('amp;', '');
  if(confirm('are you sure you want to delete this cost?')){
    id = \$(this).attr('data-target');
    \$.ajax({
      url: link,
      type: 'POST',
      data: {
          'cost_id': id 
        },
      success: function(data){
          if(data == 1){
            alert('cost was deleted successfully');
            \$('#row'+id).remove(); 
          }
          else{
            alert('sorry something went wrong please try again later');
          }
               
        }
    });
  }
});
</script>

";
        // line 282
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/costs_crud/show_data.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 282,  325 => 258,  312 => 247,  303 => 244,  295 => 240,  289 => 237,  285 => 236,  281 => 235,  276 => 234,  272 => 233,  251 => 215,  247 => 213,  236 => 211,  232 => 210,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <style type="text/css">*/
/* */
/* .limiter {*/
/*   width: 100%;*/
/*   margin: 0 auto;*/
/* }*/
/* */
/* .container-table100 {*/
/*   min-height: 100vh;*/
/*   background: #d1d1d1;*/
/* */
/*   display: -webkit-box;*/
/*   display: -webkit-flex;*/
/*   display: -moz-box;*/
/*   display: -ms-flexbox;*/
/*   display: flex;*/
/*   align-items: center;*/
/*   justify-content: center;*/
/*   flex-wrap: wrap;*/
/*   padding: 13px 30px;*/
/* }*/
/* */
/* .wrap-table100 {*/
/*   width: 1300px;*/
/* }*/
/* */
/* /*//* /////////////////////////////////////////////////////////////////*/
/* [ Table ]*//* */
/* table {*/
/*   width: 100%;*/
/*   background-color: #fff;*/
/* }*/
/* */
/* th, td {*/
/*   font-weight: unset;*/
/*   padding-right: 10px;*/
/* }*/
/* */
/* .column100 {*/
/*   padding-left: 10px;*/
/*   padding-right:10px;*/
/*   text-align:center;*/
/* }*/
/* */
/* .column100.column1 {*/
/* }*/
/* */
/* .row100.head th {*/
/*   padding-top: 24px;*/
/*   padding-bottom: 20px;*/
/* }*/
/* */
/* .row100 td {*/
/*   padding-top: 18px;*/
/*   padding-bottom: 14px;*/
/* }*/
/* */
/* */
/* */
/* */
/* /*==================================================================*/
/* [ Ver2 ]*//* */
/* .table100.ver2 td {*/
/*   font-family: Montserrat-Regular;*/
/*   font-size: 14px;*/
/*   color: #808080;*/
/*   line-height: 1.4;*/
/* }*/
/* */
/* .table100.ver2 th {*/
/*   font-family: Montserrat-Medium;*/
/*   font-size: 12px;*/
/*   color: #fff;*/
/*   line-height: 1.4;*/
/*   text-transform: uppercase;*/
/* */
/*   background-color: #333333;*/
/* }*/
/* */
/* .table100.ver2 .row100:hover td {*/
/*   background-color: #83d160;*/
/*   color: #fff;*/
/* }*/
/* */
/* .table100.ver2 .hov-column-ver2 {*/
/*   background-color: #83d160;*/
/*   color: #fff;*/
/* }*/
/* */
/* .table100.ver2 .hov-column-head-ver2 {*/
/*   background-color: #484848 !important;*/
/* }*/
/* */
/* .table100.ver2 .row100 td:hover {*/
/*   background-color: #57b846;*/
/*   color: #fff;*/
/* }*/
/* */
/* /*==================================================================*/
/* [ Ver2 ]*//* */
/* .table100.ver2 tbody tr:nth-child(even) {*/
/*   background-color: #eaf8e6;*/
/* }*/
/* */
/* .table100.ver2 td {*/
/*   font-family: Montserrat-Regular;*/
/*   font-size: 14px;*/
/*   color: #808080;*/
/*   line-height: 1.4;*/
/* }*/
/* */
/* .table100.ver2 th {*/
/*   font-family: Montserrat-Medium;*/
/*   font-size: 12px;*/
/*   color: #fff;*/
/*   line-height: 1.4;*/
/*   text-transform: uppercase;*/
/* */
/*   background-color: #333333;*/
/* }*/
/* */
/* .table100.ver2 .row100:hover td {*/
/*   background-color: #83d160;*/
/*   color: #fff;*/
/* }*/
/* */
/* .table100.ver2 .hov-column-ver2 {*/
/*   background-color: #83d160;*/
/*   color: #fff;*/
/* }*/
/* */
/* .table100.ver2 .hov-column-head-ver2 {*/
/*   background-color: #484848 !important;*/
/* }*/
/* */
/* .table100.ver2 .row100 td:hover {*/
/*   background-color: #57b846;*/
/*   color: #fff;*/
/* }*/
/* .row100:target{*/
/*   animation: added 1.5s ease-in;*/
/* }*/
/* @keyframes added{*/
/*   30%{*/
/*     background:lightgreen;*/
/*   }*/
/* }*/
/* */
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
/* */
/* </style>*/
/* <div class="container" style="margin-left:15%">*/
/*   <div class="limiter">*/
/*   	<div class="container-table100">*/
/*       */
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*           		*/
/*   		<h1><a href="{{ add_link }}">Add New Record</a></h1>*/
/*   		<div class="wrap-table100">*/
/* */
/*   			<div class="table100 ver2 m-b-110">*/
/*   				<table data-vertable="ver2">*/
/*   					<thead>*/
/*   						<tr class="row100 head">*/
/*   							<th class="column100 column1" data-column="column1">Cost id</th>*/
/*   							<th class="column100 column2" data-column="column2">Cost Description</th>*/
/*   							<th class="column100 column4" data-column="column4">Cost Value</th>*/
/*   							*/
/*   								<th class="column100 column6" data-column="column6"></th>*/
/*   								<th class="column100 column7" data-column="column7"></th>*/
/*   							*/
/*   						</tr>*/
/*   					</thead>*/
/*   					<tbody>*/
/* */
/*               {% for cost in costs %}*/
/*                 <tr class="row100" id="row{{cost.id}}">*/
/*                   <td class="column100 column1" data-column="column1">{{cost.id}}</td>*/
/*                   <td class="column100 column2" data-column="column2">{{cost.description}}</td>*/
/*                   <td class="column100 column4" data-column="column4">{{cost.value}}</td>*/
/*                   */
/*                   <td class="column100 column6" data-column="column6">*/
/*                     <a href="{{ edit_link }}{{cost.id}}">*/
/*                       <button class="crud-btn edit-btn" data-action="edit" data-target="">Edit</button>*/
/*                     </a></td>*/
/* */
/*                   <td class="column100 column7" data-column="column7"><button class="crud-btn delete-btn" data-action="delete" data-target="{{cost.id}}">Delete</button></td>*/
/*                 </tr>*/
/*               {% endfor %}*/
/*   						*/
/*   					</tbody>*/
/*   				</table>*/
/*   			</div>*/
/*   		</div>*/
/*   	</div>*/
/*   </div>*/
/* </div>*/
/* */
/* <script>*/
/* $('.delete-btn').on('click', function(){*/
/*   var link = "{{delete_link}}".replace('amp;', '');*/
/*   if(confirm('are you sure you want to delete this cost?')){*/
/*     id = $(this).attr('data-target');*/
/*     $.ajax({*/
/*       url: link,*/
/*       type: 'POST',*/
/*       data: {*/
/*           'cost_id': id */
/*         },*/
/*       success: function(data){*/
/*           if(data == 1){*/
/*             alert('cost was deleted successfully');*/
/*             $('#row'+id).remove(); */
/*           }*/
/*           else{*/
/*             alert('sorry something went wrong please try again later');*/
/*           }*/
/*                */
/*         }*/
/*     });*/
/*   }*/
/* });*/
/* </script>*/
/* */
/* {{ footer }}*/
