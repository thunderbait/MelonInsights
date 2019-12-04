<!-- Scripts for VueJs -->
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

	@if(App::environment('local'))
		<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	@else
		<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	@endif

