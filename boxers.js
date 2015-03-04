$(document).ready(function (window) {

	var $grid      = $(".grid");
	var $remaining = $(".remaining");
	var $box     = $(".box");
	var $resetGame   = $(".resetGame");

	var seconds = 0.85;
	var timer;
	var game = window.game = {

		init: function() {

			// Game starts - Clicking a box
			$grid.on("click", ".box", function(){
				var id = parseInt( $(this).attr('id'), 10);

				if (game.isLit(id)) {
					$('#' + id).addClass('hidden');

					if (game.remaining().length === 0) {
						$grid.html( $('.win').html() );
						$remaining.parent().fadeOut();
						$resetGame.parent().fadeOut();
						window.clearTimeout(timer);
					} else {
						game.lightbox();
					}
				}
			});

			// Clicking "reset game"
			$resetGame.click(function(event){
				event.preventDefault();
				game.resetGame();
			});

			game.lightbox();
		},
		
		// Making one box light up
		isLit: function(id) {
			return $('#' + id).hasClass('lit');
		},

		// Returns an array of remaining boxes after one lights up
		remaining: function() {
			var ids = [];
			
			$box.not('.hidden').each(function(i, box) {
				var id = parseInt( $(box).attr('id'), 10);
				ids.push(id);
			});
			return ids;
		},
		
		// Resetting game - everything black, no yellows popping up
		resetGame: function() {
			$box.removeClass('hidden').removeClass('lit');
			game.lightbox();
		},
		
		// Getting random boxes to flash yellow
		lightbox: function() {

			var id = Math.floor( (Math.random() * 25) + 1 );

			// Keep picking until you get a remaining box's id
			while ($.inArray(id, game.remaining()) === -1) {
				id = Math.floor( (Math.random() * 25) + 1 );
			}
			
			$('.lit').removeClass("lit");
			$('#' + id).addClass("lit");

			$remaining.text(game.remaining().length);

			if (timer) window.clearTimeout(timer);
			timer = window.setTimeout(game.lightbox, seconds * 1000);
		}

	};

} (window));


