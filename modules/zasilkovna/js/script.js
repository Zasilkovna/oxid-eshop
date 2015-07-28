function addHooks() {
	//checks all zasilkovbna select boxes and if radio is selected, set required param
	function setRequiredOpt(elem) {
		var fn = function() {
			if (typeof this.packetery == 'undefined') return; //it is not the real select box
			radio = null;
			var limit = 10;
			var r = window.packetery.jQuery(this).parent();

			while(true){
				var r = r.parent();
				var rr = r.find('input:radio');
				if(rr.size()){
					radio = rr;
					break;
				}
				limit--;
				if(!limit) break;
			}

			/*
            if (radio.is(':checked')) {
				this.packetery.option('required', true);
            } else {
				this.packetery.option('required', false);
				if (this.packetery.option("selected-id") > 0) {
					this.packetery.option("selected-id", 0);
				}
			}
			*/
		};

		window.packetery.jQuery("div.packetery-branch-list").each(fn);
	}

	//set each radio button to call setRequiredOpt if clicked
	window.packetery.jQuery('input[name="paymentid"]:radio').each(function() {
		window.packetery.jQuery(this).click(setRequiredOpt);
	});

	//set onchange for each zasilkovna select box to update name_street input
	window.packetery.jQuery(".packetery-branch-list").each(function() {
		if (typeof this.packetery == 'undefined') return; //it is not the real select box
		if (window.packetery.jQuery('#branch_name_street').length == 0){
			window.packetery.jQuery(this).parents('form').append('<input type="hidden" name="branch_name_street" id="branch_name_street">');
		}

		this.packetery.on("branch-change", setRequiredOpt);
		window.packetery.jQuery(this).append('<p name="select_branch_message" style="color:red; font-weight:bold;display:none">Vyberte pobočku</p>');
		this.packetery.option("selected-id", 0);
	});
}