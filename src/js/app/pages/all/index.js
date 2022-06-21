import anime from "animejs/lib/anime.es.js";

export const navExpand = {
  isChildExpanded: false,
  winDesk: window.innerWidth > 1199,
  aniBool: false,
  setChildExpanded(boolParam) {
    this.isChildExpanded = boolParam;
  },
  expanderClick(e) {
    e.target.classList.toggle("expand");
    const currentExpandState = e.target.classList.value.includes("expand");
    this.setChildExpanded(currentExpandState);
  },
  expander(e) {
    if (event.type === "click" && !this.winDesk)
      e.target.classList.toggle("expand");
    if (event.type === "mouseenter" && this.winDesk)
      e.target.classList.add("expand");
    this.setChildExpanded(true);
    this.triggerAppear();
  },
  contractor(e) {
    if (this.winDesk) e.target.classList.remove("expand");
    this.setChildExpanded(false);
  },
  asideItemsAppear() {
    anime({
      targets: ".nav-item:nth-of-type(1) .navbar-aside .navbar-aside__item",
      scale: [0.8, 1],
      opacity: 1,
      easing: "easeOutBounce",
      delay: anime.stagger(75),
    });
    // aniBool = true;
  },
};
