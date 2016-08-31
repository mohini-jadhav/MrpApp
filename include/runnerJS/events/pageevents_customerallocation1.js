Runner.pages.PageSettings.addPageEvent("customerallocation1",
		Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj,
				proxy, pageid, inlineRow, inlineObject) {
			var ctrlCountry = Runner.getControl(pageid, 'Stage');
			var ctrlState = Runner.getControl(pageid, 'Project');
			ctrlCountry.on('change', function(e) {
				if (this.getValue() >= '96') {
					ctrlState.show();
				} else {
					ctrlState.hide();
				}
			});
			;
		});
Runner.pages.PageSettings.addPageEvent("customerallocation1",
		Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj,
				proxy, pageid, inlineRow, inlineObject) {
			var ctrl = Runner.getControl(pageid, 'OnshoreSupportOnly');
			var readonly = ctrl.isReadonly();
			var ctrlCountry = Runner.getControl(pageid, 'Stage');
			var ctrlState = Runner.getControl(pageid, 'Project');
			ctrlCountry.on('change', function(e) {
				if (this.getValue() >= '96') {
					ctrlState.show();
				} else {
					ctrlState.hide();
				}
			});
			;
		});