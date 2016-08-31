function addAllColumnHeaders(myList, selector) {
    var columnSet = [];
	var headerTr$ = $('<tr class="rnr-toprow style1 {$gridHeader_class}"/>');
	
    for(var i = 0; i < myList.length; i++) {
        var rowHash = myList[i];
        for(var key in rowHash) {
            if ($.inArray(key, columnSet) == -1){
                columnSet.push(key);
                headerTr$.append($('<th class="rnr-gridfieldlabel"/>').html(key));
            }
        }
    }
    $(selector).html(headerTr$);
    return columnSet;
}
//obj.colModel = [ { columns } ];