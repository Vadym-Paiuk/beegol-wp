
document.addEventListener('DOMContentLoaded', () => {

	// Custom JS
	stickyHeader ()
	mobMenuToggle ()
	toggleCard('.advantage')
	validationForm ()
})

function stickyHeader () {
	let header = document.querySelector('.header')

	if (document.body.getBoundingClientRect().top < 0) {
		header.classList.add('sticky')
	} else {
		header.classList.remove('sticky')

	}
	
	document.addEventListener('scroll', function () {
		if (document.body.getBoundingClientRect().top < 0) {
			header.classList.add('sticky')
		} else {
			header.classList.remove('sticky')
			if (!header.classList.contains('sticky')) {
				header.classList.remove('active')
			}
		}
		
	})
}

function mobMenuToggle () {
	let btn = document.querySelector('.header__navigation-btn-menu')
	let menu = document.querySelector(btn.dataset.toggle)
	let header = document.querySelector('.header')
		btn.addEventListener('click', function (e) {
			btn.classList.toggle('active')
			menu.classList.toggle('active')
			header.classList.toggle('active')
		})
}

function toggleCard (selector) {
	let cards = document.querySelectorAll(selector)
	let activeCard
	for(let i = 0; i < cards.length; i++) {
		cards[i].addEventListener('click', function (e) {
			if (activeCard && activeCard !== e.currentTarget) {
				activeCard.classList.remove('active')
			}
			e.currentTarget.classList.toggle('active')
			activeCard = e.currentTarget
		})
	}
}

function validationForm () {
	let form = document.querySelector('.form')
	form.addEventListener('submit', function (e) {
		console.log(e)
		console.log(e.target)
	})
}