$(document).ready(function() {
	
  $('input.selftestSubmit').click(function(event){
  	
 	event.preventDefault();

	var pointsTotal = 0;
   	
   	var selfTestDiv=$(this).parents(".tx-selftest")
   	
   	var rowCount = 0;
   	var rowsChecked = 0;
   	
   	//count rows with radio buttons
   	selfTestDiv.find(".test-table tr").each(function(){
   		if ($(this).find("td input[type=radio]").size() > 0) {
   			  		   		rowCount++;
   		}
   	});
   	
   	//get values for from all checked radio buttons
   	selfTestDiv.find("td input[type=radio]").each(function(){
   		if ($(this).is(':checked')) {
	   		var value=$(this).attr("value");
	   		pointsTotal += parseInt(value);
	   		rowsChecked++;
   		}
   		
   	});
   	
   	// check if not all questions are answered
   	if (rowsChecked < rowCount) {
   		alert($('.labels-for-js p.select-answer').text());
   	} else {
   		//all questions were answered
	   	alert($('.labels-for-js p.result').text()+": "+pointsTotal+" "+$('.labels-for-js p.points').text())
	   	
	   	selfTestDiv.find('.test-table').hide();
	   	selfTestDiv.find('input.selftestSubmit').hide();
	   	
	   	//show result corresponding to the selected answers
	   	selfTestDiv.find(".result-posibility").each(function(){
	   		
	   		//hide all results (takes effect if evaluated a second time)
	   		if (!$(this).hasClass("hidden")){
	   			$(this).addClass("hidden");
	   		}
	   		
	   		var lowerLimit = parseInt($(this).find(".lower-limit").text())
	   		var upperLimit = parseInt($(this).find(".upper-limit").text())
	   		
	   		if (upperLimit == 0) {
	   			//upperLimit equals 0 if not set in the backend
	   			upperLimit = 999999;
	   		}
	   		
	   		var lowerLimitToHigh = true;
	   		if ( pointsTotal >= lowerLimit ) {
	   			lowerLimitToHigh = false;
	   		};
	   		
	   		//remove class hidden from result div is points are between lower and upper limit
	   		if (lowerLimitToHigh == false) {
	   			if (pointsTotal <= upperLimit) {
	   				$(this).removeClass("hidden");
	   				
	   				var h2Scoring= $(this).find("h2.scoring");
	   				h2Scoring.text(h2Scoring.text()+" "+pointsTotal+" "+$('.labels-for-js p.points').text());
	   			}
	   		}
	   		
	   	});
   	}
   	
  });

	
});
