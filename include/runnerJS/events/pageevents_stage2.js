Runner.pages.PageSettings.addPageEvent("stage2",
		Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj,
				proxy, pageid, inlineRow, inlineObject) {
		$("#edit_model").on( 'click', function(){
			var checked = document.querySelectorAll('[name="selection[]"]:checked');
			if( checked.length == 0 ) {
				alert("Select atleast one record to edit.");
			} else if( checked.length > 1 ) {
				alert("Single record can be edit");
			} else {
				var checkedId = checked[0].id;
				//debugger;
				$("#"+checkedId).parent('td').prev().prev().children('a').click();
			}
		} );
		
		$("#view_model").on( 'click', function(){
			var checked = document.querySelectorAll('[name="selection[]"]:checked');
			if( checked.length == 0 ) {
				alert("Select atleast one record to view.");
			} else if( checked.length > 1 ) {
				alert("Single record can be view");
			} else {
				var checkedId = checked[0].id;
				$("#"+checkedId).parent('td').prev().children('a').click();
			}
		} );
	});
Runner.pages.PageSettings.addPageEvent("stage2",
		Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj,
				proxy, pageid, inlineRow, inlineObject) {
//			$("#revertLink" + inlineRow.id).hide();
//			$("#saveLink" + inlineRow.id).hide();
		});