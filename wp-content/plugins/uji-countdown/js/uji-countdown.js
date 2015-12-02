(function ($) {
	"use strict";
	$(function () {

	    var counter_id = window['ujiCount'];	
        
	    var style = counter_id.uji_style;

        var uji_plugin		 = 	counter_id.uji_plugin;
		
        var ujic_id			 = 	'ujiCountdown';
		var expire			 = 	counter_id.expire;
        var exp_days		 =	counter_id.exp_days;
		
		var Years 	 		 = 	counter_id.Years;
		var Months	 		 = 	counter_id.Months;
		var Weeks 	 		 = 	counter_id.Weeks;
		var Days 	 		 = 	counter_id.Days;
		var Hours 	 		 = 	counter_id.Hours;
		var Minutes  		 = 	counter_id.Minutes;
		var Seconds	 		 = 	counter_id.Seconds;
		
		var Year 			 = 	counter_id.Year;
		var Month			 = 	counter_id.Month;
		var Week 			 = 	counter_id.Week;
		var Day 	 		 = 	counter_id.Day;
		var Hour 	 		 = 	counter_id.Hour;
		var Minute  		 = 	counter_id.Minute;
		var Second			 = 	counter_id.Second;
		
		var ujic_txt_size 	 = 	counter_id.ujic_txt_size;
		var ujic_col_dw		 = 	counter_id.ujic_col_dw;
		var ujic_col_up 	 = 	counter_id.ujic_col_up;
		var ujic_col_txt 	 = 	counter_id.ujic_col_txt;
		var ujic_col_sw 	 =  counter_id.ujic_col_sw;
        var ujic_col_lab 	 =  counter_id.ujic_col_lab;
        var ujic_lab_sz 	 =  counter_id.ujic_lab_sz;

        var ujic_y 	         =  counter_id.ujic_y;
        var ujic_o 	         =  counter_id.ujic_o;
        var ujic_w 	         =  counter_id.ujic_w;
        var ujic_d 	         =  counter_id.ujic_d;
        var ujic_h 	         =  counter_id.ujic_h;
        var ujic_m 	         =  counter_id.ujic_m;
        var ujic_s 	         =  counter_id.ujic_s;
		
        var ujic_thick       =  counter_id.ujic_thick;
        var ujic_txt 		 = 	(counter_id.ujic_txt == "true") ? true : false ;
		  var ujic_ani	 	 = 	(counter_id.ujic_ani == "true") ? true : false ;
        var ujic_prefix      = 'http://';
		  var ujic_url         = (counter_id.ujic_url) ? ( (counter_id.ujic_url.substr(0, ujic_prefix.length) !== ujic_prefix) ? ujic_prefix + counter_id.ujic_url : counter_id.ujic_url ) : '';
        var  ujic_expire     = (ujic_url != '') ? true : false;
        var ujic_goof        =  counter_id.ujic_goof;
		
        var uji_center	 	  = counter_id.uji_center;
        var uji_time         = counter_id.uji_time;
        
        var ujic_hide        = counter_id.uji_hide;
        var ujic_rtl         = (counter_id.ujic_rtl == "true") ? true : false ;

        var austDay = new Date(''+ expire +'');

        var cformat = '';
            cformat += (ujic_y == 'true') ? 'Y' : '';
            cformat += (ujic_o == 'true') ? 'O' : '';
            cformat += (ujic_w == 'true') ? 'W' : '';
            cformat += (ujic_d == 'true') ? 'D' : '';
            cformat += (ujic_h == 'true') ? 'H' : '';
            cformat += (ujic_m == 'true') ? 'M' : '';
            cformat += (ujic_s == 'true') ? 'S' : '';
        
         var cids = [];
             if (ujic_y == 'true') cids.push('uji_year');
             if (ujic_o == 'true') cids.push('uji_mont');
             if (ujic_w == 'true') cids.push('uji_week');
             if (ujic_d == 'true') cids.push('uji_days');
             if (ujic_h == 'true') cids.push('uji_hour');
             if (ujic_m == 'true') cids.push('uji_minu');
             if (ujic_s == 'true') cids.push('uji_secu');
     
        
		$.countdown.regionalOptions["uji"] = {
			labels: [''+ Years +'', ''+ Months +'', ''+ Weeks +'', ''+ Days +'', ''+ Hours +'', ''+ Minutes +'', ''+ Seconds +''],
			labels1: [''+ Year +'', ''+ Month +'', ''+ Week +'', ''+ Day +'', ''+ Hour +'', ''+ Minute +'', ''+ Second +''],
			compactLabels: ["A", "L", "S", "Z"],
            format: cformat,
			whichLabels: null,
			timeSeparator: ':', isRTL: false};
		$.countdown.setDefaults($.countdown.regionalOptions["uji"]);
        
        if(ujic_goof){	
            var the_font = ujic_goof.replace(/\s+/g, '+');
			//add reference to google font family
			$( 'head' ).append( '<link href="https://fonts.googleapis.com/css?family='+ the_font +'" rel="stylesheet" type="text/css">' );
		}
        

        //******************************************* CLASSIC
      
           
            $("#"+ujic_id).countdown({until: austDay, ujic_id: ''+ ujic_id +'', serverSync: serverTime, isRTL: ujic_rtl, text_size: ''+ ujic_txt_size +'', color_down: ''+ ujic_col_dw +'', color_up: ''+ ujic_col_up +'', color_txt:  ''+ ujic_col_txt +'', color_sw:  ''+ ujic_col_sw +'', color_lab:  ''+ ujic_col_lab +'', lab_sz:  ''+ ujic_lab_sz +'',  ujic_txt: ujic_txt, animate_sec: ujic_ani, ujic_hide: ujic_hide, alwaysExpire: ujic_expire, expiryUrl: ujic_url, ujic_goof: ''+ ujic_goof +'' });
     

    
     // Get Server Time
	function serverTime() { 
	    var time = null; 

		time = new Date(uji_time); 
		var utcTime = new Date(time.getUTCFullYear(), time.getUTCMonth(), time.getUTCDate(),  time.getUTCHours(), time.getUTCMinutes(), time.getUTCSeconds());
		time = utcTime;

	    return time; 
	}  
      
	});
}(jQuery));