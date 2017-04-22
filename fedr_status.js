var alist;

jQuery(document).ready(function() {
  jQuery("#debug").html("test0");
	jQuery.post("https://www.cs.colostate.edu/~ct310/yr2017sp/more_assignments/project03masterlist.php", {}, function(data, status) {
  // jQuery.post("fedr.php", {}, function(data, status) {
    addRows(data);
    jQuery("#output1").html(status);
  })
});

function addRows(lst) {
	var rt = "";
	var tab = document.getElementById('sites');
	var i = tab.rows.length;
	var len = lst.length;
  var rowStatus = "uninitialized";
  alert("rowStatus is [" + rowStatus + "]");

	for (j = len - 1; j >= 0; j--) {

    rowStatus = classStatus(lst[j].baseURL);
    alert("rowStatus is [" + rowStatus + "]");

		// rt  = "<tr class=\"" + rowStatus + "\">";
    rt  = "<tr class=\"table-warning\">";
    rt += "<td>";
		rt += lst[j].Team;
		rt += "</td><td>";
    rt += lst[j].nameShort;
    rt += "</td><td>";
    rt += lst[j].nameLong;
    rt += "</td><td>";
    rt += lst[j].baseURL;
    rt += "</td>";
    rt += "<td id=\"" + lst[j].Team + "_status\"> ... </td>";
    rt += "</tr>";
		var rr = tab.insertRow(i);
		rr.innerHTML = rt;
	}
  for (j = 0; j < len; j++) {
		getStatus(lst[j].baseURL, lst[j].Team);
	}
}

function classStatus(u){
  test = u.slice(-1);
  if(test != '/')
    u = u.concat('/');

  var targetSiteStatus = u + "ajax_status.php";

  var rowStatus = jQuery.post(targetSiteStatus, function(data, status) {
    alert("row status should be: [" + data.status + "]");
  })
  return rowStatus;
}

function getStatus(u, n){
  test = u.slice(-1);
  if(test != '/')
    u = u.concat('/');

  var targetSiteStatus = u + "ajax_status.php";

  jQuery.post(targetSiteStatus, {a : n}, function(data, status) {
    var target = "#" + n + "_status";
    jQuery(target).text(data.status);
  })

}
