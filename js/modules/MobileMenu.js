class MobileMenu{

	// 1. describe and create/initiate our object
	constructor(){
		this.menuIcon = document.querySelector(".page-navigation__menu-icon")
		this.menuContent = document.querySelector(".page-navigation")
		this.events(); // call events in constructor method
	}

	// 2. Events (what events call methods? (if statements etc))
	events() {
		this.menuIcon.addEventListener("click", () => this.toggleTheMenu())
	}
	// 3. methods (functions,actions...)
	toggleTheMenu(){
		this.menuContent.classList.toggle("page-navigation--is-visible")
		this.menuIcon.classList.toggle("page-navigation__menu-icon--close-x")
	}

}

// Export the classes for import
export default MobileMenu;