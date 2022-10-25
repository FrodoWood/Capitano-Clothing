<!DOCTYPE html> 
<style>
  .column {
  float: left;
  width:47%;
  padding: 10px;
}

footer {
  text-align: left;
  padding: 3px;
  /*position:fixed;*/
  bottom:0;
  width: 100;
}

</style>
<nav>Navigation Bar will be here</nav>
<br>


<header class="header">
<h1> Capitano Clothing</h1>
  <img src="{{URL('images/drew-beamer-Vc1pJfvoQvY-unsplash.jpg')}}" alt="Banner Image" style="width:90%; height:300px"/>
</header>

<body>

<section class="ProductsOnSale">

<h2>Products on Sale</h2> 
<div class="Products">
  <img src="{{url('images/sale1.jpg')}}"alt="On Sale" style= "width: 50%; height:250px">
    <div class="text">Hurry up and grab our products at a discounted price! For a limited time only. 
      Offering quality at an affordable price. Browse through to see our amazing collection </div>
  </div>

  <div class="Products">
    <img src="{{URL('images/download.jpg')}}" alt="On Sale" style= "width: 50%; height:250px">
    <div class="text">Product Description</div>
  </div>

  <div class="Products">
    <img src="{{URL('images/sale.jpg')}}" alt="On Sale" style= "width: 50%; height:250px">
    <div class="text">Product Description</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="previous" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  
  <!--USE BOOTSTRAP-->

  


<!-- put in a separate js file then link-->
<!--it doesnt work when I put it in a separate page-->

<script>
let Index = 1;
displaySlides(Index);

// Next& previous controls
function plusSlides(n) {
  displaySlides(Index += n);
}



function displaySlides(n) {
  let slides = document.getElementsByClassName("Products");
  if (n > slides.length) {Index = 1}
  if (n < 1) {Index = slides.length}
  for (let index = 0; index < slides.length; index++) {
    slides[index].style.display = "none";
  }
  slides[Index-1].style.display = "block";
  
}

</script>

</section>

<br><br>
<section class="companyNews">
  <div class="row">
   <div class="column">
     <h2>New Launch</h2>
     <p>Capitano Clothing launches a brand new collection of leggins in collaboration with award winning designer Regina Geller.</p>
   </div>
   <div class="column">
     <h2>Giving back to the community</h2>
     <p>To celebrate its two year anniversary since opening, capitano clothing orgarnised a charity fair. The company raised £100 thousand pounds to support homeless people.</p>
   </div>
 </div>

</section>
</body>

<br><br><br><br>

<footer>
 
  <a href=" https://www.instagram.com/capitano.clothing_/"> Instagram</a>
  <a href="//twitter.com/CapitanoCloth"> Twitter </a>
   <img src="{{URL('images/copyright.jpg')}}"  alt="copyright" style="width:150px" /> 
</footer>
