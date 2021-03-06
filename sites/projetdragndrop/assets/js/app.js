
let itemsContainer = document.getElementById("items-container");
let todosContainer = document.getElementById("todos-container");
let users = document.getElementsByClassName("user");

// Je boucle sur les utilisateurs
for(let i = 0; i < users.length; i++) {
    let item = users[i];
    // Actions lors du clic
    item.addEventListener("mousedown", (e) => { onMouseDown(e, item); });
    // Déplacement dans le BODY
    document.body.addEventListener("mousemove", (e) => {
        onMouseMove(e, item);
    });
    //Actions lors du laché de clic
    item.addEventListener("mouseup", (e) => {
      onMouseUp(e, item);
    });
  }

  //Mouse Down
function onMouseDown(e, item) {
    isMouseDown = true;
    currentTodo = item;
    mouseOffset = {
      x: item.offsetLeft - e.clientX,
       y: item.offsetTop - e.clientY
      };
    item.style.backgroundColor = "#E57373";
    item.style.transform = "scale(1.1)";
  }
  //Mouse Up 
  function onMouseUp(e, item) {
    isMouseDown = false;
    item.style.backgroundColor = "#F44336";
    item.style.transform = "scale(1)";
  }

  function onMouseMove(e, item) {
    e.preventDefault(); ///< Stops the Default Element Bahiavor 
    if(isMouseDown) {
      //Move Item only when mouse is down 
      item.style.left = e.clientX + mouseOffset.x + "px";
      item.style.top = e.clientY + mouseOffset.y + "px";
      //Concatinating Numbers with Strings is Javascript gives you a String
    }
  }

  // ICI LA PARTIE POUR FAIRE APPARAITRE LA DROP AREA + SNAP

  for(let i = 0; i < 6; i++) {
    let snap = document.createElement("div");
    //The .snap class will only create the container (width and height and position)
    snap.className = "snap";
    //Make Sure to Refrence the Todos Container
    todosContainer.appendChild(snap);
  }


  //Execute a Function avery number of seconds
setInterval(() => {
    let snaps = document.getElementsByClassName("snap");
    for(let i = 0; i < snaps.length; i++) {
      //Clear the Over class every time (Hide Elements are not under collision)
      snaps[i].className = snaps[i].className.replace("over", "");

      if(doElsCollide(currentTodo, snaps[i])) {
        //There is a collision then we are good to
        snaps[i].className += " over"; ///< Over class will show the snap container
        if(!isMouseDown) {
            //Snap Current Todo under Current Snap Container :)
            snapElem(currentTodo, snaps[i]);
          }
      }
    }
 }, 100);

 doElsCollide = function(el1, el2) {
     el1.offsetBottom = el1.offsetTop + el1.offsetHeight;
     el1.offsetRight = el1.offsetLeft + el1.offsetWidth;
     el2.offsetBottom = el2.offsetTop + el2.offsetHeight;
     el2.offsetRight = el2.offsetLeft + el2.offsetWidth;

     return !((el1.offsetBottom < el2.offsetTop) ||
               (el1.offsetTop > el2.offsetBottom) ||
               (el1.offsetRight < el2.offsetLeft) ||
               (el1.offsetLeft > el2.offsetRight))
 };

 function snapElem (elem, container) {
    //Get the Container Details (Position, Size...)
    let box = container.getBoundingClientRect();
    //Set todo Position the same as the container's (X:left, Y:top)
    elem.style.left = box.x + "px";
    elem.style.top = box.y - 10 + "px"; ///< Minus 10 (for making it perfect)
  }