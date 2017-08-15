<!DOCTYPE html>
<html>
<html lang="da">

<head>

<title>W3.CSS</title>
<meta name="viewport" content="width=site-width, initial-scale=1.0">
<meta charset="utf-8" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



</head>

<body>





<script>
function updateForHash() {
  var hash = window.location.hash.replace(/^#/, '');
  if (hash && /^page /.test(hash)) {
    var hashNumber = hash.replace(/^side /, '');
    var index = parseInt(hashNumber, 10) - 1;
    viewer.goToPage(index);
  }
}
</script>



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


<div class="flex-container">

<!-- My own buttons before -->




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

  <div class="flex-item"><input type="text" style="width: 55px; text-align:left; color: #f6f6f6; background-color:#666666; border:none; margin-left:20px; margin-right:20px";id="my_text-input_2" value="af 214"></div> 



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


 
<div id="openseadragon1" style="width: site-width; height: 600px; border-top: 1px solid #f6f6f6;background-color:#666666";"margin: auto;></div>





<!-- OSD -->
<script src="/openseadragon/openseadragon.min.js"></script>
<script src="/openseadragon/zoomifytilesource.js"></script>



<script type="text/javascript">
    var viewer = OpenSeadragon({
    tileSources: {
    type: 'image',
    url: OpenSeadragon.getUrlParameter('img')
  },
        id: "openseadragon1",
        prefixUrl: "/openseadragon/images/",
  
     sequenceMode: true,
     preserveViewport: true,
     defaultZoomLevel: 0.3,
     visibilityRatio: 0.5,
     constrainDuringPan: true,
     homeButton:     "home",
     fullPageButton: "full-page",
     showSequenceControl: false,
  });



<script type="text/javascript">
   var input = document.getElementById('my-page-input');

    input.addEventListener('keypress', function(event) {
        if (event.which === 13) { // Return key
            viewer.goToPage(parseInt(input.value, 10)-1);
        }
    });

    viewer.addHandler("page", function (data) {
        input.value = ( data.page + 1 );
    });

        viewer.addHandler("page", function (data) {
        input.value = ( data.page + 1 );
      location.hash = "side" + (data.page + 1);
  if (!location.hash.replace(/^#/, '')) {
  location.hash = "side" + (viewer.currentPage() + 1);
}    
    });

     viewer.addHandler('open', function() {
  updateForHash();
});
   

  viewer.open({
  type: 'image',
  url: 'http://ao.sa.dk/ao/data.ashx?bid=24530382'
});
      
</script>




</body>

</html>

