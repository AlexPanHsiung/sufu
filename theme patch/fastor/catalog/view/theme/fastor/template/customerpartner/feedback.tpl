<?php if ($feedbacks) { ?>
	<?php foreach ($feedbacks as $feedback) { ?>

	<div class="review-container">
		<div class="review-detail-container">
		    <div class="review-container-left-panel">
		      <div class="reviewer-name">
		        <?php echo $feedback['nickname']; ?>
		      </div>
		      <div class="review-date">
		        <?php echo $feedback['createdate']; ?>
		      </div>
		    </div>
	    	<div class="review-border"></div>
		    <div class="review-container-right-panel">
		      <div class="review-content">
		        <?php echo $feedback['review']; ?>
		      </div>
		    </div>
		</div>
	    <div class="review-seller-rating">
				<?php if(isset($review_fields) && $review_fields){
					foreach($review_fields AS $review_field){ ?>
						<div class="rating-price actual-seller-rating">
							<div class="text-container">
						    <?php echo $review_field['field_name']; ?>
						  </div>
							<div class="rating-container">
									<?php for ($i = 1; $i <= $feedback['review_attributes'][$review_field['field_id']]; $i++) { ?>
						      	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
						      <?php } ?>
						      <?php for ($j = 1; $j <= 5 - $feedback['review_attributes'][$review_field['field_id']]; $j++) { ?>
						      	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
						  		<?php } ?>
							</div>
						</div>
					<?php }
				} ?>
	    </div>
  	</div>
	<?php } ?>
	<div class="text-right"><?php echo $results; ?></div>

<?php } else { ?>
	<div class="mp-no-location-found text-danger"><?php echo $text_no_feedbacks; ?></div>
<?php } ?>
