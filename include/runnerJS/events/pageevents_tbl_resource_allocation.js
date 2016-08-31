Runner.pages.PageSettings
		.addPageEvent(
				"tbl_resource_allocation",
				Runner.pages.constants.PAGE_LIST,
				"afterPageReady",
				function(pageObj, proxy, pageid) {

					$('#div_allocation_filter').removeClass("rnr-hiddencontainer");
					$("#startDate, #endDate").datepicker(
									{
										dateFormat : "yy/mm/dd",
										showOn : "button",
										buttonImage : "images/cal.gif",
										buttonImageOnly : false,
										buttonText : "Show Date"
									});

					var date = new Date(), y = date.getFullYear(), m = date.getMonth();
					var fd = new Date(y, m, 1);
					var ld = new Date(y, m + 1, 0);

					function formatDate(date) {
						var d = new Date(date), month = '' + (d.getMonth() + 1), day = '' + d.getDate(), year = d.getFullYear();

						if (month.length < 2)
							month = '0' + month;
						if (day.length < 2)
							day = '0' + day;

						return [ year, month, day ].join('/');
					}
					var firstDay = formatDate(fd);
					var lastDay = formatDate(ld);

					$("#startDate").val(firstDay);
					$("#endDate").val(lastDay);

					$.ajax({
						url : 'buttonhandler.php',
						type : 'post',
						dataType : 'json',
						data : {
							"startDate" : firstDay,
							"endDate" : lastDay,
							"onloadFunc" : "1"
						},
						success : function(response) {
							loadTableData(response);
						}
					});

					pageObj.buttonNames[pageObj.buttonNames.length] = 'Show_Allocation3';
					if (!pageObj.buttonEventBefore['Show_Allocation3']) {
						pageObj.buttonEventBefore['Show_Allocation3'] = function(
								params, ctrl, pageObj, proxy, pageid, rowData) {

							params["startDate"] = $("#startDate").val();
							params["endDate"] = $("#endDate").val();

						}
					}

					if (!pageObj.buttonEventAfter['Show_Allocation3']) {
						pageObj.buttonEventAfter['Show_Allocation3'] = function(
								result, ctrl, pageObj, proxy, pageid, rowData) {

							loadTableData(result);
						}
					}
					
					function loadTableData(result) {

						$("#div_allocation_details").removeClass("rnr-hiddencontainer");

						firstDay = $("#startDate").val();
						lastDay = $("#endDate").val();
						
						var columns = [];
						var data = [];
						var colM = [];
						
						if( result == null ) {
							$("#message").removeClass("rnr-hiddencontainer");
						} else {
							for (var i = 0; i < result.length; i++) {
								var rowHash = result[i];
								for ( var key in rowHash) {
									if ($.inArray(key, columns) == -1) {
										columns.push(key);
									}
								}
							}
	
							for (var i = 0; i < result.length; i++) {
								var rowValue = [];
								for (var colIndex = 0; colIndex < columns.length; colIndex++) {
	
									var cellValue = result[i][columns[colIndex]];
									if (cellValue == null) {
										cellValue = "";
									}
									rowValue.push(cellValue);
								}
								data.push(rowValue);
							}
	
							for (var i = 0; i < columns.length; i++) {
								if (columns[i] == "Resource" || columns[i] == "Role" || columns[i] == "Manager" ) {
	
										if( columns[i] == "Resource" ) {
											colM.push( { 
												 title: columns[i], width: 100,  dataType : "string", dataIndx: columns[i], minWidth: 100,
								                 filter: { type: 'select',
								                     condition: 'contain', 
								                     valueIndx: columns[i],
								                     labelIndx: columns[i],
								                     prepend: { '': 'Please Select' },
								                     listeners: ['change'],
								                     cls: 'pq-filter-rsa'
								                 }
								             } );
										} else if( columns[i] == "Manager" ) {
											colM.push( { 
												 title: columns[i], width: 100,  dataType : "string", dataIndx: columns[i], minWidth: 100,
								                 filter: { type: 'select',
								                     condition: 'contain', 
								                     valueIndx: columns[i],
								                     labelIndx: columns[i],
								                     prepend: { '': 'Please Select' },
								                     listeners: ['change'],
								                     cls : 'pq-filter-manager'
								                 }
								             } );
										} else if( columns[i] != "Resource" || columns[i] != "Manager" ) {
											colM.push( { 
												 title: columns[i], width: 100,  dataType : "string", dataIndx: columns[i], minWidth: 100  
								             } );
										}
										
									
								} else if(columns[i] != "Resource" || columns[i] != "Role" || columns[i] != "Manager" ) {
		
									colM.push({
										title : columns[i],
										width : 60,
										dataType : "integer",
										align : "center",
										dataIndx : columns[i],
										render : function(ui) {
											var dataIndx = ui.dataIndx;
											var rowData = ui.rowData;
											if (rowData[dataIndx] <= 79) {
												return "<div class='pq-td-div' style='background-color:green; color:white;'>"+ rowData[dataIndx] + "%" + "</div>";
											} else if (rowData[dataIndx] >= 100) {
												return "<div class='pq-td-div' style='background-color:red; color:white;'>"+ rowData[dataIndx] + "%" + "</div>";
											} else if (rowData[dataIndx] > 79 && rowData[dataIndx] < 100) {
												return "<div class='pq-td-div' style='background-color:orange; color:white;'>" + rowData[dataIndx] + "%" + "</div>";
											}
	
										}
									});
								}
							}
	
					        var dataModel = {
					        		 location: "local",
					                 sorting: "local",
					                 sortDir: "up"
					        }
	
							 var obj = { 
					                 width: 1349,
					                 flexHeight: true,
					                 numberCell : false,
					                 dataModel: dataModel,
					                 colModel: colM,
					                 wrap: true,
					                 hwrap: false,
					                 pageModel: { type: 'local', rPP: 10 },
					                 editable: false,
					                 selectionModel: { type: 'cell' },
					                 filterModel: { on: true, mode: "OR", header: true },
					                 resizable: true,
					                 columnBorders: true,
					                 freezeCols: 3,
					                 scrollModel : {
											autoFit : true,
											theme : true,
											horizontal : true,
											vertical : true
									 },
									 toolbar:{
										 items : [
								                    { type: "<span style='margin:0px;'>Filter By Resource :</span>" },
								                    { type: "<span style='margin-left:270px;'>Filter By Manager :</span>" }
								               ]
									 }
					             };
							 
					             var $grid = $("#div_allocation_details").pqGrid(obj);
					           //  debugger;
	//				             var selectDropDown = document.getElementsByName("Manager")[0];
	//				             $(selectDropDown).on( 'click', function(){$(this).height('100')});
					           //  var selectManager = $( "select[name='Manager']" )[0];
					            // $( selectManager) . on( 'click', function(){$(this).height('100');});
					             //load all data at once
					          
					           $grid.pqGrid("showLoading");
	
					             $.ajax({ 
					            	 url: 'buttonhandler.php',
					                 cache: false,
					                 async: true,
					                 dataType: "JSON",
					                 data : {
											"startDate" : firstDay,
											"endDate" : lastDay										
										},
					                 success: function (response) {
					                	 
					                       $grid.pqGrid("option", "dataModel.data", response);
		
					                       var column = $grid.pqGrid( "getColumn", { dataIndx : "Resource" } );
						        		   var filter = column.filter;
						        		   filter.cache = null;
						        		   filter.options = $grid.pqGrid( "getData", { dataIndx : ["Resource"] } );
						        
						        		   var column = $grid.pqGrid( "getColumn", { dataIndx : "Manager" } );
						        		   var filter = column.filter;
						        		   filter.cache = null;
						        		   filter.options = $grid.pqGrid( "getData", { dataIndx : ["Manager"] } );
						        		   
						                   $grid.pqGrid("refreshDataAndView");
						                   $grid.pqGrid("hideLoading");
						                   
						                   var nextButton = document.getElementsByClassName("ui-icon-seek-next")[0].parentNode;
						                   nextButton.click();
						                   var prevButton = document.getElementsByClassName("ui-icon-seek-prev")[0].parentNode;
						                   prevButton.click();
					                 }
					             });
						   }
					}

					$('a[id=Show_Allocation3]').each(function() {
						if ($(this).closest('tr.gridRowAdd').length) {
							return;
						}
						this.id = "Show_Allocation3" + "_" + Runner.genId();
						var button_Show_Allocation3 = new Runner.form.Button({
							id : this.id,
							btnName : "Show_Allocation3"
						});
						button_Show_Allocation3.init({
							args : [ pageObj, proxy, pageid ]
						});
					});

				});