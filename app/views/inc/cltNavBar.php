<?php require APPROOT . '\views\inc\header.php'; ?>

<body class="bg-gray-100">

	<nav class=" fixed z-10 w-screen px-44 py-4 flex justify-between items-center bg-white">
			<a class="text-3xl font-bold leading-none" href="<?php echo URLROOT ?>">
				<svg xmlns="http://www.w3.org/2000/svg" width="120" height="56" fill="none">
				<path fill="#2EC966" d="m21.45 18.316 7.617-2.467a.59.59 0 0 0 .456-.577.585.585 0 0 0-.327-.53l-.164-.048-7.665-2.491-3.323-1.034a6.34 6.34 0 0 0-.831-.145c-.152-.012-.293-.024-.48-.024h-.059l-.081.012c-.351.012-.69.048-1.007.132l-3.522 1.072-6.834 2.478c-.035.012-.082.024-.117.036a.598.598 0 0 0-.351.542c0 .216.117.409.292.505l.187.072 6.882 2.48 3.71 1.13.222.036c.198.037.397.049.655.049.41 0 .819-.049 1.217-.169l.491-.132 3.031-.927Z" />
				<path fill="#3AA4FF" d="M32.885 19.26c-.61-.436-.98-.666-1.723-.666a3.47 3.47 0 0 0-1.017.15l-9.56 2.87c-1.485.424-2.49 1.71-2.49 3.201v16.06c0 1.124.563 2.135 1.532 2.766.969.631 2.154.758 3.243.344l9.56-3.8c1.341-.516 1.855-1.733 1.855-3.11V21.946c0-1.068-.514-2.043-1.4-2.686" />
				<path fill="#FF4C59" d="M13.566 21.393 2.65 17.74a2.47 2.47 0 0 0-.659-.094c-.494 0-.636.165-1.048.472-.6.447-.942 1.13-.942 1.874v16.833c0 .955.224 1.804 1.107 2.17l10.916 5.057c.73.294 1.52.212 2.179-.225a2.304 2.304 0 0 0 1.036-1.944V23.633c0-1.025-.683-1.956-1.672-2.24" />
				<path fill="#000" d="M84.789 15.746h-.022c-.516 0-.988.186-1.35.537-.351.35-.55.82-.56 1.335-.011 1.083.801 1.904 1.877 1.926.505 0 1-.186 1.361-.537.351-.35.56-.831.571-1.346a1.853 1.853 0 0 0-.527-1.356 1.886 1.886 0 0 0-1.35-.559ZM66.653 40.163l-.894-2.177a4454.105 4454.105 0 0 0-8.483-20.773c-.084-.203-.484-.44-.762-.464-.555-.036-1.123-.024-1.68-.024-.555.012-1.147.012-1.715-.024-.653-.047-.882.214-1.1.774-2.199 5.437-4.447 10.957-6.622 16.3l-2.368 5.817a3.94 3.94 0 0 0-.158.405c-.024.095-.024.202.049.285a.34.34 0 0 0 .266.131l.531-.012h1.088c.544 0 1.087.012 1.62.024.446.024.664-.13.82-.559.279-.773.58-1.535.883-2.308.278-.714.556-1.44.822-2.154.266-.713.64-.892 1.813-.832l7.818-.013c1.063-.059 1.62.06 1.897.822.665 1.784 1.185 3.164 1.74 4.437.109.262.46.548.69.56.942.06 1.884.047 2.875.035l.701-.012c.06 0 .12-.035.157-.083a.17.17 0 0 0 .012-.155ZM50.75 30.872l3.988-10.22 3.964 10.22H50.75Zm60.409-7.763c-2.553 0-4.848.877-6.452 2.47-1.581 1.559-2.459 3.764-2.459 6.2a9.55 9.55 0 0 0 .445 2.84l.023.082-.058.069c-.644.68-1.089 1.097-1.487 1.397l-.106.058c-.304.173-.609.346-.937.462a5.305 5.305 0 0 1-1.592.334c-.937.058-1.733-.173-2.26-.635-.421-.38-.667-.912-.702-1.535-.082-1.836-.07-3.649-.047-5.566 0-.796.011-1.593.011-2.413v-.15h4.509a.392.392 0 0 0 .398-.392v-2.483a.337.337 0 0 0-.34-.334h-4.672v-4.515a.405.405 0 0 0-.41-.404h-2.88a.34.34 0 0 0-.34.347v4.618H88.97a.392.392 0 0 0-.398.393v2.366a.44.44 0 0 0 .433.44h2.822v2.55c-.011 1.837-.011 3.568.012 5.323.012 1.975.644 3.43 1.886 4.469 2.166 1.8 6.686 1.766 8.946-.081.538-.347 1.054-.762 1.639-1.317l.105-.115.106.115c1.639 1.732 3.981 2.69 6.604 2.69a10 10 0 0 0 3.571-.634 8.24 8.24 0 0 0 2.858-1.813c1.604-1.582 2.447-3.73 2.447-6.235 0-5.057-3.642-8.59-8.841-8.601Zm-.012 13.935c-3.044 0-5.093-2.124-5.105-5.276-.012-3.117 2.072-5.311 5.059-5.334 1.451-.012 2.704.462 3.653 1.385.972.97 1.522 2.379 1.51 3.96-.011 3.14-2.061 5.254-5.117 5.265ZM86.262 23.46l-5.96-.024c-.118-.024-.213-.024-.296-.024l-2.624-.024c-.226-.012-.475 0-.641.107l-.047.024c-.131.107-.19.238-.25.405a.262.262 0 0 1-.023.072c-1.022 2.691-2.019 5.36-3.04 8.04l-1.698 4.489-.332-.893c-1.448-3.788-2.897-7.575-4.345-11.374-.119-.298-.238-.608-.499-.762-.226-.132-.546-.12-.867-.12-.249 0-.486-.012-.724-.012-.285 0-.57-.011-.878 0-.071 0-.143-.011-.214-.011-.107-.013-.214-.013-.309-.013-.344 0-.617.048-.653.263-.023.143.036.286.095.464.784 2.037 1.627 4.085 2.434 6.074 1.164 2.859 2.374 5.824 3.431 8.778l.024.06c.166.476.344.964.724 1.214.285.19.76.203 1.294.215l.19.012c.617.023 1.354-.012 1.864-.036.309-.012.665-.048.902-.226.19-.155.297-.405.404-.655l5.093-12.744.119-.024 3.74.047V39.92c0 .227.19.417.415.417h2.66c.225 0 .415-.19.415-.417V23.876a.404.404 0 0 0-.404-.416" />
			</svg>
		</a>
		<ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2  lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
			<li><a class="text-sm text-gray-400 hover:text-green-500 hover:font-bold" href="<?php echo URLROOT ?>">Home</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-sm text-gray-400 hover:text-green-500 hover:font-bold" href="#">About Us</a></li>
		</ul>
		<div class="flex">		
			<!-- <span class="hidden lg:flex items-center justify-center text-center text-xl text-black font-bold rounded-xl transition duration-200" href="user/logOut">welcom  </span> -->
			<a class=" hidden  lg:flex mr-auto text-3xl font-bold leading-none" href="#">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="55" height="50" viewBox="0 0 256 256" xml:space="preserve">
	
					<defs>
					</defs>
					<g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10;  fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
						<path d="M 27.462 26.484 l -6.619 7.277 l -2.539 -3.99 c -0.297 -0.465 -0.915 -0.604 -1.381 -0.307 s -0.603 0.915 -0.307 1.381 l 3.242 5.094 c 0.167 0.263 0.448 0.433 0.758 0.459 c 0.028 0.003 0.057 0.004 0.085 0.004 c 0.28 0 0.549 -0.118 0.74 -0.327 l 7.5 -8.245 c 0.372 -0.409 0.342 -1.041 -0.067 -1.413 C 28.467 26.045 27.833 26.077 27.462 26.484 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
						<path d="M 27.462 47.48 l -6.619 7.277 l -2.539 -3.99 c -0.297 -0.465 -0.915 -0.603 -1.381 -0.307 c -0.466 0.297 -0.603 0.915 -0.307 1.381 l 3.242 5.094 c 0.167 0.263 0.448 0.433 0.758 0.459 c 0.028 0.003 0.057 0.004 0.085 0.004 c 0.28 0 0.549 -0.118 0.74 -0.327 l 7.5 -8.245 c 0.372 -0.408 0.342 -1.041 -0.067 -1.412 C 28.467 47.042 27.833 47.073 27.462 47.48 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
						<path d="M 27.462 69.5 l -6.619 7.276 l -2.539 -3.99 c -0.296 -0.465 -0.915 -0.603 -1.38 -0.307 c -0.466 0.297 -0.604 0.915 -0.307 1.381 l 3.242 5.095 c 0.167 0.263 0.448 0.433 0.758 0.459 c 0.028 0.003 0.057 0.004 0.085 0.004 c 0.28 0 0.549 -0.118 0.74 -0.327 l 7.5 -8.245 c 0.372 -0.408 0.342 -1.041 -0.067 -1.412 C 28.467 69.062 27.833 69.093 27.462 69.5 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
						<path d="M 36.023 32.657 h 24.312 c 0.553 0 1 -0.448 1 -1 s -0.447 -1 -1 -1 H 36.023 c -0.552 0 -1 0.448 -1 1 S 35.471 32.657 36.023 32.657 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
						<path d="M 36.023 53.653 h 6.92 c 0.552 0 1 -0.447 1 -1 s -0.448 -1 -1 -1 h -6.92 c -0.552 0 -1 0.447 -1 1 S 35.471 53.653 36.023 53.653 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
						<path d="M 60.335 73.673 H 36.023 c -0.552 0 -1 0.447 -1 1 s 0.448 1 1 1 h 24.312 c 0.553 0 1 -0.447 1 -1 S 60.888 73.673 60.335 73.673 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
						<path d="M 77.441 47.537 c -0.523 0 -1.006 -0.304 -1.259 -0.792 c -0.09 -0.175 -0.186 -0.349 -0.286 -0.524 c -0.099 -0.17 -0.201 -0.338 -0.308 -0.506 c -0.297 -0.463 -0.319 -1.033 -0.058 -1.485 c 0.453 -0.786 0.574 -1.701 0.34 -2.578 c -0.235 -0.876 -0.797 -1.609 -1.583 -2.062 l -1.563 -0.903 V 16.35 c 0 -2.617 -2.129 -4.745 -4.745 -4.745 H 56.005 v -0.763 c 0 -2.936 -2.389 -5.324 -5.324 -5.324 h -2.756 C 47.174 2.316 44.316 0 40.944 0 c -3.373 0 -6.23 2.316 -6.981 5.518 h -2.756 c -2.936 0 -5.324 2.389 -5.324 5.324 v 0.763 H 13.907 c -2.617 0 -4.745 2.128 -4.745 4.745 v 68.905 c 0 2.616 2.128 4.745 4.745 4.745 H 67.98 c 2.616 0 4.745 -2.129 4.745 -4.745 V 66.846 l 1.563 -0.902 c 0.786 -0.453 1.348 -1.186 1.583 -2.063 c 0.234 -0.876 0.113 -1.792 -0.34 -2.578 c -0.262 -0.453 -0.248 -1.008 0.034 -1.447 c 0.23 -0.356 0.442 -0.725 0.637 -1.102 c 0.24 -0.468 0.716 -0.759 1.239 -0.759 c 1.873 0 3.396 -1.523 3.396 -3.396 v -3.665 C 80.838 49.061 79.314 47.537 77.441 47.537 z M 27.883 10.842 c 0 -1.833 1.491 -3.324 3.324 -3.324 h 3.599 c 0.512 0 0.94 -0.386 0.995 -0.895 C 36.079 3.987 38.29 2 40.944 2 c 2.653 0 4.865 1.987 5.144 4.623 c 0.054 0.509 0.482 0.895 0.994 0.895 h 3.599 c 1.833 0 3.324 1.491 3.324 3.324 v 3.478 H 27.883 V 10.842 z M 67.98 88 H 13.907 c -1.514 0 -2.745 -1.231 -2.745 -2.745 V 16.35 c 0 -1.514 1.231 -2.745 2.745 -2.745 h 11.976 v 1.715 c 0 0.552 0.448 1 1 1 h 28.122 c 0.553 0 1 -0.448 1 -1 v -1.715 H 67.98 c 1.514 0 2.745 1.231 2.745 2.745 v 21.23 c -0.693 -0.292 -1.453 -0.36 -2.189 -0.163 c -0.876 0.235 -1.608 0.797 -2.063 1.583 c -0.262 0.454 -0.757 0.729 -1.276 0.693 c -0.422 -0.021 -0.847 -0.021 -1.271 0 c -0.519 0.042 -1.011 -0.241 -1.272 -0.693 c -0.453 -0.786 -1.186 -1.348 -2.063 -1.583 c -0.875 -0.234 -1.792 -0.114 -2.577 0.339 L 54.84 39.59 c -0.785 0.454 -1.348 1.186 -1.582 2.062 c -0.235 0.877 -0.114 1.792 0.34 2.578 c 0.262 0.454 0.247 1.009 -0.037 1.45 c -0.229 0.356 -0.439 0.723 -0.634 1.099 c -0.24 0.468 -0.715 0.759 -1.239 0.759 c -1.873 0 -3.396 1.523 -3.396 3.396 v 3.665 c 0 1.872 1.523 3.396 3.396 3.397 c 0.523 0 1.005 0.304 1.26 0.795 c 0.091 0.174 0.185 0.347 0.283 0.519 c 0.101 0.174 0.204 0.345 0.309 0.507 c 0.298 0.465 0.319 1.034 0.058 1.487 c -0.453 0.786 -0.574 1.701 -0.339 2.578 c 0.234 0.876 0.797 1.608 1.582 2.062 l 3.175 1.833 c 0.523 0.302 1.104 0.456 1.692 0.456 c 0.295 0 0.593 -0.039 0.886 -0.117 c 0.876 -0.235 1.608 -0.797 2.063 -1.584 c 0.262 -0.452 0.753 -0.713 1.277 -0.692 c 0.425 0.021 0.847 0.021 1.268 0 c 0.524 -0.024 1.013 0.241 1.273 0.694 c 0.864 1.496 2.7 2.069 4.252 1.418 v 17.304 C 70.726 86.769 69.494 88 67.98 88 z M 78.838 54.599 c 0 0.771 -0.627 1.396 -1.397 1.396 c -1.276 0 -2.433 0.707 -3.018 1.845 c -0.163 0.318 -0.342 0.628 -0.539 0.932 c -0.689 1.074 -0.723 2.428 -0.085 3.532 c 0.187 0.323 0.236 0.699 0.14 1.06 c -0.096 0.36 -0.327 0.661 -0.65 0.848 l -3.174 1.833 c -0.67 0.387 -1.522 0.155 -1.908 -0.512 c -0.638 -1.104 -1.81 -1.74 -3.104 -1.691 c -0.359 0.019 -0.718 0.018 -1.073 0 c -1.268 -0.061 -2.47 0.587 -3.107 1.692 c -0.187 0.323 -0.487 0.554 -0.848 0.65 c -0.361 0.097 -0.737 0.046 -1.06 -0.14 l -3.175 -1.833 c -0.323 -0.187 -0.554 -0.487 -0.65 -0.848 s -0.047 -0.736 0.14 -1.06 c 0.637 -1.103 0.597 -2.469 -0.107 -3.57 c -0.09 -0.138 -0.176 -0.279 -0.259 -0.424 c -0.085 -0.146 -0.165 -0.294 -0.241 -0.44 c -0.597 -1.154 -1.76 -1.873 -3.034 -1.874 c -0.771 0 -1.396 -0.626 -1.396 -1.396 v -3.665 c 0 -0.771 0.627 -1.396 1.397 -1.396 c 1.277 0 2.434 -0.707 3.017 -1.844 c 0.164 -0.318 0.344 -0.63 0.538 -0.932 c 0.691 -1.073 0.724 -2.427 0.086 -3.533 c -0.187 -0.322 -0.236 -0.699 -0.14 -1.059 s 0.327 -0.662 0.65 -0.848 l 3.175 -1.833 c 0.22 -0.126 0.459 -0.187 0.696 -0.187 c 0.482 0 0.953 0.25 1.212 0.698 c 0.638 1.105 1.813 1.754 3.102 1.692 c 0.361 -0.017 0.72 -0.017 1.075 0 c 1.273 0.054 2.468 -0.585 3.106 -1.692 c 0.386 -0.667 1.241 -0.895 1.908 -0.512 l 3.174 1.833 c 0.323 0.187 0.555 0.487 0.65 0.848 c 0.097 0.36 0.047 0.736 -0.14 1.06 c -0.637 1.104 -0.596 2.47 0.104 3.563 c 0.091 0.142 0.178 0.286 0.262 0.431 s 0.164 0.291 0.241 0.44 c 0.598 1.156 1.761 1.874 3.035 1.874 c 0.771 0 1.396 0.626 1.396 1.396 V 54.599 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill:#3AA4FF; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
						<path d="M 66.328 46.184 c -1.761 -0.47 -3.596 -0.229 -5.171 0.681 c -1.576 0.91 -2.704 2.38 -3.176 4.138 c -0.471 1.759 -0.229 3.596 0.681 5.172 s 2.38 2.704 4.139 3.175 c 0.587 0.157 1.183 0.235 1.774 0.235 c 1.181 0 2.347 -0.31 3.396 -0.916 c 1.576 -0.91 2.704 -2.38 3.175 -4.138 c 0.471 -1.759 0.229 -3.595 -0.681 -5.171 S 68.086 46.655 66.328 46.184 z M 69.215 54.013 c -0.333 1.242 -1.13 2.28 -2.243 2.923 c -1.114 0.644 -2.41 0.815 -3.654 0.481 c -1.242 -0.333 -2.28 -1.13 -2.923 -2.243 c -0.644 -1.113 -0.813 -2.411 -0.48 -3.653 c 0.333 -1.243 1.129 -2.281 2.243 -2.924 c 0.741 -0.429 1.564 -0.647 2.398 -0.647 c 0.418 0 0.84 0.056 1.255 0.167 c 1.242 0.333 2.28 1.129 2.923 2.243 C 69.377 51.473 69.548 52.771 69.215 54.013 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10;fill:#3AA4FF;; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
					</g>
				</svg>
			</a>
			<a class="hidden lg:flex items-center justify-center text-center   py-2 px-6 bg-red-500 hover:bg-red-600 text-sm text-white font-bold rounded-xl transition duration-200" href="#">logout </a>
			<a class="hidden lg:flex items-center justify-center text-center   py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200" href="#">Sign In</a>
		</div>
		<div class="lg:hidden   ">
			<button class="navbar-burger flex items-center text-blue-600 p-3">
				<svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<title class="red">Mobile menu</title>
					<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
				</svg>
			</button>
		</div>
	</nav>
	<div class="navbar-menu relative z-50 hidden">
		
		<nav class="fixed top-0 right-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
			<div class="flex items-center mb-8">
				<a class="mr-auto text-3xl font-bold leading-none" href="#">
					
				<svg xmlns="http://www.w3.org/2000/svg" width="120" height="56" fill="none">
					<path fill="#2EC966" d="m21.45 18.316 7.617-2.467a.59.59 0 0 0 .456-.577.585.585 0 0 0-.327-.53l-.164-.048-7.665-2.491-3.323-1.034a6.34 6.34 0 0 0-.831-.145c-.152-.012-.293-.024-.48-.024h-.059l-.081.012c-.351.012-.69.048-1.007.132l-3.522 1.072-6.834 2.478c-.035.012-.082.024-.117.036a.598.598 0 0 0-.351.542c0 .216.117.409.292.505l.187.072 6.882 2.48 3.71 1.13.222.036c.198.037.397.049.655.049.41 0 .819-.049 1.217-.169l.491-.132 3.031-.927Z" />
					<path fill="#3AA4FF" d="M32.885 19.26c-.61-.436-.98-.666-1.723-.666a3.47 3.47 0 0 0-1.017.15l-9.56 2.87c-1.485.424-2.49 1.71-2.49 3.201v16.06c0 1.124.563 2.135 1.532 2.766.969.631 2.154.758 3.243.344l9.56-3.8c1.341-.516 1.855-1.733 1.855-3.11V21.946c0-1.068-.514-2.043-1.4-2.686" />
					<path fill="#FF4C59" d="M13.566 21.393 2.65 17.74a2.47 2.47 0 0 0-.659-.094c-.494 0-.636.165-1.048.472-.6.447-.942 1.13-.942 1.874v16.833c0 .955.224 1.804 1.107 2.17l10.916 5.057c.73.294 1.52.212 2.179-.225a2.304 2.304 0 0 0 1.036-1.944V23.633c0-1.025-.683-1.956-1.672-2.24" />
					<!-- <path fill="#000" d="M84.789 15.746h-.022c-.516 0-.988.186-1.35.537-.351.35-.55.82-.56 1.335-.011 1.083.801 1.904 1.877 1.926.505 0 1-.186 1.361-.537.351-.35.56-.831.571-1.346a1.853 1.853 0 0 0-.527-1.356 1.886 1.886 0 0 0-1.35-.559ZM66.653 40.163l-.894-2.177a4454.105 4454.105 0 0 0-8.483-20.773c-.084-.203-.484-.44-.762-.464-.555-.036-1.123-.024-1.68-.024-.555.012-1.147.012-1.715-.024-.653-.047-.882.214-1.1.774-2.199 5.437-4.447 10.957-6.622 16.3l-2.368 5.817a3.94 3.94 0 0 0-.158.405c-.024.095-.024.202.049.285a.34.34 0 0 0 .266.131l.531-.012h1.088c.544 0 1.087.012 1.62.024.446.024.664-.13.82-.559.279-.773.58-1.535.883-2.308.278-.714.556-1.44.822-2.154.266-.713.64-.892 1.813-.832l7.818-.013c1.063-.059 1.62.06 1.897.822.665 1.784 1.185 3.164 1.74 4.437.109.262.46.548.69.56.942.06 1.884.047 2.875.035l.701-.012c.06 0 .12-.035.157-.083a.17.17 0 0 0 .012-.155ZM50.75 30.872l3.988-10.22 3.964 10.22H50.75Zm60.409-7.763c-2.553 0-4.848.877-6.452 2.47-1.581 1.559-2.459 3.764-2.459 6.2a9.55 9.55 0 0 0 .445 2.84l.023.082-.058.069c-.644.68-1.089 1.097-1.487 1.397l-.106.058c-.304.173-.609.346-.937.462a5.305 5.305 0 0 1-1.592.334c-.937.058-1.733-.173-2.26-.635-.421-.38-.667-.912-.702-1.535-.082-1.836-.07-3.649-.047-5.566 0-.796.011-1.593.011-2.413v-.15h4.509a.392.392 0 0 0 .398-.392v-2.483a.337.337 0 0 0-.34-.334h-4.672v-4.515a.405.405 0 0 0-.41-.404h-2.88a.34.34 0 0 0-.34.347v4.618H88.97a.392.392 0 0 0-.398.393v2.366a.44.44 0 0 0 .433.44h2.822v2.55c-.011 1.837-.011 3.568.012 5.323.012 1.975.644 3.43 1.886 4.469 2.166 1.8 6.686 1.766 8.946-.081.538-.347 1.054-.762 1.639-1.317l.105-.115.106.115c1.639 1.732 3.981 2.69 6.604 2.69a10 10 0 0 0 3.571-.634 8.24 8.24 0 0 0 2.858-1.813c1.604-1.582 2.447-3.73 2.447-6.235 0-5.057-3.642-8.59-8.841-8.601Zm-.012 13.935c-3.044 0-5.093-2.124-5.105-5.276-.012-3.117 2.072-5.311 5.059-5.334 1.451-.012 2.704.462 3.653 1.385.972.97 1.522 2.379 1.51 3.96-.011 3.14-2.061 5.254-5.117 5.265ZM86.262 23.46l-5.96-.024c-.118-.024-.213-.024-.296-.024l-2.624-.024c-.226-.012-.475 0-.641.107l-.047.024c-.131.107-.19.238-.25.405a.262.262 0 0 1-.023.072c-1.022 2.691-2.019 5.36-3.04 8.04l-1.698 4.489-.332-.893c-1.448-3.788-2.897-7.575-4.345-11.374-.119-.298-.238-.608-.499-.762-.226-.132-.546-.12-.867-.12-.249 0-.486-.012-.724-.012-.285 0-.57-.011-.878 0-.071 0-.143-.011-.214-.011-.107-.013-.214-.013-.309-.013-.344 0-.617.048-.653.263-.023.143.036.286.095.464.784 2.037 1.627 4.085 2.434 6.074 1.164 2.859 2.374 5.824 3.431 8.778l.024.06c.166.476.344.964.724 1.214.285.19.76.203 1.294.215l.19.012c.617.023 1.354-.012 1.864-.036.309-.012.665-.048.902-.226.19-.155.297-.405.404-.655l5.093-12.744.119-.024 3.74.047V39.92c0 .227.19.417.415.417h2.66c.225 0 .415-.19.415-.417V23.876a.404.404 0 0 0-.404-.416" /> -->
				</svg>
				
				</a>
				
				<button class="navbar-close">
					<svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>
			<div>
				<ul>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Home</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">About Us</a>
					</li>
				</ul>
			</div>
			<div class="mt-auto">
				<div class="pt-6">
					<a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-red-600 hover:bg-red-700  rounded-xl" href="#">logout</a>				
						<a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700  rounded-xl" href="<?php echo URLROOT ?>Pages/auth">Sign In</a>
					
				</div>
				<p class="my-4 text-xs text-center text-gray-400">
					<span>Copyright © 2021</span>
				</p>
			</div>
		</nav>
	</div>