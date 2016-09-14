<head>
    
    <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="js/sol.js"></script>
	<script src="js/sol.js"></script>
	<link href="js/sol.css" rel="stylesheet">
</head>

<!-- searchable option list javascript -->

										
										
										<select id="my-select" name="character" onchange="changeFunc();">
										    <option value="0">Guest Name</option>
											<option value="Peter">Peter Griffin</option>
											<option value="Lois">Lois Griffin</option>
											<option value="Chris">Chris Griffin</option>
											<option value="Meg">Meg Griffin</option>
											<option value="Stewie">Stewie Griffin</option>
											<option value="Cleveland">Cleveland Brown</option>    
											<option value="Joe">Joe Swanson</option>    
											<option value="Quagmire">Glenn Quagmire</option>    
											<option value="Evil Monkey">Evil Monkey</option>
											<option value="Herbert">John Herbert</option>   
<option value="0">Guest Name</option>
											<option value="Peter">Peter Griffin</option>
											<option value="Lois">Lois Griffin</option>
											<option value="Chris">Chris Griffin</option>
											<option value="Meg">Meg Griffin</option>
											<option value="Stewie">Stewie Griffin</option>
											<option value="Cleveland">Cleveland Brown</option>    
											<option value="Joe">Joe Swanson</option>    
											<option value="Quagmire">Glenn Quagmire</option>    
											<option value="Evil Monkey">Evil Monkey</option>
											<option value="Herbert">John Herbert</option>    
<option value="0">Guest Name</option>
											<option value="Peter">Peter Griffin</option>
											<option value="Lois">Lois Griffin</option>
											<option value="Chris">Chris Griffin</option>
											<option value="Meg">Meg Griffin</option>
											<option value="Stewie">Stewie Griffin</option>
											<option value="Cleveland">Cleveland Brown</option>    
											<option value="Joe">Joe Swanson</option>    
											<option value="Quagmire">Glenn Quagmire</option>    
											<option value="Evil Monkey">Evil Monkey</option>
											<option value="Herbert">John Herbert</option>    											
										</select>
<script type="text/javascript">
    $(function() {
        // initialize sol
        $('#my-select').searchableOptionList({
			maxHeight: '250px'
			
		});
		
    });
	
	function changeFunc() {
    var selectBox = document.getElementById("my-select");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    alert(selectedValue);
   }
	
</script>
										
