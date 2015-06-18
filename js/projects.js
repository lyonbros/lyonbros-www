var ProjectsController = Composer.Controller.extend({
	events: {
	},

	init: function()
	{
	},

	get_info: function(e)
	{
		var li = Composer.find_parent('li', e.target);
		if(!li) return;
		var desc = Composer.find(li, '.desc');
		if(!desc) return;
		var text = desc.innerHTML;
		var id = desc.getAttribute('rel');
		return {
			id: id,
			text: text
		};
	}
});

