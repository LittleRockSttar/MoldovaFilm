const noutati = document.getElementById("noutati");

noutati.addEventListener("mouseover", (event) => {
    event.target.classList.toggle("active")
    setTimeout(() => {
        event.target.classList.remove("active");
      }, 2000); 
    });




const hamburger = document.getElementById("hamburger");

hamburger.addEventListener("mouseover", (event) => {
    event.target.classList.toggle("active") 
    setTimeout(() => {
        event.target.classList.remove("active");
      }, 2000); 
    });