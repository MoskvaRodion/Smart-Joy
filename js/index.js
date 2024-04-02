const btn = document.querySelector(".js-filter");
const unLi = document.querySelectorAll(".unvisited");
const li = document.querySelectorAll(".catalog-main_item");

document.querySelector(".js-select").onchange = function () {
  idSel = this.value;
  [].forEach.call(li, function (el) {
    el.style.display = idSel == "all" || idSel == el.id ? "block" : "none";
  });

  if (idSel == "all") {
    for (const el of unLi) {
      el.removeAttribute("style");
    }
    btn.classList.remove("unvisited");
    btn.addEventListener("click", allItems);
  } else {
    btn.classList.add("unvisited");
    btn.removeEventListener("click", allItems);
  }
};

function allItems(event) {
  event.preventDefault();
  for (const el of unLi) {
    el.classList.toggle("unvisited");
  }
}
