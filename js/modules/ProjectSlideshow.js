import $ from 'jquery'
// this class is not being used in the website at the moment.
class ProjectSlideshow{

	// 1. describe and create/initiate our object
	constructor(){
        this.prevbutton = document.querySelector("#prevbutton")
        this.nextbutton = document.querySelector("#nextbutton")
        this.slideshow = document.querySelector(".slideshow");
        this.i = 0;
        this.events(); // call events in constructor method

	}

	// 2. Events (what events call methods? (if statements etc))
	events() {
        this.nextbutton.addEventListener("click", () => this.nextImage())
        this.prevbutton.addEventListener("click", () => this.prevImage())
	}
	// 3. methods (functions,actions...)
	nextImage(){
        this.i++;
        console.log(this.i);
        for(let image of this.slideshow.children){
            console.log(image.id);
               image.style.display = "none";
            if(image.id == this.i%this.slideshow.childElementCount){
                image.style.display = "block";
            }
        }

    }
    prevImage(){
        this.i--;
        for(let image of this.slideshow.children){
            console.log(image.id);
               image.style.display = "none";
            if(image.id == this.i%this.slideshow.childElementCount){
                image.style.display = "block";
            }
        }
    }

}


// Export the classes for import
export default ProjectSlideshow;