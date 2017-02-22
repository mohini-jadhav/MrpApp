Runner.pages.PageSettings.addPageEvent("customerallocation",
		Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj,
				proxy, pageid, inlineRow, inlineObject) {

	$("#edit_allocation").on( 'click', function(){
		var checked = document.querySelectorAll('[name="selection[]"]:checked');
		if( checked.length == 0 ) {
			alert("Select atleast one record to edit.");
		} else if( checked.length > 1 ) {
			alert("Single record can be edit");
		} else {
			var checkedId = checked[0].id;
			$("#"+checkedId).parent('td').prev().children('.edit-allocation').click();
		}
	} );

	$("#view_allocation").on( 'click', function(){
		var checked = document.querySelectorAll('[name="selection[]"]:checked');
		if( checked.length == 0 ) {
			alert("Select atleast one record to view.");
		} else if( checked.length > 1 ) {
			alert("Single record can be viewed");
		} else {
			var checkedId = checked[0].id;
			$("#"+checkedId).parent('td').prev().children('.view-allocation').click();
		}
	} );
	;
});

Runner.pages.PageSettings.addPageEvent("customerallocation",
		Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj,
				proxy, pageid, inlineRow, inlineObject) {
			var ctrlCountry = Runner.getControl(pageid, 'Stage');
			var ctrlState = Runner.getControl(pageid, 'Project');			
			var ctrlCustomer = Runner.getControl(pageid, 'CustomerName');
			var ctrlOracleID = Runner.getControl(pageid, 'OracleID');
			var ctrlOnshoreOnly = Runner.getControl(pageid, 'OnshoreSupportOnly');
			var ctrlSize = Runner.getControl(pageid, 'Size');
			var ctrlTimeZone = Runner.getControl(pageid, 'TimeZone');
			var ctrlContractStart = Runner.getControl(pageid, 'Contract_Start');
			var ctrlContractEnd = Runner.getControl(pageid, 'Contract_End');
			var ctrlSteadyState = Runner.getControl(pageid, 'SteadyStateDate');
			var ctrlStartDate = Runner.getControl(pageid, 'StartDate');
			var ctrlEndDate = Runner.getControl(pageid, 'EndDate');

			$.each(proxy.CustomerNameList, function (i, item) {
				$('#value_CustomerName_'+pageid).append($('<option>', { 
			        value: item.Name,
			        text : item.Name 
			    }));
			});

			$('#value_CustomerName_'+pageid).on('change', function(){
				$('#value_Stage_'+pageid).empty();
				$('#value_Stage_'+pageid).append($('<option>',{value:"", text: "Please Select"}));
				$.each(proxy.CustomerNameList, function (i, item) {

					if($('#value_CustomerName_'+pageid).val() == item.Name){

						if( null != item.OracIeID ) {
							$(ctrlOracleID.readonlyElem.selector).text(item.OracIeID);
							$("#"+ctrlOracleID.valContId).val(item.OracIeID);
							$("#"+ctrlCustomer.valContId).val(item.Name);
						}
						if( null != item.OnshoreSupport ) {
							$("#"+ctrlOnshoreOnly.valContId).val(item.OnshoreSupport);	
						}
						if( null != item.Size ) {
							$("#"+ctrlSize.valContId).val(item.Size);
							$.each(proxy.AllocationModelDetails, function (i, data) {
								if( data.CategoryID == item.Size ) {								
									$('#value_Stage_'+pageid).append($('<option>', { 
								        value: data.PK1,
								        text : data.Activity 
									 }));
								}
							    
							});
						}

						if( null != item.PrimaryTimeZone ) {
							$(ctrlTimeZone.readonlyElem.selector).text(item.PrimaryTimeZone);
							$("#"+ctrlTimeZone.valContId).val(item.PrimaryTimeZone);
						}
						if( null != item.Contract_Start ) {
							$(ctrlContractStart.readonlyElem.selector).text(item.Contract_Start);
							$("#"+ctrlContractStart.valContId).val(item.Contract_Start);
						}
						
						if( null != item.Contract_end ){
							$(ctrlContractEnd.readonlyElem.selector).text(item.Contract_end);
							$("#"+ctrlContractEnd.valContId).val(item.Contract_end);
							if( null != item.Stage && "3" == item.Stage ) {
								var ContractEndDate = new Date(item.Contract_end);
								$("#"+ctrlEndDate.valContId).val((ContractEndDate.getMonth() + 1) + "/" + ContractEndDate.getDate() + "/" + ContractEndDate.getFullYear());
							}
							
						}
						if( null != item.SteadyState ) {
							$(ctrlSteadyState.readonlyElem.selector).text(item.SteadyState);
							$("#"+ctrlSteadyState.valContId).val(item.SteadyState);
							if( null != item.Stage && "3" == item.Stage ) {
								var steadyStateDate = new Date(item.SteadyState);
								$("#"+ctrlStartDate.valContId).val((steadyStateDate.getMonth() + 1) + "/" + steadyStateDate.getDate() + "/" + steadyStateDate.getFullYear());
							}
						}						
					}
				});									
			});
			
			ctrlCountry.on('change', function() {
				if (this.getValue() >= '96') {					
					$('#'+ctrlCountry.spanContId).parent().next("td").html("<label><strong>Project Name</strong></label>");
					$('#'+ctrlCountry.spanContId).parent().next("td").next("td").html("<input type='text' id='pro_name' value='' />");
					$("#"+ctrlCustomer.valContId+ " option[id='Other']").remove();
					$("#"+ctrlCustomer.valContId).append("<option id='Other' value='Other' selected='selected'>Other</option>");
					
					$(ctrlOracleID.readonlyElem.selector).text("");
					$("#"+ctrlOnshoreOnly.valContId).prop("checked", false);
					
					$("#"+ctrlSize.valContId).val("");
					$("#"+ctrlSize.valContId).hide();

					$(ctrlTimeZone.readonlyElem.selector).text("");
					$("#"+ctrlTimeZone.valContId).val("");
					$(ctrlContractStart.readonlyElem.selector).text("");
					$("#"+ctrlContractStart.valContId).val("");
					$(ctrlContractEnd.readonlyElem.selector).text("");
					$("#"+ctrlContractEnd.valContId).val("");
					$(ctrlSteadyState.readonlyElem.selector).text("");
					$("#"+ctrlSteadyState.valContId).val("");		
					
					$("#pro_name").on('change', function(){
						addProName(this);
					});
					//ctrlState.show();
				} else {
					$('#'+ctrlCountry.spanContId).parent().next("td").html("");
					$('#'+ctrlCountry.spanContId).parent().next("td").next("td").html("");
					$("#"+ctrlCustomer.valContId+ " option[id='Other']").remove();
					//ctrlState.hide();
				}
			});
			
			$("#"+ctrlState.valContId).on('click', function() {
				if($("#"+ctrlState.valContId).is(":checked")){
					$(this).parent("#"+ctrlState.spanContId).parent().next("td").html("<label><strong>Project Name</strong></label>");
					$(this).parent("#"+ctrlState.spanContId).parent().next("td").next("td").html("<input type='text' id='pro_name' value='' />");
					$("#"+ctrlCustomer.valContId+ " option[id='Other']").remove();
					$("#"+ctrlCustomer.valContId).append("<option id='Other' value='Other' selected='selected'>Other</option>");
					
					$(ctrlOracleID.readonlyElem.selector).text("");
					$("#"+ctrlOnshoreOnly.valContId).prop("checked", false);
					
					$("#"+ctrlSize.valContId).val("");
					$("#"+ctrlSize.valContId).hide();
					
					$(ctrlTimeZone.readonlyElem.selector).text("");
					$("#"+ctrlTimeZone.valContId).val("");
					$(ctrlContractStart.readonlyElem.selector).text("");
					$("#"+ctrlContractStart.valContId).val("");
					$(ctrlContractEnd.readonlyElem.selector).text("");
					$("#"+ctrlContractEnd.valContId).val("");
					$(ctrlSteadyState.readonlyElem.selector).text("");
					$("#"+ctrlSteadyState.valContId).val("");		
					
					$("#pro_name").on('change', function(){
						addProName(this);
					});
				} else {
					$(this).parent("#"+ctrlState.spanContId).parent().next("td").html("");
					$(this).parent("#"+ctrlState.spanContId).parent().next("td").next("td").html("");
					$("#"+ctrlCustomer.valContId+ " option[id='Other']").remove();
				}
			});
			
			function addProName(context){				
				$("#"+ctrlCustomer.valContId+ " option[id='Other']").html($(context).val()).val($(context).val());
			}
			
			$("#"+ctrlCustomer.valContId).on('change', function(){
				$("#"+ctrlSize.valContId).show();
				$("#"+ctrlState.valContId).prop('checked', false);
				$("#"+ctrlState.valContId).hide();
				$("#"+ctrlState.valContId).parent("#"+ctrlState.spanContId).parent().next("td").html("");
				$("#"+ctrlState.valContId).parent("#"+ctrlState.spanContId).parent().next("td").next("td").html("");
			});

			$("#" + ctrlCountry.valContId).on('change',function(){
				if($(this).val() >= '96'){
					$("#"+ctrlState.valContId).prop('checked', false);
					$("#"+ctrlState.valContId).show();
				}
			});
			;
		});

Runner.pages.PageSettings.addPageEvent("customerallocation",
		Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj,
				proxy, pageid, inlineRow, inlineObject) {
			var ctrl = Runner.getControl(pageid, 'OnshoreSupportOnly');
			var readonly = ctrl.isReadonly();
			var ctrlCountry = Runner.getControl(pageid, 'Stage');
			var ctrlState = Runner.getControl(pageid, 'Project');
			/*ctrlCountry.on('change', function(e) {
				if (this.getValue() >= '96') {	
					ctrlState.show();
				} else {
					ctrlState.hide();
				}
			});*/
			;
		});