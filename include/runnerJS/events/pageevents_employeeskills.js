Runner.pages.PageSettings.addPageEvent("employeeskills",
		Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj,
				proxy, pageid, inlineRow, inlineObject) {
			$("#revertLink" + inlineRow.id).hide();
			$("#saveLink" + inlineRow.id).hide();
		});
Runner.pages.PageSettings.addPageEvent("employeeskills",
		Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj,
				proxy, pageid, inlineRow, inlineObject) {
			$("#revertLink" + inlineRow.id).hide();
			$("#saveLink" + inlineRow.id).hide();
		});

Runner.pages.PageSettings.addPageEvent("employeeskills",
		Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj,
				proxy, pageid, inlineRow, inlineObject) {

	$("#view_empskills").on( 'click', function(){
		var checked = document.querySelectorAll('[name="selection[]"]:checked');
		if( checked.length == 0 ) {
			alert("Select atleast one record to view.");
		} else if( checked.length > 1 ) {
			alert("Single record can be viewed");
		} else {
			var checkedId = checked[0].id;
			$("#"+checkedId).parent('td').prev().children('a#viewLink5').click();
		}
	} );
	
});

