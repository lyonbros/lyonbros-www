start_rain = function() {
	var container = Composer.find(document.body, '#rain');
	var rain = new Rain(container, '/images/heart.png', {
		amount: .4,
		delay: 400
	});
}

var Rain = Composer.Class.extend({
	container: null,
	coords: null,
	active: true,
	options: {
		image_url: null,
		delay: 400,
		amount: .2,
		speed: 7000
	},

	initialize: function(container, image_url, options)
	{
		this.container = container;
		if(!this.container) throw new Error('rain.js: bad container given');

		this.calculate_coords();

		options.image_url = image_url;
		Object.keys(options).forEach(function(key) {
			this.options[key] = options[key];
		}.bind(this));

		window.onresize = this.calculate_coords.bind(this);

		this.rain();
	},

	calculate_coords: function()
	{
		this.coords = {
			width: this.container.offsetWidth,
			height: this.container.offsetHeight
		};

		if(this.coords.width < 640)
		{
			this.active = false;
		}
		else
		{
			this.active = true;
		}
	},

	rain: function()
	{
		if(this.active && Math.random() < this.options.amount)
		{
			this.add_drop();
		}
		setTimeout(this.rain.bind(this), this.options.delay);
	},

	add_drop: function()
	{
		var img = new Image();
		img.src = this.options.image_url;
		var width = img.width;
		var height = img.height;
		img.prop = width / height;
		img.height = parseInt(((Math.random() * .8) + .2) * height);
		img.width = img.height * img.prop;
		img.size = parseInt(100 * ((img.width / width)));
		img.inv = parseInt(100 * (1 - (img.width / width)));
		var top = this.coords.height + 10;
		var left = Math.floor(Math.random() * (this.coords.width - img.width));
		if (left + img.width > this.coords.right) {
			left = this.coords.right - img.width;
		}
		img.style.left = left + 'px';
		img.style.zIndex = img.size;
		this.container.appendChild(img);
		var duration = this.options.speed;
		duration += (img.inv / 100) * 4 * duration;
		Velocity(img, {top: [-(img.height + 10), top]}, {duration: duration, easing: 'linear'})
			.then(function() {
				this.container.removeChild(img);
			}.bind(this));
	}
});

