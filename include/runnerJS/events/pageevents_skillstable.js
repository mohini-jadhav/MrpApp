Runner.pages.PageSettings.addPageEvent("skillstable",
		Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj,
				proxy, pageid, inlineRow, inlineObject) {

	$("#edit_skills").on( 'click', function(){
		var checked = document.querySelectorAll('[name="selection[]"]:checked');
		if( checked.length == 0 ) {
			alert("Select atleast one record to edit.");
		} else if( checked.length > 1 ) {
			alert("Single record can be edit");
		} else {
			var checkedId = checked[0].id;
			$("#"+checkedId).parent('td').prev().children('.edit_skills').click();
		}
	} );

	$("#view_skills").on( 'click', function(){
		var checked = document.querySelectorAll('[name="selection[]"]:checked');
		if( checked.length == 0 ) {
			alert("Select atleast one record to view.");
		} else if( checked.length > 1 ) {
			alert("Single record can be viewed");
		} else {
			var checkedId = checked[0].id;
			$("#"+checkedId).parent('td').prev().children('.view_skills').click();
		}
	} );
	
});

Runner.pages.PageSettings.addPageEvent("skillstable",
		Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj,
				proxy, pageid, inlineRow, inlineObject) {

	   var ctrlPlatformType = Runner.getControl(pageid, 'PlatformType');
	   var ctrlCategoryID = Runner.getControl( pageid, 'CategoryID' );
	  
	   $("#" + ctrlPlatformType.valContId).on('change',function(){
		   if( "OS" == $(this).val() ) {
			   $("#" + ctrlCategoryID.valContId).val('1');
		   } else if( "Backup" == $(this).val() ) {
			   $("#" + ctrlCategoryID.valContId).val('2');
		   } else if( "Database" == $(this).val() ) {
			   $("#" + ctrlCategoryID.valContId).val('3');
		   } else if( "Virtualization" == $(this).val() ) {
			   $("#" + ctrlCategoryID.valContId).val('4');
		   } else if( "Storage" == $(this).val() ) {
			   $("#" + ctrlCategoryID.valContId).val('5');
		   } else if( "Application" == $(this).val() ) {
			   $("#" + ctrlCategoryID.valContId).val('6');			   
		   } else if( "AS Product" == $(this).val() ){
			   $("#" + ctrlCategoryID.valContId).val('7');
		   } else if( "Network" == $(this).val() ){
			   $("#" + ctrlCategoryID.valContId).val('8');
		   } else if( "Project Management" == $(this).val() ){
			   $("#" + ctrlCategoryID.valContId).val('9');
		   } else if( "Virtual Desktop Infrastructure" == $(this).val() ){
			   $("#" + ctrlCategoryID.valContId).val('10');
		   } else if( "Workplace or WorkGroup" == $(this).val() ){
			   $("#" + ctrlCategoryID.valContId).val('11');
		   }
	   } );
	   
});

Runner.pages.PageSettings.addPageEvent("skillstable",
		Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj,
				proxy, pageid, inlineRow, inlineObject) {

	   var ctrlPlatformType = Runner.getControl(pageid, 'PlatformType');
	   var ctrlCategoryID = Runner.getControl( pageid, 'CategoryID' );
	   
	   $("#" + ctrlPlatformType.valContId).on('change',function(){
		   if( "OS" == $(this).val() ) {
			   $("#" + ctrlCategoryID.valContId).val('1');
		   } else if( "Backup" == $(this).val() ) {
			   $("#" + ctrlCategoryID.valContId).val('2');
		   } else if( "DataBase" == $(this).val() ) {
			   $("#" + ctrlCategoryID.valContId).val('3');
		   } else if( "Virtualization" == $(this).val() ) {
			   $("#" + ctrlCategoryID.valContId).val('4');
		   } else if( "Storage" == $(this).val() ) {
			   $("#" + ctrlCategoryID.valContId).val('5');
		   } else if( "Application" == $(this).val() ) {
			   $("#" + ctrlCategoryID.valContId).val('6');			   
		   } else if( "AS Product" == $(this).val() ){
			   $("#" + ctrlCategoryID.valContId).val('7');
		   } else if( "Network" == $(this).val() ){
			   $("#" + ctrlCategoryID.valContId).val('8');
		   } else if( "Project Management" == $(this).val() ){
			   $("#" + ctrlCategoryID.valContId).val('9');
		   } else if( "Virtual Desktop Infrastructure" == $(this).val() ){
			   $("#" + ctrlCategoryID.valContId).val('10');
		   } else if( "Workplace or WorkGroup" == $(this).val() ){
			   $("#" + ctrlCategoryID.valContId).val('11');
		   }
	   } );
	   
});