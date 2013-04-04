
var empList =new Array();
var giftList = "";

function imageClicked(value){
	
	switch(value){
		case '1' :
			fileName = "emp1.php";
			giftName = "gift1.php";
			break;
		case '2' :
			fileName = "emp2.php";
			giftName = "gift2.php";
			break;
		case '3' :
			fileName = "emp3.php";
			giftName = "gift3.php";
			break;
		case '4' :
			fileName = "emp4.php";
			giftName = "gift4.php";
			break;
		case '5' :
			fileName = "emp5.php";
			giftName = "gift5.php";
			break;
		case '6' :
			fileName = "emp6.php";
			giftName = "gift6.php";
			break;
	}
	
	$(".giftList").scrollTop(0);
	
	$('#frame').hide('slow', function() {
		// Animation complete.
	});
	
	$(".leftcurtain").stop().animate({width:'50%'}, 2000 );
	$(".rightcurtain").stop().animate({width:'51%'}, 2000 );
	$(".rope").hide();
	
	$.post(giftName,function(data){
		
		var giftListArray = $.trim(data).split('\n');
		giftList = giftListArray; 
		
		var concat = '';
		for( var i in giftListArray){			
			var listDetail = $.trim(giftListArray[i]).split('|');
			gId = (eval(i) + 1) ;
			concat += "<div class='raffleItem'><h4>"+ listDetail[0] +"</h4><a href='#'><img  class='giftName' id='gift"+ (eval(i) + 1) + "' data-id='"+ gId +"'  data-number='"+ listDetail[2] +"' data-name='"+ listDetail[0] +"' data-batch='"+ value +"' src='gift/"+ listDetail[1] +"'></a></div>"; 
			
			$.post(fileName, function(fdata) {
				var empListArray = $.trim(fdata).split('\n');				
				empList = empListArray;		
			});
		}
		
		$('.giftList').animate({ fontSize : "1em"}, 300, function(){
			$(this).html('');
			//$(this).append('total : ' + giftList.length);
			$(this).append(concat);
		});
		
	});	
	
	$('.showmodal').show('slow', function() {
		// Animation complete.
		$(this).css('display', 'inline-block');
	});
	
	$("#container").empty();
}

function getRandom(num){
	var my_num = Math.floor(Math.random()*num);
	return my_num;
}

function removeValue2(arr, value) {
    for(var i = 0; i < arr.length; i++) {
        if(arr[1] === value) {
            return arr.splice(i, 1);
        }
    }
}



$(".giftName").live('click',function (e) {		
	
	
	if( $(".giftName").hasClass('looping') ){
		alert('After finishing draw, you can click');
		return false;
	}
	
	$(".giftName").addClass('looping');
	
	if( $(this).hasClass('selected')){
		alert('already draw');
		return false;
	}
	
	
	$(this).addClass('selected');
	
	 $("#action").val("loaded");	
	$curtainopen = false;
	$('.rope img').blur();
			
	$(".leftcurtain").stop().animate({width:'60px'}, 2000 );
	$(".rightcurtain").stop().animate({width:'60px'},2000 );		
	$curtainopen = true;
	
	if($(this).attr("src")=="gift/top10.png"){
		$('.rope img').css("height", "300px");
		$('.rope img').css("width", "300px");
		$('.rope img').css("border", "none");
		$('.rope span').hide('slow', function() {
			// Animation complete.
		});
		$('.rope div').hide('slow', function() {
			// Animation complete.
		});
	}else{
		$('.rope img').css("border", "border:5px solid #d22324");
		$('.rope span').show('slow', function() {
			// Animation complete.
		});
		$('.rope div').show('slow', function() {
			// Animation complete.
		});
	}
	
	$('.rope img').attr("src", $(this).attr("src"));
	$('.rope span').html($(this).attr("data-name"));
	
	$('#frame').show('slow', function() {
		// Animation complete.
	});
	
	var container = $("#container");		
	var loopcount = $(this).attr("data-number");
	var winnernames = "";
	
	var ItemList = new Array();	
	var concat="";
	var count = 0;
	
	for(var i = 0; i < loopcount; i++) {		
		var array_count = empList.length;
		
		var winner1 = getRandom(array_count);		 
		
		if(array_count>0 || concat!=""){
			if(empList[winner1]!=undefined){				
				count++;				
				ItemList.push(empList[winner1]);
				concat += empList[winner1] + "<div class='incontainer'></div>";	
			}
			removeValue(winner1, winner1);
		}else{
			concat = "No records found!";
		}
	}		
	concat += "Winner : "+ loopcount +" <br>";
	concat += "Draw : "+ count +" <br>";
	
	
	$('.rope').show('slow', function() {
		// Animation complete.
	});	
	
	/*var concat="";
	for( var i in ItemList){	
		concat += ItemList[i] + " <br>";
	}*/

	//alert(winnernames);
	// Shuffle the container with custom text
	container.shuffleLetters({
		"text": concat,
		"callback" : removeGiftNameclass
	});
	
	 $("#action").val("");
	 
	 
	 var itemTitle =  $(this).parent().parent().find('h4');
	 
	 
	 var param2 = itemTitle[0].innerHTML;
	 
	 
	 var param = "winner=" + concat + "&itemTitle=" + param2;
	 
	 console.log("param" + param);
	 
	$.ajax({
		data: param, 
		type:"POST",
		url: "log/saveraffle.php",
		async: false,
		success:function(msg){
			//console.log(msg);
		}
	});
});

function removeGiftNameclass(){
	$(".giftName").removeClass('looping');
}

function removeValue(from, to) {
	var rest = empList.slice((to || from)+1 || empList.length);
	empList.length = from<0 ? empList.length+from : from;
	return empList.push.apply(empList, rest);
}
