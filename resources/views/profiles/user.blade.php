@extends('layouts.nav')

@section('content')
    <div class="middle_content flex flex_direction align_center">
        <!-- Just to identify which user it is -->
        <div class="user_overview flex justify_space align_center">
                <div class="flex align_center">
                    <img class="venue_pp flex justify_center align_center" v-bind:src="user.image">
                    <div class="heading_01">@{{ user.name }}</div>
                </div>
            <div class="signup_button">Update</div>
        </div>

        <!-- The Venues that this user has -->
        <div class="user_venues">
            <div class="heading_01">Your Venues:</div>
            <div class="v_all_venues flex wrap justify_start">
                <div v-for="venue in user.venues" class="u_venue_card flex">
                    <div class="v_card_top flex justify_space align_center" v-on:click="venueProfile(venue)">
                        <div class="v_card_desc flex justify_center flex_direction align_start">
                            <div class="heading_02">@{{venue.name}}</div>
                            <div class="description">@{{venue.description}}</div>
                        </div>
                        <div class="flex flex_direction justify_center align_center">
                            <div class="description">Location</div>
                            <div class="heading_02">@{{venue.country_code}}</div>
                        </div>
                    </div>                            
                </div>
            </div> 
            
        </div>
    </div>
    
    
@endsection

@section('scripts')
    @parent
    <script>
         	var leadsApp = new Vue({
			el: '.middle_content',
			data: {
				user: [],
                userUrl: '{{ route('user.show', $userId )}}',
			},
			mounted: function () {
				// Soon as the page is loads, go get those leads
				this.loadUser();
			},
			methods: {
				// This calls the actual api and returns all the data into the response
				loadUser: function () {
                    var that = this;
					axios.get(this.userUrl).then(function (response) {
                        
                        that.user = response.data;
                        
					}).catch(function (response) {

                        alert('Error!');
                        
					}).finally(function () {
						
					});
                },
                venueProfile: function(v){
                    var base = '{!! route('venue.profile') !!}';

                    var url = base+'?id='+v.id ;

                    window.location.href=url;
                }
			}
		});
    </script>
@endsection