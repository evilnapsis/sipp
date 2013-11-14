res = $("#result");
res.hide();
seleccion = $("#seleccion");
cnt = 0;
$("#col-1").click(function(){
	li = document.createElement("li");
	li.innerHTML = $("#col-1").html();
	li.className = "blue";
	s = li.innerHTML;
	h = document.createElement("input");h.type='hidden';h.name='c'+(cnt+1);h.value=s;
	li.appendChild(h);
	console.log(li);
	seleccion.append(li);
	$("#col-1").hide("slow");
	cnt++;
	cnt8(cnt);
});
$("#col-2").click(function(){
	li = document.createElement("li");
	li.innerHTML = $("#col-2").html();
	li.className = "green";
	s = li.innerHTML;
	h = document.createElement("input");h.type='hidden';h.name='c'+(cnt+1);h.value=s;
	li.appendChild(h);
	console.log(li);
	seleccion.append(li);
	$("#col-2").hide("slow");
	cnt++;
	cnt8(cnt);
});
$("#col-3").click(function(){
	li = document.createElement("li");
	li.innerHTML = $("#col-3").html();
	li.className = "red";
	s = li.innerHTML;
	h = document.createElement("input");h.type='hidden';h.name='c'+(cnt+1);h.value=s;
	li.appendChild(h);
	console.log(li);
	seleccion.append(li);
	$("#col-3").hide("slow");
	cnt++;
	cnt8(cnt);
});
$("#col-4").click(function(){
	li = document.createElement("li");
	li.innerHTML = $("#col-4").html();
	li.className = "yellow";
	s = li.innerHTML;
	h = document.createElement("input");h.type='hidden';h.name='c'+(cnt+1);h.value=s;
	li.appendChild(h);
	console.log(li);
	seleccion.append(li);
	$("#col-4").hide("slow");
	cnt++;
	cnt8(cnt);
});
$("#col-5").click(function(){
	li = document.createElement("li");
	li.innerHTML = $("#col-5").html();
		li.className = "violet";
	s = li.innerHTML;
	h = document.createElement("input");h.type='hidden';h.name='c'+(cnt+1);h.value=s;
	li.appendChild(h);
	console.log(li);
	seleccion.append(li);
	$("#col-5").hide("slow");
	cnt++;
	cnt8(cnt);
});
$("#col-6").click(function(){
	li = document.createElement("li");
	li.innerHTML = $("#col-6").html();
	li.className = "maroon";
	s = li.innerHTML;
	h = document.createElement("input");h.type='hidden';h.name='c'+(cnt+1);h.value=s;
	li.appendChild(h);
	console.log(li);
	seleccion.append(li);
	$("#col-6").hide("slow");
	cnt++;
	cnt8(cnt);
});
$("#col-7").click(function(){
	li = document.createElement("li");
	li.innerHTML = $("#col-7").html();
	li.className = "gray";
	s = li.innerHTML;
	h = document.createElement("input");h.type='hidden';h.name='c'+(cnt+1);h.value=s;
	li.appendChild(h);
	console.log(li);
	seleccion.append(li);
	$("#col-7").hide("slow");
	cnt++;
	cnt8(cnt);
});
$("#col-8").click(function(){
	li = document.createElement("li");
	li.innerHTML = $("#col-8").html();
	li.className = "black";
	s = li.innerHTML;
	h = document.createElement("input");h.type='hidden';h.name='c'+(cnt+1);h.value=s;
	li.appendChild(h);
	console.log(li);
	seleccion.append(li);
	$("#col-8").hide("slow");
	cnt++;
	cnt8(cnt);
});

function cnt8(cnt){
	console.log(cnt);
	if(cnt==8){
		f = document.getElementById("colors");
		c = document.createElement("input");
		c.type='hidden';
		c.name = 'reference';
		c.value = '8colors';
		f.appendChild(c);
		res.fadeIn("slow");
		rx = document.getElementById("resultados");
		res.click(function(){
			res.fadeOut("fast");
			var url = "eval.php?"+$("#colors").serialize();
			rx.innerHTML = $.get(url,function(data){
				$("#resultados").html(data);
			});
		});
	}
}