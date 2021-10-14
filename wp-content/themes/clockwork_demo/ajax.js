function handleCategorySearchSubmit(e) {
	e.preventDefault();
	const attachmentPoint = document.getElementById('category-search-ajax-replaceable');

	if(!attachmentPoint) {
		return;
	};

	const path = jsforwp_globals.ajax_url
	const fd = new FormData(e.target);
	const body = new URLSearchParams(fd);

	const errorMessage = '<div class="text-center text-danger">Oops, something went wrong while processing your request.</div>'

	fetch(path, {
		method: 'POST',
		headers: {
			'Content-Type': 'application/x-www-form-urlencoded',
		},
		body
	})
	.then(res => res.text())
	.then(html => attachmentPoint.innerHTML = html)
	.catch(e => {
		console.error(e);
		attachmentPoint.innerHTML=errorMessage
	});
}