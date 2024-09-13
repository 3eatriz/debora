let tab = document.querySelectorAll(".tab");
let content = document.querySelectorAll(".content");

function handleChangetab(index) {
  tab[0].classList.remove("tab_active");
  tab[1].classList.remove("tab_active");
  tab[2].classList.remove("tab_active");
  tab[3].classList.remove("tab_active");
  tab[4].classList.remove("tab_active");
  content[0].classList.remove("content_active");
  content[1].classList.remove("content_active");
  content[2].classList.remove("content_active");
  content[3].classList.remove("content_active");
  content[4].classList.remove("content_active");

  tab[index].classList.add("tab_active");
  content[index].classList.add("content_active");
}

if (tab[0]) {
  tab[0].addEventListener("click", () => {
    handleChangetab(0);
  });
  tab[1].addEventListener("click", () => {
    handleChangetab(1);
  });
  tab[2].addEventListener("click", () => {
    handleChangetab(2);
  });
  tab[3].addEventListener("click", () => {
    handleChangetab(3);
  });
  tab[4].addEventListener("click", () => {
    handleChangetab(4);
  });
}
