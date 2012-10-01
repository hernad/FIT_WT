console.log("util.js start");

function valid_1(field, rules, i, options) {

	if (field.val() != "HELLO")
		return "moras reci HELLO !";
}

function fill_select_with_years(select)
{
	var opt_0 = $('<option value="">Select year</option>');
	
	// proslijedi prazan select elemenat
	$(select).append(opt_0);
	
	var d = new Date();
	var this_year = d.getFullYear();
	
	var prev_opt = opt_0;
	for ( var i = 1902; i < this_year; i++) {
		
		var attribs = {};
		
		// tinejzeri su najcesci korisnici facebook-a;
		if (i == (this_year-18)) {
			attribs.selected = "selected";
		}
		attribs["class"] = "o_year";
		attribs["value"] = i.toString();
		attribs["html"] = i.toString();
		
		var opt = $('<option/>', attribs);
	
		
		$(opt).insertAfter(prev_opt);
		prev_opt = opt;
	}
}

function fill_select_with_months(select)
{
	var months =["Januar", "Februar", "Mart", "April", 
	             "Maj", "Juni", "Juli", "Avgust", 
	             "Septembar", "Oktobar", "Novembar", "Decembar"];
	
	var opt_0 = $('<option value="">Select month</option>');
	
	// proslijedi prazan select elemenat
	$(select).append(opt_0);
		
	
	var prev_opt = opt_0;
	
	for ( var i = 0; i < months.length; i++) {
		
		var attribs = {};
	    attribs.value = i+1;
		attribs.html = months[i];
		
		var opt = $('<option/>', attribs);
		
		$(opt).insertAfter(prev_opt);
		prev_opt = opt;
	}
}

function fill_select_with_days(select)
{
	var opt_0 = $('<option value="">Select day</option>');
	
	// proslijedi prazan select elemenat
	$(select).append(opt_0);
	
	var prev_opt = opt_0;
	for ( var i = 1; i <= 31; i++) {
		
		var attribs = {};
		attribs.value = i;
		attribs.html = i.toString();
		
		var opt = $('<option/>', attribs);
		
		$(opt).insertAfter(prev_opt);
		prev_opt = opt;
    }
}
