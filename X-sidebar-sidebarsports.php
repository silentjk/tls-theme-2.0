				<div id="sidebar2" class="fluid-sidebar sidebar col-md-4" role="complementary">
				
					<?php if ( is_active_sidebar( 'sidebarsports' ) ) : ?>

						<?php dynamic_sidebar( 'sidebarsports' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert alert-message">
						
							<p><?php _e("Please activate some Widgets","bonestheme"); ?>.</p>
						
						</div>

					<?php endif; ?>

				</div>