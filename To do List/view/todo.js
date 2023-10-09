let taskcontainer = document.getElementById("taskcontainer");
let todo = document.getElementById("todo");
let save = document.getElementById("save");

let html = "";
save.addEventListener("click", function () {
  if (todo.value != "")
    html += `<li class="row">${todo.value}<button id="remove">remove</button> 
     <button type="submit" id="edit">Edit</button></li>`;
  taskcontainer.innerHTML = html;
  todo.value = "";
});
