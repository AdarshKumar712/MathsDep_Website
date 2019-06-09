var button = document.getElementById('btn');
var out = document.getElementById("output")
var har = 0;
var options = {
  keys: ['id', 'name', 'address'],
  threshold: 0.3
};

var fuse_notes = new Fuse(har, options);

$("button").on("click",function(){
	
	$.getJSON("Prof_data.json",function(data){
		if (data == null)
		alert("abcgdabbjbj");
		else
		{
			har = data;
			fuse_notes = new Fuse(har,options);
		}

	})
	$("#output").append("papa ka para");
});



