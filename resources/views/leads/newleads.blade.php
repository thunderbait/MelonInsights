@extends('layouts.nav')

@section('content')
    <div class="middle_content flex flex_direction" v-cloak>
		<!-- Search Bar -->
		<div class="top_section flex justify_space">
			<div class="page_indicator">
				<div class="heading_02">New Leads</div>
				<div class="heading_04">Year Search</div>
			</div>
			<div class="year_selection flex justify_space align_center">
				<div v-on:click="leftYear()" class="arrows"><img  src="{{ asset('images/leftarrow.svg') }}"></div>
				<div class="heading_01">@{{year}}</div>
				<div v-on:click="rightYear()"class="arrows"><img  src="{{ asset('images/rightarrow.svg') }}"></div>
			</div>
			@include('includes.topsection.userstatus')
		</div>

		<!-- Name of the venue chosen -->
		<div class="venue_name_leads flex flex_direction justify_center align_center">
			<div class="description">Venue Name:</div>
			<div class="heading_02">{{$venue->name}}</div>
		</div>

		<!-- Month Selection Tabs -->
		<!-- <div class="month_selection flex justify_space align_center">
			<div v-for="month in monthInString">			
				<div class="month_option flex justify_space align_center">
					<div class="month_name">@{{month}}</div>
					<div class="month_name">10</div>
				</div>
			</div>
		</div> -->

		<!-- Searching Bar -->
		<div v-if="searching" class="searching  flex align_center flex_direction justify_center">
            <img src="https://www.micro-measurements.com/sites/all/themes/vpg/images/double-ring.gif" class="search_gif">
            <div class="prompt_label">Searching...</div>
        </div>
		

        <!-- Lead Block -->
        <div class="lead_results item_grow">
            <div v-for="lead in leads" class="lead_block flex justify_space" v-bind:class="{ dropped: lead.showMore }" :style="{ opacity: searching ? 0.3 : 1 }">
				<!-- The colour of Type of lead -->
				<div class="lead_colour_nat"></div>
				
				<!-- The Lead information -->
				<div class="lead_info item_grow">
					<!-- Top Bit you See -->
					<div class="top_section_lead flex justify_space">
						
						<!-- Description of Lead -->
						<div class="description_block">

							<!-- Oranisation Info -->
							<div class="event_info flex align_center justify_start">
								<!-- Image of the Organisation -->
								<img class="organisation_pic" v-bind:src="lead.orgnaisation_image">
								<!-- Name of the Oranisation -->
								<div class="heading_02">@{{lead.organisation}}</div>
							</div>

							<!-- Event Information -->
							<div class="event_info">
								<div class="heading_03 event_name">@{{lead.event_name}}</div>
								<div class="description">@{{lead.event_description}}</div>
							</div>
						</div>

						<!-- Overview of matching -->
						<div class="matching_block item_grow flex justify_space">
							<!-- Match - Venue Specs -->
							<div class="match_box item_grow flex align_center flex_direction justify_end">
								<div class="score_block flex justify_center align_center">
									<div class="percentage_text">@{{lead.last_score.venue_specs}}%</div>
								</div>
								<div class="score_desc">Venue Spesification</div>
							</div>
							<!-- Match - Sector Specs -->
							<div class="match_box item_grow flex align_center flex_direction justify_end">
								<div class="score_block flex justify_center align_center">
									<div class="percentage_text">@{{lead.last_score.sector}}%</div>
								</div>
								<div class="score_desc">Sector Strengths</div>
							</div>
							<!-- Match - Location Specs -->
							<div class="match_box item_grow flex align_center flex_direction justify_end">
								<div class="heading_02">@{{lead.last_locations[0].venue}}</div>
								<div class="heading_04">@{{lead.last_locations[0].location}}</div>
								<div class="score_desc">Last Location</div>
							</div>
							<!-- Match - Value Specs -->
							<div class="match_box item_grow flex align_center flex_direction justify_end">
								<div class="score_block_value flex justify_center align_center">
									<div class="value_amount used"> @{{ getValueUsed(lead.last_score.value, lead.last_score.value)  }}</div>
                                	<div class="value_amount">@{{ getValueUnused(lead.last_score.value, lead.last_score.value)  }} </div>
								</div>
								<div class="score_desc">Value to Venue</div>
							</div>
						</div>
					</div>

					<!-- Bottom Section - When clicked show more -->
					<div  class="bottom_section_lead flex justify_space" v-if="lead.showMore">
						<!-- Description of Lead -->
						<div class="description_block flex flex_direction align_center justify_center">

							<!-- The Preferred Month -->
							<div class="description_row flex justify_space align_center">
								<div class="description">Preferred Month</div>
								<div class="heading_02">@{{lead.last_score.preferred_month}}</div>
							</div>


							<!-- The number of memebers -->
							<div class="description_row flex justify_space align_center">
								<div class="description">Number of Participants</div>
								<div class="heading_02">@{{lead.last_score.proj_participants}}</div>
							</div>

							

							<!-- The Preferred Yearly interval -->
							<div class="description_row flex justify_space align_center">
								<div class="description">Yearly Interal</div>
								<div class="heading_02">@{{lead.last_score.year_interval}}</div>
							</div>
						</div>

						<!-- Overview of matching -->
						<div class="matching_block bottom_match item_grow flex justify_space">
							<!-- Match - Venue Specs -->
							<div class="match_box item_grow flex align_center justify_around">
								<div class="v_specs_col flex flex_direction align_start">
									<div class="v_specs_heading">.</div>
									<div class="description">Max Cap</div>
									<div class="description">Exhibition</div>
									<div class="description">Break Outs</div>
								</div>
								<div class="v_specs_col flex flex_direction align_start">
									<div class="description">Venue</div>
									<div class="v_specs_heading_small">{{ $venue->max_capacity }}</div>
									<div class="v_specs_heading_small">{{ $venue->square_meter }}</div>
									<div class="v_specs_heading_small">{{ $venue->break_out_rooms }}</div>
								</div>
								<div class="v_specs_col flex flex_direction align_start">
									<div class="description">Projected</div>
									<div class="v_specs_heading_small">@{{lead.last_score.proj_max_capacity}}</div>
									<div class="v_specs_heading_small">@{{lead.last_score.proj_exhibition}}</div>
									<div class="v_specs_heading_small">@{{lead.last_score.proj_break_outs}}</div>
								</div>
							</div>
							<!-- Match - Sector Specs -->
							<div class="match_box item_grow flex align_center flex_direction justify_center">
								<div v-for="sector in lead.sic_divisions">
									<div class="sector_row flex justify_start align_center">
										<div><img v-bind:src="sector.section_image" class="sector_image"></div>
										<div>@{{sector.name}}</div>
									</div>
								</div>
								
							</div>
							<!-- Match - Location Specs -->
							<div class="match_box all_locations item_grow flex align_center flex_direction justify_end">
								
									
									<img v-bind:src="lead.mapbox_geo_json" style="position:relative;top: 0;bottom: 0;width: 100%;height: 100%;">
								
							</div>
							<!-- Match - Value Specs -->
							<div class="match_box item_grow flex align_center flex_direction justify_center">
								<div class="value_amount used"> @{{ lead.last_score.proj_days }} Days</div>
                            	<div class="value_amount">@{{ lead.last_score.proj_rooms  }} Rooms </div>
							</div>
						</div>
					</div>

					<!-- Show more button -->
					<div class="show_more flex justify_center align_center" @click="toggleShowMore(lead)">
						<div class="show_words">@{{ lead.showMore ? 'Show less' : 'Show more' }}</div>
						<div class="show_icons">
							<img v-if="!lead.showMore" class="show_more_icon" src="{{ asset('images/rightarrow.svg') }}">
							<img v-if="lead.showMore"  class="show_more_icon" src="{{ asset('images/leftarrow.svg') }}">
						</div>		
					</div>
				</div>

				<!-- The Save Button -->
                <div class="save_button flex justify_center align_center">
					<div class="save_text">SAVE</div>
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
				leads: [],
                leadsUrl: '{{ route('venues.leads', $venue->id )}}',
				// Yead input
				year: new Date().getFullYear() + 1,

				// if the leads are searching
				searching: false,

				//for the value indicator
				valueUsed: '',
                valueUnused: '££££',

				// Drop down
				expand: false,

				monthInString: [
					'January',
					'Febuary',
					'March',
					'April',
					'May',
					'June',
					'July',
					'August',
					'September',
					'October',
					'November',
					'December'
				]
			},
			mounted: function () {
				// Soon as the page is loads, go get those leads
				this.loadFromQuery();
			},
			methods: {
				// This will load the query with the options from the user input
				loadFromQuery: function () {
					var options = {
						year: this.year,//this.current.year,
						//eventType: this.activeEventType,
                    };
                    
					this.loadLeads(options);
				},

				// This calls the actual api and returns all the data into the response
				loadLeads: function (options) {
                    var that = this;
					that.searching = true;
					axios.get(this.leadsUrl, {params: options}).then(function (response) {
                        
                        that.leads = response.data;
                        
					}).catch(function (response) {

                        alert('Error!');
                        
					}).finally(function () {
						// When all the leads have been searching
                        that.searching = false;
					});
                },

				// This will toggle the lead selected to show more or less
				toggleShowMore: function (lead) {
					lead.showMore = !lead.showMore;
                    if(this.expand == false)
                        this.expand = true;
                    else
                        this.expand = false;

                    this.$forceUpdate();
				},
				
				rightYear: function(){
					var yearUp = this.year;
					if(yearUp++ < new Date().getFullYear()+10){
						this.year++;
						this.loadFromQuery();
					}
				},
				leftYear: function(){
					var yearUp = this.year;
					if(yearUp-- > new Date().getFullYear()){
						this.year--;
						this.loadFromQuery();
					}
				},
				getValueUsed: function(value, max){
                    var percent = value; // max * 100;

                    var valueUsed = '-';

                    if(percent < 25)
                        valueUsed = '£';
                    else if(percent < 50)
                        valueUsed = '££';
                    else if(percent < 75)
                        valueUsed = '£££';
                    else if(percent < 100)
                        valueUsed = '££££';
                      
                    return valueUsed;
                },

				getValueUnused: function(value, max){
                    var percent = 100 - value; // max * 100;

                    var valueUnused = '-';

                    if(percent < 25)
                        valueUnused = '';
                    else if(percent < 50 && percent >= 25)
                        valueUnused = '£';
                    else if(percent < 75 && percent >= 50)
                        valueUnused = '££';
                    else if(percent < 100 && percent >= 75)
                        valueUnused = '£££';
                      
                    return valueUnused;
                },
			}
		});
    </script>
@endsection