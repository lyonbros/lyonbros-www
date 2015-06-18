function init()
{
	var pre = new Image();
	pre.onload = start_rain;
	pre.src = '/images/heart.png';

	var con = new ProjectsController({
		el: Composer.find(document.body, 'content ul')
	});
}

