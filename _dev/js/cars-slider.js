const images = document.querySelectorAll('.cars-image > img');
const descriptionsOnRight = document.querySelectorAll('.cars-description-right-text');
const descriptionsOnBottom = document.querySelectorAll('.cars-description-bottom-text');
const buttons = document.querySelectorAll('.cars-buttons > button');

// liczba dzieci w każdym pobranym elemencie 
const containerChildrenNumber = 4;

const changeElementClass = (elements, baseIndex) => {
    let activeIndexes = [];

    while(baseIndex < elements.length) {
        activeIndexes.push(baseIndex);
        baseIndex = baseIndex + containerChildrenNumber;
    }

    elements.forEach(image => {
        image.classList.remove('active');
    });
    
    for(let i = 0; i < activeIndexes.length; i++) {
        elements[activeIndexes[i]].classList.add('active');
    }
}

buttons.forEach((button, idx) => {
    button.addEventListener('click', () => {
        changeElementClass([
            ...images,
            ...descriptionsOnRight,
            ...descriptionsOnBottom,
            ...buttons
        ], idx);
    })
})