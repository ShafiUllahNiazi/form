function validate() {
	
	
var output = true;
$(".signup-error").html('');

if($("#ik-field").css('display') != 'none'){
	
	if(!$("#EIname").val().match(/^[a-zA-Z ]+$/)) {
		$("#EIname-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#EIocc").val().match(/^[a-zA-Z ]+$/)) {
		$("#EIocc-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#EIorgan").val().match(/^[a-zA-Z ]*$/)) {
		$("#EIorgan-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#EIdes").val().match(/^[a-zA-Z ]*$/)) {
		$("#EIdes-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#EIMonEarn").val().match(/^[0-9]+$/)) {
		$("#EIMonEarn-error").html("Invalid Input!");
		output = false;
	}
	
	
	if(!$("#EIcnic").val().match(/^[1-9][0-9]{12}$/)) {
		$("#EIcnic-error").html("Invalid Input!");
		output = false;
	}
	
	if(!$("#EIcomp").val().match(/^[a-zA-Z ]*$/)) {
		$("#EIcomp-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#EIAdd").val().match(/^[\w-\.]*$/)) {
		$("#EIAdd-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#EImob").val().match(/^03[0-4][0-9][0-9]{7}$/)) {
		$("#EImob-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#EIOffNo").val().match(/^[0-9]*$/)) {
		$("#EIOffNo-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#EIgrade").val().match(/^[0-9]*$/)) {
		$("#EIgrade-error").html("Invalid Input!");
		output = false;
	}
	
	
	
	
}




if($("#Assetsworth-field").css('display') != 'none'){
	
	if(!$("#assett").val().match(/^[0-9]*$/)) {
		$("#assett-error").html("Invalid Input!");
		output = false;
	}
	
	
	
}


if($("#AssetIncome1-field").css('display') != 'none'){
	
	if(!$("#assetIncome").val().match(/^[0-9]*$/)) {
		$("#assetIncome-error").html("Invalid Input!");
		output = false;
	}
	
	
	
}



if($("#Land-field").css('display') != 'none'){
	
	if(!$("#lqty").val().match(/^[0-9]*$/)) {
		$("#lqty-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#lsize").val().match(/^[0-9]*$/)) {
		$("#lsize-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#llocation").val().match(/^[0-9]*$/)) {
		$("#llocation-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#lCultivableArea").val().match(/^[0-9]*$/)) {
		$("#lCultivableArea-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#lYeild").val().match(/^[0-9]*$/)) {
		$("#lYeild-error").html("Invalid Input!");
		output = false;
	}
	
	
}



if($("#Transport-field").css('display') != 'none'){
	
	if(!$("#tType").val().match(/^[\w-\.]*$/)) {
		$("#tType-error").html("Invalid Input!");
		output = false;
	}
	if($("#tType").val().match(/^[\w-\.]+$/)) {
		
		if(!$("#tmodel").val().match(/^[0-9]{1,}$/)) {
		$("#tmodel-error").html("Invalid Input!");
		output = false;
		}
		if(!$("#tCC").val().match(/^[0-9]{1,}$/)) {
		$("#tCC-error").html("Invalid Input!");
		output = false;
		}
		if(!$("#tReg").val().match(/^[0-9]{1,}$/)) {
		$("#tReg-error").html("Invalid Input!");
		output = false;
		}
		if(!$("#tReg").val().match(/^[0-9]{1,}$/)) {
		$("#tReg-error").html("Invalid Input!");
		output = false;
		}
		if(!$("#townP").val().match(/^[0-9]{1,}$/)) {
		$("#townP-error").html("Invalid Input!");
		output = false;
		}
		
		
	}
	
	
	
	
	
	
}


if($("#scholarship-field").css('display') != 'none'){
	
	
	
	if(!$("#ScholarshipIns").val().match(/^[\w-\.]*$/)) {
		$("#ScholarshipIns-error").html("Invalid Input!");
		output = false;
	}
	if($("#ScholarshipIns").val().match(/^[\w-\.]+$/)) {
		if(!$("#ScholarshipName").val().match(/^[a-zA-Z ][\w-\.]*$/)) {
			$("#ScholarshipName-error").html("Invalid Input!");
			output = false;
		}
		if(!$("#ScholarshipAmount").val().match(/^[0-9]+$/)) {
			$("#ScholarshipAmount-error").html("Invalid Input!");
			output = false;
		}
		if(!$("#ScholarshipPeriod").val().match(/^[\w-\.]$/)) {
			$("#ScholarshipPeriod-error").html("Invalid Input!");
			output = false;
		}
		
		
	}
	
	
	
}



if($("#usman-field").css('display') != 'none'){
	
	if(!$("#nameofIns").val().match(/^[a-zA-Z ][\w-\.]*/)) {
		$("#nameofIns-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#pmFee").val().match(/^[\d]*$/)) {
		$("#pmFee-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#fromYFee").val().match(/^[\w]+[-]+[\d]+$/)) {
		$("#fromYFee-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#toYFee").val().match(/^[\w]+[-]+[\d]+$/)) {
		$("#toYFee-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#gpa").val().match(/^[\w-\.]+$/)) {
		$("#gpa-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#cgpa").val().match(/^[0-9]+$/)) {
		$("#cgpa-error").html("Invalid Input!");
		output = false;
	}
	
}


if($("#password-field").css('display') != 'none'){
	
	if(!$("#fundTotal").val().match(/^[\d]*$/)) {
		$("#fundTotal-error").html("Invalid Input!");
		output = false;
	}
	
}
if($("#sblings1-field").css('display') != 'none'){
	
	if(!$("#sibname").val().match(/^[a-zA-Z ]*$/)) {
		$("#sibname-error").html("Invalid Input!");
		output = false;
	}
	if($("#sibname").val().match(/^[a-zA-Z ]+$/)) {
		
		if(!$("#sibIns").val().match(/^[a-zA-Z ][\w-\.]*/)) {
			$("#sibIns-error").html("Invalid Input!");
			output = false;
		}
		if(!$("#sibMfee").val().match(/^[\d]*$/)) {
			$("#sibMfee-error").html("Invalid Input!");
			output = false;
		}
		if(!$("#sibTfee").val().match(/^[\d]*$/)) {
			$("#sibTfee-error").html("Invalid Input!");
			output = false;
		}
		
	}
	
	
}
if($("#personal-field").css('display') != 'none') {
	
	if(!$("#name").val().match(/^[a-zA-Z ]+$/)) {
		$("#name-error").html("Invalid Name!");
		output = false;
	}
	
	if(!$("#applicant_cnic").val().match(/^[1-9][0-9]{12}$/)) {
		$("#cnic-error").html("Invalid Cnic!");
		output = false;
	}
	
	if(!($("#email").val())) {
		output = false;
		$("#email-error").html("Email required!");
	}	
	
	if(!$("#applicant_birth_place").val().match(/^[a-zA-Z ]+$/)) {
		$("#birth-error").html("Invalid Birth Place!");
		output = false;
	}
	
	
	if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
		$("#email-error").html("Invalid Email!");
		output = false;
	}
	
	
	
	
}

if($("#family-field").css('display') != 'none'){
	
	
	
	if(!$("#applicant_residence_telephone").val().match(/^[a-zA-Z]*$/)) {  
		$("#telephone-error").html("Invalid Mobile!");
		output = false;
	}
	
	if(!($("#applicant_mobile").val())) {
		output = false;
		$("#mob-error").html("required!");
	}
	
	if(!$("#applicant_mobile").val().match(/^03[0-4][0-9][0-9]{7}$/)) {
		$("#mob-error").html("Invalid Mobile!");
		output = false;
	}

	
	
	if(!$("#applicant_total_family_members").val().match(/^[1-9][0-9]*$/)) {
		$("#familyMem-error").html("Invalid Input!");
		output = false;
	}
	
	
	
	if(!$("#applicant_living_family_members").val().match(/^[1-9][0-9]*$/)) {
		$("#currentMem-error").html("Invalid Input!");
		output = false;
	}
	
	if(!$("#applicant_married_family_members").val().match(/^[0-9]*$/)) {
		$("#marriedMem-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#applicant_earning_members").val().match(/^[0-9]*$/)) {
		$("#earningMem-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#applicant_studying_members").val().match(/^[0-9]*$/)) {
		$("#sibstudy-error").html("Invalid Input!");
		output = false;
	}
	
	if(!$("#applicant_not_earning_members").val().match(/^[0-9]*$/)) {
		$("#notEarnMem-error").html("Invalid Input!");
		output = false;
	}
	
	
}
if($("#AccExpen-field").css('display') != 'none'){
	
	
	if(!$("#sizee").val().match(/^[0-9]+$/)) {
		$("#size-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#areaa").val().match(/^[0-9]+$/)) {
		$("#area-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#valuee").val().match(/^[0-9]*$/)) {
		$("#value-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#mRent").val().match(/^[0-9]*$/)) {
		$("#mRent-error").html("Invalid Input!");
		output = false;
	}
	
	
	
	
}

if($("#Expen-field").css('display') != 'none'){
	
	if(!$("#tel").val().match(/^[0-9]*$/)) {
		$("#tel-error").html("Invalid Input!");
		output = false;
	}
	
	if(!$("#elec").val().match(/^[0-9]*$/)) {
		$("#elec-error").html("Invalid Input!");
		output = false;
	}
	
	if(!$("#gas").val().match(/^[0-9]*$/)) {
		$("#gas-error").html("Invalid Input!");
		output = false;
	}
	
	if(!$("#water").val().match(/^[0-9]*$/)) {
		$("#water-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#mob").val().match(/^[0-9]*$/)) {
		$("#mob-error").html("Invalid Input!");
		output = false;
	}
	
	if(!$("#tela").val().match(/^[0-9]*$/)) {
		$("#tela-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#eleca").val().match(/^[0-9]*$/)) {
		$("#eleca-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#gasa").val().match(/^[0-9]*$/)) {
		$("#gasa-error").html("Invalid Input!");
		output = false;
	}
	if(!$("#watera").val().match(/^[0-9]*$/)) {
		$("#watera-error").html("Invalid Input!");
		output = false;
	}
	
	if(!$("#moba").val().match(/^[0-9]*$/)) {
		$("#moba-error").html("Invalid Input!");
		output = false;
	}
	
	if(!$("#totala").val().match(/^[0-9]*$/)) {
		$("#totala-error").html("Invalid Input!");
		output = false;
	}
	
	if(!$("#food").val().match(/^[0-9]+$/)) {
		$("#food-error").html("Invalid Input!");
		output = false;
	}
	
	
	if(!$("#servant").val().match(/^[0-9]*$/)) {
		$("#servant-error").html("Invalid Input!");
		output = false;
	}
	
	if(!$("#medical").val().match(/^[0-9]*$/)) {
		$("#medical-error").html("Invalid Input!");
		output = false;
	}
	
	if(!$("#mics").val().match(/^[0-9]*$/)) {
		$("#mics-error").html("Invalid Input!");
		output = false;
	}
	
	
	
	
}


return output;
}
 
$(document).ready(function() {
	$("#next").click(function(){
		var output = validate();
		
		if(output) {
			var current = $(".active");
			var next = $(".active").next("li");
			if(next.length>0) {
				$("#"+current.attr("id")+"-field").hide();
				$("#"+next.attr("id")+"-field").show();
				$("#back").show();
				$("#finish").hide();
				$(".active").removeClass("active");
				next.addClass("active");
				if($(".active").attr("id") == $("li").last().attr("id")) {
					$("#next").hide();
					$("#finish").show();				
				}
			}
		}
	});
	$("#back").click(function(){ 
		var current = $(".active");
		var prev = $(".active").prev("li");
		if(prev.length>0) {
			$("#"+current.attr("id")+"-field").hide();
			$("#"+prev.attr("id")+"-field").show();
			$("#next").show();
			$("#finish").hide();
			$(".active").removeClass("active");
			prev.addClass("active");
			if($(".active").attr("id") == $("li").first().attr("id")) {
				$("#back").hide();			
			}
		}
	});
});

////////////
 var i=1;
            var j=1;
    
        function addRow1()//function that add the row
            {
                  var tbl = document.getElementById('table2');
                  var lastRow = tbl.rows.length;
                  var iteration = lastRow - 1;
                  var row = tbl.insertRow(lastRow);

              var firstCell = row.insertCell(0);
              var el = document.createElement('input');
              el.type = 'text';
              el.name = 'membername_' + j;
              el.id = 'membername_' + j;
              //el.size = 30;
              //el.maxlength =30;
              firstCell.appendChild(el);

              var secondCell = row.insertCell(1);
              var el2 = document.createElement('input');
              el2.type = 'text';
              el2.name = 'membersrelationship_' + j;
              el2.id = 'membersrelationship_' + j;
              secondCell.appendChild(el2);
              var thirdCell = row.insertCell(2);
              var el3 = document.createElement('input');
              el3.type = 'text';
              el3.name = 'memberstatus_' + j;
              el3.id = 'memberstatus_' + j;
              thirdCell.appendChild(el3);
			  var fourthCell = row.insertCell(3);
              var el4 = document.createElement('input');
              el4.type = 'text';
              el4.name = 'memberremarks_' + j;
              el4.id = 'memberremarks_' + j; 
              fourthCell.appendChild(el4);      
              frmRegistration.h.value=j;
			 
              j++;
           
        }
