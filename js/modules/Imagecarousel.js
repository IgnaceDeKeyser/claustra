import $ from 'jquery'

class ImageCarousel{

	// 1. describe and create/initiate our object
	constructor(){
		this.events();
		this.i = 1;
		this.frontimage = document.querySelector("#front-image");
		this.frontimagelink = document.querySelector("#front-image-link");
		this.nextimage;
		this.nextlink;
		this.interval = setInterval(this.getNextImage.bind(this),10000);
	}

	// 2. Events
	events() {
	}
	// 3. methods (functions,action
	getNextImage(){
		if(document.getElementById('front-image'||"front-image-link")){
			$.getJSON(claustraData.root_url + '/wp-json/claustra/v1/projectinfo', function(projectdata){
				this.nextimage = projectdata.projects[this.i % projectdata.projects.length].thumbnail;
				this.nextlink = projectdata.projects[this.i % projectdata.projects.length].permalink;
				this.i++;
				this.frontimage.attr("src", this.nextimage);
				this.frontimagelink.attr("href", this.nextlink);
			}.bind(this));
		}
	}

}


export default ImageCarousel;
