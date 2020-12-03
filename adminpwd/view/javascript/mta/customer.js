$(document).ready(function () {
    $('#caffiliate_dt').dataTable( {
        'bProcessing': true,
        'bServerSide': true,
        'sAjaxSource': document.location.href.replace(/customer\/customer(?:\/\w*)/, 'extension/module/mta/mta_affiliate_dt&atype=c'),
        'sServerMethod' : 'POST',
        'sPaginationType' : 'full_numbers',
        'iDisplayLength' : 10,
        'aoColumns': [
        		{ 'mDataProp': 'id', 'bSearchable' : false, 'bSortable' : false },
            { 'mDataProp': 'name' },
            { 'mDataProp': 'email' },
            { 'mDataProp': 'scheme', 'bSearchable' : false, 'bSortable' : false },            
            { 'mDataProp': 'level', 'bSearchable' : false},
            { 'mDataProp': 'balance', 'bSearchable' : false, 'bSortable' : false},
            { 'mDataProp': 'date_added', 'bSearchable' : false  }
        ],

        'fnDrawCallback': function(){            
            $('.caffiliate_dt_row').css({'cursor' : 'pointer'});
            $('.caffiliate_dt_row').on('click', function () {
            	$('#caffiliate_dt_overlay_open').overlay().close();            	
              var _id = $(this).attr('id').split('-')[1];
              var _name = $($(this).find('td')[1]).text();
              $('#caffiliate_td span').empty();
			  var _href = document.location.href.replace(/customer_id=\d+/, 'customer_id='+_id);			  
			  if(_href.indexOf('customer_id') == -1) _href += '&customer_id='+_id;
              var _a = $('<a/>').attr('href', _href).attr('target', '_blank').text(_name).appendTo($('#caffiliate_td span'));
              $('input[name="affiliate_id"]').val(_id);  
              $('input[name="affiliate_name"]').val(_name);                            
            });
        }        
    } );
    
$('#caffiliate_set_none').on('click', function() {
	$('#caffiliate_td span').html(window.TEXT_NONE_MTA);
	$('input[name="affiliate_id"]').val('0');
	$('input[name="affiliate_name"]').val('');
});             	
    
$('#caffiliate_dt_overlay_open').overlay({
        	mask: {
        		color: '#efefef',
            loadSpeed: 200,
            zIndex: '999999959',
        		opacity: 0.9
        	},
		top: 10,
        	closeOnClick: false
      });
      $('.overlay_close').on('click', function() {
      	$('#caffiliate_dt_overlay_open').overlay().close();
      });      
});
