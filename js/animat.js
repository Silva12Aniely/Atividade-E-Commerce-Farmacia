	$(document).ready(function(){
		$("#divB").click(function(){
				$("#txt").show("slow");
			$("#divB").css("margin-top", "10%");
			$("#txt1").css("opacity", "0.0");
			$("#txt2").css("opacity", "0.0");
			$("#txt3").css("opacity", "0.0");
		$("#divB").mouseleave(function(){
			$("#txt").hide("slow");
			$("#txt1").css("opacity", "1");
			$("#txt2").css("opacity", "1");
			$("#txt3").css("opacity", "1");
			$("#divB").css("margin-top","18%")
		});
		});
	});