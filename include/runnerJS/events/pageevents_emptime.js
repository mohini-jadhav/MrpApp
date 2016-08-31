Runner.pages.PageSettings.addPageEvent("emptime",
		Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj,
				proxy, pageid, inlineRow, inlineObject) {
			//$("#revertLink" + inlineRow.id).hide();
			//$("#saveLink" + inlineRow.id).hide();
		});
Runner.pages.PageSettings.addPageEvent("emptime",
		Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj,
				proxy, pageid, inlineRow, inlineObject) {
			$("#revertLink" + inlineRow.id).hide();
			$("#saveLink" + inlineRow.id).hide();
		});