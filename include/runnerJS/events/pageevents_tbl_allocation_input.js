
Runner.pages.PageSettings.addPageEvent("tbl_allocation_input",Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Show_Allocation1';if(!pageObj.buttonEventBefore['Show_Allocation1']){pageObj.buttonEventBefore['Show_Allocation1']=function(params,ctrl,pageObj,proxy,pageid,rowData){params["txt"]="Hello";ctrl.setMessage("Sending request to server...");}}
if(!pageObj.buttonEventAfter['Show_Allocation1']){pageObj.buttonEventAfter['Show_Allocation1']=function(result,ctrl,pageObj,proxy,pageid,rowData){var message=result["txt"]+" !!!";ctrl.setMessage(message);}}
$('a[id=Show_Allocation1]').each(function(){if($(this).closest('tr.gridRowAdd').length){return;}
this.id="Show_Allocation1"+"_"+Runner.genId();var button_Show_Allocation1=new Runner.form.Button({id:this.id,btnName:"Show_Allocation1"});button_Show_Allocation1.init({args:[pageObj,proxy,pageid]});});});