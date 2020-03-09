<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
    integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
	<fieldset class="fieldset">
		<label>
			<input type="search" class="search-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		<button class="search-submit">
		<i class="fa fa-search"></i>

		</button>
	</fieldset>
</form>
