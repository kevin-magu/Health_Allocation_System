// You can dynamically add images to the scrolling background
const imageContainer = document.querySelector('.scrolling-background');

const imageSources = [
  'url(' + '/images/steth.png' + ')',
  /*'url(' + 'image2.jpg' + ')',
  'url(' + 'image3.jpg' + ')',*/
  // Add more image URLs as needed
];

imageSources.forEach((source, index) => {
  const img = new Image();
  img.src = source;
  img.onload = () => {
    imageContainer.style.backgroundImage = imageContainer.style.backgroundImage + `, ${source}`;
  };
});
