/*jslint browser: true*/
/*global $, jQuery, alert*/

$(document).ready(function () {
alert("hi");
var mail=gsession.getSession('mail');
var username=gsession.getSession('cusername');

 
 if(!(gsession.getSession('hash_val')))
 {
	
	setvalue('your_mail_at_com','login to live here');
 }
 else
 {
	setvalue(mail,username);
 }
//alert(sessionStorage.cusername);
function setvalue(mail,cusername){
//document.getElementById("mailid").value=mail;
document.getElementById("username").innerHTML=cusername;
}
    'use strict';
    $('#send').click(
		function () {
            var from = document.getElementById("mailid").value,
                Comp_name=document.getElementById("mailid").value,
                msg = document.getElementById("message").value,
                hash = sessionStorage.hash_val,
                atpos = from.indexOf("@"),
                dotpos = from.lastIndexOf(".");
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= from.length)
            {
                  alert("Not a valid e-mail address");
                  return false;
                }
                else {

                sendmail(hash,from,msg);
                }
	   }
	);

});


function sendmail(hash,from,msg){

var vmap={};
vmap['hash']=hash;
vmap['from']=from;
vmap['msg']=msg;

		
	ajaxcall.send_data(vmap,'contact');
}


   
   
