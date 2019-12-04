@extends('layouts.nav')

@section('content')
    <div class="middle_content_profile">
        <!-- Just the overall and map of the venue -->
        <div class="v_top_page flex">
            <div class="v_profile_left item_grow flex justify_center align_center">
                <!-- Profile Overview : name, description, sector strengths -->
                <div class="v_profile_overview">
                    <div class="flex align_center">
                        <div class="venue_pp flex justify_center align_center">@{{ venue.name[0] }}</div>
                        <div class="heading_01">@{{ venue.name }}</div>
                    </div>
                    <div class="description">@{{ venue.description }}</div>
                    
                    <div class="v_location flex justify_space">
                        <div class="heading_03">Location: @{{ venue.country_code }}</div>
                        <a class="v_website" v-bind:href="venue.website_url">WWW</a>
                    </div>
                
                   <div class="v_users">
                        <div class="heading_04">Users:</div>
                        <div class="flex">
                            <div v-for="user in venue.users" class=" flex justify_center align_center">
                                <img class="v_user_pic" v-bind:src="user.image">
                            </div>
                        </div>
                   </div>
                    
                   <div class="sectors">
                        <div class="heading_02">Sector Stregths</div>
                        <div v-for="sector in venue.s_strengths" class="flex">
                            <img v-bind:src='sector.section_image' class="sector_image">
                            <div class="">@{{sector.name}}</div>
                        </div>

                   </div>
                    
                    
                </div>
            </div>

            <div class="v_profile_right item_grow flex justify_center align_center">
                <!-- The map of the venue and it's other landmarks -->
                <div id="venue_map">
                   <img v-bind:src="venue.location_geo" style="position:relative;top: 0;bottom: 0;width: 100%;height: 100%;">
								
                </div>
            </div>
        </div>
        
        <!-- The Venue's Overall Specs -->
        <div class="v_top_page flex">
            <div class="v_profile_right item_grow flex justify_center align_center">
                <!-- Picture of a venue layout -->
                <img class="v_layout_pic" src="https://toyworldmag.co.uk/wp-content/uploads/2018/07/BLE-ExCel-2.png">
            </div>
            <div class=" v_profile_left item_grow flex justify_center align_center">
                <!-- Venue Spec -->
                <div class="v_specs">
                    <!-- Overall Specs -->
                    <div class="v_overall_specs">
                        <div class="heading_01">Overall:</div>
                        <div class="flex justify_space">
                            <div class="heading_02">Max Capacity:</div>
                            <div class="heading_03">@{{ venue.max_capacity }}</div>
                        </div>
                        <div class="flex justify_space">
                            <div class="heading_02">Exhibition Space:</div>
                            <div class="heading_03">@{{ venue.square_meter }}</div>
                        </div>
                        <div class="flex justify_space">
                            <div class="heading_02">Breakout Rooms:</div>
                            <div class="heading_03">@{{ venue.break_out_rooms }}</div>
                        </div>
                    </div>

                    <!-- Each Rooms Specs -->
                    <div class="v_rooms">
                        <div class="heading_01">Break Down of Rooms</div>
                        <!-- Top Headings -->
                        <div class="v_r_headings flex justify_space">
                            <div class="heading_04 v_r_rooms">Room Name</div>
                            <div class="heading_04 v_r_dims">Dimensions</div>
                            <div class="heading_04 v_r_maxh">Max Height</div>
                            <div class="heading_04 v_r_totala">Total Area</div>
                            <div class="v_r_capacity">
                                <div class="heading_04">Capacity</div>
                                <div class="flex justify_space">
                                    <div v-for="styleName in venue.all_room_styles" >
                                        <div class="v_r_cap_num style_heading">@{{styleName}}</div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div v-for="room in venue.rooms" class="flex">
                            <div class="v_r_rooms">@{{room.name}}</div>
                            <div class="v_r_dims">@{{room.dimensions}}</div>
                            <div class="v_r_maxh">@{{room.max_height}}m</div>
                            <div class="v_r_totala">@{{room.total_area}}sqrm</div>
                            <div class="v_r_capacity">
                                <div class="flex justify_space">
                                    <div v-for="capacityRoom in room.cap_room_styles">
                                        <div class="v_r_cap_num">@{{capacityRoom.capacity}}</div>
                                    </div>
                                </div>  
                            </div>
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
            mapboxgl.accessToken = 'pk.eyJ1Ijoia2VsbHlkb3Rqb25lcyIsImEiOiJjazJhZHJjZ2QyajNlM2xtejRha2NnYTRwIn0.EB9jKl3gdWrOF9gA9vQmLQ';
            var map = new mapboxgl.Map({
            container: 'venue_map',
            style: 'mapbox://styles/mapbox/streets-v11'
            });

        	var leadsApp = new Vue({
			el: '.middle_content_profile',
			data: {
				venue: [],
                venueUrl: '{{ route('venue.show', $venueId )}}',
			},
			mounted: function () {
				// Soon as the page is loads, go get those leads
				this.loadVenue();
			},
			methods: {
				// This calls the actual api and returns all the data into the response
				loadVenue: function () {
                    var that = this;
					axios.get(this.venueUrl).then(function (response) {
                        
                        that.venue = response.data;
                        
					}).catch(function (response) {

                        alert('Error!');
                        
					}).finally(function () {
						
					});
                }
			}
		});
    </script>
@endsection