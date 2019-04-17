var flkty = new Flickity( '.fullWidthGallery__slides', {
  imagesLoaded: true,
  percentPosition: false
});

var caption = document.querySelector('.flickity-caption');

console.log(caption);

flkty.on( 'select', function() {
  // set image caption using img's alt
  caption.textContent = flkty.selectedElement.alt;
  console.log(flkty.selectedElement.alt);
});