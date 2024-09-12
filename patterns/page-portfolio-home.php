<?php
/**
 * Title: Portfolio Homepage
 * Slug: twentytwentyfive/page-portfolio-home
 * Categories: twentytwentyfive_page, posts, featured
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 * Description: A portfolio homepage pattern.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull">
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--50)">
			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">
				<!-- wp:heading {"level":1,"align":"wide","fontSize":"x-large"} -->
				<h1 class="wp-block-heading alignwide has-x-large-font-size">My name is Anna Möller and these are some of my photo projects.</h1>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">
				<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
				<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"66.66%"} -->
			<div class="wp-block-column" style="flex-basis:66.66%">
				<!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"layout":{"type":"default"}} -->
				<div class="wp-block-query">
					<!-- wp:post-template -->
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
						<div class="wp-block-group">
							<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

							<!-- wp:post-title {"isLink":true} /-->

							<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}}} /-->
						</div>
						<!-- /wp:group -->
					<!-- /wp:post-template -->

					<!-- wp:query-no-results -->
					<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
					<p>No posts were found.</p>
					<!-- /wp:paragraph -->
					<!-- /wp:query-no-results -->
				</div>
				<!-- /wp:query -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%">
				<!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"layout":{"type":"default"}} -->
				<div class="wp-block-query">
					<!-- wp:post-template -->
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
						<div class="wp-block-group">
							<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

							<!-- wp:post-title {"isLink":true} /-->

							<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}}} /-->
						</div>
						<!-- /wp:group -->
					<!-- /wp:post-template -->

					<!-- wp:query-no-results -->
					<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
					<p>No posts were found.</p>
					<!-- /wp:paragraph -->
					<!-- /wp:query-no-results -->
				</div>
				<!-- /wp:query -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:spacer {"height":"var:preset|spacing|70"} -->
		<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":"2","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-query alignwide">
			<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":3}} -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

					<!-- wp:post-title {"isLink":true} /-->

					<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}}} /-->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->

			<!-- wp:query-no-results -->
			<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
			<p>No posts were found.</p>
			<!-- /wp:paragraph -->
			<!-- /wp:query-no-results -->
		</div>
		<!-- /wp:query -->

		<!-- wp:spacer {"height":"var:preset|spacing|70"} -->
		<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%">
				<!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":"5","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"layout":{"type":"default"}} -->
				<div class="wp-block-query">
					<!-- wp:post-template -->
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
						<div class="wp-block-group">
							<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

							<!-- wp:post-title {"isLink":true} /-->

							<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}}} /-->
						</div>
						<!-- /wp:group -->
					<!-- /wp:post-template -->

					<!-- wp:query-no-results -->
					<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
					<p>No posts were found.</p>
					<!-- /wp:paragraph -->
					<!-- /wp:query-no-results -->
				</div>
				<!-- /wp:query -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"66.66%"} -->
			<div class="wp-block-column" style="flex-basis:66.66%">
				<!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":"6","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"layout":{"type":"default"}} -->
				<div class="wp-block-query">
					<!-- wp:post-template -->
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
						<div class="wp-block-group">
							<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

							<!-- wp:post-title {"isLink":true} /-->

							<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}}} /-->
						</div>
						<!-- /wp:group -->
					<!-- /wp:post-template -->

					<!-- wp:query-no-results -->
					<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
					<p>No posts were found.</p>
					<!-- /wp:paragraph -->
					<!-- /wp:query-no-results -->
				</div>
				<!-- /wp:query -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:spacer {"height":"var:preset|spacing|70"} -->
		<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":"7","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-query alignwide">
			<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":3}} -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

					<!-- wp:post-title {"isLink":true} /-->

					<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}}} /-->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->

			<!-- wp:query-no-results -->
			<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
			<p>No posts were found.</p>
			<!-- /wp:paragraph -->
			<!-- /wp:query-no-results -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->

	<!-- wp:separator {"align":"full"} -->
	<hr class="wp-block-separator alignfull has-alpha-channel-opacity"/>
	<!-- /wp:separator -->

	<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
	<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small"} -->
			<p class="has-primary-color has-text-color has-link-color has-small-font-size">© 2025</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">email@example.com<br>+1 555 349 1806</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->