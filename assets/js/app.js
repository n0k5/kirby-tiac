// Loop through all galleries on the page and add flickity to them
var fullWidthGalleryElems = document.querySelectorAll('.gallery--slides');
for(var i = 0, len = fullWidthGalleryElems.length; i < len; i++) {
  var galleryElem = fullWidthGalleryElems[i];
  var flkty = new Flickity(galleryElem, {
    imagesLoaded: true,
    percentPosition: false
  });
}

// // Add captions
// var captionElems = document.querySelectorAll('.flickity-caption');
// for(var i = 0, len = captionElems.length; i < len; i++) {
//   var captionElem = captionElems[i];
//   flkty.on('select', function() {
//     caption.textContent = flkty.selectedElement.alt; // set image caption using img's alt
//   });
// }