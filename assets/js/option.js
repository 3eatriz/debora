let tab_option = document.querySelectorAll(".tab_option");
let content_option = document.querySelectorAll(".content_option");

function handleChangetab(index) {
  tab_option[0].classList.remove("active_tab_option");
  tab_option[1].classList.remove("active_tab_option");
  tab_option[2].classList.remove("active_tab_option");
  tab_option[3].classList.remove("active_tab_option");
  tab_option[4].classList.remove("active_tab_option");
  tab_option[5].classList.remove("active_tab_option");
  content_option[0].classList.remove("active_content_option");
  content_option[1].classList.remove("active_content_option");
  content_option[2].classList.remove("active_content_option");
  content_option[3].classList.remove("active_content_option");
  content_option[4].classList.remove("active_content_option");
  content_option[5].classList.remove("active_content_option");

  tab_option[index].classList.add("active_tab_option");
  content_option[index].classList.add("active_content_option");
}

if (tab_option[0]) {
  tab_option[0].addEventListener("click", () => {
    handleChangetab(0);
  });
  tab_option[1].addEventListener("click", () => {
    handleChangetab(1);
  });
  tab_option[2].addEventListener("click", () => {
    handleChangetab(2);
  });
  tab_option[3].addEventListener("click", () => {
    handleChangetab(3);
  });
  tab_option[4].addEventListener("click", () => {
    handleChangetab(4);
  });
  tab_option[5].addEventListener("click", () => {
    handleChangetab(5);
  });
}
