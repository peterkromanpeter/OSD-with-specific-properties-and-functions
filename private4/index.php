<!DOCTYPE html>
<html>
<html lang="da">

<head>

<title>Vis arkivalie</title>
<meta name="viewport" content="width=site-width, initial-scale=1.0">
<meta charset="utf-8" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



</head>

<body>

<script>
f<script>
function updateForHash() {
  var hash = window.location.hash.replace(/^#/, '');
  if (hash && /^side/.test(hash)) {
    var hashNumber = hash.replace(/^side/, '');
    var index = parseInt(hashNumber, 10) - 1;
    viewer.goToPage(index);
  }
}
</script>






<!-- Sidebar højre-->

<div class="w3-sidebar w3-bar-block w3-card-1" style="width:25%;  right:0;background-color:#666666;  border-left: 1px solid #f6f6f6;  border-bottom: 0px solid #f6f6f6; overflow:hidden">




  
  <input type="text" style="-webkit-font-smoothing:antialiased;-webkit-transition:color .2s ease-in-out;-moz-transition:color .2s ease-in-out;-o-transition:color .2s ease-in-out;-ms-transition:color .2s ease-in-out;transition:color .2s ease-in-out;font-family: Lucida Blackletter; text-docoration:none; font-weight:bold; font-size: 34px; text-align:left; text-shadow: 5px 5px 10px #191919;color: #FFFFFF; background-color:#666666; margin-left:10px;border:none";id="my_text-input3" value="Genealogisk forum">
  <br>
  <div class="flex-container">
<div class="flex-item"><input type="text" style="font-family: arial; font-size: 12px; font-weight:normal; text-align:center; color: #e1e1e1; background-color:#666666; width: 300px; margin-left:0px;border: 1px solid #f6f6f6; ";id="my_text-input3" value="Test bog "></div> 
</div>
  <hr>
  

  

  <!-- Links i højre sidebar -->

  <a href="https://genealogiskforum.dk/"style="font-family: arial; font-weight: normal; font-size: 12px; color: lightgrey; margin-left:10px; class="w3-bar-item w3-button";>Velkommen <a/> <br>

  <a href="https://genealogiskforum.dk/slaegtstrae/"style="font-family: arial; font-weight: normal; font-size: 12px; color: lightgrey; margin-left:10px; class="w3-bar-item w3-button">Slægtstræ </a> <br>

  <a href="https://genealogiskforum.dk/dialogforum/"style="font-family: arial; font-weight: normal; font-size: 12px; color: lightgrey; margin-left:10px; class="w3-bar-item w3-button">Dialogforum </a> <br>

  <a href="https://genealogiskforum.dk/Gf_Magasin/"style="font-family: arial; font-weight: normal; font-size: 12px; color: lightgrey; margin-left:10px; class="w3-bar-item w3-button">Gf Magasin </a> <br>

  <a href="https://genealogiskforum.dk/gravsten_2/"style="font-family: arial; font-weight: normal; font-size: 12px; color: lightgrey; margin-left:10px; class="w3-bar-item w3-button">Red en gravsten </a> <br>

  <a href="https://genealogiskforum.dk/tools/"style="font-family: arial; font-weight: normal; font-size: 12px; color: lightgrey; margin-left:10px; class="w3-bar-item w3-button">Værktøjer </a> <br>

  <a href="https://genealogiskforum.dk/bestil_slaegtstrae/"style="font-family: arial; font-weight: normal; font-size: 12px; color: lightgrey; margin-left:10px; class="w3-bar-item w3-button">Bestil slægtstræ </a> <br>

  <a href="https://genealogiskforum.dk/om_gf/"style="font-family: arial; font-weight: normal; font-size: 12px; color: lightgrey; margin-left:10px; class="w3-bar-item w3-button">Om Genealogisk forum </a> <br>

  <a href="https://genealogiskforum.dk/medlemmer/"style="font-family: arial; font-weight: normal; font-size: 12px; color: lightgrey; margin-left:10px; class="w3-bar-item w3-button">Medlemmer </a> <br>

  <a href="https://genealogiskforum.dk/tips_vejledninger/"style="font-family: arial; font-weight: normal; font-size: 12px; color: lightgrey; margin-left:10px; class="w3-bar-item w3-button">Tips og vejledninger </a> <br>

  <a href="https://genealogiskforum.dk/kontakt/"style="font-family: arial; font-weight: normal; font-size: 12px; color: lightgrey; margin-left:10px; class="w3-bar-item w3-button">Kontakt </a> <br>

<br>	

<script>
function myNavi() {
    document.getElementById("navigatorDiv").innerHTML;
    
}
</script>
<body onload="myNavi()">
  
</div>



<div style="margin-right:20%">





<!-- Page Content -->





<!-- OSD start -->

<!-- Navigator for pages -->
<style> 
.flex-container {
    display: -webkit-flex;
    display: flex;
     -webkit-flex-flow: row wrap;
    flex-flow: row wrap;   
    width: site-width;
    height: 60px;
    background-color: #666666;
    margin-bottom:20px
    border-bottom: 1px solid #f6f6f6;
    margin-top: 0px;

    justify-content: center; 

}
.flex-item {
    background-color: #666666;

    height: 45px;
    
    color: #f6f6f6;
    margin-top: 13px;
    

    
}
</style>



            
</span>    





<!-- My own buttons before -->


<div class="flex-container">

<!-- First page -->	
<div class="flex-item"><input type="button" button title="Første side" style="width: 30px; text-align:center; color: #f6f6f6; background-color:#666666; border:none; margin-left:20px";id="onefirst"; onclick="firstOne()" value="|<"></div> 


 <script>
function firstOne() {
    document.getElementById("onefirst").innerHTML = viewer.goToPage(0); // First page;
}
</script>



<!-- -1 page -->
<div class="flex-item"><input type="button" button title="1 side tilbage"style="width: 30px; text-align:center; color: #f6f6f6; background-color:#666666; border:none;  margin-left:20px";id="oneminus"; onclick="minusOne()" value="<1"></div> 

 <script>
function minusOne() {
    document.getElementById("oneminus").innerHTML = viewer.goToPage(Math.max(0, viewer.currentPage() - 1)); // 1 pages before;
}
</script>

<!-- -5 pages -->
<div class="flex-item"><input type="button" button title="5 sider tilbage"style="width: 30px; text-align:center; color: #f6f6f6; background-color:#666666; border:none;  margin-left:20px";id="fiveminus"; onclick="minusFive()" value="<5"></div> 

 <script>
function minusFive() {
    document.getElementById("fiveminus").innerHTML = viewer.goToPage(Math.max(0, viewer.currentPage() - 5)); // 5 pages before;
}
</script>

<!-- -10 pages -->
<div class="flex-item"><input type="button" button title="10 sieder tilbage"style="width: 40px; text-align:center; color: #f6f6f6; background-color:#666666; border:none; margin-right:20px;  margin-left:20px";id="tenminus"; onclick="minusTen()" value="<10"></div> 

 <script>
function minusTen() {
    document.getElementById("tenminus").innerHTML = viewer.goToPage(Math.max(0, viewer.currentPage() - 10)); // 5 pages before;
}
</script>

 <!-- Input field for page search -->
  <div class="flex-item"><input type="text" style="width: 45px; text-align:right; color: #f6f6f6; background-color:#666666; border:none; margin-right:0px; margin-left:20px";id="my_text-input" value="Side"></div>

  <div class="flex-item"><input type="text" style="width: 45px; text-align:center; color: #666666; background-color:#f6f6f6; border: 1px solid black; margin-left:20px"; id="my-page-input" value="1"></div>

  <div class="flex-item"><input type="text" style="width: 45px; text-align:left; color: #f6f6f6; background-color:#666666; border:none; margin-left:20px; margin-right:20px";id="my_text-input_2" value="af 18"></div> 



   <!-- My own buttons after -->
    <!-- +1 page -->
<div class="flex-item"><input type="button" button title="1 side frem"style="width: 30px; text-align:center; color: #f6f6f6; background-color:#666666; margin-left:20px; border:none";id="oneplus"; onclick="plusOne()" value="1>"></div> 

 <script>
function plusOne() {
    document.getElementById("oneplus").innerHTML = viewer.goToPage(Math.min(viewer.tileSources.length - 1, viewer.currentPage() + 1)); // 1 pages after;
}
</script>

    <!-- +5 pages -->

  <div class="flex-item"><input type="button" button title="5 sider frem"style="width: 30px; text-align:center; color: #f6f6f6; background-color:#666666; border:none; margin-left:20px";id="fiveplus"; onclick="plusFive()" value="5>"></div> 

 <script>
function plusFive() {
    document.getElementById("fiveplus").innerHTML = viewer.goToPage(Math.min(viewer.tileSources.length - 1, viewer.currentPage() + 5)); // 5 pages after;
}
</script>

    <!-- +10 pages -->
<div class="flex-item"><input type="button" button title="10 sieder frem"style="width: 40px; text-align:center; color: #f6f6f6; background-color:#666666; border:none; margin-left:20px";id="tenplus"; onclick="plusTen()" value="10>"></div> 

 <script>
function plusTen() {
    document.getElementById("tenplus").innerHTML = viewer.goToPage(Math.min(viewer.tileSources.length - 1, viewer.currentPage() + 10)); // 10 pages after;
}
</script>

    <!-- Last page -->
<div class="flex-item"><input type="button" button title="Sidste side"style="width: 30px; text-align:center; color: #f6f6f6; background-color:#666666; border:none; margin-left:20px";id="onelast"; onclick="lastOne()" value=">|"></div> 

 <script>
function lastOne() {
    document.getElementById("onelast").innerHTML = viewer.goToPage(viewer.tileSources.length - 1); // Last page;
}
</script>  


 
</div>



<div id="openseadragon1" style="width: site-width; height:650px; border-top: 1px solid #f6f6f6;background-color:#666666";"margin: auto;></div>





<!-- OSD -->
<script src="/openseadragon/openseadragon.min.js"></script>
<script src="/openseadragon/zoomifytilesource.js"></script>



<script type="text/javascript">
    var viewer = OpenSeadragon({




        id: "openseadragon1",
        prefixUrl: "/openseadragon/images/",
	//showNavigator:  true,
	navigatorId:   "navigatorDiv",

        //navigatorPosition: "ABSOLUTE",
        //navigatorTop:      "900px",
        //navigatorLeft:     "750px",
        //navigatorHeight:   "120px",
        //navigatorWidth:    "100px",
		//navigatorPosition:   "BOTTOM_RIGHT",

	    //navigatorHeight:   "100px",
        //navigatorWidth:    "60px",

   	 sequenceMode: true,
	preserveViewport: true,
	//showReferenceStrip: true,
   	referenceStripScroll: 'horizontal',
	defaultZoomLevel: 0.3,
    visibilityRatio: 0.5,
    constrainDuringPan: true,
    // Show rotation buttons
    //showRotationControl: true,
    //zoomInButton:   "zoom-in",
    //zoomOutButton:  "zoom-out",
    homeButton:     "home",
    fullPageButton: "full-page",
    //nextButton:     "next",
    //previousButton: "previous",
    //showZoomControl: false,
    //showHomeControl: false,
    showSequenceControl: false,
    




    
    

		tileSources: [
			{
				type: "zoomifytileservice",
				width: 1191, // change width and height according your image size
				height: 1684,
				tilesUrl: "/Zoomify_images/Kauffmann/Bogen-Kaufmann,-21.-maj-2013.-revideret-001/"

			
			}, {			
				type: "zoomifytileservice",
				width: 1191, // change width and height according your image size
				height: 1684,
				tilesUrl: "/Zoomify_images/Kauffmann/Bogen-Kaufmann,-21.-maj-2013.-revideret-002/"

			}, {			
				type: "zoomifytileservice",
				width: 1191, // change width and height according your image size
				height: 1684,
				tilesUrl: "/Zoomify_images/Kauffmann/Bogen-Kaufmann,-21.-maj-2013.-revideret-003/"


			}, {			
				type: "zoomifytileservice",
				width: 1190, // change width and height according your image size
				height: 1682,
				tilesUrl: "/Zoomify_images/Postembedsmaend/Danske-Postembedsmaend-1750-1906-001/"
			}, {
				type: "zoomifytileservice",
				width: 1190, // change width and height according your image size
				height: 1682,
				tilesUrl: "/Zoomify_images/Postembedsmaend/Danske-Postembedsmaend-1750-1906-002/"
			}, {
				type: "zoomifytileservice",
				width: 1190, // change width and height according your image size
				height: 1682,
				tilesUrl: "/Zoomify_images/Postembedsmaend/Danske-Postembedsmaend-1750-1906-003/"
			}, {
				type: "zoomifytileservice",
				width: 1190, // change width and height according your image size
				height: 1682,
				tilesUrl: "/Zoomify_images/Postembedsmaend/Danske-Postembedsmaend-1750-1906-004/"
			}, {
				type: "zoomifytileservice",
				width: 1190, // change width and height according your image size
				height: 1682,
				tilesUrl: "/Zoomify_images/Postembedsmaend/Danske-Postembedsmaend-1750-1906-005/"
			}, {
				type: "zoomifytileservice",
				width: 1190, // change width and height according your image size
				height: 1682,
				tilesUrl: "/Zoomify_images/Postembedsmaend/Danske-Postembedsmaend-1750-1906-006/"
			}, {
				type: "zoomifytileservice",
				width: 1190, // change width and height according your image size
				height: 1682,
				tilesUrl: "/Zoomify_images/Postembedsmaend/Danske-Postembedsmaend-1750-1906-007/"
			}, {
				type: "zoomifytileservice",
				width: 1190, // change width and height according your image size
				height: 1682,
				tilesUrl: "/Zoomify_images/Postembedsmaend/Danske-Postembedsmaend-1750-1906-008/"
			}, {
				type: "zoomifytileservice",
				width: 1190, // change width and height according your image size
				height: 1682,
				tilesUrl: "/Zoomify_images/Postembedsmaend/Danske-Postembedsmaend-1750-1906-009/"
			}, {
				type: "zoomifytileservice",
				width: 1190, // change width and height according your image size
				height: 1682,
				tilesUrl: "/Zoomify_images/Postembedsmaend/Danske-Postembedsmaend-1750-1906-010/"

			}, {
				type: "zoomifytileservice",
				width: 1944, // change width and height according your image size
				height: 2592,
				tilesUrl: "/Zoomify_images/Test_fotos/DSC00087/"
			}, {
				type: "zoomifytileservice",
				width: 1944, // change width and height according your image size
				height: 2592,
				tilesUrl: "/Zoomify_images/Test_fotos/DSC00088/"
			}, {
				type: "zoomifytileservice",
				width: 2592, // change width and height according your image size
				height: 1944,
				tilesUrl: "/Zoomify_images/Test_fotos/DSC00089/"
			}, {

				type: "zoomifytileservice",
				width: 1944, // change width and height according your image size
				height: 2592,
				tilesUrl: "/Zoomify_images/Test_fotos/DSC00090/"
			}, {
				type: "zoomifytileservice",
				width: 3648, // change width and height according your image size
				height: 2736,
				tilesUrl: "/Zoomify_images/IMG_0480/"
			}, 
		],
		
	});




<!-- Sikrer at vi kan bruge Enter tast tl at søge efter en bestemt side -->
   var input = document.getElementById('my-page-input');
	input.addEventListener('keypress', function(event) {
        if (event.which === 13) { // Return key
            viewer.goToPage(parseInt(input.value, 10)-1);
        }
    });

    
<!-- Kigger efter at opdatere sidetallet i sidenummerboksen -->
<!-- og kigger efter at opdatere url til en individuel url -->
    viewer.addHandler("page", function (data) {
        input.value = ( data.page + 1 );
      location.hash = "side" + (data.page + 1);
  if (!location.hash.replace(/^#/, '')) {
  location.hash = "side" + (viewer.currentPage() + 1);
}    
    });

<!-- Aktiverer separat url (hash) -->
    viewer.addHandler('open', function() {
  updateForHash();
});










</script>

</div>

</body>
</html>

