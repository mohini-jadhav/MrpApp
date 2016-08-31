Runner.pages.PageSettings.addPageEvent(	"employee_header", Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {

	$("#edit_employee").on( 'click', function() {
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
	$('a[id^="master_employeeskills"]').click(function(){ $(this).removeAttr('href'); });
	;
});

Runner.pages.PageSettings.addPageEvent("employee_header",
		Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj,
				proxy, pageid, inlineRow, inlineObject) {
			var ctrlCountry = Runner.getControl(pageid, 'Location');
			var ctrlState = Runner.getControl(pageid, 'State');
			ctrlCountry.on('change', function(e) {
				if (this.getValue() == 'NA') {
					ctrlState.show();
				} else {
					ctrlState.hide();
				}
			});
			var ctrlCountry = Runner.getControl(pageid, 'Location');
			ctrlCountry.on('change', function(e) {
				if (this.getValue() == 'NA') {
					$("tr[data-fieldname='State']").show();
				} else {
					$("tr[data-fieldname='State']").hide();
				}
			});
		});
Runner.pages.PageSettings.addPageEvent("employee_header",
		Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj,
				proxy, pageid, inlineRow, inlineObject) {
			var ctrlEmployeeStatus = Runner
					.getControl(pageid, 'EmployeeStatus');
			function func() {
				if (!ctrlEmployeeStatus.getValue())
					ctrlEmployeeStatus.addStyle('background: yellow;');
				else
					ctrlEmployeeStatus.addStyle('background: white;');
			}
			ctrlEmployeeStatus.on('click', func);
			ctrlEmployeeStatus.on('keyup', func);
		});