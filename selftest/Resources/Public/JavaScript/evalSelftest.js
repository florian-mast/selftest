$(document).ready(function() {
	
  $('input.selftestSubmit').click(function(event){
  	
 	event.preventDefault();

	var pointsTotal = 0;
   	
   	var selfTestDiv=$(this).parents(".tx-selftest")
   	
   	selfTestDiv.find("td input[type=radio]").each(function(){
   		if ($(this).is(':checked')) {
	   		var value=$(this).attr("value");
	   		pointsTotal += parseInt(value);
   		}
   	});
   	
   	if (pointsTotal==0) {
   		alert($('.labels-for-js p.select-answer').text());
   	} else {
	   	alert($('.labels-for-js p.result').text()+": "+pointsTotal+" "+$('.labels-for-js p.points').text())
	   	
	   	selfTestDiv.find('.test-table').hide();
	   	selfTestDiv.find('input.selftestSubmit').hide();
	   	
	   	selfTestDiv.find(".result-posibility").each(function(){
	   		
	   		//hide all results (takes effect if evaluated a second time)
	   		if (!$(this).hasClass("hidden")){
	   			$(this).addClass("hidden");
	   		}
	   		
	   		var lowerLimit = parseInt($(this).find(".lower-limit").text())
	   		var upperLimit = parseInt($(this).find(".upper-limit").text())
	   		
	   		if (upperLimit == 0) {
	   			//upperLimit equals 0 if not set in backend
	   			upperLimit = 999999;
	   		}
	   		
	   		var lowerLimitToHigh = true;
	   		if ( pointsTotal >= lowerLimit ) {
	   			lowerLimitToHigh = false;
	   		};
	   		
	   		if (lowerLimitToHigh == false) {
	   			if (pointsTotal <= upperLimit) {
	   				$(this).removeClass("hidden");
	   			}
	   		}
	   		
	   	});
   	}
   	
  });

	
});
