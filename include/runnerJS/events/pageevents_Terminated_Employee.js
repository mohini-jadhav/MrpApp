Runner.pages.PageSettings.addPageEvent("Terminated_Employee",
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