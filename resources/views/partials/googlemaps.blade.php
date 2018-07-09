<div style="height: 440px;">	
	<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyBavJAb2lIRWLOXFD0CiKDX_T5xKzUiqL0" type="text/javascript"></script>
		<script type="text/javascript">
			//<![CDATA[
			function load() 
			{
				if (GBrowserIsCompatible()) 
				{
					var map = new GMap2(document.getElementById("map"));
					var marker = new GMarker(new GLatLng(52.429403812842, 4.912361204624176));
					
					map.setCenter(new GLatLng(52.429403812842, 4.912361204624176), 13);
					map.addControl(new GSmallMapControl());
					map.addOverlay(marker);
					
					var popuptext = "<strong>LComp Automatisering</strong><br>Burgermeester Postweg 5A<br>1121 JA Landsmeer<br>Tel. 020 - 482 4440<br>Fax. 020 - 482 2202<br>e-mail: <a href=info@lcomp.nl>info@lcomp.nl</a><br>K.v.K. te Amsterdam onder nummer: 70424179</p>";
					marker.openInfoWindowHtml(popuptext);
					GEvent.addListener(marker, "click", function() {marker.openInfoWindowHtml(popuptext);});					
				}
			}
			//]]>
		</script>           
		
	<body  onload="load()" onUnload="GUnload()">
					<div id="map" style="width:560px;height:420px; display: block; float: left;"></div>
</div>