$(document).ready(function () {
   
   
   
    $("#form").submit(function() {
		var PN = $("input[name='propertyName']").val().trim();
        var AD = $("input[name='address']").val().trim();
        var CN = $("input[name='cityName']").val().trim();
        var SN = $("input[name='stateName']").val().trim();
        var PC = $("input[name='postalCode']").val().trim();
        var SP = $("input[name='sellingPrice']").val().trim();
        var RP = $("input[name='rentalPrice']").val().trim();
        var PD = $("input[name='purchaseDate']").val().trim();
        var PP = $("input[name='purchasePrice']").val().trim();

		if(PN !== '') {
			$.ajax({
				type: "GET",
				url: "DbHandler.php",
				data: { PN1: PN, AD1: AD, CN1: CN, SN1: SN, PC1: PC, SP1: SP, RP1: RP, PD1: PD, PP1: PP },
				dataType: "HTML",
				cache: false,
				success: function(data) {
					$("div#results").html(data); 
				}
			});
		} return false;    
	});
});
