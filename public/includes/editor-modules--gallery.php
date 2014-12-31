<?php

/**
*
*	Build the gallery creation and management area shown in panel
*
*/
function aesop_gallery_editor_module(){

	ob_start();

	?>

	<div id="aesop-editor--gallery__edit">

		<label>Manage Images 
			<a href="#" id="ase-gallery-add-image" class="aesop-editor-tiny-btn" title="Add Images"><span class="aesop-icon-pencil"></span></a>
			<a href="#" id="aesop-editor--gallery__create" class="aesop-editor-tiny-btn" title="Create Gallery"><span class="aesop-icon-plus"></span></a>
		</label>
		<small class="aesop-option-desc">Rearrange or edit the images in this gallery.</small>
		<div id="aesop-editor--gallery__images"><span class="aesop-icon-spinner6"></span></div>

	</div>

	<!-- Show this when Create New Gallery clicked above -->
	<div style="display:none;" id="aesop-editor--gallery__upload">

		<a href="#">Select Images</a>

		<a style="display:none;" id="aesop-editor--gallery__save" href="#">Save Gallery</a>

	</div>

	<!-- Push gallery id's here -->
	<input type="hidden" id="ase_gallery_ids" name="ase_gallery_ids" value="">

	<?php

	return ob_get_clean();
}