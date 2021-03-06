var CookieUtils = {};

CookieUtils.create = function(name, value, days) {
	
	var str = name + "=" + encodeURIComponent(value);
	
	var date = new Date();
	date.setTime(date.getTime() + days * 1000 * 60 * 60 * 24);
	var ex = "expires=" + date.toUTCString();
	
	document.cookie = str + "; " + ex + "; path=/";
};

CookieUtils.cookies = {};

CookieUtils.read = function() {
    var c = document.cookie;
    
    var all = c.split('; ');
    
    $.each(all, function(index, value){
    	var item = value.split("=");
    	
    	CookieUtils.cookies[item[0]] = decodeURIComponent(item[1]);
    	
           
    });
    
};


CookieUtils.create("test4", "tessss ttt 4 value", 10);
CookieUtils.create("", "", -1);
//CookieUtils.create("test2", new Date(), 100);
CookieUtils.read();

$(document).ready(function() {
	
write_to_console("test " + CookieUtils.cookies["test1"]);
write_to_console("test " + CookieUtils.cookies["test2"]);
write_to_console("test " + CookieUtils.cookies["test4"]);

CookieUtils.read();

$.each(CookieUtils.cookies, function(name, value) {
	write_to_console("name / value = " + name + " / " + value + " tip:" + typeof(value));
});

var date2 = new Date();

date2.setTime(Date.parse(CookieUtils.cookies.test2));

write_to_console("date 2 " + date2 + " tip: " + typeof(date2) + " instance of date: " + (date2 instanceof Date));

});


function write_to_console(str) {
	
    var line = $("<div/>", {
        class: "cline",
        html: str
    });

    var con = $("#console");
    
    if (con)
    	con.append(line);
    else
    	console.log(str);
 
}

var cookies = {};


function set_cookie()
{

	
CookieUtils.read();
	
write_to_console("test2 " + CookieUtils.cookies.test2);
write_to_console("test 1" + CookieUtils.cookies.test1);

}


$(document).ready(function () {
		
	create_form();
	
	$("#btn_insert").click( function() {

	
		var rec = {};
		rec.name = $("#txt_name").val();
		rec.phone = $("#txt_phone").val();
		rec.ptt = Number($("#txt_ptt").val());
		
		var request = {};
		request.rec = JSON.stringify(rec);
		request.req = "insert";
		
		write_to_console("request poslan" + JSON.stringify(request));
		$.post("data_service.php", request, insert_callback);
		
		function insert_callback(data, status) {

	
			var response = {};
			try {
				if (typeof(data) === "object") {
					response = data;
				} else {
					response = JSON.parse(data);
				}
				response.error = "";
				    
					
			} catch (e) {
				response = {id: -1, error: data};
			}
			
			write_to_console("primljen odgovor" + JSON.stringify(response) + " status: " + status);
			
			if (response.id > 0) {
				
				// resetuje vrijednosti svih polja
				$("#contactForm").each(function(){
				    this.reset();	
				});
				
				CookieUtils.read();
				alert("last insert id = " + CookieUtils.cookies["last_insert_id"]);
			}
			

	    }
	    
	    return true;
	});

});



function create_form()
{	
// inject a form dynamically
var frm = $('<form/>', {
    id: 'contactForm',
    html: $('<h3>Contact form:</h3>', {
      
    })
   
});

$("#frm1").append(frm);


// ----------- Ime -------------------------
var lbl = $("<label>Ime:</label>", {
	id: "l_ime",
	class: "label"
});
lbl.insertAfter("#contactForm h3");

var inp = $('<input/>', {
    "class": "input",
    id: "txt_name",
    type: "text",
    name: "txt_name",
    placeholder: "name"
});
inp.insertAfter(lbl);


// --------- Telefon -------------------

var lbl_2 = $("<label>Telefon:</label>", {
	id: "l_tel",
	class: "label"
});

lbl_2.insertAfter(inp);
lbl_2.insertBefore("<br/>");

var inp_2 = $('<input/>', {
    "class": "input",
    id: "txt_phone",
    type: "text",
    name: "txt_phone",
    placeholder: "phone"
});

inp_2.insertAfter(lbl_2);

// ------- PTT -------------

var lbl_3 = $("<label>PTT:</label>", {
	id: "l_ptt",
	class: "label"
});

lbl_3.insertAfter(inp_2);


var inp_3 = $('<input/>', {
    "class": "input",
    id: "txt_ptt",
    type: "text",
    name: "txt_ptt",
    placeholder: "ptt"
});

inp_3.insertAfter(lbl_3);

// ---------- DUGME -----------------------
var btn_insert = $('<input/>', {
    class: "button",
    id: "btn_insert",
    type: 'button',
    value: 'Dodaj'
});

btn_insert.insertAfter(inp_3);

$("<br/>").insertBefore(lbl);
$("<br/>").insertBefore(lbl_2);
$("<br/>").insertBefore(lbl_3);
$("<br/>").insertBefore(btn_insert);

write_to_console("ok");

set_cookie();

}


function create_tabela()
{
	
var table_div = $("#tabela");
	
var table = $("<table/>", {border: "0"});

	
var first_row = $(table).append("<tr><td>Name:</td><td>Phone:</td></tr>");
	
$.getJSON("test.php", function(json) {
		
	    debugger;
		for(var i=0; i < json.length; i++) {
		
			var row = $("<tr>", { id: "row_" + (i+1).toString(), class: "table_row" });
			
			var attribs = { html: json[i].name };
			var col_name = $("<td>", attribs );
			$(row).append(col_name);
			
			var attribs = { html: json[i].phone };
			var col_phone = $("<td>", attribs )
			$(row).append(col_phone);
			
			$(table).append(row);
		}
	    	
	});

    $(table_div).empty();
	$(table_div).append(table);	

}