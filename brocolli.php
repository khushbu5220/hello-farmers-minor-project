<!DOCTYPE html>
<html>
<head>
<title>Brocolli</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{ margin: 0; padding: 0;}

header{
width: 100%;
height: 350%;
background-image: linear-gradient(to left, #fff 80%, #2DF90E 20%);
}
.navsection{
width: 100%;  background-color: orange;
display: flex; justify-content: space-around;
align-item: center;
background-image: linear-gradient(to top, #fff 60%, #2DF90E 40%);
}
.logo{
width: 40%;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
color: #fff;
background-image: linear-gradient(#FFA500 40%, #FF8C00 60%);
padding-left: 100px;
box-sizing: border-box;
}
.logo h3{
text-transform: uppercase;
font-size: 1.5rem;
animation: aagepichhe 2s linear infinite;
animation-direction: alternate;
}
@keyframes aagepichhe{
from{ padding-left: 40%; }
to{ padding-right: 40%; }
}
nav{

width: 60%;
display: flex;
justify-content: space-around;
  border-color: #0000;
}
nav img{
border-radius: 50% 50% 50% 50% / 50% 50% 50% 50% ;
border: visible;
  display: inline-block;
  border-color: #000;
}
.translator {
text-align: right;
}
.accordion {
  background: linear-gradient(to bottom,blue,white);;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: center;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background: linear-gradient(to bottom,lightblue,white);
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

table , th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left; 
  }
  tr:nth-child(odd) {background-color: blueviolet;}
  tr:nth-child(even) {background-color: mediumslateblue;}
.container {
 color: #000;
 }
 .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button1 {
  background-color: white;
  color: black;
  border: 2px solid #FF69B4;
}

.button1:hover {background-color: #FF69B4;}
.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
p{ text-align:center;}
.zoom {
  padding: 50px;
  transition: transform .2s;
  width: 200px;
  height: 200px;
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}
a {
	text-decoration: none;
}
</style>
</head>
<body>
<header>
<section class="navsection">
<div class="logo">
<h3>BROCOLLI</h3>
</div>
<br>
<nav>
<br>
<br>
<a href = "https://www.accuweather.com/">
<img alt="weather" src="wheather.jfif" width="70" height="70">
<br> Weather
</a>
<br><br>
</nav>
</section>
<h4 style="text-align: right;">Translate this page: &nbsp&nbsp</h4>

<div id="google_translate_element" class="translator"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript">
(function(){var gtConstEvalStartTime = new Date();/*

 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
function d(b){var a=document.getElementsByTagName("head")[0];a||(a=document.body.parentNode.appendChild(document.createElement("head")));a.appendChild(b)}function _loadJs(b){var a=document.createElement("script");a.type="text/javascript";a.charset="UTF-8";a.src=b;d(a)}function _loadCss(b){var a=document.createElement("link");a.type="text/css";a.rel="stylesheet";a.charset="UTF-8";a.href=b;d(a)}function _isNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)if(!(a=a[b[c]]))return!1;return!0}
function _setupNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)a.hasOwnProperty?a.hasOwnProperty(b[c])?a=a[b[c]]:a=a[b[c]]={}:a=a[b[c]]||(a[b[c]]={});return a}window.addEventListener&&"undefined"==typeof document.readyState&&window.addEventListener("DOMContentLoaded",function(){document.readyState="complete"},!1);
if (_isNS('google.translate.Element')){return}(function(){var c=_setupNS('google.translate._const');c._cest = gtConstEvalStartTime;gtConstEvalStartTime = undefined;c._cl='en';c._cuc='googleTranslateElementInit';c._cac='';c._cam='';c._ctkk='445303.2143855006';var h='translate.googleapis.com';var s=(true?'https':window.location.protocol=='https:'?'https':'http')+'://';var b=s+h;c._pah=h;c._pas=s;c._pbi=b+'/translate_static/img/te_bk.gif';c._pci=b+'/translate_static/img/te_ctrl3.gif';c._pli=b+'/translate_static/img/loading.gif';c._plla=h+'/translate_a/l';c._pmi=b+'/translate_static/img/mini_google.png';c._ps=b+'/translate_static/css/translateelement.css';c._puh='translate.google.com';_loadCss(c._ps);_loadJs(b+'/translate_static/js/element/main.js');})();})();
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script><br><br>


<p>In India, broccoli farming is a boom for the rural economy. It is a cool season crop and can be grown in spring season. It is a rich source of nutrition such as iron, calcium and vitamins. The crop contains 3.3% of protein content and high content of Vitamin A and C. It also contains substantial amount of riboflavin, niacin and thiamine and also contains high concentration of carotenoids. It is mainly used for salad purpose and can be eaten by lightly steaming it. It is mainly marketed fresh, frozen or as a salad. </p><br>
<div style="float:right" class="zoom"><img alt="brocolli" src="brocolli1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>For vigorous and proper growth, broccoli requires moist soil. Well drained soil which contains good fertilizer content is ideal for broccoli farming. pH having 5.0-6.5 is optimum for broccoli cultivation.</p>
</div>
<br>
<button class="accordion" style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
The optimum for seed sowing is mid-August to mid-September.<br>
<b>Spacing</b><br>
Use line to line spacing of 45 X 45cm.<br> 
<b>Sowing Depth</b><br>
Seeds are sown 1-1.5cm deep.<br>
<b>Method of Sowing</b><br>
Sowing can be done by line sowing and broadcasting method.</p>
</div>
<br>
<button class="accordion" style="width:75%">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
Use 250gm of seeds for sowing in one acre land.<br>
<b>Seed Treatment</b><br>
Before sowing seeds are treated with hot water (58oC) for 30 minutes to protect seeds from soil borne diseases.<br></p>
</div>
<br>
<button class="accordion" style="width:75%">Fertilizer</button>
<div class="panel">
<center>
<b>Fertilizer Requirement (kg/acre)</b><br>
<table style="width:50%">
  <tr>
    <th>UREA</th>
    <th>SSP</th>
	<th>MURIATE OF POTASH</th>
  </tr>
  <tr>
    <td>110</td>
    <td>155</td>
    <td>40</td>
  </tr>
</table> <br>
<b>Nutrient Requirement (kg/acre)</b>
<table style="width:50%">
  <tr>
    <th>NITROGEN</th>
    <th>PHOSPHORUS</th>
	<th>POTASH</th> 
  </tr>
  <tr>
    <td>50</td>
    <td>25</td>
    <td>25</td>
  </tr>
</table></center>
<br> 
<p>Apply FYM@40tonnes. Along with FYM apply fertilizer dose of nitrogen@50kg/acre in the form of urea@110kg/acre, phosphorus@25kg/acre in the form of SSP@155kg/acre and Potassium@25kg/acre in the form of MOP@40kg/acre. Full dose of FYM, phosphorus and potassium and half dose of Nitrogen is added before transplanting. Rest of the nitrogen dose is added after one month of transplanting.</p>
</div>
<br>
<button>
<a href="https://www.flipkart.com/airex-cauliflower-broccoli-knol-khol-purple-viena-vegetables-seed-humic-acid-fertilizer-for-growth-all-plant-better-responce-15-gm-pack-30-cauliflower-broccoli/p/itmf3ya5acyghtfm" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>Immediately after transplanting, give first irrigation. Depending upon soil, climatic condition, apply irrigation at interval of 7-8 days in summer season and 10-15 days during winter season.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>To check weed control, apply Fluchloralin (Basalin) 1-2 litre/600-700 litre water before transplantation followed by hand weeding 30 to 40 days after transplanting. Apply Pendimethalin@1 litre/acre one day before transplanting of seedlings.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><br><b> Pest and their Control</b><br><br>
i.<b>Thrips: </b>These are the small insects which pale yellow to light brown in color and the symptoms are distorted leaves, and silvery leaves are seen.<br>
<b>Treatment: </b>If aphids and jassids harms more, then spraying of Imidachloprid 17.8 SL 60ml per acre in 150ltr water should be done.<br>
ii.<b>Nematodes:</b> The symptoms are reduction in plant growth and yellowing of plant.<br>
<b>Treatment:</b> if infestation is seen then broadcasting of Forate@5kg or Carbofuran@10kg for per acre land should be done.<br>
iii.<b>Diamond back moth:</b> The larva feeds on upper and lower surface of the leaves and as a result it damages the whole plant.<br>
<b>Treatment:</b> if infestation is seen then spraying of Spinosad 25% SC 80ml/150ltr water for per acre land should be done.<br>
<br><b>Disease and their control:</b><br><br>
i.<b>White mold:</b> It is caused by Sclerotinia sclerotiorum. The symptoms are irregular and grey color lesions are seen on the leaves and stem.<br>
<b>Treatment: </b>if infestation is seen in the field then spraying of Metalaxyl + Mancozeb @2gm/ltr water should be done at the interval of 10 days.<br>
ii.<b>Damping off:</b> It is caused by Rhizoctonia solani. The symptoms are immediate death of seedlings after germination and brown-red or black color rot is seen on the stem.<br>
<b>Treatment:</b> Add Ridomil gold@2.5gm/ltr in roots should be done and after that irrigation is given when required. Don’t let the water stand in the field.<br>
iii.<b>Downy mildew:</b> The symptoms are small angular lesions which are orange or yellow in color are seen on the lower surface of the leaves.<br>
<b>Treatment: </b>If infestation is seen then spraying with Metalaxyl 8% + Mancozeb 64% WP @250gm/150ltr should be done.<br>
iv.<b>Ring spots:</b> Small and purple color spots are seen on leaves which turns brown at maturity.<br>
<b>Treatment:</b> If infestation is seen then spraying with Metalaxyl 8% + Mancozeb 64% WP @250gm/150ltr should be done.<br>
</p>
</div>
<br>
<button>
<a href="https://www.shopclues.com/3in1-organic-pesticide-for-plant-and-garden-fruit-flower-vegetable--also-indoor-home--insecticide-spray-148279709.html?ef_id=Cj0KCQiAzZL-BRDnARIsAPCJs73A7clPH47Nt7jpI_GjYe68TkumzSA1IMYqpXNOlQE5u7Y5NN9e3CUaAgwIEALw_wcB:G:s&s_kwcid=AL!725!3!400307752958!!!u!844500482521!&mcid=ps&utm_source=Google&utm_medium=Shopping&utm_campaign=PLA_Smart_Shopping_All_Products_Delhi&utm_term=" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Broccoli harvesting is mainly done when heads reaches the marketable size. After harvesting they should be marketed as soon as possible because they can’t be stored for a longer time. After harvesting, sprouts again get ready for harvesting after 10-12 days.</p>
</div><br>
<button class="accordion">Seed Production</button>
<div class="panel">
<p>Keep isolation distance of 1600 m from Cole crops and other different varieties of broccoli. Skip one row after every five rows; it is essential for field inspection. Remove disease plant; also remove plant showing variation in leaf characteristic. Harvest crop when pods turn brown. Harvesting should be done 2-3 times. After harvesting keep plant in field for curing and drying purpose for a week. After proper drying, for seed purpose, threshing of crop is to be done.</p>
</div><br>
<div class="zoom">
<img alt="brocolli" src="brocolli2.jpg">

</div><br><br><br><br>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
</header>
</body>
</html>
