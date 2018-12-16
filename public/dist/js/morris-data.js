/*Morris Init*/
$(function() {
	"use strict";
	
    if($('#morris_area_chart').length > 0)
		// Area Chart
		Morris.Area({
			element: 'morris_area_chart',
			data: [{
				period: '2010 Q1',
				iphone: 2666,
				ipad: null,
				itouch: 2647
			}, {
				period: '2010 Q2',
				iphone: 2778,
				ipad: 2294,
				itouch: 2441
			}, {
				period: '2010 Q3',	
				iphone: 4912,
				ipad: 1969,
				itouch: 2501
			}, {
				period: '2010 Q4',
				iphone: 3767,
				ipad: 3597,
				itouch: 5689
			}, {
				period: '2011 Q1',
				iphone: 6810,
				ipad: 1914,
				itouch: 2293
			}, {
				period: '2011 Q2',
				iphone: 5670,
				ipad: 4293,
				itouch: 1881
			}, {
				period: '2011 Q3',
				iphone: 4820,
				ipad: 3795,
				itouch: 1588
			}, {
				period: '2011 Q4',
				iphone: 15073,
				ipad: 5967,
				itouch: 5175
			}, {
				period: '2012 Q1',
				iphone: 10687,
				ipad: 4460,
				itouch: 2028
			}, {
				period: '2012 Q2',
				iphone: 8432,
				ipad: 5713,
				itouch: 1791
			}],
			xkey: 'period',
			ykeys: ['iphone', 'ipad', 'itouch'],
			labels: ['iPhone', 'iPad', 'iPod Touch'],
			pointSize: 0,
			pointStrokeColors:['#177ec1', '#dc4666', '#e69a2a'],
			behaveLikeLine: true,
			gridLineColor: '#878787',
			lineWidth: 0,
			smooth: true,
			hideHover: 'auto',
			lineColors: ['#177ec1', '#dc4666', '#e69a2a'],
			resize: true,
			gridTextColor:'#878787',
			gridTextFamily:"Roboto",
		});

    if($('#morris_donut_chart').length > 0) {
		// Donut Chart
		Morris.Donut({
			element: 'morris_donut_chart',
			data: [{
				label: "Download Sales",
				value: 12
			}, {
				label: "In-Store Sales",
				value: 30
			}, {
				label: "Mail-Order Sales",
				value: 20
			}],
			colors: ['#177ec1', '#dc4666', '#e69a2a'],
			resize: true,
			labelColor: '#878787',
		});
		$("div svg text").attr("style","font-family: Roboto").attr("font-weight","400");
	}	

    if($('#morris_line_chart').length > 0)
		// Line Chart
		Morris.Line({
			// ID of the element in which to draw the chart.
			element: 'morris_line_chart',
			// Chart data records -- each entry in this array corresponds to a point on
			// the chart.
			data: [{
				d: '2012-10-01',
				visits: 802
			}, {
				d: '2012-10-02',
				visits: 783
			}, {
				d: '2012-10-03',
				visits: 820
			}, {
				d: '2012-10-04',
				visits: 839
			}, {
				d: '2012-10-05',
				visits: 792
			}, {
				d: '2012-10-06',
				visits: 859
			}, {
				d: '2012-10-07',
				visits: 790
			}, {
				d: '2012-10-08',
				visits: 1680
			}, {
				d: '2012-10-09',
				visits: 1592
			}, {
				d: '2012-10-10',
				visits: 1420
			}, {
				d: '2012-10-11',
				visits: 882
			}, {
				d: '2012-10-12',
				visits: 889
			}, {
				d: '2012-10-13',
				visits: 819
			}, {
				d: '2012-10-14',
				visits: 849
			}, {
				d: '2012-10-15',
				visits: 870
			}, {
				d: '2012-10-16',
				visits: 1063
			}, {
				d: '2012-10-17',
				visits: 1192
			}, {
				d: '2012-10-18',
				visits: 1224
			}, {
				d: '2012-10-19',
				visits: 1329
			}, {
				d: '2012-10-20',
				visits: 1329
			}, {
				d: '2012-10-21',
				visits: 1239
			}, {
				d: '2012-10-22',
				visits: 1190
			}, {
				d: '2012-10-23',
				visits: 1312
			}, {
				d: '2012-10-24',
				visits: 1293
			}, {
				d: '2012-10-25',
				visits: 1283
			}, {
				d: '2012-10-26',
				visits: 1248
			}, {
				d: '2012-10-27',
				visits: 1323
			}, {
				d: '2012-10-28',
				visits: 1390
			}, {
				d: '2012-10-29',
				visits: 1420
			}, {
				d: '2012-10-30',
				visits: 1529
			}, {
				d: '2012-10-31',
				visits: 1892
			}, ],
			// The name of the data record attribute that contains x-visitss.
			xkey: 'd',
			// A list of names of data record attributes that contain y-visitss.
			ykeys: ['visits'],
			// Labels for the ykeys -- will be displayed when you hover over the
			// chart.
			labels: ['Visits'],
			// Disables line smoothing
			pointSize: 1,
			pointStrokeColors:['#177ec1'],
			behaveLikeLine: true,
			gridLineColor: '#878787',
			gridTextColor:'#878787',
			lineWidth: 2,
			smooth: true,
			hideHover: 'auto',
			lineColors: ['#177ec1'],
			resize: true,
			gridTextFamily:"Roboto"
		});

	if($('#morris_bar_chart').length > 0)
	   // Bar Chart
		Morris.Bar({
			element: 'morris_bar_chart',
			data: [{
				device: 'السبت',
				geekbench: 136
			}, {
				device: 'الاحد',
				geekbench: 137
			}, {
				device: 'الاثنين',
				geekbench: 275
			}, {
				device: 'الثلاثاء',
				geekbench: 380
			}, {
				device: 'الاربعاء',
				geekbench: 655
			}, {
				device: 'الخميس',
				geekbench: 1571
			},{
				device: 'الجمعة',
				geekbench: 71
			}],
			xkey: 'device',
			ykeys: ['geekbench'],
			labels: ['العدد'],
			barRatio: 0.4,
			xLabelAngle: 35,
			pointSize: 1,
			pointStrokeColors:['#e69a2a'],
			behaveLikeLine: true,
			gridLineColor: '#878787',
			gridTextColor:'#878787',
			hideHover: 'auto',
			barColors: ['#e69a2a'],
			resize: true,
			gridTextFamily:"Roboto"
		});
	
	if($('#morris_extra_line_chart').length > 0)
		Morris.Line({
        element: 'morris_extra_line_chart',
        data: [{
            period: '2010',
            iphone: 50,
            ipad: 80,
            itouch: 20
        }, {
            period: '2011',
            iphone: 130,
            ipad: 100,
            itouch: 80
        }, {
            period: '2012',
            iphone: 80,
            ipad: 60,
            itouch: 70
        }, {
            period: '2013',
            iphone: 70,
            ipad: 200,
            itouch: 140
        }, {
            period: '2014',
            iphone: 180,
            ipad: 150,
            itouch: 140
        }, {
            period: '2015',
            iphone: 105,
            ipad: 100,
            itouch: 80
        },
         {
            period: '2016',
            iphone: 250,
            ipad: 150,
            itouch: 200
        }],
        xkey: 'period',
        ykeys: ['iphone', 'ipad', 'itouch'],
        labels: ['iPhone', 'iPad', 'iPod Touch'],
        pointSize: 2,
        fillOpacity: 0,
		lineWidth:2,
		pointStrokeColors:['#177ec1', '#dc4666', '#e69a2a'],
		behaveLikeLine: true,
		gridLineColor: '#878787',
		hideHover: 'auto',
		lineColors: ['#177ec1', '#dc4666', '#e69a2a'],
		resize: true,
		gridTextColor:'#878787',
		gridTextFamily:"Roboto"
        
    });
	
	if($('#morris_extra_bar_chart').length > 0)
		// Morris bar chart
		Morris.Bar({
			element: 'morris_extra_bar_chart',
			data: [ 
                {
				y: 'نسبة دخول الطلاب',
				a: 78.8,
				b: 20
			}, {
				y: 'نسبة تفاعل الطلاب مع المعلمين ',
				a: 75,
				b: 65
			}, {
				y: 'نسبة دخول المعلمين',
				a: 100,
				b: 90
			}],
			xkey: 'y',
			ykeys: ['a', 'b',],
			labels: ['A', 'B'],
			barColors:['#177ec1', '#dc4666'],
			hideHover: 'auto',
			gridLineColor: '#878787',
			resize: true,
			gridTextColor:'#878787',
			gridTextFamily:"Roboto",
            
            
		});
    
    if($('#morris_plus_bar_chart').length > 0)
		// Morris bar chart
		Morris.Bar({
			element: 'morris_plus_bar_chart',
			data: [
                {
				y: 'عدد الكائنات التعليمية',
				a: 78.8,
				b: 20,
				c: 20,
				d: 28,
				e: 40,
				f: 60,
				g: 80,
				h: 100
			},
                   {
				y: 'نسبة دخول المعلمين',
				a: 78.8,
				b: 20,
				c: 50,
				d: 56,
				e: 80,
				f: 60,
				g: 20,
				h: 20
			},
                {
				y: 'نسبة دخول الطلاب',
				a: 10,
				b: 5,
				c: 6,
				d: 9,
				e: 15,
				f: 17,
				g: 18,
				h: 20
			}],
			xkey: 'y',
			ykeys: ['a', 'b','c','d','e','f','g','h','l'],
			labels: ['A', 'B','C','D','E','F','G','H','L'],
			barColors:['#177ec1', '#dc4666','#e69a2a','#91ed7f','#8284eb','#e5d255','#2d8f91','#f8a35d','#444249'],
			hideHover: 'auto',
			gridLineColor: '#878787',
			resize: true,
			gridTextColor:'#878787',
			gridTextFamily:"Roboto"
		});
    	

});
