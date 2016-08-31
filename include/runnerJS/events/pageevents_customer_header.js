Runner.pages.PageSettings.addPageEvent(	"customer_header", Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {

	$("#edit_customer").on( 'click', function(){
		var checked = document.querySelectorAll('[name="selection[]"]:checked');
		if( checked.length == 0 ) {
			alert("Select atleast one record to edit.");
		} else if( checked.length > 1 ) {
			alert("Single record can be edit");
		} else {
			var checkedId = checked[0].id;
			$("#"+checkedId).parent('td').prev().children('a').click();
		}
	} );
	$('a[id^="master_customerallocation"]').click(function(){ $(this).removeAttr('href') });
	$("td.rnr-field-number").click(function(){ $(this).find('a').removeAttr("href");});
	;
});

Runner.pages.PageSettings.addPageEvent("customer_header", Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	var ctrlCountry = Runner.getControl(pageid, 'Stage');
	var ctrlState = Runner.getControl(pageid, 'TransStartDate');
	var ctrlTransEndDate = Runner.getControl(pageid, 'TransEndDate');
	var ctrlSteadyStateDate = Runner.getControl(pageid, 'SteadyState');
	var ctrlRS = Runner.getControl(pageid, 'RS_MRR');
	var ctrlARS = Runner.getControl(pageid, 'ARS_MRR');
	var ctrlMS = Runner.getControl(pageid, 'MS_MRR');
	var ctrlCS = Runner.getControl(pageid, 'CS_MRR');
	var ctrlOther = Runner.getControl(pageid, 'OTHER_MRR');
	var ctrlMRP = Runner.getControl(pageid, 'MRP_MRR');
	var ctrlTotal = Runner.getControl(pageid, 'Total_MRR');
	
	$(".rnr-b-recordcontrols_new").show();
	$("#edit_selected"+pageid).show();
	
	ctrlRS.on( 'change', function() {
		var rs = parseFloat($('#'+ctrlRS.valContId).val()) || 0;
		var ars = parseFloat($('#'+ctrlARS.valContId).val()) || 0;
		var ms = parseFloat($('#'+ctrlMS.valContId).val()) || 0;
		var cs = parseFloat($('#'+ctrlCS.valContId).val()) || 0;
		var other = parseFloat($('#'+ctrlOther.valContId).val()) || 0;
		var mrp = parseFloat($('#'+ctrlMRP.valContId).val()) || 0;
		var total = rs + ars + ms + cs + other + mrp;
		
		$('#'+ctrlTotal.valContId).val( total);
		$(ctrlTotal.readonlyElem.selector).text( total );
	});

	ctrlARS.on( 'change', function() {
		var rs = parseFloat($('#'+ctrlRS.valContId).val()) || 0;
		var ars = parseFloat($('#'+ctrlARS.valContId).val()) || 0;
		var ms = parseFloat($('#'+ctrlMS.valContId).val()) || 0;
		var cs = parseFloat($('#'+ctrlCS.valContId).val()) || 0;
		var other = parseFloat($('#'+ctrlOther.valContId).val()) || 0;
		var mrp = parseFloat($('#'+ctrlMRP.valContId).val()) || 0;
		var total = rs + ars + ms + cs + other + mrp;

		$('#'+ctrlTotal.valContId).val( total);
		$(ctrlTotal.readonlyElem.selector).text( total );
	});

	ctrlMS.on( 'change', function() {
		var rs = parseFloat($('#'+ctrlRS.valContId).val()) || 0;
		var ars = parseFloat($('#'+ctrlARS.valContId).val()) || 0;
		var ms = parseFloat($('#'+ctrlMS.valContId).val()) || 0;
		var cs = parseFloat($('#'+ctrlCS.valContId).val()) || 0;
		var other = parseFloat($('#'+ctrlOther.valContId).val()) || 0;
		var mrp = parseFloat($('#'+ctrlMRP.valContId).val()) || 0;
		var total = rs + ars + ms + cs + other + mrp;

		$('#'+ctrlTotal.valContId).val( total);
		$(ctrlTotal.readonlyElem.selector).text( total );
	});

	ctrlCS.on( 'change', function() {
		var rs = parseFloat($('#'+ctrlRS.valContId).val()) || 0;
		var ars = parseFloat($('#'+ctrlARS.valContId).val()) || 0;
		var ms = parseFloat($('#'+ctrlMS.valContId).val()) || 0;
		var cs = parseFloat($('#'+ctrlCS.valContId).val()) || 0;
		var other = parseFloat($('#'+ctrlOther.valContId).val()) || 0;
		var mrp = parseFloat($('#'+ctrlMRP.valContId).val()) || 0;
		var total = rs + ars + ms + cs + other + mrp;

		$('#'+ctrlTotal.valContId).val( total);
		$(ctrlTotal.readonlyElem.selector).text( total );
	});

	ctrlMRP.on( 'change', function() {
		var rs = parseFloat($('#'+ctrlRS.valContId).val()) || 0;
		var ars = parseFloat($('#'+ctrlARS.valContId).val()) || 0;
		var ms = parseFloat($('#'+ctrlMS.valContId).val()) || 0;
		var cs = parseFloat($('#'+ctrlCS.valContId).val()) || 0;
		var other = parseFloat($('#'+ctrlOther.valContId).val()) || 0;
		var mrp = parseFloat($('#'+ctrlMRP.valContId).val()) || 0;
		var total = rs + ars + ms + cs + other + mrp;

		$('#'+ctrlTotal.valContId).val( total);
		$(ctrlTotal.readonlyElem.selector).text( total );
	});

	ctrlOther.on( 'change', function() {
		var rs = parseFloat($('#'+ctrlRS.valContId).val()) || 0;
		var ars = parseFloat($('#'+ctrlARS.valContId).val()) || 0;
		var ms = parseFloat($('#'+ctrlMS.valContId).val()) || 0;
		var cs = parseFloat($('#'+ctrlCS.valContId).val()) || 0;
		var other = parseFloat($('#'+ctrlOther.valContId).val()) || 0;
		var mrp = parseFloat($('#'+ctrlMRP.valContId).val()) || 0;
		var total = rs + ars + ms + cs + other + mrp;

		$('#'+ctrlTotal.valContId).val( total);
		$(ctrlTotal.readonlyElem.selector).text( total );
	});

	ctrlCountry.on('change', function(e) {
		if (this.getValue() == '2') {
			ctrlState.show();
		} else {
			ctrlState.hide();
		}
	});
});

Runner.pages.PageSettings.addPageEvent("customer_header", Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	var ctrlCountry = Runner.getControl(pageid, 'Stage');
	var ctrlState = Runner.getControl(pageid, 'TransStartDate');
	$(".rnr-b-recordcontrols_new").show();
	$("#edit_selected"+pageid).show();
	ctrlCountry.on('change', function(e) {
		if (this.getValue() == '2') {
			ctrlState.show();
		} else {
			ctrlState.hide();
		}
	});
});