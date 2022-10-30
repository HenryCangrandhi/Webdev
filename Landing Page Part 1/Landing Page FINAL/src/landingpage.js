let filterCategories = document.querySelector('#filterCategories')
let filterBlocksDiv = document.createElement('div')
let breakElement = document.createElement('br')
let filterCategoryBlock = document.body.querySelector('#square2')
filterCategories.appendChild(filterBlocksDiv)

filterBlocksDiv.style.display = 'flex'

for(let i=0; i<4; i++)
{
    let newBlock = filterCategoryBlock.cloneNode(true);
    let mySelect = newBlock.querySelector('select')
    mySelect.style.marginTop = '30px'
    mySelect.style.marginLeft = '50px'
    mySelect.style.borderRadius = '10px'
    mySelect.style.fontSize = '20px'
    mySelect.style.fontWeight = 'bold'

    switch(i)
    {
        case 1:
            {
                mySelect.id = 'filterRating'
                mySelect[0].innerHTML = 'Filter by Rating'
                mySelect[1].innerHTML = 'Bad'
                mySelect[2].innerHTML = 'Good'
                
                break;
            }

        case 2:
            {
                mySelect.id = 'filterName'
                mySelect[0].innerHTML = 'Filter by Name'
                mySelect[1].innerHTML = 'We Lose'
                mySelect[2].innerHTML = 'We Win'
                break;
            }

        case 3:
            {
                mySelect.id = 'filterDifficulty'
                mySelect[0].innerHTML = 'Filter by Difficulty'
                mySelect[1].innerHTML = 'Easy'
                mySelect[2].innerHTML = 'Hard'
                break;
            }
        default:
            {
                break;
            }
    }
    
    filterBlocksDiv.appendChild(newBlock)
}


filterCategories.removeChild(filterCategoryBlock)

filterBlocksDiv.style.display = 'grid'
filterBlocksDiv.style.gridTemplateColumns ='550px auto'
filterBlocksDiv.style.rowGap = '50px'
filterBlocksDiv.style.marginTop = '20px'


console.log(filterCategories)