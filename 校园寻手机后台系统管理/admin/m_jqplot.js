var j = {jqplot :{}};
j.jqplot.diagram = {
	base : function(document, s, xtitle, title, ticks, x_label, y_label, max, t){
		var renderer;
		if(t == 1) renderer = $.jqplot.BlockRenderer ;
		else if(t == 2) renderer = $.jqplot.BarRenderer ;
        var plot3 = $.jqplot(document, s, {
        	title: title,
			legend:{show:true,labels: xtitle},
			animate:true,
			seriesDefaults: {  
               renderer: renderer, // 利用渲染器（BarRenderer）渲染现有图表  
               pointLabels: { show: true }  
            },
			axes:{
				yaxis:{
            		label: y_label==null?"":y_label,
            		max:max
				},
				xaxis:{
					renderer: $.jqplot.CategoryAxisRenderer, // 设置横（纵）轴上数据加载的渲染器,
					ticks: ticks,
                	label: x_label==null?"":x_label
				}
			}, 
			series:[{color:'#5FAB78'}] 
        });
	}
};