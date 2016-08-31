Runner.pages.PageSettings.addPageEvent("Allocation Dashboard New",
		Runner.pages.constants.PAGE_DASHBOARD, "afterPageReady", function(
				pageObj, proxy, pageid) {
			pageObj.buttonNames[pageObj.buttonNames.length] = 'Add_Filter';
			if (!pageObj.buttonEventBefore['Add_Filter']) {
				pageObj.buttonEventBefore['Add_Filter'] = function(params,
						ctrl, pageObj, proxy, pageid, rowData) {
					params["startDate"] = "Now()";
					params["weekInterval"] = 4;
					ctrl.setMessage("Sending request to server...");
				}
			}
			if (!pageObj.buttonEventAfter['Add_Filter']) {
				pageObj.buttonEventAfter['Add_Filter'] = function(result, ctrl,
						pageObj, proxy, pageid, rowData) {
					alert(result);
					ctrl.setMessage("suceess");
				}
			}
			$('a[id=Add_Filter]').each(function() {
				if ($(this).closest('tr.gridRowAdd').length) {
					return;
				}
				this.id = "Add_Filter" + "_" + Runner.genId();
				var button_Add_Filter = new Runner.form.Button({
					id : this.id,
					btnName : "Add_Filter"
				});
				button_Add_Filter.init({
					args : [ pageObj, proxy, pageid ]
				});
			});
		});