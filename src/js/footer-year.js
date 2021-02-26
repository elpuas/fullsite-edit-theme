const AddYear = ( container ) => {

    const date = new Date();
    const year = date.getFullYear();

    container.innerHTML += `<span>${year}</span>`;
}

document.addEventListener("DOMContentLoaded", function() {
    const footerContainer = document.querySelector('.footer-page');
    AddYear( footerContainer);
});

