<?php

/* extension/module/mta/mta_pds_product_dt.twig */
class __TwigTemplate_c88e57a4f707484f8f1408595205e687b6630357d7a4e697ba02e12853f930dd extends Twig_Template
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
        echo "(function() {
\t\tvar _loaded = {};
\t\tvar _loading = false;
\t\tvar _ovl_params = {
      mask: {
      \tcolor: '#efefef',
        loadSpeed: 250,
        zIndex: '999999959',
      \topacity: 0.9
      },
      top: 10,
      closeOnClick: false
    }
    
\t\$.fn._make_aff_table = function() {
\t\treturn this.each(function() {
\t\t
\t\tvar pfx = \$(this).attr('id').replace(/_link\$/, '');
\t\tvar _str = '<table class=\"list\" id=\"^^^_table\" style=\"display:none;width:50%;\"><thead><td class=\"right\">";
        // line 19
        echo (isset($context["column_mta_scheme"]) ? $context["column_mta_scheme"] : null);
        echo "</td><td class=\"left\">";
        echo (isset($context["column_affiliates"]) ? $context["column_affiliates"] : null);
        echo "</td></thead><tbody>'; 
\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schemes"]) ? $context["schemes"] : null));
        foreach ($context['_seq'] as $context["_sid"] => $context["_sname"]) {
            echo "\t\t
\t\t\t_str += '<tr><td class=\"right\">";
            // line 21
            echo $context["_sname"];
            echo "</td><td class=\"left\"><div><span id=\"^^^_total_";
            echo $context["_sid"];
            echo "\" style=\"font-weight:bold;\">0</span> <a id=\"^^^_edit_";
            echo $context["_sid"];
            echo "\" href=\"javascript:;\" style=\"display:none;\" rel=\"#affiliate_dt_overlay_div\">";
            echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
            echo "</a></div><div><a id=\"^^^_add_";
            echo $context["_sid"];
            echo "\" href=\"javascript:;\" rel=\"#affiliate_dt_overlay_div\">";
            echo (isset($context["text_add"]) ? $context["text_add"] : null);
            echo "</a></div></td></tr>';
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_sid'], $context['_sname'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t_str += '</tbody></table>';
\t\t_str = _str.replace(/\\^\\^\\^/g, pfx, _str);\t\t
\t\t\$(this).parent().after(_str);
\t\t});
\t}

\t\tvar _dataTable = function(filter_ids, input_sel, total_sel, pfx, _this) {\t\t
\t\t\tvar _ids = \$(input_sel).val();
\t\t\tif(filter_ids == 'exclude') {
\t\t\t\tvar _all_ids = [];
\t\t\t\t\$('input[id^=\"'+pfx+'_\"]').each(function() {
\t\t\t\t\tif(\$(this).val().length > 0) _all_ids.push(\$(this).val());
\t\t\t\t});
\t\t\t\t_all_ids = _all_ids.join(',');
\t\t\t} else {
\t\t\t\tvar _all_ids = _ids;
\t\t\t}
\t\t\t
    \t\$('#affiliate_dt').dataTable({
    \t\t'bDestroy' : true,
        'bProcessing': true,
        'bServerSide': true,
        'sAjaxSource': document.location.href.replace(/catalog\\/product(?:\\/\\w*)/, 'extension/module/mta/mta_affiliate_dt'),
        'sServerMethod' : 'POST',
        'sPaginationType' : 'full_numbers',
        'iDisplayLength' : 25,
        'aoColumns': [
        \t\t{ 'mDataProp': 'id', 'bSearchable' : false, 'bSortable' : false },
            { 'mDataProp': 'name' },
            { 'mDataProp': 'email' },
            { 'mDataProp': 'scheme', 'bSearchable' : false, 'bSortable' : false },            
            { 'mDataProp': 'level', 'bSearchable' : false},
            { 'mDataProp': 'balance', 'bSearchable' : false, 'bSortable' : false},
            { 'mDataProp': 'date_added', 'bSearchable' : false  }
        ],

    \t\t\t'fnServerParams': function (aoData) {
      \t\t\taoData.push({'name' : 'filter_ids', 'value' : filter_ids});
      \t\t\taoData.push({'name' : 'ids', 'value' : _all_ids});
    \t\t\t},
    \t\t\t
      \t  'fnDrawCallback': function() { 
      \t  \t\$('.affiliate_dt_row').each(function() {  
      \t  \t\tvar _chbv = \$(this).find('td:first').text();
            \t\$(\$(this).find('td:first')).prepend('<input type=\"checkbox\" value=\"'+_chbv+'\" />');
            });
\t\t\t\t\t\t\$('.overlay_close').click(function() {
\t\t\t\t\t\t\t\$(_this).overlay().close();\t\t\t\t\t
\t\t\t\t\t\t});            
            \$('#affiliate_dt_save_button').click(function () {
            \tvar _ids_ar = _ids.length > 0 ? _ids.split(',') : [];
            \tvar _preselected_ids = [];
            \tvar _selected_ids = [];
            \t\$('.affiliate_dt_row :checked').each(function() {
            \t\t_preselected_ids.push(\$(this).val());
            \t});\t\t\t\t\t\t\t

            \tif(filter_ids == 'include') {
        \t\t\t\tfor(var _i = 0; _i < _ids_ar.length; _i++) {
        \t\t\t\t\tif(\$.inArray(_ids_ar[_i], _preselected_ids) == -1) _selected_ids.push(_ids_ar[_i]);
        \t\t\t\t}
            \t} else {
            \t\t_selected_ids = _ids_ar;
        \t\t\t\tfor(var _i = 0; _i < _preselected_ids.length; _i++) {
        \t\t\t\t\tif(\$.inArray(_preselected_ids[_i], _ids_ar) == -1) _selected_ids.push(_preselected_ids[_i]);
        \t\t\t\t}            \t\t
            \t}            \t            \t
\t\t\t\t\t\t\t\$(total_sel).text(_selected_ids.length);
\t\t\t\t\t\t\tvar _scheme_id = \$(_this).attr('id').match(/\\d+\$/)[0];
\t\t\t\t\t\t\tif(_selected_ids.length > 0) {
\t\t\t\t\t\t\t\t\$('#'+pfx+'_edit_'+_scheme_id).show();\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\$('#'+pfx+'_edit_'+_scheme_id).hide();\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\$(input_sel).val(_selected_ids.join(','));
              \$(_this).overlay().close();              
            });
        \t}        
    \t});
    }
\t\t
\t\t\$('a[id\$=\"_affiliates_link\"]')._make_aff_table();
\t\t\$(document).on('click', 'a[id\$=\"_affiliates_link\"]', function() {
\t\t\tif(_loading) return;
\t\t\t_loading = true;
\t\t\tvar pfx = \$(this).attr('id').replace(/_link\$/, '');
\t\t\t\$('input[id^=\"'+pfx+'_\"]').each(function() {
\t\t\t\t\$(this).attr('name', \$(this).attr('name').replace(/^_/, ''));
\t\t\t})
\t\t\tif(_loaded[pfx]) {
\t\t\t\t\$('#'+pfx+'_table').toggle();
\t\t\t\t_loading = false;
\t\t\t\treturn;
\t\t\t}
\t\t\tvar _l_id = 'loading'+parseInt(Math.random() * 100000);
\t\t\t\$(this).after('<img src=\"view/image/loading.gif\" id=\"'+_l_id+'\" />');
\t\t\tvar _pfxar = pfx.split('_');
\t\t\tif(_pfxar.length == 2) {
\t\t\t\tvar _pmt = '';
\t\t\t\tvar _pmid = 0;
\t\t\t} else {
\t\t\t\tvar _pmt = _pfxar[1];
\t\t\t\tvar _pmid = _pfxar[2];
\t\t\t}
\t\t\tvar _loc = document.location.href.replace('/product/edit', '/product/get_affiliates');
\t\t\tif(_pmt != '') _loc += '&mod_type='+_pmt;
\t\t\tif(_pmid) _loc += '&mod_id='+_pmid;
\t\t\t
\t\t\t\$.getJSON(_loc, function(r) {
\t\t\t\tfor(var _scheme_id in r) {
\t\t\t\t\tif(!\$.isArray(r[_scheme_id])) continue;
\t\t\t\t\t\$('#'+pfx+'_'+_scheme_id).val(r[_scheme_id].join(','));\t\t\t\t\t
\t\t\t\t\t\$('#'+pfx+'_total_'+_scheme_id).text(r[_scheme_id].length);
\t\t\t\t\t\$('#'+pfx+'_edit_'+_scheme_id).show();
\t\t\t\t}
\t\t\t\t\$('a[id^=\"'+pfx+'_edit_\"]').overlay(_ovl_params);
\t\t\t\t\$('a[id^=\"'+pfx+'_edit_\"]').click(function() {\t\t\t\t\t
\t\t\t\t\t\$('.overlay_close').unbind();
\t\t\t\t\t\$('#affiliate_dt_save_button').unbind();
\t\t\t\t\tvar _this = this;\t\t\t\t\t
\t\t\t\t\tvar _scheme_id = \$(this).attr('id').match(/\\d+\$/)[0];
\t\t\t\t\t\$('#affiliate_dt_save_button').val('";
        // line 144
        echo (isset($context["button_remove_selected_jsstr"]) ? $context["button_remove_selected_jsstr"] : null);
        echo "');
\t\t\t\t\t_dataTable('include', '#'+pfx+'_'+_scheme_id, '#'+pfx+'_total_'+_scheme_id, pfx, _this);\t\t\t\t\t
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('a[id^=\"'+pfx+'_add_\"]').overlay(_ovl_params);
\t\t\t\t\$('a[id^=\"'+pfx+'_add_\"]').click(function() {
\t\t\t\t\t\$('.overlay_close').unbind();
\t\t\t\t\t\$('#affiliate_dt_save_button').unbind();
\t\t\t\t\tvar _this = this;
\t\t\t\t\tvar _scheme_id = \$(this).attr('id').match(/\\d+\$/)[0];
\t\t\t\t\t\$('#affiliate_dt_save_button').val('";
        // line 154
        echo (isset($context["button_add_selected_jsstr"]) ? $context["button_add_selected_jsstr"] : null);
        echo "');
\t\t\t\t\t_dataTable('exclude', '#'+pfx+'_'+_scheme_id, '#'+pfx+'_total_'+_scheme_id, pfx, _this);
\t\t\t\t});
\t\t\t\t_loaded[pfx] = true;
\t\t\t\t\$('#'+_l_id).remove();
\t\t\t\t\$('#'+pfx+'_table').toggle();\t\t\t\t
\t\t\t\t_loading = false;
\t\t\t});
\t\t});\t\t\t

})();
";
    }

    public function getTemplateName()
    {
        return "extension/module/mta/mta_pds_product_dt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 154,  192 => 144,  69 => 23,  51 => 21,  45 => 20,  39 => 19,  19 => 1,);
    }
}
/* (function() {*/
/* 		var _loaded = {};*/
/* 		var _loading = false;*/
/* 		var _ovl_params = {*/
/*       mask: {*/
/*       	color: '#efefef',*/
/*         loadSpeed: 250,*/
/*         zIndex: '999999959',*/
/*       	opacity: 0.9*/
/*       },*/
/*       top: 10,*/
/*       closeOnClick: false*/
/*     }*/
/*     */
/* 	$.fn._make_aff_table = function() {*/
/* 		return this.each(function() {*/
/* 		*/
/* 		var pfx = $(this).attr('id').replace(/_link$/, '');*/
/* 		var _str = '<table class="list" id="^^^_table" style="display:none;width:50%;"><thead><td class="right">{{ column_mta_scheme }}</td><td class="left">{{ column_affiliates }}</td></thead><tbody>'; */
/* 		{% for _sid, _sname in schemes %}		*/
/* 			_str += '<tr><td class="right">{{ _sname }}</td><td class="left"><div><span id="^^^_total_{{ _sid }}" style="font-weight:bold;">0</span> <a id="^^^_edit_{{ _sid }}" href="javascript:;" style="display:none;" rel="#affiliate_dt_overlay_div">{{ text_edit }}</a></div><div><a id="^^^_add_{{ _sid }}" href="javascript:;" rel="#affiliate_dt_overlay_div">{{ text_add }}</a></div></td></tr>';*/
/* 		{% endfor %}*/
/* 		_str += '</tbody></table>';*/
/* 		_str = _str.replace(/\^\^\^/g, pfx, _str);		*/
/* 		$(this).parent().after(_str);*/
/* 		});*/
/* 	}*/
/* */
/* 		var _dataTable = function(filter_ids, input_sel, total_sel, pfx, _this) {		*/
/* 			var _ids = $(input_sel).val();*/
/* 			if(filter_ids == 'exclude') {*/
/* 				var _all_ids = [];*/
/* 				$('input[id^="'+pfx+'_"]').each(function() {*/
/* 					if($(this).val().length > 0) _all_ids.push($(this).val());*/
/* 				});*/
/* 				_all_ids = _all_ids.join(',');*/
/* 			} else {*/
/* 				var _all_ids = _ids;*/
/* 			}*/
/* 			*/
/*     	$('#affiliate_dt').dataTable({*/
/*     		'bDestroy' : true,*/
/*         'bProcessing': true,*/
/*         'bServerSide': true,*/
/*         'sAjaxSource': document.location.href.replace(/catalog\/product(?:\/\w*)/, 'extension/module/mta/mta_affiliate_dt'),*/
/*         'sServerMethod' : 'POST',*/
/*         'sPaginationType' : 'full_numbers',*/
/*         'iDisplayLength' : 25,*/
/*         'aoColumns': [*/
/*         		{ 'mDataProp': 'id', 'bSearchable' : false, 'bSortable' : false },*/
/*             { 'mDataProp': 'name' },*/
/*             { 'mDataProp': 'email' },*/
/*             { 'mDataProp': 'scheme', 'bSearchable' : false, 'bSortable' : false },            */
/*             { 'mDataProp': 'level', 'bSearchable' : false},*/
/*             { 'mDataProp': 'balance', 'bSearchable' : false, 'bSortable' : false},*/
/*             { 'mDataProp': 'date_added', 'bSearchable' : false  }*/
/*         ],*/
/* */
/*     			'fnServerParams': function (aoData) {*/
/*       			aoData.push({'name' : 'filter_ids', 'value' : filter_ids});*/
/*       			aoData.push({'name' : 'ids', 'value' : _all_ids});*/
/*     			},*/
/*     			*/
/*       	  'fnDrawCallback': function() { */
/*       	  	$('.affiliate_dt_row').each(function() {  */
/*       	  		var _chbv = $(this).find('td:first').text();*/
/*             	$($(this).find('td:first')).prepend('<input type="checkbox" value="'+_chbv+'" />');*/
/*             });*/
/* 						$('.overlay_close').click(function() {*/
/* 							$(_this).overlay().close();					*/
/* 						});            */
/*             $('#affiliate_dt_save_button').click(function () {*/
/*             	var _ids_ar = _ids.length > 0 ? _ids.split(',') : [];*/
/*             	var _preselected_ids = [];*/
/*             	var _selected_ids = [];*/
/*             	$('.affiliate_dt_row :checked').each(function() {*/
/*             		_preselected_ids.push($(this).val());*/
/*             	});							*/
/* */
/*             	if(filter_ids == 'include') {*/
/*         				for(var _i = 0; _i < _ids_ar.length; _i++) {*/
/*         					if($.inArray(_ids_ar[_i], _preselected_ids) == -1) _selected_ids.push(_ids_ar[_i]);*/
/*         				}*/
/*             	} else {*/
/*             		_selected_ids = _ids_ar;*/
/*         				for(var _i = 0; _i < _preselected_ids.length; _i++) {*/
/*         					if($.inArray(_preselected_ids[_i], _ids_ar) == -1) _selected_ids.push(_preselected_ids[_i]);*/
/*         				}            		*/
/*             	}            	            	*/
/* 							$(total_sel).text(_selected_ids.length);*/
/* 							var _scheme_id = $(_this).attr('id').match(/\d+$/)[0];*/
/* 							if(_selected_ids.length > 0) {*/
/* 								$('#'+pfx+'_edit_'+_scheme_id).show();								*/
/* 							} else {*/
/* 								$('#'+pfx+'_edit_'+_scheme_id).hide();								*/
/* 							}*/
/* 							$(input_sel).val(_selected_ids.join(','));*/
/*               $(_this).overlay().close();              */
/*             });*/
/*         	}        */
/*     	});*/
/*     }*/
/* 		*/
/* 		$('a[id$="_affiliates_link"]')._make_aff_table();*/
/* 		$(document).on('click', 'a[id$="_affiliates_link"]', function() {*/
/* 			if(_loading) return;*/
/* 			_loading = true;*/
/* 			var pfx = $(this).attr('id').replace(/_link$/, '');*/
/* 			$('input[id^="'+pfx+'_"]').each(function() {*/
/* 				$(this).attr('name', $(this).attr('name').replace(/^_/, ''));*/
/* 			})*/
/* 			if(_loaded[pfx]) {*/
/* 				$('#'+pfx+'_table').toggle();*/
/* 				_loading = false;*/
/* 				return;*/
/* 			}*/
/* 			var _l_id = 'loading'+parseInt(Math.random() * 100000);*/
/* 			$(this).after('<img src="view/image/loading.gif" id="'+_l_id+'" />');*/
/* 			var _pfxar = pfx.split('_');*/
/* 			if(_pfxar.length == 2) {*/
/* 				var _pmt = '';*/
/* 				var _pmid = 0;*/
/* 			} else {*/
/* 				var _pmt = _pfxar[1];*/
/* 				var _pmid = _pfxar[2];*/
/* 			}*/
/* 			var _loc = document.location.href.replace('/product/edit', '/product/get_affiliates');*/
/* 			if(_pmt != '') _loc += '&mod_type='+_pmt;*/
/* 			if(_pmid) _loc += '&mod_id='+_pmid;*/
/* 			*/
/* 			$.getJSON(_loc, function(r) {*/
/* 				for(var _scheme_id in r) {*/
/* 					if(!$.isArray(r[_scheme_id])) continue;*/
/* 					$('#'+pfx+'_'+_scheme_id).val(r[_scheme_id].join(','));					*/
/* 					$('#'+pfx+'_total_'+_scheme_id).text(r[_scheme_id].length);*/
/* 					$('#'+pfx+'_edit_'+_scheme_id).show();*/
/* 				}*/
/* 				$('a[id^="'+pfx+'_edit_"]').overlay(_ovl_params);*/
/* 				$('a[id^="'+pfx+'_edit_"]').click(function() {					*/
/* 					$('.overlay_close').unbind();*/
/* 					$('#affiliate_dt_save_button').unbind();*/
/* 					var _this = this;					*/
/* 					var _scheme_id = $(this).attr('id').match(/\d+$/)[0];*/
/* 					$('#affiliate_dt_save_button').val('{{ button_remove_selected_jsstr }}');*/
/* 					_dataTable('include', '#'+pfx+'_'+_scheme_id, '#'+pfx+'_total_'+_scheme_id, pfx, _this);					*/
/* 				});*/
/* 				*/
/* 				$('a[id^="'+pfx+'_add_"]').overlay(_ovl_params);*/
/* 				$('a[id^="'+pfx+'_add_"]').click(function() {*/
/* 					$('.overlay_close').unbind();*/
/* 					$('#affiliate_dt_save_button').unbind();*/
/* 					var _this = this;*/
/* 					var _scheme_id = $(this).attr('id').match(/\d+$/)[0];*/
/* 					$('#affiliate_dt_save_button').val('{{ button_add_selected_jsstr }}');*/
/* 					_dataTable('exclude', '#'+pfx+'_'+_scheme_id, '#'+pfx+'_total_'+_scheme_id, pfx, _this);*/
/* 				});*/
/* 				_loaded[pfx] = true;*/
/* 				$('#'+_l_id).remove();*/
/* 				$('#'+pfx+'_table').toggle();				*/
/* 				_loading = false;*/
/* 			});*/
/* 		});			*/
/* */
/* })();*/
/* */
