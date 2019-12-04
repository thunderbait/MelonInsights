@extends('layouts.nav')

@section('content')
    <div class="middle_content flex flex_direction justify_center align_center" v-cloak>
        <div class="heading_01">Which Venue would you like to choose?</div>
        <div class="venue_options">
        @foreach ($venues as $venue)
            <div class="v_option_card" v-on:click="newLeads({{ $venue }})">{{ $venue->name }}</div>
        @endforeach
        </div>

    </div>
@endsection

@section('scripts')
    @parent
    <script>
         	var leadsApp = new Vue({
			el: '.middle_content',
			data: {
				
			},
			methods: {
                newLeads: function(v){
                    var base = '{!! route('leads.new') !!}';

                    var url = base+'?id='+v.id ;

                    window.location.href=url;
                }
			}
		});
    </script>
@endsection