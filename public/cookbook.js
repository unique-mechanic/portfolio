//---------------------- All scripts for cookbook's page---------------------------//

const recipes = [];
const ingredients = [];

function displaySearchTerm(){
    let recipeSearchTerm = document.getElementById("searchbox").value;
    document.getElementById("optional").innerHTML = recipeSearchTerm;
    console.log(recipeSearchTerm);
}
