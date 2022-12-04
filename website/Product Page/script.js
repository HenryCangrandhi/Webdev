const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage(){
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);

//Read More function
const parentContainer =  document.querySelector('.product-detail');

parentContainer.addEventListener('click', event=>{

    const current = event.target;

    const isReadMoreBtn = current.className.includes('see-more-btn');

    if(!isReadMoreBtn) return;

    const currentText = event.target.parentNode.querySelector('.see-more-text');

    currentText.classList.toggle('see-more-text--show');

    current.textContent = current.textContent.includes('See More') ? "See Less" : "See More";

})

let listrecommend = document.getElementById('listrecommend')
let recommendcard = document.getElementById('recommendcard')

console.log(listrecommend)
console.log(recommendcard)

for(let i=0; i<5; i++)
{
    let newcard = recommendcard.cloneNode(recommendcard)
    listrecommend.appendChild(newcard)
}
