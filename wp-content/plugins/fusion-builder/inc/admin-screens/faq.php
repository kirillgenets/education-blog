<?php
/**
 * Admin Screen markup (FAQ page).
 *
 * @package fusion-builder
 */

?>
<div class="wrap about-wrap fusion-builder-wrap">

	<?php Fusion_Builder_Admin::header(); ?>

	<?php if ( ! defined( 'ENVATO_HOSTED_SITE' ) ) : ?>
		<div class="fusion-builder-important-notice">
			<p class="about-description">
				<?php /* translators: Link attributes. */ ?>
				<?php printf( __( 'These are general frequently asked questions to help you get started. For more in-depth documentation, please visit our <a %s>online support center</a> to view documentation, knowledgebase and video tutorials.', 'fusion-builder' ), 'href="https://theme-fusion.com/support/" target="_blank"' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
			</p>
		</div>

		<div class="fusion-builder-admin-toggle">
			<div class="fusion-builder-admin-toggle-heading">
				<h3><?php esc_attr_e( 'What Is The Fusion Builder?', 'fusion-builder' ); ?></h3>
				<span class="fusion-builder-admin-toggle-icon fusion-plus"></span>
			</div>
			<div class="fusion-builder-admin-toggle-content">
				<?php esc_html_e( 'Fusion Builder is a plugin that allows you to visually build pages through an intuitive drag and drop interface. It is a WYSIWYG editor ( what you see is what you get ), allowing you to visually see what your page will look like while creating it.', 'fusion-builder' ); ?><br/><br/>
				<?php /* translators: Link attributes */ ?>
				<?php printf( __( 'When editing a page or post, simply click the "Fusion Builder Live" button to activate Fusion Builder for front-end editing with its intuitive and self-explanatory UI. See <a %s>Fusion Builder Live Workspace</a> doc for more information. Click "Fusion Builder" button to activate back-end version, you will see a page that explains all the basic controls and action icons that are included. The user interface has been created in a way that makes page building instinctive and will change your outlook on what a page builder can do. The codebase is clean and optimized providing you with a fast, efficient page builder that will save you time and is a joy to use.', 'fusion-builder' ), 'href="https://theme-fusion.com/documentation/fusion-builder/fusion-builder-live/the-fusion-builder-live-workspace/" target="_blank"' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
			</div>
		</div>

		<div class="fusion-builder-admin-toggle">
			<div class="fusion-builder-admin-toggle-heading">
				<h3><?php esc_attr_e( 'How Do I Get Support For The Fusion Builder?', 'fusion-builder' ); ?></h3>
				<span class="fusion-builder-admin-toggle-icon fusion-plus"></span>
			</div>
			<div class="fusion-builder-admin-toggle-content">
				<?php /* translators: Link attributes */ ?>
				<?php printf( __( 'Currently Fusion Builder is only offered with the Avada theme, so all support is handled through Avada\'s support center. <a %s">Sign up at our support center with these steps</a>, then submit a ticket for any questions you have and our team of experts will gladly help you.', 'fusion-builder' ), 'href="https://theme-fusion.com/documentation/avada/getting-started/avada-theme-support/" target="_blank"' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
			</div>
		</div>

		<div class="fusion-builder-admin-toggle">
			<div class="fusion-builder-admin-toggle-heading">
				<h3><?php esc_attr_e( 'Where Can I Find More Information About How To use The Fusion Builder?', 'fusion-builder' ); ?></h3>
				<span class="fusion-builder-admin-toggle-icon fusion-plus"></span>
			</div>
			<div class="fusion-builder-admin-toggle-content">
				<?php esc_attr_e( 'Fusion Builder has a complete set of documentation and growing video tutorial library. Both are stored on our company site in the support center, see the links below.', 'fusion-builder' ); ?>
				<ul>
				<?php /* translators: Link attributes. */ ?>
					<li><?php printf( __( '<a %s>Fusion Builder Documentation</a>', 'fusion-builder' ), 'href="https://theme-fusion.com/support/" target="_blank"' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></li>
					<?php /* translators: Link attributes. */ ?>
					<li><?php printf( __( '<a %s">Fusion Builder Video Tutorials</a>', 'fusion-builder' ), 'href="https://theme-fusion.com/documentation/fusion-builder/videos/" target="_blank"' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></li>
				</ul>
			</div>
		</div>
	<?php else : ?>
		<div class="fusion-builder-admin-toggle">
			<div class="fusion-builder-admin-toggle-heading">
				<h3><?php esc_attr_e( 'How Do I Get Support For The Fusion Builder?', 'fusion-builder' ); ?></h3>
				<span class="fusion-builder-admin-toggle-icon fusion-plus"></span>
			</div>
			<div class="fusion-builder-admin-toggle-content">
				<?php esc_attr_e( 'All support on Envato Hosted Platform is handled through Envato\'s WordPress experts, who have extensive experience with WordPress and can answer theme and required plugins related and also most general questions regarding WordPress. Specifically they can help you with the following:', 'fusion-builder' ); ?>
				<ul>
					<li><?php esc_html_e( 'Theme Installation & Setup.', 'fusion-builder' ); ?></li>
					<li><?php esc_html_e( 'Installation of bundled/required plugins.', 'fusion-builder' ); ?></li>
					<li><?php esc_html_e( 'Installation of included demo content.', 'fusion-builder' ); ?></li>
					<li><?php esc_html_e( 'Guidance with using Theme Options, Fusion Builder or navigating WordPress features.', 'fusion-builder' ); ?></li>
					<li><?php esc_html_e( 'Troubleshooting and diagnosing technical issues with your site.', 'fusion-builder' ); ?></li>
					<li><?php esc_html_e( 'Assistance with escalating or reporting theme-related bugs or issues.', 'fusion-builder' ); ?></li>
					<li><?php esc_html_e( 'Basic Customization.', 'fusion-builder' ); ?></li>
					<li><?php esc_html_e( 'Guidance on where to get help for third-party plugins or features.', 'fusion-builder' ); ?></li>
				</ul>
			</div>
		</div>

	<?php endif; ?>

	<div class="fusion-builder-admin-toggle">
		<div class="fusion-builder-admin-toggle-heading">
			<h3><?php esc_attr_e( 'What Is The Fusion Builder Library?', 'fusion-builder' ); ?></h3>
			<span class="fusion-builder-admin-toggle-icon fusion-plus"></span>
		</div>
		<div class="fusion-builder-admin-toggle-content">
			<?php esc_html_e( 'The Fusion Builder Library is where magic happens! The Library allows you to store all your saved content and reuse it at any time on any page or post. Each item you add to your page (container, columns, elements or even the full page template) can be saved individually via the "save" icon. Each item you saved automatically brings up the Fusion Builder Library window and sorts the content accordingly on each tab for easy organization.', 'fusion-builder' ); ?><br/><br/>
			<?php esc_html_e( 'The Library also allows you to import any single demo page from all of our Avada Demos. Please note: importing a single page from the Library is used for a skeleton layout, image, theme options and custom post types are not provided. For full demo imports, visit the "Avada > Import Demos" section.', 'fusion-builder' ); ?>
		</div>
	</div>

	<div class="fusion-builder-admin-toggle">
		<div class="fusion-builder-admin-toggle-heading">
			<h3><?php esc_attr_e( 'I Imported A Single Demo Page But It Looks Different, Why Is That?', 'fusion-builder' ); ?></h3>
			<span class="fusion-builder-admin-toggle-icon fusion-plus"></span>
		</div>
		<div class="fusion-builder-admin-toggle-content">
			<?php esc_html_e( 'Fusion Builder single demo page import can only import the skeleton layout, not an exact replica as seen on a live demo. When importing a single demo page, the items that import are the page layout, page template, fusion page options and image placeholders.', 'fusion-builder' ); ?><br/><br/>
			<?php /* translators: Link attributes. */ ?>
			<?php printf( __( 'Items that will not import due to technical limitations are Fusion Theme Options, Custom Post Types and Sliders. Since some items do not import, you may see differences in style and layout but they can be easily changed through Avada\'s <a %s">advanced options network</a>. If you wish to import everything from a demo, you can import the full demo on the Avada > Import Demos tab.', 'fusion-builder' ), 'href="https://theme-fusion.com/documentation/avada/options/how-options-work/" target="_blank"' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
		</div>
	</div>

	<div class="fusion-builder-admin-toggle">
		<div class="fusion-builder-admin-toggle-heading">
			<h3><?php esc_attr_e( 'How Do I Add More Containers or Columns?', 'fusion-builder' ); ?></h3>
			<span class="fusion-builder-admin-toggle-icon fusion-plus"></span>
		</div>
		<div class="fusion-builder-admin-toggle-content">
			<?php esc_html_e( 'Containers and Columns can be added while hovering over the content area of a container or column. When hovered over a content area, look in the bottom right corner of that section to see a "+ Container" and "+ Column" button. Adding a new container will add it directly below the active container. Adding more columns will add the columns inside the container you have active. This allows you to add new containers, columns and elements anywhere on the page.', 'fusion-builder' ); ?><br/><br/>
		</div>
	</div>

	<div class="fusion-builder-admin-toggle">
		<div class="fusion-builder-admin-toggle-heading">
			<h3><?php esc_attr_e( 'What Are Fusion Builder Add-ons?', 'fusion-builder' ); ?></h3>
			<span class="fusion-builder-admin-toggle-icon fusion-plus"></span>
		</div>
		<div class="fusion-builder-admin-toggle-content">
			<?php /* translators: Link attributes. */ ?>
			<?php printf( __( 'Fusion Builder has been built for extendability and for future development. Add-ons are small extensions that provide extra features when using the Fusion Builder. Currently the available add-ons list is small, but developers across the marketplace are creating new ones. As they become available, you will see them displayed on the "Fusion Builder > Add-ons" tab. If you wish to create an add on, please see our <a %s">developer documentation</a>.', 'fusion-builder' ), 'href="https://theme-fusion.com/documentation/fusion-builder/api/" target="_blank"' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
		</div>
	</div>

	<div class="fusion-builder-admin-toggle">
		<div class="fusion-builder-admin-toggle-heading">
			<h3><?php esc_attr_e( 'Why Can\'t I See The Avada Demo Pages Through The Fusion Builder Library Tab?', 'fusion-builder' ); ?></h3>
			<span class="fusion-builder-admin-toggle-icon fusion-plus"></span>
		</div>
		<div class="fusion-builder-admin-toggle-content">
			<?php /* translators: Link attributes. */ ?>
			<?php printf( __( 'The Avada demo pages can only be used after registering your product. You can do this on the <a %s>Product Registration</a> tab in the Avada Welcome Screen area.', 'fusion-builder' ), 'href="' . admin_url( 'admin.php?page=avada-registration' ) . '" target="_blank"' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
		</div>
	</div>

	<?php Fusion_Builder_Admin::footer(); ?>
</div>
