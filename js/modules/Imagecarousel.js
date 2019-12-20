import $ from 'jquery'

// this should be optimized later so that we dont have to endlessly download the images
class ImageCarousel{

	// 1. describe and create/initiate our object
	constructor(){
		this.events();
		this.i = 1;
		this.frontimage = $("#front-image");
		this.frontimagelink = $("#front-image-link");
		this.nextimage;
		this.nextlink;
		this.interval = setInterval(this.getNextImage.bind(this),3500);
	}

	// 2. Events
	events() {
	//	this.testDivText.on("click", this.nextImage);
	
	}
	// 3. methods (functions,action
	getNextImage(){
		$.getJSON(claustraData.root_url + '/wp-json/claustra/v1/projectinfo', function(projectdata){
			this.nextimage = projectdata.projects[this.i % projectdata.projects.length].thumbnail;
			this.nextlink = projectdata.projects[this.i % projectdata.projects.length].permalink;
			this.i++;
			this.frontimage.attr("src", this.nextimage);
			this.frontimagelink.attr("href", this.nextlink);
		}.bind(this));
	}

}


export default ImageCarousel;
