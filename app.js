
function search() {
    // var searchTerm = document.getElementById('searchInput').value;
    alert('Mafeesh database');
}

function checkEnter(event) {
    if (event.key === 'Enter') {
        search();
    }
}


const boxes = document.querySelectorAll('.box');
window.addEventListener('scroll',checkBoxes);

checkBoxes();

function checkBoxes()
{
    const triggerbottom = window.innerHeight  / 5 * 4;
    
    boxes.forEach( box =>{const boxtop = box.getBoundingClientRect().top;
    
    if(boxtop < triggerbottom)
    {
        box.classList.add('show');
    }
    else
    {
        box.classList.remove('show');
    }
});
}

