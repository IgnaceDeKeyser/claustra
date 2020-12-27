import $ from 'jquery'
// this class is not being used in the website at the moment.

class ProjectSlideshow{

	// 1. describe and create/initiate our object
	constructor(){
        this.prevbutton = document.querySelector("#prevbutton")
        this.nextbutton = document.querySelector("#nextbutton")
        this.moreinfobutton = document.querySelector("#moreinfobutton")
        this.slideshow = document.querySelector(".imagegallery");
        this.info = document.querySelector(".projectinfo")
        if(this.slideshow.scrollWidth > this.slideshow.getBoundingClientRect().width + 1 ){
            this.nextbutton.style.opacity = 100;
        }

        this.events(); // call events in constructor method

	}


	// 2. Events (what events call methods? (if statements etc))
	events() {
        this.nextbutton.addEventListener("click", () => this.nextImage())
        this.prevbutton.addEventListener("click", () => this.prevImage())
        this.moreinfobutton.addEventListener("click", () => this.textToggle())
        this.slideshow.addEventListener("scroll", () => this.buttonHide())
	}
    // 3. methods (functions,actions...)
    textToggle(){ // text toggle nog niet geipmlementeerd bij de juiste html
        if(this.moreinfobutton.checked){
            this.info.classList.replace('texttoggleoff','texttoggleon');
            document.querySelector("#moreinfolabel").innerHTML ='<b>V</b>';

        } else {
            this.info.classList.replace('texttoggleon','texttoggleoff');
            document.querySelector("#moreinfolabel").innerHTML ='read more';
            this.info.scrollTop = 0;
        }
    }


	nextImage(){
         // move to the next image (and circle around if at the end?)
         this.slideshow.scrollBy(this.slideshow.getBoundingClientRect().width, 0);
         if(this.moreinfobutton.checked){
            this.moreinfobutton.checked = false;
            this.textToggle();
         }
    }
    prevImage(){
        // move to the prev image (and circle around if at the start?)
        this.slideshow.scrollBy(-this.slideshow.getBoundingClientRect().width, 0);
        this.moreinfobutton.checked = false;
        this.textToggle();
        console.log(this.slideshow.scrollLeft);

        
    }
    buttonHide(){
        if(this.slideshow.scrollLeft < this.slideshow.getBoundingClientRect().width){
            this.prevbutton.style.opacity = 0;
        } else {
            this.prevbutton.style.opacity = 100;
        }
        if(((this.slideshow.scrollWidth-this.slideshow.getBoundingClientRect().width-this.slideshow.scrollLeft) < this.slideshow.getBoundingClientRect().width)){
            this.nextbutton.style.opacity = 0;
        } else {
            this.nextbutton.style.opacity = 100;
        }
    }
}
    



// Export the classes for import
export default ProjectSlideshow;