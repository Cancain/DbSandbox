//Gets all elements with the class collapseBtn
var collapseBtns = document.querySelectorAll(".collapseBtn");

//loop through all found elements
Array.from(collapseBtns).forEach(user => {
  //add event listner
  user.addEventListener("click", () => {
    //gets the number at the end of the id
    let num = user.id.substr(user.id.length - 1);

    //sets colId to the id of the targeted element
    let colId = `collapse${num}`;

    //gets the targeted element
    let colapsedElement = document.getElementById(colId);

    //if it's already collapsed, show it
    //else collapse it back again
    if (colapsedElement.classList.contains("collapse")) {
      colapsedElement.classList.remove("collapse");
    } else {
      colapsedElement.classList.add("collapse");
    }
  });
});
