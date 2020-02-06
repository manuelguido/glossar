<!-- Modal -->
<div class="modal fade mt-5" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="h5" id="exampleModalLabel">{{$modal_title}}</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row py-4">
					<div class="col-3 text-center pt-2">
						@php
						if(!isset($modal_icon))
							$modal_icon="fas fa-exclamation-triangle";
						@endphp
						<i class="{{$modal_icon}} fa-2x black5"></i>
					</div>
					<div class="col-9">
						<span class="w500 h6">{!!$modal_message!!}<span>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-blue-grey btn-sm" data-dismiss="modal">Cancel</button>
				<a href="{{$modal_link}}" type="button" class="btn btn-primary btn-sm">Accept</a>
			</div>
		</div>
	</div>
</div>