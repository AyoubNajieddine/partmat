	@foreach($objArray as $retail)
		<div class="retail" ret-id="{{ $retail->id }}">		
			<img src="/thumbs/{{ $retail->pics['picture_name'] }}" >
			<div class="bottom">
			<!-- Color for division is #3779B2 -->
				{{ trans("cities.".$retail->city) }}
			</div>
		</div>
	@endforeach
